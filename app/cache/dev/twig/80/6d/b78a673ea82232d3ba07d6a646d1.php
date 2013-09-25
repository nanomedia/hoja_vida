<?php

/* hojaVidaBundle:update_formularios:util.html.twig */
class __TwigTemplate_806db78a673ea82232d3ba07d6a646d1 extends Twig_Template
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

function opt_nota(){
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
//\$(\".opt_especialidad\").html(especialidad());



    var cbouniv=\"\";
    function comboUniv() {
         \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("_util_universidad");
        echo "\",
                        async: false,
                        success: function(e) {
                           cbouniv = e;
                        }
                    });
        }
    comboUniv();    
        
    function comboColegio() {
        var obj_col = \"{col|raw('html')}\";
        return obj_col;
       }

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
     
\$(\".menos\").button();




function opt_nota(){
    var opt=\"<option value='0'>-ELEGIR-</option>\";
    for(var i=1;i<=20;i++){
    opt+=\"<option value='\"+i+\"'>\"+i+\"</option>\";
    }
    opt+=\"<option value='21'>NP</option>\";
    opt+=\"<option value='21'>EX</option>\";
    return opt;    
 }
 
 function especialidad(){
    var esp='<option value=\"0\">-ELEGIR-</option>';
    esp+='<option value=\"1\">Penal</option>';
    esp+='<option value=\"2\">Civil</option>';
    esp+='<option value=\"3\">Contencioso</option>';
    esp+='<option value=\"4\">Laboral</option>';
 return esp;
 }";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:update_formularios:util.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 32,  19 => 1,  970 => 717,  965 => 714,  956 => 711,  952 => 710,  948 => 709,  944 => 708,  941 => 707,  937 => 706,  911 => 683,  902 => 677,  890 => 668,  881 => 662,  872 => 656,  863 => 650,  854 => 644,  838 => 630,  829 => 627,  822 => 623,  815 => 619,  806 => 613,  794 => 604,  782 => 595,  772 => 588,  759 => 577,  755 => 576,  741 => 564,  727 => 556,  719 => 551,  710 => 545,  700 => 537,  696 => 536,  685 => 528,  668 => 513,  659 => 510,  655 => 509,  651 => 508,  647 => 507,  643 => 506,  639 => 505,  635 => 504,  631 => 503,  627 => 502,  623 => 501,  620 => 500,  616 => 499,  537 => 422,  528 => 419,  523 => 417,  517 => 414,  510 => 410,  504 => 407,  500 => 406,  496 => 405,  492 => 404,  488 => 403,  481 => 401,  453 => 376,  446 => 372,  437 => 367,  432 => 365,  429 => 364,  411 => 350,  407 => 349,  403 => 348,  399 => 347,  395 => 346,  63 => 16,  61 => 15,  53 => 10,  49 => 9,  44 => 7,  40 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
