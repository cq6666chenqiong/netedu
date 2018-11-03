<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig */
class __TwigTemplate_65a73bbdfdceda53ed5d7b3b835b0e2738194817eafbd75d877bcf3494b26ea1 extends Twig_Template
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
        echo "<div class=\"testpaper-question-stem-wrap clearfix\">
  <div class=\"testpaper-question-seq-wrap\">
    <div class=\"testpaper-question-seq\">";
        // line 3
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array()), "html", null, true);
        }
        echo "</div>
    <div class=\"testpaper-question-score\">";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "score", array()), $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "score", array()))) : ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "score", array()))), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "</div>
  </div>
  ";
        // line 6
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionType", array()) == "fill")) {
            // line 7
            echo "    <div class=\"testpaper-question-stem\">";
            echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemHtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "stem", array()))));
            echo "</div>
  ";
        } else {
            // line 9
            echo "    <div class=\"testpaper-question-stem\">";
            echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "stem", array())));
            echo "</div>
    ";
        }
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  43 => 9,  37 => 7,  35 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
