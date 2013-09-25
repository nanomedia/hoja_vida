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

            $option_year .= "<option " . $selected . " value='" . $anio . "'>" . $anio . "</option>";
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

}

?>
