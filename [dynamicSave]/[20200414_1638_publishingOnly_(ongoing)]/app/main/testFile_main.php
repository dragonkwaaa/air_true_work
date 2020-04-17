<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 


?>
<div class="container monoBG">

	<header>
		<h1 class="logo">
			<i class="imgLogo"></i>
		</h1>
		<a href="javascript:void(0)" class="adminModBtn f_purple">
			관리자모드
		</a>
	</header>



	<div class="contents">
		<section class="airState">
			
			<div class="airStateBox locationSet">
				<i class="locationMark"></i>
				<span class="bold title">위치</span>
				<span class="targetName">가나다 중학교</span>
				<a href="javascript:void(0)" class="modifyBtn">
					<i></i>
				</a>
			</div>

			<div class="airStateBox statusBG status_worst">
				<a href="javascript:void(0)" class="btn refreshBtn">
					<i></i>
					<div>새로고침</div>
				</a>
				<div class="mainStatus">
					<i class="statusBack"></i>
					<div class="statusText">
						<div class="measurement">
							<div class="num">19</div>
							<div class="gauge">㎛/㎥</div>
						</div>
						<div class="statusType">초미세먼지</div>
						<div class="statusGrade">매우나쁨</div>
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
							</span>
						</div>
					</li>
					<li>
						<div class="statusType">초미세먼지</div>
						<div>
							<i></i>
							<span class="meaureMent">
								<span class="exbold">19</span>
								<span>㎛/㎥</span>
							</span>
						</div>
					</li>
					<li>
						<div class="statusType">미세먼지</div>
						<div>
							<i></i>
							<span class="meaureMent">
								<span class="exbold">19</span>
								<span>㎛/㎥</span>
							</span>
						</div>
					</li>
				</ul>
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

</body>
</html>
