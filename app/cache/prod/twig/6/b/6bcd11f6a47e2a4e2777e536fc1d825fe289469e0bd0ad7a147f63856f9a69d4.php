<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test.html.twig */
class __TwigTemplate_6bcd11f6a47e2a4e2777e536fc1d825fe289469e0bd0ad7a147f63856f9a69d4 extends Twig_Template
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
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), null)) : (null)) == "classroom")) {
            // line 2
            echo "  ";
            $context["canHandle"] = $this->env->getExtension('topxia_web_twig')->isPermitRole((isset($context["targetId"]) ? $context["targetId"] : null), "Handle");
        } else {
            // line 4
            echo "  ";
            $context["canHandle"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method");
        }
        // line 6
        echo "
";
        // line 7
        if (((((((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null)) && twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "finished", 1 => "reviewing"))) && ($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "hide")) || (($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "reviewing"))) &&  !(isset($context["canHandle"]) ? $context["canHandle"] : null))) {
        } else {
            // line 9
            echo "
  ";
            // line 11
            echo "    <form id='teacherCheckForm' autocomplete=\"off\">
    ";
            // line 13
            echo "        ";
            // line 14
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()))) : ($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()))));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 15
                echo "      ";
                if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["type"], array(), "array") != array())) {
                    // line 16
                    echo "        <div class=\"panel panel-default testpaper-question-block\" id=\"testpaper-questions-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
          <div class=\"panel-heading\"><strong class=\"\">";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $context["type"], array(), "array"), "html", null, true);
                    echo "</strong>
            <small class=\"text-muted\">
              共";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "number", array()), "html", null, true);
                    echo "题，共";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "score", array()), "html", null, true);
                    echo "分";
                    if (($this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "missScore", array()) > 0)) {
                        echo "，漏选得";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "missScore", array()), "html", null, true);
                        echo "分";
                    }
                    // line 20
                    echo "            </small>
          </div>
          <div class=\"panel-body\">
            ";
                    // line 23
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["type"], array(), "array"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 24
                        echo "              ";
                        if ((($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "isDeleted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "isDeleted", array()), null)) : (null))) {
                            // line 25
                            echo "                <div class=\"testpaper-question testpaper-question-choice\" id=\"question";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                            echo "\">
                  <div class=\"testpaper-question-body\">
                    ";
                            // line 27
                            $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test.html.twig", 27)->display($context);
                            // line 28
                            echo "                  </div>
                </div>
              ";
                        } else {
                            // line 31
                            echo "                ";
                            if (twig_in_filter($context["type"], array(0 => "single_choice", 1 => "choice", 2 => "uncertain_choice"))) {
                                // line 32
                                echo "                  ";
                                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test.html.twig", 32)->display($context);
                                // line 33
                                echo "                ";
                            } else {
                                // line 34
                                echo "                  ";
                                $this->loadTemplate((("TopxiaWebBundle:QuizQuestionTest:do-test-" . $context["type"]) . ".html.twig"), "TopxiaWebBundle:QuizQuestionTest:do-test.html.twig", 34)->display($context);
                                // line 35
                                echo "                ";
                            }
                            // line 36
                            echo "              ";
                        }
                        // line 37
                        echo "            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "          </div>
        </div>
      ";
                }
                // line 41
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    ";
            if ((((array_key_exists("showTestpaperNavbar", $context)) ? (_twig_default_filter((isset($context["showTestpaperNavbar"]) ? $context["showTestpaperNavbar"] : null), "on")) : ("on")) == "off")) {
                // line 43
                echo "      <textarea name=\"teacherSay\" id=\"teacherSay\" style=\"display:none\"></textarea>
      <input type=\"hidden\" id=\"passedStatus\" name=\"passedStatus\" value=\"\" />
    ";
            }
            // line 46
            echo "  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 46,  176 => 43,  173 => 42,  159 => 41,  154 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  128 => 33,  125 => 32,  122 => 31,  117 => 28,  115 => 27,  109 => 25,  106 => 24,  89 => 23,  84 => 20,  74 => 19,  69 => 17,  64 => 16,  61 => 15,  43 => 14,  41 => 13,  38 => 11,  35 => 9,  32 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
