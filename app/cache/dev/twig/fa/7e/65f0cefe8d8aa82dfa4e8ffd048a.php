<?php

/* hojaVidaBundle:js:util.html.twig */
class __TwigTemplate_fa7e65f0cefe8d8aa82dfa4e8ffd048a extends Twig_Template
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
        echo "function opt_nota(){
    var opt=\"<option value='0'>-ELEGIR-</option>\";
    for(var i=1;i<=20;i++){
    opt+=\"<option value='\"+i+\"'>\"+i+\"</option>\";
    }
    opt+=\"<option value='21'>NP</option>\";
    opt+=\"<option value='21'>EX</option>\";
    
 return opt;
 }
\$(\".opt_nota\").html(opt_nota());

 function especialidad(){
    var esp='<option value=\"0\">-ELEGIR-</option>';
    esp+='<option value=\"1\">Penal</option>';
    esp+='<option value=\"2\">Civil</option>';
    esp+='<option value=\"3\">Contencioso</option>';
    esp+='<option value=\"4\">Laboral</option>';
 return esp;
 }
\$(\".opt_nota\").html(opt_nota());  

 var cbouniv=\"\";
    function comboUniv() {
         \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("_util_universidad");
        echo "\",
                        async: false,
                        success: function(e) {
                           cbouniv = e;
                        }
                    });
        }
    comboUniv();    
        
 \$(\".combo-univ\").html(cbouniv);


    function comboColegio() {
        var obj_col = \"";
        // line 40
        echo $this->getContext($context, "col");
        echo "\";
        return obj_col;
       }
  \$(\".combo_colegios\").html(comboColegio());
    

    function comboanio() {
        var date = new Date();
        var anio = date.getFullYear();
        var ini = parseInt(anio) - 60;
        var option_year = \"\";
        option_year +=\"<option value='0'>-ELEGIR-</option>\";
        for (anio; anio > ini; anio--) {
            option_year += \"<option value='\" + anio + \"'>\" + anio + \"</option>\";
        }
        return option_year;
    }
    \$(\".cbo_anio\").html(comboanio());

 function especialidad(){
    var esp='<option value=\"0\">-ELEGIR-</option>';
    esp+='<option value=\"1\">Penal</option>';
    esp+='<option value=\"2\">Civil</option>';
    esp+='<option value=\"3\">Contencioso</option>';
    esp+='<option value=\"4\">Laboral</option>';
 return esp;
 }
 \$(\".opt_especialidad\").html(especialidad());
    
    
    
    
    
    \$(\"#cues\").buttonset();
    \$(\".button\").button();

    //\$(\"#tabs1\").tabs({disabled: [1 ,2 , 3, 4]});
    \$(\"#tabs1\").tabs();
    // \$(\"#tab-cuestionario\").tabs({disabled: [1, 2, 3, 4]});
     \$(\"#tab-cuestionario\").tabs();
    
    //\$(\"#tabs2\").tabs({disabled: [1, 2]});
    \$(\"#tabs2\").tabs();
    
    //\$(\"#tabs3\").tabs({disabled: [1, 2]});
    \$(\"#tabs3\").tabs();
    
    \$(\"#tabs4\").tabs();
    \$(\"#rad-disc\").buttonset();
    \$(\"#rad-categoria\").buttonset();
    \$(\"#opc\").buttonset();



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


    \$(\".add-icon\").button({
        icons: {
            primary: \"ui-icon-plusthick\"
        }
    });
    
    var icons = {header: \"ui-icon-circle-arrow-e\", activeHeader: \"ui-icon-circle-arrow-s\"};
    
    \$(\"#accordion\").accordion({
      icons: icons,
      collapsible: true,
      heightStyle: \"content\"
      });
      
    \$(\"#ac_conducta\").accordion({
      icons: icons,
      collapsible: true,
      heightStyle: \"content\"
      });  
      
   \$(\".decimal\").numeric(\".\"); 
   \$(\".numeric\").numeric();
   \$( \".nota\" ).spinner({
      min: 0,
      max: 20,
     });
   \$( \".num\" ).spinner({
      min: 0,
     });  
     
";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js:util.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  19 => 1,  513 => 379,  511 => 378,  505 => 375,  499 => 372,  492 => 368,  486 => 365,  471 => 353,  466 => 352,  461 => 350,  458 => 349,  349 => 244,  342 => 240,  325 => 226,  309 => 213,  292 => 199,  276 => 186,  260 => 173,  244 => 160,  225 => 144,  208 => 130,  188 => 113,  167 => 95,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
