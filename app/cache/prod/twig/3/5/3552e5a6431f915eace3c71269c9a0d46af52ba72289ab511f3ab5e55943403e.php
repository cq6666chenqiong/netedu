<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig */
class __TwigTemplate_3552e5a6431f915eace3c71269c9a0d46af52ba72289ab511f3ab5e55943403e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 1);
        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["layoutClass"] = "before";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_before_content($context, array $blocks = array())
    {
        // line 6
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("首页"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <li class=\"active\">";
        echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array());
        echo "</li>
  </ol>
  ";
        // line 13
        if (((isset($context["member"]) ? $context["member"] : null) && $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
            // line 14
            echo "  <div class=\"alert alert-warning\">
    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的退款申请已提交，请等待管理员的处理，退款期间将不能学习课程。"), "html", null, true);
            echo "
    <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消退款，继续学习！"), "html", null, true);
            echo "</button>
  </div>
  ";
        }
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
  ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "picture", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["previewLesson"]) ? $context["previewLesson"] : null)), "method"), "html", null, true);
        echo "

  ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "info", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["member"]) ? $context["member"] : null), 2 => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : null)), "method"), "html", null, true);
        echo "
  <div class=\"course-operation clearfix\">
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "student_num", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
    <ul class=\"course-data clearfix ";
        // line 28
        if (((isset($context["courseVip"]) ? $context["courseVip"] : null) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == "0"))) {
            echo "active";
        }
        echo "\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "favorite_btn", array(0 => (isset($context["course"]) ? $context["course"] : null), 1 => (isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)), "method"), "html", null, true);
        echo "
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : null), "share_btn", array(0 => (isset($context["course"]) ? $context["course"] : null)), "method"), "html", null, true);
        echo "
      ";
        // line 31
        if (((isset($context["courseVip"]) ? $context["courseVip"] : null) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == "0"))) {
            // line 32
            echo "        <li class=\"hidden-xs color-warning icon-vip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员课程"), "html", null, true);
            echo "\" data-content=\"";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 32)->display($context);
            echo "\">
          <i class=\"es-icon es-icon-crown\"></i><br>
          ";
            // line 34
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 34)->display(array_merge($context, array("userVipStatus" => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : null), "level" => (isset($context["courseVip"]) ? $context["courseVip"] : null))));
            // line 35
            echo "        </li>
      ";
        }
        // line 37
        echo "    </ul>
    <div class=\"buy\">
      ";
        // line 39
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), "")) : ("")) == "classroom")) {
            // line 40
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:classroomInfo", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
            echo "
      ";
        } else {
            // line 42
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", 42)->display($context);
            // line 43
            echo "      ";
        }
        // line 44
        echo "    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 44,  149 => 43,  146 => 42,  140 => 40,  138 => 39,  134 => 37,  130 => 35,  128 => 34,  120 => 32,  118 => 31,  114 => 30,  110 => 29,  104 => 28,  100 => 27,  95 => 25,  90 => 23,  87 => 22,  84 => 21,  74 => 16,  70 => 15,  67 => 14,  65 => 13,  59 => 11,  48 => 9,  44 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
