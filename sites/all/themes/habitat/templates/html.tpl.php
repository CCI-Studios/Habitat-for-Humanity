<!DOCTYPE html>
<head>
<?php print $head; ?>
<meta name="author" content="aaa">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<title><?php print $head_title; ?></title>
<script type="text/javascript" src="//use.typekit.net/rex6fpe.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!-- Global site tag (gtag.js) - Google AdWords: 813537928 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-813537928"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-813537928');
</script>

<?php if(arg(0) == null && arg(1) == 'habitat-handyman' && arg(2) == null) {  //only display the script on /habitat-handyman page ?>
  <script type="text/javascript">
   
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-813537928/2kcrCPLu_n4QiLX2gwM',
      'event_callback': callback
  });
  return false;
}
  </script>
<?php } ?>

<?php if(arg(0) == 'volunteer' && arg(1) == 'restore' && arg(2) == null) {  //only display the script on /habitat-handyman page ?>
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-813537928/Lu9ACMny_n4QiLX2gwM',
      'event_callback': callback
  });
  return false;
}
</script>

<?php } ?>


<style>
h9 {
color:#fff;
}
</style>

</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
