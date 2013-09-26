<?php

/* hojaVidaBundle:update_formularios/conducta/js:procesos_administrativos.html.twig */
class __TwigTemplate_770df4b93816e4322a7828653814934c extends Twig_Template
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
                
                  var num_pro_ad_pub_gen =(\$(\"#table_pro_ad_pub_gen tbody tr\").size()-1);
                \$(\"#add_pro_ad_pub_gen\").click(function(){
                  
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
                var num_sanciones_admin_pub = (\$(\"#table_sanciones_admin_pub tbody tr\").size()-1) ;
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
                 var num_med_disc_pod_jud =(\$(\"#table_med_disc_pod_jud tbody tr\").size()-1);
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
        return "hojaVidaBundle:update_formularios/conducta/js:procesos_administrativos.html.twig";
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  19 => 1,  102 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  88 => 32,  77 => 25,  72 => 23,  69 => 22,  60 => 14,  57 => 13,  54 => 12,  52 => 32,  47 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,);
=======
        return array (  19 => 1,  102 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  88 => 32,  77 => 25,  72 => 23,  69 => 22,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  47 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,);
>>>>>>> 7991ed05889c6f9fd7ed6df311218f701bda0941
    }
}
