var nophp_server = "https://bitbiz.nl/nophp/server.php"; // change this to your own nophp server

function nophp(code, server) {
  var xhttp = new XMLHttpRequest();
  var api = nophp_server + "?code=" + code;
  xhttp.open("GET", api, true);

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

  xhttp.send();
}