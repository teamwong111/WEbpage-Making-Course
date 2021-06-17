<?php 
  session_start();
  require 'utils/header.php'
?>
  <h1>随机测验</h1>
  <?php if(isset($_SESSION["authenticated"])) { ?>
  <h2>欢迎您, <?php print($_SESSION["user"]); ?>!</h2>
  <ul>
    <li><a href="single-choice.php">单选题测试</a></li>
    <li><a href="multiple-choice.php">多选题测试</a></li>
    <li><a href="judge.php">判断题测试</a></li>
    <li><a href="logout.php">注销登录</a></li>
  </ul>
  <?php } else { ?>
  <h2>请登录用户！</h2>
  <ul>
    <li><a href="login.php">用户登陆</a></li>
    <li><a href="register.php">用户注册</a></li>
  </ul>
  <?php } ?>
<?php
  require 'utils/footer.php'; 
?>
