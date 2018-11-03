<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig */
class __TwigTemplate_09e2edd7bba998a2329e245cef7058071f928e275e9de8effdcb2f8d344087aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'testpaper_heading_status' => array($this, 'block_testpaper_heading_status'),
            'testpaper_heading_content' => array($this, 'block_testpaper_heading_content'),
            'testpaper_body_sidebar' => array($this, 'block_testpaper_body_sidebar'),
            'timeoutDialog' => array($this, 'block_timeoutDialog'),
            'testpaperCheckedDialog' => array($this, 'block_testpaperCheckedDialog'),
            'testpaperFinishedDialog' => array($this, 'block_testpaperFinishedDialog'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["script_controller"] = "quiz-question/do-test";
        // line 8
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.testpaperCopy_enabled") == "1")) {
            // line 9
            $this->env->getExtension('topxia_web_twig')->loadScript("quiz-question/do-test-prevent-copy");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"es-section testpaper-heading\">
  <div class=\"testpaper-titlebar clearfix\">
    <h1 class=\"testpaper-title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "name", array()), "html", null, true);
        echo " <br><small class=\"text-sm\">";
        if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "reviewing")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("答题人："), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "nickname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("交卷时间："), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "endTime", array()), "Y-n-d H:i"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用时："), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array())), "html", null, true);
        } elseif (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("答题人："), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "nickname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("交卷时间："), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "endTime", array()), "Y-n-d H:i"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用时："), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array())), "html", null, true);
        }
        echo "</small></h1>
    <div class=\"testpaper-status\">";
        // line 16
        $this->displayBlock('testpaper_heading_status', $context, $blocks);
        echo "</div>
  </div>
  ";
        // line 18
        $this->displayBlock('testpaper_heading_content', $context, $blocks);
        // line 19
        echo "  ";
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), null)) : (null)) == "classroom")) {
            // line 20
            echo "      ";
            $context["canHandle"] = $this->env->getExtension('topxia_web_twig')->isPermitRole((isset($context["targetId"]) ? $context["targetId"] : null), "Handle");
            // line 21
            echo "  ";
        } else {
            // line 22
            echo "      ";
            $context["canHandle"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method");
            // line 23
            echo "  ";
        }
        // line 24
        echo "  ";
        if (((((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null)) && twig_in_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), array(0 => "finished", 1 => "reviewing"))) &&  !1)) {
            // line 25
            echo "
  ";
        } else {
            // line 27
            echo "    ";
            if ((((array_key_exists("showTestpaperNavbar", $context)) ? (_twig_default_filter((isset($context["showTestpaperNavbar"]) ? $context["showTestpaperNavbar"] : null), "on")) : ("on")) == "on")) {
                // line 28
                echo "      <div id=\"testpaper-navbar\" class=\"testpaper-navbar\" data-spy=\"affix\" data-offset-top=\"200\">
        <ul class=\"nav nav-pills clearfix\">
          ";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 31
                    echo "            <li><a href=\"#testpaper-questions-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $context["type"], array(), "array"), "html", null, true);
                    echo "</a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        </ul>
      </div>
    ";
            }
            // line 36
            echo "  ";
        }
        // line 37
        echo "</div>

<div class=\"row\">
  <div class=\"col-md-9 prevent-copy\">
    <div class=\"testpaper-body\" >
      ";
        // line 42
        $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:do-test.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig", 42)->display($context);
        // line 43
        echo "    </div>
  </div>
  <div class=\"col-md-3\">
    ";
        // line 46
        $this->displayBlock('testpaper_body_sidebar', $context, $blocks);
        // line 47
        echo "  </div>
</div>

  ";
        // line 50
        $this->displayBlock('timeoutDialog', $context, $blocks);
        // line 73
        echo "
  ";
        // line 74
        $this->displayBlock('testpaperCheckedDialog', $context, $blocks);
        // line 132
        echo "
  ";
        // line 133
        $this->displayBlock('testpaperFinishedDialog', $context, $blocks);
        // line 155
        echo "
";
    }

    // line 16
    public function block_testpaper_heading_status($context, array $blocks = array())
    {
    }

    // line 18
    public function block_testpaper_heading_content($context, array $blocks = array())
    {
    }

    // line 46
    public function block_testpaper_body_sidebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_timeoutDialog($context, array $blocks = array())
    {
        // line 51
        echo "
    <div class=\"timeout-dialog-layout\">
      <div id=\"timeout-dialog\" class=\"modal in\" aria-hidden=\"false\" style=\"display: none;\">
        <div class=\"modal-dialog modal-dialog-small\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试结束"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
              <div class=\"well well-lg\">
                <div class=\"empty\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试已结束，请点击下面的按钮查看结果"), "html", null, true);
        echo "~</div>
              </div>
            </div>
            <div class=\"modal-footer\">
              <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\" id=\"show_testpaper_result\" class=\"btn btn-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看结果"), "html", null, true);
        echo "</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  ";
    }

    // line 74
    public function block_testpaperCheckedDialog($context, array $blocks = array())
    {
        // line 75
        echo "
    <div class=\"testpaper-dialog-layout\">
      <div id=\"testpaper-checked-dialog\" class=\"modal in\" aria-hidden=\"false\" style=\"display: none;\">
        <div class=\"modal-dialog modal-dialog-small\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
              <h4 class=\"modal-title\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成批阅"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">

              <div class=\"form-group\">
                <div class=\"controls\">
                  <textarea class=\"form-control\" rows='4' id=\"testpaper-teacherSay-input\" placeholder=\"请输入评语\"></textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"controls\">
                  <select class=\"form-control\" id=\"testpaper-teacherSay-select\">
                    <option value=\"\">---";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("常用评语"), "html", null, true);
        echo "---</option>
                    <option value=\"1\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("继续努力，继续进步！"), "html", null, true);
        echo "</option>
                    <option value=\"2\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("不错，有进步，再努力些就会更棒！"), "html", null, true);
        echo "</option>
                    <option value=\"3\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("你真棒！我为你骄傲！"), "html", null, true);
        echo "</option>
                    <option value=\"4\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有点松懈了吧？继续加油吧！"), "html", null, true);
        echo "</option>
                    <option value=\"5\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用心、专注、坚持，你能做的更好的！"), "html", null, true);
        echo "</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-md-4 controls\">
                  ";
        // line 105
        if (((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null))) {
            // line 106
            echo "                    <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "objectiveScore", array()), "html", null, true);
            echo "\" name=\"objectiveScore\" />
                    ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷得分"), "html", null, true);
            echo ":<span id=\"totalScore\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "objectiveScore", array()), "html", null, true);
            echo "</span>
                  ";
        }
        // line 109
        echo "                </div>
                <div class=\"col-md-8 controls radios\">
                  ";
        // line 111
        echo $this->env->getExtension('topxia_html_twig')->radios("passedStatus", $this->env->getExtension('topxia_web_twig')->getDict("passedStatus"), "passed");
        echo "
                </div>
              </div>
            </div>
            <div class=\"modal-footer\">
              <a href=\"javascript:;\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</a>
              <button type=\"submit\" class=\"btn btn-info\" data-toggle=\"form-submit\" data-target=\"#teacherCheckForm\" id=\"testpaper-teacherSay-btn\" data-post-url=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_teacher_check", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\"
              ";
        // line 118
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), "course")) : ("course")) == "classroom")) {
            // line 119
            echo "                data-goto=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => (isset($context["targetId"]) ? $context["targetId"] : null), "status" => "reviewing")), "html", null, true);
            echo "\"
              ";
        } else {
            // line 121
            echo "                data-goto=\"";
            echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
            echo "\"
              ";
        }
        // line 123
        echo "
              >";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成批阅"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  ";
    }

    // line 133
    public function block_testpaperFinishedDialog($context, array $blocks = array())
    {
        // line 134
        echo "
    <div class=\"testpaper-finished-dialog-layout\">
      <div id=\"testpaper-finished-dialog\" class=\"modal in\" aria-hidden=\"false\" style=\"display: none;\">
        <div class=\"modal-dialog modal-dialog-small\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确认交卷"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
              <h4 class=\"text-primary\">";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您真的要交卷吗？"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-footer\">
              <a href=\"javascript:;\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</a>
              <button class=\"btn btn-primary\" id=\"testpaper-finish-btn\" data-saving-text=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在交卷, 请稍等"), "html", null, true);
        echo "...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确认交卷"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 147,  375 => 146,  369 => 143,  363 => 140,  355 => 134,  352 => 133,  340 => 124,  337 => 123,  331 => 121,  325 => 119,  323 => 118,  319 => 117,  315 => 116,  307 => 111,  303 => 109,  296 => 107,  291 => 106,  289 => 105,  280 => 99,  276 => 98,  272 => 97,  268 => 96,  264 => 95,  260 => 94,  245 => 82,  236 => 75,  233 => 74,  219 => 65,  212 => 61,  205 => 57,  197 => 51,  194 => 50,  189 => 46,  184 => 18,  179 => 16,  174 => 155,  172 => 133,  169 => 132,  167 => 74,  164 => 73,  162 => 50,  157 => 47,  155 => 46,  150 => 43,  148 => 42,  141 => 37,  138 => 36,  133 => 33,  122 => 31,  118 => 30,  114 => 28,  111 => 27,  107 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  87 => 18,  82 => 16,  58 => 15,  54 => 13,  51 => 12,  43 => 3,  39 => 1,  36 => 9,  34 => 8,  32 => 6,  11 => 1,);
    }
}
