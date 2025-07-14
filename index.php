<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

if(G5_COMMUNITY_USE === false) {
	include_once(G5_THEME_SHOP_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/index.css">', 0);
?>

<div class="container nav-margin">
	<div class="main__wrap">
		<main class="main">
			<div class="main-banner__wrap">
				<section class="main-banner">
					<div class="scroll-wrap">
						<p class="display-m keep-all main-banner__txt main-banner__scroll">90% 폐기율의 탄소복합 부산물 혁신적인 친환경 소재</p>
					</div>					
					<p class="main-banner__btn"><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=product" class="common-btn round-btn fil-primary-btn btn-56"><span>자세히 보기</span><span class="main-banner__btn-ico"><img src="<?php echo G5_THEME_IMG_URL ?>/ico_next_w.svg"></span></a></p>
				</section>
			</div>

			<div class="layout main-graph__wrap">
				<section class="main-graph">
					<div class="main-graph__grid">
						<div class="main-graph__item">
							<div class="main-graph__chart scroll-wrap">
								<div class="body-s main-graph__chart-item main-chart__scroll">
									<p class="chart-statistics chart-statistics-01">60,810</p>
									<p class="chart-bar chart-bar-01"></p>
									<p class="chart-year chart-year-01">2022</p>
								</div>
								<div class="body-s main-graph__chart-item main-chart__scroll">
									<p class="chart-statistics chart-statistics-02">68,100</p>
									<p class="chart-bar chart-bar-02"></p>
									<p class="chart-year chart-year-02">2023</p>
								</div>
								<div class="body-s main-graph__chart-item main-chart__scroll">
									<p class="chart-statistics chart-statistics-03">76,290</p>
									<p class="chart-bar chart-bar-03"></p>
									<p class="chart-year chart-year-03">2024</p>
								</div>
								<div class="body-b-s main-graph__chart-item main-chart__scroll">
									<p class="chart-statistics chart-statistics-04">85,500</p>
									<p class="chart-bar chart-bar-04"></p>
									<p class="chart-year chart-year-04">2025</p>
								</div>
							</div>
						</div>
						<div class="main-graph__item">
							<div class="scroll-wrap">
								<p class="display-s keep-all main-graph__tit main-graph__scroll">연간 폐탄소 복합소재 처리비용</p>
							</div>
							<div class="scroll-wrap">
								<p class="display-s keep-all main-graph__tit primary main-graph__scroll">약 168억원</p>
							</div>
							<div class="scroll-wrap">
								<p class="body-l keep-all main-graph__txt main-graph__scroll">폐탄소 복합 소재 발생량은 매년 증가하고 있지만 처리방법은 매립 80%, 소각 10%로 재활용되는 비율은 6%밖에 되지 않습니다.</p>
							</div>
						</div>
					</div>
					
				</section>
			</div>

			<div class="layout main-problem__wrap">
				<section class="main-problem">
					<div class="main-problem__grid">
						<div class="main-problem__item">
							<div class="scroll-wrap">
								<p class="display-s keep-all main-problem__tit main-problem__scroll-txt">매립, 소각으로 인해</p>
							</div>
							<div class="scroll-wrap">
								<p class="display-s primary keep-all main-problem__tit main-problem__scroll-txt">발생하는 문제점</p>
							</div>
							<div class="scroll-wrap">
								<p class="body-l keep-all main-problem__txt main-problem__scroll-txt">매립, 소각 시 발생하는 페놀화합물, 다이옥신 등의 유해물질은 피부를 손상 시키고 면역계 손상, 호흡기 질병, 암 등을 유발합니다.</p>
							</div>
						</div>
						<div class="main-problem__item scroll-wrap">
							<div class="main-problem__img main-problem__scroll-img">
								<img src="<?php echo G5_THEME_IMG_URL ?>/main_problem.png">
							</div>
						</div>
					</div>
										
				</section>
			</div>

			<div class="layout main-solution__wrap">
				<section class="main-solution">
					<div class="main-solution__txtbox">
						<div class="scroll-wrap">
							<p class="body-s primary keep-all main-solution__label main-solution__scroll-txt">Solution</p>
						</div>
						<div class="scroll-wrap">
							<p class="display-s keep-all main-solution__tit main-solution__scroll-txt">재활용 소재로 만든 탄소복합 소재</p>
						</div>
						<div class="scroll-wrap">
							<p class="body-l keep-all main-solution__txt main-solution__scroll-txt">화재 억제력과 스타일을 챙긴 친환경 탄소복합소재</p>
						</div>
					</div>
					
					
					<div class="scroll-wrap main-solution__grid">
						<div class="main-solution__item main-solution__scroll-grid">
							<div class="main-solution__item-box">
								<h2 class="title-h2 keep-all main-solution__item-tit">90% 품질 유지</h2>
								<p class="body-m keep-all main-solution__item-txt">탄소복합 물성 · 화학성 특성 90% 잔존</p>
							</div>							
						</div>

						<div class="main-solution__item main-solution__scroll-grid">
							<div class="main-solution__item-box">
								<h2 class="title-h2 keep-all main-solution__item-tit">고강도 · 고내열성</h2>
								<p class="body-m keep-all main-solution__item-txt">화재에도 잘 버티는 재질로 항공, 건물의 화재 방지 소재로 이용 가능</p>
							</div>							
						</div>

						<div class="main-solution__item main-solution__scroll-grid">
							<div class="main-solution__item-box">
								<h2 class="title-h2 keep-all main-solution__item-tit">환경보호</h2>
								<p class="body-m keep-all main-solution__item-txt">처리비용이 높은 탄소섬유 재활용으로 매립, 소각 비율 감소</p>
							</div>							
						</div>
					</div>
				</section>
			</div>

			<div class="layout main-company__wrap">
				<section class="main-company scroll-wrap">
					<div class="main-company__grid main-company__scroll">					
						<p class="main-company__item"><img src="<?php echo G5_THEME_IMG_URL ?>/main_company_logo01.svg"></p>
						<p class="main-company__item"><img src="<?php echo G5_THEME_IMG_URL ?>/main_company_logo02.svg"></p>
						<p class="main-company__item"><img src="<?php echo G5_THEME_IMG_URL ?>/main_company_logo03.svg"></p>
						<p class="main-company__item"><img src="<?php echo G5_THEME_IMG_URL ?>/main_company_logo04.svg"></p>
					</div>					
				</section>
			</div>
				
		</main>
	</div>
	
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');