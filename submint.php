<?php
mb_language("japanese");
mb_internal_encoding("utf-8");
 
if(!empty($_POST['company_name']) && !empty($_POST['name']) && !empty($_POST['tel'])){
$company_name=$_POST['company_name'];
$name=$_POST['name'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$detail=htmlspecialchars($_POST['detail']);
 
$success=mb_send_mail("送り先メールアドレス","ホームページからのお問い合わせ","会社名：".$company_name."\n名前：".$name."\nメールアドレス：".$mail."\n電話番号：".$tel."\nお問い合わせ内容\n".$detail,"from:".$mail);
}
?>
<?php
if($success){//送信完了 ?>
<p>お問い合わせありがとうございます。</p>
<?php }else{//送信失敗 ?>
<p>大変申し訳ございません。お問い合わせの送信に失敗しました。</p>
<? } ?>