<?php
include $_SERVER['DOCUMENT_ROOT'] . '/common/page/top.php';
include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/pageCheck.php';

//  2019-03-25 star 현재 임시로 페이지별 token고정
if(!$_SESSION['token'][$Common->nowPage()]){
	$_SESSION['token'][$Common->nowPage()]       =	base64_encode(openssl_random_pseudo_bytes(32));
}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		  content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>공기청정기</title>
	<link rel="shortcut icon" type="image/png" href="/app/common/img/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="/app/common/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/app/common/css/testFile_ui.css">
	<link rel="stylesheet" type="text/css" href="/app/common/css/testFile_style.css">
	<link rel="stylesheet" type="text/css" href="/app/common/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="/app/common/css/daterangepicker.css">

	<script src="/app/common/js/moment.js"></script>
	<script src="/app/common/js/jquery-3.1.1.min.js"></script>
	<script src="/app/common/js/jquery-ui-1.12.1.js"></script>
	<script src="/app/common/js/daterangepicker.js"></script>
	<script src="/app/common/js/ui.js"></script>
	<script src="/app/common/js/include.js"></script>
	<script src="/common/js/common.js"></script>
</head>
