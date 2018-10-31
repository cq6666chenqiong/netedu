<?php

/* OrgBundle:Org:org-tree-select.html.twig */
class __TwigTemplate_19b1212d1dade3392f9b169f70d4579e8617c251e181c01ff8b7afd2b693e1a3 extends Twig_Template
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
        $context["enableOrg"] = $this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0");
        // line 2
        if ((isset($context["enableOrg"]) ? $context["enableOrg"] : null)) {
            echo "  
  ";
            // line 3
            $context["orgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter((isset($context["orgCode"]) ? $context["orgCode"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "orgCode", array())));
            // line 4
            echo "  ";
            $context["orgName"] = "orgCode";
            // line 5
            echo "  ";
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter((isset($context["colmd"]) ? $context["colmd"] : null), 8)) : (8));
            // line 6
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter((isset($context["lablecolmd"]) ? $context["lablecolmd"] : null), 2)) : (2));
            // line 7
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter((isset($context["nocolmd"]) ? $context["nocolmd"] : null), false)) : (false));
            // line 8
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter((isset($context["inputClass"]) ? $context["inputClass"] : null), "")) : (""));
            echo " 
  ";
            // line 9
            $this->env->getExtension('topxia_web_twig')->loadScript("orgbundle/controller/org/org-tree-select");
            // line 10
            echo "    <div class=\"form-group  ";
            if ((((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : null), null)) : (null)) == "list")) {
                echo "controls ";
            }
            echo "\">
      <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("admin_classroom_create");
            echo "\">创建科室</a>
      ";
            // line 12
            if ((((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : null), null)) : (null)) != "list")) {
                // line 13
                echo "        <label class=\"";
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["lablecolmd"]) ? $context["lablecolmd"] : null), "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组织机构"), "html", null, true);
                echo "</label>
        <div class=\"";
                // line 14
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["colmd"]) ? $context["colmd"] : null), "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 16
            echo "
        ";
            // line 17
            $context["org"] = $this->env->getExtension('topxia_data_twig')->getData("Org", array("orgCode" => (isset($context["orgCode"]) ? $context["orgCode"] : null)));
            // line 18
            echo "        <input id=\"";
            if ((((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : null), null)) : (null)) == "modal")) {
                echo "modalOrgSelectTree";
            } else {
                echo "orgSelectTree";
            }
            echo "\" 
          value = \"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "name", array()), $this->env->getExtension('translator')->trans("--选择组织机构--"))) : ($this->env->getExtension('translator')->trans("--选择组织机构--"))), "html", null, true);
            echo "\" autocomplete=\"off\"
          class = \"form-control ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["inputClass"]) ? $context["inputClass"] : null), "html", null, true);
            echo "\"
          data-url = \"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("org_tree");
            echo "\" 
          data-input-value = \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : null), "orgCode", array()), "html", null, true);
            echo "\"
          data-input-name = \"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["orgName"]) ? $context["orgName"] : null), "html", null, true);
            echo "\"
        />

        ";
            // line 26
            if ((((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : null), null)) : (null)) != "list")) {
                // line 27
                echo "
           aa:";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "code", array()), "html", null, true);
                echo "
         ";
            }
            // line 30
            echo "    </div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org:org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  119 => 28,  116 => 27,  114 => 26,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  83 => 18,  81 => 17,  78 => 16,  69 => 14,  59 => 13,  57 => 12,  53 => 11,  46 => 10,  44 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
