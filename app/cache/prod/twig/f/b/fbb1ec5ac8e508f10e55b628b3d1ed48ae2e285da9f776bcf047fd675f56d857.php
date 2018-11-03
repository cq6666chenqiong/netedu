<?php

/* TopxiaWebBundle:MyCourse:batstudentcourse.htm.twig */
class __TwigTemplate_fbb1ec5ac8e508f10e55b628b3d1ed48ae2e285da9f776bcf047fd675f56d857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:index.html.twig", "TopxiaWebBundle:MyCourse:batstudentcourse.htm.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "


    <div class=\"form-group\" style=\"width: 100%\">
       <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_fetch_bat_student", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">
           <div class=\"form-group\">
                层级
               <select id=\"keshi\" name=\"keshi\" style=\"width: 30%;border: 1px solid #ccc;border-radius: 4px;height: 34px;padding: 6px 12px;\">
                   <option value=\"\"> 全选 </option>
                   ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classr"]) ? $context["classr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 20
            echo "                       <option ";
            if (((isset($context["keshi"]) ? $context["keshi"] : null) == $this->getAttribute($context["k"], "id", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
            echo " </option>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "               </select>
               专业类别
               <select id=\"sskeshi\" name=\"sskeshi\" style=\"width: 30%;border: 1px solid #ccc;border-radius: 4px;height: 34px;padding: 6px 12px;\">
                   <option value=\"\"> 全选 </option>
                   <option value=\"康复小组\"> 康复小组 </option>
                   <option value=\"糖尿病小组\"> 糖尿病小组 </option>
                   <option value=\"静脉小组\"> 静脉小组 </option>
                   <option value=\"肿瘤小组\"> 肿瘤小组 </option>
                   <option value=\"营养小组\"> 营养小组 </option>
                   <option value=\"危重小组\"> 危重小组 </option>
                   <option value=\"应急小组\"> 应急小组 </option>
               </select>
           </div>
           <div class=\"form-group\">
               职称
               <select id=\"memberType\" name=\"memberType\" style=\"width: 30%;border: 1px solid #ccc;border-radius: 4px;height: 34px;padding: 6px 12px;\">
                   <option value=\"\"> 全选 </option>
                   <option value=\"护士\"> 护士 </option>
                   <option value=\"技师\"> 技师 </option>
                   <option value=\"医生\"> 医生 </option>
                   <option value=\"药师\"> 药师 </option>
                   <option value=\"收款员\"> 收款员 </option>
                   <option value=\"其他\"> 其他 </option>
               </select>
               行政职务
               <select id=\"jobType\" name=\"jobType\" style=\"width: 30%;border: 1px solid #ccc;border-radius: 4px;height: 34px;padding: 6px 12px;\">
                   <option value=\"\"> 全选 </option>
                   <option value=\"正高\"> 正高 </option>
                   <option value=\"副高\"> 副高 </option>
                   <option value=\"中级\"> 中级 </option>
                   <option value=\"初级\"> 初级 </option>
               </select>
           </div>
           <div class=\"form-group\">
               出生日期
               <input type=\"text\" name=\"birthday\" style=\"width: 30%;border: 1px solid #ccc;border-radius: 4px;height: 34px;padding: 6px 12px;\"/>
               到
               <input type=\"text\" name=\"birthday_end\" style=\"width: 30%;border: 1px solid #ccc;border-radius: 4px;height: 34px;padding: 6px 12px;\"/>
           </div>
           <div class=\"form-group\">

               最高学位
               <select id=\"degree\" name=\"degree\" style=\"width: 30%;border: 1px solid #ccc;border-radius: 4px;height: 34px;padding: 6px 12px;\">
                   <option value=\"\"> 全选 </option>
                   <option value=\"医学博士\"> 医学博士 </option>
                   <option value=\"医学硕士\"> 医学硕士 </option>
                   <option value=\"医学学士\"> 医学学士 </option>
                   <option value=\"工学博士\"> 工学博士 </option>
                   <option value=\"工学硕士\"> 工学硕士 </option>
                   <option value=\"工学学士\"> 工学学士 </option>
                   <option value=\"教育学博士\"> 教育学博士 </option>
                   <option value=\"教育学硕士\"> 教育学硕士 </option>
                   <option value=\"教育学学士\"> 教育学学士 </option>
                   <option value=\"经济学博士\"> 经济学博士 </option>
                   <option value=\"经济学硕士\"> 经济学硕士 </option>
                   <option value=\"经济学学士\"> 经济学学士 </option>
                   <option value=\"理学博士\"> 理学博士 </option>
                   <option value=\"理学硕士\"> 理学硕士 </option>
                   <option value=\"理学学士\"> 理学学士 </option>
                   <option value=\"农学博士\"> 农学博士 </option>
                   <option value=\"农学硕士\"> 农学硕士 </option>
                   <option value=\"农学学士\"> 农学学士 </option>
                   <option value=\"文学博士\"> 文学博士 </option>
                   <option value=\"文学硕士\"> 文学硕士 </option>
                   <option value=\"文学学士\"> 文学学士 </option>
                   <option value=\"法学博士\"> 法学博士 </option>
                   <option value=\"法学硕士\"> 法学硕士 </option>
                   <option value=\"法学学士\"> 法学学士 </option>
                   <option value=\"其他学博士\"> 其他学博士 </option>
                   <option value=\"其他学硕士\"> 其他学硕士 </option>
                   <option value=\"其他学学士\"> 其他学学士 </option>
                   <option value=\"博士...\"> 博士... </option>
                   <option value=\"硕士...\"> 硕士... </option>
                   <option value=\"学士...\"> 学士... </option>
               </select>
           </div>
           <button type=\"submit\" clas=\"btn bbtn btn-info btn-sm mhs\" style=\"width: 10%\">搜索</button>
       </form>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:batstudentcourse.htm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  62 => 20,  58 => 19,  50 => 14,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
