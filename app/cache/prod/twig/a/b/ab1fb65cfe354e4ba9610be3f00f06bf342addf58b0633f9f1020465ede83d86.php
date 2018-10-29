<?php

/* TopxiaWebBundle:MyCourse:score.html.twig */
class __TwigTemplate_ab1fb65cfe354e4ba9610be3f00f06bf342addf58b0633f9f1020465ede83d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyCourse:layout.html.twig", "TopxiaWebBundle:MyCourse:score.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyCourse:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["tab_nav"] = "learning";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学分"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"panel panel-default panel-col\">
        <div class=\"panel-heading\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学分"), "html", null, true);
        echo "</div>
        <div class=\"panel-body\">
            ";
        // line 21
        echo "            <table class=\"table table-striped table-hover\">
                <tr><th>课程名</th><th>学分年度</th><th>学分</th><th>备注</th></tr>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["score"]) ? $context["score"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sc"]) {
            // line 24
            echo "                    ";
            if (($this->getAttribute($context["sc"], "title", array()) != null)) {
                // line 25
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "title", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "year", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "xuefen", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "remark", array()), "html", null, true);
                echo "</td></tr>
                    ";
            } else {
                // line 27
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "courseName", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "year", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "xuefen", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sc"], "remark", array()), "html", null, true);
                echo "</td></tr>
                    ";
            }
            // line 29
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </table>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  86 => 29,  74 => 27,  62 => 25,  59 => 24,  55 => 23,  51 => 21,  46 => 9,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
