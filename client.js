var nophp_server = "https://nophp-server.herokuapp.com/server.php"; // change this to your own nophp server

function nophp(code, server) {
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", nophp_server, true);

  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhttp.onload = function() {
    // start json parsing and processing
    var obj = JSON.parse(this.response);
    console.log("tmpfile: " + obj.file);
    var filelink = obj.file;

    var newrequest = new XMLHttpRequest();
    newrequest.open("GET", filelink, true);

    newrequest.onload = function() {
      // start json parsing and processing
      document.getElementById("nophp").innerHTML = this.responseText;
    }

    newrequest.send();
  }

  var data = "code=" + code;

  xhttp.send(data);
}
