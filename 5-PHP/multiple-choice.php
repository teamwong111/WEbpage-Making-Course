<?php 
  $exam_db = "exam";
  $exam_table = "multiple";
  include 'utils/header.php';
?>
<script>
  $(document).ready(function(){
    $("#xs").click(function(){
      $("#da").toggle();
    });
  });
</script>
<h1>多选题测试</h1>
<a href="index.php">返回主页</a>
<a href="add-multiple-choice.php">添加题目</a>
<?php
  include 'utils/problem.php';
?>
 <br/>
<?php
  include 'utils/footer.php';
?>
