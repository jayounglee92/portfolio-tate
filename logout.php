<?php
	
	header("content-type:text/html; charset=utf-8");

	# 01) 세션시작하기
	session_start();

	# 02) 세션값 삭제하기
	session_unset();

	# 03) 세션값 파기하기
	session_destroy();

	echo "<script> alert('log out');</script>";
	echo "<meta http-equiv='Refresh' content='1; url=login.php'/>";
?>