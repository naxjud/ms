<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Plushiness 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131117

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="{{asset('css/default.css')}}" rel="stylesheet" />
<link href="{{asset('css/fonts.css')}}" rel="stylesheet" />
<!--link href="css/app.css" rel="stylesheet" /-->

@yield('head')

</head>
<body>
    @yield('header')
    <div id="menu-wrapper">
		<div id="menu">
			<ul>
            <li class="{{Request::path() === '/'? 'current_page_item':''}}"><a href="{{url('/')}}" accesskey="1" title="">Homepage</a></li>
				<li class="{{Request::path() === 'client'? 'current_page_item':''}}"><a href="client" accesskey="2" title="">Our Clients</a></li>
				<li class="{{Request::path() === 'about'? 'current_page_item':''}}"><a href="about" accesskey="3" title="">About Us</a></li>
				<li class="{{Request::is('articles')? 'current_page_item':''}}"><a href="{{url('articles')}}" accesskey="4" title="">Articles</a></li>
				<li class="{{Request::is('contact')? 'current_page_item':''}}"><a href="contact" accesskey="5" title="">Contact</a></li>
			</ul>
        </div>
    </div>
    @yield('content')
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
</body>
</html>
