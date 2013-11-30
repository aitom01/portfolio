<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $config->urls->root; ?>" />
    <meta charset="utf-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo $browserDescription; ?>" />
    <meta name="keywords" content="<?php echo $browserKeywords; ?>" />
    <meta name="author" content="Tomas Pokorny, developer@aitom.net" />
    <link rel="shortcut icon" href="site/templates/styles/fav3.ico"/>
    <title><?php echo $browserTitle; ?></title>
    <link href="site/templates/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="site/templates/scripts/fancybox/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css" media="screen" />
    <link href="site/templates/styles/main.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'/>  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="page">
      <!-- Fixed navbar -->
      <header>
        <div class="container">
          <div class="row">
            <h1 class="col-sm-6 col-xs-12"><a href="<?php echo $config->urls->root; ?>"><?php echo $homepage->title; ?></a><span class="visible-desktop visible-tablet"><?php echo $page->headline; ?></span></h1>
            <div class="visible-xs clearfix"></div>
            <nav class="navbar navbar-default col-sm-6" role="navigation">
              <ul class="nav navbar-nav navbar-right">
<?php
foreach($homepage->children as $child) {
  $active='';
  if($page->name==$child->name) $active = " class='active'";
  echo "<li{$active}><a{$active} href='{$child->url}'>{$child->title}</a></li>\n";
}
?>
              </ul>
            </nav>
          </div>
        </div>
      </header>

      <main id="content"><?php echo $content; ?>

      </main>
      <footer id="footer" class="container">
        <div>
          <address>
          <ul>
            <li><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:<?php echo $homepage->email_address; ?>"><?php echo $homepage->email_address; ?></a></li>
            <li><span class="glyphicon glyphicon-phone"></span> <?php echo $homepage->phone_number; ?></li>
            <li><span class="glyphicon glyphicon-map-marker"></span> <?php echo $homepage->location; ?></li>
          </ul>
          </address>
        </div>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="site/templates/bootstrap/js/bootstrap.min.js"></script>
    <script src="site/templates/scripts/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script src="site/templates/scripts/main.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46114941-1', 'aitom.net');
      ga('send', 'pageview');

    </script>
  </body>
</html>
