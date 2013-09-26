<?php

/* hojaVidaBundle:js:frm_mov_migratorio.html.twig */
class __TwigTemplate_a86d3dfc7946c2b9471b9800a2f79d8d extends Twig_Template
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
        echo " var num_mov_migratorio = 0;
                \$(\"#add_mov_migratorio\").click(function() {

                    num_mov_migratorio++;
                    add_mov_migratorio();
                    \$(\".menos\").button();
                    \$.datepicker.regional['es'] = {
                        closeText: 'Cerrar',
                        prevText: '<Ant',
                        nextText: 'Sig>',
                        currentText: 'Hoy', monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                        weekHeader: 'Sm',
                        dateFormat: 'dd/mm/yy',
                        firstDay: 1,
                        isRTL: false,
                        showMonthAfterYear: false,
                        yearSuffix: ''
                    };
                    \$.datepicker.setDefaults(\$.datepicker.regional['es']);
                    \$(\".datepicker\").datepicker({
                        minDate: new Date(1900, 1 - 1, 1), maxDate: '-18Y',
                        dateFormat: 'dd/mm/yy',
                        defaultDate: new Date(1970, 1 - 1, 1),
                        changeMonth: true,
                        changeYear: true,
                        yearRange: '-110:-18'
                    });

                });
                \$(\"#table_mov_migratorio\").delegate(\".remove_mov_migratorio\", \"click\", function() {
                    if (num_mov_migratorio > 0) {
                        var row_position = (\$(\".remove_mov_migratorio\").index(\$(this)) + 1);
                        \$(\"#table_mov_migratorio tbody tr\").eq(row_position).remove();
                        num_mov_migratorio--;
                    }
                });

                function add_mov_migratorio() {
                    var new_row = '<tr>';
                    new_row += '<td align=\"center\">';
                    new_row += '<select name=\"txt_tipo[]\">';
                    new_row += '<option value=\"0\">-ELEGIR-</option>';
                    new_row += '<option value=\"1\">ENTRADA</option>';
                    new_row += '<option value=\"2\">SALIDA</option>';
                    new_row += '</select>';
                    new_row += '</td>';
                    new_row += '<td><input name=\"txt_fecha[]\" type=\"text\" class=\"row-edit datepicker\"></td>';
                    new_row += '<td><input name=\"txt_destino[]\" type=\"text\" class=\"row-edit\"></td>';
                    new_row += '<td><input class=\"remove_mov_migratorio menos\" type=\"button\" value=\"-\"></td>';
                    new_row += '</tr>';

                    \$(\"#table_mov_migratorio tbody\").append(new_row);

                }";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js:frm_mov_migratorio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
