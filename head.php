<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/head.php');
	return;
}

if(G5_COMMUNITY_USE === false) {
	define('G5_IS_COMMUNITY_PAGE', true);
	include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
	return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

add_javascript('<script src="'.G5_THEME_JS_URL.'/theme_common.js"></script>', 0);
add_javascript('<script src="'.G5_THEME_JS_URL.'/theme_animation.js"></script>', 0);
?>

<div class="header__bg">
	<div class="layout header__wrap">
		<header id="header">
			<div class="header__grid">
				<div class="header__logo">
					<a href="<?php echo G5_URL ?>"><h2>이로운랩</h2></a>
				</div>
				<div class="header__menu">
					<div class="header__menu-pc">
						<nav class="menu-pc__wrap">
							<ul class="menu-pc__grid">
								<?php
								$menu_datas = get_menu_db(0, true);
								$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
								$current_bo_table = $_GET['bo_table'] ?? '';
								foreach( $menu_datas as $row ){
									if( empty($row) ) continue;

									$menu_url = parse_url($row['me_link']);
									$menu_path = $menu_url['path'] ?? '';
									$menu_query = $menu_url['query'] ?? '';

									parse_str($menu_query, $menu_query_params);
									$menu_bo_table = $menu_query_params['bo_table'] ?? '';

									// path와 bo_table이 모두 일치할 때만 활성화
									$is_active = ($current_path === $menu_path && $current_bo_table === $menu_bo_table) ? 'primary' : '';
								?>
								<li class="title-h4 menu-pc__item">
									<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="<?php echo $is_active; ?>"><?php echo $row['me_name'] ?></a>
								</li>
								<?php $i++; }?>
							</ul>
						</nav>
					</div>

					<div class="header__menu-mo">
						<p class="menu-mo__btn-open"><img src="<?php echo G5_THEME_IMG_URL ?>/ico_menu.svg"></p>
						<div class="menu-mo__wrap">
						<p class="menu-mo__btn-close"><img src="<?php echo G5_THEME_IMG_URL ?>/ico_close.svg"></p>
							<ul class="menu-mo__grid">
								<?php
								$menu_datas = get_menu_db(0, true);
								$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
								$current_bo_table = $_GET['bo_table'] ?? '';
								foreach( $menu_datas as $row ){
									if( empty($row) ) continue;

									$menu_url = parse_url($row['me_link']);
									$menu_path = $menu_url['path'] ?? '';
									$menu_query = $menu_url['query'] ?? '';

									parse_str($menu_query, $menu_query_params);
									$menu_bo_table = $menu_query_params['bo_table'] ?? '';

									// path와 bo_table이 모두 일치할 때만 활성화
									$is_active = ($current_path === $menu_path && $current_bo_table === $menu_bo_table) ? 'primary' : '';
								?>
								<li class="title-h4 menu-mo__item">
									<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="<?php echo $is_active; ?>"><?php echo $row['me_name'] ?></a>
								</li>
								<?php $i++; }?>
							</ul>
						</div>
						<div class="menu-mo__bg"></div>
					</div>
					
				</div>
			</div>
		</header>
	</div>
</div>