<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div class="nav-margin container">
	<div class="layout company__wrap">
		<div class="company">
			<h2 class="title-h2 company__tit company-fade__scroll">회사소개</h2>
			<div class="company__grid">
				<div class="company__item-img company-fade__scroll">
					<img src="<?php echo G5_THEME_IMG_URL ?>/company.png">
				</div>
				<div class="company__item">
					<div class="scroll-wrap">
						<p class="display-s keep-all company__item-tit company-txt__scroll">탄소섬유 폐기물에 새로운 생명을</p>
					</div>
					<div class="scroll-wrap">
						<p class="body-l keep-all company__item-txt company-txt__scroll">Reverda는  버려지는 <span class="bold">탄소섬유 복합재 폐기물</span>을 첨단 기술로 다시 되살려 고부가가치 원료로 재탄생시키는 친환경 소재 전문 기업입니다.</p>
						<p class="body-l keep-all company__item-txt company-txt__scroll">우리는 지속가능한 순환경제 실현을 목표로, 항공우주·자동차·스포츠 산업 등에서 발생하는 탄소섬유 폐기물을 효율적으로 분리·정제·재활용하여 다양한 산업에서 활용 가능한 <span class="bold">재생 탄소섬유</span>를 공급합니다.</p>
					</div>
				</div>
			</div>
			<div class="company__btn-area">
				<a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=product" class="company__btn common-btn round-btn fil-primary-btn btn-56 company-fade__scroll">제품 보기</a>
			</div>
		</div>
	</div>
</div>