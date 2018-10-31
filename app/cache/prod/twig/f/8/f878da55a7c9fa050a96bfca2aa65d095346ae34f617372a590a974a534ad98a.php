<?php

/* TopxiaAdminBundle:User:create-modal.html.twig */
class __TwigTemplate_f878da55a7c9fa050a96bfca2aa65d095346ae34f617372a590a974a534ad98a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:create-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "添加新用户";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"csrf-token\" content=\"5c52c2477011149dccacef6775eaa2e45f09627c\">
    <title>
      用户管理 -
      用户管理 -
      用户
      | 卫生人才在线学习平台  </title>


    <link href=\"/assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css?6.17.13\" rel=\"stylesheet\">
    <link href=\"/assets/css/common.css?6.17.13\" rel=\"stylesheet\">
    <link href=\"/bundles/topxiaadmin/css/admin.css?6.17.13\" rel=\"stylesheet\">
    <link href=\"/bundles/topxiaadmin/css/admin_v2.css?6.17.13\" rel=\"stylesheet\">
    <link href=\"/assets/v2/css/es-icon.css?6.17.13\" rel=\"stylesheet\" media=\"screen\">

    <!--[if lt IE 9]>
    <script src=\"/assets/libs/html5shiv.js?6.17.13\"></script>
    <script src=\"/assets/libs/respond.min.js?6.17.13\"></script>
    <![endif]-->
    <style>.datetimepicker{padding:4px;margin-top:1px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;direction:ltr}.datetimepicker-inline{width:220px}.datetimepicker.datetimepicker-rtl{direction:rtl}.datetimepicker.datetimepicker-rtl table tr td span{float:right}.datetimepicker-dropdown,.datetimepicker-dropdown-left{top:0;left:0}[class*=\" datetimepicker-dropdown\"]:before{content:'';display:inline-block;border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:7px solid #ccc;border-bottom-color:rgba(0,0,0,.2);position:absolute}[class*=\" datetimepicker-dropdown\"]:after{content:'';display:inline-block;border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid #fff;position:absolute}[class*=\" datetimepicker-dropdown-top\"]:before{content:'';display:inline-block;border-left:7px solid transparent;border-right:7px solid transparent;border-top:7px solid #ccc;border-top-color:rgba(0,0,0,.2);border-bottom:0}[class*=\" datetimepicker-dropdown-top\"]:after{content:'';display:inline-block;border-left:6px solid transparent;border-right:6px solid transparent;border-top:6px solid #fff;border-bottom:0}.datetimepicker-dropdown-bottom-left:before{top:-7px;right:6px}.datetimepicker-dropdown-bottom-left:after{top:-6px;right:7px}.datetimepicker-dropdown-bottom-right:before{top:-7px;left:6px}.datetimepicker-dropdown-bottom-right:after{top:-6px;left:7px}.datetimepicker-dropdown-top-left:before{bottom:-7px;right:6px}.datetimepicker-dropdown-top-left:after{bottom:-6px;right:7px}.datetimepicker-dropdown-top-right:before{bottom:-7px;left:6px}.datetimepicker-dropdown-top-right:after{bottom:-6px;left:7px}.datetimepicker>div{display:none}.datetimepicker.minutes div.datetimepicker-minutes{display:block}.datetimepicker.hours div.datetimepicker-hours{display:block}.datetimepicker.days div.datetimepicker-days{display:block}.datetimepicker.months div.datetimepicker-months{display:block}.datetimepicker.years div.datetimepicker-years{display:block}.datetimepicker table{margin:0}.datetimepicker td,.datetimepicker th{text-align:center;width:20px;height:20px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;border:0}.table-striped .datetimepicker table tr td,.table-striped .datetimepicker table tr th{background-color:transparent}.datetimepicker table tr td.minute:hover{background:#eee;cursor:pointer}.datetimepicker table tr td.hour:hover{background:#eee;cursor:pointer}.datetimepicker table tr td.day:hover{background:#eee;cursor:pointer}.datetimepicker table tr td.old,.datetimepicker table tr td.new{color:#999}.datetimepicker table tr td.disabled,.datetimepicker table tr td.disabled:hover{background:0;color:#999;cursor:default}.datetimepicker table tr td.today,.datetimepicker table tr td.today:hover,.datetimepicker table tr td.today.disabled,.datetimepicker table tr td.today.disabled:hover{background-color:#fde19a;background-image:-moz-linear-gradient(top,#fdd49a,#fdf59a);background-image:-ms-linear-gradient(top,#fdd49a,#fdf59a);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fdd49a),to(#fdf59a));background-image:-webkit-linear-gradient(top,#fdd49a,#fdf59a);background-image:-o-linear-gradient(top,#fdd49a,#fdf59a);background-image:linear-gradient(top,#fdd49a,#fdf59a);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdd49a', endColorstr='#fdf59a', GradientType=0);border-color:#fdf59a #fdf59a #fbed50;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.datetimepicker table tr td.today:hover,.datetimepicker table tr td.today:hover:hover,.datetimepicker table tr td.today.disabled:hover,.datetimepicker table tr td.today.disabled:hover:hover,.datetimepicker table tr td.today:active,.datetimepicker table tr td.today:hover:active,.datetimepicker table tr td.today.disabled:active,.datetimepicker table tr td.today.disabled:hover:active,.datetimepicker table tr td.today.active,.datetimepicker table tr td.today:hover.active,.datetimepicker table tr td.today.disabled.active,.datetimepicker table tr td.today.disabled:hover.active,.datetimepicker table tr td.today.disabled,.datetimepicker table tr td.today:hover.disabled,.datetimepicker table tr td.today.disabled.disabled,.datetimepicker table tr td.today.disabled:hover.disabled,.datetimepicker table tr td.today[disabled],.datetimepicker table tr td.today:hover[disabled],.datetimepicker table tr td.today.disabled[disabled],.datetimepicker table tr td.today.disabled:hover[disabled]{background-color:#fdf59a}.datetimepicker table tr td.today:active,.datetimepicker table tr td.today:hover:active,.datetimepicker table tr td.today.disabled:active,.datetimepicker table tr td.today.disabled:hover:active,.datetimepicker table tr td.today.active,.datetimepicker table tr td.today:hover.active,.datetimepicker table tr td.today.disabled.active,.datetimepicker table tr td.today.disabled:hover.active{background-color:#fbf069 \\9}.datetimepicker table tr td.active,.datetimepicker table tr td.active:hover,.datetimepicker table tr td.active.disabled,.datetimepicker table tr td.active.disabled:hover{background-color:#006dcc;background-image:-moz-linear-gradient(top,#08c,#04c);background-image:-ms-linear-gradient(top,#08c,#04c);background-image:-webkit-gradient(linear,0 0,0 100%,from(#08c),to(#04c));background-image:-webkit-linear-gradient(top,#08c,#04c);background-image:-o-linear-gradient(top,#08c,#04c);background-image:linear-gradient(top,#08c,#04c);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);border-color:#04c #04c #002a80;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,.25)}.datetimepicker table tr td.active:hover,.datetimepicker table tr td.active:hover:hover,.datetimepicker table tr td.active.disabled:hover,.datetimepicker table tr td.active.disabled:hover:hover,.datetimepicker table tr td.active:active,.datetimepicker table tr td.active:hover:active,.datetimepicker table tr td.active.disabled:active,.datetimepicker table tr td.active.disabled:hover:active,.datetimepicker table tr td.active.active,.datetimepicker table tr td.active:hover.active,.datetimepicker table tr td.active.disabled.active,.datetimepicker table tr td.active.disabled:hover.active,.datetimepicker table tr td.active.disabled,.datetimepicker table tr td.active:hover.disabled,.datetimepicker table tr td.active.disabled.disabled,.datetimepicker table tr td.active.disabled:hover.disabled,.datetimepicker table tr td.active[disabled],.datetimepicker table tr td.active:hover[disabled],.datetimepicker table tr td.active.disabled[disabled],.datetimepicker table tr td.active.disabled:hover[disabled]{background-color:#04c}.datetimepicker table tr td.active:active,.datetimepicker table tr td.active:hover:active,.datetimepicker table tr td.active.disabled:active,.datetimepicker table tr td.active.disabled:hover:active,.datetimepicker table tr td.active.active,.datetimepicker table tr td.active:hover.active,.datetimepicker table tr td.active.disabled.active,.datetimepicker table tr td.active.disabled:hover.active{background-color:#039 \\9}.datetimepicker table tr td span{display:block;width:23%;height:54px;line-height:54px;float:left;margin:1%;cursor:pointer;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.datetimepicker .datetimepicker-hours span{height:26px;line-height:26px}.datetimepicker .datetimepicker-hours table tr td span.hour_am,.datetimepicker .datetimepicker-hours table tr td span.hour_pm{width:14.6%}.datetimepicker .datetimepicker-hours fieldset legend,.datetimepicker .datetimepicker-minutes fieldset legend{margin-bottom:inherit;line-height:30px}.datetimepicker .datetimepicker-minutes span{height:26px;line-height:26px}.datetimepicker table tr td span:hover{background:#eee}.datetimepicker table tr td span.disabled,.datetimepicker table tr td span.disabled:hover{background:0;color:#999;cursor:default}.datetimepicker table tr td span.active,.datetimepicker table tr td span.active:hover,.datetimepicker table tr td span.active.disabled,.datetimepicker table tr td span.active.disabled:hover{background-color:#006dcc;background-image:-moz-linear-gradient(top,#08c,#04c);background-image:-ms-linear-gradient(top,#08c,#04c);background-image:-webkit-gradient(linear,0 0,0 100%,from(#08c),to(#04c));background-image:-webkit-linear-gradient(top,#08c,#04c);background-image:-o-linear-gradient(top,#08c,#04c);background-image:linear-gradient(top,#08c,#04c);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);border-color:#04c #04c #002a80;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,.25)}.datetimepicker table tr td span.active:hover,.datetimepicker table tr td span.active:hover:hover,.datetimepicker table tr td span.active.disabled:hover,.datetimepicker table tr td span.active.disabled:hover:hover,.datetimepicker table tr td span.active:active,.datetimepicker table tr td span.active:hover:active,.datetimepicker table tr td span.active.disabled:active,.datetimepicker table tr td span.active.disabled:hover:active,.datetimepicker table tr td span.active.active,.datetimepicker table tr td span.active:hover.active,.datetimepicker table tr td span.active.disabled.active,.datetimepicker table tr td span.active.disabled:hover.active,.datetimepicker table tr td span.active.disabled,.datetimepicker table tr td span.active:hover.disabled,.datetimepicker table tr td span.active.disabled.disabled,.datetimepicker table tr td span.active.disabled:hover.disabled,.datetimepicker table tr td span.active[disabled],.datetimepicker table tr td span.active:hover[disabled],.datetimepicker table tr td span.active.disabled[disabled],.datetimepicker table tr td span.active.disabled:hover[disabled]{background-color:#04c}.datetimepicker table tr td span.active:active,.datetimepicker table tr td span.active:hover:active,.datetimepicker table tr td span.active.disabled:active,.datetimepicker table tr td span.active.disabled:hover:active,.datetimepicker table tr td span.active.active,.datetimepicker table tr td span.active:hover.active,.datetimepicker table tr td span.active.disabled.active,.datetimepicker table tr td span.active.disabled:hover.active{background-color:#039 \\9}.datetimepicker table tr td span.old{color:#999}.datetimepicker th.switch{width:145px}.datetimepicker thead tr:first-child th,.datetimepicker tfoot tr:first-child th{cursor:pointer}.datetimepicker thead tr:first-child th:hover,.datetimepicker tfoot tr:first-child th:hover{background:#eee}.input-append.date .add-on i,.input-prepend.date .add-on i{cursor:pointer;width:14px;height:14px}body.modal-open .datetimepicker {z-index: 1200 !important;}</style>

    <script>
        var app = {};
        app.debug = false;
        app.version = '6.17.13';
        app.httpHost = 'http://192.168.0.102';
        app.basePath = '';
        app.theme = 'jianmo';
        app.themeGlobalScript = 'theme/global-script';
        app.jsPaths = {\"common\":\"common\",\"theme\":\"\\/themes\\/jianmo\\/js\",\"customwebbundle\":\"\\/bundles\\/customweb\\/js\",\"customadminbundle\":\"\\/bundles\\/customadmin\\/js\",\"topxiawebbundle\":\"\\/bundles\\/topxiaweb\\/js\",\"topxiaadminbundle\":\"\\/bundles\\/topxiaadmin\\/js\",\"classroombundle\":\"\\/bundles\\/classroom\\/js\",\"materiallibbundle\":\"\\/bundles\\/materiallib\\/js\",\"sensitivewordbundle\":\"\\/bundles\\/sensitiveword\\/js\",\"orgbundle\":\"\\/bundles\\/org\\/js\"};

        app.crontab = '/common/crontab';

        var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
        var CLOUD_FILE_SERVER = \"\";

        app.config = {\"api\":{\"weibo\":{\"key\":\"\"},\"qq\":{\"key\":\"\"},\"douban\":{\"key\":\"\"},\"renren\":{\"key\":\"\"}},\"cloud\":{\"video_player\":\"http:\\/\\/cdn.staticfile.org\\/GrindPlayerCN\\/1.0.2\\/GrindPlayer.swf\",\"video_player_watermark_plugin\":\"http:\\/\\/cdn.staticfile.org\\/GrindPlayerCN\\/1.0.2\\/Watermake-1.0.3.swf\",\"video_player_fingerprint_plugin\":\"http:\\/\\/cdn.staticfile.org\\/GrindPlayerCN\\/1.0.2\\/Fingerprint-1.0.1.swf\"},\"loading_img_path\":\"\\/assets\\/img\\/default\\/loading.gif?6.17.13\"};

        app.arguments = {};
        app.controller = 'user/list';

        app.scripts = null;

        app.uploadUrl = '/file/upload';
        app.imgCropUrl = '/file/img/crop';
        app.lessonCopyEnabled = '0';

        app.mainScript = '/bundles/topxiaadmin/js/admin-app.js?6.17.13';
    </script>
    <script src=\"/assets/libs/seajs/seajs/2.2.1/sea.js?6.17.13\"></script>
    <script src=\"/assets/libs/seajs/seajs-style/1.0.2/seajs-style.js?6.17.13\"></script>
    <script src=\"/assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js?6.17.13\"></script>
    <script src=\"/assets/libs/seajs-global-config.js?6.17.13\"></script>
    <script src=\"/assets/libs/seajs-global-config.js?6.17.13\"></script>
      <script src=\"/js/jquery.js?6.17.13\"></script>
  </head>
<form id=\"user-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("admin_user_create");
        echo "\" onsubmit=\"return checkUser()\">

  <div class=\"row form-group\" style=\"display: none\">
    <div class=\"col-md-2 control-label\">
      <label for=\"email\">邮箱地址</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"email\" data-url=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("admin_user_create_email_check");
        echo "\" name=\"email\" class=\"form-control\" >
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"nickname\">工号</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"nickname\" name=\"nickname\" data-url=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("admin_user_create_nickname_check");
        echo "\" class=\"form-control\" ><div id=\"error\"></div>
    </div>
  </div>

   <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"password\">密码</label>
    </div>
      <div class=\"col-md-7 controls\">
        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
      <p class=\"help-block\">5-20位英文、数字、符号，区分大小写</p>
    </div>
  </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
      <label for=\"confirmPassword\">确认密码</label>
    </div>
      <div class=\"col-md-7 controls\">
        <input type=\"password\" id=\"confirmPassword\" name=\"confirmPassword\" class=\"form-control\">
        <p class=\"help-block\">再输入一次密码</p>
      </div>
    </div>

    ";
        // line 107
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:create-modal.html.twig", 107)->display(array_merge($context, array("colmd" => 7, "modal" => "modal")));
        // line 118
        echo "  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <button id=\"user-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-create-form\">提交</button>
  <button type=\"button\" onclick=\"javascript:history.go(-1)\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
</form>
";
    }

    // line 124
    public function block_footer($context, array $blocks = array())
    {
        // line 125
        echo "
  ";
        // line 127
        echo "    <script>
      var ispass = false;
      \$(function(){
          \$(\".close\").click(function(){
              history.go(-1);
          });
         \$(\"#nickname\").blur(function(){
             \$.ajax({
                 type: \"GET\",
                 url: \"/functionDir/ajax/check_user.php?nickname=\"+\$(\"#nickname\").val().trim(),
                 data: {username:\$(\"#username\").val(), content:\$(\"#content\").val()},
                 dataType: \"json\",
                 success: function(data){

                    if(data.code > 0){
                        ispass = false;

                        \$(\"#error\").html(\"<span style='color:red'>工号重复，请更换其他工号！</span>\");
                    }else{
                        ispass = true;
                        \$(\"#error\").html(\"\");
                    }
                 }
             });
         });
      });
function checkUser(){
    return ispass;
}

    </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 127,  168 => 125,  165 => 124,  155 => 118,  153 => 107,  126 => 83,  114 => 74,  104 => 67,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
