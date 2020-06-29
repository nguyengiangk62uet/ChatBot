<?php
$id = $_POST['id'];
$url = $_POST['url'];
echo ' {
	"messages": [
    {
      "attachment": {
        "type": "GIFS",
        "payload": {
          "url": "'.$url.'"
        }
      }
    }
  ]
}';
?>