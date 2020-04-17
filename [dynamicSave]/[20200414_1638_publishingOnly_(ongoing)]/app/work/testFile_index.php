<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 

?>
<div class="container monoBG">
	<header>
		<a href="javascript:history.back()" class="backBtn">
			<i class="ic ic_back_alt"></i>
		</a>
		<h1 class="logo">성산중학교 1학년 1반</h1>
	</header>
	<div class="contents">
		<section class="work">
			<div class="titleBox">
				<div class="titleLeft">작업이력</div>
				<div class="titleRight">
					<a href="javascript:void(0)" class="calendarBtn">
						<i></i>
					</a>	
				</div>	
			</div>
			<div class="historyList">
				<a href="/app/work/workInfo" class="historyBox">
					<div class="historyInfo">
						<div class="title f_purple">공기 순환기 소음 측정 동영상</div>
						<div class="className">성산중학교 1학년 1반</div>
					</div>
					<div class="historyInfo">
						<div>2019-10-10  17:21</div>
						<div>작업자 : 성산</div>
					</div>
				</a>
				<a href="/app/work/workInfo" class="historyBox">
					<div class="historyInfo">
						흡기구 필터 교체
					</div>
					<div class="historyInfo">
						<div>동지 고등학교 체육관</div>
						<div>2019. 08. 21  11:06</div>
						<div>작업자 : 곽석훈</div>
					</div>
				</a>
			</div>
		</section>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_footer.php'; ?>
</div>

<div class="popup dateSelectPop">
	<div class="btnBox closeBtnBox">
		<a href="javascript:closePop()" class="btn closePop">X</a>
	</div>
	<div class="popupCon datepickerCon">
	</div>
	<div class="btnBox">
		<a href="javascript:void(0)" class="btn col_main f_w big full calendarApplyBtn">선택</a>
	</div>
</div>


<script src="/app/work/js/testFile_index.js"></script>

<script>

// :: 달력 팝업 오픈
$(document).on('click', '.calendarBtn', function (){
	$('.popup.dateSelectPop').show();
	$('.contents').addClass('overlay');
});


</script>


</body>
</html>



