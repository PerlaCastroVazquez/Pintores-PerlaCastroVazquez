@extends('layouts.master')
@section('title', 'Login').
@section('header')
@parent
@stop
 @section('navbar')
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" >P I N T O R E S</a>
 @stop

 @section('content')
 <form action="{{action('EstructurasDeControl@validarLogin')}}" method="post" >
     {{csrf_field()}}
<label for="user">Usuario</label>
<input type="text" name="user">
<br>
<label for="password">Password</label>
<input type="password" name="password">
<br>
<label for="key">Key</label>
<input type="text" name="key">
<br>
<input type="submit" value="submit">
</form>
    @stop

@section('footer')
@parent
@stop


