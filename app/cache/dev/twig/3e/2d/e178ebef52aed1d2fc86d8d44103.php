<?php

/* hojaVidaBundle:principal:index.html.twig */
class __TwigTemplate_3e2de178ebef52aed1d2fc86d8d44103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("hojaVidaBundle:plantillas:index.html.twig");

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "hojaVidaBundle:plantillas:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/bundles/hoja_vida/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jValidate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/plugins/jquery_numeric/jquery.numeric.js"), "html", null, true);
        echo "\"></script>

<script>

    \$(document).ready(function() {

        ";
        // line 14
        $this->env->loadTemplate("hojaVidaBundle:js:util.html.twig")->display($context);
        // line 15
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js:frm_datos_personales.html.twig")->display($context);
        // line 16
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js:frm_datos_postulante.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js:frm_datos_academicos.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js:frm_exp_profesional.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js:frm_info_patrimonial.html.twig")->display($context);
        // line 20
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js/conducta:procesos_judiciales.html.twig")->display($context);
        // line 21
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js/conducta:procesos_administrativos.html.twig")->display($context);
        // line 22
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js/conducta:procesos_PJudicial.html.twig")->display($context);
        // line 23
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js/conducta:procesos_MPublico.html.twig")->display($context);
        // line 24
        echo "        ";
        $this->env->loadTemplate("hojaVidaBundle:js:frm_mov_migratorio.html.twig")->display($context);
        // line 25
        echo "


                function cargando() {
                    \$(\"#boton-guardar\").css(\"display\", \"none\");
                    \$(\"#cargando\").css(\"display\", \"block\");
                    var val = 0;
                    var interval = setInterval(function() {
                        val++;
                        \$('#prog').progressbar({value: val});
                        \$(\"#prog_per\").text(val + \"%\");
                        if (val === 100) {
                            clearInterval(interval);
                            \$(\"#cargando\").css(\"display\", \"none\");
                            \$(\"#boton-guardar\").css(\"display\", \"block\");
                        }
                    }, 25);
                }




                \$(\"#guardar_frm\").click(function() {
                    if (\$(\"#idfoto\").val() !== \"\") {
                        var foto_path = \$(\"#idfoto\").val();
                        var ext = foto_path.split(\".\");
                        var extension = ext[(ext.length - 1)];
                        if (extension == \"jpg\" || extension == \"JPG\") {
                            frm_como_postulante();
                        } else {
                            alert(\"Seleccione archivo del tipo jpg\");
                        }
                    } else {
                        alert(\"Seleccione su foto\");
                    }
                });


                function frm_como_postulante() {
                    var form = \$(\"#frm-como-postulante\").serialize() + \"&id_cod=\" + \$(\"#id_cod\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("_newDatosPostulante");
        echo "\",
                        data: form,
                        success: function(e) {
                            \$(\"#id_pos\").val(e);
                            \$(\"#guardar_frm\").attr(\"rel\", \"frm-datos-academicos\");

                            frm_datos_personales();

                            \$(\"#guardar_frm\").button({disabled: true});

                        }
                    });
                }

                function frm_datos_personales() {
                    var form = \$(\"#frm-datos-personales\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("_newDatosPersonales");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_exp_profesional();
                        }

                    });
                }

                function frm_exp_profesional() {

                    var form = \$(\"#frm-exp-profesional\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("_newExpProfesional");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_datos_academicos();



                        }

                    });
                }
                function frm_datos_academicos() {

                    var form = \$(\"#frm-datos-academicos\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("_newDatosAcademicos");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_conducta();
                        }

                    });
                }
                function frm_conducta() {
                    var form = \$(\"#frm-conducta\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("_newConducta");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_info_jue_fis();

                        }

                    });

                }


                function frm_info_jue_fis() {
                    var form = \$(\"#frm_info_jue_fis\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("_infojuefis");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_direc_proc();

                        }
                    });
                }
                function frm_direc_proc() {
                    var form = \$(\"#frm_direc_proc\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("_direcproc");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_info_colegio();


                        }
                    });
                }
                function frm_info_colegio() {
                    var form = \$(\"#frm_info_colegio\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("_infocolegio");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_info_patrimonial();


                        }
                    });
                }
                function frm_info_patrimonial() {
                    var form = \$(\"#frm_info_patrimonial\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("_info_patrimonial");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_mov_migratorio();



                        }
                    });
                }
                function frm_mov_migratorio() {
                    var form = \$(\"#frm_mov_migratorio\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("_mov_migratorio");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_info_camara();


                        }
                    });
                }
                function frm_info_camara() {
                    var form = \$(\"#frm_info_camara\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 219
        echo $this->env->getExtension('routing')->getPath("_info_camara");
        echo "\",
                        data: form,
                        success: function(e) {
                            frm_info_registro();

                        }
                    });
                }

                function frm_info_registro() {
                    var form = \$(\"#frm_info_registro\").serialize() + \"&id_pos=\" + \$(\"#id_pos\").val();
                    cargando();
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("_info_registro");
        echo "\",
                        data: form,
                        success: function() {
                            \$(\"#UploadPhoto\").submit();
                        }
                    });
                }

                var num_infopat1 = (\$(\"#tbody_infopat1 tr\") - 1);
                \$(\"#add_infopat1\").click(function() {
                    num_infopat1++;
                    add_infopat1();
                    \$(\".menos\").button();

                });
                \$(\"#table_infopat1\").delegate(\".remove_infopat1\", \"click\", function() {
                    if (num_infopat1 > 0) {
                        var row_position = (\$(\".remove_infopat1\").index(\$(this)) + 1);
                        \$(\"#tbody_infopat1 tr\").eq(row_position).remove();
                        num_infopat1--;

                    }
                });

                function add_infopat1() {
                    var new_row = '<tr>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input class=\"remove_infopat1 menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#tbody_infopat1\").append(new_row);

                }



                var num_infopat2 = (\$(\"#tbody_infopat2 tr\") - 1);
                \$(\"#add_infopat2\").click(function() {
                    num_infopat2++;
                    add_infopat2();
                    \$(\".menos\").button();

                });
                \$(\"#table_infopat2\").delegate(\".remove_infopat2\", \"click\", function() {
                    if (num_infopat2 > 0) {
                        var row_position = (\$(\".remove_infopat2\").index(\$(this)) + 1);
                        \$(\"#tbody_infopat2 tr\").eq(row_position).remove();
                        num_infopat2--;

                    }
                });

                function add_infopat2() {
                    var new_row = '<tr>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input class=\"remove_infopat1 menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#tbody_infopat2\").append(new_row);
                }
            });


    </script>
";
    }

    // line 314
    public function block_titulo($context, array $blocks = array())
    {
        // line 315
        echo "    <div class=\"single-theme\">REGISTRO HOJA DE VIDA</div>
";
    }

    // line 317
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "    
    <input type=\"hidden\" id=\"id_cod\" value=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->getContext($context, "dni"), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"id_pos\">

    <div id=\"tab-cuestionario\">
        <ul>
            <li><a href=\"#tab-cuestionario-1\">RUBRO 1</a></li>
            <li><a href=\"#tab-cuestionario-2\">RUBRO 2</a></li>
            <li><a href=\"#tab-cuestionario-3\">RUBRO 3</a></li>
            <li><a href=\"#tab-cuestionario-4\">RUBRO 4</a></li>
            <!--<li><a href=\"#tab-cuestionario-5\">RUBRO 5</a></li>-->
        </ul>
        <div id=\"tab-cuestionario-1\">
            <div id=\"tabs1\">";
        // line 330
        $this->env->loadTemplate("hojaVidaBundle:cuestionarios:tab1.html.twig")->display($context);
        echo "</div>
        </div>
        <div id=\"tab-cuestionario-2\">
            <div id=\"tabs2\">";
        // line 333
        $this->env->loadTemplate("hojaVidaBundle:cuestionarios:tab2.html.twig")->display($context);
        echo "</div>

        </div>
        <div id=\"tab-cuestionario-3\">
            <div id=\"tabs3\">";
        // line 337
        $this->env->loadTemplate("hojaVidaBundle:cuestionarios:tab3.html.twig")->display($context);
        echo "</div>
        </div>
        <div id=\"tab-cuestionario-4\">
            <div id=\"tabs4\">";
        // line 340
        $this->env->loadTemplate("hojaVidaBundle:cuestionarios:tab4.html.twig")->display($context);
        echo "</div>
        </div>
        <!--<div id=\"tab-cuestionario-5\">
                        ";
        // line 344
        echo "            </div>    

        </div>-->
        <div class=\"panel_guardar\">
            <div id=\"titulo_save\" class=\"titulo_save\">Mantenimiento</div>
            <div id=\"cargando\" style=\"display:none;\">
                <div id=\"prog\" style=\"margin: 0 5px 0 5px;\"></div>
                <div id=\"prog_per\"></div>
            </div>
            <div id=\"boton-guardar\" style=\"text-align: center;\">
                <input type=\"button\" id=\"guardar_frm\" rel=\"frm-datos-personales\" class=\"button\"value=\"Guardar\">
            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:principal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 344,  467 => 340,  461 => 337,  454 => 333,  448 => 330,  433 => 318,  428 => 317,  423 => 315,  420 => 314,  335 => 233,  318 => 219,  301 => 205,  283 => 190,  266 => 176,  249 => 162,  233 => 149,  213 => 132,  197 => 119,  177 => 102,  159 => 87,  137 => 68,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
