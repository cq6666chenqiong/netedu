<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_23bf938fe4d9b95414d62b947488651e092b5916cc44c7d9090cf626743fb433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 7
            echo " <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\" ><span class=\"receive-modal\"></span></a>
";
        }
        // line 15
        echo "    <body style=\" background-image:url(/background2.jpg);
          background-repeat: no-repeat;
          background-size:100%;
\">





<div class=\"es-section login-section\">
  ";
        // line 31
        echo "  <div class=\"login-main\">
    <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

      ";
        // line 34
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 35
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array())), "html", null, true);
            echo "</div>
      ";
        }
        // line 37
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_username\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("工号"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required placeholder='";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("工号"), "html", null, true);
        echo "' />
          <div class=\"help-block\"></div>
        </div>
      </div>
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_password\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("密码"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("密码"), "html", null, true);
        echo "'/>
        </div>
      </div>

      <div class=\"form-group mbl\">
        <div class=\"controls\">
          <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("记住密码"), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"form-group mbl\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录"), "html", null, true);
        echo "</button>
      </div>

      <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["_target_path"]) ? $context["_target_path"] : null), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>

    <div class=\"mbl\">
      <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("找回密码"), "html", null, true);
        echo "</a>
      <span class=\"text-muted mhs\">|</span>
      <span class=\"text-muted\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有注册帐号？"), "html", null, true);
        echo "</span>
      <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即注册"), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 72
        if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
            // line 73
            echo "      <div class=\"social-login\">
        <span>
          ";
            // line 75
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null))));
            echo "
        </span>
        <div class=\"line\"></div>
      </div>
    ";
        }
        // line 80
        echo "  </div>
</div>
  </body>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 80,  163 => 75,  159 => 73,  157 => 72,  149 => 69,  145 => 68,  138 => 66,  131 => 62,  127 => 61,  121 => 58,  114 => 54,  105 => 48,  100 => 46,  90 => 41,  85 => 39,  79 => 37,  73 => 35,  71 => 34,  66 => 32,  63 => 31,  51 => 15,  45 => 7,  43 => 6,  40 => 5,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
