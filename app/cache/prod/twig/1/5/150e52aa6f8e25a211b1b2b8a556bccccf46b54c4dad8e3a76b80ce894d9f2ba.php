<?php

/* TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig */
class __TwigTemplate_150e52aa6f8e25a211b1b2b8a556bccccf46b54c4dad8e3a76b80ce894d9f2ba extends Twig_Template
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
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), true)) : (true)) == false) && ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) != "ok"))) {
            // line 2
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该课程为限制课程"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请联系客服"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "  <a class=\"btn btn-primary btn-lg\"
    ";
            // line 5
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false) || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved"))) || $this->env->getExtension('topxia_web_twig')->getSetting("user_partner.avatar_alert"))) {
                // line 6
                echo "      href=\"#modal\"
      data-toggle=\"modal\"
      data-url=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                echo "\"
    ";
            } elseif ((            // line 9
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
                // line 10
                echo "      id=\"vip-join-course\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_become_use_member", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"
    ";
            } else {
                // line 12
                echo "      href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                echo "\"
    ";
            }
            // line 14
            echo "    ";
            if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()) > 0) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))))) {
                // line 15
                echo "      disabled=\"disabled\"
    ";
            }
            // line 17
            echo "  >
    ";
            // line 18
            if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
                // line 19
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                echo "
    ";
            } else {
                // line 21
                echo "      ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 22
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买课程"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                    }
                    echo "</a>
      ";
                } else {
                    // line 24
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买课程"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                    }
                    echo "</a>
      ";
                }
                // line 26
                echo "    ";
            }
            // line 27
            echo "  </a>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  97 => 26,  87 => 24,  77 => 22,  74 => 21,  68 => 19,  66 => 18,  63 => 17,  59 => 15,  56 => 14,  50 => 12,  44 => 10,  42 => 9,  38 => 8,  34 => 6,  32 => 5,  29 => 4,  21 => 2,  19 => 1,);
    }
}
