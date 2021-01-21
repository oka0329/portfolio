<?php get_header(); ?>

<div class="l_content">
  <div class="l_contact l_inner">
    <div class="heading">
      <h2 class="heading_title">Contact</h2>
      <span class="heading_subtitle">お問い合わせ</span>
    </div>
    <p class="contact_text">制作の依頼・ご相談などお気軽にお問い合わせくださいませ。<br>下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。</p>
    <form action="<?php home_url(); ?>/contact/confirm/" method="post" class="contact_form">
      <ul class="form_list">
        <li class="list_item">
          <p class="caption">お名前<span class="must">必須</span></p>
          <input type="text" name="name" value="" class="form_block">
        </li>
        <li class="list_item">
          <p class="caption">メールアドレス<span class="must">必須</span></p>
          <input type="text" name="mail" value="" class="form_block">
        </li>
        <li class="list_item">
          <p class="caption">電話番号</p>
          <input type="text" name="tel" value="" class="form_block">
        </li>
        <li class="list_item">
          <p class="caption">お問い合わせ内容<span class="must">必須</span></p>
          <input type="textarea" name="content" value="" class="form_block"><br>
        </li>
      </ul>
      <button class="modal" data-remodal-target="modal1">入力内容を確認する</button>
      <input type="submit" value="内容を送信する">
    </form>
    <div class="remodal" data-remodal-id="modal1" data-remodal-options="hashTracking:false">
      <div data-remodal-action="close" class="remodal-close"></div>
      <div class="modal_inner">
        <?php
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $tel = $_POST['tel'];
        $content = $_POST['content'];
        ?>
        <div class="contact_check">
          <h3 class="sub_title">お問い合わせ内容のご確認</h3>
          <p class="text">お名前：<?php echo $name;?></p>
          <p class="text">メールアドレス：<?php echo $mail;?></p>
          <p class="text">電話番号：<?php echo $tel;?></p>
          <p class="text">お問い合わせ内容<br><?php echo $content;?></p>
        </div>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
