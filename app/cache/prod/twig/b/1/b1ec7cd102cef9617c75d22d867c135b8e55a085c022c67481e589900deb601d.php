<?php

/* TopxiaWebBundle:Course:Part/normal-header.html.twig */
class __TwigTemplate_b1ec7cd102cef9617c75d22d867c135b8e55a085c022c67481e589900deb601d extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 1);
        // line 2
        $context["header_macro"] = $this;
        // line 3
        echo "
";
        // line 4
        $this->env->getExtension('topxia_web_twig')->loadScript("course/common");
        // line 5
        echo "
";
        // line 6
        if (((isset($context["member"]) ? $context["member"] : null) &&  !$this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
            // line 7
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 7)->display($context);
        } elseif ((($this->getAttribute(        // line 8
(isset($context["course"]) ? $context["course"] : null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()), false)) : (false))) {
            // line 9
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 9)->display(array_merge($context, array("source" => "classroom")));
        } else {
            // line 11
            echo "
  ";
            // line 12
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 12)->display($context);
        }
        // line 14
        echo "
";
        // line 36
        echo "
";
        // line 129
        echo "
";
    }

    // line 15
    public function getpicture($__course__ = null, $__previewLesson__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "previewLesson" => $__previewLesson__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "  <div class=\"course-img\">
    ";
            // line 17
            if ((isset($context["previewLesson"]) ? $context["previewLesson"] : null)) {
                // line 18
                echo "      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["previewLesson"]) ? $context["previewLesson"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"course-img-cover\">
        <i class=\"es-icon es-icon-playcircleoutline\"></i>
      </a>
    ";
            }
            // line 22
            echo "
    <img class=\"img-responsive\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "\">
    <div class=\"tags\">
      ";
            // line 25
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 26
                echo "        <span class=\"tag-serialing\"></span>
      ";
            } elseif (($this->getAttribute(            // line 27
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 28
                echo "        <span class=\"tag-finished\"></span>
      ";
            }
            // line 30
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
                // line 31
                echo "        <span class=\"tag-live\"></span>
      ";
            }
            // line 33
            echo "    </div>
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getinfo($__course__ = null, $__member__ = null, $__userVipStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "member" => $__member__,
            "userVipStatus" => $__userVipStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "  ";
            $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 38);
            // line 39
            echo "  <div class=\"course-info\">
    <h2 class=\"title\">
      ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "
      <span class=\"es-qrcode top\" data-url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_qrcode", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
        <i class=\"es-icon es-icon-qrcode\"></i>
        <span class=\"qrcode-popover\">
          <img src=\"\" alt=\"\">
          ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
            echo "
        </span>
      </span>
    </h2>
    <div class=\"subtitle\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "html", null, true);
            echo "</div>
    <div class=\"metas\">
      <div class=\"score\">
        ";
            // line 53
            echo $context["web_macro"]->getstar($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "rating", array()));
            echo "
        <span>(";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
            echo ")</span>
      </div>
";
            // line 76
            echo "
      ";
            // line 77
            if ( !(isset($context["member"]) ? $context["member"] : null)) {
                // line 78
                echo "        ";
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array())) {
                    // line 79
                    echo "          <p class=\"expiry-date hidden-sm\">
            <label for=\"\">";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期"), "html", null, true);
                    echo "</label>
            <span>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天"), "html", null, true);
                    echo "</span>
          </p>
        ";
                }
                // line 84
                echo "        <p class=\"discount-price\">
          <label>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
                echo "</label>
          ";
                // line 86
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 86)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
                // line 87
                echo "        </p>
        ";
                // line 88
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array()) > 0)) {
                    // line 89
                    echo "          <p class=\"old-price hidden-sm\">
            <label>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("原价"), "html", null, true);
                    echo "</label>
            ";
                    // line 91
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 91)->display(array_merge($context, array("shows" => array(0 => "originPrice"))));
                    // line 92
                    echo "          </p>
          ";
                    // line 93
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), null)) : (null))) {
                        // line 94
                        echo "            <p class=\"activity\">
              <label>";
                        // line 95
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动"), "html", null, true);
                        echo "</label>
              <span class=\"name\">";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), "name", array()), "html", null, true);
                        echo "</span>
              <span>
                <i class=\"es-icon es-icon-accesstime\"></i>
                <span id=\"discount-endtime-countdown\" class=\"text-muted\" data-remaintime=\"";
                        // line 99
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), "endTime", array()) - twig_date_format_filter($this->env, "now", "U")), "html", null, true);
                        echo "\"
                ></span>
              </span>
            </p>
          ";
                    }
                    // line 104
                    echo "        ";
                }
                // line 105
                echo "      ";
            }
            // line 106
            echo "    </div>

    ";
            // line 108
            if ((((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && (isset($context["member"]) ? $context["member"] : null)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "levelId", array()) > 0)) && ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) != "ok"))) {
                // line 109
                echo "      <div class=\"alert alert-danger\">
        ";
                // line 110
                if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "not_member")) {
                    // line 111
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您已经不是会员，不能学习此课程！"), "html", null, true);
                    echo "
          ";
                    // line 112
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        // line 113
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请重新"), "html", null, true);
                        echo "<a class=\"btn-link\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("vip");
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开通会员"), "html", null, true);
                        echo "</a>
          ";
                    } else {
                        // line 115
                        echo "            <a class=\"btn-link js-exit-course\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                        echo "\" data-go=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                        echo "</a>
          ";
                    }
                    // line 116
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("！"), "html", null, true);
                    echo "
        ";
                } elseif ((                // line 117
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "member_expired")) {
                    // line 118
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的会员已过期，不能学习此课程，请先"), "html", null, true);
                    echo "<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_renew");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("续费"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                    echo "
        ";
                } elseif ((                // line 119
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "level_low")) {
                    // line 120
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员等级不够，不能学习此课程。请先"), "html", null, true);
                    echo "<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级会员"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 122
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课程已不支持会员学，"), "html", null, true);
                    echo "<a class=\"btn-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 124
                echo "      </div>
    ";
            }
            // line 126
            echo "
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 130
    public function getstudent_num($__course__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 131
            echo "  <div class=\"student-num hidden-xs\">
    ";
            // line 132
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 133
                echo "      <i class=\"es-icon es-icon-people\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
                echo "
      ";
                // line 134
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()) > 0)) {
                    // line 135
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))) {
                        // line 136
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名额已满"), "html", null, true);
                        echo ")</small>
        ";
                    } else {
                        // line 138
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名额"), "html", null, true);
                        echo ")</small>
        ";
                    }
                    // line 140
                    echo "      ";
                }
                // line 141
                echo "    ";
            } else {
                // line 142
                echo "      <i class=\"es-icon es-icon-accesstime\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lessonNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
                echo "
    ";
            }
            // line 144
            echo "  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 144,  403 => 142,  400 => 141,  397 => 140,  390 => 138,  384 => 136,  381 => 135,  379 => 134,  373 => 133,  371 => 132,  368 => 131,  356 => 130,  343 => 126,  339 => 124,  327 => 122,  315 => 120,  313 => 119,  302 => 118,  300 => 117,  296 => 116,  286 => 115,  276 => 113,  274 => 112,  269 => 111,  267 => 110,  264 => 109,  262 => 108,  258 => 106,  255 => 105,  252 => 104,  244 => 99,  238 => 96,  234 => 95,  231 => 94,  229 => 93,  226 => 92,  224 => 91,  220 => 90,  217 => 89,  215 => 88,  212 => 87,  210 => 86,  206 => 85,  203 => 84,  196 => 81,  192 => 80,  189 => 79,  186 => 78,  184 => 77,  181 => 76,  175 => 54,  171 => 53,  165 => 50,  158 => 46,  151 => 42,  147 => 41,  143 => 39,  140 => 38,  126 => 37,  113 => 33,  109 => 31,  106 => 30,  102 => 28,  100 => 27,  97 => 26,  95 => 25,  88 => 23,  85 => 22,  77 => 18,  75 => 17,  72 => 16,  59 => 15,  54 => 129,  51 => 36,  48 => 14,  45 => 12,  42 => 11,  38 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
