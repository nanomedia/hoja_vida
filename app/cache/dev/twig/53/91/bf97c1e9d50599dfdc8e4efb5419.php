<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_5391bf97c1e9d50599dfdc8e4efb5419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/structure.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/body.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALYAAAA+CAMAAACxzRGDAAAAUVBMVEX////Ly8yko6WLioxkYmVXVVkwLjLl5eWxsLJKSEzy8vJxcHLY2Ni+vb89Oz9XVVh+fH+Yl5n///+xsbLY2Nlxb3KkpKWXlph+fX+LiYy+vr/IZP61AAAAAXRSTlMAQObYZgAABRBJREFUeNrVmtuWoyAQRS1FEEQSzQU7//+hYxUiXsKQZLJWM+chsUloN+WhCuguYoKyYqzmvGasKqH4HyRKxndipcgcumH8qViTM7TkUclcwaHmf5XM0eWq4km1KjdqXfMXJHVe1J3hL8lk5fCGv6wmT+o0d87U+XNrk0Y9nfv+7LM6ZJH5ZBL6LAbSxQ3Q5FDr22Skr8PQSy4n7isnsQxSX4r6pobhjCHHeDNOKrO3yGmCvZOjV9jmt8ulTdXFKdbKLNh+kOMvBzuVRa4Y7MUsdEUSWQe7xxCfZmcwjHU83LqzFvSbJQOXQvptbPnEFoyZtUUGwTeKuLuTHyT1kaP0P6cR01OKvv448gtl61dqZfmJezQmU/t+1R2fJLtBwXV6uWGwB9SZPrn0fKO2WAvQN1PUhHjTom3xgXYTkvlSKHs19OhslETq6X3HrXbjt8XbGj9b4Gi+lUAnL6XxQj8Pyk9N4Bt1xUrsLVN/3isYMug8rODMdbgOvoHs8uAb2fcANIAzkKCLYy+AXRpSU8sr1r4P67xhLgPp7vM32zlqt7Bhq2fI1Hwp+VgANxok59SsGV3oqdUL0YVDMRY7Yg8QLbVUU4NZNoOq5hJHuxEM28Sh/IyUZ8D3reR+yc58EGvOy2U0HQL6G9V+kWyEWHmzaMx6t4o9RhOm/riUiYrzqij4Ptqkn7AaCXqc+F47m04ahfde7YIz8RHEBN6BdVwdIGRVdNbKqYu1Hc0x0wBY4wqC8+XUgBGnj81SZsQB+0yAS1x/BlI/6ebHHk0lauQLuPDpu6EwAVJ7T0rl2uXa23jcqNyOZekhqYHRz3JOANrF4wCCmEs1f9D1lUe0n4NAATed80Y5e0Q7CO2TezM/BR6wKdgQzKbCF4uOQC3Bk0fKAzbFlyRWg3gksA/gmm7eOjrpaKX7fHlEW2xLbE6GZsPiCiShVzN7RG2xTz2G+OJtEqzdJ7APxy3MrSsV0VukXbKMp9lhs5BN6dr3CN+sySUaoxGwfRUM3I/gdPYONgVU+PLX4vUWm32AvUySarbONvcpV2RQEPKKjEBHFk01kQDGRblnn8ZuE9g+JUl8OWAPbkFK2K6JxhJVvF47FzYYnAN22ttwxKYCoH36rheEB7KG/HF/YUaa2G5JF+55tpyrl7B1WHM39HuP2N2EXPl1UBu8vbj4OjvD+NoTE4ssF+ScARgaJY1N7+u8bY/Y9BSM5PKwJbvMVab32YP5FB5TtcYVrGoASolVLTzI7kVsYVxRtAb5n2JXq1vCdtd47XtYItynrN0835PasLg0y13aOPbmPI+on2Lr9e5tjSHvgkAvclUjL3Fsdaw03IzgTR62yYClk7QMah4IQ0qSsoYYbOix6zJR1ZGDNMOY3Bb6W5S6jiyovep3t7bUPyoq7OkjYumrfESp8zSBc/OLosVf+nTnnKjsqR16++WDwpI8FxJWRFTlI6NKnqYJaL96TqjAbo9Toi5QiWBDcmfdFV+T8dkvFe5bItgstbM2X6QG2mVun+cazfRwOS0eiaeRRJKgLfc3BQAqfnhJyz8lfR6580SF/FXVu83Nz1xrrnFqqXL6Qxl47DNSm4RFflvN5sABDD8peouqLLKQXVdGbnqf+qIpOxON4ZyYdJEJ6sy4zS2c5eRPTT4Jyp46qDE5/ptAWqJOQ9e6yE82FXBbZCk1/tXVoshVoopE3CB0zmraI3nbqCJ/gW3ZMgtbC5nh/QHlOoOZBxQCRgAAAABJRU5ErkJggg==\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"http://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </div>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  93 => 9,  80 => 41,  78 => 40,  46 => 10,  44 => 9,  36 => 7,  32 => 6,  27 => 4,  22 => 1,  57 => 12,  54 => 11,  43 => 8,  40 => 8,  33 => 4,  30 => 3,  1978 => 1037,  1968 => 1030,  1957 => 1022,  1950 => 1018,  1943 => 1014,  1932 => 1005,  1923 => 1002,  1919 => 1001,  1915 => 1000,  1912 => 999,  1908 => 998,  1891 => 984,  1886 => 981,  1877 => 978,  1873 => 977,  1869 => 976,  1866 => 975,  1862 => 974,  1844 => 959,  1839 => 956,  1830 => 953,  1826 => 952,  1822 => 951,  1819 => 950,  1815 => 949,  1796 => 933,  1792 => 931,  1783 => 928,  1779 => 927,  1776 => 926,  1772 => 925,  1755 => 911,  1751 => 909,  1742 => 906,  1738 => 905,  1734 => 904,  1730 => 903,  1727 => 902,  1723 => 901,  1703 => 884,  1699 => 882,  1690 => 879,  1686 => 878,  1682 => 877,  1678 => 876,  1675 => 875,  1671 => 874,  1647 => 853,  1643 => 851,  1634 => 848,  1630 => 847,  1627 => 846,  1623 => 845,  1606 => 831,  1602 => 829,  1593 => 826,  1589 => 825,  1585 => 824,  1582 => 823,  1578 => 822,  1554 => 801,  1540 => 790,  1530 => 783,  1521 => 776,  1512 => 773,  1508 => 772,  1504 => 771,  1500 => 770,  1497 => 769,  1493 => 768,  1478 => 755,  1469 => 752,  1465 => 751,  1461 => 750,  1457 => 749,  1454 => 748,  1450 => 747,  1433 => 732,  1424 => 729,  1420 => 728,  1416 => 727,  1413 => 726,  1409 => 725,  1394 => 712,  1385 => 709,  1381 => 708,  1377 => 707,  1373 => 706,  1370 => 705,  1366 => 704,  1351 => 691,  1342 => 688,  1338 => 687,  1334 => 686,  1331 => 685,  1327 => 684,  1307 => 666,  1298 => 663,  1294 => 662,  1290 => 661,  1287 => 660,  1283 => 659,  1269 => 647,  1260 => 644,  1256 => 643,  1252 => 642,  1248 => 641,  1245 => 640,  1241 => 639,  1226 => 626,  1217 => 623,  1213 => 622,  1209 => 621,  1205 => 620,  1202 => 619,  1198 => 618,  1179 => 601,  1170 => 598,  1166 => 597,  1162 => 596,  1159 => 595,  1155 => 594,  1141 => 582,  1131 => 578,  1127 => 577,  1123 => 576,  1119 => 575,  1116 => 574,  1112 => 573,  1097 => 560,  1088 => 557,  1084 => 556,  1080 => 555,  1077 => 554,  1073 => 553,  1053 => 535,  1044 => 532,  1040 => 531,  1036 => 530,  1033 => 529,  1029 => 528,  1015 => 516,  1006 => 513,  1002 => 512,  998 => 511,  995 => 510,  991 => 509,  977 => 497,  968 => 494,  964 => 493,  960 => 492,  956 => 491,  953 => 490,  949 => 489,  934 => 476,  925 => 473,  921 => 472,  917 => 471,  913 => 470,  909 => 469,  906 => 468,  902 => 467,  888 => 455,  879 => 452,  875 => 451,  871 => 450,  867 => 449,  863 => 448,  860 => 447,  856 => 446,  841 => 433,  832 => 430,  828 => 429,  824 => 428,  820 => 427,  816 => 426,  813 => 425,  809 => 424,  789 => 407,  781 => 402,  774 => 398,  757 => 384,  753 => 382,  744 => 379,  740 => 378,  736 => 377,  733 => 376,  729 => 375,  716 => 365,  712 => 364,  707 => 362,  700 => 358,  693 => 354,  686 => 350,  679 => 346,  673 => 342,  663 => 338,  656 => 334,  649 => 330,  642 => 326,  635 => 322,  628 => 318,  623 => 315,  619 => 314,  615 => 312,  604 => 307,  597 => 303,  590 => 299,  585 => 296,  581 => 295,  574 => 291,  568 => 287,  559 => 284,  555 => 283,  551 => 282,  547 => 281,  543 => 280,  539 => 279,  535 => 278,  531 => 277,  527 => 276,  524 => 275,  520 => 274,  499 => 256,  496 => 255,  491 => 253,  486 => 252,  484 => 251,  478 => 249,  474 => 248,  470 => 247,  466 => 246,  461 => 245,  454 => 240,  445 => 237,  441 => 236,  437 => 235,  433 => 234,  429 => 233,  425 => 232,  421 => 231,  417 => 230,  414 => 229,  410 => 228,  388 => 209,  384 => 208,  380 => 207,  373 => 203,  366 => 199,  362 => 197,  351 => 192,  344 => 188,  337 => 184,  330 => 180,  325 => 177,  321 => 176,  317 => 174,  306 => 169,  299 => 165,  292 => 161,  285 => 157,  280 => 154,  276 => 153,  272 => 151,  260 => 145,  253 => 141,  246 => 137,  239 => 133,  234 => 130,  230 => 129,  223 => 125,  219 => 124,  212 => 120,  201 => 111,  191 => 107,  187 => 106,  183 => 105,  180 => 104,  176 => 103,  163 => 93,  156 => 89,  151 => 87,  146 => 85,  139 => 81,  131 => 80,  124 => 76,  117 => 72,  110 => 67,  104 => 64,  101 => 63,  99 => 62,  94 => 60,  88 => 6,  81 => 53,  77 => 52,  68 => 48,  19 => 1,);
    }
}
