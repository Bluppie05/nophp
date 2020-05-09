<?php

// server settings
$deletion = False;

if(isset($_GET["code"])) {
  $code = $_GET["code"];

  $host = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $host = explode("server.php", $host);
  $host = $host[0];
  $host = str_replace("http", "https", $host);

  $ip = $_SERVER['REMOTE_ADDR']; // get userip
  $date = date("Y_m_d"); // get date
  $filename = $ip."-".$date.".php"; // generate filename
  $filelink = $host."tmp/".$filename;

  file_put_contents("tmp/$filename", $code); // make the temporary php file

// json output start
  header('Content-Type: application/json'); // setting json header

  $myObj->file = $filelink; // adding file to json

  $myJSON = json_encode($myObj); // generating json

  print_r($myJSON); // outputting json
// json output end
}

?>
