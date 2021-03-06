<?php

namespace proyectos\hojaVidaBundle\Util;

class cargaCombosUpdate {

    public function cboEspecialidad($codigo) {
        $data = array("-ELEGIR-", "Penal", "Civil", "Contencioso", "Contencioso", "Laboral");
        $cbo = "";

        for ($i = 0; $i < count($data); $i++) {
            $selected = "";
            if ($i == $codigo) {
                $selected = "selected";
            }
            $cbo.="<option value='" . $i . "' " . $selected . ">" . $data[$i] . "</option>";
        }
        return $cbo;
    }

    public function cboAnio($codigo) {
        $option_year = "<option value='0'>-ELEGIR-</option>";
        $anio = date("Y");
        $ini = $anio - 60;

        for ($anio; $anio > $ini; $anio--) {
            $selected = "";
            if ($anio == $codigo) {
                $selected = "selected";
            }

            $option_year .= "<option " . $selected . " values='" . $anio . "'>" . $anio . "</option>";
        }
        return $option_year;
    }

    public function cboCalificacion($codigo) {
        $opt = array("-ELEGIR-");
        for ($i = 1; $i <= 20; $i++) {
            array_push($opt, $i);
        }
        array_push($opt, "NP");
        array_push($opt, "EXP");


        $combo = "";
        for ($i = 0; $i < count($opt); $i++) {
            $selected = "";
            if ($i == $codigo) {
                $selected = "selected";
            }

            $combo.="<option " . $selected . " value='" . $i . "'>" . $opt[$i] . "</option>";
        }
        return $combo;
    }

    public function cboUniversidad($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT u FROM hojaVidaBundle:Universidades u');

        $universidades = $query->getResult();

        $option = "<option value='0'>-ELEGIR-</option>";

        foreach ($universidades as $value) {
            $selected = "";
            if ($value->getIdUniv() == $codigo) {
                $selected = "selected";
            }
            $option .= "<option $selected value='" . $value->getIdUniv() . "'>" . $value->getNombreUniv() . "</option>";
        }
        return $option;
    }

    public function cboColegio($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        $query = $em->createQuery('SELECT u FROM hojaVidaBundle:ColegiosProfesionales u');

        $universidades = $query->getResult();

        $option = "<option value='0'>-ELEGIR-</option>";

        foreach ($universidades as $value) {
            $selected = "";
            if ($value->getIdColegio() == $codigo) {
                $selected = "selected";
            }
            $option .= "<option $selected value='" . $value->getIdColegio() . "'>" . $value->getNombreColegio() . "</option>";
        }
        return $option;
    }

    public function cboCondicion($codigo) {
        $data = array("-ELEGIR-", "Nombrado", "Contratado");
        $cbo = "";

        for ($i = 0; $i < count($data); $i++) {
            $selected = "";
            if ($i == $codigo) {
                $selected = "selected";
            }
            $cbo.="<option value='" . $i . "' " . $selected . ">" . $data[$i] . "</option>";
        }
        return $cbo;
    }

    public function cboCategoria($codigo) {
        $data = array("-ELEGIR-", "Principal", "Asociado", "Auxiliar");
        $cbo = "";

        for ($i = 0; $i < count($data); $i++) {
            $selected = "";
            if ($i == $codigo) {
                $selected = "selected";
            }
            $cbo.="<option value='" . $i . "' " . $selected . ">" . $data[$i] . "</option>";
        }
        return $cbo;
    }

    public function cboProdJurFiscal($codigo) {
        $data = array("-ELEGIR-", "Poder Judicial", "Ministerio Publico");
        $cbo = "";

        for ($i = 0; $i < count($data); $i++) {
            $selected = "";
            if ($i == $codigo) {
                $selected = "selected";
            }
            $cbo.="<option value='" . $i . "' " . $selected . ">" . $data[$i] . "</option>";
        }
        return $cbo;
    }

    public function cboPuestos($codigo) {
        $data = array("-ELEGIR-", "PRIMER PUESTO", "QUINTO SUPERIOR", "TERCER PUESTO");
        $cbo = "";

        for ($i = 0; $i < count($data); $i++) {
            $selected = "";
            if ($i == $codigo) {
                $selected = "selected";
            }
            $cbo.="<option value='" . $i . "' " . $selected . ">" . $data[$i] . "</option>";
        }
        return $cbo;
    }

    public function cboNiveles($codigo) {
        $data = array("-ELEGIR-", "TITULADO", "EGRESADO", "ESTUDIOS INCOMPLETOS");
        $cbo = "";

        for ($i = 0; $i < count($data); $i++) {
            $selected = "";
            if ($i == $codigo) {
                $selected = "selected";
            }
            $cbo.="<option value='" . $i . "' " . $selected . ">" . $data[$i] . "</option>";
        }
        return $cbo;
    }

    public function MuestraUniv($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        if ($codigo != 0) {
            $query = $em->createQuery('SELECT uni FROM hojaVidaBundle:Universidades uni where uni.idUniv=' . $codigo);
            $Universidades = $query->getResult();
            $univ = $Universidades[0]->getNombreUniv();

            return $univ;
        } else {

            return "No Selecciono";
        }
    }

    public function MuestraColegio($c, $codigo) {
        $em = $c->getDoctrine()->getEntityManager("ENTITY_DB_HOJA_VIDA");
        if ($codigo != 0) {
            $query = $em->createQuery('SELECT cole FROM hojaVidaBundle:ColegiosProfesionales cole where cole.idColegio=' . $codigo);
            $colegios = $query->getResult();
            $cole = $colegios[0]->getNombreColegio();
            return $cole;
        } else {
            return "No Selecciono";
        }
    }

}

?>
