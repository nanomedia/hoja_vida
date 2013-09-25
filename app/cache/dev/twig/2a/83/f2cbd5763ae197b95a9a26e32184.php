<?php

/* hojaVidaBundle:update_formularios/conducta/js:procesos_MPublico.html.twig */
class __TwigTemplate_2a83f2cbd5763ae197b95a9a26e32184 extends Twig_Template
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
        echo "//EN TRÁMITE
//1. PROCESOS DISCIPLINARIOS:
                var num_min_pub_tra_proc_disc = (\$(\"#table_min_pub_tra_proc_disc tbody tr\").size()-1);
                \$(\"#add_min_pub_tra_proc_disc\").click(function() {
                    num_min_pub_tra_proc_disc++;
                    add_min_pub_tra_proc_disc();
                    \$(\".menos\").button();

                });


                \$(\"#table_min_pub_tra_proc_disc\").delegate(\".remove_min_pub_tra_proc_disc\", \"click\", function() {
                    if (num_min_pub_tra_proc_disc > 0) {
                        var row_position = (\$(\".remove_min_pub_tra_proc_disc\").index(\$(this)) + 1);
                        \$(\"#table_min_pub_tra_proc_disc tbody tr\").eq(row_position).remove();
                        num_min_pub_tra_proc_disc--;
                    }
                });


                function add_min_pub_tra_proc_disc(){
                    var new_row = '<tr>';
                    new_row += '<td><input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"1\">';
                    new_row += '<select name=\"tra_ins_mpub[]\">';
                    new_row += '<option value=\"1\">MP</option>';
                    new_row += '<option value=\"2\">PJ</option>';
                    new_row += '</select>';
                    new_row += '</td><td>';
                    new_row += '<input type=\"hidden\" name=\"tra_que_mpub[]\">';
                    new_row += '<textarea name=\"tra_exp_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"tra_mot_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"tra_est_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_min_pub_tra_proc_disc menos\" type=\"button\" value=\"-\"></td></tr>';

                    \$(\"#table_min_pub_tra_proc_disc tbody\").append(new_row);

                }
               
          
//2. DENUNCIAS Y/O QUEJAS ANTE LA FISCALÍA SUPREMA DE CONTROL INTERNO: Total:

                var num_min_pub_tra_den_fisc = (\$(\"#table_min_pub_tra_den_fisc tbody tr\").size()-1);
                \$(\"#add_min_pub_tra_den_fisc\").click(function() {
                    num_min_pub_tra_den_fisc++;
                    add_min_pub_tra_den_fisc();
                    actualizar_min_pub_tra_den_fisc();
                    \$(\".menos\").button();

                });


                \$(\"#table_min_pub_tra_den_fisc\").delegate(\".remove_min_pub_tra_den_fisc\", \"click\", function() {
                    if (num_min_pub_tra_den_fisc > 0) {
                        var row_position = (\$(\".remove_min_pub_tra_den_fisc\").index(\$(this)) + 1);
                        \$(\"#table_min_pub_tra_den_fisc tbody tr\").eq(row_position).remove();
                        num_min_pub_tra_den_fisc--;
                        actualizar_min_pub_tra_den_fisc();
                    }
                });


                function add_min_pub_tra_den_fisc() {
                    var new_row = '<tr>';
                    new_row += '<td align=\"center\">';
                    new_row += '<b>1</b>';
                    new_row += '</td>';
                    new_row += '<td>';
                    new_row += '<input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"2\">';
                    new_row += '<input type=\"hidden\"name=\"tra_ins_mpub[]\">';
                    new_row += '<input type=\"hidden\" name=\"tra_exp_mpub[]\">';
                    new_row += '<textarea name=\"tra_que_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"tra_mot_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"tra_est_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_min_pub_tra_den_fisc menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_min_pub_tra_den_fisc tbody\").append(new_row);

                }
                 function actualizar_min_pub_tra_den_fisc() {
                    for (var i = 1; i <= num_min_pub_tra_den_fisc ; i++) {
                        \$(\"#table_min_pub_tra_den_fisc tbody tr:eq(\" + i + \") td:eq(0)\").html(\"<b>\"+(i + 1)+\"</b>\");
                    }

                }

                
                
      //3. INVESTIGACIONES PRELIMINARES:           
                
           var num_min_pub_tra_inv_prel = (\$(\"#table_min_pub_tra_inv_prel tbody tr\").size()-1);
                \$(\"#add_min_pub_tra_inv_prel\").click(function() {
                    num_min_pub_tra_inv_prel++;
                    add_min_pub_tra_inv_prel();
                    actualizar_min_pub_tra_inv_prel();
                    \$(\".menos\").button();

                });


             \$(\"#table_min_pub_tra_inv_prel\").delegate(\".remove_min_pub_tra_inv_prel\", \"click\", function() {
                    if (num_min_pub_tra_inv_prel > 0) {
                        var row_position = (\$(\".remove_min_pub_tra_inv_prel\").index(\$(this)) + 1);
                        \$(\"#table_min_pub_tra_inv_prel tbody tr\").eq(row_position).remove();
                        num_min_pub_tra_inv_prel--;
                        actualizar_min_pub_tra_inv_prel();
                    }
                });


                function add_min_pub_tra_inv_prel() {
                    var new_row = '<tr>';
                    new_row += '<td align=\"center\"></td>';
                    new_row += '<td>';
                    new_row += '    <input type=\"hidden\" name=\"tra_tipo_mpub[]\" value=\"3\">';
                    new_row += '    <input type=\"hidden\"name=\"tra_ins_mpub[]\">';
                    new_row += '    <input type=\"hidden\" name=\"tra_que_mpub[]\">';
                    new_row += '    <input type=\"hidden\" name=\"tra_exp_mpub[]\">';
                    new_row += '    <textarea name=\"tra_mot_mpub[]\" class=\"info_textarea\"></textarea>';
                    new_row += '</td>';
                    new_row += '<td><textarea type=\"text\" name=\"tra_est_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_min_pub_tra_inv_prel menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_min_pub_tra_inv_prel tbody\").append(new_row);

                }

                function actualizar_min_pub_tra_inv_prel() {
                    for (var i = 1; i <= num_min_pub_tra_inv_prel; i++) {
                        \$(\"#table_min_pub_tra_inv_prel tbody tr:eq(\" + i + \") td:eq(0)\").html(\"<b>\" + (i + 1) + \"</b>\");
                    }
                }
  
// CONCLUIDAS:
//1. PROCESOS DISCIPLINARIOS EN EL MINISTERIO PÚBLICO: 

   var num_min_pub_con_proc_desc = (\$(\"#table_min_pub_con_proc_desc tbody tr\").size()-1);
                \$(\"#add_min_pub_con_proc_desc\").click(function() {
                    num_min_pub_con_proc_desc++;
                    add_min_pub_con_proc_desc();

                    \$(\".menos\").button();

                });


                \$(\"#table_min_pub_con_proc_desc\").delegate(\".remove_min_pub_con_proc_desc\", \"click\", function() {
                    if (num_min_pub_con_proc_desc > 0) {
                        var row_position = (\$(\".remove_min_pub_con_proc_desc\").index(\$(this)) + 1);
                        \$(\"#table_min_pub_con_proc_desc tbody tr\").eq(row_position).remove();
                        num_min_pub_con_proc_desc--;
                    }
                });


                function add_min_pub_con_proc_desc() {
                    var new_row = '<tr>';
                    new_row += ' <td><input type=\"hidden\" name=\"con_tipo_mpub[]\" value=\"1\">';
                    new_row += '     <select name=\"con_ins_mpub[]\">';
                    new_row += '         <option value=\"1\">MP</option>';
                    new_row += '         <option value=\"2\">PJ</option>';
                    new_row += '     </select>';
                    new_row += ' </td>';
                    new_row += ' <td>';
                    new_row += '     <input type=\"hidden\" name=\"con_que_mpub[]\">';
                    new_row += '     <textarea name=\"con_exp_mpub[]\" class=\"info_textarea\"></textarea>';
                    new_row += ' </td>';
                    new_row += ' <td><textarea name=\"con_mot_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += ' <td><textarea name=\"con_est_mpub[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_min_pub_con_proc_desc menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_min_pub_con_proc_desc tbody\").append(new_row);

                }

                
                
                
                
                
                
                
                
                
                   var num_min_pub_con_den_fis = (\$(\"#table_min_pub_con_den_fis tbody tr\").size()-1);
                        \$(\"#add_min_pub_con_den_fis\").click(function() {
                            num_min_pub_con_den_fis++;
                            add_min_pub_con_den_fis();
                            actualizar_min_pub_con_den_fis();
                            \$(\".menos\").button();

                        });


                        \$(\"#table_min_pub_con_den_fis\").delegate(\".remove_min_pub_con_den_fis\", \"click\", function() {
                            if (num_min_pub_con_den_fis > 0) {
                                var row_position = (\$(\".remove_min_pub_con_den_fis\").index(\$(this)) + 1);
                                \$(\"#table_min_pub_con_den_fis tbody tr\").eq(row_position).remove();
                                num_min_pub_con_den_fis--;
                                actualizar_min_pub_con_den_fis();
                            }
                        });


                        function add_min_pub_con_den_fis() {
                            var new_row = '<tr>';
                            new_row += '<td align=\"center\"></td>';
                            new_row += '<input type=\"hidden\" name=\"con_tipo_mpub[]\" value=\"2\">';
                            new_row += '<input type=\"hidden\"name=\"con_ins_mpub[]\">';
                            new_row += '<input type=\"hidden\" name=\"con_exp_mpub[]\" >';
                            new_row += '<td><input type=\"text\" name=\"con_que_mpub[]\" class=\"row-edit\"></td>';
                            new_row += '<td><input type=\"text\" name=\"con_mot_mpub[]\" class=\"row-edit\"></td>';
                            new_row += '<td><input type=\"text\" name=\"con_est_mpub[]\"class=\"row-edit\"></td>';
                            new_row += '<td><input class=\"remove_min_pub_con_den_fis menos\" type=\"button\" value=\"-\"></td>';
                            new_row += '</tr>';
                            \$(\"#table_min_pub_con_den_fis tbody\").append(new_row);
                        }

                        function actualizar_min_pub_con_den_fis() {
                            for (var i = 1; i <= num_min_pub_con_den_fis; i++) {
                                \$(\"#table_min_pub_con_den_fis tbody tr:eq(\" + i + \") td:eq(0)\").html(\"<b>\" + (i + 1) + \"</b>\");
                            }
                        }";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios/conducta/js:procesos_MPublico.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  102 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  88 => 32,  77 => 25,  72 => 23,  69 => 22,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  47 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,);
    }
}
