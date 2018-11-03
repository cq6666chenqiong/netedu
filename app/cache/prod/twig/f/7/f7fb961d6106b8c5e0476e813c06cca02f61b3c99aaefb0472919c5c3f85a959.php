<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig */
class __TwigTemplate_f7fb961d6106b8c5e0476e813c06cca02f61b3c99aaefb0472919c5c3f85a959 extends Twig_Template
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
        echo "<div class=\"media testpaper-result\">
  <div class=\"testpaper-result-total\">
    <div class=\"well\">
      <div class=\"testpaper-result-total-score\">";
        // line 4
        if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "score", array()), "html", null, true);
        } else {
            echo "?";
        }
        echo " <small>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "</small></div>
      <small class=\"text-muted\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("总分"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "score", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "</small>
    </div>
  </div>
  <div class=\"media-body\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-condensed testpaper-result-table\">
        <thead>
            <th></th>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 14
            echo "              <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $context["type"], array(), "array"), "html", null, true);
            echo " <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "all", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("道"), "html", null, true);
            echo ")</small></th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </thead>
        <tbody>
          <tr>
            <th>答对</th>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 21
            echo "              ";
            if (($context["type"] == "essay")) {
                // line 22
                echo "                ";
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 23
                    echo "                  <td><span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "right", array()), "html", null, true);
                    echo " <small>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("道"), "html", null, true);
                    echo "</small></span></td>
                ";
                } else {
                    // line 25
                    echo "                  <td rowspan=\"4\" style=\"vertical-align:middle\"><span class=\"text-success\" style=\"font-size:40px\">?</span></td>
                ";
                }
                // line 27
                echo "              ";
            } else {
                // line 28
                echo "                ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                    // line 29
                    echo "                  <td><span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "right", array()), "html", null, true);
                    echo " <small>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("道"), "html", null, true);
                    echo "</small></span></td>
                ";
                } else {
                    // line 31
                    echo "                  <td rowspan=\"4\" style=\"vertical-align:middle\"><span class=\"text-success\" style=\"font-size:40px\">?</span></td>
                ";
                }
                // line 33
                echo "              ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "          </tr>
          <tr>
            <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("答错"), "html", null, true);
        echo "</th>
            ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 39
            echo "              ";
            if (($context["type"] == "essay")) {
                // line 40
                echo "                ";
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 41
                    echo "                  <td><span class=\"text-danger\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "wrong", array()) + $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array())), "html", null, true);
                    echo " <small>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("道"), "html", null, true);
                    echo "</small></span></td>
                ";
                }
                // line 43
                echo "              ";
            } else {
                // line 44
                echo "                ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                    // line 45
                    echo "                  <td><span class=\"text-danger\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "wrong", array()) + $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array())), "html", null, true);
                    echo " <small>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("道"), "html", null, true);
                    if (((($context["type"] == "choice") && ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array()) != 0)) || (($context["type"] == "uncertain_choice") && ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array()) != 0)))) {
                        echo "（其中有";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array()), "html", null, true);
                        echo "道漏选）";
                    }
                    echo "</small></span></td>
                ";
                }
                // line 47
                echo "              ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          </tr>
          <tr>
            <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未答"), "html", null, true);
        echo "</th>
            ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 53
            echo "              ";
            if (($context["type"] == "essay")) {
                // line 54
                echo "                ";
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 55
                    echo "                  <td><span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "noAnswer", array()), "html", null, true);
                    echo " <small>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("道"), "html", null, true);
                    echo "</small></span></td>
                ";
                }
                // line 57
                echo "              ";
            } else {
                // line 58
                echo "                ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                    // line 59
                    echo "                  <td><span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "noAnswer", array()), "html", null, true);
                    echo " <small>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("道"), "html", null, true);
                    echo "</small></span></td>
                ";
                }
                // line 61
                echo "              ";
            }
            // line 62
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "          </tr>
          <tr>
            <th>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("得分"), "html", null, true);
        echo "</th>
            ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 67
            echo "              ";
            if (($context["type"] == "essay")) {
                // line 68
                echo "                ";
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 69
                    echo "                  <td><span class=\"text-score\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "score", array()), "html", null, true);
                    echo " <small>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
                    echo "</small></span></td>
                ";
                }
                // line 71
                echo "              ";
            } else {
                // line 72
                echo "                ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                    // line 73
                    echo "                  <td><span class=\"text-score\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "score", array()), "html", null, true);
                    echo " <small>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
                    echo "</small></span></td>
                ";
                }
                // line 75
                echo "              ";
            }
            // line 76
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 77,  266 => 76,  263 => 75,  255 => 73,  252 => 72,  249 => 71,  241 => 69,  238 => 68,  235 => 67,  231 => 66,  227 => 65,  223 => 63,  217 => 62,  214 => 61,  206 => 59,  203 => 58,  200 => 57,  192 => 55,  189 => 54,  186 => 53,  182 => 52,  178 => 51,  174 => 49,  168 => 48,  165 => 47,  152 => 45,  149 => 44,  146 => 43,  138 => 41,  135 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 35,  114 => 34,  111 => 33,  107 => 31,  99 => 29,  96 => 28,  93 => 27,  89 => 25,  81 => 23,  78 => 22,  75 => 21,  71 => 20,  65 => 16,  53 => 14,  49 => 13,  34 => 5,  24 => 4,  19 => 1,);
    }
}
