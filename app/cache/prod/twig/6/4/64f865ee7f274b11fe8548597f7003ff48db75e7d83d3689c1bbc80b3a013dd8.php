<?php

/* TopxiaAdminBundle:sorce:departmentsorce.html.twig */
class __TwigTemplate_64f865ee7f274b11fe8548597f7003ff48db75e7d83d3689c1bbc80b3a013dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:sorce:layout.html.twig", "TopxiaAdminBundle:sorce:departmentsorce.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:sorce:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "<script>
    window.onload=function(){
        var year = \$(\"#year\").val();
        var url = '/functionDir/createExcel/make_xuefentongji.php?year='+year;
        //myajax('/functionDir/createExcel/make_xueshengtongji.php?year='+year+'&department='+department+'&truename='+truename);
        \$(\"#mydownload\").attr(\"href\",url);
    }
   /* function getExcel(){
        var year = \$(\"#year\").val();
        myajax('/functionDir/createExcel/make_xuefentongji.php?year='+year);
    }*/
</script>
    <div style=\"height: 40px\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_sorce_statisticaldepartment");
        echo "\" method=\"get\">
        <span>统计年度</span><input id=\"year\" name=\"year\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
        echo "\"/><input type=\"submit\" value=\"查询\">
           ";
        // line 22
        echo "            <a id=\"mydownload\" class=\"btn btn-info btn-sm button1\"  style=\"float: right\">结果导出</a>
        </form>

    </div>

    ";
        // line 77
        echo "
    <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
        <thead>
        <tr>
            <th>病区</th>
            <th>N1</th>
            <th>N2</th>
            <th>N3</th>
            <th>N4</th>
            <th>总分合格率</th>
            <th>康复</th>
            <th>糖尿病</th>
            <th>静脉</th>
            <th>肿瘤</th>
            <th>危重</th>
            <th>营养</th>
            <th>应急</th>
            <th>专业组合格率</th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arry"]) ? $context["arry"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 100
            echo "            <tr>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "bingqu", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "n1num", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zn1num", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "n2num", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zn2num", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "n3num", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zn3num", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "n4num", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zn4num", array(), "array"), "html", null, true);
            echo "</td>
                <td></td>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "kfnum", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zkfnum", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "tnbnum", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "ztnbnum", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "jmnum", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zjmnum", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zlnum", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zzlnum", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "yynum", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zyynum", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "wznum", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zwznum", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "yjnum", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zyjnum", array(), "array"), "html", null, true);
            echo "</td>
                <td></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        <tr>
            <th>合计</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
        </tr>
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:sorce:departmentsorce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 117,  157 => 113,  151 => 112,  145 => 111,  139 => 110,  133 => 109,  127 => 108,  121 => 107,  114 => 105,  108 => 104,  102 => 103,  96 => 102,  92 => 101,  89 => 100,  85 => 99,  61 => 77,  54 => 22,  50 => 20,  46 => 19,  31 => 6,  28 => 5,  11 => 1,);
    }
}
