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
        // line 14
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 1)) {
            // line 15
            echo "  <span class=\"title\" style=\"color: black;\">必修</span>
          ";
        } else {
            // line 17
            echo "  <span  class=\"title\" style=\"color: black;\" >选修</span>
";
        }
        // line 19
        echo "  ";
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array())) {
            // line 20
            echo "
    ";
            // line 21
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 22
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin")) {
                    // line 23
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 25
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</span>
      ";
                }
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 30
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin")) {
                    // line 31
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 33
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</del></span>
      ";
                }
                // line 35
                echo "    ";
            }
            // line 36
            echo "
    ";
            // line 37
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("discount", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 38
                echo "
      <span class=\"discount\">
        ";
                // line 40
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()) == 0) || (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()) == 0))) || (((isset($context["priceType"]) ? $context["priceType"] : null) == "default") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()) == 0)))) {
                    // line 41
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("限免"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 43
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), 2, "common"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("折"), "html", null, true);
                    echo "
        ";
                }
                // line 45
                echo "      </span>

    ";
            }
            // line 48
            echo "
  ";
        } else {
            // line 50
            echo "
    ";
            // line 51
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 52
                echo "      <span class=\"price\">
        ";
                // line 53
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 54
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
                    // line 55
                    echo "        ";
                } else {
                    // line 56
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(""), "html", null, true);
                        echo "</span> ";
                    }
                    // line 57
                    echo "        ";
                }
                // line 58
                echo "      </span>
    ";
            }
            // line 60
            echo "
    ";
            // line 61
            if (twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : null))) {
                // line 62
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin")) {
                    // line 63
                    echo "        <span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 65
                    echo "        ¥<span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                    echo "</span>
      ";
                }
                // line 67
                echo "    ";
            }
            // line 68
            echo "
  ";
        }
        // line 70
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
        return array (  199 => 70,  195 => 68,  192 => 67,  186 => 65,  179 => 63,  176 => 62,  174 => 61,  171 => 60,  167 => 58,  164 => 57,  154 => 56,  151 => 55,  139 => 54,  137 => 53,  134 => 52,  132 => 51,  129 => 50,  125 => 48,  120 => 45,  113 => 43,  107 => 41,  105 => 40,  101 => 38,  99 => 37,  96 => 36,  93 => 35,  86 => 33,  78 => 31,  75 => 30,  73 => 29,  70 => 28,  67 => 27,  60 => 25,  52 => 23,  49 => 22,  47 => 21,  44 => 20,  41 => 19,  37 => 17,  33 => 15,  31 => 14,  26 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
