<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-result.html.twig */
class __TwigTemplate_164324b965d0247837e6e7401c90eb958d93c03e8225f4cdbc6decdfb04ff48c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-result.html.twig", 1);
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
        // line 2
        $this->env->getExtension('topxia_web_twig')->loadScript("quiz-question/testpaper-result");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_testpaper_heading_status($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
            // line 5
            echo "    <div class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批阅完成"), "html", null, true);
            echo "</div>
  ";
        } elseif (($this->getAttribute(        // line 6
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing")) {
            // line 7
            echo "    <div class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批阅中"), "html", null, true);
            echo "</div>
  ";
        }
    }

    // line 11
    public function block_testpaper_heading_content($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-result.html.twig", 13)->display($context);
        // line 14
        echo "
  ";
        // line 15
        if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing")) {
            // line 16
            echo "    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("老师正在批阅试卷，批阅完成后会以站内私信通知您批阅结果，请稍等。"), "html", null, true);
            echo "</div>
  ";
        } elseif (($this->getAttribute(        // line 17
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
            // line 18
            echo "    ";
            if ($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "teacherSay", array())) {
                // line 19
                echo "      <div class=\"alert alert-success\">
        <div class=\"\"><strong>";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评语："), "html", null, true);
                echo "</strong></div>
        <div class=\"mtm\">";
                // line 21
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "teacherSay", array()));
                echo "</div>
      </div>
    ";
            }
            // line 24
            echo "    ";
            if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "passedStatus", array()) == "unpassed") && ((array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) ? $context["target"] : null), null)) : (null)))) {
                // line 25
                echo "      <div class=\"alert alert-danger\">
        您未通过考试，请<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_redo_test", array("lessonId" => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "testId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "testId", array()))), "html", null, true);
                echo "\">重新参加考试</a>，或者重新学习课程。
      </div>
    ";
            } elseif (($this->getAttribute(            // line 28
(isset($context["paperResult"]) ? $context["paperResult"] : null), "passedStatus", array()) == "passed")) {
                // line 29
                echo "      <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("恭喜您已通过本次考试。"), "html", null, true);
                echo "</div>
    ";
            }
            // line 31
            echo "  ";
        }
        // line 32
        echo "
";
    }

    // line 35
    public function block_testpaper_body_sidebar($context, array $blocks = array())
    {
        // line 36
        echo "
";
        // line 37
        if (((twig_in_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), array(0 => "finished", 1 => "reviewing")) && ($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "submitted")) || (($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")))) {
            // line 38
            echo "
  <div class=\"testpaper-card\" data-spy=\"affix\" data-offset-top=\"200\">
    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 43
                echo "
          ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["type"], array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "            ";
                    if (($this->getAttribute($context["item"], "questionType", array()) != "material")) {
                        // line 46
                        echo "              <a href=\"javascript:;\" data-anchor=\"#question";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                        echo "\" class=\"btn btn-default btn-index pull-left ";
                        if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing") && ($this->getAttribute($context["item"], "questionType", array()) == "essay"))) {
                            echo "checking";
                        } elseif (((($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array()), null)) : (null)) == "partRight")) {
                            echo "wrong";
                        } else {
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array()), null)) : (null)), "html", null, true);
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 48
                        echo "              ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["item"], "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "items", array()), array())) : (array())));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 49
                            echo "                <a href=\"javascript:;\" data-anchor=\"#question";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                            echo "\" class=\"btn btn-default btn-index pull-left ";
                            if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing") && ($this->getAttribute($context["item"], "questionType", array()) == "essay"))) {
                                echo "checking";
                            } elseif (((($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array()), null)) : (null)) == "partRight")) {
                                echo "wrong";
                            } else {
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array()), null)) : (null)), "html", null, true);
                            }
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                            echo "</a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "            ";
                    }
                    // line 52
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
          <div class=\"clearfix mtm mbm\"></div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
        <div class=\"testpaper-card-explain clearfix\">
            <a href=\"javascript:;\" class=\"btn btn-success btn-index\"></a><small class=\"text-muted\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正确"), "html", null, true);
            echo "</small>
            <a href=\"javascript:;\" class=\"btn btn-danger btn-index\"></a><small class=\"text-muted\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("错误"), "html", null, true);
            echo "</small>
            <a href=\"javascript:;\" class=\"btn btn-warning btn-index\"></a><small class=\"text-muted\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("待批阅"), "html", null, true);
            echo "</small>
            <a href=\"javascript:;\" class=\"btn btn-default btn-index\"></a><small class=\"text-muted\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未做"), "html", null, true);
            echo "</small>
        </div>
      </div>
      <div class=\"panel-footer\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" id=\"showWrong\" />
            <span class=\"text-info\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("只看错题"), "html", null, true);
            echo "</span>
          </label>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 75
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 75,  228 => 68,  218 => 61,  214 => 60,  210 => 59,  206 => 58,  202 => 56,  194 => 53,  188 => 52,  185 => 51,  166 => 49,  161 => 48,  145 => 46,  142 => 45,  138 => 44,  135 => 43,  131 => 42,  125 => 38,  123 => 37,  120 => 36,  117 => 35,  112 => 32,  109 => 31,  103 => 29,  101 => 28,  96 => 26,  93 => 25,  90 => 24,  84 => 21,  80 => 20,  77 => 19,  74 => 18,  72 => 17,  67 => 16,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  54 => 11,  46 => 7,  44 => 6,  39 => 5,  36 => 4,  33 => 3,  29 => 1,  27 => 2,  11 => 1,);
    }
}
