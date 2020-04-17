<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 

$pageName					=	"성산중학교 1학년 1반";

?>
<div class="container monoBG">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_header.php'; ?>
	<div class="contents">
		<section class="airState">
			
			<div class="airStateBox statusBG status_bad">
				<a href="javascript:void(0)" class="btn refreshBtn">
					<i></i>
					<div>새로고침</div>
				</a>
				<div class="mainStatus">
					<i class="statusBack"></i>
					<div class="statusText">
						<div class="measurement">
							<div class="num">1488</div>
							<div class="gauge">PPM</div>
						</div>
						<div class="statusType">이산화탄소</div>
						<div class="statusGrade">나쁨</div>
					</div>	
				</div>
				<ul class="statusGroup">
					<li>
						<div class="statusType">온도</div>
						<div>
							<i class="temperature"></i>
							<span class="meaureMent">
								<span class="exbold">23</span>
								<span class="exbold">℃</span>
							</span>
						</div>
					</li>
					<li>
						<div class="statusType">습도</div>
						<div>
							<i class="humidity"></i>
							<span class="meaureMent">
								<span class="exbold">30</span>
								<span class="exbold">%</span>
						</div>
					</li>
					<li>
						<div class="statusType">초미세먼지</div>
						<div>
							<i></i>
							<span class="meaureMent">
								<span class="exbold">19</span>
								<span>㎛/㎥</span>
						</div>
					</li>
					<li>
						<div class="statusType">미세먼지</div>
						<div>
							<i></i>
							<span class="meaureMent">
								<span class="exbold">19</span>
								<span>㎛/㎥</span>
						</div>
					</li>
				</ul>
			</div>
			<div class="stateTit deviceStatus">
				<a href="/app/setting/deviceState?no=<?=$buildingCIdx?>" class="device titTxt">
					장비 상태
					<div>
						<span>운전 : </span>
						<span class="deviceState">OFF</span>
					</div>
				</a>
			</div>
			<div class="airStateBox half">
				<div class="stateInfo airCondition">
					<div class="row">
						<a href="/app/setting/airInfo?no=40">
							<span class="subject co2">이산화탄소(CO2)</span>
						</a>
					</div>
					<div class="row">
						<a href="/app/setting/airInfo?no=40&amp;type=6">
							<span class="subject dust">미세먼지</span>
						</a>
					</div>
					<div class="row">
						<a href="/app/setting/airInfo?no=40&amp;type=5">
							<span class="subject superDust">초미세먼지</span>
						</a>
					</div>
					<div class="row">
						<a href="/app/setting/airInfo?no=40&amp;type=999">
							<span class="subject radon">라돈</span>
						</a>
					</div>
					<div class="row">
						<a href="/app/setting/airInfo?no=40&amp;type=2">
							<span class="subject voc">유기화합물(VOC)</span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<div class="updateTime">
			<span>마지막 업데이트</span>
			<span>2020. 01. 10 (07:13:47)</span>
		</div>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_footer.php'; ?>
</div>

</body>
</html>
