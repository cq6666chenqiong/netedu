<?php

/* TopxiaAdminBundle::macro.html.twig */
class __TwigTemplate_8ed3da04ca5ac02925ed1ea3a268ef5f65b408d45d8742478dac5117885bbbf6 extends Twig_Template
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
        // line 8
        echo "
";
    }

    // line 1
    public function getuser_link($__user__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 3
                echo "\t\t<a ";
                if ((isset($context["class"]) ? $context["class"] : null)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                    echo "\"";
                }
                echo " href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>
\t";
            } else {
                // line 5
                echo "\t  <span class=\"text-muted\">用户已删除</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "\t";
            ob_start();
            // line 11
            echo "\t    
\t    ";
            // line 12
            $context["kilobyte"] = 1024;
            // line 13
            echo "\t    ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : null) * 1024);
            // line 14
            echo "\t    ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : null) * 1024);
            // line 15
            echo "\t    ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : null) * 1024);
            // line 16
            echo "
\t    ";
            // line 17
            if (((isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["kilobyte"]) ? $context["kilobyte"] : null))) {
                // line 18
                echo "\t        ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) . " B"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 19
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["megabyte"]) ? $context["megabyte"] : null))) {
                // line 20
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["kilobyte"]) ? $context["kilobyte"] : null)), 2, ".") . " KB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 21
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["gigabyte"]) ? $context["gigabyte"] : null))) {
                // line 22
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["megabyte"]) ? $context["megabyte"] : null)), 2, ".") . " MB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 23
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["terabyte"]) ? $context["terabyte"] : null))) {
                // line 24
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["gigabyte"]) ? $context["gigabyte"] : null)), 2, ".") . " GB"), "html", null, true);
                echo "
\t    ";
            } else {
                // line 26
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["terabyte"]) ? $context["terabyte"] : null)), 2, ".") . " TB"), "html", null, true);
                echo "
\t    ";
            }
            // line 28
            echo "
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 28,  128 => 26,  122 => 24,  120 => 23,  115 => 22,  113 => 21,  108 => 20,  106 => 19,  101 => 18,  99 => 17,  96 => 16,  93 => 15,  90 => 14,  87 => 13,  85 => 12,  82 => 11,  79 => 10,  67 => 9,  54 => 5,  40 => 3,  37 => 2,  24 => 1,  19 => 8,);
    }
}
