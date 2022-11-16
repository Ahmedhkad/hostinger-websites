<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="Пластиковые окна и двери.от эконом до элитного класса" />
	<meta name="keywords" content="Blog" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.40" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1487258235" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1487258235" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="/gallery/fav-ts1486880315.png" type="image/png" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance176" class="wb_element"><ul class="hmenu"><li><a href="%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F/" target="_self" title="Главная">Главная</a></li><li><a href="%D0%9D%D0%B0%D1%88%D0%B8-%D0%A3%D1%81%D0%BB%D1%83%D0%B3%D0%B8/" target="_self" title="Наши Услуги">Наши Услуги</a></li><li><a href="%D0%9D%D0%B0%D1%88%D0%B8-%D0%BF%D1%80%D0%B5%D0%B8%D0%BC%D1%83%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B0/" target="_self" title="Наши преимущества">Наши преимущества</a></li><li><a href="%D0%94%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0-%D0%B8-%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0/" target="_self" title="Доставка и Оплата">Доставка и Оплата</a></li><li><a href="%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D1%8B/" target="_self" title="Контакты">Контакты</a></li></ul></div><div id="wb_element_instance178" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle"><span style="color:#292829;"><strong>Окна Лидер</strong></span></h5>
</div><div id="wb_element_instance179" class="wb_element" style=" line-height: normal;"><p style="text-align: center;"><span style="color:#ffffff;"><span class="wb-stl-special">г. Волгоград, ул. Генерала Штеменко, д.34</span></span></p>

<p style="text-align: center;"><span style="color:#ffffff;"><span class="wb-stl-special">(8442) 51 74 24</span></span></p>
</div><div id="wb_element_instance180" class="wb_element"><div></div></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance183" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance183");
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
					$("#wb_element_instance183").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 150px;">
	
<div id="wb_element_instance177" class="wb_element"><ul class="hmenu"><li><a href="%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F/" target="_self" title="Главная">Главная</a></li><li><a href="%D0%9D%D0%B0%D1%88%D0%B8-%D0%A3%D1%81%D0%BB%D1%83%D0%B3%D0%B8/" target="_self" title="Наши Услуги">Наши Услуги</a></li><li><a href="%D0%9D%D0%B0%D1%88%D0%B8-%D0%BF%D1%80%D0%B5%D0%B8%D0%BC%D1%83%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B0/" target="_self" title="Наши преимущества">Наши преимущества</a></li><li><a href="%D0%94%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0-%D0%B8-%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0/" target="_self" title="Доставка и Оплата">Доставка и Оплата</a></li><li><a href="%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D1%8B/" target="_self" title="Контакты">Контакты</a></li></ul></div><div id="wb_element_instance181" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;">Окна Лидер © 2017</span></p>
</div><div id="wb_element_instance182" class="wb_element"><div></div></div><div id="wb_element_instance184" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(70);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
