<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-show.html.twig */
class __TwigTemplate_aa6ebff275ddd1cf8c6a2ecf41ed8c27324caf39c68665bd9c9cb06e4168a342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-show.html.twig", 1);
        $this->blocks = array(
            'testpaper_heading_status' => array($this, 'block_testpaper_heading_status'),
            'testpaper_heading_content' => array($this, 'block_testpaper_heading_content'),
            'testpaper_body_sidebar' => array($this, 'block_testpaper_body_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_testpaper_heading_status($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (((array_key_exists("isPreview", $context)) ? (_twig_default_filter((isset($context["isPreview"]) ? $context["isPreview"] : null), false)) : (false))) {
            // line 5
            echo "    <div class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷预览中"), "html", null, true);
            echo "</div>
  ";
        } else {
            // line 7
            echo "    ";
            if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "doing")) {
                // line 8
                echo "      <div class=\"label label-primary testpaper-status-doing\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("答题中"), "html", null, true);
                echo "</div>
    ";
            }
            // line 10
            echo "  ";
        }
    }

    // line 13
    public function block_testpaper_heading_content($context, array $blocks = array())
    {
        // line 14
        echo "  <div class=\"testpaper-description\">";
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "description", array()));
        echo "</div>
  <div class=\"testpaper-metas\">
    共 ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "itemCount", array()), "html", null, true);
        echo " 题，总分 ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "score", array()), "html", null, true);
        echo " 分
      ";
        // line 17
        if (($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "passedScore", array()) > 0)) {
            echo "，及格为 ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "passedScore", array()), "html", null, true);
            echo " 分";
        }
        // line 18
        echo "      ";
        if (($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "limitedTime", array()) > 0)) {
            echo "，请在 ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "limitedTime", array()), "html", null, true);
            echo " 分钟内作答";
        }
        // line 19
        echo "      。
  </div>
";
    }

    // line 23
    public function block_testpaper_body_sidebar($context, array $blocks = array())
    {
        // line 24
        echo "  <div class=\"testpaper-card\" data-spy=\"affix\" data-offset-top=\"200\" data-offset-bottom=\"200\">
    ";
        // line 25
        $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:test-paper-card.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-show.html.twig", 25)->display($context);
        // line 26
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  96 => 25,  93 => 24,  90 => 23,  84 => 19,  77 => 18,  71 => 17,  65 => 16,  59 => 14,  56 => 13,  51 => 10,  45 => 8,  42 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
