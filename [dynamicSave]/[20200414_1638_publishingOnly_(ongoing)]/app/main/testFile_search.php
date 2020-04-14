<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 
$pageName			=	'검색';
$footer						=	'search';


?>
<div class="container monoBG">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_header.php'; ?>
	<div class="contents">
		<section class="main">
			<div class="searchBox">
				<input placeholder="시설물 명, 주소로 검색 가능합니다.">
				<a href="javascript:void(0)" class="searchIcon">
					<i></i>
				</a>
			</div> 
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
		</section>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_footer.php'; ?>
</div>

<script>

// :: 즐겨찾기 아이콘 색상 on/off 스크립트
$(document).on('click', '.favorite', function(){
	$(this).toggleClass('on');
})
</script>


</body>
</html>
