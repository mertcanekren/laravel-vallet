<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kasa</title>
	{{ HTML::style('theme/css/bootstrap.css') }}
</head>
<body>
<div class="container">
    <div class="navbar navbar-default" role="navigation" style="margin-top: 20px">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			  {{ HTML::link('/', 'Kasa', array('class' => 'navbar-brand')) }}
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>{{ HTML::link(URL::route('home'), 'Hareketler') }}</li>
                <li>{{ HTML::link(URL::route('newrow'), 'Yeni Hareket Ekle') }}</li>
            </ul>
        </div>
    </div>
	@yield('content')
    {{ HTML::script('theme/js/jquery.js') }}
    {{ HTML::script('theme/js/bootstrap.min.js') }}
</body>
</html>
