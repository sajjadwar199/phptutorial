<?php
require 'FlashmessageClass.php';
$flashMessage = new flashMessage();
//check message alert type
if (isset($_POST['success'])) {
   //setsuccess  flash message
   $flashMessage->setMessage(" flashmessage success ", 'success');
} else if (isset($_POST['error'])) {
   //setdanger flash message
   $flashMessage->setMessage("  flashmessage error ", 'error');
} else if (isset($_POST['warning'])) {
   $flashMessage->setMessage("  flashmessage warning ", 'warning');
} else if (isset($_POST['question'])) {
   $flashMessage->setMessage("  flashmessage question ", 'question');
} else if (isset($_POST['info'])) {
   $flashMessage->setMessage(" flashmessage info ", 'info');
} 
?>