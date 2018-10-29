<?php

/* TopxiaAdminBundle:Course:tr.html.twig */
class __TwigTemplate_2d9bf408308914545b4281ad5ec1a53071d61c33fcb0bfe2bab3e45c76a9ca55 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 1);
        // line 2
        $context["target"] = "normal_index";
        // line 3
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</strong></a>
    ";
        // line 24
        echo "  </td>
  ";
        // line 47
        echo "  <td>";
        echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()));
        echo "</td>
  <td>
    ";
        // line 49
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">管理</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
          ";
        // line 87
        echo "        

        ";
        // line 89
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 90
            echo "          <li class=\"divider\"></li>
          <li><a class=\"close-course\" href=\"javascript:\" data-url=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_close", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> 关闭课程</a></li>
       ";
            // line 93
            echo "        ";
        }
        // line 94
        echo "
        ";
        // line 95
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published")) {
            // line 96
            echo "          <li class=\"divider\"></li>
          <li><a class=\"publish-course\" href=\"javascript:\" data-url=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 发布课程</a></li>
        ";
        }
        // line 99
        echo "
        ";
        // line 100
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isSuperAdmin", array(), "method"))) {
            // line 101
            echo "          <li class=\"divider\"></li>
          <li><a class=\"delete-course\" href=\"javascript:;\" data-url=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "", "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
            echo "\"  data-chapter=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array()), "章")) : ("章")), "html", null, true);
            echo "\" data-part=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array()), "节")) : ("节")), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除课程</a></li>
        ";
        }
        // line 104
        echo "      </ul>
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 104,  108 => 102,  105 => 101,  103 => 100,  100 => 99,  95 => 97,  92 => 96,  90 => 95,  87 => 94,  84 => 93,  78 => 91,  75 => 90,  73 => 89,  69 => 87,  60 => 55,  53 => 51,  48 => 49,  42 => 47,  39 => 24,  33 => 6,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
