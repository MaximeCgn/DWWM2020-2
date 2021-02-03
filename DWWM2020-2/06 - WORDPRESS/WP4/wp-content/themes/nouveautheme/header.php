<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content=""> <meta name="author" content="">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
<link href="//db.onlinewebfonts.com/c/3155bb9a43a1e1349fde80b0116fe6cd?family=Charlemagne+Std" rel="stylesheet" type="text/css"/>
<title>Nouveau Thème de Maxime</title>
<!-- CSS de Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
<link href= "<?php echo get_stylesheet_directory_uri() . "/style.css" ?>" rel="stylesheet">
<!-- Ajout d'une nouvelle feuille de style qui sera spécifique à nos blogs -->
<link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">
<!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour les versions plus anciennes que Internet Explorer 9 -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
</script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head();?>
</head>
<body class="colonne"> 
<div class="header"> 
<div class="container contenuPrincipal">

<nav id="navigation-principale" role="navigation">
<div id="backButton">RETOUR</div>   
<div class="centrer">
<?php wp_nav_menu(array('theme_location'=>'menu-principal'));?>
</div>
<div></div>
</nav>
</div>
</div>
<div class="container contenumilieu colonne">
<div class="blog-header"> 
<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p> 
</div>