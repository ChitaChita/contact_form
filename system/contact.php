<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="contact.css">
</head>

<body>

  <section>
    <div class="form-title">
      <h3>お問い合わせフォーム</h3>
    </div>
    <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
      <table id="form-items">
        <tbody>
          <tr>
            <td class="item-name">お名前</td>
            <td>
              <label for="l-name">氏：</label>
              <input class="name-space" id="l-name" type="text" name="last-name" value="">
              <label for="f-name">名：</label>
              <input class="name-space" id="f-name" type="text" name="first-name" value="">
            </td>
          </tr>
          <tr>
            <td class="item-name">フリガナ</td>
            <td>
              <label for="l-furigana">氏：</label>
              <input class="name-space" id="l-furigana" type="text" name="last-furigana" value="">
              <label for="f-furigana">名：</label>
              <input class="name-space" id="f-furigana" type="text" name="first-furigana" value="">
            </td>
          </tr>
          <tr>
            <td class="item-name">住所</td>
            <td>
              <label for="mail1">〒</label>
              <input id="mail1" type="number" name="mail1" value="">
              <label for="mail2">ー</label>
              <input id="mail2" type="number" name="mail2" value="">
              <input class="long-column" id="address" type="text" name="address" value="">
            </td>
          </tr>
          <tr>
            <td class="item-name">電話番号</td>
            <td>
              <label for="tel1"></label>
              <input class="tel-num" id="tel1" type="tel" name="tel1" value="">
              <label for="tel2">ー</label>
              <input class="tel-num" id="tel2" type="tel" name="tel2" value="">
              <label for="tel3">ー</label>
              <input class="tel-num" id="tel3" type="tel" name="tel3" value="">
            </td>
          </tr>
          <tr>
            <td class="item-name">メールアドレス</td>
            <td>
              <input class="long-column" id="email" type="email" name="email" value="" 　required>
            </td>
          </tr>
          <tr>
            <td class="item-name">メールアドレス(確認)</td>
            <td>
              <input class="long-column" id="email-confirm" type="email" name="email-confirm" value="" required>
            </td>
          </tr>
          <tr>
            <td class="item-name">質問内容</td>
            <td>
              <textarea name="content"></textarea>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="btn-area">
        <button class="btn" id="submit-btn" type="submit">送信</button>
        <label for="popup-on">
          <button class="btn" id="close-btn" type="button">閉じる×</button>
        </label>
      </div>
    </form>
  </section>

</body>

</html>