@extends('layouts.master')
@section('title', 'Salvador')
@section('header')
<h1> {{$header}} </h1>
 @stop

 @section('navbar')
 @parent
 @stop

 @section('content')
 <table>
<tr>
  <td class="table-success"><img src="/images/twop.jpg" class="img-thumbnail"></td>
  <td class="table-active"><img src="/images/onep.jpg" class="img-thumbnail"></td> 
  <td class="table-warning"><img src="/images/threep.jpg" class="img-thumbnail"></td>
  <td class="table-light"><img src="/images/fivep.jpg" class="img-thumbnail"></td>
</tr>
</table>
<h4>«Pintar es otra manera de llevar un diario»</h4>
<p class="text-left">Hijo del también artista José Ruiz Blasco, en 1895 se trasladó con su familia a Barcelona, donde el joven pintor se rodeó de un grupo de artistas y literatos, entre los que cabe citar a los pintores Ramón Casas y Santiago Rusiñol, con quienes acostumbraba reunirse en el bar Els Quatre Gats. Entre 1901 y 1904, Pablo Picasso alternó su residencia entre Madrid, Barcelona y París, mientras su pintura entraba en la etapa denominada período azul, fuertemente influida por el simbolismo. En la primavera de 1904, Picasso decidió trasladarse definitivamente a París y establecerse en un estudio en las riberas del Sena.
En la capital francesa trabó amistad, entre otros, con los poetas Guillaume Apollinaire y Max Jacob y con el dramaturgo André Salmon; entre tanto, su pintura experimentó una nueva evolución, caracterizada por una paleta cromática tendente a los colores tierra y rosa (período rosa). Al poco de llegar a París entró en contacto con personalidades periféricas del mundillo artístico y bohemio, como los hermanos estadounidenses Leo y Gertrude Stein, o el que sería ya para siempre su marchante, Daniel-Henry Kahnweiler.
<br>A finales de 1906, Pablo Picasso empezó a trabajar en una composición de gran formato que iba a cambiar el curso del arte del siglo XX: Les demoiselles d'Avignon. En esta obra cumbre confluyeron numerosas influencias, entre las que cabe citar como principales el arte africano e ibérico y elementos tomados de El Greco y Cézanne. Bajo la constante influencia de este último, y en compañía de otro joven pintor, Georges Braque, Pablo Picasso se adentró en una revisión de buena parte de la herencia plástica vigente desde el Renacimiento, especialmente en el ámbito de la representación pictórica del volumen. Las tramas geométricas eliminan la profundidad espacial e introducen el tiempo como dimensión al simultanear diversos puntos de vista: era el inicio del cubismo. Entre 1915 y mediados de la década de 1920, Picasso fue abandonando los rigores del cubismo para adentrarse en una nueva etapa figurativista, en el marco de un reencuentro entre clasicismo y el creciente influjo de lo que el artista denominó sus «orígenes mediterráneos». Casado desde 1919 con la bailarina rusa Olga Koklova y padre ya de un hijo, Paulo, Pablo Picasso empezó a interesarse por la escultura a raíz de su encuentro en 1928 con el artista catalán Julio González; entre ambos introdujeron importantes innovaciones, como el empleo de hierro forjado. En 1935 nació su hija Maya, fruto de una nueva relación sentimental con Marie-Therèse Walter, con quien Pablo Picasso convivió abiertamente a pesar de seguir casado con Olga Koklova; a partir de 1936, ambas debieron compartir al pintor con una tercera mujer, la fotógrafa Dora Maar.
n la década de 1950 realizó numerosas series sobre grandes obras clásicas de la pintura, que reinterpretó a modo de homenaje. En 1961 Pablo Picasso contrajo segundas nupcias con Jacqueline Roque; sería su última relación sentimental de importancia. Convertido ya en una leyenda en vida y en el epítome de la vanguardia, el artista y Jacqueline se retiraron al castillo de Vouvenargues, donde el creador continuó trabajando incansablemente hasta el día de su muerte.</p>
    @stop
    
@section('footer')
    @parent
@stop