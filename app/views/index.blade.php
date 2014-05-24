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
        $(document).ready(function(){

            $('#login_btn').click(function(e){
                e.preventDefault();
                FB.getLoginStatus(function(res){
                    if(res.status != 'connected'){
                        FB.login(function(){},{scope:'user_events,user_groups,user_activities'});
                    }
                });
            })  
            $('#get_btn').click(function(e){
                e.preventDefault();
                get_old_event('','',0);
            })
        });
        function get_old_event(str,url,i){
            
            FB.getLoginStatus(function(res){
                if(res.status != 'connected'){
                    FB.login(function(){},{scope:'user_events,user_groups,user_activities'});
                }else{
                    if(url == ''){
                        url = '/me/events';
                    }
                    FB.api(url,{fields:'description,name'},function(res){
                        
                        if(i <= 10 && typeof(res.paging) != "undefined"){
                            for(var event in res.data){
                                str += res.data[event].name + res.data[event].description;
                                i++;
                                
                            }
                            get_old_event(str,res.paging.next,i);
                        }else{
                            str = str.replace(/\n/g,'').replace(/ /g,'').replace('================','');
                            // str = str.replace(/ /g,"").replace(/、/g,"").replace(/\n/g,"").replace(/。/g,"").replace(/，/g,",").replace(/：/g,"").split(',');
                            $.post('{{url("ckip")}}',{str:str},function(res){
                                $('#content').append(res + '<br/>');
                            })
                            console.log(str);
                            console.log(str.length);
                            console.log(i);
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
    <div id="content">
        
    </div>
</body>
</html>