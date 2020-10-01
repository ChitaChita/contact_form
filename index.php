<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./index.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./index.js"></script>
  <title>Trussardi</title>
</head>

<body>
  <main>
    <header>
      <div class="header__float">
        <h1>Trussardi</h1>
        <nav>
          <ul>
            <li id="open-time">営業時間：11:00 〜 21:00</li>
            <li id="tel-num">TEL：○○○-○○○-○○○○</li>
          </ul>
        </nav>
      </div>
    </header>
<!-- お問い合わせフォーム ここから-->
    <section>
      <div class="contact-background" id="contact-background">
        <div class="contact-form">
          <div class="form-title">
            <h3>お問い合わせフォーム</h3>
          </div>
            <form action="./system/contact.php" method="post" name="contactForm">
              <table id="form-items">
                <tbody>
                  <tr>
                    <td class="item-name">お名前</td>
                    <td>
                      <label for="l-name">氏：</label>
                      <input class="name-space" id="l-name" type="text" name="lastName" required>
                      <label for="f-name">名：</label>
                      <input class="name-space" id="f-name" type="text" name="firstName" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">フリガナ</td>
                    <td>
                      <label for="l-furigana">氏：</label>
                      <input class="name-space" id="l-furigana" type="text" name="lastFurigana" pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" required>
                      <label for="f-furigana">名：</label>
                      <input class="name-space" id="f-furigana" type="text" name="firstFurigana" pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">住所</td>
                    <td>
                      <label for="firstPostal">〒</label>
                      <input id="firstPostal" type="number" name="firstPostal"　pattern="\d{3}" required>
                      <label for="secondPostal">ー</label>
                      <input id="secondPostal" type="number" name="secondPostal"　pattern="\d{4}" required>
                      <input class="other-column" id="address" type="text" name="address" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">電話番号</td>
                    <td>
                      <label for="firstPhone"></label>
                      <input class="tel-num" id="firstPhone" type="tel" name="firstPhone"　pattern="\d{2,4}" required>
                      <label for="secondPhone">ー</label>
                      <input class="tel-num" id="secondPhone" type="tel" name="secondPhone"　pattern="\d{2,4}" required>
                      <label for="thirdPhone">ー</label>
                      <input class="tel-num" id="thirdPhone" type="tel" name="thirdPhone"　pattern="\d{3,4}" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">メールアドレス</td>
                    <td>
                      <input class="other-column" id="mail" type="email" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">メールアドレス(確認)</td>
                    <td>
                      <input class="other-column" id="emailConfirm" type="text" name="emailConfirm" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </td>
                  </tr>
                  <tr>
                    <td class="item-name">質問内容</td>
                    <td>
                      <textarea id="message" name="message" required></textarea>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="btn-area">
                <button class="btn" id="submit-btn" type="submit">送信</button>
                <button class="btn" id="close-btn" type="button">閉じる×</button>
              </div>
            </form>
        </div>
        <div class="accept">
          <h2>質問受け付けました</h2>
          <button id="btn-close">閉じる×</button>
        </div>
      </div>
    </section>
<!-- お問い合わせフォーム ここまで-->
    <section class="top-pic">
      <article class="top-bg">
        <a class="welcome">WELCOME</a>
        <div class="circle"></div>
      </article>
    </section>
    <section>
      <article class="menu-bar">
        <h2>メニュー</h2>
      </article>
      <article class="pasta-menu">
        <h3>パスタ</h3>
        <img src="./img/pasta.jpg" alt="パスタpic">
        <nav>
          <ul class="menu-list">
            <div>
              <li>カルボナーラ</li>
              <li>800円</li>
            </div>
            <div>
              <li>ペペロンチーノ</li>
              <li>750円</li>
            </div>
            <div>
              <li>和風明太子パスタ</li>
              <li>860円</li>
            </div>
            <div>
              <li>イカスミパスタ</li>
              <li>820円</li>
            </div>
            <div>
              <li>ジェノベーゼ</li>
              <li>850円</li>
            </div>
          </ul>
        </nav>
      </article>
      <article class="pizza-menu">
        <h3>ピザ</h3>
        <img src="./img/pizza.jpg" alt="ピザpic">
        <nav>
          <ul class="menu-list">
            <div>
              <li>マルゲリータ</li>
              <li>1200円</li>
            </div>
            <div>
              <li>シーフードピザ</li>
              <li>1300円</li>
            </div>
            <div>
              <li>ジェノベーゼ</li>
              <li>1300円</li>
            </div>
            <div>
              <li>マスカルポーネピザ</li>
              <li>1400円</li>
            </div>
          </ul>
        </nav>
      </article>
    </section>
    <section class="access-route">
      <h2>アクセス</h2>
      <p>杜王町駅から西口から徒歩7分</p>
      <img src="./img/map.jpg" alt="マップpic">
      <h2>お問い合わせはこちらから</h2>
      <button class="btn-open" id="contact-button">お問い合わせフォーム</button>
    </section>
    <footer>
      <p>Trussardi</p>
    </footer>
  </main>
</body>
</html>