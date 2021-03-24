<?php get_header(); ?>

<div class="sub-hero">
  <h2 class="sub-hero__title">CONTACT</h2>
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
    </ul>
  </div>
</div>
<main class="main">
  <section class="l-section contact-detail">
    <div class="l-inner l-inner--xs">
      <p class="contact-detail__text">制作の依頼・ご相談などお気軽にお問い合わせくださいませ。<br>下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。</p>
      <div class="contact-detail__process">
        <div class="process-hop"></div>
        <div class="process-step"></div>
        <div class="process-jump"></div>
      </div>
      <form action="/confirm" method="post" class="contact-form">
        <div class="contact-detail__table">
          <table>
            <tr class="a">
              <td class="contact-form__left">お名前</td>
              <td  class="contact-form__right"><input type="text" name="name"></td>
            </tr>
            <tr>
              <td class="contact-form__left">メールアドレス</td>
              <td  class="contact-form__right"><input type="text" name="name"></td>
            </tr>
            <tr>
              <td class="contact-form__left">電話番号</td>
              <td  class="contact-form__right"><input type="text" name="tel"></td>
            </tr>
            <tr>
              <td class="contact-form__left">お問い合わせ項目</td>
              <td  class="contact-form__right">
                <label><input type="radio" name="item" value="webサイト制作依頼">webサイト制作依頼</label><br>
                <label><input type="radio" name="item" value="ご質問">ご質問</label><br>
                <label><input type="radio" name="item" value="お見積り">お見積り</label><br>
                <label><input type="radio" name="item" value="ご相談">ご相談</label>
              </td>
            </tr>
            <tr>
              <td class="contact-form__left">お問い合わせ内容</td>
              <td  class="contact-form__right"><textarea name="contents"></textarea></td>
            </tr>
          </table>
        </div>
      </form>
    </div>
  </section>
</main>

<?php get_footer(); ?>
