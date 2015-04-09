<?php
//file_put_contents("bla.log",$_POST["payload"]);
if ($_POST['payload']) {
  shell_exec("cd /var/www/beta.lab.joarc.se/ && git pull github master");
  //file_put_contents("asdf.log", "true");
}
?>
