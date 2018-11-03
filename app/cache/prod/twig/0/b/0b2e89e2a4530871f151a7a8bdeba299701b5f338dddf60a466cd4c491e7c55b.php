<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig */
class __TwigTemplate_0b2e89e2a4530871f151a7a8bdeba299701b5f338dddf60a466cd4c491e7c55b extends Twig_Template
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
        echo "
";
        // line 2
        if (( !((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : null), null)) : (null)) == "teacher")) {
            // line 3
            echo "

<div class=\"testpaper-question testpaper-question-choice ";
            // line 5
            if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.testpaper_watermark")) {
                echo "testpaper-watermark";
            }
            echo "\" data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_testpaper_watermark");
            echo "\" id=\"question";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionId", array()), "html", null, true);
            echo "\">

\t";
            // line 7
            $context["keys"] = array();
            // line 8
            echo "\t";
            $context["keys_answer"] = array();
            // line 9
            echo "\t<div class=\"testpaper-question-body\">
    ";
            // line 10
            $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", 10)->display($context);
            // line 11
            echo "
\t\t<ul class=\"testpaper-question-choices\">
\t\t\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "metas", array()), "choices", array()));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 14
                echo "\t\t\t  ";
                $context["itemClass"] = (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && twig_in_filter($context["key"], $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "answer", array())))) ? ("testpaper-question-choice-right") : (""));
                // line 15
                echo "\t\t\t  ";
                $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
                // line 16
                echo "
\t\t\t\t<li class=\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : null), "html", null, true);
                echo "\"><span class=\"testpaper-question-choice-index\">";
                echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
                echo ".</span> ";
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["choice"]);
                echo "</li>
\t\t\t\t";
                // line 18
                if (twig_in_filter($context["key"], $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "answer", array()))) {
                    // line 19
                    echo "\t\t\t\t\t";
                    $context["keys"] = twig_array_merge((isset($context["keys"]) ? $context["keys"] : null), array(0 => (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null)));
                    // line 20
                    echo "\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t";
                if (twig_in_filter($context["key"], (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array()), array())) : (array())))) {
                    // line 22
                    echo "\t\t\t\t\t";
                    $context["keys_answer"] = twig_array_merge((isset($context["keys_answer"]) ? $context["keys_answer"] : null), array(0 => (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null)));
                    // line 23
                    echo "\t\t\t\t";
                }
                // line 24
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t</ul>
\t</div>
\t";
            // line 27
            if (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && ($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "submitted")) || (($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")))) {
                // line 28
                echo "\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-result\">
\t\t\t\t";
                // line 39
                echo "\t\t  </div>

\t\t\t<div class=\"testpaper-question-actions pull-right\">
\t\t\t\t";
                // line 42
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", 42)->display(array_merge($context, array("flags" => array(0 => "favorite", 1 => "analysis"))));
                // line 43
                echo "\t\t\t</div>

\t\t</div>
\t\t<div class=\"testpaper-question-analysis well\" style=\"display:none;\">";
                // line 46
                echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "analysis", array())));
                echo "</div>
\t";
            } else {
                // line 48
                echo "\t\t<div class=\"testpaper-question-footer clearfix\">

\t\t  <div class=\"testpaper-question-choice-inputs\">
\t\t\t\t";
                // line 51
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "metas", array()), "choices", array()));
                foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                    // line 52
                    echo "\t\t\t\t\t";
                    $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
                    // line 53
                    echo "
\t\t\t\t\t<label class=\"";
                    // line 54
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionType", array()) == "single_choice")) {
                        echo "radio";
                    } else {
                        echo "checkbox";
                    }
                    echo "-inline ";
                    if (twig_in_filter((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), (isset($context["keys_answer"]) ? $context["keys_answer"] : null))) {
                        echo "active";
                    }
                    echo "\">
\t\t\t\t\t\t<input type=\"";
                    // line 55
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionType", array()) == "single_choice")) {
                        echo "radio";
                    } else {
                        echo "checkbox";
                    }
                    echo "\" data-type=\"choice\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionId", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" ";
                    if (twig_in_filter((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), (isset($context["keys_answer"]) ? $context["keys_answer"] : null))) {
                        echo "checked";
                    }
                    echo " >
\t\t\t\t\t\t";
                    // line 56
                    echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
                    echo "
\t\t\t\t\t</label>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t  </div>
\t\t  <div class=\"testpaper-question-actions pull-right\">
\t\t\t";
                // line 61
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", 61)->display(array_merge($context, array("flags" => array(0 => "mark", 1 => "favorite"))));
                // line 62
                echo "\t\t  </div>
\t\t</div>

\t\t";
                // line 65
                if (((array_key_exists("questionPreview", $context)) ? (_twig_default_filter((isset($context["questionPreview"]) ? $context["questionPreview"] : null), false)) : (false))) {
                    // line 66
                    echo "\t\t  <div class=\"testpaper-preview-answer clearfix mtl mbl\">
\t\t  \t<div class=\"testpaper-question-result\">
\t\t\t\t";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正确答案是"), "html", null, true);
                    echo " <strong class=\"text-success\">";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
                    echo "</strong>
\t\t  \t</div>
\t\t  </div>

\t\t  <div class=\"testpaper-question-analysis well\">";
                    // line 72
                    echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array()), $this->env->getExtension('translator')->trans("无解析"))) : ($this->env->getExtension('translator')->trans("无解析")))));
                    echo "</div>
\t\t";
                }
                // line 74
                echo "

\t";
            }
            // line 77
            echo "</div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 77,  207 => 74,  202 => 72,  193 => 68,  189 => 66,  187 => 65,  182 => 62,  180 => 61,  176 => 59,  167 => 56,  151 => 55,  139 => 54,  136 => 53,  133 => 52,  129 => 51,  124 => 48,  119 => 46,  114 => 43,  112 => 42,  107 => 39,  103 => 28,  101 => 27,  97 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  74 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  53 => 13,  49 => 11,  47 => 10,  44 => 9,  41 => 8,  39 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
