@extends('layouts.master')
@section('title', 'Perlita')
@section('header')
<h1> {{$header}} </h1>
 @stop

 @section('navbar')
 @parent
 @stop

 @section('content')
 <table>
<tr>
  <td class="table-active"><img src="/images/oneda.jpg" class="img-thumbnail"></td> 
  <td class="table-success"><img src="/images/twoda.jpg" class="img-thumbnail"></td>
  <td class="table-info"><img src="/images/fourda.jpg" class="img-thumbnail"></td>
  <td class="table-danger"><img src="/images/fiveda.jpg" class="img-thumbnail"></td>
</tr>
</table>
<h4>«Una obra de arte nunca se termina, solo se abandona»</h4>

<p class="text-left">Leonardo da Vinci era hijo ilegítimo de un abogado florentino, quien no le permitió conocer a su madre, una modesta campesina. Se formó como artista en Florencia, en el taller de Andrea del Verrocchio; pero gran parte de su carrera se desarrolló en otras ciudades italianas como Milán (en donde permaneció entre 1489 y 1499 bajo el mecenazgo del duque Ludovico Sforza, llamado el Moro) o Roma (en donde trabajó para Julio de Médicis). Aunque practicó las tres artes plásticas, no se ha conservado ninguna escultura suya y parece que ninguno de los edificios que diseñó llegó a construirse, por lo que de su obra como escultor y arquitecto sólo quedan indicios en sus notas y bocetos personales.Todas sus obras son composiciones muy estudiadas, basadas en la perfección del dibujo y con un cierto halo de misterio, en las que la gradación del color contribuye a completar el efecto de la perspectiva; en ellas introdujo la técnica del sfumato, que consistía en prescindir de los contornos nítidos de la pintura del «Quattrocento» y difuminar los perfiles envolviendo las figuras en una especie de neblina característica. El propio Leonardo teorizó su concepción del arte pictórico como «imitación de la naturaleza» en un Tratado de pintura que sólo sería publicado en el siglo XVII.
Interesado por todas las ramas del saber y por todos los aspectos de la vida, los apuntes que dejó Leonardo (escritos de derecha a izquierda y salpicados de dibujos) contienen también incursiones en otros terrenos artísticos, como la música (en la que destacó tocando la lira) o la literatura. Según su criterio no debía existir separación entre el arte y la ciencia, como no la hubo en sus investigaciones, dirigidas de forma preferente hacia temas como la anatomía humana (avanzando en el conocimiento de los músculos, el ojo o la circulación de la sangre), la zoología (con especial atención a los mecanismos de vuelo de aves e insectos), la geología (con certeras observaciones sobre el origen de los fósiles), la astronomía (terreno en el que se anticipó a Galileo al defender que la Tierra era sólo un planeta del Sistema Solar), la física o la ingeniería.
<br>En este último terreno fue donde quedó más patente su talento de precursor a juicio de las generaciones posteriores, ya que Leonardo da Vinci concibió multitud de máquinas que no dio a conocer entre sus contemporáneos y que la técnica ha acabado por convertir en realidad siglos más tarde: aparatos de navegación (como un submarino, una campana de buceo y un salvavidas), máquinas voladoras (como el paracaídas, una especie de helicóptero y unas alas inspiradas en las de las aves para hacer volar a un hombre), máquinas de guerra (como un puente portátil y un anticipo del carro de combate del siglo XX), obras de ingeniería civil (como canalizaciones de agua o casas prefabricadas), herramientas y maquinaria de tipo industrial (como una hiladora, una laminadora, una draga o una cortadora de tornillos), fortificaciones, etcétera.
Sin embargo, el genio de Leonardo le encaminó a tal cantidad de objetivos diferentes que apenas ejerció influencia sobre la marcha de los distintos campos que tocó, aunque sí obtuvo un gran prestigio personal, que ha perdurado hasta nuestros días. Muchos de los proyectos que emprendió quedaron inacabados cuando otros nuevos atrajeron su interés; y, en cuanto a los inventos, se limitó a concebir ideas útiles, pero no se esforzó por plasmarlas en modelos viables que pudieran funcionar, por lo que la mayoría de sus investigaciones fueron especulaciones teóricas sin consecuencias prácticas. En ellas se concentró a partir de 1516 cuando, con las manos afectadas por una parálisis, pasó a vivir en Francia bajo la protección del rey Francisco I.</p>
    @stop

    @section('footer')
    @parent
    @stop
