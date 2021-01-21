<?php get_header(); ?>

<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$content = $_POST['content'];

$name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
$mail = htmlspecialchars($mail,ENT_QUOTES,'UTF-8');
$tel = htmlspecialchars($tel,ENT_QUOTES,'UTF-8');
$content = htmlspecialchars($content,ENT_QUOTES,'UTF-8');

?>
<div class="l_content">
  <div class="l_contact l_inner">
    <div class="heading">
      <h2 class="heading_title">Contact</h2>
      <span class="heading_subtitle">お問い合わせ</span>
    </div>
    <div class="contact_check">
      <h3 class="sub_title">お問い合わせ内容のご確認</h3>
      <p class="text">お名前：<?php echo $name;?></p>
      <p class="text">メールアドレス：<?php echo $mail;?></p>
      <p class="text">電話番号：<?php echo $tel;?></p>
      <p class="text">お問い合わせ内容<br><?php echo $content;?></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
