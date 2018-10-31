<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig */
class __TwigTemplate_81b2dcc11a7ed9fe454984fcc7b725ea4944373b21c37b0bcd3b7da7ca6325b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", 1);
        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["layoutClass"] = "after";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_before_content($context, array $blocks = array())
    {
        // line 6
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("首页"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</li>
  </ol>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("course/common"), "html", null, true);
        echo "

  <div class=\"course-header-top clearfix\">

    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "picture", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "

    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "info", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["member"]) ? $context["member"] : null), 2 => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : null)), "method"), "html", null, true);
        echo "

    <div class=\"course-operation\">
      ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "student_num", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
      <ul class=\"course-data clearfix two-col\">
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "favorite_btn", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)), "method"), "html", null, true);
        echo "
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "share_btn", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
      </ul>
    </div>
  </div>

  <div class=\"progress progress-sm\">
    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "percent", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "percent", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"course-header-bottom clearfix\">
    <span class=\"pull-left\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成课时："), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "number", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : null), "total", array()), "html", null, true);
        echo "</span>
    ";
        // line 40
        if ((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null)) {
            // line 41
            echo "      <a class=\"btn btn-lg btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开始学习"), "html", null, true);
            echo "</a>
      <span class=\"next-class hidden-xs\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下一课时："), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "title", array());
            echo "</a></span>
    ";
        }
        // line 44
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 44,  136 => 42,  127 => 41,  125 => 40,  117 => 39,  107 => 34,  98 => 28,  94 => 27,  89 => 25,  83 => 22,  78 => 20,  70 => 16,  67 => 15,  59 => 11,  48 => 9,  44 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
