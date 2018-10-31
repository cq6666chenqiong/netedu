<?php

/* TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig */
class __TwigTemplate_809566efaf6abee3cc9a6a618613e431e5866d936b3997f7471aa8405e6b61a1 extends Twig_Template
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
        echo "<!-- 紧跟标题 -->
";
        // line 2
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "materialNum", array()) > 0)) {
            // line 3
            echo "  <i class=\"es-icon es-icon-filedownload mls\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料"), "html", null, true);
            echo "\"></i>
";
        }
        // line 5
        echo "
";
        // line 6
        if ((twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), ((array_key_exists("homeworkLessonIds", $context)) ? (_twig_default_filter((isset($context["homeworkLessonIds"]) ? $context["homeworkLessonIds"] : null), null)) : (null))) || twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), ((array_key_exists("exercisesLessonIds", $context)) ? (_twig_default_filter((isset($context["exercisesLessonIds"]) ? $context["exercisesLessonIds"] : null), null)) : (null))))) {
            // line 7
            echo "  <i class=\"es-icon es-icon-mylibrarybooks mls\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业、练习"), "html", null, true);
            echo "\"></i>
";
        }
        // line 9
        echo "
";
        // line 10
        if ((((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()) > 0)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "video")) &&  !((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter((isset($context["fromPlugin"]) ? $context["fromPlugin"] : null), false)) : (false)))) {
            // line 11
            echo "  ";
            $context["remainTime"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()) * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())) - (($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", false, true), "watchTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", false, true), "watchTime", array()), 0)) : (0)));
            // line 12
            echo "  ";
            if (((isset($context["remainTime"]) ? $context["remainTime"] : null) > 0)) {
                // line 13
                echo "    <small class=\"text text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还剩"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationTextFilter((isset($context["remainTime"]) ? $context["remainTime"] : null)), "html", null, true);
                echo "</small>
  ";
            } else {
                // line 15
                echo "    <small class=\"text text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已达最大可看时长"), "html", null, true);
                echo "</small>
  ";
            }
        }
        // line 18
        echo "

<!-- 右边图标 -->
";
        // line 21
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == "published")) {
            // line 22
            echo "  ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "video")) {
                // line 23
                echo "    <span class=\"date\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videoclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 28
            echo "
  ";
            // line 29
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "audio")) {
                // line 30
                echo "    <span class=\"date\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频时长"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-audioclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 35
            echo "
  ";
            // line 36
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "text")) {
                // line 37
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-graphicclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图文课程"), "html", null, true);
                echo "\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图文"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 41
            echo "
  ";
            // line 42
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "testpaper")) {
                // line 43
                echo "    ";
                $context["endTime"] = (($this->getAttribute($this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mediaId", array()), array(), "array"), "limitedTime", array()) * 60) + $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()));
                // line 44
                echo "    ";
                if (((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()), null)) : (null)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testMode", array()) == "realTime"))) {
                    // line 45
                    echo "      <span class=\"color-gray course-type \">
        ";
                    // line 46
                    if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()))) {
                        // line 47
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试倒计时"), "html", null, true);
                        echo ":<span class=\"color-primary pls\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array())), "html", null, true);
                        echo "</span>
        ";
                    } else {
                        // line 49
                        echo "          ";
                        if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < (isset($context["endTime"]) ? $context["endTime"] : null))) {
                            // line 50
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试已开始"), "html", null, true);
                            echo "
          ";
                        } else {
                            // line 52
                            echo "              ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试已结束"), "html", null, true);
                            echo "
          ";
                        }
                        // line 54
                        echo "      ";
                    }
                    // line 55
                    echo "      </span>
    ";
                } else {
                    // line 57
                    echo "      <span class=\"course-type\">
        <i class=\"es-icon es-icon-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
                    echo "\" data-original-title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
                    echo "\"></i>
      </span>
    ";
                }
                // line 61
                echo "  ";
            }
            // line 62
            echo "
  ";
            // line 63
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "ppt")) {
                // line 64
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-pptclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PPT课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 68
            echo "
  ";
            // line 69
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "document")) {
                // line 70
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-description\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文档课程"), "html", null, true);
                echo "\" data-original-title=\"文档\"></i>
    </span>
  ";
            }
            // line 74
            echo "
  ";
            // line 75
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "flash")) {
                // line 76
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-flashclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash课程"), "html", null, true);
                echo "\"></i>
    </span>
  ";
            }
            // line 80
            echo "
  ";
            // line 81
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "live")) {
                // line 82
                echo "
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videocam\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课程"), "html", null, true);
                echo "\"></i>
      ";
                // line 85
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()) > (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                    // line 86
                    echo "        <small class=\"type\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()), "m月d日"), "html", null, true);
                    echo "
          ";
                    // line 92
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()), "H：i"), "html", null, true);
                    echo "
        </small>
      ";
                } elseif ((($this->getAttribute(                // line 94
(isset($context["item"]) ? $context["item"] : null), "startTime", array()) <= (isset($context["currentTime"]) ? $context["currentTime"] : null)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "endTime", array()) >= (isset($context["currentTime"]) ? $context["currentTime"] : null)))) {
                    // line 95
                    echo "        <small class=\"type\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播中"), "html", null, true);
                    echo "</small>
      ";
                } elseif (($this->getAttribute(                // line 96
(isset($context["item"]) ? $context["item"] : null), "endTime", array()) < (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                    // line 97
                    echo "
        <small class=\"type\">
          ";
                    // line 99
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "replayStatus", array()) == "generated")) {
                        // line 100
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回放"), "html", null, true);
                        echo "
          ";
                    } else {
                        // line 102
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播结束"), "html", null, true);
                        echo "
          ";
                    }
                    // line 104
                    echo "        </small>

      ";
                }
                // line 107
                echo "    </span>
  ";
            }
            // line 109
            echo "
";
        } else {
            // line 111
            echo "  <span class=\"period-state\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("敬请期待"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 111,  292 => 109,  288 => 107,  283 => 104,  277 => 102,  271 => 100,  269 => 99,  265 => 97,  263 => 96,  258 => 95,  256 => 94,  250 => 92,  245 => 86,  243 => 85,  239 => 84,  235 => 82,  233 => 81,  230 => 80,  224 => 77,  221 => 76,  219 => 75,  216 => 74,  210 => 71,  207 => 70,  205 => 69,  202 => 68,  196 => 65,  193 => 64,  191 => 63,  188 => 62,  185 => 61,  177 => 58,  174 => 57,  170 => 55,  167 => 54,  161 => 52,  155 => 50,  152 => 49,  144 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  131 => 42,  128 => 41,  120 => 38,  117 => 37,  115 => 36,  112 => 35,  106 => 32,  97 => 30,  95 => 29,  92 => 28,  86 => 25,  77 => 23,  74 => 22,  72 => 21,  67 => 18,  60 => 15,  52 => 13,  49 => 12,  46 => 11,  44 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
