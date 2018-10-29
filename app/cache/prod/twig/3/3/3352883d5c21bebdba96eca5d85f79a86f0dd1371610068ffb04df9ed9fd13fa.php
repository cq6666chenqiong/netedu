<?php

/* TopxiaWebBundle:Course:explore.html.twig */
class __TwigTemplate_3352883d5c21bebdba96eca5d85f79a86f0dd1371610068ffb04df9ed9fd13fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "course-list-page bg-blank";
        // line 4
        $context["siteNav"] = "course/explore";
        // line 5
        $context["script_controller"] = "course/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo "全部";
        }
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), $this->env->getExtension('translator')->trans("全部"))) : ($this->env->getExtension('translator')->trans("全部"))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By myBanana";
        }
        // line 10
        echo "    ";
    }

    // line 12
    public function block_top_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程列表"), "html", null, true);
        echo "
      </div>

      ";
        // line 20
        $context["classrooms"] = $this->env->getExtension('topxia_data_twig')->getData("Classrooms", array("count" => 1));
        // line 21
        echo "      ";
        if (((array_key_exists("classrooms", $context)) ? (_twig_default_filter((isset($context["classrooms"]) ? $context["classrooms"] : null), null)) : (null))) {
            // line 22
            echo "        <a class=\"btn btn-primary btn-lg more\" href=\"";
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\">
          ";
            // line 24
            echo "          查看科室
        </a>
      ";
        }
        // line 27
        echo "    </div>
  </div>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "  ";
        $context["type"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type", array()), "all")) : ("all"));
        // line 33
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array()), "all")) : ("all"));
        // line 34
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest"));
        // line 35
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 36
        echo "    ";
        // line 39
        echo "  <div class=\"es-filter\">
    <!--
    <ul class=\"nav nav-sort clearfix\">
      <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "latest")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "latest")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最热"), "html", null, true);
        echo "</a></li><li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
        echo "</a></li>
    </ul>
    -->
    <div class=\"filter hidden-xs\">
      ";
        // line 46
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 47
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 49
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员课程"), "html", null, true);
            }
            // line 50
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 53
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
            echo "</a></li>
          ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 55
                echo "            <li role=\"presentation\"class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "filter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "          </ul>
        </div>
      ";
        }
        // line 60
        echo "      ";
        // line 79
        echo "    </div>
  </div>

  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 84
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 85
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 86
                echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
                // line 87
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 87)->display($context);
                // line 88
                echo "          </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "      ";
        } else {
            // line 91
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该分类下无课程"), "html", null, true);
            echo "</div>
      ";
        }
        // line 93
        echo "    </div>
  </div>
  <nav class=\"text-center\">
    ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 96,  281 => 93,  275 => 91,  272 => 90,  257 => 88,  255 => 87,  252 => 86,  234 => 85,  232 => 84,  225 => 79,  223 => 60,  218 => 57,  203 => 55,  199 => 54,  189 => 53,  185 => 51,  173 => 50,  169 => 49,  165 => 47,  163 => 46,  134 => 42,  129 => 39,  127 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  112 => 31,  106 => 27,  101 => 24,  96 => 22,  93 => 21,  91 => 20,  85 => 17,  79 => 13,  76 => 12,  72 => 10,  59 => 9,  53 => 8,  39 => 7,  35 => 1,  33 => 5,  31 => 4,  29 => 3,  11 => 1,);
    }
}
