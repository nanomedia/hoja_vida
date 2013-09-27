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
     * @Route("/pdf", name="_pdf")
     */
    public function pdfAction() {
        /*
         * https://github.com/psliwa/PHPPdf#intro
         */
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();

//        $DB_CONFLICTOS_SOCIALES = $this->getDoctrine()->getConnection("DB_CONFLICTOS_SOCIALES");
//        $sql2 = "select region_id, region_nombre, region_variable from region";
//        $query2 = $DB_CONFLICTOS_SOCIALES->prepare($sql2);
//        $query2->execute();
//        $regiones = $query2->fetchAll();



        $this->render('hojaVidaBundle:update_formularios:reporte.pdf.twig', array("name" => "luis"), $response);
        $xml = $response->getContent();
        $content = $facade->render($xml);

        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }

}

?>
