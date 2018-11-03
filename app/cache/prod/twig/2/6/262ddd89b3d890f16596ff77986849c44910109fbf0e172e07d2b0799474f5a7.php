<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_262ddd89b3d890f16596ff77986849c44910109fbf0e172e07d2b0799474f5a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:CourseManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<style>
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "manage" => true)));
        echo "

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 20
        $this->displayBlock('side', $context, $blocks);
        // line 167
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 169
        $this->displayBlock('main', $context, $blocks);
        // line 170
        echo "  </div>
</div>
";
    }

    // line 20
    public function block_side($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 22
        echo "      <div class=\"sidenav locked\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程信息"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 25
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 26
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 27
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "base")), "html", null, true);
        } else {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "\">
              <span ";
        // line 30
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 33
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "detail")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 34
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "detail")), "html", null, true);
        } else {
            // line 36
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_detail", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 37
        echo "\">
              <span ";
        // line 38
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("讲师信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 41
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 42
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 43
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "picture")), "html", null, true);
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 45
        echo "\">
              <span ";
        // line 46
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程图片"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 49
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "lesson")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 50
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 51
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lesson")), "html", null, true);
        } else {
            // line 52
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 53
        echo "\">
              <span ";
        // line 54
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo "
            </a>
          </li>
          ";
        // line 75
        echo "        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员管理"), "html", null, true);
        echo "</li>
            ";
        // line 97
        echo "
            <li class=\"list-group-item ";
        // line 98
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "students")) {
            echo "active";
        }
        echo "\">
              <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
                <span></span>";
        // line 100
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
              </a>
            </li>
          </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题库"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 107
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 108
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 109
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question")), "html", null, true);
        } else {
            // line 110
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 111
        echo "\">
              <span ";
        // line 112
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目管理"), "html", null, true);
        echo "
            </a>
          </li>

          ";
        // line 116
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("QuestionPlus") && $this->env->getExtension('topxia_web_twig')->getSetting("question_plus.enabled"))) {
            // line 117
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question_plumber")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 118
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 119
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question_plumber")), "html", null, true);
            } else {
                // line 120
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_question_plumber", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "import")), "html", null, true);
                echo "
              ";
            }
            // line 121
            echo "\">
              <span ";
            // line 122
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目导入/导出"), "html", null, true);
            echo "
            </a>
            </li>
          ";
        }
        // line 126
        echo "
          <!-- <li class=\"list-group-item ";
        // line 127
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question_category")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">题目类别管理</a>
          </li> -->

          <li class=\"list-group-item ";
        // line 131
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testpaper")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 132
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 133
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "testpaper")), "html", null, true);
        } else {
            // line 134
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 135
        echo "\">
              <span ";
        // line 136
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷管理"), "html", null, true);
        echo "
            </a>
          </li>
          ";
        // line 149
        echo "        </ul>
         ";
        // line 165
        echo "      </div>
    ";
    }

    // line 169
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 169,  367 => 165,  364 => 149,  354 => 136,  351 => 135,  345 => 134,  341 => 133,  339 => 132,  333 => 131,  327 => 128,  321 => 127,  318 => 126,  307 => 122,  304 => 121,  298 => 120,  294 => 119,  292 => 118,  285 => 117,  283 => 116,  272 => 112,  269 => 111,  263 => 110,  259 => 109,  257 => 108,  251 => 107,  247 => 106,  235 => 100,  231 => 99,  225 => 98,  222 => 97,  218 => 78,  213 => 75,  203 => 54,  200 => 53,  194 => 52,  190 => 51,  188 => 50,  182 => 49,  172 => 46,  169 => 45,  163 => 44,  159 => 43,  157 => 42,  151 => 41,  141 => 38,  138 => 37,  132 => 36,  128 => 35,  126 => 34,  120 => 33,  110 => 30,  107 => 29,  101 => 28,  97 => 27,  95 => 26,  89 => 25,  85 => 24,  81 => 22,  78 => 21,  75 => 20,  69 => 170,  67 => 169,  63 => 167,  61 => 20,  54 => 16,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
