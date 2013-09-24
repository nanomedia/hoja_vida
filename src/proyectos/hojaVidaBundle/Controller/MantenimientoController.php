<?php

namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use proyectos\hojaVidaBundle\Util\Mantenimiento;
use proyectos\hojaVidaBundle\Util\Actualizacion;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
class MantenimientoController extends Controller {

    /**
     * @Route("/index/{dni}",name="_index")
     */
    public function indexAction($dni){
       
        
        $cn = $this->getDoctrine()->getConnection("DB_CURRICULO");
        $sql = "SELECT dni,nombre,apellido FROM s_usuario where dni='".$dni."'";
        $query = $cn->prepare($sql); 
        $query->execute(); 
        $user = $query->fetch(); 
               
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");

        $query = $em->createQuery('SELECT u FROM hojaVidaBundle:Universidades u');
        $universidades = $query->getResult();
        $option = "<option value='0'>-ELEGIR-</option>";
        foreach ($universidades as $value) {
            $option .= "<option value='" . $value->getIdUniv() . "'>" . $value->getNombreUniv() . "</option>";
        }

        $query2 = $em->createQuery('SELECT c FROM hojaVidaBundle:ColegiosProfesionales c');
        $colegio = $query2->getResult();
        $option2 = "<option value='0'>-ELEGIR-</option>";
        foreach ($colegio as $value) {
            $option2 .= "<option value='" . $value->getIdColegio() . "'>" . $value->getNombreColegio() . "</option>";
        }

        $data = array("dni" => $dni, "univ" => $option, "col" => $option2,"datos_personales"=>$user);
        return $this->render('hojaVidaBundle:principal:index.html.twig', $data);
    }

    /**
     * @Route("/home",name="_home")
     */
    public function homeAction() {
        return $this->render('hojaVidaBundle:principal:home.html.twig');
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

    /**
     * @Route("/infojuefis",name="_infojuefis")
     */
    public function insertarinfojuefis(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarinfojuefis($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/direcproc",name="_direcproc")
     */
    public function insertardirecproc(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertardirecproc($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/infocolegio",name="_infocolegio")
     */
    public function insertarinfocolegio(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarinfo_colegio($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/info_patrimonial",name="_info_patrimonial")
     */
    public function insertarinfo_patrimonial(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarinfo_patrimonial($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/mov_migratorio",name="_mov_migratorio")
     */
    public function insertarmov_migratorio(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarMovimientoMigratorio($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/info_camara",name="_info_camara")
     */
    public function insertarInformacionCamaInfo(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarInformacionCamaInfo($this, $request);
        return new Response($res);
    }

    /**
     * @Route("/info_registro",name="_info_registro")
     */
    public function insertarInformacionRegistroDe(Request $request) {
        $m = new Mantenimiento();
        $res = $m->insertarInformacionRegistroDe($this, $request);
        return new Response($res);
    }

}
