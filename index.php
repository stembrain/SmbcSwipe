<html>

<head>

<title>SMBC Swipe</title> 

</head>

<body>
<a href="<?php echo file_get_contents("smbc_swipe_bootstrap.js"); ?>">SMBC Swipe Bookmarklet</a>

If you are on iOS device or some other device that doesn't let you bookmark the above link, follow this link, bookmark the page, then edit the bookmark to remove everything up to and including the part that says "#removeme_":
<div><a href="#removeme_<?php echo file_get_contents('smbc_swipe_bootstrap.js'); ?>">Remove everything from this link including the removeme_</a></div>
</body>

</html>



