<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div class="nav-margin container">
	<form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
		<input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
		<input type="hidden" name="w" value="<?php echo $w ?>">
		<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
		<input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
		<input type="hidden" name="sca" value="<?php echo $sca ?>">
		<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
		<input type="hidden" name="stx" value="<?php echo $stx ?>">
		<input type="hidden" name="spt" value="<?php echo $spt ?>">
		<input type="hidden" name="sst" value="<?php echo $sst ?>">
		<input type="hidden" name="sod" value="<?php echo $sod ?>">
		<input type="hidden" name="page" value="<?php echo $page ?>">
		<input type="hidden" name="token" value="<?php echo get_write_token($bo_table); ?>">

		<?php
		$option = '';
		$option_hidden = '';
		if ($is_notice || $is_html || $is_secret || $is_mail) { 
			$option = '';
			if ($is_notice) {
				$option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label></li>';
			}
			if ($is_html) {
				if ($is_dhtml_editor) {
					$option_hidden .= '<input type="hidden" value="html1" name="html">';
				} else {
					$option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label></li>';
				}
			}
			if ($is_secret) {
				if ($is_admin || $is_secret==1) {
					$option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label></li>';
				} else {
					$option_hidden .= '<input type="hidden" name="secret" value="secret">';
				}
			}
			if ($is_mail) {
				$option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label></li>';
			}
		}
		echo $option_hidden;
		?>

		<div class="layout notice-w__wrap">
			<div class="notice-w">
				<div class="notice-w__grid">
					<div class="notice-w__form">
						<label for="wr_subject" class="body-xs notice-w__label required">제목</label>
						<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" class="body-s" size="50" placeholder="제목" required>
					</div>

					<div class="notice-w__form">
						<label class="body-xs notice-w__label required">내용</label>
						<div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
							<?php echo $editor_html; ?>
						</div>
					</div>

					<?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
					<div class="notice-w__form notice-w__file">
						<?php if ($i == 0) { ?>
						<label for="bf_file_<?php echo $i+1 ?>" class="body-xs notice-w__label">썸네일</label>
						<input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" accept="image/*" title="이미지 첨부만 가능합니다." class="body-s">
						<?php } ?>

						<?php if($w == 'u' && $file[$i]['file']) { ?>
							<div class="notice-w__file-del">
								<input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1">
								<label for="bf_file_del<?php echo $i ?>" class="body-xs">파일 삭제 <span><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?></span></label>
							</div>
						<?php } ?>
					</div>
					<?php } ?>

					<div class="notice-w__btn-wrap">
						<a href="<?php echo get_pretty_url($bo_table); ?>" class="common-btn round-btn btn-48 fil-gray-btn">취소</a>
						<button type="submit" id="btn_submit" accesskey="s" class="common-btn round-btn btn-48 fil-primary-btn">작성완료</button>
					</div>
				</div>

				
			</div>
			
		</div>
	</form>
</div>

<script>
	<?php if($write_min || $write_max) { ?>
	// 글자수 제한
	var char_min = parseInt(<?php echo $write_min; ?>); // 최소
	var char_max = parseInt(<?php echo $write_max; ?>); // 최대
	check_byte("wr_content", "char_count");

	$(function() {
		$("#wr_content").on("keyup", function() {
			check_byte("wr_content", "char_count");
		});
	});

<?php } ?>
function html_auto_br(obj)
{
	if (obj.checked) {
		result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
		if (result)
			obj.value = "html2";
		else
			obj.value = "html1";
	}
	else
		obj.value = "";
}

function fwrite_submit(f)
{
	<?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

	var subject = "";
	var content = "";
	$.ajax({
		url: g5_bbs_url+"/ajax.filter.php",
		type: "POST",
		data: {
			"subject": f.wr_subject.value,
			"content": f.wr_content.value
		},
		dataType: "json",
		async: false,
		cache: false,
		success: function(data, textStatus) {
			subject = data.subject;
			content = data.content;
		}
	});

	if (subject) {
		alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
		f.wr_subject.focus();
		return false;
	}

	if (content) {
		alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
		if (typeof(ed_wr_content) != "undefined")
			ed_wr_content.returnFalse();
		else
			f.wr_content.focus();
		return false;
	}

	if (document.getElementById("char_count")) {
		if (char_min > 0 || char_max > 0) {
			var cnt = parseInt(check_byte("wr_content", "char_count"));
			if (char_min > 0 && char_min > cnt) {
				alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
				return false;
			}
			else if (char_max > 0 && char_max < cnt) {
				alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
				return false;
			}
		}
	}

	//<?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

	document.getElementById("btn_submit").disabled = "disabled";

	return true;
}
</script>
<!-- } 게시판 목록 끝 -->