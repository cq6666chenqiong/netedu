<?php

/* TopxiaAdminBundle:sorce:layout.html.twig */
class __TwigTemplate_44129ef6c662d1aaee9db7df785b5206948e4080838a1ba3edeb56756ad1aeb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:sorce:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学分统计"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div style=\"height: 20px\">

    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 11
        $this->displayBlock('side', $context, $blocks);
        // line 27
        echo "        </div>
        <div class=\"col-md-9\">
            ";
        // line 29
        $this->displayBlock('main', $context, $blocks);
        // line 30
        echo "        </div>
    </div>
";
    }

    // line 11
    public function block_side($context, array $blocks = array())
    {
        // line 12
        echo "                <div class=\"sidenav\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-heading\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学分统计"), "html", null, true);
        echo "</li>
                        ";
        // line 15
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 16
        echo "
                        <li class=\"list-group-item ";
        // line 17
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "profile")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_sorce_statistical");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("科室学分统计"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"list-group-item ";
        // line 20
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "avatar")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_sorce_statisticaldepartment", array("year" => ""));
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("单位职称学分统计"), "html", null, true);
        echo "</a>
                        </li>

                    </ul>
                </div>
            ";
    }

    // line 29
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:sorce:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 29,  98 => 21,  92 => 20,  85 => 18,  79 => 17,  76 => 16,  74 => 15,  70 => 14,  66 => 12,  63 => 11,  57 => 30,  55 => 29,  51 => 27,  49 => 11,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
