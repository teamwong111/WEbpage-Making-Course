<?php
  $exam_db = "exam";
  $exam_table = "multiple";
  include 'utils/add.php';
  include 'utils/header.php';
?>
<script>
  function watchdog() {
    if (document.forms.tmtj.tm.value == "")  {
        alert("题目不能为空");
        return false;
    } 
    else if (document.forms.tmtj.da.value == "") {
      alert("答案不能为空");
      return false;
    } 
    return true;
  }
</script>

<h1>提交多选题</h1>
<form action="<?php print($_SERVER["PHP_SELF"]) ?>" method="post" name="tmtj" onsubmit="return watchdog();">
  <fieldset>
    <legend>多选题</legend>
  <table>
    <tr>
      <td>多选题题目:</td>
      <td><textarea name="tm" cols="50" rows="8"></textarea></td>
    </tr>
    <tr>
      <td>多选题答案:</td>
      <td><textarea name="da" cols="50" rows="8"></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit"  class="push" value="添加题目"></td>
    </tr>
  </table>      
</fieldset>
</form>  
<a href="multiple-choice.php">返回测验</a>
<p><?php print($prompt) ?></p>
<?php include 'utils/footer.php'; ?>