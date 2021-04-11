<html>
<head>
<title> Localization </title>
<mete cgarset="utf-8">

<link rel="Stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery.min,js"></script>
</head>

<body>
<div id="app">
<div style ="background-color: #343a46;">
<nav class="navbar navbar - extend- lg navbar-dark bg-dark container">
<u1 class ="navbar-nav ml-auto">
@php $locale =session () -> get('locale'); @endphp
<li class ="nav -item dropdown">
<a id= "navbarDropdown" class= "nav-link dropdown -toggle"
href="#"role="button"
data-toggle="dropdown" aria-haspopup ="true"
aria-expanded="false" v-pre>
@switch($locale)
@case('en')
<img width="20" src="{{asset('img/en.png')}}">
English 
@break 
@case('kaz')
<img width="20" src="{{asset('img/kaz.png')}}">
Kазақ Тілі 
@braek 
@case('ry')
<img width="20" src="{{asset('img/ru.png')}}">
Русский язык
@break
@default
<img width="20" src="{{asset('img/kz.png')}}">
Қазақ тілі 

@endswitch
<span class="caret"></span>
</a>
<div class ="dropdowm-menu dropdown-menu-right"
aria-labelledby="navbarDropdown">
<a class ="dropdown-item" href="en"><img width="20" src="{{asset('img/en.png')}}">English</a><br>
<a class ="dropdown-item" href="kaz"><img width="20" src="{{asset('img/kz.png')}}">Қазақ тілі</a><br>
 <a class ="dropdown-item" href="ru"><img width="20" src="{{asset('img/ru.png')}}">Pусский язык</a><br>
 
 </div>
</li>
</ul>
</div>
</nav>
<main class="py-4">
@yield('content')
</main>
</div>
</body>
</html>
 
