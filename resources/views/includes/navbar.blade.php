<nav >
    
    @section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" >P I N T O R E S</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{action('EstructurasDeControl@plantilla')}}"> INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Salvador')}}">Salvador Dali</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Vincent')}}">Vincent Van Gogh</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Leonardo')}}">Leonardo Da Vinci</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('Pablo')}}">Pablo Picasso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Frida')}}">Frida Kahlo</a>
      </li> </ul>
  </div> </nav>
    @show
</nav>


   
  