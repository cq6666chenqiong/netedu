<?php

/* TopxiaWebBundle:Course:header.html.twig */
class __TwigTemplate_6ed671cb7cb3062a41a91dd28eb0615ad73dbd60f335bfe6017080c5faa58310 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:header.html.twig", 1);
        // line 2
        echo "
<div class=\"es-section course-manage-header clearfix\">
  <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
    <img class=\"picture\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
  </a>
  <h1 class=\"title\"><a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 8
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "closed")) {
            // line 9
            echo "      <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "draft")) {
            // line 11
            echo "      <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 12
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 13
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 14
                echo "        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新中"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 15
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 16
                echo "        <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完结"), "html", null, true);
                echo "</span>
      ";
            }
            // line 18
            echo "    ";
        }
        // line 19
        echo "  </h1>

  <div class=\"teachers\">
    ";
        // line 22
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()), null)) : (null))) {
            // line 23
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师："), "html", null, true);
            echo "
      ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 25
                echo "        ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $context["id"], array(), "array");
                // line 26
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        // line 29
        echo "  </div>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 32
        if ( !(isset($context["manage"]) ? $context["manage"] : null)) {
            // line 33
            echo "    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-role=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            echo "\" data-placement=\"top\" href=\"#modal\">
        <i class=\"esicon esicon-like\"></i> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
            echo "</a>
      ";
            // line 36
            if (((($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "student")) : ("student")) == "teacher")) || (isset($context["isAdmin"]) ? $context["isAdmin"] : null))) {
                // line 37
                echo "        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_members", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"tooltip\" title=\"查看";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                echo "的学习进度, 还可以发私信进行联系!\" data-placement=\"bottom\"
          href=\"#modal\"><i class=\"esicon esicon-user\"></i> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
                echo "</a>
      ";
            }
            // line 40
            echo "
      <div class=\"btn-group\" data-role=\"tooltip\" title=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享到"), "html", null, true);
            echo "\" data-placement=\"left\" >
        <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
          <i class=\"esicon esicon-share\"></i>
        </button>
        ";
            // line 45
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:header.html.twig", 45)->display(array_merge($context, array("type" => "course", "right" => true)));
            // line 46
            echo "      </div>
      ";
            // line 47
            if ((isset($context["canExit"]) ? $context["canExit"] : null)) {
                // line 48
                echo "        ";
                if ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course") && $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array()))) {
                    // line 49
                    echo "        <a class=\"btn btn-default btn-sm \" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出学习"), "html", null, true);
                    echo "\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                    echo "\">
        <i class=\"esicon esicon-exit\"></i></a>
        ";
                } else {
                    // line 52
                    echo "        <a class=\"btn btn-default btn-sm course-exit-btn\" id=\"exit-course-learning\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出学习"), "html", null, true);
                    echo "\" type=\"button\"  href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"  data-goto=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">
        <i class=\"esicon esicon-exit\"></i></a>
        ";
                }
                // line 55
                echo "      ";
            }
            // line 56
            echo "      ";
            if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
                // line 57
                echo "      <a class=\"btn btn-default btn-sm \" type=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
                echo "\"  >
      <i class=\"esicon esicon-setting\"></i>
      </a>
      ";
            }
            // line 61
            echo "    </div>

    ";
        } else {
            // line 64
            echo "
      ";
            // line 65
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
                // line 66
                echo "        <div class=\"btn-group\">
          <a class=\"btn btn-default btn-sm\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程主页"), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 79
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published")) {
                // line 80
                echo "        <div class=\"btn-group\">
          <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布课程"), "html", null, true);
                echo "</button>
        </div>
      ";
            }
            // line 84
            echo "
    ";
        }
        // line 86
        echo "  </div>
</div>

";
        // line 89
        if ((((array_key_exists("vipChecked", $context)) ? (_twig_default_filter((isset($context["vipChecked"]) ? $context["vipChecked"] : null), "ok")) : ("ok")) != "ok")) {
            // line 90
            echo "  <div class=\"alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            // line 92
            if (((isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "not_member")) {
                // line 93
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您已经不是会员，不能学习此课程！"), "html", null, true);
                echo "
      ";
                // line 94
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                    // line 95
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请重新"), "html", null, true);
                    echo "<a class=\"alert-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开通会员"), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 97
                    echo "        <a class=\"alert-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                    echo "</a>
      ";
                }
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("！"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 99
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "member_expired")) {
                // line 100
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的会员已过期，不能学习此课程，请先"), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_renew");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("续费"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 101
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "level_low")) {
                // line 102
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员等级不够，不能学习此课程。请先"), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级会员"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                echo "
    ";
            } else {
                // line 104
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课程已不支持会员学，"), "html", null, true);
                echo "<a class=\"alert-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" data-go=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                echo "</a>
    ";
            }
            // line 106
            echo "  </div>
";
        }
        // line 108
        echo "
";
        // line 109
        if ( !(isset($context["isNonExpired"]) ? $context["isNonExpired"] : null)) {
            // line 110
            echo "  <div class=\"alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    您购买的课程已到期，无法学习课时、提问等。如有疑问，请联系老师，或点击
      <a class=\"btn btn-primary btn-sm \"  href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
      ";
            // line 114
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                // line 115
                echo "        重新购买
      ";
            } else {
                // line 117
                echo "        重新加入
      ";
            }
            // line 119
            echo "    </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 119,  344 => 117,  340 => 115,  338 => 114,  334 => 113,  329 => 110,  327 => 109,  324 => 108,  320 => 106,  308 => 104,  296 => 102,  294 => 101,  283 => 100,  281 => 99,  277 => 98,  267 => 97,  257 => 95,  255 => 94,  250 => 93,  248 => 92,  244 => 90,  242 => 89,  237 => 86,  233 => 84,  225 => 81,  222 => 80,  219 => 79,  211 => 67,  208 => 66,  206 => 65,  203 => 64,  198 => 61,  188 => 57,  185 => 56,  182 => 55,  171 => 52,  162 => 49,  159 => 48,  157 => 47,  154 => 46,  152 => 45,  145 => 41,  142 => 40,  137 => 38,  130 => 37,  128 => 36,  124 => 35,  118 => 34,  115 => 33,  113 => 32,  108 => 29,  105 => 28,  94 => 26,  91 => 25,  87 => 24,  82 => 23,  80 => 22,  75 => 19,  72 => 18,  66 => 16,  64 => 15,  59 => 14,  56 => 13,  54 => 12,  49 => 11,  47 => 10,  42 => 9,  40 => 8,  34 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
