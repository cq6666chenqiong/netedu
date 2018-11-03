<?php

/* TopxiaWebBundle:Course:learn.html.twig */
class __TwigTemplate_bc486f6e7e87cfb5da03eb956b46571d4ddb69a16b9391a6f5ef93b40f8aab79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:learn.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'esBar' => array($this, 'block_esBar'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["hideSetupHint"] = true;
        // line 7
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 8
            $context["script_arguments"] = array("customChapter" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true), "plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material", 4 => "homework"));
        } else {
            // line 10
            $context["script_arguments"] = array("customChapter" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true), "plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material"));
        }
        // line 13
        $context["script_controller"] = "course/learn";
        // line 14
        $context["bodyClass"] = "lesson-dashboard-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 22
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 23
    public function block_full_content($context, array $blocks = array())
    {
        // line 24
        echo "    <style>
        #wrapper{height:500px;-webkit-overflow-scrolling:touch;overflow:auto;}
        .hotline24{ width:100px; height:40px;border-radius: 20px; background:#eb2744; line-height:30px; text-align:center; color:#fff;font-size:13px;background:url(\"/pics/begin_button.jpg\") no-repeat left top}
    </style>
    <style type=\"text/css\">
        .popWindow {
            background-color: #707070;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            filter: alpha(opacity=0);
            opacity: 0.0;
            z-index: 1;
            position: absolute;

        }
        #warp{ width:100%;height:80px;background:#000}
        .maskLayer {
            background-color:#000;
            width: 100%;
            height: 100%;
            line-height: 30px;
            left: 50%;
            top: 50%;
            color:#fff;
            z-index: 2;
            position: absolute;
            text-align:center;
        }
    </style>
    <script language=\"javascript\" type=\"text/javascript\">
        function showDiv() {
            document.getElementById('popWindow').style.display = 'block';
            document.getElementById('maskLayer').style.display = 'block';
        }
        function closeDiv() {
            document.getElementById('popWindow').style.display = 'none';
            document.getElementById('maskLayer').style.display = 'none';
        }
    </script>
    <link href=\"/video/css/video-js.css\" rel=\"stylesheet\">
    <!-- If you'd like to support IE8 -->
    <script src=\"/video/js/videojs-ie8.min.js\"></script>


    <script src=\"/video/video.min.js\"></script>
    <script src=\"/video/myvideo.js?i=111\"></script>
    <div class=\"lesson-dashboard\" id=\"lesson-dashboard\"
         data-course-id=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\"
         data-course-uri=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
         data-dashboard-uri=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
         data-watch-limit=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit"), "html", null, true);
        echo "\"
         data-starttime = \"";
        // line 77
        echo twig_escape_filter($this->env, ((array_key_exists("starttime", $context)) ? (_twig_default_filter((isset($context["starttime"]) ? $context["starttime"] : null), "")) : ("")), "html", null, true);
        echo "\"
         data-hide-media-lesson-learn-btn=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->isFeatureEnabled("hide_media_lesson_learn_btn"), "html", null, true);
        echo "\">
        <div class=\"dashboard-content\">
            ";
        // line 86
        echo "            ";
        $context["classroom"] = $this->env->getExtension('topxia_data_twig')->getData("GetClassroomByCourseId", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
        // line 87
        echo "            ";
        if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
            // line 88
            echo "                <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回科室"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 90
            echo "                <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程"), "html", null, true);
            echo "</a>
            ";
        }
        // line 92
        echo "
           ";
        // line 95
        echo "            <span class=\"timeShow\" style=\"float: right\"></span>
            <div class=\"dashboard-header\">
                <div class=\"pull-left title-group\">
          <span class=\"chapter-label\">
            ";
        // line 99
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 100
            echo "              <span data-role=\"custom-chapter-number\">第";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
            echo "</span></span>
                    ";
        } else {
            // line 102
            echo "                        第<span data-role=\"chapter-number\"></span>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
            echo "</span>
                    ";
        }
        // line 104
        echo "                    <span class=\"divider\">&raquo;</span>
                    <span class=\"chapter-label\">
            ";
        // line 106
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 107
            echo "                        <span data-role=\"custom-unit-number\">第";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo "</span></span>
                ";
        } else {
            // line 109
            echo "                    第<span data-role=\"unit-number\"></span>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo "</span>
                    ";
        }
        // line 111
        echo "                    <span class=\"divider\">&raquo;</span>
                    <span class=\"item-label\">";
        // line 112
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
            echo "<span data-role=\"lesson-number\"></span>";
        }
        echo "</span>
                    <span class=\"item-title\" data-role=\"lesson-title\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加载"), "html", null, true);
        echo "...</span>
                </div>
            </div>

            <div class=\"dashboard-body\">
                <div class=\"lesson-content\" id=\"lesson-video-content\" data-role=\"lesson-content\" style=\"display:none;\"
                        ";
        // line 119
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
            // line 120
            echo "                            data-watermark=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
            echo "\"
                        ";
        }
        // line 122
        echo "                        ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 123
            echo "                            data-fingerprint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
            echo "\"
                        ";
        }
        // line 125
        echo "                     data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo "\"
                     data-balloon-player=\"1\"
                ></div>
                <div class=\"watermarkEmbedded\" ></div>

                <div class=\"lesson-content lesson-content-audio\" id=\"lesson-audio-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
                <div class=\"lesson-content\" id=\"lesson-swf-content\" data-role=\"lesson-content\"  onclick=\"showDiv()\"></div>
                <div class=\"lesson-content\" id=\"lesson-iframe-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
                <div class=\"lesson-content lesson-content-text\" id=\"lesson-text-content\" data-role=\"lesson-content\" style=\"display:none;\"
                        ";
        // line 134
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled"), 0) > 0)) {
            echo " oncopy=\"return false;\" oncut=\"return false;\" onselectstart=\"return false\" oncontextmenu=\"return false;\"";
        }
        echo ">
                    <div class=\"lesson-content-text-body\"></div>
                </div>

                <div class=\"lesson-content lesson-content-document\" id=\"lesson-document-content\" data-role=\"lesson-content\" style=\"display:none;\"
                     ";
        // line 139
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.doc_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_doc_watermark");
            echo "\" ";
        }
        // line 140
        echo "                >
                    <div class=\"lesson-content-document-body\"></div>
                </div>

                <div class=\"lesson-content lesson-content-text\" id=\"lesson-live-content\" data-role=\"lesson-content\" style=\"display:none;\">
                    <div class=\"lesson-content-text-body\"></div>
                </div>
                <div class=\"lesson-content lesson-content-text\" id=\"lesson-unpublished-content\" data-role=\"lesson-content\" style=\"display:none;\">
                    <div class=\"lesson-content-text-body\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前课时正在编辑中，暂时无法观看。"), "html", null, true);
        echo "</div>
                </div>

                <div class=\"lesson-content lesson-content-text\" id=\"lesson-testpaper-content\" data-role=\"lesson-content\" style=\"display:none;\">
                    <div class=\"lesson-content-text-body\"></div>
                </div>
                <div class=\"lesson-content lesson-content-text\" id=\"lesson-ppt-content\" data-role=\"lesson-content\" style=\"display:none;\"
                     ";
        // line 155
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.ppt_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_ppt_watermark");
            echo "\" ";
        }
        echo ">
                    <div class=\"lesson-content-text-body\"></div>
                </div>

            </div>

            <div class=\"dashboard-footer clearfix\">
                <div class=\"pull-right\">

                    <input type=\"hidden\" id=\"lessonUrl\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaUri", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"lessonId\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"lessonType\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"lessonTime\"  value=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"userId\"  value=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"nextId\"  value=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"courseId\"  value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">


                    <input class=\"hotline24\" type=\"button\" id=\"start\"  onclick=\"start();\" value=\"\" >


                </div>
            </div>

        </div>
        <form id=\"formLesson\" action=\"\"></form>
        <div class=\"toolbar toolbar-open\" id=\"lesson-dashboard-toolbar\">
            <div class=\"toolbar-nav\">

                <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-primary\"></ul>
                ";
        // line 196
        echo "                </ul>

                <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-secondary\">
                    <li class=\"hide-pane\" style=\"display:none;\">
                        <a href=\"javascript:\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
                    </li>
                </ul>

            </div>
            <div class=\"toolbar-pane-container\">
            </div>
        </div>

    </div>

    <div class=\"modal\" id=\"course-learned-modal\" style=\"display:none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习进度提示"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p class=\"text-success\">";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("赞一个，这个课程你已经都学完啦，你可以再回顾一下或者去看看别的课程"), "html", null, true);
        echo "～～～</p>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回课程主页"), "html", null, true);
        echo "</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class=\"modal\" id=\"mediaPlayed-control-modal\" style=\"display:none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("媒体课时学习提示"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p class=\"text-success\">";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时设置了必须完整播放完整个课时才能学完"), "html", null, true);
        echo "～～</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class=\"modal\" id=\"homeworkDone-control-modal\" style=\"display:none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业未完成提示"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p class=\"text-success\">";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时设置了必须做完本课时作业并提交后才能学完"), "html", null, true);
        echo "～～</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 250,  452 => 247,  438 => 236,  432 => 233,  416 => 222,  410 => 219,  404 => 216,  382 => 196,  364 => 170,  360 => 169,  356 => 168,  352 => 167,  348 => 166,  344 => 165,  340 => 164,  324 => 155,  314 => 148,  304 => 140,  298 => 139,  288 => 134,  275 => 125,  269 => 123,  266 => 122,  260 => 120,  258 => 119,  249 => 113,  242 => 112,  239 => 111,  229 => 109,  219 => 107,  217 => 106,  213 => 104,  203 => 102,  193 => 100,  191 => 99,  185 => 95,  182 => 92,  174 => 90,  166 => 88,  163 => 87,  160 => 86,  155 => 78,  151 => 77,  147 => 76,  143 => 75,  139 => 74,  135 => 73,  84 => 24,  81 => 23,  76 => 22,  71 => 21,  66 => 20,  59 => 17,  56 => 16,  48 => 3,  44 => 1,  42 => 14,  40 => 13,  37 => 10,  34 => 8,  32 => 7,  30 => 5,  11 => 1,);
    }
}
