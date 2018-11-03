<?php

/* TopxiaWebBundle:CourseStudentManage:index.html.twig */
class __TwigTemplate_fdee8a06313b20b096fc22ae5c8a60d74d1fa6e0a2660b64e714172f2932ffb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseStudentManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["side_nav"] = "students";
        // line 7
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    ";
        // line 12
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
    ";
        // line 13
        if (((isset($context["role"]) ? $context["role"] : null) == "student")) {
            // line 14
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_export_student", false))) {
                // line 15
                echo "
    ";
                // line 17
                echo "    ";
            }
            // line 18
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ((isset($context["isTeacherAuthManageStudent"]) ? $context["isTeacherAuthManageStudent"] : null) == 1))) {
                // line 19
                echo "      ";
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
                    // line 20
                    echo "
     ";
                    // line 22
                    echo "       <a class=\"btn btn-info pull-right btn-sm mhs\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_bat_student", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批量添加学员"), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 24
                    echo "       <a class=\"btn btn-info pull-right btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\" title=\"课程未发布,不可导入学员\"><i class=\"glyphicon glyphicon-import\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批量添加学员"), "html", null, true);
                    echo "</a>
      ";
                }
                // line 26
                echo "      <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
                }
                echo "</button>
    ";
            }
            // line 28
            echo "    ";
        }
        // line 29
        echo "  </div>

  <div class=\"panel-body\">
    <ul class=\"nav nav-tabs mbl\">
      <li class=\"";
        // line 33
        if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : null))) : ("")) == "student")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">正式学员
        </a>
      </li>

      <li class=\"";
        // line 38
        if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : null))) : ("")) == "record")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_record", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">退出记录
        </a>
      </li>
    </ul>
      
  ";
        // line 44
        $this->displayBlock('maincontent', $context, $blocks);
        // line 45
        echo "  </div>
</div>

";
    }

    // line 44
    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 44,  149 => 45,  147 => 44,  139 => 39,  133 => 38,  126 => 34,  120 => 33,  114 => 29,  111 => 28,  98 => 26,  92 => 24,  84 => 22,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 15,  66 => 14,  64 => 13,  55 => 12,  51 => 10,  48 => 9,  35 => 4,  31 => 1,  29 => 7,  27 => 6,  11 => 1,);
    }
}
