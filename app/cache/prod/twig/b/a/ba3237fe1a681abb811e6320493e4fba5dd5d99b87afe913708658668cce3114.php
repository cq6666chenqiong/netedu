<?php

/* TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig */
class __TwigTemplate_ba3237fe1a681abb811e6320493e4fba5dd5d99b87afe913708658668cce3114 extends Twig_Template
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
        echo "<section class=\"course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">

  ";
        // line 3
        $context["count"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 12)) : (12));
        // line 4
        echo "  ";
        $context["categoryId"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryId", array()), 0)) : (0));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "latest")) {
            // line 7
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => (isset($context["count"]) ? $context["count"] : null), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : null)));
            // line 8
            echo "  ";
        } elseif (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            // line 9
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendCourses", array("count" => (isset($context["count"]) ? $context["count"] : null), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : null)));
            // line 10
            echo "  ";
        } elseif (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            // line 11
            echo "    ";
            $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("PopularCourses", array("count" => (isset($context["count"]) ? $context["count"] : null), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : null), "type" => "studentNum"));
            // line 12
            echo "  ";
        }
        // line 13
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('topxia_data_twig')->getData("Categories", array("group" => "course"));
        // line 14
        echo "  <div class=\"container\">
    ";
        // line 25
        echo "
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
          ";
        // line 39
        echo "      </ul>
      ";
        // line 40
        $context["ind"] = 0;
        // line 41
        echo "      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐课程"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 44
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest")))), "html", null, true);
        echo "\"><a href=\"javascript:;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐课程"), "html", null, true);
        echo "</a></li>
          ";
        // line 45
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : null)) {
            // line 46
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 47
                    echo "              ";
                    if ((($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array()), 4)) : (4))) && ($this->getAttribute($context["loop"], "index", array()) < 8))) {
                        // line 48
                        echo "                <li role=\"presentation\" class = \"js-course-filter ";
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo "\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest")))), "html", null, true);
                        echo "\"><a href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 50
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          ";
        }
        // line 52
        echo "        </ul>
      </div>
      <!--
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 56
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), 0)) : (0)), "orderBy" => "latest")), "html", null, true);
        echo "\">
          ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 59
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "recommendedSeq")) : ("recommendedSeq")) == "studentNum")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), 0)) : (0)), "orderBy" => "studentNum")), "html", null, true);
        echo "\">
          ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最热"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 62
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), 0)) : (0)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\">
          ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐"), "html", null, true);
        echo "
        </a>
      </div>
      -->
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 70
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
            // line 71
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 72
            $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig", 72)->display($context);
            // line 73
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
        // line 75
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多课程"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 79,  222 => 78,  217 => 75,  202 => 73,  200 => 72,  197 => 71,  180 => 70,  170 => 63,  162 => 62,  157 => 60,  149 => 59,  144 => 57,  136 => 56,  130 => 52,  127 => 51,  117 => 50,  105 => 48,  102 => 47,  90 => 46,  88 => 45,  78 => 44,  73 => 42,  70 => 41,  68 => 40,  65 => 39,  60 => 25,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
