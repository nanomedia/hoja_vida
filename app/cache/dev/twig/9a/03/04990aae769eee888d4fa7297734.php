<?php

/* hojaVidaBundle:update_formularios/conducta/js:procesos_PJudicial.html.twig */
class __TwigTemplate_9a0304990aae769eee888d4fa7297734 extends Twig_Template
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
        echo "  //EN TRÁMITE:
              //1. PROCESOS DISCIPLINARIOS:   
                
                
                  var num_tra_proc_disc = (\$(\"#table_tra_proc_disc tbody tr\").size()-1);
                \$(\"#add_tra_proc_disc\").click(function() {
                    num_tra_proc_disc++;
                    add_tra_proc_disc();
                    \$(\".menos\").button();

                });


                \$(\"#table_tra_proc_disc\").delegate(\".remove_tra_proc_disc\", \"click\", function() {
                    if (num_tra_proc_disc > 0) {
                        var row_position = (\$(\".remove_tra_proc_disc\").index(\$(this)) + 1);
                        \$(\"#table_tra_proc_disc tbody tr\").eq(row_position).remove();
                        num_tra_proc_disc--;
                    }
                });


                function add_tra_proc_disc() {
                    var new_row = '<tr>';
                    new_row += '<td><input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"1\">';
                    new_row += '<select name=\"tra_ins_pjud[]\">';
                    new_row += '<option value=\"1\">MP</option>';
                    new_row += '<option value=\"2\">PJ</option>';
                    new_row += '</select>';
                    new_row += '</td><td>';
                    new_row += '<input type=\"hidden\" name=\"tra_que_pjud[]\">';
                    new_row += '<textarea type=\"text\" name=\"tra_exp_pjud[]\" class=\"info_textarea\"></textarea>';
                    new_row += '</td>';
                    new_row += '<td><textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"tra_est_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_tra_proc_disc menos\" type=\"button\" value=\"-\"></td></tr>';

                    \$(\"#table_tra_proc_disc tbody\").append(new_row);

                }
                
   // 2. QUEJAS, VISITAS E INVESTIGACIONES ANTE LA OCMA / ODECMA Total:             
                  var num_que_vis_inv = (\$(\"#table_que_vis_inv tbody tr\").size()-1);
                \$(\"#add_que_vis_inv\").click(function() {
                    num_que_vis_inv++;
                    add_que_vis_inv();
                    actualizar_table_que_vis_inv() 
                    \$(\".menos\").button();

                });


                \$(\"#table_que_vis_inv\").delegate(\".remove_que_vis_inv\", \"click\", function() {
                    if (num_que_vis_inv > 0) {
                        var row_position = (\$(\".remove_que_vis_inv\").index(\$(this)) + 1);
                        \$(\"#table_que_vis_inv tbody tr\").eq(row_position).remove();
                        num_que_vis_inv--;
                        actualizar_table_que_vis_inv() 
                    }
                });


                function add_que_vis_inv() {
                    var new_row = '<tr>';
                    new_row += '<td align=\"center\"></td>';
                    new_row += '<td>';
                    new_row += '<input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"2\">';
                    new_row += '<input type=\"hidden\" name=\"tra_ins_pjud[]\">';
                    new_row += '<input type=\"hidden\" name=\"tra_exp_pjud[]\" >';
                    new_row += '<textarea  type=\"hidden\" name=\"tra_que_pjud[]\" class=\"info_textarea\"></textarea>';
                    new_row += '</td>';
                    new_row += '<td><textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"tra_est_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_que_vis_inv menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_que_vis_inv tbody\").append(new_row);

                }

                function actualizar_table_que_vis_inv() {
                    for (var i = 1; i <= num_que_vis_inv ; i++) {
                        \$(\"#table_que_vis_inv tbody tr:eq(\" + i + \") td:eq(0)\").html(\"<b>\"+(i + 1)+\"</b>\");
                    }

                }
                
  //3. INVESTIGACIONES PRELIMINARES:               
                 var num_invs_preliminares = (\$(\"#table_invs_preliminares tbody tr\").size()-1);
                \$(\"#add_invs_preliminares\").click(function() {
                    num_invs_preliminares++;
                    add_invs_preliminares();
                    actualizar_invs_preliminares();
                    \$(\".menos\").button();

                });


                \$(\"#table_invs_preliminares\").delegate(\".remove_invs_preliminares\", \"click\", function() {
                    if (num_invs_preliminares > 0) {
                        var row_position = (\$(\".remove_invs_preliminares\").index(\$(this)) + 1);
                        \$(\"#table_invs_preliminares tbody tr\").eq(row_position).remove();
                        num_invs_preliminares--;
                        actualizar_invs_preliminares();
                    }
                });


                function add_invs_preliminares() {
                    var new_row = '<tr>';
                    new_row += '<td></td>';
                    new_row += '<td>';
                    new_row += '<input type=\"hidden\" name=\"tra_tipo_pjud[]\" value=\"3\">';
                    new_row += '<input type=\"hidden\"name=\"tra_ins_pjud[]\">';
                    new_row += '<input type=\"hidden\" name=\"tra_que_pjud[]\">';
                    new_row += '<input type=\"hidden\" name=\"tra_exp_pjud[]\">';
                    new_row += '<textarea name=\"tra_mot_pjud[]\" class=\"info_textarea\"></textarea>';
                    new_row += '</td>';
                    new_row += '<td><textarea type=\"text\" name=\"tra_est_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_invs_preliminares menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_invs_preliminares tbody\").append(new_row);

                }

                function actualizar_invs_preliminares() {
                    for (var i = 1; i <= num_invs_preliminares; i++) {
                        \$(\"#table_invs_preliminares tbody tr:eq(\" + i + \") td:eq(0)\").html(\"<b>\" + (i + 1) + \"</b>\");
                    }
                }
                
 //CONCLUIDAS:
//1. PROCESOS DISCIPLINARIOS:                
                
                
                 var num_proc_desciplinarios = 0;
                \$(\"#add_proc_desciplinarios\").click(function() {
                    num_proc_desciplinarios++;
                    add_proc_desciplinarios();

                    \$(\".menos\").button();

                });


                \$(\"#table_proc_desciplinarios\").delegate(\".remove_proc_desciplinarios\", \"click\", function() {
                    if (num_proc_desciplinarios > 0) {
                        var row_position = (\$(\".remove_proc_desciplinarios\").index(\$(this)) + 1);
                        \$(\"#table_proc_desciplinarios tbody tr\").eq(row_position).remove();
                        num_proc_desciplinarios--;

                    }
                });


                function add_proc_desciplinarios() {
                    var new_row = '<tr>';
                    new_row += ' <td><input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"1\">';
                    new_row += '     <select name=\"con_ins_pjud[]\">';
                    new_row += '         <option value=\"1\">MP</option>';
                    new_row += '         <option value=\"2\">PJ</option>';
                    new_row += '     </select>';
                    new_row += ' </td>';
                    new_row += ' <td>';
                    new_row += '     <input type=\"hidden\" name=\"con_que_pjud[]\">';
                    new_row += '     <textarea name=\"con_exp_pjud[]\" class=\"info_textarea\"></textarea>';
                    new_row += ' </td>';
                    new_row += ' <td><textarea name=\"con_mot_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += ' <td><textarea name=\"con_est_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_proc_desciplinarios menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_proc_desciplinarios tbody\").append(new_row);

                }
//2. QUEJAS, VISITAS E INVESTIGACIONES ANTE LA OCMA / ODECMA
          var num_que_vis_ocma = 0;
                \$(\"#add_que_vis_ocma\").click(function() {
                    num_que_vis_ocma++;
                    add_que_vis_ocma();
                    actualizar_que_vis_ocma();
                    \$(\".menos\").button();

                });


                \$(\"#table_que_vis_ocma\").delegate(\".remove_que_vis_ocma\", \"click\", function() {
                    if (num_que_vis_ocma > 0) {
                        var row_position = (\$(\".remove_que_vis_ocma\").index(\$(this)) + 1);
                        \$(\"#table_que_vis_ocma tbody tr\").eq(row_position).remove();
                        num_que_vis_ocma--;
                        actualizar_que_vis_ocma();
                    }
                });


                function add_que_vis_ocma() {
                    var new_row = '<tr>';
                    new_row += '<td></td>';
                    new_row += '<td>';
                    new_row += '<input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"2\">';
                    new_row += '<input type=\"hidden\"name=\"con_ins_pjud[]\">';
                    new_row += '<input type=\"hidden\" name=\"con_exp_pjud[]\">';
                    new_row += '<textarea name=\"con_que_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"con_mot_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><textarea name=\"con_est_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_que_vis_ocma menos\" type=\"button\" value=\"-\"></td></tr>';

                    \$(\"#table_que_vis_ocma tbody\").append(new_row);

                }

                function actualizar_que_vis_ocma() {
                    for (var i = 1; i <= num_que_vis_ocma; i++) {
                        \$(\"#table_que_vis_ocma tbody tr:eq(\" + i + \") td:eq(0)\").html(\"<b>\" + (i + 1) + \"</b>\");
                    }
                }
                
 //3. INVESTIGACIONES PRELIMINARES: 
                
                
                var num_inv_preli = 0;
                \$(\"#add_inv_preli\").click(function() {
                    num_inv_preli++;
                    add_inv_preli();
                    actualizar_inv_preli();
                    \$(\".menos\").button();

                });


                \$(\"#table_inv_preli\").delegate(\".remove_inv_preli\", \"click\", function() {
                    if (num_inv_preli > 0) {
                        var row_position = (\$(\".remove_inv_preli\").index(\$(this)) + 1);
                        \$(\"#table_inv_preli tbody tr\").eq(row_position).remove();
                        num_inv_preli--;
                        actualizar_inv_preli();
                    }
                });


                function add_inv_preli() {
                    var new_row = '<tr>';
                    new_row += '<td></td>';
                    new_row += '<td>';
                    new_row += '<input type=\"hidden\" name=\"con_tipo_pjud[]\" value=\"3\">';
                    new_row += '<input type=\"hidden\"name=\"con_ins_pjud[]\">';
                    new_row += '<input type=\"hidden\" name=\"con_que_pjud[]\">';
                    new_row += '<input type=\"hidden\" name=\"con_exp_pjud[]\">';
                    new_row += '<textarea  name=\"con_mot_pjud[]\" class=\"info_textarea\" ></textarea></td>';
                    new_row += '<td><textarea  name=\"con_est_pjud[]\" class=\"info_textarea\"></textarea></td>';
                    new_row += '<td><input class=\"remove_inv_preli menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_inv_preli tbody\").append(new_row);

                }

                function actualizar_inv_preli() {
                    for (var i = 1; i <= num_inv_preli; i++) {
                        \$(\"#table_inv_preli tbody tr:eq(\" + i + \") td:eq(0)\").html(\"<b>\" + (i + 1) + \"</b>\");
                    }
                }
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios/conducta/js:procesos_PJudicial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  102 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  88 => 32,  77 => 25,  72 => 23,  69 => 22,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  47 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,);
    }
}
