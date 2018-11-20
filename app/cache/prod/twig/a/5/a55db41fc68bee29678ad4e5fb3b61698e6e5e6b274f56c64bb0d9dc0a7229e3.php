<?php

/* TopxiaWebBundle:Course:Widget/course-price.html.twig */
class __TwigTemplate_a55db41fc68bee29678ad4e5fb3b61698e6e5e6b274f56c64bb0d9dc0a7229e3 extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter((isset($context["shows"]) ? $context["shows"] : null), array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">

";
        // line 19
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 1)) {
            // line 20
            echo "      <span class=\"title\" style=\"float: right\">层级1</span>
    ";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 2)) {
            // line 23
            echo "      <span class=\"title\" style=\"float: right\">层级2</span>
    ";
        }
        // line 25
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 3)) {
            // line 26
            echo "      <span class=\"title\" style=\"float: right\">层级3</span>
    ";
        }
        // line 28
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 4)) {
            // line 29
            echo "      <span class=\"title\" style=\"float: right\">层级4</span>
    ";
        }
        // line 31
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 5)) {
            // line 32
            echo "      <span class=\"title\" style=\"float: right\">康复小组</span>
    ";
        }
        // line 34
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 6)) {
            // line 35
            echo "      <span class=\"title\" style=\"float: right\">糖尿病小组</span>
    ";
        }
        // line 37
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 7)) {
            // line 38
            echo "      <span class=\"title\" style=\"float: right\">静脉小组</span>
    ";
        }
        // line 40
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 8)) {
            // line 41
            echo "      <span class=\"title\" style=\"float: right\">肿瘤小组</span>
    ";
        }
        // line 43
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 9)) {
            // line 44
            echo "      <span class=\"title\" style=\"float: right\">营养小组</span>
    ";
        }
        // line 46
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 10)) {
            // line 47
            echo "      <span class=\"title\" style=\"float: right\">危重小组</span>
    ";
        }
        // line 49
        echo "    ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 11)) {
            // line 50
            echo "      <span class=\"title\" style=\"float: right\">应急小组</span>
    ";
        }
        // line 52
        echo "  ";
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array())) {
            // line 53
            echo "
    ";
            // line 54
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 55
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin")) {
                    // line 56
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 58
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</span>
      ";
                }
                // line 60
                echo "    ";
            }
            // line 61
            echo "
    ";
            // line 62
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 63
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin")) {
                    // line 64
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 66
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</del></span>
      ";
                }
                // line 68
                echo "    ";
            }
            // line 69
            echo "
    ";
            // line 70
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("discount", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 71
                echo "
      <span class=\"discount\">
        ";
                // line 73
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()) == 0) || (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()) == 0))) || (((isset($context["priceType"]) ? $context["priceType"] : null) == "default") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()) == 0)))) {
                    // line 74
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("限免"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 76
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), 2, "common"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("折"), "html", null, true);
                    echo "
        ";
                }
                // line 78
                echo "      </span>

    ";
            }
            // line 81
            echo "
  ";
        } else {
            // line 83
            echo "
    ";
            // line 84
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 85
                echo "      <span class=\"price\">
        ";
                // line 86
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 87
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                        echo " ";
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(""), "html", null, true);
                        echo "</span> ";
                    }
                    // line 88
                    echo "        ";
                } else {
                    // line 89
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(""), "html", null, true);
                        echo "</span> ";
                    }
                    // line 90
                    echo "        ";
                }
                // line 91
                echo "      </span>
    ";
            }
            // line 93
            echo "
    ";
            // line 94
            if (twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : null))) {
                // line 95
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin")) {
                    // line 96
                    echo "        <span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 98
                    echo "        ¥<span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                    echo "</span>
      ";
                }
                // line 100
                echo "    ";
            }
            // line 101
            echo "
  ";
        }
        // line 103
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Widget/course-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 103,  262 => 101,  259 => 100,  253 => 98,  246 => 96,  243 => 95,  241 => 94,  238 => 93,  234 => 91,  231 => 90,  221 => 89,  218 => 88,  206 => 87,  204 => 86,  201 => 85,  199 => 84,  196 => 83,  192 => 81,  187 => 78,  180 => 76,  174 => 74,  172 => 73,  168 => 71,  166 => 70,  163 => 69,  160 => 68,  153 => 66,  145 => 64,  142 => 63,  140 => 62,  137 => 61,  134 => 60,  127 => 58,  119 => 56,  116 => 55,  114 => 54,  111 => 53,  108 => 52,  104 => 50,  101 => 49,  97 => 47,  94 => 46,  90 => 44,  87 => 43,  83 => 41,  80 => 40,  76 => 38,  73 => 37,  69 => 35,  66 => 34,  62 => 32,  59 => 31,  55 => 29,  52 => 28,  48 => 26,  45 => 25,  41 => 23,  38 => 22,  34 => 20,  31 => 19,  26 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
