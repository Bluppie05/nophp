<?php

header('Access-Control-Allow-Origin: *'); // allow requests from foregein clients

// server settings
$deletion = False;
$block_prevention = True; // set this to true if your webserver has CORS disabled by default, set this to false if your webserver has CORS enabled by default or if you can change the CORS settings on your webserver to prevent buggs
$blacklist = array("file_put_contents"); // Add commands to this list to blacklist them on your server, they won't work

if(isset($_POST["code"])) {
  $code = $_POST["code"];

  $host = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // grab current url
  $host = explode("server.php", $host); // explode at filename
  $host = $host[0]; // grab the current folder
  $host = str_replace("http", "https", $host); // replace http with https so requests can safely get through

  $ip = $_SERVER['REMOTE_ADDR']; // get userip
  $date = date("Y_m_d"); // get date
  $filename = $ip."-".$date.".php"; // generate filename
  $filelink = $host."tmp/".$filename; // generates the filelink

  if($block_prevention) {
    $code = str_replace("<?php", "<?php header('Access-Control-Allow-Origin: *'); ", $code); // enables access from different locations to prevent request blocking
  }

  $loopnum = 0; // defines the used variable for the loop
  $blackcount = count($blacklist); // counts how many items are on the blacklist
  $blackerror = False; // sets the error detector
  while($loopnum < $blackcount) {
    if(strpos($code, $blacklist[$loopnum]) !== false) {
      file_put_contents("tmp/$filename", "Error: Used blacklisted component by the server"); // write an error to the temporary file
      $blackerror = True; // sets error to true
    }
    $loopnum = $loopnum + 1; // updating loop
  }
  if(!$blackerror) {
    file_put_contents("tmp/$filename", $code); // make the temporary php file
  }

// json output start
  header('Content-Type: application/json'); // setting json header

  $myObj->file = $filelink; // adding file to json

  $myJSON = json_encode($myObj); // generating json

  print_r($myJSON); // outputting json
// json output end
}

?>
