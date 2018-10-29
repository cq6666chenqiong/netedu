<?php

/* TopxiaWebBundle:My:layout.html.twig */
class __TwigTemplate_5d1d4808d2e1b688b373cc6af7a85aaa9e3b0f40669b2ac2684e192c0d822874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:My:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (twig_in_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), array(0 => "my-teaching-courses", 1 => "my-teaching-classroom", 2 => "my-teaching-questions", 3 => "my-teaching-discussions", 4 => "my-teaching-check", 5 => "my-teaching-homework-check", 6 => "material-lib"))) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
  ";
        }
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <style>
      .bc{
        background-color : white;
      }

    </style>

";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:My:avatarAlert"));
        echo "

<div class=\"row row-3-9\">
  <div class=\"col-md-3\">
    <div class=\"sidenav\">
      ";
        // line 35
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method")) {
            // line 36
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            echo "</li>
          <li class=\"list-group-item
           ";
            // line 39
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-courses")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("my_teaching_courses");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
            echo "</a>
          </li>

           ";
            // line 73
            echo "        </ul>
      ";
        }
        // line 75
        echo "
      <ul class=\"list-group\">
        <li class=\"list-group-heading\" style=\"background-color: white\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
        echo "</li>
        <li class=\"list-group-item \" style=\"background-color: white\">
          <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的课程"), "html", null, true);
        echo "</a>
        </li>

";
        // line 87
        echo "        ";
        // line 90
        echo "        <li class=\" list-group-item  bc \" style=\"background-color: white\">
          <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_work", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
        echo "\">我的工作量 ";
        echo "</a>
        </li>

        <li class=\"bc list-group-item \" style=\"background-color: white\">
          <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_sorce", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
        echo "\">我的学分";
        echo "</a>
        </li>



";
        // line 143
        echo "</ul>
</div>
</div>
<div class=\"col-md-9\">";
        // line 146
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
</div>

";
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 146,  142 => 143,  133 => 95,  125 => 91,  122 => 90,  120 => 87,  112 => 79,  107 => 77,  103 => 75,  99 => 73,  91 => 40,  85 => 39,  80 => 37,  77 => 36,  74 => 35,  66 => 19,  57 => 12,  54 => 11,  44 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
