<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
include_once(G5_THEME_PATH.'/head.php');
?>

<div id="mb_login" class="mbskin container nav-margin">
	<div class="mbskin_box layout login__wrap">
		<div class="login">
			<h3 class="title-h3 login__tit">로그인</h3>
			<form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
				<input type="hidden" name="url" value="<?php echo $login_url ?>">

				<fieldset id="login_fs" class="login__grid">
					<div class="login__form">
						<label for="login_id" class="required body-b-s login__label">아이디</label>
						<input type="text" name="mb_id" id="login_id" required class="frm_input required body-s" size="20" maxLength="20" placeholder="아이디">
					</div>

					<div class="login__form">
						<label for="login_pw" class="required body-b-s login__label">비밀번호</label>
						<input type="password" name="mb_password" id="login_pw" required class="frm_input required body-s" size="20" maxLength="20" placeholder="비밀번호">
					</div>

					<div id="login_info" class="login__auto">
						<div class="login_if_auto chk_box">
							<input type="checkbox" name="auto_login" id="login_auto_login" class="selec_chk">
							<label for="login_auto_login" class="body-s login__auto-label">자동로그인</label>  
						</div>
					</div>

					<div class="login__btn-wrap">
						<button type="submit" class="btn_submit btn-56 common-btn fil-primary-btn login__btn">로그인</button>
					</div>
				</fieldset> 
			</form>
		</div>
	</div>
</div>

<script>
jQuery(function($){
	$("#login_auto_login").click(function(){
		if (this.checked) {
			this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
		}
	});
});

function flogin_submit(f)
{
	if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
		return true;
	}
	return false;
}
</script>
<!-- } 로그인 끝 -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>