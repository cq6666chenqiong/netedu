<?php

/* TopxiaWebBundle:Course:normal-layout.html.twig */
class __TwigTemplate_86ea1e87f580eb001ecd1856ecff393e797623dba40dbc01fe1e07d0ccae70fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'course_main' => array($this, 'block_course_main'),
            'dashboard_relatedCoursesBlock' => array($this, 'block_dashboard_relatedCoursesBlock'),
            'course_sidebar' => array($this, 'block_course_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["bodyClass"] = "course-dashboard-page";
        // line 12
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Course:keywords.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 6)->display(array_merge($context, array("course" => (isset($context["course"]) ? $context["course"] : null))));
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getPurifyAndTrimHtml($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())), ""), 100);
    }

    // line 14
    public function block_top_content($context, array $blocks = array())
    {
        // line 15
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
  ";
        // line 20
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("GroupSell") &&  !(isset($context["member"]) ? $context["member"] : null))) {
            // line 21
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GroupSellBundle:GroupSell:showGroup", array("type" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
            echo "  
  ";
        }
        // line 23
        echo "  <div class=\"course-detail row\">
    <div class=\"col-lg-9 col-md-8  course-detail-main\">

      ";
        // line 26
        $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-block.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 26)->display(array_merge($context, array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")));
        // line 27
        echo "
      <section class=\"es-section\">
        ";
        // line 29
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-nav.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 29)->display($context);
        // line 30
        echo "        ";
        $this->displayBlock('course_main', $context, $blocks);
        // line 31
        echo "      </section>
      ";
        // line 32
        $this->displayBlock('dashboard_relatedCoursesBlock', $context, $blocks);
        // line 37
        echo "    </div>

    <div class=\"col-lg-3 col-md-4  course-sidebar\">
      ";
        // line 40
        $this->displayBlock('course_sidebar', $context, $blocks);
        // line 52
        echo "    </div>
  </div>

     ";
        // line 55
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("HowzhiPopAd")) {
            // line 56
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HowzhiPopAdBundle:HowzhiPop:index"));
            echo "
     ";
        }
        // line 57
        echo " 

";
    }

    // line 30
    public function block_course_main($context, array $blocks = array())
    {
    }

    // line 32
    public function block_dashboard_relatedCoursesBlock($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.relatedCourses") == 1)) {
            // line 34
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 36
        echo "      ";
    }

    // line 40
    public function block_course_sidebar($context, array $blocks = array())
    {
        // line 41
        echo "        ";
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null))) {
            // line 42
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:belongClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 44
        echo "        ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0)) {
            // line 45
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:recommendClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 47
        echo "        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:teachers", array("course" => (isset($context["course"]) ? $context["course"] : null))));
        echo "
        ";
        // line 48
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:students", array("course" => (isset($context["course"]) ? $context["course"] : null))));
        echo "
        ";
        // line 49
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 49)->display($context);
        // line 50
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 50,  184 => 49,  180 => 48,  175 => 47,  169 => 45,  166 => 44,  160 => 42,  157 => 41,  154 => 40,  150 => 36,  144 => 34,  141 => 33,  138 => 32,  133 => 30,  127 => 57,  121 => 56,  119 => 55,  114 => 52,  112 => 40,  107 => 37,  105 => 32,  102 => 31,  99 => 30,  97 => 29,  93 => 27,  91 => 26,  86 => 23,  80 => 21,  78 => 20,  75 => 19,  72 => 18,  65 => 15,  62 => 14,  56 => 9,  51 => 6,  48 => 5,  40 => 3,  36 => 1,  34 => 12,  32 => 11,  11 => 1,);
    }
}
