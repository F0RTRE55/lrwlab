<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/tail.php');
	return;
}

if(G5_COMMUNITY_USE === false) {
	include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
	return;
}
?>

<div class="footer__bg">
	<div class="layout footer__wrap">
		<footer class="footer">
			<div class="title-h2 footer__logo">이로운랩</div>
			<address class="body-s footer__address">경기 평택시 고덕국제5로 160</address>
			<p class="body-s footer__contact">
				<span class="footer__tel">TEL. 010-6635-3386</span>
				<span class="line"></span>
				<span class="footer__mail">E-MAIL. reincarnate96@gmail.com</span>
			</p>
			<p class="body-xs footer__copyright">Copyright 2025. <a href="<?php echo G5_BBS_URL ?>/login.php">이로운랩</a> All rights reserved. <?php if ($is_member) { ?><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a><?php } ?></p>
		</footer>
	</div>
</div>



<?php
include_once(G5_THEME_PATH."/tail.sub.php");