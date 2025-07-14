<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div class="nav-margin container">
	<div class="layout notice__wrap">
		<div class="notice">
			<h2 class="title-h2 notice__tit notice-fade__scroll">소식</h2>
			<div class="scroll-wrap notice__grid-wrap">
				<form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
					<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
					<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
					<input type="hidden" name="stx" value="<?php echo $stx ?>">
					<input type="hidden" name="spt" value="<?php echo $spt ?>">
					<input type="hidden" name="sca" value="<?php echo $sca ?>">
					<input type="hidden" name="sst" value="<?php echo $sst ?>">
					<input type="hidden" name="sod" value="<?php echo $sod ?>">
					<input type="hidden" name="page" value="<?php echo $page ?>">

					<div class="notice__grid notice-list__scroll">
						<?php
						for ($i=0; $i<count($list); $i++) {
							$file = get_file($bo_table, $list[$i]['wr_id']);
							$file_src = '';

							if (!empty($file) && isset($file[0]['file']) && preg_match("/\.({$config['cf_image_extension']})$/i", $file[0]['file'])) {
								$file_src = '<img src="'.$file[0]['path'].'/'.$file[0]['file'].'" width="150" height="150">';
							}

							$content = preg_replace('/<img[^>]+\>/i', '', $list[$i]['wr_content']);
							$content = preg_replace('/<a[^>]*>(.*?)<\/a>/i', '$1', $content);
						?>
						<a href="<?php echo $list[$i]['href'] ?>" class="notice__item">
							<div class="notice__thumb">
								<?php if (!empty($file_src)) { ?>
									<?php echo $file_src ?>
								<?php } else { ?>
									<div class="notice__thumb-none">
										<p class="display-s notice__thumb-none-txt">Reverda</p>
									</div>
								<?php } ?>
							</div>
							<h4 class="title-h4 notice__tit"><?php echo $list[$i]['subject'] ?></h4>
							<p class="body-s notice__date"><?php echo date("Y.m.d", strtotime($list[$i]['wr_datetime'])) ?></p>
						</a>
						<?php } ?>
					</div>
					<?php if (count($list) == 0) { echo '<div class="body-l notice__data-none notice-fade__scroll">게시물이 없습니다.</div>'; } ?>
					
					<div class="notice__write-wrap">
						<?php if ($write_href) { ?>
							<div class="notice__write">
								<a href="<?php echo $write_href ?>" class="btn-48 common-btn round-btn fil-black-btn">글쓰기</a>
							</div>
						<?php } ?>
					</div>
					<div class="notice__pg">
						<div class="common-pg">
							<?php echo $write_pages; ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>