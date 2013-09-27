<?php
namespace proyectos\hojaVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class infoPatrimonialController extends Controller {
    
     
    /**
     * @Route("/frm_updateInfoPatrimonial/{codigo}",name="_frm_updateInfoPatrimonial")
     */
    public function infoPatrimonialAction($codigo){
        
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
        
        
        $queryC = $em->createQuery('SELECT aaa FROM hojaVidaBundle:OtrosIngresos aaa where aaa.pkDatPostulante='.$codigo .' and aaa.estadoAudt=1');
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
        
        $queryA = $em->createQuery('SELECT bbb FROM hojaVidaBundle:Patrimonio bbb where bbb.tipoPatrimonio=1 and bbb.pkDatPostulante='.$codigo.'and bbb.estadoAudt=1');
        $dpostul = $queryA->getResult();
        $Immobi1 = array();
        $ia = 0;
        foreach ($dpostul as $dp1) {
		$boton3 = '<input type="button" class="remove_bienes_inmuebles menos" value="-">';
		if ($ia == 0){ $boton3 = ""; }

            $Immobi1[$ia]["Num"] = ($ia+1);
            $Immobi1[$ia]["TipoBien"] = $dp1->getTipoBien();
            $Immobi1[$ia]["Ubicacion"] = $dp1->getUbicacion();
            $Immobi1[$ia]["Fecha"] = $dp1->getFecha();
            $Immobi1[$ia]["Monto"] = $dp1->getMonto();			
	    $Immobi1[$ia]["boton"] = $boton3;
            $ia++;
        }
                
        $queryB = $em->createQuery('SELECT ccc FROM hojaVidaBundle:Patrimonio ccc where ccc.tipoPatrimonio=2 and ccc.pkDatPostulante='.$codigo.'and ccc.estadoAudt=1');
        $dpo = $queryB->getResult();
        $Immobi2 = array();
        $iE = 0;
        foreach ($dpo as $dp2) {
		$boton3 = '<input type="button" class="rem_bienes_muebles menos" value="-">';
		if ($iE == 0){ $boton3 = ""; }

            $Immobi2[$iE]["Num"] = ($iE+1);
            $Immobi2[$iE]["TipoBien"] = $dp2->getTipoBien();
            $Immobi2[$iE]["Ubicacion"] = $dp2->getUbicacion();
            $Immobi2[$iE]["Fecha"] = $dp2->getFecha();
            $Immobi2[$iE]["Monto"] = $dp2->getMonto();			
	    $Immobi2[$iE]["boton"] = $boton3;
            $iE++;
        }
        
        $queC = $em->createQuery('SELECT ddd FROM hojaVidaBundle:PatrimonioOtros ddd where ddd.pkDatPostulante='.$codigo.'and ddd.estadoAudt=1');
        $dpatri = $queC->getResult();
        $Patriotr = array();
        $iD = 0;
        foreach ($dpatri as $dp3) {
		$boton3 = '<input type="button" class="remove_otros_bienes menos" value="-">';
		if ($iD == 0){ $boton3 = ""; }

            $Patriotr[$iD]["Num"]=($iD+1);
            $Patriotr[$iD]["Descripcion"] = $dp3->getDescripcion();
            $Patriotr[$iD]["Valor"] = $dp3->getValor();  	
	    $Patriotr[$iD]["boton"] = $boton3;
            $iD++;
        }
        
        
        $que = $em->createQuery('SELECT eee FROM hojaVidaBundle:SistemaFinanciero eee where eee.pkDatPostulante='.$codigo.'and eee.estadoAudt=1');
        $dpfi = $que->getResult();
        $Financi = array();
        $iF = 0;
        foreach ($dpfi as $dp4) {
		$boton3 = '<input type="button" class="remove_sistema_financiero menos" value="-">';
		if ($iF == 0){ $boton3 = ""; }

            $Financi[$iF]["Num"]=($iF+1);
            $Financi[$iF]["Clase"] = $dp4->getClase();
            $Financi[$iF]["Entidad"] = $dp4->getEntidad();  
            $Financi[$iF]["Valor"] = $dp4->getValor();
	    $Financi[$iF]["boton"] = $boton3;
            $iF++;
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
        
        return $this->render('hojaVidaBundle:update_formularios:frm_updateInfoPatrimonial.html.twig',
                array(
                    "codigo"=>$codigo,
                    "ingre" => $Ingre,
                    "otrosin"=>$Otrosin,
                    "patrimonio"=>$Immobi1,
                    "patrimonio2"=>$Immobi2,
                    "patrimoniotros"=>$Patriotr,
                    "financiero"=>$Financi) );
    }
    
     
     
  
    
    
}

?>
