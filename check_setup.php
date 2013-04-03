<h1>PHP testing</h1>

<hr/>
<h3>Environment variables</h3>
<ul>
  <li><b>$_SERVER['EY_TESTING']</b>: <?php echo isset($_SERVER['EY_TESTING'])?$_SERVER['EY_TESTING']:"Not set"; ?></li>
  <li><b>$_SERVER['HTTPS']</b>: <?php echo isset($_SERVER['HTTPS'])?$_SERVER['HTTPS']:"Not HTTPS"; ?></li>
</ul>

<hr/>
<h3>Rewrites</h3>
<b>The following should be an image:</b><br/>
<img src="/wp-content/themes/twentyten/images/headers/berries.jpg" width="200" /><br/><br/>

<b>The following should be a Wordpress generated 404 in an iframe:</b><br/>
<iframe src="/this-is-nothing/test.png" width="200" />

<hr/>
<h3></h3>
