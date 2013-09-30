<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_7788cc5d457af1ad598b668c7bd7ad08 extends Twig_Template
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
        echo "<div class=\"block\">
    ";
        // line 2
        if (($this->getContext($context, "count") > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (($this->getContext($context, "count") - $this->getContext($context, "position")) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($this->getContext($context, "count") + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "exception"), "class"));
            echo ": ";
            echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true)));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces-";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "', 'traces'); switchIcons('icon-traces-";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "-open', 'icon-traces-";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "-close'); return false;\">
                <img class=\"toggle\" id=\"icon-traces-";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == $this->getContext($context, "count"))) ? ("inline") : ("none"));
            echo "\" />
                <img class=\"toggle\" id=\"icon-traces-";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == $this->getContext($context, "count"))) ? ("none") : ("inline"));
            echo "\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces-link-";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list-exception\" id=\"traces-";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
        echo "\" style=\"display: ";
        echo (((0 == $this->getContext($context, "count"))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $this->env->loadTemplate("TwigBundle:Exception:trace.html.twig")->display(array("prefix" => $this->getContext($context, "position"), "i" => $this->getContext($context, "i"), "trace" => $this->getContext($context, "trace")));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  56 => 9,  50 => 8,  41 => 7,  24 => 3,  199 => 91,  196 => 90,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  158 => 67,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  86 => 28,  69 => 25,  66 => 24,  62 => 23,  51 => 20,  49 => 19,  39 => 6,  98 => 40,  93 => 9,  80 => 41,  78 => 40,  46 => 10,  44 => 9,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 12,  54 => 21,  43 => 8,  40 => 8,  33 => 5,  30 => 3,  1978 => 1037,  1968 => 1030,  1957 => 1022,  1950 => 1018,  1943 => 1014,  1932 => 1005,  1923 => 1002,  1919 => 1001,  1915 => 1000,  1912 => 999,  1908 => 998,  1891 => 984,  1886 => 981,  1877 => 978,  1873 => 977,  1869 => 976,  1866 => 975,  1862 => 974,  1844 => 959,  1839 => 956,  1830 => 953,  1826 => 952,  1822 => 951,  1819 => 950,  1815 => 949,  1796 => 933,  1792 => 931,  1783 => 928,  1779 => 927,  1776 => 926,  1772 => 925,  1755 => 911,  1751 => 909,  1742 => 906,  1738 => 905,  1734 => 904,  1730 => 903,  1727 => 902,  1723 => 901,  1703 => 884,  1699 => 882,  1690 => 879,  1686 => 878,  1682 => 877,  1678 => 876,  1675 => 875,  1671 => 874,  1647 => 853,  1643 => 851,  1634 => 848,  1630 => 847,  1627 => 846,  1623 => 845,  1606 => 831,  1602 => 829,  1593 => 826,  1589 => 825,  1585 => 824,  1582 => 823,  1578 => 822,  1554 => 801,  1540 => 790,  1530 => 783,  1521 => 776,  1512 => 773,  1508 => 772,  1504 => 771,  1500 => 770,  1497 => 769,  1493 => 768,  1478 => 755,  1469 => 752,  1465 => 751,  1461 => 750,  1457 => 749,  1454 => 748,  1450 => 747,  1433 => 732,  1424 => 729,  1420 => 728,  1416 => 727,  1413 => 726,  1409 => 725,  1394 => 712,  1385 => 709,  1381 => 708,  1377 => 707,  1373 => 706,  1370 => 705,  1366 => 704,  1351 => 691,  1342 => 688,  1338 => 687,  1334 => 686,  1331 => 685,  1327 => 684,  1307 => 666,  1298 => 663,  1294 => 662,  1290 => 661,  1287 => 660,  1283 => 659,  1269 => 647,  1260 => 644,  1256 => 643,  1252 => 642,  1248 => 641,  1245 => 640,  1241 => 639,  1226 => 626,  1217 => 623,  1213 => 622,  1209 => 621,  1205 => 620,  1202 => 619,  1198 => 618,  1179 => 601,  1170 => 598,  1166 => 597,  1162 => 596,  1159 => 595,  1155 => 594,  1141 => 582,  1131 => 578,  1127 => 577,  1123 => 576,  1119 => 575,  1116 => 574,  1112 => 573,  1097 => 560,  1088 => 557,  1084 => 556,  1080 => 555,  1077 => 554,  1073 => 553,  1053 => 535,  1044 => 532,  1040 => 531,  1036 => 530,  1033 => 529,  1029 => 528,  1015 => 516,  1006 => 513,  1002 => 512,  998 => 511,  995 => 510,  991 => 509,  977 => 497,  968 => 494,  964 => 493,  960 => 492,  956 => 491,  953 => 490,  949 => 489,  934 => 476,  925 => 473,  921 => 472,  917 => 471,  913 => 470,  909 => 469,  906 => 468,  902 => 467,  888 => 455,  879 => 452,  875 => 451,  871 => 450,  867 => 449,  863 => 448,  860 => 447,  856 => 446,  841 => 433,  832 => 430,  828 => 429,  824 => 428,  820 => 427,  816 => 426,  813 => 425,  809 => 424,  789 => 407,  781 => 402,  774 => 398,  757 => 384,  753 => 382,  744 => 379,  740 => 378,  736 => 377,  733 => 376,  729 => 375,  716 => 365,  712 => 364,  707 => 362,  700 => 358,  693 => 354,  686 => 350,  679 => 346,  673 => 342,  663 => 338,  656 => 334,  649 => 330,  642 => 326,  635 => 322,  628 => 318,  623 => 315,  619 => 314,  615 => 312,  604 => 307,  597 => 303,  590 => 299,  585 => 296,  581 => 295,  574 => 291,  568 => 287,  559 => 284,  555 => 283,  551 => 282,  547 => 281,  543 => 280,  539 => 279,  535 => 278,  531 => 277,  527 => 276,  524 => 275,  520 => 274,  499 => 256,  496 => 255,  491 => 253,  486 => 252,  484 => 251,  478 => 249,  474 => 248,  470 => 247,  466 => 246,  461 => 245,  454 => 240,  445 => 237,  441 => 236,  437 => 235,  433 => 234,  429 => 233,  425 => 232,  421 => 231,  417 => 230,  414 => 229,  410 => 228,  388 => 209,  384 => 208,  380 => 207,  373 => 203,  366 => 199,  362 => 197,  351 => 192,  344 => 188,  337 => 184,  330 => 180,  325 => 177,  321 => 176,  317 => 174,  306 => 169,  299 => 165,  292 => 161,  285 => 157,  280 => 154,  276 => 153,  272 => 151,  260 => 145,  253 => 141,  246 => 137,  239 => 133,  234 => 130,  230 => 129,  223 => 125,  219 => 124,  212 => 120,  201 => 92,  191 => 107,  187 => 84,  183 => 82,  180 => 104,  176 => 103,  163 => 70,  156 => 66,  151 => 63,  146 => 85,  139 => 81,  131 => 80,  124 => 76,  117 => 44,  110 => 67,  104 => 64,  101 => 24,  99 => 62,  94 => 22,  88 => 6,  81 => 53,  77 => 52,  68 => 14,  19 => 1,);
    }
}
