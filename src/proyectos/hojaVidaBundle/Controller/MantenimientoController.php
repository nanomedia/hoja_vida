<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use proyectos\hojaVidaBundle\Util\Mantenimiento;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MantenimientoController extends Controller {

    /**
     * @Route("/index",name="_index")
     */
    public function indexAction() {

        return $this->render('hojaVidaBundle:principal:index.html.twig');
    }

    /**
     * @Route("/newDatosPersonales",name="_newDatosPersonales")
     */
    public function insertarDatosPersonales(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarDatosPersonales($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/newDatosPostulante",name="_newDatosPostulante")
     */
    public function insertarDatosPostulante(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarDatosPostulante($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/newDatosAcademicos",name="_newDatosAcademicos")
     */
    public function insertarDatosAcademicos(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarDatosAcademicos($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/newExpProfesional",name="_newExpProfesional")
     */
    public function insertarExpProfesional(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarExpProfesional($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/newConducta",name="_newConducta")
     */
    public function insertarConducta(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarConducta($this, $request);
        return new Response($res);
    }

}
