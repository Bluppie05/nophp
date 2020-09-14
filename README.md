# noPHP
Run php remotely from javascript.

PHP is awesome, but for PHP you need a webserver which is expensive and still your webserver needs to support php. But what if we could run php clientside for free? noPHP does just that, noPHP is a JavaScript plugin which talks to a public(or private) noPHP server and returns the output. This does not only enable everyone(even without a php server) to run PHP but it also allows you to run PHP semi-clientside, so you can run php without reloading the page.

# Usage client
To use noPHP you'll have to add the code below to your document.

```<script src="https://nophp-server.herokuapp.com/client.js"></script><div id="nophp"></div>```

You can use a different noPHP server by ,changing the serverlink.

Now to run php you'll have to add the code below to your html document.

```<script>nophp("<?php your php code ?>");</script>```

# Setup server
To setup your own noPHP server follow the steps below:
1. Clone this repository to your computer(```git clone https://github.com/Bluppie05/nophp.git```)
2. Upload / move the downloaded folder to your php webserver
3. In client.js, change the nophp_server variable to the url of your own server.php file
4. In server.php, you can configure the server to your likings under server settings, so for example blacklist a function
4. Add ```<script src="https://yourserver.com/path/to/client.js"></script><div id="nophp"></div>``` to your html file to use your new noPHP server

# Changelog
- v0.0.1: Added CORS bypassing
- v0.0.2: Added command blacklist

WARNING: Use server versions before v0.1 at your own risk, these are alpha versions and are at high risk of hack attacks and could destroy your host server. Server versions after v0.1 are beta versions and are much safer to use.

# Public noPHP server list
- https://nophp-server.herokuapp.com/client.js (default) (reliable) (up2date)
- https://nophp-server.000webhostapp.com/client.js (fast) (up2date)

To get your public noPHP server in the list, make an issue with the "serverlist request" label where you place the link of your server's client.js file and some info.
