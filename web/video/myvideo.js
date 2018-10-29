        var myPlayer;
        function start(){
            var type = $('#lessonType').val();
            var url = $('#lessonUrl').val();
            if(type=="video" && url.indexOf(".mp4") != -1){
                var uris = "";
                $('#lesson-swf-content').html(
                    "<video id='my-video' class='video-js' controls preload='auto' autoplay style='width:100%; height:100%;'  poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>"+
                    "<source src='"+url+"' type='video/mp4'>"+
                    "<source src='"+uris+"' type='video/webm'>"+
                    "<source src='"+uris+"' type='video/ogg'>"+
                    "<p class='vjs-no-js'>"+
                    "To view this video please enable JavaScript, and consider upgrading to a web browser that"+
                    "<a href='http://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>"+
                    "</p>"+
                    "</video>"
                );
                myPlayer = videojs('my-video');
                videojs("my-video").ready(function(){
                    var myPlayer = this;
                    myPlayer.play();
                });
                $("#start").hide();
            }else{
                $('#lesson-swf-content').hide();
                $('#lesson-ppt-content').show();
                /*
                if(IsPC()){
                    //alert("pc");

                    $('#lesson-ppt-content').html(
                        "<iframe src='"+url+"' scroll='auto' style='width:100%; height:100%;overflow-x:scroll;overflow-y:scroll'></iframe>"
                    );
                }else{
                    //alert("移动");
                    $('#lesson-ppt-content').html(
                        "<div id='wrapper'>"+
                        "<iframe src='"+url+"' scroll='auto' style='width:100%; height:100%;overflow-x:scroll;overflow-y:scroll;'></iframe>" +
                        "</div>"
                    );
                }
                */
                $('#lesson-ppt-content').html(
                    "<iframe src='"+url+"' class='video-js' style='width:100%; height:100%;'></iframe>"
                );
            }
            var lessontime = $("#lessonTime").val();
            var intDiff = parseInt(lessontime);//倒计时总秒数量
            var nextId = $("#nextId").val();
            var courseId = $("#courseId").val();
            var lessonId = $("#lessonId").val();
            var userId = $("#userId").val();

            function timer(intDiff){
                var s =  window.setInterval(function(){
                    var tag = false;
                    var day=0,
                        hour=0,
                        minute=0,
                        second=0;//时间默认值
                    if(intDiff > 0){
                        day = Math.floor(intDiff / (60 * 60 * 24));
                        hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
                        minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
                        second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
                    }else{//当时间耗尽，刷新页面
                        window.location.reload();
                    }
                    if (minute <= 9) minute = '0' + minute;
                    if (second <= 9) second = '0' + second;
                    $(".timeShow").html('本课程学习时间还剩下<font>'+minute+'分'+second+'</font>秒');
                    intDiff--;
                    if(intDiff == 0){
                        $.ajax({
                            type: "GET",
                            url: "/functionDir/ajax/passLesson.php?lessonId="+lessonId+"&userId="+userId, //用于文件上传的服务器端请求地址
                            dataType: 'json', //返回值类型 一般设置为json
                            async: false,
                            success: function (data, status)  //服务器成功响应处理函数
                            {
                                alert("本课程培训结束，您顺利通过培训!");
                                window.clearInterval(s);
                                if(nextId != -1)
                                window.location.href = "/course/" + courseId + "/learn?lessonId=" + nextId + "#lesson/" + nextId;

                            },
                            error : function (data, status, e)//服务器响应失败处理函数
                            {
                            }
                        });
                    }
                   // if(tag){
                   //     window.location.href = "/course/" + courseId + "/learn?lessonId=" + nextId + "#lesson/" + nextId;
                  //  }
                }, 1000);
            }
            $(function(){
                timer(intDiff);
            });
        }


        function pause(){
            myPlayer.pause();
        }

        function play(){
            myPlayer.play();
        }

        function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
        }

