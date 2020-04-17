<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 

$pageName					=	"성산중학교 1학년 1반";

?>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_header.php'; ?>
	<div class="contents">
	<section class="work">
			<div class="titleBox">
				<div class="titleLeft">에러상태</div>
			</div>
			<div class="schoolStateList errorList">
				<div class="schoolClassBox" href="#none">
					<div class="classTitle">
						<a href="#none" class="errorInfo">
							<div>라돈 센서 오동작</div>
							<div>2019-01-01</div>
						</a>
					</div>
					<div class="errorInfoGroup hide">
						<table class="setTable">
							<colgroup>
								<col width="70">
								<col width="*">
							</colgroup>
							<tr>
								<th>발생일</th>
								<td>
									<div>2019-01-01</div>
								</td>
							</tr>
							<tr>
								<th>
									<div>제품명</div>
									<div>제품S/N</div>
								</th>
								<td>
									<div>BTM-207E / bfgfh
									
								</td>
							</tr>
							<tr>
								<th>상세정보</th>
								<td>라돈 측정 불가</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="schoolClassBox" href="#none">
					<div class="classTitle">
						<a href="#none" class="errorInfo">
							<div>이산화탄소 측정 오류</div>
							<div>2019-03-12</div>
						</a>
					</div>
					<div class="errorInfoGroup hide">
						<table class="setTable">
							<colgroup>
								<col width="70">
								<col width="*">
								<col width="70">
								<col width="*">
							</colgroup>
							<tr>
								<th>발생일</th>
								<td>
									<div>2019-01-01</div>
								</td>
							</tr>
							<tr>
								<th>
									<div>제품명</div>
									<div>제품S/N</div>
								</th>
								<td>
									<div>BTM-207E / bfgfh
									
								</td>
							</tr>
							<tr>
								<th>상세정보</th>
								<td>라돈 측정 불가</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="statusIndicator">
		<div class="good">
			<i></i>
			<span>좋음 ~600</span>
		</div>
		<div class="normal">
			<i></i>
			<span >보통 600~1000</span>
		</div>
		<div class="bad">
			<i></i>
			<span>나쁨 1000~2000</span>
		</div>
		<div class="worst">
			<i></i>
			<span>매우나쁨 2001~</span>
		</div>
			
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_footer.php'; ?>
</div>

<script>

// :: 상세내용 오픈 스크립트
$(".schoolClassBox .errorInfo").click(function() {

	let $toggleTarget	=	$(this).parent().siblings(".errorInfoGroup.hide");

	$toggleTarget.toggle(400);
	$(".errorInfoGroup.hide").not($toggleTarget).hide();
	$(this).parent('.schoolClassBox').toggleClass('on');
	$(this).toggleClass('opened');
	
});
</script>
</body>
</html>
