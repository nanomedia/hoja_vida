<?php

/* hojaVidaBundle:js:frm_datos_postulante.html.twig */
class __TwigTemplate_0aa434bfa299b38243530d9722429674 extends Twig_Template
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
        echo "
    var num_rows_canteriores = 0;
    \$(\"#add_canteriores\").click(function() {
        
            num_rows_canteriores++;
            add_rows_canteriores();
            actualizar_table_canteriores();
            \$(\".menos\").button(); 
        
    });
    \$(\"#table_canteriores\").delegate(\".remove_canteriores\", \"click\", function() {
        if (num_rows_canteriores > 0) {
            var row_position = (\$(\".remove_canteriores\").index(\$(this)) + 1);
            \$(\"#table_canteriores tbody tr\").eq(row_position).remove();
            num_rows_canteriores--;
            actualizar_table_canteriores();
        }
    });
    function actualizar_table_canteriores() {
        for (var i = 1; i <= num_rows_canteriores; i++) {
            \$(\"#table_canteriores tbody tr:eq(\" + i + \") td:eq(0)\").html(i + 1);
        }

    }
    function add_rows_canteriores() {
        var new_row = '<tr>';
        new_row += '<td align=\"center\"></td>';
        new_row += '<td><input type=\"text\" name=\"convocatoria[]\" class=\"row-edit\"></td>';
        new_row += '<td><input type=\"text\" name=\"plaza[]\" class=\"row-edit\"></td>';
        new_row += '<td><input type=\"text\" name=\"etapa[]\" class=\"row-edit\"></td>';
        new_row += '<td><input class=\"remove_canteriores menos\" type=\"button\" value=\"-\"></td>';
        new_row += '</tr>';
         
        \$(\"#table_canteriores tbody\").append(new_row);

    }

";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js:frm_datos_postulante.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  19 => 1,  508 => 376,  502 => 372,  496 => 369,  489 => 365,  483 => 362,  468 => 350,  463 => 349,  458 => 347,  455 => 346,  347 => 242,  341 => 239,  324 => 225,  307 => 211,  289 => 196,  272 => 182,  255 => 168,  239 => 155,  219 => 138,  199 => 121,  179 => 104,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
