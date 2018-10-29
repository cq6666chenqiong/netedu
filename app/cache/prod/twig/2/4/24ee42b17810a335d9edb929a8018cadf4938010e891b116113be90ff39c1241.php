<?php

/* TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig */
class __TwigTemplate_24ee42b17810a335d9edb929a8018cadf4938010e891b116113be90ff39c1241 extends Twig_Template
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
        if (((array_key_exists("isBuyFillUserinfo", $context)) ? (_twig_default_filter((isset($context["isBuyFillUserinfo"]) ? $context["isBuyFillUserinfo"] : null), false)) : (false))) {
            // line 2
            echo "  ";
            if ((isset($context["userinfoFieldsSetting"]) ? $context["userinfoFieldsSetting"] : null)) {
                // line 3
                echo "    ";
                if (((array_key_exists("showNavTip", $context)) ? (_twig_default_filter((isset($context["showNavTip"]) ? $context["showNavTip"] : null), true)) : (true))) {
                    // line 4
                    echo "      <div class=\"help-block\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("温情提示：如果您的资料有变更，请在此修改，以便更好的为您服务！"), "html", null, true);
                    echo "</div>
      <hr>
    ";
                }
                // line 7
                echo "
    ";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userinfoFieldsSetting"]) ? $context["userinfoFieldsSetting"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 9
                    echo "      ";
                    $context["defaultFields"] = $this->env->getExtension('topxia_web_twig')->getDict("userInfoFields");
                    // line 10
                    echo "      ";
                    if (($context["field"] == "truename")) {
                        // line 11
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"truename\">";
                        // line 12
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "truename", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 14
                        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "truename", array()))) {
                            // line 15
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "truename", array()), "html", null, true);
                            echo " <small class=\"text-success\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已认证"), "html", null, true);
                            echo ")</small></div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 16
(isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "truename", array()))) {
                            // line 17
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "truename", array()), "html", null, true);
                            echo " <small class=\"text-warning\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证中"), "html", null, true);
                            echo ")</small></div>
            ";
                        } else {
                            // line 19
                            echo "              <input class=\"form-control\" id=\"truename\" type=\"text\" name=\"truename\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "truename", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 21
                        echo "          </div>
        </div>
      ";
                    }
                    // line 24
                    echo "
      ";
                    // line 25
                    if (($context["field"] == "email")) {
                        // line 26
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"email\">";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "email", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 29
                        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "@");
                        // line 30
                        echo "            ";
                        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "myBanana.net")) {
                            // line 31
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
                            echo "</div>
            ";
                        } else {
                            // line 33
                            echo "              <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" value=\"\" data-url=\"";
                            echo $this->env->getExtension('routing')->getPath("register_email_check");
                            echo "\" />
            ";
                        }
                        // line 35
                        echo "          </div>
        </div>
      ";
                    }
                    // line 38
                    echo "
      ";
                    // line 39
                    if (($context["field"] == "mobile")) {
                        // line 40
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"mobile\">";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "mobile", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 43
                        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "verifiedMobile", array()), "")) : (""))) {
                            // line 44
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_phone_number($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "verifiedMobile", array())), "html", null, true);
                            echo "<small class=\"text-success\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已绑定"), "html", null, true);
                            echo ")</small></div>
            ";
                        } else {
                            // line 46
                            echo "              <input class=\"form-control\" id=\"mobile\" type=\"text\" name=\"mobile\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mobile", array()), "html", null, true);
                            echo "\" data-url=\"";
                            echo $this->env->getExtension('routing')->getPath("register_mobile_check");
                            echo "\">
            ";
                        }
                        // line 48
                        echo "          </div>
        </div>
      ";
                    }
                    // line 51
                    echo "
      ";
                    // line 52
                    if (($context["field"] == "qq")) {
                        // line 53
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"qq\">";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "qq", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"qq\" type=\"text\" name=\"qq\" value=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "qq", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 60
                    echo "
      ";
                    // line 61
                    if (($context["field"] == "company")) {
                        // line 62
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"company\">";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "company", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" value=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 69
                    echo "
      ";
                    // line 70
                    if (($context["field"] == "job")) {
                        // line 71
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"job\">";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "job", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"job\" type=\"text\" name=\"job\" value=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "job", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 78
                    echo "
      ";
                    // line 79
                    if (($context["field"] == "idcard")) {
                        // line 80
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"idcard\">";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "idcard", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 83
                        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "idcard", array()))) {
                            // line 84
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "idcard", array())), "html", null, true);
                            echo " <small class=\"text-success\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已认证"), "html", null, true);
                            echo ")</small></div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 85
(isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "idcard", array()))) {
                            // line 86
                            echo "              <div class=\"control-text\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "idcard", array())), "html", null, true);
                            echo " <small class=\"text-warning\">(";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证中"), "html", null, true);
                            echo ")</small></div>
            ";
                        } else {
                            // line 88
                            echo "              <input type=\"text\" id=\"idcard\" name=\"";
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "\"  class=\"form-control\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "idcard", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 90
                        echo "          </div>
        </div>
      ";
                    }
                    // line 93
                    echo "
      ";
                    // line 94
                    if (($context["field"] == "gender")) {
                        // line 95
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"gender\">";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "gender", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6\">
            <div class=\"checkbox-inline\" style=\"padding-left: 0\">
              <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\" ";
                        // line 99
                        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "gender", array()) == "male")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_0\" class=\"required mrl\">";
                        // line 100
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("男"), "html", null, true);
                        echo "</span>
              <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"  ";
                        // line 101
                        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "gender", array()) == "female")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_1\" class=\"required\" >";
                        // line 102
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("女"), "html", null, true);
                        echo "</span>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 107
                    echo "
      ";
                    // line 108
                    if (($context["field"] == "weixin")) {
                        // line 109
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weixin\">";
                        // line 110
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "weixin", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weixin\" name=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weixin", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 116
                    echo "
      ";
                    // line 117
                    if (($context["field"] == "weibo")) {
                        // line 118
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weibo\">";
                        // line 119
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultFields"]) ? $context["defaultFields"] : null), "weibo", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weibo\" name=\"";
                        // line 121
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weibo", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 125
                    echo "
      ";
                    // line 126
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                        // line 127
                        echo "        ";
                        if (($context["field"] == $this->getAttribute($context["userField"], "fieldName", array()))) {
                            // line 128
                            echo "           ";
                            if (($this->getAttribute($context["userField"], "type", array()) == "text")) {
                                // line 129
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 130
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label \">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6 controls\">
                  <textarea id=\"";
                                // line 132
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"form-control \">";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "</textarea>
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute(                            // line 137
$context["userField"], "type", array()) == "int")) {
                                // line 138
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 139
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 141
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最大值为9位整数"), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute(                            // line 146
$context["userField"], "type", array()) == "float")) {
                                // line 147
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 148
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\" col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 150
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保留到2位小数"), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo " form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute(                            // line 155
$context["userField"], "type", array()) == "date")) {
                                // line 156
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 157
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\" col-sm-6 controls\">
                  <input type=\"text\" id=\"";
                                // line 159
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>

            ";
                            } elseif (($this->getAttribute(                            // line 164
$context["userField"], "type", array()) == "varchar")) {
                                // line 165
                                echo "              <div class=\"form-group\">
                <label for=\"";
                                // line 166
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
                <div class=\"col-sm-6  controls\">
                  <input type=\"text\" id=\"";
                                // line 168
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
              </div>
            ";
                            }
                            // line 173
                            echo "
          ";
                        }
                        // line 175
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "    ";
            }
        }
        // line 179
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 179,  500 => 177,  494 => 176,  488 => 175,  484 => 173,  472 => 168,  465 => 166,  462 => 165,  460 => 164,  446 => 159,  439 => 157,  436 => 156,  434 => 155,  418 => 150,  411 => 148,  408 => 147,  406 => 146,  390 => 141,  383 => 139,  380 => 138,  378 => 137,  366 => 132,  359 => 130,  356 => 129,  353 => 128,  350 => 127,  346 => 126,  343 => 125,  334 => 121,  329 => 119,  326 => 118,  324 => 117,  321 => 116,  312 => 112,  307 => 110,  304 => 109,  302 => 108,  299 => 107,  291 => 102,  285 => 101,  281 => 100,  275 => 99,  269 => 96,  266 => 95,  264 => 94,  261 => 93,  256 => 90,  248 => 88,  240 => 86,  238 => 85,  231 => 84,  229 => 83,  224 => 81,  221 => 80,  219 => 79,  216 => 78,  209 => 74,  204 => 72,  201 => 71,  199 => 70,  196 => 69,  189 => 65,  184 => 63,  181 => 62,  179 => 61,  176 => 60,  169 => 56,  164 => 54,  161 => 53,  159 => 52,  156 => 51,  151 => 48,  143 => 46,  135 => 44,  133 => 43,  128 => 41,  125 => 40,  123 => 39,  120 => 38,  115 => 35,  109 => 33,  103 => 31,  100 => 30,  98 => 29,  93 => 27,  90 => 26,  88 => 25,  85 => 24,  80 => 21,  74 => 19,  66 => 17,  64 => 16,  57 => 15,  55 => 14,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  37 => 8,  34 => 7,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
