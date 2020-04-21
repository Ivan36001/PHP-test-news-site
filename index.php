
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo 'Главная страница'?></title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	
	<?php

//FRONT CONTROLLER

//1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);


//2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT. '/components/Router.php');
include_once ROOT. '/components/Db.php';


//3. Вызов Router
$router = new Router();
$router->run();

?>

<p><a href='http://localhost/test/index.php/news/' class="permalink"><h1>Новости</h1></a></p>



</body>
</html>