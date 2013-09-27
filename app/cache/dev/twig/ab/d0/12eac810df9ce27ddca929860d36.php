<?php

/* hojaVidaBundle:js:frm_datos_personales.html.twig */
class __TwigTemplate_abd012eac810df9ce27ddca929860d36 extends Twig_Template
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

    \$(\".rad_discapacidad\").click(function() {
        if (\$(this).is(\":checked\")) {
            \$(\".txt_certDiscapacidad\").val(\"\");

            if (\$(this).val() === \"SI\") {
                \$(\".certi_discapacidad\").css(\"display\", \"block\");
            } else {
                \$(\".certi_discapacidad\").css(\"display\", \"none\");
            }
        }
    });
    function edad(data) {
        var fec = data.split(\"/\");
        var fecha = new Date(fec[2] + \"/\" + fec[1] + \"/\" + fec[0]);
        var hoy = new Date();
        var ed = parseInt((hoy - fecha) / 365 / 24 / 60 / 60 / 1000);
        return ed;
    }

    \$(\".txt_fechaNac\").change(function() {
        \$(\".txt_edad\").val(edad(\$(this).val()));
        \$(\"#lbledad\").html(edad(\$(this).val()));
    });


";
    }

    public function getTemplateName()
    {
        return "hojaVidaBundle:js:frm_datos_personales.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  19 => 1,  508 => 376,  502 => 372,  496 => 369,  489 => 365,  483 => 362,  468 => 350,  463 => 349,  458 => 347,  455 => 346,  347 => 242,  341 => 239,  324 => 225,  307 => 211,  289 => 196,  272 => 182,  255 => 168,  239 => 155,  219 => 138,  199 => 121,  179 => 104,  158 => 86,  136 => 67,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  51 => 8,  47 => 27,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
