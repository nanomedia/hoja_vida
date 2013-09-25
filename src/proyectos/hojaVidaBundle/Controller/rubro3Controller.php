<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class rubro3Controller extends Controller {
    
     
    /**
     * @Route("/rubro3_1/{codigo}",name="_rubro3_1")
     */
    public function rubro3_1Action($codigo){
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:MovimientoMigratorio ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $rubro3 = $query->getResult();
        $data = array();
        $i = 0;
        foreach ($rubro3 as $dp){    
            
            $data[$i]["TIPO"]=$dp->getTipo();                         
            $data[$i]["FECHA"]  =  $dp->getFecha();                     
            $data[$i]["DESTINO_PROCEDENCIA"]  =  $dp->getDestinoProcedencia();                     
            
            $i++;                                           
        }
        
        return $this->render('hojaVidaBundle:update_formularios:frm_update_rubro3_1.html.twig', array("info_reg" => $data));
    }
    
    
    /**
     * @Route("/upRubro4",name="_up_rubro4")
     */
    public function rubro3_1updateAction(Request $request){
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionOficinas inf where inf.idOficina="1" and inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $rubro4 = $query->getResult();
        $dpo = $rubro4[0];
        $dpo->setEstadoAudt(2);
        $em->persist($dpo);
        $em->flush();
        
        $m = new Mantenimiento();
        $m->insertarInformacionRegistroDe($this, $request);
        return $this->redirect($this->generateUrl('_rubro4', array('codigo' => $codigo)));
        

    }
    
            
            
            
    
    
    /**
     * @Route("/rubro3_2/{codigo}",name="_rubro3_2")
     */
    public function rubro3_2Action($codigo){
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:MovimientoMigratorio ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $rubro3 = $query->getResult();
        $data = array();
        $i = 0;
        foreach ($rubro3 as $dp){    
            
            $data[$i]["TIPO"]=$dp->getTipo();                         
            $data[$i]["FECHA"]  =  $dp->getFecha();                     
            $data[$i]["DESTINO_PROCEDENCIA"]  =  $dp->getDestinoProcedencia();                     
            
            $i++;                                           
        }
        
        return $this->render('hojaVidaBundle:update_formularios:frm_update_rubro4.html.twig', array("info_reg" => $data));
    }
    
    
    /**
     * @Route("/upRubro4",name="_up_rubro4")
     */
    public function rubro3_updateAction(Request $request){
        $codigo = $request->request->get("id_pos");
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT inf FROM hojaVidaBundle:InformacionOficinas inf where inf.idOficina="1" and inf.pkDatPostulante=' . $codigo . ' and inf.estadoAudt=1');
        $rubro4 = $query->getResult();
        $dpo = $rubro4[0];
        $dpo->setEstadoAudt(2);
        $em->persist($dpo);
        $em->flush();
        
        $m = new Mantenimiento();
        $m->insertarInformacionRegistroDe($this, $request);
        return $this->redirect($this->generateUrl('_rubro4', array('codigo' => $codigo)));
        

    }
    
  
    
    
}

?>
