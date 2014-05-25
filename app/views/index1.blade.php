<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity Buzz</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://connect.facebook.net/en_US/sdk.js"></script>
    <script>
        userID = '';
        window.fbAsyncInit = function(){
            FB.init({
                appId:'249004615287686',
                xfbml:true,
                version:'v2.0'
            });
            FB.getLoginStatus(function(res){
                if(res.status == 'connected'){
                    $('#login_btn').text('登出');
                    userID = res.authResponse.userID;
                    $("#user_tag_link").attr('href',$("#user_tag_link").attr('href') + '/tag1?id=' + userID);
                    $("#suggest_user_activity_link").attr('href',$("#suggest_user_activity_link").attr('href') + '/like1?id=' + userID);
                    
                }
            });
        }
        
        $(document).ready(function(){
            $('#login_btn').click(function(e){
                FB.getLoginStatus(function(res){
                    if(res.status != 'connected'){
                        FB.login(function(res){
                            $('#login_btn').text('登出');
                            userID = res.authResponse.userID;
                            register();
                            alert('登入成功');
                            $("#user_tag_link").attr('href',$("#user_tag_link").attr('href') + '/tag1?id=' + userID);
                            $("#suggest_user_activity_link").attr('href',$("#suggest_user_activity_link").attr('href') + '/like1?id=' + userID);
                        },{scope:'user_events,user_groups,user_activities,email'});
                    }else{
                        FB.logout();
                        alert('已登出');
                        $('#login_btn').text('登入');
                    }
                });
            })  
            $('#get_btn').click(function(e){
                alert('start load');
                $('#get_btn').attr('disabled',true);
                e.preventDefault();
                get_old_event('',0);
                
            })
            // $('#user_tag_link').click(function(e){
            //     e.preventDefault();
            //     $.get('{{url("tag1?id=")}}'+userID,function(data){
            //         $('#content').text('');
            //         $('#content').append(data);
            //     })
            // })
            // $('#suggest_user_activity_link').click(function(e){
            //     e.preventDefault();
            //     $.get('{{url("like1?id=")}}'+userID,function(data){
            //         $('#content').text('');
            //         $('#content').append(data);
            //     })
            // })
        });
        function register(){
            FB.api('/me',function(res){
                $.post('{{url("register")}}',{name:res.name,id:res.id,email:res.email},function(res){
                    alert(res);
                });
            });
        }
        function get_old_event(url,i){
            
            FB.getLoginStatus(function(res){
                if(res.status != 'connected'){
                    FB.login(function(){},{scope:'user_events,user_groups,user_activities, email'});
                }else{
                    if(url == ''){
                        url = '/me/events';
	                }
                    FB.api(url,{fields:'description,name'},function(res){
                        // alert('整理中，請勿重複點擊');
                        if(i <= 50 && typeof(res.paging) != "undefined"){
                            for(var event in res.data){
                                $.post('{{url("ckip")}}',{info:{name:res.data[event].name.replace(/[\ |\~|\`|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\-|\_|\+|\=|\||\\|\[|\]|\{|\}|\;|\:|\"|\'|\,|\<|\.|\>|\/|\?]/g,""),description:res.data[event].description.replace(/[\ |\~|\`|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\-|\_|\+|\=|\||\\|\[|\]|\{|\}|\;|\:|\"|\'|\,|\<|\.|\>|\/|\?]/g,"") }},function(res){
                                    $.post('{{url("addusertag")}}',{id:userID,tag:res},function(data){
                                        // console.log(data);
                                    })
                                })
                                i++;
                            }
                            get_old_event(res.paging.next,i);
                        }else{
                            alert('ok');
                        }
                    });
                }
            });
        }
        
    </script>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Activity Buzz</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">關於</a></li>
            
          </ul>
          <div class="nav navbar-nav pull-right">
              <li><a id="login_btn" class="btn">登入</a></li>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Activity Buzz</h1>
            <p>貼心幫你關注大小活動</p>
            <input type="button" class="btn btn-default btn-lg " id="get_btn" value="取得Tag">
        </div>
        <!-- <input type="button" id="login_btn" value="登入">
        <input type="button" id="logout_btn" value="登出"><br> -->
        
        <div class="btn-group">
            <a href='{{url()}}' target="_blank" class="btn btn-success btn-lg" id="user_tag_link">檢視用戶標籤</a>
            <a href='{{url()}}' target="_blank" class="btn btn-primary btn-lg" id="suggest_user_activity_link">檢視推薦貼文</a>
        </div>
        <div id="content">
            
        </div>
    </div>
    
</body>
</html>
