<?php

/* TopxiaWebBundle:CourseOrder:buy-modal.html.twig */
class __TwigTemplate_e97c918905e3a507e69628a0d493f25c600915559b5f7c8047247d65dcef930b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseOrder:buy-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["billable"] = true;
        // line 4
        if ((((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") == 1) && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin")) && ($this->getAttribute(        // line 5
(isset($context["course"]) ? $context["course"] : null), "price", array()) == 0)) || (( !$this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") || ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "RMB")) && ($this->getAttribute(        // line 6
(isset($context["course"]) ? $context["course"] : null), "price", array()) == 0)))) {
            // line 8
            $context["billable"] = false;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买课程"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        if (((isset($context["billable"]) ? $context["billable"] : null) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live"))) {
            // line 14
            echo "    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注意：请在30分钟内完成支付，否则订单将会过期失效"), "html", null, true);
            echo "</div>
  ";
        }
        // line 16
        echo "  <form id=\"course-buy-form\" class=\"form-horizontal\" method=\"post\"
  action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("course_buy_modify_user_info");
        echo "\"
  >
    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程名称"), "html", null, true);
        echo "</div>
      <div class=\"col-sm-9 controls\">
      \t<span class=\"control-text text-muted\">《";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "》</span>
        <input type=\"hidden\" name=\"lessonId\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["lessonId"]) ? $context["lessonId"] : null), "html", null, true);
        echo "\">
      </div>
    </div>

    ";
        // line 27
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            // line 28
            echo "    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
            echo "</div>
      <div class=\"col-sm-9 controls money-text\">
      \t<span class=\"control-text\">
          ";
            // line 32
            if (((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok")) {
                // line 33
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员"), "html", null, true);
                echo "
          ";
            } else {
                // line 35
                echo "            ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 36
                    echo "            <strong class=\"money\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo "</strong>
            <span class=\"text-muted\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 39
                    echo "            <strong class=\"money\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                    echo "</strong>
        \t\t<span class=\"text-muted\">";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 42
                echo "          ";
            }
            // line 43
            echo "      \t</span>
      </div>
    </div>
    ";
        }
        // line 61
        echo "    <input type=\"hidden\" name=\"targetId\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"payment\" value=\"alipay\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    ";
        // line 65
        $context["userinfo_enable"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false);
        // line 66
        echo "    ";
        $context["checkedFields"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.userinfoFields"), array());
        // line 67
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig", "TopxiaWebBundle:CourseOrder:buy-modal.html.twig", 67)->display(array_merge($context, array("isBuyFillUserinfo" => (isset($context["userinfo_enable"]) ? $context["userinfo_enable"] : null), "userinfoFieldsSetting" => (isset($context["checkedFields"]) ? $context["checkedFields"] : null), "userFields" => (isset($context["userFields"]) ? $context["userFields"] : null), "user" => (isset($context["user"]) ? $context["user"] : null), "showNavTip" => 1)));
        // line 68
        echo "
  </form>
";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "  ";
        $context["priceType"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type");
        // line 74
        echo "  ";
        if (((isset($context["billable"]) ? $context["billable"] : null) && (((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) || ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0))))) {
            // line 75
            echo "    ";
            if ((isset($context["payments"]) ? $context["payments"] : null)) {
                // line 76
                echo "      ";
                if ((isset($context["member"]) ? $context["member"] : null)) {
                    // line 77
                    echo "        <span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览模式无法支付"), "html", null, true);
                    echo "</span>
        <button class=\"btn btn-primary\" disabled=\"disabled\">";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("去支付"), "html", null, true);
                    echo "</button>
      ";
                } else {
                    // line 80
                    echo "        ";
                    if (((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok")) {
                        // line 81
                        echo "           <button id=\"join-course-btn\" class=\"btn btn-primary\" data-loading-text=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                        echo "...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                        echo "</button>
        ";
                    } else {
                        // line 83
                        echo "        <button id=\"course-pay\" class=\"btn btn-primary\" type=\"submit\" data-loading-text=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在创建订单"), "html", null, true);
                        echo "...\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("去支付"), "html", null, true);
                        echo "</button>
        ";
                    }
                    // line 85
                    echo "      ";
                }
                // line 86
                echo "    ";
            } elseif (( !(isset($context["payments"]) ? $context["payments"] : null) && ((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok"))) {
                // line 87
                echo "      <button id=\"join-course-btn\" class=\"btn btn-primary\"
        ";
                // line 88
                if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))))) {
                    // line 89
                    echo "        disabled=\"disabled\"
        ";
                }
                // line 91
                echo "        data-loading-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                echo "...\" data-submiting-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                echo "...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                echo "</button>
    ";
            }
            // line 93
            echo "  ";
        } else {
            // line 94
            echo "    ";
            if ((isset($context["member"]) ? $context["member"] : null)) {
                // line 95
                echo "      <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览模式无法加入学习"), "html", null, true);
                echo "</span>
      <button class=\"btn btn-primary\" disabled=\"disabled\">";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                echo "</button>
    ";
            } else {
                // line 98
                echo "      ";
                if ( !(isset($context["avatarAlert"]) ? $context["avatarAlert"] : null)) {
                    // line 99
                    echo "        <button id=\"join-course-btn\" class=\"btn btn-primary\"
        ";
                    // line 100
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))))) {
                        // line 101
                        echo "        disabled=\"disabled\"
        ";
                    }
                    // line 103
                    echo "        data-loading-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                    echo "...\" data-submiting-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加入"), "html", null, true);
                    echo "...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习"), "html", null, true);
                    echo "</button>
      ";
                }
                // line 105
                echo "    ";
            }
            // line 106
            echo "
  ";
        }
        // line 108
        echo "
  <script>
    app.load('course/buy-modal');
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:buy-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 108,  275 => 106,  272 => 105,  262 => 103,  258 => 101,  256 => 100,  253 => 99,  250 => 98,  245 => 96,  240 => 95,  237 => 94,  234 => 93,  224 => 91,  220 => 89,  218 => 88,  215 => 87,  212 => 86,  209 => 85,  201 => 83,  193 => 81,  190 => 80,  185 => 78,  180 => 77,  177 => 76,  174 => 75,  171 => 74,  168 => 73,  165 => 72,  159 => 68,  156 => 67,  153 => 66,  151 => 65,  146 => 63,  140 => 61,  134 => 43,  131 => 42,  126 => 40,  121 => 39,  116 => 37,  111 => 36,  108 => 35,  102 => 33,  100 => 32,  94 => 29,  91 => 28,  89 => 27,  82 => 23,  78 => 22,  73 => 20,  67 => 17,  64 => 16,  58 => 14,  56 => 13,  53 => 12,  50 => 11,  40 => 10,  36 => 1,  33 => 8,  31 => 6,  30 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }
}
