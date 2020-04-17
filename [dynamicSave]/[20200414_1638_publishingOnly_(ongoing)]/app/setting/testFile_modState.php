<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_head.php'; 

$pageName					=	"성산중학교 1학년 1반";

?>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_header.php'; ?>

	<div class="contents">
		<section class="airState">

			<div class="titleBox">
				<div class="titleLeft">모드 상태</div>
			</div>
			<div class="airVolumeList">
				<a href="#none" class="">OFFLINE
					<div class="optionRadio">
						<label>
							<input type="radio" name="offlineCheck" checked>
							<span>on</span>
						</label>
						<label>
							<input type="radio" name="offlineCheck">
							<span>off</span>
						</label>
					</div>
				</a>
				<a href="#none" class="">자동모드
					<div class="optionRadio">
						<label>
							<input type="radio" name="autoCheck" checked>
							<span>on</span>
						</label>
						<label>
							<input type="radio" name="autoCheck">
							<span>off</span>
						</label>
					</div>
				</a>
				<a href="#none" class="">수동모드
					<div class="optionRadio">
						<label>
							<input type="radio" name="manualCheck" checked>
							<span>on</span>
						</label>
						<label>
							<input type="radio" name="manualCheck">
							<span>off</span>
						</label>
					</div>
				</a>
			</div>
		</section>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/testFile_footer.php'; ?>

</div>

</body>
</html>
