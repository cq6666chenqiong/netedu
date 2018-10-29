<?php

/* TopxiaWebBundle::bootstrap-modal-layout.html.twig */
class __TwigTemplate_2696d03f5690dbd3246ec010a9a4b48223ecd3ab4e2e6b05fadc48cca64cc591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-modal-layout.html.twig", 1);
        // line 2
        echo "<div class=\"modal-dialog ";
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter((isset($context["modal_class"]) ? $context["modal_class"] : null), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["modal_class"]) ? $context["modal_class"] : null), "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 9
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter((isset($context["hide_footer"]) ? $context["hide_footer"] : null), false)) : (false))) {
            // line 10
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 12
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 13
        echo "  </div>
</div>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 12
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  72 => 10,  67 => 8,  62 => 6,  56 => 13,  53 => 12,  47 => 10,  45 => 9,  41 => 8,  36 => 6,  25 => 2,  23 => 1,);
    }
}
