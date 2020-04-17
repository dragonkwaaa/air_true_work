<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 

$pageName					=	"성산중학교 1학년 1반";

?>

<div class="container monoBG">

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



			<!-- :: ksg_20200417_1111 open : 시간별 테이블 파트 -->
			<div class="statusTableGroup timeSort">
				<div class="tableGroupTitle">시간별</div>
				<div class="tableBox calendarBox">
					<div class="periodUnit">단위 : PPM</div>
					<div class="tableMoveBtnGroup">
						<a href="javascript:void(0);" class="tableMoveLeft"></a>
						<a href="javascript:void(0);" class="tableMoveRight"></a>
					</div>
				</div>
				<div class="tableBox scrollAble">
				
					<table class="listTable">
						<colgroup>
							<col width="50">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
							<col width="60">
						</colgroup>
						<thead>
						<tr>
							<th>
								<div class="tableLeftTopText">시</div>
								<div class="tableLeftTopText">/일</div>
							</th>
							<th>7시</th>
							<th>8시</th>
							<th>9시</th>
							<th>10시</th>
							<th>11시</th>
							<th>12시</th>
							<th>13시</th>
							<th>14시</th>
							<th>15시</th>
							<th>16시</th>
							<th>17시</th>
							<th>18시</th>
							<th>19시</th>
							<th>20시</th>
							<th>21시</th>
							<th>22시</th>
						</tr>
						<tbody>
						<tr>
							<td>31</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>
							<td>7</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>
							<td>7</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
						</tr>
						<tr>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>
							<td>7</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>
							<td>7</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
						</tr>
						<tr>
							<td>2</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>
							<td>7</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>
							<td>7</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
						</tr>
						</tbody>
						</thead>
					</table>
				</div>


				
			</div>
			<!-- :: ksg_20200417_1111 close : 시간별 테이블 파트 -->





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
