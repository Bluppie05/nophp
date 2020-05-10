# nophp
Run php inside javascript.

PHP is awesome, but for PHP you need a webserver which is expensive and still your webserver needs to support php. But what if we could run php clientside for free? noPHP does just that, noPHP is a JavaScript plugin which talks to a public(or private) noPHP server and returns the output. This does not only enable everyone(even without a php server) to run PHP but it also allows you to run PHP semi-clientside, so you can run php without reloading the page.

# Usage client
To use noPHP you'll have to add the code below to your document.

```<script src="https://nophp-server.herokuapp.com/client.js"></script><div id="nophp"></div>```

Now to run php you'll have to add the code below to your html document.

```<script>nophp("<?php your php code ?>");</script>```
