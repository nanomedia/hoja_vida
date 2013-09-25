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
            $cbo.="<option value='" . $i . "' ".$selected.">" . $data[$i] . "</option>";
        }
        return $cbo;
    }
    
    public function cboCalificacion($codigo) {
        $data = array("-ELEGIR-", "Penal", "Civil", "Contencioso", "Contencioso", "Laboral");
        $cbo = "";

        for ($i = 0; $i < count($data); $i++) {
            $selected = "";
            if ($i == $codigo) {
                $selected = "selected";
            }
            $cbo.="<option value='" . $i . "' ".$selected.">" . $data[$i] . "</option>";
        }
        return $cbo;
    }
    

}

?>
