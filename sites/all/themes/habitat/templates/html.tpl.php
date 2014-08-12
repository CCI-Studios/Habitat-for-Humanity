<!DOCTYPE html>
<head>
<?php print $head; ?>
<meta name="viewport" content="width=device-width, user-scalable=no">
<title><?php print $head_title; ?></title>
<script type="text/javascript" src="//use.typekit.net/rex6fpe.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
