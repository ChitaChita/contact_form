<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="contact.css">
  <script type="text/javascript" src="contact.js"></script>
</head>

<body>

  <section>
    <div class="form-title">
      <h3>お問い合わせフォーム</h3>
    </div>
    <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
      <ul>
        <li>
          <span>お名前</span>
          <label for="l-name">氏：</label>
          <input class="name-space" id="l-name" type="text" name="last-name" value="">
          <label for="f-name">名：</label>
          <input class="name-space" id="f-name" type="text" name="first-name" value="">
        </li>
        <li>
          <span>フリガナ</span>
          <label for="l-furigana">氏：</label>
          <input class="name-space" id="l-furigana" type="text" name="last-furigana" value="">
          <label for="f-furigana">名：</label>
          <input class="name-space" id="f-furigana" type="text" name="first-furigana" value="">
        </li>
        <li>
          <span>住所</span>
          <label for="mail1">〒</label>
          <input id="mail1" type="number" name="mail1" value="">
          <label for="mail2">ー</label>
          <input id="mail2" type="number" name="mail2" value="">
        </li>
        <li id="placement">
          <input class="long-column" id="address" type="text" name="address" value="">
        </li>
        <li>
          <span>電話番号</span>
          <label for="tel1"></label>
          <input class="tel-num" id="tel1" type="tel" name="tel1" value="">
          <label for="tel2">ー</label>
          <input class="tel-num" id="tel2" type="tel" name="tel2" value="">
          <label for="tel3">ー</label>
          <input class="tel-num" id="tel3" type="tel" name="tel3" value="">
        </li>
        <li>
          <span>メールアドレス</span>
          <input class="long-column" id="email" type="email" name="email" value="" 　required>
        </li>
        <li>
          <span>メールアドレス(確認)</span>
          <input class="long-column" id="email-confirm" type="email" name="email-confirm" value="" required>
        </li>
        <li>
          <span>質問内容</span>
          <textarea name="content" rows="5"></textarea>
        </li>
        <li>
          <div class="btn-area">
            <button id="submit-btn" type="submit">送信</button>
            <button id="close-btn" type="button">閉じる×</button>
          </div>
        </li>
      </ul>
    </form>
  </section>

</body>

</html>