@extends('layouts.master')
@section('title', 'Login').
@section('header')
@parent
{{$key}}
<br>
{{$user}}
@stop

 @section('navbar')
 @parent
 @stop

 @section('content')
 <h1> Login Exitoso </h1>

 <h4>"LA PINTURA ES POESIA MUDA"</h4>
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="/images/dali.jpg" class="card-img-top" alt="Dali">
      <div class="card-body">
        <h5 class="card-title">Salvador Dalí</h5>
        <p class="card-text">(Figueres, Gerona, 1904 - 1989) Pintor español.</p>
        <a href="{{route('Salvador')}}" class="btn btn-primary">Ir</a>    
     </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/vangogh.jpg" class="card-img-top" alt="Vincent">
      <div class="card-body">
        <h5 class="card-title">Vincent van Gogh</h5>
        <p class="card-text">(Groot-Zundert de Holanda, 1853 - 1890)Vincent van Gogh, por quien el color era el símbolo principal de expresión. </p>
        <a href="{{route('Vincent')}}" class="btn btn-primary">Ir</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/picasso.jpg" class="card-img-top" alt="Picasso">
      <div class="card-body">
        <h5 class="card-title">Pablo Picasso</h5>
        <p class="card-text">(Málaga, 1881 - 1973)Protagonista y creador inimitable de las diversas corrientes que revolucionaron las artes plásticas del siglo XX</p>
        <a href="{{route('Pablo')}}" class="btn btn-primary">Ir</a>
      </div> </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/davinci.jpg" class="card-img-top" alt="Da Vinci">
      <div class="card-body">
        <h5 class="card-title">Leonardo Da Vinci</h5>
        <p class="card-text">(Anchiano, Italia, 1452 - 1519)Polímata florentino del Renacimiento italiano.</p>
        <a href="{{route('Leonardo')}}" class="btn btn-primary">Ir</a>
        </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/frida.jpg" class="card-img-top" alt="Frida Kahlo">
      <div class="card-body">
        <h5 class="card-title">Frida Kahlo</h5>
        <p class="card-text">(Coyoacán, Ciudad de México, 1907 - 1954)Pintora Mexicana.</p>
        <a href="{{route('Frida')}}" class="btn btn-primary">Ir</a>
        </div>
    </div>
  </div>
</div>
    @stop

    @section('footer')
   @parent
    @stop


