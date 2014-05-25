<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://connect.facebook.net/en_US/sdk.js"></script>
    <script>
        window.fbAsyncInit = function(){
            FB.init({
                appId:'480583845406954',
                xfbml:true,
                version:'v2.0'
            })
        }
        userID = '';
        $(document).ready(function(){
            FB.getLoginStatus(function(res){
                if(res.status == 'connected'){
                    userID = res.authResponse.userID;
                }
            });

            $('#login_btn').click(function(e){
                e.preventDefault();
                FB.getLoginStatus(function(res){
                    if(res.status != 'connected'){
                        FB.login(function(){},{scope:'user_events,user_groups,user_activities'});
                    }else{
                        userID = res.authResponse.userID;
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
        function get_old_event(url,i){
            
            FB.getLoginStatus(function(res){
                if(res.status != 'connected'){
                    FB.login(function(){},{scope:'user_events,user_groups,user_activities'});
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
    <a id="login_btn">LOGIN</a><br>
    <a id="get_btn">GET</a><br>
    <a id="load_btn">Load Activity</a><br>
    <div id="content">
        
    </div>
</body>
</html>