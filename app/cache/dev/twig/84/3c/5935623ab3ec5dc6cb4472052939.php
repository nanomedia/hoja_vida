<?php

/* hojaVidaBundle:js/conducta:procesos_administrativos.html.twig */
class __TwigTemplate_843c5935623ab3ec5dc6cb4472052939 extends Twig_Template
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
        echo "//PROCEDIMIENTOS ADMINISTRATIVOS EN LA ADMINISTRACIÓN PÚBLICA EN GENERAL      
                
                   var num_pro_ad_pub_gen = 0;
                \$(\"#add_pro_ad_pub_gen\").click(function() {
                  
                 num_pro_ad_pub_gen++;
                    add_pro_ad_pub_gen();
                    \$(\".menos\").button();
                    
                });


                \$(\"#table_pro_ad_pub_gen\").delegate(\".remove_pro_ad_pub_gen\", \"click\", function() {
                    if (num_pro_ad_pub_gen > 0) {
                        var row_position = (\$(\".remove_pro_ad_pub_gen\").index(\$(this)) + 1);
                        \$(\"#table_pro_ad_pub_gen tbody tr\").eq(row_position).remove();
                        num_pro_ad_pub_gen--;
                    }
                });


                function add_pro_ad_pub_gen() {
                    var new_row = '<tr><td>';
                    new_row += '<textarea name=\"cbo_ins_adm1[]\" class=\"info_textarea\"></textarea>';
                    new_row += '</td>';
                    new_row += '<td><textarea type=\"text\" name=\"txt_res_adm1[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea type=\"text\" name=\"txt_san_adm1[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea type=\"text\" name=\"txt_est_adm1[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_pro_ad_pub_gen menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';
                    \$(\"#table_pro_ad_pub_gen tbody\").append(new_row);
                }
                
                  
//SANCIONES ADMINISTRATIVAS EN LA ADMINISTRACIÓN PÚBLICA GENERAL
                var num_sanciones_admin_pub = 0;
                \$(\"#add_sanciones_admin_pub\").click(function() {
                    num_sanciones_admin_pub++;
                    add_sanciones_admin_pub();
                    \$(\".menos\").button();

                });     
                    

                   \$(\"#table_sanciones_admin_pub\").delegate(\".remove_sanciones_admin_pub\", \"click\", function() {
                    if (num_sanciones_admin_pub > 0) {
                        var row_position = (\$(\".remove_sanciones_admin_pub\").index(\$(this)) + 1);
                        \$(\"#table_sanciones_admin_pub tbody tr\").eq(row_position).remove();
                        num_sanciones_admin_pub--;
                    }
                });


                function add_sanciones_admin_pub() {
                    var new_row = '<tr><td>';
                    new_row += '<select name=\"cbo_ins_adm2[]\">';
                    new_row += '    <option value=\"0\">-Elegir-</option>';
                    new_row += '    <option value=\"1\">PJ</option>';
                    new_row += '    <option value=\"2\">MP</option>';
                    new_row += '    <option value=\"4\">SERVIR</option>';
                    new_row += '</select>';
                    new_row += '</td>';
                    new_row += '<td><textarea type=\"text\" name=\"txt_res_adm2[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea type=\"text\" name=\"txt_san_adm2[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_sanciones_admin_pub menos\" type=\"button\" value=\"-\"></td></tr>';

                    \$(\"#table_sanciones_admin_pub tbody\").append(new_row);

                }              
                     


     //MEDIDAS DISCIPLINARIAS EN EL PODER JUDICIAL Y MINISTERIO PÚBLICO           
                 var num_med_disc_pod_jud = 0;
                \$(\"#add_med_disc_pod_jud\").click(function() {
                    num_med_disc_pod_jud++;
                    add_med_disc_pod_jud();
                    \$(\".menos\").button();

                });


                \$(\"#table_med_disc_pod_jud\").delegate(\".remove_med_disc_pod_jud\", \"click\", function() {
                    if (num_med_disc_pod_jud > 0) {
                        var row_position = (\$(\".remove_med_disc_pod_jud\").index(\$(this)) + 1);
                        \$(\"#table_med_disc_pod_jud tbody tr\").eq(row_position).remove();
                        num_med_disc_pod_jud--;
                    }
                });


                function add_med_disc_pod_jud() {
                    var new_row = '<tr>';
                    new_row += '<td>';
                    new_row += '<select name=\"cbo_ins_adm3[]\">';
                    new_row += '<option value=\"0\">-Elegir-</option>';
                    new_row += '<option value=\"1\">MP</option>';
                    new_row += '<option value=\"2\">PJ</option>';
                    new_row += '</select>';
                    new_row += '</td>';
                    new_row += '<td><textarea type=\"text\" name=\"txt_san_adm3[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea type=\"text\" name=\"txt_res_adm3[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_med_disc_pod_jud menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_med_disc_pod_jud tbody\").append(new_row);

                }           ";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js/conducta:procesos_administrativos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  23 => 3,  19 => 1,  162 => 83,  159 => 82,  155 => 59,  152 => 58,  146 => 11,  142 => 10,  138 => 9,  133 => 8,  130 => 7,  122 => 85,  120 => 82,  108 => 73,  101 => 69,  93 => 64,  84 => 58,  32 => 13,  22 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 59,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 30,  47 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 7,);
    }
}
