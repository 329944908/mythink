<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>添加Ad</h1>
	<form  action="/Admin/Ad/doAdd" method="post" enctype="multipart/form-data">
		title: <input type="text" name="title" value="">
		<br>
		url: <input type="text" name="url" value="">
		<br>	
		图片： <input type="file" name="image"></br>
		<br>	
		<input type="submit" name="">
	</form>
</body>
</html>