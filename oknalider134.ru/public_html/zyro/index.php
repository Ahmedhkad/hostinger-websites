<?php
error_reporting(E_ALL); @ini_set('display_errors', true);
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => 'Главная', 'file' => '1.php'),
		'1'	=> array('id' => '4', 'alias' => 'Наши-Услуги', 'file' => '4.php'),
		'2'	=> array('id' => '2', 'alias' => 'Наши-преимущества', 'file' => '2.php'),
		'3'	=> array('id' => '5', 'alias' => 'Доставка-и-Оплата', 'file' => '5.php'),
		'4'	=> array('id' => '3', 'alias' => 'Контакты', 'file' => '3.php')
	);
	$forms = array(
		'3'	=> array(
			'9ec5999a' => Array( 'email' => 'oknalider-134@yandex.ru', 'emailFrom' => '', 'subject' => 'ОТ ВЕБ САЙТ ОкнаЛидер134', 'sentMessage' => 'Форма отправлена.', 'object' => '', 'objectRenderer' => '', 'loggingHandler' => '', 'smtpEnable' => false, 'smtpHost' => null, 'smtpPort' => null, 'smtpEncryption' => null, 'smtpUsername' => null, 'smtpPassword' => null, 'recSiteKey' => null, 'recSecretKey' => null, 'fields' => array( array( 'fidx' => '0', 'name' => 'Имя', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'Телефон', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Сообщение', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
	$langs = null;
	$def_lang = null;
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$user_domain = 'oknalider134.ru';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	list($page_id, $lang, $urlArgs, $route) = parse_uri();
	$user_key = "RqBdyjCqvk6/ZCcSmouf";
	$user_hash = "571046495b67e9bd";
	$comment_callback = "http://uk.zyro.com/ru-RU/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	$page = isset($pages[$page_id]) ? $pages[$page_id] : null;
	if ($page && $page['id'] == $home_page && $route) {
		header('Location: '.$base_url.(($lang && $lang != $def_lang) ? ($lang.'/') : ''), true, 301);
	}
	if (!is_null($page)) {
		handleComments($page['id']);
		if (isset($_POST["wb_form_id"])) handleForms($page['id']);
	}
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $lang => $default) {
					$pageUri = getPageUri($page['id'], $lang);
					$out = str_replace(urlencode('{{lang_'.$lang.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_file = dirname(__FILE__).'/ga_code') && $ga_code = file_get_contents($ga_file)) {
				$ga_out = str_replace('{{ga_code}}', $ga_code, file_get_contents(dirname(__FILE__).'/ga.html'));
			}
			$out = str_replace('{{ga_code}}', $ga_out, $out);
			$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || isset($_SERVER['HTTP_X_HTTPS']) && $_SERVER['HTTP_X_HTTPS'] == 'on') ? 'https' : 'http';
			$out = str_replace('{{base_url}}', $proto.'://'.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost').'/', $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>