<!DOCTYPE HTML>

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">

	<title>Activity Buzz</title>
@yield('style')



@section('script')
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>

	<script src="{{ asset('js/jquery.isotope.min.js') }}" type="text/javascript"></script>

	<script type="text/javascript" src="{{ asset('js/sorting.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/jquery.jcarousel.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/js.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>	
@show
	<!--[if lt IE 9]>

		<script src="js/html5shiv.js"></script>

		<script src="js/respond.src.js"></script>

	<![endif]-->

	

	<script type="text/javascript">

		$(document).ready(function(){	

			$("#ajax-contact-form").submit(function() {

				var str = $(this).serialize();		

				$.ajax({

					type: "POST",

					url: "contact_form/contact_process.php",

					data: str,

					success: function(msg) {

						// Message Sent - Show the 'Thank You' message and hide the form

						if(msg == 'OK') {

							result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';

							$("#fields").hide();

						} else {

							result = msg;

						}

						$('#note').html(result);

					}

				});

				return false;

			});

		});		

	</script>

	

</head>



<body>



<div class="menu">	

	<div class="container clearfix">



		<div id="logo" class="fleft">

			<a href="#"><img src="images/LOGO.png"></a>

		</div>

		

		<div id="nav" class="fright">

			<ul class="navigation">

				<li data-slide="1">Home</li>

				<li data-slide="2">About</li>

				<li data-slide="3">Feature</li>

				<li data-slide="4">Activity</li>

				<li data-slide="6">Team</li>

				<li data-slide="10">Contact</li>

			</ul>

		</div>

	

	</div>

</div>


@section('main')
<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">

	<div class="effect_2 padding_slide1">

		<div class="container clearfix">

			<div id="content" class="grid_12">

				<h1>Activity <span>Buzz</span></h1>

				<h2>Slogan</h2>

				<a class="button first_btn" title="" data-slide="2"></a>

				

				<div id="portf_btn">

					<a class="button second_btn" title="" data-slide="4">Search Activitys</a>

				</div>

			</div>

		</div>

	</div>

</div>







<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">

	<div class="container clearfix">

		

		<div id="content" class="grid_12">

			<h3><span>About</span></h3>

			<h4></h4>

		</div>

		<div id="content" class="grid_7">
	afasdfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
		</div>
		<div id="content" class="grid_5 omega">

		</div>

		<div class="clear"></div>

	</div>	

</div>





<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		
		<div id="content" class="grid_12">
			<h3><span>Feature</span></h3>
			<h4></h4>
		</div>
		<div class="clear"></div>
		<div class="grid_6">
			<a href="#" class="serv_inf">
				<img class="serv_icon" src="images/icon1.png" />
				<img class="serv_icon_h" src="images/icon1_h.png" />
				<p>主動蒐集各大活動</p>
				
				<div class="clear"></div>
			</a>
		</div>
		<div class="grid_6 omega">
			<a href="#" class="serv_inf">
				<img class="serv_icon" src="images/icon2.png" />
				<img class="serv_icon_h" src="images/icon2_h.png" />
				<p>客製化興趣推薦清單</p>
				
				<div class="clear"></div>
			</a>
		</div>
		<div class="grid_6">
			<a href="#" class="serv_inf">
				<img class="serv_icon" src="images/icon3.png" />
				<img class="serv_icon_h" src="images/icon3_h.png" />
				<p>同步匯入行事曆</p>
				
				<div class="clear"></div>
			</a>
		</div>
		<div class="grid_6 omega">
			<a href="#" class="serv_inf">
				<img class="serv_icon" src="images/icon4.png" />
				<img class="serv_icon_h" src="images/icon4_h.png" />
				<p>活動提醒服務</p>
				
				<div class="clear"></div>
			</a>
		</div>
		<div class="clear"></div>
	
	</div>
</div>





<!-- <div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">

	<div class="effect_2 padding_slide3">

		<div class="container clearfix">

		

			<div id="content" class="grid_12">

				<p>Integer ut lacus nec mauris</p>

				<img class="icon_bg" src="images/icon10.png" />

				<span>Nullam vel tellus id diam accumsan congue ut non elit.</span>

				<span>Cras massa ligula, tempor sed eleifend eget, rutrum quis nulla. Class aptent taciti sociosqu ad litora</span>

			</div>

		

		</div>

	</div>

</div> -->




<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		
		<div id="content" class="grid_12">
			<h3><span>Activity</span></h3>
			<h4>Cras urna leo, fringilla nec aliquam ac, varius in enim. Maecenas non felis augue, quis sagittis justo. Donec gravida, arcu in aliquet convallis, purus lectus euismod nulla, in porttitor lorem ligula nec metus. Curabitur sit amet metus quis arcu pharetra hendrerit. Nulla at tempus</h4>
		</div>
		<div class="clear"></div>
		<div id="contenet">
			<div id="options">
				<ul id="filters" class="option-set" data-option-key="filter">
					<li><a href="#filter" data-option-value="*" class="btn dark_btn selected">All</a></li>
					<li><a href="#filter" data-option-value=".category01">生活休閒</a></li>
					<li><a href="#filter" data-option-value=".category02">課程講座</a></li>
					<li><a href="#filter" data-option-value=".category03">主題聚會</a></li>
					<li><a href="#filter" data-option-value=".category04">影視娛樂</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="overflow_hidden">
				<div class="gallery-list">
					<!-- portfolio_block -->
					<div class="projects">                                  
						<div class="grid_3 element category01" data-category="category01">
							<div class="hover_img">
								<img src="images/portfolio/a1.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/a1.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>裏千家茶道體驗</h6>
								
							</div>
						</div>
						<div class="grid_3 element category02" data-category="category02">
							<div class="hover_img">
								<img src="images/portfolio/b1.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/b1.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>新營頌舊歷史工作坊</h6>
								
							</div>
						</div>
						<div class="grid_3 element category03" data-category="category03">
							<div class="hover_img">
								<img src="images/portfolio/c1.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/c1.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>翻轉小聚</h6>
								
							</div>
						</div>
						<div class="grid_3 element category04" data-category="category04">
							<div class="hover_img">
								<img src="images/portfolio/d1.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/d1.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>交換吧！你的語言我的文化</h6>
								
							</div>
						</div>
						<div class="grid_3 element category01" data-category="category01">
							<div class="hover_img">
								<img src="images/portfolio/a2.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/a2.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>童趣鋼珠迷宮工作坊</h6>
								
							</div>
						</div>
						<div class="grid_3 element category02" data-category="category02">
							<div class="hover_img">
								<img src="images/portfolio/b2.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/b2.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>提升企劃力與溝通力</h6>
								
							</div>
						</div>
						<div class="grid_3 element category03" data-category="category03">
							<div class="hover_img">
								<img src="images/portfolio/c2.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/c2.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>數位藝術創客小聚</h6>
								
							</div>
						</div>
						<div class="grid_3 element category04" data-category="category04">
							<div class="hover_img">
								<img src="images/portfolio/d2.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/d2.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>日本實木烙畫 - 奇幻創作展</h6>
								
							</div>
						</div>
						<div class="grid_3 element category01" data-category="category01">
							<div class="hover_img">
								<img src="images/portfolio/a3.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/a3.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>密室遊戲-解救犄角村</h6>
								
							</div>
						</div>
						<div class="grid_3 element category02" data-category="category02">
							<div class="hover_img">
								<img src="images/portfolio/b3.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/b3.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>DIY雷達工作坊</h6>
								
							</div>
						</div>
						<div class="grid_3 element category03" data-category="category03">
							<div class="hover_img">
								<img src="images/portfolio/c3.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/c3.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>跳離舒適圈的勇氣</h6>
								
							</div>
						</div>
						<div class="grid_3 element category04" data-category="category04">
							<div class="hover_img">
								<img src="images/portfolio/d3.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/d3.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>經典文學饗宴</h6>
								
							</div>
						</div>

						<div class="grid_3 element category02" data-category="category02">
							<div class="hover_img">
								<img src="images/portfolio/b4.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/b4.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>RAScool關係藝術講座</h6>
								
							</div>
						</div>
						<div class="grid_3 element category03" data-category="category03">
							<div class="hover_img">
								<img src="images/portfolio/c4.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/c4.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>品牌聊天室</h6>
								
							</div>
						</div>
						<div class="grid_3 element category04" data-category="category04">
							<div class="hover_img">
								<img src="images/portfolio/d4.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/d4.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>《戀夏進行式》映後分享會</h6>
								
							</div>
						</div>

						<div class="grid_3 element category02" data-category="category02">
							<div class="hover_img">
								<img src="images/portfolio/b5.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/b5.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>Power of Place</h6>
								
							</div>
						</div>
						<div class="grid_3 element category03" data-category="category03">
							<div class="hover_img">
								<img src="images/portfolio/c5.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/c5.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>台大交點</h6>
								
							</div>
						</div>

						<div class="grid_3 element category02" data-category="category02">
							<div class="hover_img">
								<img src="images/portfolio/b6.jpg" alt="" />
								<span class="portfolio_zoom"><a href="images/portfolio/full/b6.jpg" rel="prettyPhoto[portfolio1]"></a></span>
								<span class="portfolio_link"><a href="#">View item</a></span>
							</div> 
							<div class="item_description">
								<h6>品旅遊 – 擁有目標去旅行</h6>
								
							</div>
						</div>
						<div class="clear"></div>
					</div>   
					<!-- //portfolio_block -->   
				</div>
			</div>
		</div>
	
	</div>
</div>



<!-- <div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">

	<div class="effect_2 padding_slide5">

		<div class="container clearfix">

		

			<div id="content" class="grid_12">

				<p>Nullam vel tellus id diam</p>

				<img class="icon_bg" src="images/icon11.png" />

				<span>Nullam vel tellus id diam accumsan congue ut non elit.</span>

				<span>Cras massa ligula, tempor sed eleifend eget, rutrum quis nulla. Class aptent taciti sociosqu ad litora</span>

			</div>

		

		</div>

	</div>

</div> -->





<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">

	<div class="container clearfix">



		<div id="content" class="grid_12">

			<h3><span>Team</span></h3>

			<h4></h4>

		</div>

		<!-- team -->

	<!-- 	<div id="content" class="grid_12">

			<h5><span>meet the team</span></h5>

		</div> -->

		<div class="clear"></div>

		<div class="grid_3 team_block">

			<a href="#"><img src="images/team1.png"></a>

			<div class="team_inf">

				<h4>Poseidon</h4>

				<p>Web Developer</p>

				

				<ul class="team_soc">

					<li><a href="#" class="soc1"></a></li>

					<li><a href="#" class="soc2"></a></li>

					<li><a href="#" class="soc3"></a></li>

					<li><a href="#" class="soc4"></a></li>

				</ul>

			</div>

		</div>

		<div class="grid_3 team_block">

			<a href="#"><img src="images/team2.png"></a>

			<div class="team_inf">

				<h4>Linroex</h4>

				<p>Web Developer</p>

				

				<ul class="team_soc">

					<li><a href="#" class="soc1"></a></li>

					<li><a href="#" class="soc2"></a></li>

					<li><a href="#" class="soc3"></a></li>

					<li><a href="#" class="soc4"></a></li>

				</ul>

			</div>

		</div>

		<div class="grid_3 team_block">

			<a href="#"><img src="images/team3.png"></a>

			<div class="team_inf">

				<h4>Wei-Jie</h4>

				<p>Web Developer</p>

				

				<ul class="team_soc">

					<li><a href="#" class="soc1"></a></li>

					<li><a href="#" class="soc2"></a></li>

					<li><a href="#" class="soc3"></a></li>

					<li><a href="#" class="soc4"></a></li>

				</ul>

			</div>

		</div>

		<div class="grid_3 team_block omega">

			<a href="#"><img src="images/team4.png"></a>

			<div class="team_inf">

				<h4>Jason</h4>

				<p>Web Designer</p>

				

				<ul class="team_soc">

					<li><a href="#" class="soc1"></a></li>

					<li><a href="#" class="soc2"></a></li>

					<li><a href="#" class="soc3"></a></li>

					<li><a href="#" class="soc4"></a></li>

				</ul>

			</div>

		</div>

		<div class="clear"></div>

	</div>

</div>







<!-- <div class="slide" id="slide7" data-slide="7" data-stellar-background-ratio="0.5">

	<div class="effect_2 padding_slide7">

		<div class="container clearfix">

		

			<div id="content" class="grid_12">

				<p>interdum mauris non metus</p>

				<img class="icon_bg" src="images/icon12.png" />

				<span>Duis et sem nisl. Etiam interdum mauris non metus pulvinar tincidunt. Quisque tristique diam sit amet</span>

				<span>sapien laoreet scelerisque. Etiam a justo elit, non fringilla justo.</span>

			</div>

		

		</div>

	</div>

</div> -->







<div class="slide" id="slide10" data-slide="10" data-stellar-background-ratio="0.5">

	<div class="container clearfix">

		

		<div id="content" class="grid_12">

			<h3><span>Contact</span></h3>

			<h4></h4>

		</div>

		<div class="clear"></div>

		<div id="contact_block_rel">

			<div class="grid_5">

				<div class="contact_form">  

					<div id="note"></div>

					<div id="fields">

						<form id="ajax-contact-form" action="">

							<input type="text" name="name" value="" placeholder="Name" />

							<input type="text" name="subject" value="" placeholder="Phone" />

							<input type="text" name="email" value="" placeholder="Email" />

							<textarea name="message" id="message" placeholder="Message"></textarea>

							<div class="clear"></div>

							<input type="reset" class="contact_btn" value="Clear form" />

							<input type="submit" class="contact_btn" value="Send" />

							<div class="clear"></div>

						</form>

					</div>

				</div>

			</div>

			<div class="grid_4 contact_det_block">

				<h5>contact details</h5>

				<p>Please feel free to contact us if you have any question or anything that we could help for. For any inconvenience or aweful user experiecne about this website, please let us know in order to improve it as well.<br>Sincerely yours,</p>

				<ul class="foot_block_intouch">

					<li class="touch_phone"><p>(+886) 2 2363 8990</p></li>

					<li class="touch_clock"><p>Mon - Fri 9:00am - 6:00 pm</p></li>

					<li class="touch_mail"><a href="mailto:activitybuzz@gmail.com">activitybuzz@gmail.com</a></li>

					<li class="touch_site"><a href="#">www.activitybuzz.com</a></li>

					<li class="touch_adress"><p>NTU CSIE Building</p></li>

				</ul>

			</div>

			<div class="clear"></div>

		</div>

	</div>

	

	<div id="map_block"><iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28923.789427486336!2d121.53858601996497!3d25.01799421930856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x21750404ee1d7f66!2z6Ie654Gj5aSn5a24!5e0!3m2!1szh-TW!2s!4v1396103169053" width="600" height="450" frameborder="0" style="border:0">></iframe></div>

	

</div>

@show



<div id="footer">

	<div class="container clearfix">

		<div class="copyright">Activity Buzz &copy; 2014 | <a href="#"></a></div>

		<div id="back_top"><a class="button" title="" data-slide="1">back to top</a></div>

	</div>

</div>





</body>

</html>
