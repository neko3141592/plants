<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // フォームから送信されたデータを取得
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // ここにフォームデータのバリデーションや追加の処理を追加する

  // メールの送信
  $to = 'your-email@example.com'; // お問い合わせフォームの送信先メールアドレスを設定
  $subject = 'お問い合わせがありました';
  $body = "名前: $name\nメールアドレス: $email\nメッセージ: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    // 送信成功時の処理を追加する（例：完了メッセージの表示など）
    echo 'お問い合わせありがとうございました！';
  } else {
    // 送信失敗時の処理を追加する（例：エラーメッセージの表示など）
    echo 'お問い合わせの送信に失敗しました。';
  }
}
?>
