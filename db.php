<?php
	define('MYSQL_SERVER', 'angio-ds.ru');
	define('MYSQL_USER', 'vitas84');
	define('MYSQL_PASSWORD', '');
	define('MYSQL_DB', 'a0092728_operJ');

	function db_connect()	{
		$link = mysql_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
			or die ("Error".mysql_error($link));
		if (!mysql_set_charset($link, "utf8")) {
			printf("Error".mysql_error($link));
		}
	return $link;
	}
?>