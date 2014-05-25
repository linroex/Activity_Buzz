<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://connect.facebook.net/en_US/sdk.js"></script>
    <script>
        userID = '';
        window.fbAsyncInit = function(){
            FB.init({
                appId:'480583845406954',
                xfbml:true,
                version:'v2.0'
            });
            FB.getLoginStatus(function(res){
                if(res.status == 'connected'){
                    userID = res.authResponse.userID;
            
                }
            });
        }
        
        $(document).ready(function(){
            $('#login_btn').click(function(e){
                FB.getLoginStatus(function(res){
                    if(res.status != 'connected'){
                        FB.login(function(res){
                            userID = res.authResponse.userID;
                            register();
                            alert('登入成功')
                        },{scope:'user_events,user_groups,user_activities,email'});
                    }else{
                        userID = res.authResponse.userID;
                        console.log('Current Login');
                    }
                });
            })  
            $('#get_btn').click(function(e){
                e.preventDefault();
                get_old_event('',0);
            })
            $('#load_btn').click(function(e){
                e.preventDefault();
                $.post('{{url("like")}}',{id:userID},function(data){
                    $('#content').append(data);
                })
            })
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
                        
                        if(i <= 30 && typeof(res.paging) != "undefined"){
                            for(var event in res.data){
                                $.post('{{url("ckip")}}',{info:{name:res.data[event].name,description:res.data[event].description}},function(res){
                                    $.post('{{url("addusertag")}}',{id:userID,tag:res},function(data){
                                        // console.log(data);
                                    })
                                })
                                i++;
                            }
                            get_old_event(res.paging.next,i);
                        }else{
                            
                        }
                    });
                }
            });
        }
        
    </script>
</head>
<body>
    <input type="button" id="login_btn" value="登入">
    <input type="button" id="get_btn" value="取得Tag">
    <a href='{{url()}}' id="user_tag_link">檢視用戶標籤</a>
    <a href='{{url()}}' id="suggest_user_activity_link">檢視推薦貼文</a>
</body>
</html>
