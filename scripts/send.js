// send.js

// Lightboxの初期化
lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true
});

// お問い合わせフォームの送信イベントの処理
document.getElementById('contact-form').addEventListener('submit', function(event) {
  event.preventDefault();
  // フォームの値を取得
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;

  // フォームの値をリセット
  document.getElementById('name').value = '';
  document.getElementById('email').value = '';
  document.getElementById('message').value = '';

  // ここでフォームの値を使用してPHPに送信する処理を追加する
});
