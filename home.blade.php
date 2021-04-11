@extends('layout')
@section('content')
<div class="container">
<h1 class= "display-4 text-center" style="font-size: 3.0 
rem">{{_('lang.welcome', ['Name' => 'Aizhan'])}}</h1>

<h3 class= "display-4 text-center" style="font-size: 2.0 
rem">{{_('lang.title')}}</h3>

<h4 class= "display-4 text-center" style="font-size: 1.5 
rem">{{_("lang.body")}}</h4>

<br><br>
<<h4 class= "display-4 text-center" style="font-size: 1.5 
rem">{{_("smth")}}</h4>
</div>
@endsection

