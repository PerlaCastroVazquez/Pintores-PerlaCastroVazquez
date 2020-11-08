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
  <td class="table-success"><img src="/images/onefrida.jpg" class="img-thumbnail"></td>
  <td class="table-active"><img src="/images/twofrida.jpg" class="img-thumbnail"></td> 
  <td class="table-warning"><img src="/images/fourfrida.jpg" class="img-thumbnail"></td>
  <td class="table-light"><img src="/images/threefrida.jpg" class="img-thumbnail"></td>
</tr>
</table>
<h4>«Me pinto a mí misma porque soy a quien mejor conozco»</h4>
<p class="text-left">(Magdalena Carmen Frida Kahlo; Coyoacán, México, 1907 - id., 1954) Pintora mexicana. Aunque se movió en el ambiente de los grandes muralistas mexicanos de su tiempo y compartió sus ideales, Frida Kahlo creó una pintura absolutamente personal, ingenua y profundamente metafórica al mismo tiempo, derivada de su exaltada sensibilidad y de varios acontecimientos que marcaron su vida.
    <br>A los dieciocho años Frida Kahlo sufrió un gravísimo accidente que la obligó a una larga convalecencia, durante la cual aprendió a pintar, y que influyó con toda probabilidad en la formación del complejo mundo psicológico que se refleja en sus obras. En 1929 contrajo matrimonio con el muralista Diego Rivera; tres años después sufrió un aborto que afectó en lo más hondo su delicada sensibilidad y le inspiró dos de sus obras más valoradas: Henry Ford Hospital y Frida y el aborto, cuya compleja simbología se conoce por las explicaciones de la propia pintora.

También son muy apreciados sus autorretratos, asimismo de compleja interpretación: Autorretrato con monos o Las dos Fridas. Cuando André Breton conoció la obra de Frida Kahlo, afirmó que la mexicana era una surrealista espontánea y la invitó a exponer en Nueva York y París, ciudad esta última en la que no tuvo una gran acogida. Frida nunca se sintió cerca del surrealismo, y al final de sus días rechazó abiertamente que su creación artística fuera encuadrada en esa tendencia.
<br>En su búsqueda de las raíces estéticas de México, rasgo que compartió con Diego Rivera y los muralistas (David Alfaro Siqueiros, José Clemente Orozco), Frida Kahlo realizó espléndidos retratos de niños y obras inspiradas en la iconografía mexicana anterior a la conquista, pero son las telas que se centran en ella misma y en su azarosa vida las que la han convertido en una figura destacada de la pintura mexicana del siglo XX.
<br>La producción de la artista mexicana es un ejemplo de ese tipo de arte que sirve como poderoso instrumento con el que exorcizar la angustia de una realidad hostil. El signo trágico de su existencia, marcada por la lucha contra la enfermedad, había comenzado cuando a los seis años contrajo una poliomielitis que le dejó importantes secuelas. En 1925 sufrió un grave accidente de tráfico que le fracturó la columna vertebral y la pelvis. Además de imposibilitarle tener hijos, el accidente fue la causa de numerosas operaciones futuras y de una salud siempre precaria.

A través de la pintura, que empezó a practicar en los largos meses de inmovilidad tras el accidente, Frida Kahlo reflejaría de forma soberbia la colisión entre su ansia de felicidad y la insistente amenaza de su destrucción, a la vez que conjuraba la dualidad irreductible entre los sueños (de amor, de hijos) y la realidad (dolor e impotencia).
</p>
    @stop
    
@section('footer')
    @parent
@stop