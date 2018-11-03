<?php

/* TopxiaWebBundle:QuizQuestionTest:flag.html.twig */
class __TwigTemplate_de006f92a4bfb68f1fb70577019da5c119b4e67d350648356cd7a920a06520f3 extends Twig_Template
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
        $context["favorites"] = ((array_key_exists("favorites", $context)) ? (_twig_default_filter((isset($context["favorites"]) ? $context["favorites"] : null), array())) : (array()));
        // line 2
        echo "
";
        // line 3
        if ((twig_in_filter("mark", (isset($context["flags"]) ? $context["flags"] : null)) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null)))) {
            // line 4
            echo "  <a class=\"btn btn-link btn-muted btn-sm marking text-muted\"><span class=\"glyphicon glyphicon-bookmark text-muted\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标记"), "html", null, true);
            echo "</a>
  <a class=\"btn btn-link btn-sm unMarking\" style=\"display:none\"><span class=\"glyphicon glyphicon-bookmark\"></span> ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消标记"), "html", null, true);
            echo "</a>
";
        }
        // line 7
        echo "
";
        // line 8
        if ((twig_in_filter("favorite", (isset($context["flags"]) ? $context["flags"] : null)) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null)))) {
            // line 9
            echo "  <button data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_favorite_question", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), "targetType" => "testpaper", "targetId" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default favorite-btn\" ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), (isset($context["favorites"]) ? $context["favorites"] : null))) {
                echo "style=\"display:none\"";
            }
            echo "><span class=\"glyphicon glyphicon-star-empty\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收藏"), "html", null, true);
            echo "</button>
  <button data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_unfavorite_question", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), "targetType" => "testpaper", "targetId" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link btn-sm unfavorite-btn\" ";
            if (!twig_in_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), (isset($context["favorites"]) ? $context["favorites"] : null))) {
                echo "style=\"display:none\"";
            }
            echo "><span class=\"glyphicon glyphicon-star\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消收藏"), "html", null, true);
            echo "</button>
";
        }
        // line 12
        echo "
";
        // line 13
        if ((twig_in_filter("analysis", (isset($context["flags"]) ? $context["flags"] : null)) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null)))) {
            // line 14
            echo "  ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "analysis", array()) == "")) {
                // line 15
                echo "    <a class=\"btn btn-sm btn-link analysis-btn\"><span class=\"glyphicon glyphicon-chevron-down\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开解析"), "html", null, true);
                echo "</a>
    <a class=\"btn btn-sm btn-link unanalysis-btn\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up\"></span> ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起解析"), "html", null, true);
                echo "</a>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  71 => 15,  68 => 14,  66 => 13,  63 => 12,  52 => 10,  41 => 9,  39 => 8,  36 => 7,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
