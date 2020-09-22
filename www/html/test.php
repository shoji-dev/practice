<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHPのTESTページ</title>
</head>
<body>
  <form action="">
    <input type="text" id="form" name="form-test">
    <input type="submit" value="送信">
  </form>
  <br><br>
  <p>↓↓↓この下にフォーム送信したデータがphpにより表示される↓↓↓</p>
<?php
$submit_data = $_GET["form-test"];
echo $submit_data;
?>

</body>
</html>

