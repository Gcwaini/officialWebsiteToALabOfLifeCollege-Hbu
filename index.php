<!DOCTYPE HTML>
<html>
<head>
<title>�ӱ���ѧ</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
			    <script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
						});
					});
				</script>
<!---- start-smoth-scrolling---->
 <!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'/>
<!----//webfonts---->
					 <!-- Prettify -->
						<link href="css/owl.carousel.css" rel="stylesheet">
					    <script src="js/owl.carousel.js"></script>
					    <script>
						    $(document).ready(function() {
						      $("#owl-demo , #owl-demo1").owlCarousel({
						        items : 1,
						        lazyLoad : true,
						        autoPlay : true,
						      });
						    });
					    </script>
					    <script>
						    $(document).ready(function() {
						      $("#owl-demo3").owlCarousel({
						        items : 4,
						        lazyLoad : true,
						        autoPlay : true,
						        navigation: false,
						        pagination: false,
						      });
						    });
					    </script>
					<!----- //End-Share-instantly-slider---->
             
				<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
</head>
<body>
    <div class="header">
     <div class="container">
		 <div class="logo">
			<a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""/></a>
		 </div>
		             <nav class="top-nav">
						<ul class="top-nav">
							<li class="active"><a href="index.php">��ҳ <span> </span></a></li>
							<li class="page-scroll"><a href="speciesSearch.php">���ּ���<span> </span></a></li>
							<li class="page-scroll"><a href="classificationIdentify.php">�������<span> </span></a></li>
							<li class="page-scroll"><a href="fileDownload.php">�ļ����� <span> </span></a></li>
							<li class="page-scroll"><a href="message.php">���԰�<span> </span></a></li>
							<li class="page-scroll"><a href="about.php">��������<span> </span></a></li>
						</ul>
						<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
					</nav>			
	                <div class="clearfix"></div>
	  </div>
   </div>
   <div class="slider" id="home">
  	<div class="slider_container">
  		<div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						    <h1>�ֲ�ͼ1</h1>
							<p class="top">�ֲ�ͼ1���</p>
						 </div>
					   	 <div class="slider-right">
							 <img src="images/one.jpg" alt=""/> 
						 </div>
						 <div class="clearfix"> </div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
                             <h1>�ֲ�ͼ2</h1>
                             <p class="top">�ֲ�ͼ2���</p>
						 </div>
					   	 <div class="slider-right">
							 <img src="images/one.jpg" alt=""/> 
						 </div>
						 <div class="clearfix"> </div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
                             <h1>�ֲ�ͼ3</h1>
                             <p class="top">�ֲ�ͼ3���</p>
						 </div>
					   	 <div class="slider-right">
							 <img src="images/one.jpg" alt=""/> 
						 </div>
						 <div class="clearfix"> </div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		 <div class="slider-left">
                             <h1>�ֲ�ͼ4</h1>
                             <p class="top">�ֲ�ͼ4���</p>
						 </div>
					   	 <div class="slider-right">
							 <img src="images/one.jpg" alt=""/> 
						 </div>
						 <div class="clearfix"> </div>
					 </div>
				   </article>
				</div>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="">2</a></li>
                	<li><a href="#">3</a></li>
               </ul>
              </div>
            	 <script src="js/jquery.wmuSlider.js"></script> 
				       <script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
           </div>
      </div>
      <div class="main">
      	<div class="content-top" id="fea">
      		<div class="container">
                <div class="row feature">
      				<h3 class="m_4">ʵ���Ҽ��</h3>
      				<div class="col-md-8 feature_top">
      					<h3>���1</h3>
      					<p>��ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ�����ϸ���</p>
      				</div>
      				<div class="col-md-4 feature_img">
      					<img src="images/world.png" class="img-responsive" alt=""/>
      				</div>
      			</div>
      		</div>
      	</div>
      	<!----- start-gallery----->
		<div id="screen" class="work">
			<div class="container">
				<h2 class="m_1">ʵ���ҳɹ�չʾ�������</h2>
      			<p class="m_2">��ϸ������ϸ������ϸ������ϸ������ϸ������ϸ������ϸ����<br>��ϸ������ϸ������ϸ������ϸ������ϸ������ϸ������ϸ����</p>
			</div>
			       <div id="owl-demo3" class="owl-carousel owl-carousel2">
				                <div class="item">
				                	<img class="lazyOwl" data-src="images/s1.jpg" alt="Lazy Owl Image">
				                	<p class="img_slider"><span class="g-title">ͼƬ��Ŀ</span><br><span class="g-title1">ͼƬ����</span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="images/s2.jpg" alt="Lazy Owl Image">
				                	<p class="img_slider"><span class="g-title">ͼƬ��Ŀ </span><br><span class="g-title1">ͼƬ����</span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="images/s3.jpg" alt="Lazy Owl Image">
				                	<p class="img_slider"><span class="g-title">ͼƬ��Ŀ</span><br><span class="g-title1">ͼƬ����</span></span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="images/s4.jpg" alt="Lazy Owl Image">
				                	<p class="img_slider"><span class="g-title">ͼƬ��Ŀ</span><br><span class="g-title1">ͼƬ����</span></p>
				                </div>
				                
				                 <div class="item">
				                	<img class="lazyOwl" data-src="images/s5.jpg" alt="Lazy Owl Image">
				                	<p class="img_slider"><span class="g-title">ͼƬ��Ŀ</span><br><span class="g-title1">ͼƬ����</span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="images/s6.jpg" alt="Lazy Owl Image">
				                	<p class="img_slider"><span class="g-title">ͼƬ��Ŀ</span><br><span class="g-title1">ͼƬ����</span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="images/s1.jpg" alt="Lazy Owl Image">
				                	<p class="img_slider"><span class="g-title">ͼƬ��Ŀ</span><br><span class="g-title1">ͼƬ����</span></p>
				                	<div class="clearfix"> </div>
				                </div>
				                <div class="item">
				                	<img class="lazyOwl" data-src="images/s2.jpg" alt="Lazy Owl Image">
				                	<p class="img_slider"><span class="g-title">ͼƬ��Ŀ</span><br><span class="g-title1">ͼƬ����</span></p>
				                	<div class="clearfix"> </div>
				                </div>
				                <div class="clearfix"> </div>
			</div>
		</div>
	   </div>
	   <div class="footer" id="contact">
	   	<div class="container">
	   		<div class="footer_bottom">
		   		<div class="copy">
			        <p>Copyright &copy; 2018. All rights reserved. �ɺӱ���ѧ����ռ䰲ȫ������ѧԺ�ۺӹ������ṩ����֧��</p>
			    </div>
		       <div class="clearfix"> </div>
		    </div>
		    <script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
		    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">top </span></a>
	   	</div>
	   </div>

</body>
</html>