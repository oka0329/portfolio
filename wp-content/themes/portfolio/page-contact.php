<?php get_header(); ?>

<?php
// 変数格納
$error = array();
$page_flag = 0;
$subtitle = 'お問い合わせフォーム';

if(!empty($_POST['namae'])){
  $namae = $_POST['namae'];
}
if(!empty($_POST['mail'])){
  $mail = $_POST['mail'];
}
if(!empty($_POST['tel'])){
  $tel = $_POST['tel'];
}
if(!empty($_POST['item'])){
  $item = $_POST['item'];
}
if(!empty($_POST['main'])){
  $main = $_POST['main'];
}


// バリデーション処理
if(!empty($_POST)){
  if(empty($namae)){
    $error['namae'] = '氏名は必ず入力してください。';
  }
  if(empty($mail)){
    $error['mail'] = 'メールアドレスは必ず入力してください。';
  }
  if(empty($main)){
    $error['main'] = 'お問い合わせ内容は必ず入力してください。';
  }
}

// 条件分岐
if(!empty($_POST['btn_confirm'])){
  if(empty($error)){
  $page_flag = 1;
  $subtitle = 'お問い合わせ内容確認';
}
}
elseif(!empty($_POST['btn_submit'])){
  $page_flag = 2;
  $subtitle = 'お問い合わせ完了';
}

?>

<div class="sub-hero">
  <h2 class="sub-hero__title">CONTACT</h2>
  <div class="scrolldown4"><span>Scroll</span></div>
</div>
<div class="breadcrumb">
  <div class="l-inner">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item">
        <a href="/">TOP</a>
      </li>
      <li class="breadcrumb__item">
        <span>CONTACT</span>
      </li>
      <li class="breadcrumb__item">
        <span><?php echo $subtitle; ?></span>
      </li>
    </ul>
  </div>
</div>
<main class="main">
  <section class="l-section contact-detail">
    <div class="l-inner">
    <div class="heading js-fadein-first">
      <h3 class="heading__title">CONTACT</h3>
    </div>
  <?php if($page_flag === 0):?>
  <!-- お問い合わせフォーム画面 -->

  <p class="contact-detail__text js-fadein-first">制作の依頼・ご相談などお気軽にお問い合わせくださいませ。<br>下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。</p>
    <form action="/contact" method="post" class="contact-form js-fadein-first">
      <div class="contact-detail__table">
        <table>
          <p class="table__title">お問い合わせフォーム</p>
          <tr>
            <td class="contact-form__left">お名前<span>必須</span></td>
            <td  class="contact-form__right">
              <p class="contact-form__note"><?php if(!empty($error['namae'])){echo $error['namae'];} ?></p>
              <input type="text" name="namae" value="<?php if(!empty($namae)){echo $namae;} ?>" class="form-bg"></td>
          </tr>
          <tr>
            <td class="contact-form__left">メールアドレス<span>必須</span></td>
            <td  class="contact-form__right">
              <p class="contact-form__note"><?php if(!empty($error['mail'])){echo $error['mail'];} ?></p>
              <input type="text" name="mail" value="<?php if(!empty($mail)){echo $mail;} ?>" class="form-bg"></td>
          </tr>
          <tr>
            <td class="contact-form__left">電話番号</td>
            <td  class="contact-form__right"><input type="text" name="tel" value="<?php if(!empty($tel)){echo $tel;} ?>"></td>
          </tr>
          <tr>
            <td class="contact-form__left">お問い合わせ項目</td>
            <td  class="contact-form__right">
              <label><input type="radio" name="item" value="webサイト制作依頼">webサイト制作依頼</label><br>
              <label><input type="radio" name="item" value="お見積り">お見積り</label><br>
              <label><input type="radio" name="item" value="ご相談">ご相談</label><br>
              <label><input type="radio" name="item" value="その他">その他</label>
            </td>
          </tr>
          <tr>
            <td class="contact-form__left">お問い合わせ内容<span>必須</span></td>
            <td  class="contact-form__right">
              <p class="contact-form__note"><?php if(!empty($error['main'])){echo $error['main'];} ?></p>
              <textarea name="main"  class="form-bg"><?php if(!empty($main)){echo $main;} ?></textarea></td>
          </tr>
          <tr class="ta-c">
            <td class="d-b">
            <div class="contact-form__submit">
              <input type="submit" name="btn_confirm" value="確認する"class="contact-form__button button button-main"></input>
            </div>
            </td>
          </tr>
        </table>
      </div>
    </form>

  <?php endif; ?>
    <!-- お問い合わせフォーム画面ここまで -->

    <!-- お問い合わせ内容確認画面 -->
    <?php if($page_flag === 1): ?>

    <form action="/contact" method="post" class="contact-form">
      <div class="contact-detail__table">
        <table>
          <p class="table__title">お問い合わせ内容確認</p>
          <tr>
            <td class="contact-form__left">お名前</td>
            <td  class="contact-form__right"><?php echo $namae; ?></td>
          </tr>
          <tr>
            <td class="contact-form__left">メールアドレス</td>
            <td  class="contact-form__right"><?php echo $mail; ?></td>
          </tr>
          <tr>
            <td class="contact-form__left">電話番号</td>
            <td  class="contact-form__right"><?php echo $tel; ?></td>
          </tr>
          <tr>
            <td class="contact-form__left">お問い合わせ項目</td>
            <td  class="contact-form__right"><?php echo $item; ?></td>
          </tr>
          <tr>
            <td class="contact-form__left">お問い合わせ内容</td>
            <td  class="contact-form__right"><?php echo $main; ?></td>
          </tr>
        </table>
        <div class="flex">
          <div class="contact-form__back">
            <input type="submit" onclick="history.back()" value="戻る" class="contact-form__button button button-main">
          </div>
          <div class="contact-form__submit">
            <input type="submit" name="btn_submit" value="送信する" class="contact-form__button button button-main"></input>
          </div>
        </div>
      </div>
      <input type="hidden" name="namae" value="<?php echo $namae; ?>">
      <input type="hidden" name="mail" value="<?php echo $mail; ?>">
      <input type="hidden" name="tel" value="<?php echo $tel; ?>">
      <input type="hidden" name="item" value="<?php echo $item; ?>">
      <input type="hidden" name="main" value="<?php echo $main; ?>">
    </form>

  <?php endif; ?>
    <!-- お問い合わせ内容確認画面ここまで -->

    <!-- お問い合わせ完了画面 -->
    <?php if($page_flag === 2): ?>
      <div class="contact-complete">
        <p class="contact-complete__title">お問い合わせありがとうございます</p>
        <p class="contact-complete__text">ご記入いただいた内容は正常に送信されました。<br>確認のため、お客様のメールアドレスへ自動返信メールをお送りしております。<br>お問い合わせいただいた内容につきましては、近日中にご返信させていただきます。</p>
      </div>
      <!-- お問い合わせ完了画面ここまで -->

    <!-- 自動返信メール -->

    <?php
    // 初期設定
    $header = null;
    $auto_reply_subject = null;
    $auto_reply_text = null;
    $admin_reply_subject = null;
    $admin_reply_text = null;
    $admin_mail = 'info@1st-stage.candypop.jp';
    date_default_timezone_set('Asia/Tokyo');

    // ヘッダー設定
    $header = "MIME-Version:1.0\n";
    $header .= "From: First Stage<info@1st-stage.candypop.jp>";
    $header .= "Reply-To: First Stage<info@1st-stage.candypop.jp>";

    // customer件名
    $auto_reply_subject = 'お問い合わせありがとうございます';

    // customer本文
    $auto_reply_text = "この度は、お問い合わせいただき誠にありがとうございます。\n下記の内容でお問い合わせを受け付けました。\n\n";
    $auto_reply_text .= "お問い合わせ日時：".date("Y-m-d H:i")."\n";
    $auto_reply_text .= "氏名：".$namae."\n";
    $auto_reply_text .= "メールアドレス：".$mail."\n";
    $auto_reply_text .= "電話番号：".$tel."\n";
    $auto_reply_text .= "お問い合わせ項目：".$item."\n";
    $auto_reply_text .= "お問い合わせ内容：".$main."\n";
    $auto_reply_text .= "First Stage　事務局";

    mb_send_mail($mail,$auto_reply_subject,$auto_reply_text,$header);

    // admin件名
    $admin_reply_subject = "お問い合わせを受け付けました。";

    // admin本文
    $admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
    $auto_reply_text .= "お問い合わせ日時：".date("Y-m-d H:i")."\n";
    $auto_reply_text .= "氏名：".$namae."\n";
    $auto_reply_text .= "メールアドレス：".$mail."\n\n";
    $auto_reply_text .= "電話番号：".$tel."\n\n";
    $auto_reply_text .= "お問い合わせ項目：".$item."\n\n";
    $auto_reply_text .= "お問い合わせ内容：".$main."\n\n";

    mb_send_mail($admin_mail,$admin_reply_subject,$admin_reply_text,$header);

    ?>
    <!-- 自動返信メールここまで -->

    <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
