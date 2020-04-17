<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 
$pageName			=	'즐겨찾기';

$footer						=	'favorite';

?>
<div class="container monoBG">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_header.php'; ?>
	<div class="contents">
		<section class="main">
			<div class="titleBox">
				<div class="titleRight">
					<a href="javascript:void(0)" class="headerControl">
						<i></i>
					</a>
				</div>
			</div>
			<ul class="setList">
				<li class="setBox">
					<a href="/app/school/schoolState" class="highSchool">
						<div class="top">
							<div class="setName bold">가나다 고등학교</div>
							<div class="setAddr">서울특별시 마포구 마포대로 36</div>
						</div>
						<div class="bottom">
							<span class="min">시설물 - 3</span>
						</div>
					</a>
					<a href="javascript:void(0);" class="favorite on"></a>
				</li>
				<li class="setBox">
					<a href="/app/school/schoolState" class="highSchool">
						<div class="top">
							<div class="setName bold">가나다 고등학교</div>
							<div class="setAddr">서울특별시 마포구 마포대로 36</div>
						</div>
						<div class="bottom">
							<span class="min">시설물 - 3</span>
						</div>
					</a>
					<a href="javascript:void(0);" class="favorite"></a>
				</li>
			</ul>
		</section>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_footer.php'; ?>
</div>

<div class="popup orderChangePop">
	<a href="javascript:void(0);" class="popupClose"></a>
	<ul class="setList">
		<li class="setBox">
			<a href="/app/school/schoolState" class="highSchool">
				<div class="top">
					<div class="setName bold">가나다 고등학교</div>
					<div class="setAddr">서울특별시 마포구 마포대로 36</div>
				</div>
				<div class="bottom">
					<span class="min">학급 - 3</span>
				</div>
			</a>
			<a href="javascript:void(0);" class="favorite on"></a>
		</li>
		<li class="setBox">
			<a href="/app/school/schoolState" class="highSchool">
				<div class="top">
					<div class="setName bold">가나다 고등학교</div>
					<div class="setAddr">서울특별시 마포구 마포대로 36</div>
				</div>
				<div class="bottom">
					<span class="min">학급 - 3</span>
				</div>
			</a>
			<a href="javascript:void(0);" class="favorite"></a>
		</li>
	</ul>

	<div class="btnBox">
		<a href="javascript:void(0);" class="btn f_w big full">저장</a>
	</div>
</div>


<script>

// :: 즐겨찾기 아이콘 색상 on/off 스크립트
$(document).on('click', '.favorite', function(){
	$(this).toggleClass('on');
})


$(document).on('click', '.headerControl', function(){
	$('.popup.orderChangePop').show();
	$('.contents').addClass('overlay');
})


$(document).on('click', '.popupClose', function(){
	$('.popup').hide();
	$('.contents').removeClass('overlay');
})


// :: ksg_20200416_2301 single :  팝업 리스트 드래그 앤 드롭 순서 변경 스크립트.
$(function() {
	$(".popup .setList").sortable();
	$(".popup .setList").disableSelection();
});

</script>


</body>
</html>
