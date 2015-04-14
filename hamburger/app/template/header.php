<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $my_hamburger['title_blog']; ?></title>
    <link rel="stylesheet" href="<?= $path; ?>hamburger/public/css/rrssb.css" />
    <link rel="stylesheet" href="<?= $path; ?>hamburger/public/css/app.css" />
    <script src="<?= $path; ?>hamburger/public/assets/modernizr/modernizr.js"></script>
    <!-- Facebook Open Graph Meta Tags -->
    <meta property="og:title" content="<?= $my_hamburger['title_blog']; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:image" content="<?= $my_hamburger['image']?>" />
    <meta property="og:description" content="<?= $my_hamburger['ads']?>" />
  </head>
  <body>