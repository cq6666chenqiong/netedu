<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-belong-classrooms.html.twig */
class __TwigTemplate_794b84e6003fa053ff8996d61d9d97c53c2934e6b6c5d159024ee01bc6c6506c extends Twig_Template
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
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 2
            echo "  <div class=\"panel panel-default belongs-class\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"> <i class=\"es-icon es-icon-locallibrary\"></i>
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所属"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("科室")), "html", null, true);
            echo "
      </h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 10
                echo "        <div class=\"media\">
          <div class=\"media-left\">
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "smallPicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"\"></a>
          </div>
          <div class=\"media-body\">
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-belong-classrooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  50 => 15,  42 => 12,  38 => 10,  34 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
