<?php

/* TopxiaAdminBundle:Default:header.html.twig */
class __TwigTemplate_d0e3f398d04b6b5460bb68d2485382332fef70301e2d251eb42ed1f1ddb2aa2f extends Twig_Template
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
        echo "<header class=\"es-header navbar\">
  <div class=\"es-header navbar\">
    <style type=\"text/css\">
      .fs{
        color: white;
      }

    </style>
    <div class=\"navbar-header\" >
      <div class=\"visible-xs  navbar-mobile\">
        <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
          <i class=\"es-icon es-icon-menu\"></i>
        </a>
        <div class=\"html-mask\"></div>
        <div class=\"nav-mobile\">
          <form class=\"navbar-form\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\">
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "\" name=\"q\">
              <button class=\"button es-icon es-icon-search\"></button>
            </div>
          </form>
          <ul class=\"nav navbar-nav\">
              ";
        // line 23
        $context["navigations"] = $this->env->getExtension('topxia_data_twig')->getData("NavigationsTree", array());
        // line 24
        echo "              ";
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaAdminBundle:Default:header.html.twig", 24)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)), "isMobile" => true)));
        // line 25
        echo "          </ul>
        </div>
      </div>
      <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
        <!--
        ";
        // line 30
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 31
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\">
        ";
        } else {
            // line 33
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "卫生人才在线学习平台"), "html", null, true);
            echo "
        ";
        }
        // line 35
        echo "        -->
        ";
        // line 37
        echo "        <img src=\"/logo.png\">

      </a>
    </div>

    <div      style=\"width:500px;margin-left:auto;margin-right:auto;text-align: center;font-size: 18px;color: #0B900D;line-height: 50px\">
      <img src=\"/mod.png\">
    </div>
    <nav class=\"collapse navbar-collapse\">
        ";
        // line 51
        echo "      <div class=\"navbar-user ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
        <ul class=\"nav user-nav\">
            ";
        // line 53
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 54
            echo "
          <li class=\"user-avatar-li nav-hover\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
            </a>
            <ul class=\"nav navbar-nav navbar-right\">
              <!--
          <li data-url=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("admin_common_admin");
            echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> 常用</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
            // line 64
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
            echo "
            </ul>
          </li>
          -->
              <!--  <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> 回首页</a></li>
                <li><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> 我的教学</a></li> -->
              <li class=\"dropdown\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
            echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
                <ul class=\"dropdown-menu main-list\">
                  <li><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=\"visible-lg\">
            <a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
                ";
            // line 80
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 81
                echo "                    ";
                // line 82
                echo "                ";
            } else {
                // line 83
                echo "                    ";
                // line 84
                echo "                ";
            }
            // line 85
            echo "            </a>
          </li>
          <li class=\"visible-lg nav-hover\">
            <!--
          ";
            // line 89
            if (($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0))) {
                // line 90
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } elseif (( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(            // line 91
(isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)))) {
                // line 92
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } else {
                // line 94
                echo "            <a><i class=\"es-icon es-icon-mail\"></i></a>
          ";
            }
            // line 96
            echo "          -->

              ";
            // line 98
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 99
                echo "                <!--
              <li>
                <a href=\"";
                // line 101
                echo $this->env->getExtension('routing')->getPath("notification");
                echo "\">
                  <span class=\"pull-right num\">";
                // line 102
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                  <i class=\"es-icon es-icon-notificationson\"></i>";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
                echo "
                </a>
              </li>
               -->
              ";
            }
            // line 108
            echo "            <!--
            <li>

              <a href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\">
                <span class=\"pull-right num\">";
            // line 112
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                <i class=\"es-icon es-icon-mail\"></i>";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "
              </a>

            </li>
          </ul>
        </li>
        -->
              ";
        } else {
            // line 121
            echo "              ";
            // line 122
            echo "            <ul  role=\"menu\">
              <li class=\"user-avatar-li nav-hover visible-xs\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\">
                  <img class=\"avatar-xs\" src=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
                </a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                  <li style=\"padding: 15px;list-style-type:none;\"><a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\"><img src=\"/mylogin.png\" style=\"width: 15px;height: 15px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a></li>
                 ";
            // line 130
            echo "                </ul>
              </li>
              <li class=\" fs hidden-xs \" style=\"padding: 15px;list-style-type:none;\"><a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\"><span class=\"fs\"><img src=\"/mylogin.png\" style=\"width: 15px;height: 15px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</span></a></li>
                ";
            // line 134
            echo "                   ";
        }
        // line 135
        echo "               </ul>
                 ";
        // line 144
        echo "      </div>
    </nav>
  </div>


</header>
<div class=\"es-header navbar\" style=\"background-color: #037eb6;width: 100%\" >

  <div style=\"width:700px;margin-left:auto;margin-right:auto;\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\" >
        ";
        // line 154
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaAdminBundle:Default:header.html.twig", 154)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)), "isMobile" => false)));
        // line 155
        echo "    </ul>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 155,  288 => 154,  276 => 144,  273 => 135,  270 => 134,  264 => 132,  260 => 130,  254 => 128,  248 => 125,  243 => 122,  241 => 121,  230 => 113,  224 => 112,  220 => 111,  215 => 108,  207 => 103,  201 => 102,  197 => 101,  193 => 99,  191 => 98,  187 => 96,  183 => 94,  179 => 92,  177 => 91,  174 => 90,  172 => 89,  166 => 85,  163 => 84,  161 => 83,  158 => 82,  156 => 81,  154 => 80,  150 => 79,  141 => 73,  136 => 71,  131 => 69,  127 => 68,  120 => 64,  114 => 61,  107 => 57,  102 => 54,  100 => 53,  92 => 51,  81 => 37,  78 => 35,  72 => 33,  66 => 31,  64 => 30,  59 => 28,  54 => 25,  51 => 24,  49 => 23,  41 => 18,  36 => 16,  19 => 1,);
    }
}
