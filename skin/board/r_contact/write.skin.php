<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_javascript('<script src="'.$board_skin_url.'/script.js"></script>', 0);

include_once(G5_LIB_PATH.'/PHPMailer/PHPMailerAutoload.php');
$company = $name = $email = $phone = $message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$company = isset($_POST['wr_1']) ? trim($_POST['wr_1']) : '';
	$name    = isset($_POST['wr_2']) ? trim($_POST['wr_2']) : '';
	$email   = isset($_POST['wr_email']) ? trim($_POST['wr_email']) : '';
	$phone   = isset($_POST['wr_3']) ? trim($_POST['wr_3']) : '';
	$message = isset($_POST['wr_content']) ? trim($_POST['wr_content']) : '';

	$send_result = send_inquiry_mail($company, $name, $email, $phone, $message);

	if ($send_result !== true) {
		echo "<script>alert('메일 전송에 실패했습니다: $send_result');</script>";
	} else {
		echo "<script>alert('문의가 정상적으로 접수되었습니다.'); </script>";
	}
}

// 메일 전송 함수
function send_inquiry_mail($company, $name, $email, $phone, $message) {
	$mail = new PHPMailer(true);
	try {
		$mail->IsSMTP();
		$mail->SMTPDebug  = SMTP::DEBUG_OFF;
		$mail->SMTPAuth   = true;
		$mail->SMTPKeepAlive = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->Username   = 'mailaylad99@gmail.com';
		$mail->Password   = 'evmr jfhr jvlg ksjg';
		$mail->SMTPSecure = 'ssl';
		$mail->Port       = '465';
		$mail->CharSet    = 'UTF-8';
		$mail->Encoding   = 'base64';

		$mail->setFrom($email, $name);
		$mail->addAddress('reincarnate96@gmail.com', 'Reverda');

		$mail->isHTML(true);
		$mail->Subject = "[신규문의] {$company}님 문의";
		$mail->Body    = "
		<p><strong>회사명&nbsp;:&nbsp;</strong> {$company}</p>
		<p><strong>담당자명&nbsp;:&nbsp;</strong> {$name}</p>
		<p><strong>이메일&nbsp;:&nbsp;</strong> {$email}</p>
		<p><strong>연락처&nbsp;:&nbsp;</strong> {$phone}</p>
		<p><strong>문의 내용&nbsp;:&nbsp;</strong></p>
		<p>".nl2br($message)."</p>
		";

		$mail->send();
		return true;
	} catch (Exception $e) {
		return "메일 전송 실패: {$mail->ErrorInfo}";
	}
}
?>

<div class="nav-margin container">
	<div class="layout contact__wrap">
		<div class="contact">
			<h2 class="title-h2 company__tit contact-fade__scroll">문의</h2>
			<form name="fwrite" id="fwrite" action="" onsubmit="return fwrite_submit(this);" method="post">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
				<input type="hidden" name="wr_id" value="<?php echo $wr_id; ?>">
				<input type="hidden" name="sca" value="<?php echo $sca; ?>">

				<div class="contact__grid-wrap">
					<div class="contact__grid scroll-wrap">
						<div class="contact__form contact__company contact__scroll">
							<label for="wr_1" class="body-b-s required contact__label">회사명</label>
							<input type="text" name="wr_1" id="wr_1" placeholder="회사명" class="body-s" required>
						</div>
						<div class="contact__form contact__name contact__scroll">
							<label for="wr_2" class="body-b-s required contact__label">담당자명</label>
							<input type="text" name="wr_2" id="wr_2" placeholder="담당자명" class="body-s" required>
						</div>
						<div class="contact__form contact__email contact__scroll">
							<label for="wr_email" class="body-b-s required contact__label">이메일</label>
							<input type="email" name="wr_email" id="wr_email" placeholder="이메일" class="body-s" required>
						</div>
						<div class="contact__form contact__tel contact__scroll">
							<label for="wr_3" class="body-b-s required contact__label">전화번호</label>
							<input type="text" name="wr_3" id="wr_3" placeholder="전화번호" class="body-s" required>
						</div>
						<div class="contact__form contact__txt contact__scroll">
							<label for="wr_content" class="body-b-s required contact__label">내용</label>
							<textarea name="wr_content" id="wr_content" rows="4" placeholder="내용" class="body-s" required></textarea>
						</div>
						<div class="contact__agree contact__scroll">
							<div class="body-m keep-all contact__agree-box">
								다음 목적으로 개인정보를 수집·이용합니다.<br /><br />1. 정보수집의 이용 목적 : 문의 내용 확인 및 진행<br />2. 수집/이용 항목 : 회사명, 담당자명, 이메일, 전화번호, 문의 내용<br />3. 보유 및 이용기간 :
							</div>
							<input type="checkbox" name="ask_agree" id="ask_agree" required>
							<label for="ask_agree" class="body-s contact__agree-label">개인정보 수집 및 이용에 동의합니다.</label>
						</div>
					</div>
					<div class="contact__btn-wrap contact__scroll">
						<button type="submit" id="btn_submit" class="common-btn round-btn fil-black-btn btn-56 contact__btn">제출하기</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>