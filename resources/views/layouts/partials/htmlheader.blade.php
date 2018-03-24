<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="{{ LAConfigs::getByKey('site_description') }}">
<meta name="author" content="Dwij IT Solutions">

<meta property="og:title" content="{{ LAConfigs::getByKey('sitename') }}" />
<meta property="og:type" content="website" />
<meta property="og:description" content="{{ LAConfigs::getByKey('site_description') }}" />
    
<meta property="og:url" content="http://laraadmin.com/" />
<meta property="og:sitename" content="laraAdmin" />
<meta property="og:image" content="http://demo.adminlte.acacha.org/img/LaraAdmin-600x600.jpg" />
    
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@laraadmin" />
<meta name="twitter:creator" content="@laraadmin" />
    
<title>{{ LAConfigs::getByKey('sitename') }}</title>

<!-- Fonts Online -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Style Sheet -->
<link rel="stylesheet" href="{{ asset('socio-assets/css/owl.carousel.css') }}">

<link rel="stylesheet" href="{{ asset('socio-assets/css/main-style.css') }}">
<link rel="stylesheet" href="{{ asset('socio-assets/css/style.css') }}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  
    @stack('styles')
</head>

