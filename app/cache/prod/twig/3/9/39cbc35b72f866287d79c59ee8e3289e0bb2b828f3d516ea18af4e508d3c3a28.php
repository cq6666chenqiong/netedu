<?php

/* TopxiaAdminBundle:sorce:score.html.twig */
class __TwigTemplate_39cbc35b72f866287d79c59ee8e3289e0bb2b828f3d516ea18af4e508d3c3a28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:sorce:layout.html.twig", "TopxiaAdminBundle:sorce:score.html.twig", 1);
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
        echo "
    <script>
        window.onload=function(){
            var year = \$(\"#year\").val();
            var department = \$(\"#department\").val();
            var truename = \$(\"#truename\").val();
            var url = '/functionDir/createExcel/make_xueshengtongji.php?year='+year+'&department='+department+'&truename='+truename;
            //myajax('/functionDir/createExcel/make_xueshengtongji.php?year='+year+'&department='+department+'&truename='+truename);
            \$(\"#mydownload\").attr(\"href\",url);
        }
        function getExcel(){
            var year = \$(\"#year\").val();
            var department = \$(\"#department\").val();
            var truename = \$(\"#truename\").val();
            var url = '/functionDir/createExcel/make_xueshengtongji.php?year='+year+'&department='+department+'&truename='+truename;
            //myajax('/functionDir/createExcel/make_xueshengtongji.php?year='+year+'&department='+department+'&truename='+truename);
            \$(\"#mydownload\").attr(\"href\",url);
            //\$(\"#mydownload\").click();
            //alert(\"wait\");
        }
        function fun(e){
            \$num = \$(e).attr('data_id');
            \$.ajax({
                type: \"GET\",
                url: \"/sorce/member?memberNum=\"+\$num, //用于文件上传的服务器端请求地址
                dataType: 'json', //返回值类型 一般设置为json
                success: function (data, status)  //服务器成功响应处理函数
                {
                    var html = \"\";
                    for(var i = 0;i<data.length;i++){
                        html = html + \"<tr>\"
                            +\"<td>\"+data[i].memberNum+\"</td>\"
                            +\"<td>\"+data[i].truename+\"</td>\"
                            +\"<td>\"+data[i].score+\"</td>\";
                            if(data[i].title != null){
                                html = html +  \"<td>\"+data[i].title+\"</td>\";
                            }else{
                                html = html +  \"<td>\"+data[i].courseName+\"</td>\";
                            }
                            html = html +\"<td>\"+data[i].year+\"</td>\";
                            html = html +\"<td>\"+data[i].remark+\"</td>\"
                            + \"</tr>\";

                    }
                    \$('#p_body').html(html);
                },
                error : function (data, status, e)//服务器响应失败处理函数
                {
                    \$(\"#copyFile\").val(\"\");
                    \$(\"#file\").val(\"\");
                    \$(\"#depositReceipt\").val(\"\");
                }
            });
        }
    </script>
    <div style=\"height: 40px\">
        <form action=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("admin_sorce_statistical");
        echo "\" method=\"get\">
            <span>统计年度</span><input id=\"year\" name=\"year\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
        echo "\"/>
            <span>科室</span>
            <select id=\"department\" name=\"department\" >
                <option value=\"\">全部</option>
                ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classr"]) ? $context["classr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 68
            echo "                   <option ";
            if (((isset($context["department"]) ? $context["department"] : null) == $this->getAttribute($context["k"], "id", array()))) {
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
        // line 70
        echo "            </select>
            <span>姓名</span>
            <input id=\"truename\" type=\"text\" name=\"truename\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["truename"]) ? $context["truename"] : null), "html", null, true);
        echo "\"/>
            <input type=\"submit\" value=\"查询\" >
            <a id=\"mydownload\" class=\"btn btn-info btn-sm button1\"  style=\"float: right\">结果导出</a>
            <br>
            <input type=\"text\" id=\"copyFile\" name=\"copyFile\"  style=\" width:66%;margin-right:10px;display: none\" />
            <input type=\"file\" class=\"input\"id=\"file\"  style=\"float: left\"  name=\"file\" onchange=\"getFile(this,'copyFile')\"  />
            <button type=\"button\" class=\"btn btn-info btn-sm button1\" style=\"float: left\" onclick=\"myajaxFileUpload('/functionDir/upload_member_score.php',null)\" ><span class=\"glyphicon glyphicon-plus\"></span>批量上传成绩</button>

            <a href=\"/functionDir/download_score.php\" style=\"float: right\">下载录入批量成绩模板</a>

            <br>
            <br>
        </form>

    </div>

    ";
        // line 112
        echo "    <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
        <thead>
            <tr>
                <th>姓名</th>
                <th>工号</th>
                <th colspan=\"4\">层级培训</th>
                <th colspan=\"4\">专业培训</th>
                <th colspan=\"3\">年度总学分</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th>层级</th>
                <th>培训次数</th>
                <th>得分</th>
                <th>评定</th>
                <th>专业类型</th>
                <th>培训次数</th>
                <th>得分</th>
                <th>评定</th>
                <th>合格标准</th>
                <th>得分</th>
                <th>评定</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arry"]) ? $context["arry"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 139
            echo "
            <tr>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "name", array(), "array"), "html", null, true);
            echo "</td>
                <td><a onclick=\"fun(this)\" data-toggle=\"modal\" data-target=\"#myModal\"  data_id=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "userNo", array(), "array"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "userNo", array(), "array"), "html", null, true);
            echo "</a>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "cengji", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "cjcoursenum", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "cjscore", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "hasnopasscj", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zhuanye", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zycoursenum", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "zyscore", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "hasnopasszy", array(), "array"), "html", null, true);
            echo "</td>
                <td>大于13</td>
                <td>";
            // line 152
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ar"], "cjscore", array(), "array") + $this->getAttribute($context["ar"], "zyscore", array(), "array")), "html", null, true);
            echo "</td>
                <td>评定</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "        </tbody>
    </table>

    ";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()), "html", null, true);
        echo "
   ";
        // line 161
        echo "    <ul  class=\"pagination\">
        <li ";
        // line 162
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
        echo "\">上一页</a></li>
        ";
        // line 163
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 164
            echo "            <li ";
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
        // line 166
        echo "        <li ";
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
        echo "\">下一页</a></li>
    </ul>


    <!-- 模态框（Modal） -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                        &times;
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">
                        成绩
                    </h4>
                </div>
                <div class=\"modal-body\">
                    <table class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
                        <thead>
                          <tr>
                              <td>工号</td>
                              <td>姓名</td>
                              <td>学分</td>
                              <td>课程</td>
                              <td>学分年度</td>
                              <td>备注</td>
                          </tr>
                        </thead>
                        <tbody id=\"p_body\">

                        </tbody>
                    </table>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:sorce:score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 166,  255 => 164,  251 => 163,  243 => 162,  240 => 161,  236 => 159,  231 => 156,  221 => 152,  216 => 150,  212 => 149,  208 => 148,  204 => 147,  200 => 146,  196 => 145,  192 => 144,  188 => 143,  182 => 142,  178 => 141,  174 => 139,  170 => 138,  142 => 112,  123 => 72,  119 => 70,  104 => 68,  100 => 67,  93 => 63,  89 => 62,  31 => 6,  28 => 5,  11 => 1,);
    }
}
