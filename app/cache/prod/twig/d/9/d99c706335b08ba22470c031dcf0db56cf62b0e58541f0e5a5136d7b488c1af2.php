<?php

/* TopxiaAdminBundle:User:user-table-tr.html.twig */
class __TwigTemplate_d99c706335b08ba22470c031dcf0db56cf62b0e58541f0e5a5136d7b488c1af2 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 1);
        // line 2
        echo "
<style>
    .fs{
        color: black;
    }
</style>
<tr id=\"user-table-tr-";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "\">
  <td>
      <span class=\"fs\">
    <strong class=\"fs\">";
        // line 11
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "</strong>
      </span>
    ";
        // line 13
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 14
            echo "      <label class=\"label label-danger\">禁</label>
    ";
        }
        // line 16
        echo "
    <br>
      ";
        // line 25
        echo "  </td>

  <td>
     ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
        echo "
  </td>

  <td>
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "html", null, true);
        echo "
  </td>
  <td>
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classr"]) ? $context["classr"] : null), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), array(), "array"), "html", null, true);
        echo "
  </td>
  <td>
      ";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "varcharField4", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "varcharField4", array()), "")) : ("")), "html", null, true);
        echo "
  </td>
  <td>
      ";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "varcharField5", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "varcharField5", array()), "")) : ("")), "html", null, true);
        echo "
  </td>


";
        // line 84
        echo "  <td>
    <div class=\"btn-group\">
";
        // line 94
        echo "          <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\"  >编辑用户信息</a></li>
          <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_change_password", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_change_password", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" >修改密码</a></li>
            ";
        // line 96
        $context["enableOrg"] = $this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0");
        // line 97
        echo "          ";
        // line 111
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 117
            echo "        ";
        }
        // line 123
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 124
            echo "          <li><a class=\"unlock-user\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unlock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"解禁用户";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unlock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">解禁用户</a></li>
        ";
        } else {
            // line 126
            echo "              ";
            if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 127
                echo "                    ";
                if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                    // line 128
                    echo "                          <li></li>
                           ";
                } else {
                    // line 130
                    echo "                            <li><a class=\"lock-user\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\" title=\"封禁用户";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\">封禁用户</a></li>
                    ";
                }
                // line 132
                echo "               ";
            } else {
                // line 133
                echo "                   <li><a class=\"lock-user\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" title=\"封禁用户";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">封禁用户</a></li>
              ";
            }
            // line 135
            echo "        ";
        }
        // line 136
        echo "        <li><a class=\"\"    onclick=\"deleteUser(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo ")\">删除用户</a></li>
      </ul>
    </div>
  </td>
</tr>
";
        // line 148
        echo "<script src=\"/js/jquery.js?6.17.13\"></script>
<script>

    function deleteUser(nickname){
        if(confirm(\"确认要删除？\")){


            \$.ajax({
                type: \"GET\",
                url: \"/functionDir/ajax/delete_user.php?nickname=\"+nickname,
                data: {},
                dataType: \"json\",
                success: function(data){
                    \$(\"#user-table-tr-\"+nickname).hide();
                }
            });
        }

    }
</script>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 148,  163 => 136,  160 => 135,  150 => 133,  147 => 132,  137 => 130,  133 => 128,  130 => 127,  127 => 126,  117 => 124,  114 => 123,  111 => 117,  108 => 111,  106 => 97,  104 => 96,  98 => 95,  91 => 94,  87 => 84,  80 => 41,  74 => 38,  68 => 35,  62 => 32,  55 => 28,  50 => 25,  46 => 16,  42 => 14,  40 => 13,  35 => 11,  29 => 8,  21 => 2,  19 => 1,);
    }
}
