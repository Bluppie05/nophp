<h1 id="nophp">noPHP</h1>

<p>Run php inside javascript.</p>

<p>PHP is awesome, but for PHP you need a webserver which is expensive and still your webserver needs to support php. But what if we could run php clientside for free? noPHP does just that, noPHP is a JavaScript plugin which talks to a public(or private) noPHP server and returns the output. This does not only enable everyone(even without a php server) to run PHP but it also allows you to run PHP semi-clientside, so you can run php without reloading the page.</p>

<h1 id="usageclient">Usage client</h1>

<p>To use noPHP you'll have to add the code below to your document.</p>

<pre><code class="<script src="https://nophp-server.herokuapp.com/client.js"></script><div id="nophp"></div>``` language-<script src="https://nophp-server.herokuapp.com/client.js"></script><div id="nophp"></div>```">You can use a different noPHP server by ,changing the serverlink.

Now to run php you'll have to add the code below to your html document.
</code></pre>

<script>nophp("<?php your php code ?>");</script>

<p>```</p>

<h1 id="setupserver">Setup server</h1>

<p>To setup your own noPHP server follow the steps below:</p>

<ol>
<li>Clone this repository to your computer(<code>git clone https://github.com/Bluppie05/nophp.git</code>)</li>

<li>Upload / move the downloaded folder to your php webserver</li>

<li>In client.js, change the nophp_server variable to the url of your own server.php file</li>

<li>In server.php, you can configure the server to your likings under server settings, so for example blacklist a function</li>

<li>Add <code>&lt;script src="https://yourserver.com/path/to/client.js"&gt;&lt;/script&gt;&lt;div id="nophp"&gt;&lt;/div&gt;</code> to your html file to use your new noPHP server</li>
</ol>

<h1 id="publicnophpserverlist">Public noPHP server list</h1>

<ul>
<li>https://nophp-server.herokuapp.com/client.js (default) (reliable) (up2date)</li>

<li>https://nophp-server.000webhostapp.com/client.js (fast) (up2date)</li>
</ul>

<p>To get your public noPHP server in the list, make an issue with the "serverlist request" label where you place the link of your server's client.js file and some info.</p>
