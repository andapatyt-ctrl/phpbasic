<h3>Using Ui Framework</h3>

<?php

include "ui_framework.php";

$button = new Button("Click me");
      $input = new Input("text");

$input_username = new Input("text");
$input_password = new Input("password");
?>

<form method="post">
    <div>Username</div>
    <div><?php echo $input_username;?></div>

    <div style="margin-top: 10px;">Password</div>
    <div><?php echo $input_password; ?></div>

    <div style="margin-top: 10px;"><?php echo $button; ?></div>
</form>