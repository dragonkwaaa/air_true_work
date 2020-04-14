<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 

$pageName					=	"성산중학교 1학년 1반";

?>

<div class="container">

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_header.php'; ?>

	<div class="contents">
		<section class="airState">
			<div class="titleBox">
				<div class="titleLeft">공기질 상태</div>
				<!-- <div class="titleRight">1학년 2반</div> -->
			</div>
			<div class="pageTabs">
				<a href="javascript:void(0)" class="stateType_co2 box-2"><span>이산화탄소</span></a>
				<a href="javascript:void(0)" class="stateType_dust box-2 on"><span>미세먼지</span></a>
				<a href="javascript:void(0)" class="stateType_superDust box-2"><span>초미세먼지</span></a>
				<a href="javascript:void(0)" class="stateType_voc box-2"><span>VOC</span></a>
				<a href="javascript:void(0)" class="stateType_radon box-2"><span>라돈</span></a>
			</div>
			<div class="airStateTabs">
				<a href="javascript:void(0)" class="on">
					<span class="txt">일</span>
				</a>
				<a href="javascript:void(0)">
					<span class="txt">주</span>
				</a>
				<a href="javascript:void(0)">
					<span class="txt">월</span>
				</a>
				<a href="javascript:void(0)">
					<span class="txt">년</span>
				</a>
			</div>
			<div class="airStateDate">
				<!-- <input class="tbox full calendarInput" name="startDate" id="startDate" readonly value=""> -->

				<input class="tbox full calendarInput" name="startDate" id="rangeDate" readonly value="">

				<div class="calendarBox">
					<div class="calendarIcon">
						<i></i>
					</div>
				</div>
			</div>
			<div class="airStateBox horizontalState">
				<div class="stateInfo">
					<div class="row">	
						<span class="subject">최고</span>	
						<span class="con">
							<span class="num">매우나쁨</span>
							<span class="num">1506 PPM</span>
						</span>
					</div>
					<div class="row">	
						<span class="subject">평균</span>	
						<span class="con">
							<span class="num">보통</span>
							<span class="num">770 PPM</span>
						</span>
					</div>
				</div>
			</div>
			<div class="chartBox statusChart">
				<canvas id="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
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
			<span>보통 600~1000</span>
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

<script src="/app/common/js/Chart.min.js"></script>
<script src="/app/setting/js/testFile_airInfo.js"></script>

</body>
</html>
