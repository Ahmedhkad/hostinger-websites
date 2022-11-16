<!DOCTYPE html>
<html lang="ru" dir="rtl">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.8" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.50" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1497475652" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1497475652" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="/gallery/logo perfect r_strip.png" type="image/png" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance188" class="wb_element wb-menu"><ul class="hmenu"><li><a href="%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%D9%86%D8%A7/" target="_self" title="خدماتنا">خدماتنا</a><ul><li><a href="%D8%AF%D8%B9%D9%88%D8%A7%D8%AA-%D8%A7%D9%84%D9%89-%D8%B1%D9%88%D8%B3%D9%8A%D8%A7/" target="_self" title="دعوات الى روسيا">دعوات الى روسيا</a></li><li><a href="%D8%AA%D8%AE%D9%84%D9%8A%D8%B5-%D8%A7%D9%84%D9%85%D8%B9%D8%A7%D9%85%D9%84%D8%A7%D8%AA/" target="_self" title="تخليص المعاملات">تخليص المعاملات</a></li><li><a href="%D8%AA%D8%B1%D8%AC%D9%85%D8%A9/" target="_self" title="ترجمة">ترجمة</a></li><li><a href="%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%82%D8%A8%D8%A7%D9%84/" target="_self" title="الاستقبال">الاستقبال</a></li></ul></li><li><a href="%D8%A7%D9%84%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B1%D9%88%D8%B3%D9%8A%D8%A9/" target="_self" title="اللغة الروسية">اللغة الروسية</a><ul><li><a href="%D8%A7%D9%84%D9%85%D8%B9%D9%87%D8%AF-%D8%A7%D9%84%D8%AA%D8%AD%D8%B6%D9%8A%D8%B1%D9%8A/" target="_self" title="المعهد التحضيري">المعهد التحضيري</a></li><li><a href="%D8%A7%D9%84%D9%84%D8%BA%D9%87-%D8%A7%D9%84%D8%B1%D9%88%D8%B3%D9%8A%D8%A9/" target="_self" title="اللغه الروسية">اللغه الروسية</a></li></ul></li><li><a href="%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D9%88%D8%AF%D9%8A%D9%88/" target="_self" title="الاستوديو">الاستوديو</a></li><li><a href="%D8%A7%D9%84%D8%AD%D9%8A%D8%A7%D8%A9-%D9%81%D9%8A-%D8%B1%D9%88%D8%B3%D9%8A%D8%A7/" target="_self" title="الحياة في روسيا">الحياة في روسيا</a></li><li><a href="%D8%A7%D8%AA%D8%B5%D9%84-%D8%A8%D9%86%D8%A7/" target="_self" title="اتصل بنا">اتصل بنا</a></li><li><a href="%D8%A7%D9%84%D9%82%D9%84%D9%85-%D8%A7%D9%84%D8%B1%D9%88%D8%B3%D9%8A/" target="_self" title="القلم الروسي">القلم الروسي</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance189" class="wb_element wb_element_picture"><a href="%D8%B4%D8%B1%D9%83%D8%A9-%D8%A7%D9%84%D9%82%D9%84%D9%85-%D8%A7%D9%84%D8%B1%D9%88%D8%B3%D9%8A/"><img alt="gallery/logo perfect r_strip" src="gallery_gen//40dd738b6ffdd383645bd5206425ecfc_110x110.png"></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance193" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance193");
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
					$("#wb_element_instance193").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 154px;">
	
<div id="wb_element_instance190" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://ruspen.16mb.com">ruspen.16mb.com</a></p>
</div><div id="wb_element_instance191" class="wb_element wb_element_picture"><img alt="gallery/google-plus" src="gallery_gen//2fcc24a3cc595af90a568b799056bc51_64x64.png"></div><div id="wb_element_instance192" class="wb_element wb_element_picture"><img alt="gallery/facebook" src="gallery_gen//13119d0d869fe3baa74d51fd00ef8fbf_64x64.png"></div><div id="wb_element_instance194" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(74);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
