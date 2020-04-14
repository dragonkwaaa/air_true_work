<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; ?>

<div class="container">
	<header>
		<h1 class="logo">
			<i class="imgLogo"></i>
		</h1>
	</header>
	<div class="contents">
		<section class="adminMain">
			<div class="titleBox">
				<div class="titleLeft">작업지시</div>
			</div>
			<div class="searchCon">
				<div class="searchSet">
					<div class="calendarBox">
						<input placeholder="달력">
						<a href="javascript:void(0)" class="calendarIcon">
							<i></i>
						</a>
					</div>

					<div class="searchRow">
						<div class="sbox full">
							<select>
								<option>처리상태</option>
								<option>A/S</option>
							</select>
						</div>
					</div>
					<div class="searchRow">
						<div class="sbox full">
							<select>
								<option>지정조회</option>
								<option>A/S</option>
							</select>
						</div>
					</div>
					<div class="searchRow">
						<div class="sbox short">
							<select>
								<option>고객명</option>
								<option>A/S</option>
							</select>
						</div>
						<input class="tbox searchInput">
					</div>
					<div class="btnBox">
						<a href="#none" class="btn f_w big full">검색</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_footer.php'; ?>
</div>
<script>
</script>
</body>
</html>


