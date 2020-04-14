<header class="">
	<?php if($header_back != -1){?>
	<a href="javascript:history.back()" class="backBtn">
		<i class="ic ic_back_alt"></i>
	</a>
	<?php }?>
	<h1 class="logo"><?=$pageName?></h1>
	<?php
	/**
	 * ===============================================================================================
	 * @date		2019-09-02
	 * @author		star
	 * @details		허가된 작업자들만 시설물 상세보기 페이지에서 이동 가능한 기기 설정 페이지
	 */
	?>
	<?php if($header_setting_device && ($User->userType() == 1 || $User->userType() == 2 || $User->userType() == 3 || $User->userType() == 4)){?>
	<?php }?>
	<?php
	/**
	 * ===============================================================================================
	 */
	?>


	<!-- <div class="hamburgerWrap">
		<div class="hamburgerGroup">
			<div class="hamburgerHeader">
				<h1 class="logo">실내공기안전지킴이</h1>
			</div>
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/app/common/page/csCallBox.php'; ?>
		</div>
	</div> -->

	
</header>
<script>
function callNumber(number){
	//sms전송
	if(/Mobile|iPhone|Android|BlackBerry|IEMobile/i.test(navigator.userAgent)) {
		location.href = "tel:" + number;
	} else {
		alert('모바일에서만 사용가능한 기능입니다.');
	}
}
</script>
