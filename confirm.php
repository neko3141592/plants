<?php
mb_language("japanese");
mb_internal_encoding("utf-8");
//必須項目に入力漏れがないか確認  
if(!empty($_POST['company_name']) && !empty($_POST['name']) && !empty($_POST['tel'])){
    $company_name=$_POST['company_name'];
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $tel=$_POST['tel'];
    $detail = $_POST['detail'];
    $detailDisp=nl2br($_POST['detail']);  
    $success = true;
}
?>
  
<?php if($success){//確認画面の表示 ?>
<form action="submit.php" method="post">
<input type="hidden" name="key" value="<? print $key ?>" />
    <p class="form_tit">会社名</p>
    <p><?php echo $company_name; ?><input name="company_name" type="hidden" value="<?php echo $company_name; ?>"></p>
    <p class="form_tit">お名前</p>
    <p><?php echo $name; ?><input name="name" type="hidden" value="<?php echo $name; ?>"></p>
    <p class="form_tit">メールアドレス</p>
    <p><?php echo $mail; ?><input type="hidden" name="mail" value="<?php echo $mail; ?>"></p>
    <p class="form_tit">電話番号</p>
    <p><?php echo $tel; ?><input type="hidden" name="tel" value="<?php echo $tel; ?>"></p>
    <p class="form_tit">お問い合わせ内容の詳細</p>
    <p><?php echo $detailDisp; ?><input type="hidden" name="detail" value="<?php echo $detail; ?>"></p>
    <p class="align-center"><input name="submit" type="submit" value="送信"></p>
　　<p class="align-center"><a href="form.php">戻る</a></p>
</form>
<?php }else{//不備がある ?>
　　　　　　　　　　　　 <p>申し訳ございません、入力内容に不備がります。<br>
                    前ページに戻って正しく入力してください。</p>
                    <p class="align-center"><a href="form.php">戻る</a></p>
<?php } ?>