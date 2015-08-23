<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
if ($_POST["email"]) :
set_time_limit(120);//
require_once("class.phpmailer.php");
function smtp_mail ( $sendto_email, $subject, $body, $user_name) {
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->Host = "smtp.ym.163.com"; // SMTP servers
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "no-reply@golmic.tk"; // SMTP username
$mail->Password = "noreply"; // SMTP password
$mail->From = "no-reply@golmic.tk"; // 发件人邮箱
$mail->FromName = "Golmic系统邮件"; // 发件人
$mail->CharSet = "utf-8"; // 这里指定字符集！
$mail->Encoding = "base64";
$mail->AddAddress($sendto_email,"Golmic管理员"); // 收件人邮箱和姓名
$mail->AddReplyTo($_POST["email"],$_POST["name"]);
//$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("d:/a.rar", "abc");
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment('stat.rar','更改后的名字.rar');
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");
$mail->IsHTML(true); // send as HTML

// 邮件主题
$mail->Subject = $subject;
// 邮件内容
$mail->Body = '
<html><head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
'.$body.
'<br/>
</body>
</html>';
$mail->AltBody ="text/html";
if(!$mail->Send())
{
  echo "提交失败，请把以下内容复制，手动发送到 <b>i@golmic.tk</b> 以便我尽快处理，谢谢<br>" . $mail->ErrorInfo;
  exit;
}
else {
  echo '<meta http-equiv="refresh" content="0; url=http://lujq.me/mailtome"/>';
}
}
// 参数说明(发送到, 邮件主题, 邮件内容,  用户名)
$content = '姓名：'.$_POST["name"].'<br>';
$content .= '邮箱：'.$_POST["email"].'<br>';
$content .= '其他：'.$_POST["content"].'<br>';

smtp_mail('549559373@qq.com', '['.$_POST["name"]."] 来信", $content ,$_POST["name"]);
endif;
?>
</html>
