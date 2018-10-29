<?php

/* TopxiaWebBundle:CourseLesson/Widget:list.html.twig */
class __TwigTemplate_64c047020c99705ebdbd7f63fb642f84c6601dcf7ef96fe72090661920884a03 extends Twig_Template
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
        $context["learnStatuses"] = ((array_key_exists("learnStatuses", $context)) ? (_twig_default_filter((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), array())) : (array()));
        // line 2
        $context["previewUrl"] = ((array_key_exists("previewUrl", $context)) ? (_twig_default_filter((isset($context["previewUrl"]) ? $context["previewUrl"] : null), null)) : (null));
        // line 3
        $context["num"] = 0;
        // line 4
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 5
            echo "  <ul class=\"period-list\" id=\"course-item-list\">

  ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            foreach ($context['_seq'] as $context["id"] => $context["item"]) {
                // line 8
                echo "    ";
                if (twig_in_filter("chapter", $context["id"])) {
                    // line 9
                    echo "      ";
                    $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:chapter.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 9)->display($context);
                    // line 10
                    echo "    ";
                } elseif (twig_in_filter("lesson", $context["id"])) {
                    // line 11
                    echo "        ";
                    // line 12
                    echo "      ";
                    // line 13
                    echo "    ";
                    // line 17
                    echo "


        ";
                    // line 20
                    if ((isset($context["member"]) ? $context["member"] : null)) {
                        // line 21
                        echo "            ";
                        $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute($context["item"], "id", array()))) . "#lesson/") . $this->getAttribute($context["item"], "id", array()));
                        // line 22
                        echo "        ";
                    } else {
                        // line 23
                        echo "            ";
                        $context["lessonUrl"] = (((isset($context["previewUrl"]) ? $context["previewUrl"] : null) . "?lessonId=") . $this->getAttribute($context["item"], "id", array()));
                        // line 24
                        echo "        ";
                    }
                    // line 25
                    echo "      <li class=\"period lesson-item lesson-item-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\" data-num=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\">
          ";
                    // line 26
                    if (($this->getAttribute($context["item"], "status", array()) == "published")) {
                        // line 27
                        echo "
              ";
                        // line 28
                        if (((isset($context["num"]) ? $context["num"] : null) == 0)) {
                            // line 29
                            echo "                  ";
                            if (((($this->getAttribute($context["item"], "free", array()) || (isset($context["member"]) ? $context["member"] : null)) || $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array())) || $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()))) {
                                // line 30
                                echo "
                    <a ";
                                // line 31
                                if ((isset($context["member"]) ? $context["member"] : null)) {
                                    echo "href=\"";
                                    echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                                    echo "\" ";
                                } else {
                                    echo "href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                                    echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                                    echo "\"";
                                }
                                // line 32
                                echo "                       title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                                echo "\">
                        ";
                                // line 33
                                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 33)->display($context);
                                // line 34
                                echo "                      <span class=\"title\">  ";
                                if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                                    echo " 课时";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "number", array()), "html", null, true);
                                    echo "：";
                                }
                                echo $this->getAttribute($context["item"], "title", array());
                                echo "</span>
                        ";
                                // line 35
                                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 35)->display($context);
                                // line 36
                                echo "                    </a>
                  ";
                            } else {
                                // line 38
                                echo "
                      ";
                                // line 39
                                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 39)->display($context);
                                // line 40
                                echo "                    <span class=\"title\">  ";
                                if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                                    echo " 课时";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "number", array()), "html", null, true);
                                    echo "：";
                                }
                                echo $this->getAttribute($context["item"], "title", array());
                                echo "</span>
                      ";
                                // line 41
                                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 41)->display($context);
                                // line 42
                                echo "                  ";
                            }
                            // line 43
                            echo "                  ";
                            if (twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["finishLessonItem"]) ? $context["finishLessonItem"] : null))) {
                                // line 44
                                echo "
                  ";
                            } else {
                                // line 46
                                echo "
                      ";
                                // line 47
                                $context["num"] = ((isset($context["num"]) ? $context["num"] : null) + 1);
                                // line 48
                                echo "
                  ";
                            }
                            // line 50
                            echo "              ";
                        } else {
                            // line 51
                            echo "                  ";
                            // line 59
                            echo "                  ";
                            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 59)->display($context);
                            // line 60
                            echo "                <span class=\"title\">  ";
                            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                                echo " 课时";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "number", array()), "html", null, true);
                                echo "：";
                            }
                            echo $this->getAttribute($context["item"], "title", array());
                            echo "</span>
                  ";
                            // line 61
                            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 61)->display($context);
                            // line 62
                            echo "                  ";
                            // line 63
                            echo "              ";
                        }
                        // line 64
                        echo "              ";
                        // line 78
                        echo "          ";
                    } else {
                        // line 79
                        echo "              ";
                        $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 79)->display($context);
                        // line 80
                        echo "            <span class=\"title\">";
                        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                            echo " 课时";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "number", array()), "html", null, true);
                            echo "：";
                        }
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "</span>
              ";
                        // line 81
                        $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 81)->display($context);
                        // line 82
                        echo "          ";
                    }
                    // line 83
                    echo "      </li>
    ";
                }
                // line 85
                echo "
  ";
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Widget:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 85,  221 => 83,  218 => 82,  216 => 81,  206 => 80,  203 => 79,  200 => 78,  198 => 64,  195 => 63,  193 => 62,  191 => 61,  181 => 60,  178 => 59,  176 => 51,  173 => 50,  169 => 48,  167 => 47,  164 => 46,  160 => 44,  157 => 43,  154 => 42,  152 => 41,  142 => 40,  140 => 39,  137 => 38,  133 => 36,  131 => 35,  121 => 34,  119 => 33,  114 => 32,  104 => 31,  101 => 30,  98 => 29,  96 => 28,  93 => 27,  91 => 26,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  68 => 20,  63 => 17,  61 => 13,  59 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
