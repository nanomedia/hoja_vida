<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Ps\PdfBundle\Annotation\Pdf;

class reporteController extends Controller {

  
    /**
     * @Pdf()
     * @Route("/pdf/{codigo}", name="_pdf")
     */
    public function pdfAction($codigo) {
        /*
         * https://github.com/psliwa/PHPPdf#intro
         */
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();


        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        
                
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:DatosPostulante ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $DatosPostulante = $query->getResult();
        
        
        
//        $query1 = $em->createQuery('SELECT ddp FROM hojaVidaBundle:ConvocatoriasAnteriores ddp where ddp.pkDatPostulante=' . $codigo . 'and ddp.estadoAudt=1');
//        $dpostul_rep = $query1->getResult();
//        
        
        $this->render('hojaVidaBundle:update_formularios:reporte.pdf.twig', array("DatosPostulante" => $DatosPostulante), $response);
        $xml = $response->getContent();
        $content = $facade->render($xml);

        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }

}

?>
