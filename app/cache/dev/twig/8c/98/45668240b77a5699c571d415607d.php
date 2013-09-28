<?php

/* hojaVidaBundle:js/conducta:procesos_judiciales.html.twig */
class __TwigTemplate_8c9845668240b77a5699c571d415607d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "//PROCESOS JUDICIALES CIVILES, PENALES, DE FAMILIA, LABORALES COMO DEMANDANTE / DENUNCIANTE
var num_proc_jud_civ_lab_d_d = 0;
                \$(\"#add_proc_jud_civ_lab_d_d\").click(function() {
                    num_proc_jud_civ_lab_d_d++;
                    add_proc_jud_civ_lab_d_d();
                    \$(\".menos\").button();

                });


                \$(\"#table_proc_jud_civ_lab_d_d\").delegate(\".remove_proc_jud\", \"click\", function() {
                    if (num_proc_jud_civ_lab_d_d > 0) {
                        var row_position = (\$(\".remove_proc_jud\").index(\$(this)) + 1);
                        \$(\"#table_proc_jud_civ_lab_d_d tbody tr\").eq(row_position).remove();
                        num_proc_jud_civ_lab_d_d--;
                    }
                });


                function add_proc_jud_civ_lab_d_d() {
                    var new_row = '<tr>';
                    new_row += '<td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"1\">';
                    new_row += '<textarea name=\"txt_exp_con[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_exp_org_con[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_dem_agre_con[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_materia_con[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_estado_con[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_proc_jud menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_proc_jud_civ_lab_d_d tbody\").append(new_row);

                }
//COMO DEMANDADO / DENUNCIADO
                var num_dem_den = 0;
                \$(\"#add_dem_den\").click(function() {
                    num_dem_den++;
                    add_dem_den();
                    \$(\".menos\").button();

                });

                \$(\"#table_dem_den\").delegate(\".remove_dem_den\", \"click\", function() {
                    if (num_dem_den > 0) {
                        var row_position = (\$(\".remove_dem_den\").index(\$(this)) + 1);
                        \$(\"#table_dem_den tbody tr\").eq(row_position).remove();
                        num_dem_den--;
                    }
                });


                function add_dem_den() {
                    var new_row = ' <tr>';
                    new_row += '<td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"2\">';
                    new_row += '<textarea name=\"txt_exp_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_exp_org_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_dem_agre_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_materia_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_estado_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_dem_den menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_dem_den tbody\").append(new_row);

                }
                
//COMO AGRAVIADO
                var num_como_agraviado = 0;
                \$(\"#add_como_agraviado\").click(function() {
                    num_como_agraviado++;
                    add_como_agraviado();
                    \$(\".menos\").button();

                });


                \$(\"#table_como_agraviado\").delegate(\".remove_como_agraviado\", \"click\", function() {
                    if (num_como_agraviado > 0) {
                        var row_position = (\$(\".remove_como_agraviado\").index(\$(this)) + 1);
                        \$(\"#table_como_agraviado tbody tr\").eq(row_position).remove();
                        num_como_agraviado--;
                    }
                });


                function add_como_agraviado() {
                    var new_row = '<tr>';
                    new_row += '<td><input name=\"hd_tipo_jud[]\" type=\"hidden\" value=\"3\">';
                    new_row += '<textarea name=\"txt_exp_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_exp_org_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_dem_agre_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_materia_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"txt_estado_con[]\" type=\"text\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_como_agraviado menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_como_agraviado tbody\").append(new_row);

                }

                
            ";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js/conducta:procesos_judiciales.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  19 => 1,  508 => 376,  502 => 372,  496 => 369,  489 => 365,  483 => 362,  468 => 350,  463 => 349,  458 => 347,  455 => 346,  347 => 242,  341 => 239,  324 => 225,  307 => 211,  289 => 196,  272 => 182,  255 => 168,  239 => 155,  219 => 138,  199 => 121,  179 => 104,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}