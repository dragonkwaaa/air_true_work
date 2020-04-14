<footer>
	<div class="footerMenu">
		<a href="javascript:void(0)" class="<?php echo($footer == "search") ? 'on' : '';?>">
			<i class="icon home"></i>
			<div class="text">홈</div>
		</a>
	</div>
	<div class="footerMenu">
		<a href="javascript:void(0)" class="<?php echo($footer == "search") ? 'on' : '';?>">
			<i class="icon search"></i>
			<div class="text">검색</div>
		</a>
	</div>
	<div class="footerMenu">
		<a href="javascript:void(0)" class="<?php echo($footer == "favorite") ? 'on' : '';?>">
			<i class="icon favorite"></i>
			<div class="text">즐겨찾기</div>
		</a>
	</div>
	<div class="footerMenu">
		<a href="javascript:hamburgerMenu()">
			<i class="icon menu"></i>
			<div class="text">메뉴</div>
		</a>
	</div>
</footer>


<div class="hamburgerWrap footerHamburger">
	<div class="hamburgerGroup">
		<div class="hamburgerHeader">
			<h1 class="logo">
				<i class="imgLogo"></i>
			</h1>
			<a href="javascript:closeHamburger()" class="closeBtn">
				<i class="ic ic_close"></i>
			</a>
		</div>
		<div class="hamburgerList">
			<div class="hamburgerBox">
				<div class="hambergerTitle">
					<a href="javascript:void(0)">시설물 목록</a>
				</div>
			</div>
			<div class="hamburgerBox">
				<div class="hambergerTitle">
					<a href="javascript:void(0)">즐겨찾기</a>
				</div>
			</div>
			<div class="hamburgerBox">
				<div class="hambergerTitle">
					<a href="javascript:void(0)">필터교환 알림</a>
				</div>
			</div>
			<div class="hamburgerBox">
				<div class="hambergerTitle">
					<a href="javascript:void(0)">작업이력</a>
				</div>
			</div>
			<div class="hamburgerBox">
				<div class="hambergerTitle">
					<a href="javascript:void(0)">로그아웃</a>
				</div>
			</div>
		</div>
		<div class="adminMark adminConfirmed border_purple f_purple">
			관리자 모드
		</div>
		<div class="csCallBox">
		<a href="javascript:callNumber('1644-1224')" class="csCallLink">
			<img class="csCallIcon" src="/app/common/img/icon_csCall_alt2.png">
			<span class="csCallNumber">1644-1224</span>
		</a>
		<div class="csCallInfo">
			<div class="csTime">
				<pre>
	업무시간 - 09:00 ~ 18:00 (점심시간 12:00~13:00)
	휴무 - 토요일, 일요일, 공휴일
				</pre>
			</div>
		</div>
	</div>
</div>

<script>
function hamburgerMenu() {

	let menuWrap	=	$('.hamburgerWrap');
	let content		=	$('.content');

	if(menuWrap.is(":visible")){
		menuWrap.hide("slide", {direction:"down"}, 400);

		$('.icon.menu').parents('a').removeClass('on');
	}else{
		content.addClass('overlayPopup');
		menuWrap.show("slide", {direction:"down"}, 400);

		$('.icon.menu').parents('a').addClass('on');
	}
}
function closeHamburger(){
	$('.hamburgerWrap').hide("slide", {direction:"down"}, 400);
	$('.contents').removeClass('overlay');
	$('.icon.menu').parents('a').removeClass('on');
}	
</script>
