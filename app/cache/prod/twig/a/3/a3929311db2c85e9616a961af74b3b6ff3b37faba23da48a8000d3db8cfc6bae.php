<?php

/* TopxiaWebBundle:Default:header.html.twig */
class __TwigTemplate_a3929311db2c85e9616a961af74b3b6ff3b37faba23da48a8000d3db8cfc6bae extends Twig_Template
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
        echo "                        ";
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 24)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)), "isMobile" => true)));
        // line 25
        echo "                    </ul>
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
        echo "                <img src=\"/logo.png\">
            </a>

        </div>
        <div      style=\"width:500px;margin-left:auto;margin-right:auto;text-align: center;font-size: 18px;color: #0B900D;line-height: 50px\">
            <img src=\"/mod.png\">
        </div>

        <nav class=\"collapse navbar-collapse\">
            ";
        // line 51
        echo "            <div class=\"navbar-user ";
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
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\" class=\"dropdown-header\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
            echo "</li>
                            <!-- <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-person\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人主页"), "html", null, true);
            echo "</a></li> -->
                            <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"es-icon es-icon-setting\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人设置"), "html", null, true);
            echo "</a></li>
                            <li class=\"hidden-lg\">
                                <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
                                    <i class=\"es-icon es-icon-eventnote\"></i>";
            // line 65
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
            }
            // line 66
            echo "                                </a>
                            </li>
                            <!-- <li><a href=\"";
            // line 68
            if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
                echo $this->env->getExtension('routing')->getPath("my_coin");
            } else {
                echo $this->env->getExtension('routing')->getPath("my_bill");
            }
            echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("账户中心"), "html", null, true);
            echo "</a></li> -->
                            ";
            // line 73
            echo "                            ";
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_course");
                echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理后台"), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 75
            echo "
                            <!--  <li class=\"hidden-lg\"><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
            echo "</a></li>
            <li class=\"hidden-lg\"><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-mail\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "</a></li> -->
                            ";
            // line 78
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 79
                echo "                            ";
            } else {
                // line 80
                echo "                                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("logout");
                echo "\"><i class=\"es-icon es-icon-power\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出登录"), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 82
            echo "
                        </ul>
                    </li>
                    <li class=\"visible-lg\">
                        <a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
                            ";
            // line 87
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 88
                echo "                                ";
                // line 89
                echo "                            ";
            } else {
                // line 90
                echo "                                ";
                // line 91
                echo "                            ";
            }
            // line 92
            echo "                        </a>
                    </li>
                    <li class=\"visible-lg nav-hover\">
                        <!--
          ";
            // line 96
            if (($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0))) {
                // line 97
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } elseif (( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(            // line 98
(isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)))) {
                // line 99
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } else {
                // line 101
                echo "            <a><i class=\"es-icon es-icon-mail\"></i></a>
          ";
            }
            // line 103
            echo "          -->

                        ";
            // line 105
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 106
                echo "                            <!--
              <li>
                <a href=\"";
                // line 108
                echo $this->env->getExtension('routing')->getPath("notification");
                echo "\">
                  <span class=\"pull-right num\">";
                // line 109
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                  <i class=\"es-icon es-icon-notificationson\"></i>";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通知"), "html", null, true);
                echo "
                </a>
              </li>
               -->
                        ";
            }
            // line 115
            echo "                        <!--
            <li>

              <a href=\"";
            // line 118
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\">
                <span class=\"pull-right num\">";
            // line 119
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                <i class=\"es-icon es-icon-mail\"></i>";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
            echo "
              </a>

            </li>
          </ul>
        </li>
        -->
                        ";
        } else {
            // line 128
            echo "                        ";
            // line 129
            echo "                        <ul  role=\"menu\">
                            <li class=\"user-avatar-li nav-hover visible-xs\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\">
                                    <img class=\"avatar-xs\" src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li style=\"padding: 15px;list-style-type:none;\"><a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\"><img src=\"/mylogin.png\" style=\"width: 15px;height: 15px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</a></li>
                              ";
            // line 137
            echo "                                </ul>
                            </li>
                            <li class=\" fs hidden-xs \" style=\"padding: 15px;list-style-type:none;\"><a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\"><span class=\"fs\"><img src=\"/mylogin.png\" style=\"width: 15px;height: 15px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
            echo "</span></a></li>
                         ";
            // line 141
            echo "                            ";
        }
        // line 142
        echo "                        </ul>
                        ";
        // line 151
        echo "            </div>
        </nav>
    </div>


</header>
<div class=\"es-header navbar\" style=\"background-color: #037eb6;width: 100%\" >

    ";
        // line 159
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
            // line 160
            echo "
<div style=\"width:700px;margin-left:auto;margin-right:auto;\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\" >
        ";
            // line 163
            $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 163)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)), "isMobile" => false)));
            // line 164
            echo "    </ul>
</div>

";
        } else {
            // line 168
            echo "
    <div style=\"width:450px;margin-left:auto;margin-right:auto;\">
        <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\" >
            ";
            // line 171
            $this->loadTemplate("TopxiaWebBundle:Default:xsheader.html.twig", "TopxiaWebBundle:Default:header.html.twig", 171)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : null), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)), "isMobile" => false)));
            // line 172
            echo "        </ul>
    </div>

";
        }
        // line 176
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 176,  364 => 172,  362 => 171,  357 => 168,  351 => 164,  349 => 163,  344 => 160,  342 => 159,  332 => 151,  329 => 142,  326 => 141,  320 => 139,  316 => 137,  310 => 135,  304 => 132,  299 => 129,  297 => 128,  286 => 120,  280 => 119,  276 => 118,  271 => 115,  263 => 110,  257 => 109,  253 => 108,  249 => 106,  247 => 105,  243 => 103,  239 => 101,  235 => 99,  233 => 98,  230 => 97,  228 => 96,  222 => 92,  219 => 91,  217 => 90,  214 => 89,  212 => 88,  210 => 87,  206 => 86,  200 => 82,  192 => 80,  189 => 79,  187 => 78,  177 => 77,  167 => 76,  164 => 75,  154 => 73,  144 => 68,  140 => 66,  134 => 65,  130 => 64,  123 => 62,  117 => 61,  113 => 60,  107 => 57,  102 => 54,  100 => 53,  92 => 51,  81 => 37,  78 => 35,  72 => 33,  66 => 31,  64 => 30,  59 => 28,  54 => 25,  51 => 24,  49 => 23,  41 => 18,  36 => 16,  19 => 1,);
    }
}
