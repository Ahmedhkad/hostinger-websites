<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Blog" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.8" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.51" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1500399135" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1500399135" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="/gallery/logo.png" type="image/png" /><meta name="google-site-verification" content="" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance113" class="wb_element wb-menu"><ul class="hmenu"><li><a href="%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F/" target="_self" title="Главная">Главная</a></li><li><a href="%D0%9E-%D0%BD%D0%B0%D1%81/" target="_self" title="О нас">О нас</a></li><li><a href="price/" target="_self" title="Цены">Цены</a></li><li><a href="%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D1%8B/" target="_self" title="Контакты">Контакты</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance114" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><span style="color:#ffffff;">Ahmed34</span></h4>
</div><div id="wb_element_instance115" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle"><font color="#ffffff">Websites designer</font></h5>
</div><div id="wb_element_instance116" class="wb_element wb_element_picture"><a href="http://vk.com/ahkad" target="1"><img alt="gallery/vk-icon" src="gallery_gen//6dfbfe7f6e983cf9077779b0fd777db3_32x32.png"></a></div><div id="wb_element_instance117" class="wb_element wb_element_picture"><a href="http://facebook.com/ahkad" target="1"><img alt="gallery/logo_face" src="gallery_gen//ac7cbdfa7c9e4e52c0c7c519f9f4fc10_32x32.png"></a></div><div id="wb_element_instance118" class="wb_element wb_element_picture"><img alt="gallery/logo" src="gallery_gen//12e32855d16834a0a292658f5d28c77c_130x180.png"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance120" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance120");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance120").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 134px;">
	
<div id="wb_element_instance119" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://ahmed34.com">ahmed34.com</a></p>

<p class="wb-stl-footer"><em>АлОмаири Ахмед</em></p>
</div><div id="wb_element_instance121" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
