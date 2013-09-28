<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Ps\PdfBundle\Annotation\Pdf;
use proyectos\hojaVidaBundle\Util\cargaCombosUpdate;

class reporteController extends Controller {

    /**
     * @Pdf()
     * @Route("/pdf/{codigo}", name="_pdf")
     */
    public function pdfAction($codigo) {
        /*
         * https://github.com/psliwa/PHPPdf#intro
         */
        $cbo = new cargaCombosUpdate();

        $facade = $this->get('ps_pdf.facade');
        $response = new Response();


        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");

//      DatosPostulante
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:DatosPostulante ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $DatosPostulante = $query->getResult();

//      ConvocatoriasAnteriores
        $query1 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ConvocatoriasAnteriores ddp where ddp.pkDatPostulante=' . $codigo . 'and ddp.estadoAudt=1');
        $ConvocatoriasAnteriores = $query1->getResult();


//      DatosAcademicos
        $query2 = $em->createQuery('SELECT da FROM hojaVidaBundle:DatosAcademicos da where da.pkDatPostulante=' . $codigo . 'and da.estadoAudt=1');
        $DatosAcademicos = $query2->getResult();

        $dt = $DatosAcademicos[0];
        $univ = $cbo->MuestraUniv($this, $dt->getUnivProcedencia());
        $cole = $cbo->MuestraColegio($this, $dt->getColegioProfesional());


        $data = array(
            "DatosPostulante" => $DatosPostulante[0],
            "ConvocatoriasAnteriores" => $ConvocatoriasAnteriores,
            "DatosAcademicos" => $DatosAcademicos[0],
            "daUniv" => $univ,
            "daCole" => $cole,
        );



















        $this->render('hojaVidaBundle:update_formularios:reporte.pdf.twig', $data, $response);
        $xml = $response->getContent();
        $content = $facade->render($xml);

        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }

}

?>
