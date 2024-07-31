<?php
  $content = "";
  foreach ($_POST as $key => $value) {
      if($key == 'name') {$key = "Ім'я";}
      if($key == 'phone') {$key = "Телефон";}
      if($key == 'email') {$key = "Email";}
      if($key == 'message') {$key = "Повідомлення";}
    if($value) {
      $content .= "<b>$key</b>: <i>$value</i>\n";
    }
  }
  if(trim($content)){
    $content = "<b>Повідомлення з сайту:</b>\n".$content;
    // Ваш бот токен из @BotFather
    $apiToken = "6762078585:AAEZlGIvmPekL5sMrni3Sn_jRnyywd-wlI0";
    $data = [
      // Username чата
      'chat_id' => '538859973',
      'text' => $content,
      'parse_mode' => 'HTML'
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
  }
?>