<?php
if (!defined('IN_SERVER')) { exit; }

// проверяем регистрацию
if(!$authorized)
{
  // если не авторизован - отправляем на стартовую страницу кабинета, где можно авторизоваться
	header("Location: /");
	exit();
} 


?>