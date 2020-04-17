<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 


$pageName					=	"성산중학교 1학년 1반";
?>
<div class="container monoBG">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_header.php'; ?>
	<div class="contents">
		<section class="airState">
			<!-- <div class="titleBox">
				<div class="titleLeft"></div>
				<div class="titleRight"></div>
			</div> -->
			<div class="pageTabs devicePowerTabs">
				<div class="devicePresent">
					<span>장비 상태 </span>
					<span id="deviceState" class="f_purple ml10">보통</span>
				</div>
				<div class="deviceSetting">
					<a href="/app/setting/modeState?no=<?=$buildingCIdx?>" class="btn border_purple f_purple">운전설정</a>
					<a href="/app/setting/classSetting?no=<?=$buildingCIdx?>" class="btn border_purple f_purple">유지관리</a>
				</div>
			</div>
			<div class="chartBox deviceChart">
				<canvas id="chart" style="height: 56.389vw; width: 86.111vw; min-width: 246px; display: block;"></canvas>
			</div>
			<div class="deviceStateTabs">
				<a href="javascript:select_range(1)" id="select_date" class="on">
					<span class="txt">일</span>
				</a>
				<a href="javascript:select_range(2)">
					<span class="txt">월</span>
				</a>
			</div>
			<div class="airStateDate monthlyAir hide">
				<a href="javascript:side_range(1)" class="prevBtn">
					<i class="ic ic_prevBtn"></i>
				</a>
				<span class="dateTxt border_purple">December.2019</span>
				<a href="javascript:side_range(2)" class="nextBtn">
					<i class="ic ic_nextBtn"></i>
				</a>
			</div>


			<!-- :: ksg_20200416_1922 open : "일" 파트 달력 -->
			<div class="calendarBox dailyAirSort">
				<input class="tbox full calendarInput" name="startDate" id="rangeDate" readonly value="">
				<a href="javascript:void(0)" class="calendarIcon">
					<i></i>
				</a>
			</div>
			<!-- :: ksg_20200416_1922 close : "일" 파트 달력 -->



			<div class="classList tableBox dailyBox" id="sensorTable">
				<!-- <div class="classList tableBox dailyBox" id="sensorTable" style="">
					<div class="classStateInfo">
						<div class="className">0시</div>
						<div class="num_class">
							<span class="time_zero">-</span>
						</div>
					</div>
					<div class="classStateInfo">
						<div class="className">0시</div>
						<div class="num_class">
							<span class="time_zero">-</span>
						</div>
					</div>
					<div class="classStateInfo">
						<div class="className">0시</div>
						<div class="num_class">
							<span class="time_zero">-</span>
						</div>
					</div>
					<div class="classStateInfo">
						<div class="className">0시</div>
						<div class="num_class">
							<span class="time_zero">-</span>
						</div>
					</div>
				</div> -->



				<div class="periodUnit">단위 : 일</div>
				<table class="listTable">
					<colgroup>
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
					</colgroup>
					<tbody>
						<tr>
							<td>
								<div>7시</div>
								<div>60</div>
							</td>
							<td>
								<div>8시</div>
								<div>80</div>
							</td>
							<td>
								<div>9시</div>
								<div>30</div>
							</td>
							<td>
								<div>10시</div>
								<div>30</div>
							</td>
							<td>
								<div>11시</div>
								<div>30</div>
							</td>
							<td>
								<div>12시</div>
								<div>30</div>
							</td>
							<td>
								<div>13시</div>
								<div>30</div>
							</td>
							<td>
								<div>14시</div>
								<div>30</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>15시</div>
								<div>60</div>
							</td>
							<td>
								<div>16시</div>
								<div>80</div>
							</td>
							<td>
								<div>17시</div>
								<div>30</div>
							</td>
							<td>
								<div>18시</div>
								<div>30</div>
							</td>
							<td>
								<div>19시</div>
								<div>OFF</div>
							</td>
							<td>
								<div>20시</div>
								<div></div>
							</td>
							<td>
								<div>21시</div>
								<div></div>
							</td>
							<td>
								<div>22시</div>
								<div></div>
							</td>
						</tr>
					</tbody>
				</table>


			</div>



			<div class="tableBox calendarBox hide" id="calendarTable">
				<div class="periodUnit">단위 : 월</div>
				<table class="listTable">
					<colgroup>
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
						<col width="50">
					</colgroup>
					<thead>
					<tr>
						<th>일</th>
						<th>월</th>
						<th>화</th>
						<th>수</th>
						<th>목</th>
						<th>금</th>
						<th>토</th>
					</tr>
					</thead>
					<tbody id="calendarTable_tbody">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div>1</div>
								<div>0분</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>2</div>
								<div>0분</div>
							</td>
							<td>
								<div>3</div>
								<div>20분</div>
							</td>
							<td>
								<div>4</div>
								<div>50분</div>
							</td>
							<td>
								<div>5</div>
								<div>30분</div>
							</td>
							<td>
								<div>6</div>
								<div>20분</div>
							</td>
							<td>
								<div>7</div>
								<div>30분</div>
							</td>
							<td>
								<div>8</div>
								<div>10분</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>9</div>
								<div>0분</div>
							</td>
							<td>
								<div>10</div>
								<div>20분</div>
							</td>
							<td>
								<div>11</div>
								<div>50분</div>
							</td>
							<td>
								<div>12</div>
								<div>30분</div>
							</td>
							<td>
								<div>13</div>
								<div>20분</div>
							</td>
							<td>
								<div>14</div>
								<div>30분</div>
							</td>
							<td>
								<div>15</div>
								<div>10분</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_footer.php'; ?>

</div>
<!-- 
<script src="/app/common/js/Chart.min.js"></script>
<script src="/app/setting/js/deviceState.js"></script> -->
<script src="/app/common/js/Chart.min.js"></script>
<script src="/app/setting/js/testFile_deviceState.js"></script>
<script>
	// :: 기간 선택
$( function() {
	$( "#rangeDate").dateRangePicker({
		language: "auto",
		autoClose: true,
		format: 'ddd. MMM DD.YYYY',
		separator: '  ~  ',
		startOfWeek: 'sunday',
		getValue: function()
		{
			return $(this).val();
		},
		// setValue: function(s, s1)
		setValue: function(s)
		{
			$(this).val(s);
		},
		minDays: 0,
		maxDays: 7,
		duration: 200,
		showTopbar: false,
		showWeekNumbers: false,
		monthSelect: false,
		yearSelect: false,
		selectForward: true,
		selectBackward: false,
		singleMonth: true,
		customArrowPrevSymbol: '<i class="datepickArrowPrev"></i>',
		customArrowNextSymbol: '<i class="datepickArrowNext"></i>',
		extraClass : 'narrowPicker',
	});

});
</script>
</body>
</html>
