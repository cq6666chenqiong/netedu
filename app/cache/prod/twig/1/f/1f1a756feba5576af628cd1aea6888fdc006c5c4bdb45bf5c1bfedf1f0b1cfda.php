<?php

/* TopxiaAdminBundle:User:index.html.twig */
class __TwigTemplate_1f1a756feba5576af628cd1aea6888fdc006c5c4bdb45bf5c1bfedf1f0b1cfda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:index.html.twig", 2);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["menu"] = "admin_user_manage";
        // line 6
        $context["script_controller"] = "user/list";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style type=\"text/css\">
  .ri {
    float:right;
  }
  .div{width:400px; height:30px;float:right}
  .input{width:200px;height:30px;float:right}
  .button1{width:100px;height:30px;float:right}
</style>
";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <script src=\"/js/jquery.js?6.17.13\"></script>
<div>

  <a class=\"btn btn-info btn-sm\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_user_create");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>添加用户</a>
    <a class=\"btn btn-info btn-sm\" onclick=\"getBatMemenber()\"><span class=\"glyphicon glyphicon-plus\"></span>批量下载用户信息</a>
<a id=\"download\" href=\"\" target=\"_blank\"></a>
  <div class=\"form-group div\">

    <button type=\"button\" class=\"btn btn-info btn-sm button1\"  onclick=\"myajaxFileUpload('/functionDir/upload_members.php',null)\" class=\"btn\"><span class=\"glyphicon glyphicon-plus\"></span>批量创建用户</button>
    <input type=\"text\" id=\"copyFile\" name=\"copyFile\"  style=\" width:66%;margin-right:10px;display: none\" />

    <input type=\"file\" class=\"input\"id=\"file\"    name=\"file\" onchange=\"getFile(this,'copyFile')\"  />
    <a href=\"/functionDir/download_student.php\">下载模板</a>

  </div>
</div>
    <div>
<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
   <div class=\"mbm\">
     ";
        // line 37
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:index.html.twig", 37)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 38
        echo "            <span class=\"divider\"></span>
            <div class=\"form-group\">
                 <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
                   <option value=\"nickname\">工号</option>
                 </select>
                 <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["memberNum"]) ? $context["memberNum"] : null), "html", null, true);
        echo "\" placeholder=\"关键词\">
                    姓名
                   <input type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["truename"]) ? $context["truename"] : null), "html", null, true);
        echo "\" placeholder=\"关键词\">
                  所属科室
                  <select id=\"company\" name=\"company\" class=\"form-control\">
                      <option value=\"\">全选</option>
                      ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classr1"]) ? $context["classr1"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 50
            echo "                        <option ";
            if (((isset($context["company"]) ? $context["company"] : null) == $this->getAttribute($context["k"], "id", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                  </select>
                  <button class=\"btn btn-primary\" style=\"float: right\">搜索</button>
            </div>
   </div>
</form>

<table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>工号</th>
      <th>姓名</th>
      <th>职称</th>
      <th>所属科室</th>
      <th>科室分类</th>
      <th>最高学位</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">用户总数：<strong class=\"inflow-num\">";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["userCount"]) ? $context["userCount"] : null), "html", null, true);
        echo "</strong></span>
    </p>
    ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 75
            echo "        ";
            $this->loadTemplate("TopxiaAdminBundle:User:user-table-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 75)->display(array_merge($context, array("user" => $context["user"], "profile" => $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute($context["user"], "id", array()), array(), "array"))));
            // line 76
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "  </tbody>
</table>
";
        // line 80
        echo "    </div>
  <ul  class=\"pagination ri\">
    <li ";
        // line 82
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
        echo "\">上一页</a></li>
      ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 84
            echo "        <li ";
            if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    <li ";
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
        echo "\">下一页</a></li>
  </ul>

    <script>

        function getBatMemenber() {
            var nickname = \$(\"#keyword\").val();
            var truename = encodeURIComponent(\$(\"#truename\").val());
            var company = \$(\"#company\").val();
            var url = \"/functionDir/ajax/download_user_message.php?nickname=\" + nickname + \"&truename=\" + truename + \"&company=\" + company;

            myajax(url);
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 86,  193 => 84,  189 => 83,  181 => 82,  177 => 80,  173 => 77,  159 => 76,  156 => 75,  139 => 74,  134 => 72,  112 => 52,  97 => 50,  93 => 49,  86 => 45,  81 => 43,  74 => 38,  72 => 37,  53 => 21,  46 => 17,  36 => 9,  33 => 8,  29 => 2,  27 => 6,  25 => 4,  11 => 2,);
    }
}
