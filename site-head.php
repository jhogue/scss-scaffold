<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7">    <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9 ie8">           <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10 ie9">                  <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js gte-ie10" lang="en">       <!--<![endif]-->

<?php
    /* Some best practices borrowed from https://github.com/h5bp/mobile-boilerplate
     * Others from https://github.com/h5bp/html5-boilerplate
     *
     * More about the various meta tags that a site can support:
     * https://github.com/h5bp/html5-boilerplate/blob/master/doc/extend.md
     * https://gist.github.com/brianblakely/581868
     */
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<link rel="prefetch" href="//fonts.googleapis.com/">-->
<?php 
    /* More on IE/Metro when sites need to use plugins, like Flash (only IE10 Desktop supports them): 
     * https://github.com/h5bp/html5-boilerplate/blob/master/doc/extend.md#internet-explorer
     *
     * Following is meta for mobile devices. 
     * The first is actually the name of the "pinned" app in Win Metro, and the second is a site description.
     */
?>
    <meta name="application-name" content="Scaffold">
    <meta name="apple-mobile-web-app-title" content="Scaffold">
    <meta property="og:site_name" content="Scaffold">
    <meta property="og:type" content="website">
    <meta name="msapplication-tooltip" content="A description of what this site does.">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=yes">
    <meta http-equiv="imagetoolbar" content="false"><?php // Kills IE6's images toolbar. Still useful. ?>
    
    <script src="js/libs/modernizr.js"></script>
<?php
    /* Use Moderizr! But be sure to create a production version with only the test the site needs:
     * Bootstrap includes the FULL development version with lotsa tests
     *
     * We serve one @media enabled stylesheet to ALL browsers except < IE9
     * Non @media enabled phones and devices might still get the mq.css, but the bulk of browsers on the market 
     * that do not support @media – IE 6, 7 and 8 – will not. 
     *
     * We include the link for Google fonts here, as they DO NOT work in < IE9. 
     * Download the EOT files and serve them if you need to support them < IE9.
     */
?>
    
    <!--[if (gte IE 9) | (IEMobile)]><!-->
    <link href="stylesheets/mq.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet'>
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link href="stylesheets/no-mq.css" rel="stylesheet">
    <![endif]-->

<?php
    /* If this is a site with lots of javascript/AJAX and styles that need to apply to those elements, 
     * why not load a stylesheet only when JS is available? Instead of .js & .no-js styles both being downloaded. 
     * <script>document.write('<link rel="stylesheet" href="stylesheets/enhanced.css">');</script>
    
    Favicon and icons:
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57.png">
    <link rel="apple-touch-icon" href="apple-touch-icon-57.png">

    Tile icon and colors for Win8 Metro. Needs a 144x144px transparent PNG icon, best in white only
    <meta name="msapplication-TileImage" content="metro-icon-144.png">
    
    Set the background color of the tile with HTML
    <meta name="msapplication-TileColor" content="#003F87">
    
    Best to set the same color as the "pinned" app bar color
    <meta name="msapplication-navbutton-color" content="#003F87">
    
     * More info on pinned sites: https://github.com/h5bp/html5-boilerplate/blob/master/doc/extend.md#ie-pinned-sites-ie9
     */
?>

    <title>Page title</title>
        
    <meta name="keywords" content="">
    <meta name="description" content="">
    
<?php /* 
    
    Additional Open Graph tags
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    
    Author Profile URL
    <meta property="og:article:author" content="">
    
    Tag words associated with this article, optional. Need to use one per tag. 
    <meta property="article:tag" content="">
    
    A high-level section name. e.g. Technology, optional
    <meta property="article:section" content="">
    
    Pub times. Need to be in RFC format, like shown
    <meta property="article:published_time" content="2015-01-15T12:20:06+00:00">
    <meta property="article:modified_time" content="2015-01-19T18:31:55+00:00">
    
    A path to an image used on the page. Helpful for telling crawlers what image to use for a page preview. One image URL per tag. 
    <meta property="og:image" content=""> 
    <meta property="og:video" content="">
    
    Need to support Twitter cards? More info about that here:
    https://github.com/h5bp/html5-boilerplate/blob/master/doc/extend.md#twitter-cards
     
    https://dev.twitter.com/docs/cards/markup-reference
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@username">
    <meta name="twitter:creator" content="@username">
    <meta name="twitter:title" content="70 chars max, same as og:title if present">
    <meta name="twitter:description" content="200 chars max, same as og:description if present">
    
    Do you have a humans.txt file for site credits? 
    <link rel="author" href="humans.txt">
    
    Direct search engines to your sitemap: 
    <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
    
    RSS/Atom feeds:
    <link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml">
    <link rel="alternate" type="application/atom+xml" title="Atom" href="/atom.xml">
    
    Does this site have its own search appliance? Maybe a browser search plugin would be nice: 
    <link rel="search" title="" type="application/opensearchdescription+xml" href="">
    
    A canonical URL for this page, if this page's content is a duplicate of another found at a different URL
    <link rel="canonical" href="//www.example.com/example/page/">
    <meta property="og:url" content="//www.example.com/example/page/">
    
    Hey everybody, there is a shortlink version of this page! 
    <link rel="shortlink" href="">
    
    Have a web app? Unobtrusively tell users where to get it: 
    <meta name="apple-itunes-app" content="app-id=APP_ID,app-argument=SOME_TEXT">
     */
?>
    
</head>

<body class="<?php echo $page ?>">
    
    
    <!-- Header elements -->
    <header class="main-header">
        <div class="container">

            <h1 class="main-header--title">Scaffold</h1>
            
            <!-- Allow Screen readers (hidden for all others) to skip the navigation and get to the main content -->
            <div class="skip-link screen-reader-text">
                <a href="#content" title="Skip to content">Skip to content</a>
            </div>
                        
        </div><!-- end .container -->
    </header>
    
    <nav class="mainnav mainnav__header">
        <ul class="mainnav--list">
            <li><a href="index.php" class="mainnav--link">Read Me</a></li>
            <li><a href="style-guide.php" class="mainnav--link">Style Guide</a></li>
            <li><a href="vert-ryhthm.php" class="mainnav--link">Vertical Rhythm Sample</a></li>
            <li><a href="grid-sample.php" class="mainnav--link">Grid Sample</a></li>
            <li><a href="fixed-col.php" class="mainnav--link">Fixed Col/Fluid Neighbor</a></li>
            <li><a href="forms.php" class="mainnav--link">Form Sample</a></li>
        </ul>
    </nav>