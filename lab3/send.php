<?php
include_once('template.php');
if (isset($_POST)) {
  $name = htmlspecialchars($_POST['name']);
  $msg = htmlspecialchars($_POST['msg']);
  $content = <<<END
    <h3>Message was sent:</h3>
      Name: {$name}
      <br>
      Message: {$msg}
END;
  $to = "ricber18@student.hh.se";
  $subject ="Test-mail";
  $msg = $msg;
  $headers = "From; " . $name;
  mail($to, $subject, $msg, $headers);
}
echo $navigation;
echo $content;
?>
</body>
</html>
