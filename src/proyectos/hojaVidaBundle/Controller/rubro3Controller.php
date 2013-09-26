<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class rubro3Controller extends Controller {
    
     
    /**
     * @Route("/rubro3/{codigo}",name="_rubro3_1")
     */
    public function rubro3_1Action($codigo){
        $em = $this->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Ingresos ddp where ddp.pkDatPostulante=' . $codigo . ' and ddp.estadoAudt=1');
        $rubro3 = $query->getResult();
        $Ingre = array();             
        $i = 0;                       
        foreach ($rubro3 as $dp){
            $boton = '<input class="remove_dec_bienes_rentas menos" type="button" value="-">';
            if ($i == 0){$boton = "";}                                                        
            $Ingre[$i]["anio"]=$dp->getAnoEje();                                                
            $Ingre[$i]["DESCRIPCION"] = $dp->getDescripcion();                                
            $Ingre[$i]["VALOR"]  =  $dp->getValor();                                         
            $Ingre[$i]["boton"]  =  $boton;                                               
            $i++;                                           
        }
        
        
        $queryC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:OtrosIngresos ddp where ddp.pkDatPostulante='.$codigo .' and ddp.estadoAudt=1');
        $rubro3_1 = $queryC->getResult();
        $Otrosin = array();
        $iC = 0;
        foreach ($rubro3_1 as $dC){
	    $boton3 = '<div id="add_otros_ing" class="menos remove_otros_ing">-</div>';
            if ($iC == 0) {$boton3 = "";}
            $Otrosin[$iC]["Num"] = ($iC+1);
            $Otrosin[$iC]["Descripcion"] = $dC->getDescripcion();
            $Otrosin[$iC]["Monto"] = $dC->getMonto();                       
	    $Otrosin[$iC]["boton"] = $boton3;
            $iC++;
        }
        
        $queryA = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Patrimonio ddp where ddp.tipoPatrimonio=1 and ddp.pkDatPostulante='.$codigo.'and ddp.estadoAudt=1');
        $dpostul = $queryA->getResult();
        $Immobi1 = array();
        $iD = 0;
        foreach ($dpostul as $dpD) {
		$boton3 = '<input type="button" class="remove_bienes_inmuebles menos" value="-">';
		if ($iD == 0){ $boton3 = ""; }

            $Immobi1[$iD]["Num"] = ($iD+1);
            $Immobi1[$iD]["TipoBien"] = $dpD->getTipoBien();
            $Immobi1[$iD]["Ubicacion"] = $dpD->getUbicacion();
            $Immobi1[$iD]["Fecha"] = $dpD->getFecha();
            $Immobi1[$iD]["Monto"] = $dpD->getMonto();			
	    $Immobi1[$iD]["boton"] = $boton3;
            $iD++;
        }
                
        $queryB = $em->createQuery('SELECT ddp FROM hojaVidaBundle:Patrimonio ddp where ddp.tipoPatrimonio=2 and ddp.pkDatPostulante='.$codigo.'and ddp.estadoAudt=1');
        $dpostul = $queryB->getResult();
        $Immobi2 = array();
        $iD = 0;
        foreach ($dpostul as $dpD) {
		$boton3 = '<input type="button" class="rem_bienes_muebles menos" value="-">';
		if ($iD == 0){ $boton3 = ""; }

            $Immobi2[$iD]["Num"] = ($iD+1);
            $Immobi2[$iD]["TipoBien"] = $dpD->getTipoBien();
            $Immobi2[$iD]["Ubicacion"] = $dpD->getUbicacion();
            $Immobi2[$iD]["Fecha"] = $dpD->getFecha();
            $Immobi2[$iD]["Monto"] = $dpD->getMonto();			
	    $Immobi2[$iD]["boton"] = $boton3;
            $iD++;
        }
        
         $queryC = $em->createQuery('SELECT ddp FROM hojaVidaBundle:PatrimonioOtros ddp where ddp.pkDatPostulante='.$codigo.'and ddp.estadoAudt=1');
        $dpostul = $queryC->getResult();
        $Patriotr = array();
        $iD = 0;
        foreach ($dpostul as $dpD) {
		$boton3 = '<input type="button" class="remove_otros_bienes menos" value="-">';
		if ($iD == 0){ $boton3 = ""; }

            $Patriotr[$iD]["Num"]=($iD+1);
            $Patriotr[$iD]["Descripcion"] = $dpD->getDescripcion();
            $Patriotr[$iD]["Valor"] = $dpD->getValor();  	
	    $Patriotr[$iD]["boton"] = $boton3;
            $iD++;
        }
        
      // PatrimonioOtros
      // SistemaFinanciero
      // Acreencias
          
        //Ingresos
        //otros_ingresos                        Otros Ingresos:
        //patrimonio                    muebles tipo1       immuebles tipo2 
        //patrimonio_otros                         otros bines
        //sistema_financiero                     Sistema Financiero   
        //acreencias                             Acreencias y Obligaciones a su cargo
        
        return $this->render('hojaVidaBundle:update_formularios:frm_update_rubro3_1.html.twig',
                array("ingre" => $Ingre,
                    "otrosin"=>$Otrosin,
                    "patrimonio"=>$Immobi1,
                    "patrimonio2"=>$Immobi2,
                    "patrimoniotros"=>$Patriotr) );
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
