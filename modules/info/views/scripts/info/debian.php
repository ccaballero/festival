<h1>Acerca de Debian</h1>

<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("body").css("background-image", "url('<?php echo $this->config->wwwroot ?>media/background/debian.png')");
    });
</script>

<p><span class="bold">Fuente: </span><a href="http://www.debian.org/intro/about.es.html">debian.org</a></p>

<ul class="toc">
    <li><a href="#what">¿Qué es Debian?</a></li>
    <li><a href="#free">¿Todo esto es gratis?</a></li>
    <li><a href="#CD">Ustedes dicen gratis, ¡pero los CDs y el ancho de banda cuestan dinero!</a></li>
    <li><a href="#disbelief">La mayoría del software cuesta cientos de dólares/euros. ¿Cómo es que ustedes lo regalan?</a></li>
    <li><a href="#hardware">¿Qué hardware se encuentra soportado?</a></li>
    <li><a href="#info">Antes de decidirme, necesito más información.</a></li>
    <li><a href="#why">Aún no estoy convencido. ¿Cuáles son los pros y contras de Debian?</a></li>
    <li><a href="#install">¿Cómo puedo conseguir Debian?</a></li>
    <li><a href="#support">No puedo instalarlo todo yo solo. ¿Dónde puedo obtener soporte para Debian?</a></li>
    <li><a href="#who">De todos modos, ¿quiénes son todos ustedes?</a></li>
    <li><a href="#users">¿Quién usa Debian?</a></li>
    <li><a href="#history">¿Cómo empezó todo esto?</a></li>
</ul>

<h2><a name="what">¿Qué es Debian?</a></h2>
<p>El <a href="http://www.debian.org/">Proyecto Debian</a> es una asociación de
personas que han hecho causa común para crear un sistema operativo
(SO) <a href="http://www.debian.org/intro/free">libre</a>. Este sistema operativo que hemos creado
se llama <strong>Debian GNU/Linux</strong>, o simplemente
<strong>Debian</strong> para acortar.</p>

<p>Un sistema operativo es un conjunto de programas y utilidades
básicas que hacen que su computadora funcione. El centro de un sistema
operativo es el núcleo (N. del T.: kernel). El núcleo es el programa
más importante en la computadora, realiza todo el trabajo básico y le
permite ejecutar otros programas.</p>
<p>Los sistemas Debian actualmente usan el núcleo de <a
href="http://www.kernel.org/">Linux</a>. Linux es una pieza de
software creada en un principio por <a
href="http://www.cs.helsinki.fi/u/torvalds/">Linus Torvalds</a> y
soportada por miles de programadores a lo largo del mundo.</p>
<p>Sin embargo, se está trabajando para ofrecer Debian con otros
núcleos, en especial con <a
href="http://www.gnu.org/software/hurd/hurd.html">el Hurd</a>.
El Hurd es una colección de servidores que se ejecutan sobre un
micronúcleo (como Mach) para implementar las distintas
funcionalidades. El Hurd es software libre producido por el <a
href="http://www.gnu.org/">proyecto GNU</a>.</p>
<p>Una gran parte de las herramientas básicas que completan el sistema
operativo, vienen del <a href="http://www.gnu.org/">proyecto GNU</a>;
de ahí los nombres: GNU/Linux y GNU/Hurd. Estas herramientas también
son libres.</p>

<p>Desde luego, lo que la gente quiere es el software de aplicación:
herramientas que los ayuden a realizar lo que necesiten hacer, desde
editar documentos, ejecutar aplicaciones de negocios hasta divertirse
con juegos y escribir más software. Debian viene con más de
29000 <a href="http://www.debian.org/distrib/packages">paquetes</a>
(software precompilado y empaquetado en un formato amigable para
una instalación sencilla en su máquina) &mdash; todos ellos de forma
<a href="http://www.debian.org/intro/free">gratuita</a>.</p>
<p>Es un poco como una torre. En la base está el núcleo. Encima se
encuentran todas las herramientas básicas. Después está todo el
software que usted ejecuta en su computadora. En la cima de la torre
se encuentra Debian &mdash; organizando y encajando todo
cuidadosamente para que todo el sistema trabaje junto.</p>
<h2><a name="free">¿Todo esto es gratis?</a></h2>
<p>Usted puede preguntarse: ¿por qué gastará la gente horas de su
propio tiempo escribiendo software, empaquetándolo cuidadosamente, y
luego <EM>regalándolo</EM>? Las respuestas son tan variadas como la
gente que contribuye. A algunas personas les gusta ayudar a otras.
Muchas escriben programas para aprender más acerca de los
computadores. Más y más personas están buscando maneras de evitar los
precios inflados del software.
Un grupo creciente contribuye como un agradecimiento por todo el
excelente software libre y gratuito que ha recibido de otros.
En las instituciones académicas muchos crean software libre para
ayudar a obtener los resultados de sus investigaciones en un uso más
amplio.
Las empresas ayudan a mantener el software libre para poder observar
cómo se desarrolla éste, ¡no hay una manera más rápida de
obtener una nueva característica que implementarla uno mismo!
Desde luego, muchos de nosotros sólo lo encontramos divertido.</p>

<p>Debian está tan comprometido con el software libre que pensamos que
sería útil que ese compromiso se encontrara formalizado en algún tipo
de documento. Por ello nació nuestro <a
href="http://www.debian.org/social_contract">Contrato Social</a>.</p>
<p>Aunque Debian cree en el software libre, existen casos en los que
la gente quiere o necesita disponer de software que no es libre en sus
máquinas. Siempre que sea posible, Debian respaldará ésto. Hay un
número creciente de paquetes que tienen como única misión instalar
software que no es libre en un sistema Debian.</p>
<h2><a name="CD">¿Gratis? ¡Pero los CDs y el ancho de banda cuestan
dinero!</a></h2>
<p>Usted podría estar preguntándose: si el software es gratuito, ¿por
qué tengo que pagar a un vendedor por un CD, o pagar a un ISP (un
proveedor de Internet) para descargarlo?
Cuando compra un CD, está pagando por el tiempo de alguien, por la
inversión hecha para crear los CDs, y el riesgo (en caso de que no los
pueda vender todos). En otras palabras, está pagando por el medio
físico usado para distribuir el software, no por el software en sí.</p>
<p>Cuando usamos el término «libre», nos referimos a la libertad del
software, no a que tenga que ser gratuito (N. del T.: en inglés,
«free» es sinónimo de «gratuito» y de «libre»). Puede leer más sobre
<a href="http://www.debian.org/intro/free">lo que consideramos software libre</a> y <a
href="http://www.gnu.org/philosophy/free-sw.html">qué dice la
Fundación para el Software Libre</a> a este respecto.</p>

<h2><a name="disbelief">La mayoría del software cuesta cientos de
dólares/euros. ¿Cómo es que ustedes lo regalan?</a></h2>
<p>Una pregunta mejor es, ¿cómo hacen las compañías de software para
venderlo a un precio tan alto? Crear software no es como hacer coches.
Una vez que se ha conseguido una copia del software, los costes de
producción por hacer un millón más son mínimos (he ahí una buena razón
por la que Microsoft tiene tantos miles de millones en el banco).</p>
<p>Mírelo de ésta otra forma: si usted tiene un surtido interminable
de arena en su patio trasero, podría estar deseando regalar arena. Sin
embargo, sería tonto pagar un camión para que se la lleve a otras
personas. Usted los haría venir y que se la llevasen ellos mismos
(equivalente a obtenerla de la red) o ellos podrían pagar a alguien
para que se la llevara hasta su puerta (equivalente a comprar un CD).
Así es exactamente cómo opera Debian y el por qué de que la mayoría de
CDs/DVDs sean tan baratos (sólo $12 USA por 4 DVDs).</p>
<p>Debian no gana ningún dinero de la venta de CDs. A la vez, se
necesita dinero para pagar gastos como el registro del dominio y el
hardware. Por ello, le pedimos que compre a uno de los <a
href="http://www.debian.org/CD/vendors/">fabricantes de CDs</a> que <a
href="http://www.debian.org/donations">donan</a> una porción de su compra a Debian.</p>
<h2><a name="hardware">¿Qué hardware se encuentra soportado?</a></h2>
<p>Debian funcionará en casi todos los ordenadores personales,
incluyendo la mayoría de los modelos más antiguos. Cada nueva versión
de Debian generalmente soporta un mayor número de arquitecturas de
ordenadores. Si quiere una lista completa de las que se soportan
actualmente, vea la <a
href="http://www.debian.org/releases/stable/">documentación para la versión estable</a>.</p>

<p>Casi todo el hardware común está soportado.
Si desea asegurarse de que todos los dispositivos conectados a su
máquina están soportados, vea el <a
href="http://www.tldp.org/HOWTO/Hardware-HOWTO/">CÓMO de la
Compatibilidad de Hardware en Linux (Linux Hardware
Compatibility HOWTO)</a>.</p>
<p>Existen algunas compañías que hacen difícil el soporte al no
publicar las especificaciones de su hardware. Esto quiere decir que
a lo mejor no pueda usar su hardware con GNU/Linux. Algunas compañías
proporcionan drivers que no son libres, pero eso es un problema, porque
la compañía podría quebrar o dejar de dar soporte a su hardware.
Recomendamos que sólo adquiera hardware de fabricantes que proporcionen
controladores <a href="http://www.debian.org/intro/free">libres</a> para sus productos.</p>
<h2><a name="info">Estoy buscando más información</a>.</h2>
<p>Usted puede mirar nuestras <a href="http://www.debian.org/doc/FAQ/">FAQ</a>.</p>
<h2><a name="why">Aún no estoy convencido</a>.</h2>

<p>No tiene por qué fiarse de nosotros - pruebe Debian usted mismo.
Ya que el espacio en disco duro se ha vuelto menos caro,
posiblemente pueda disponer de unos 2 GB.
Si no quiere un escritorio gráfico, o no lo necesita, 600 MB son suficientes.
Debian puede instalarse
fácilmente en este espacio adicional y puede coexistir con su sistema
operativo actual. Si necesita eventualmente más espacio, puede
simplemente borrar uno de los sistemas operativos (y después de que
vea la potencia de un sistema Debian, confiamos en que no borrará
Debian).</p>
<p>Como probar un sistema operativo nuevo le requerirá algo de su
valioso tiempo, es entendible que usted pueda tener sus reservas.
Por esta razón, hemos resumido una lista de <a
href="http://www.debian.org/intro/why_debian">pros y contras de Debian</a>. Esto debería
ayudarle a decidir si vale la pena. Esperamos que aprecie nuestra
honestidad y franqueza.</p>
<h2><a name="install">¿Cómo puedo conseguir Debian?</a></h2>
<p>Lo más popular es instalar Debian desde un CD que haya comprado al
precio del propio medio en uno de nuestros varios distribuidores de CD.
Puede descargar e instalar Debian mediante Internet si dispone de un buen
acceso a Internet.</p>
<p>Por favor, lea <a href="http://www.debian.org/distrib/">nuestra página sobre cómo obtener
Debian</a> si desea más información.</p>
<p>Si todavía no lo ha hecho, puede primero echar un vistazo al
<a href="http://www.tldp.org/HOWTO/Hardware-HOWTO/">CÓMO de
Compatibilidad de Hardware de Linux (Linux Hardware Compatibility
HOWTO)</a>.</p>

<p>No olvide mirar la lista de <a
href="http://www.debian.org/distrib/packages">paquetes</a>
que ofrecemos (esperamos que no le intimide el gran número de ellos).</p>
<h2><a name="support">No puedo instalarlo todo yo sólo. ¿Dónde puedo
obtener soporte para Debian?</a></h2>
<p>Puede obtener ayuda leyendo la documentación disponible tanto en el
sitio web como en paquetes que puede instalar en su sistema. También puede
ponerse en contacto con nosotros mediante las listas de correo o IRC.
Incluso puede contratar un consultor para que haga el trabajo.</p>
<p>Por favor, lea nuestra <a href="http://www.debian.org/doc/">documentación</a> y nuestras
páginas de <a href="http://www.debian.org/support">soporte</a> si desea más información.</p>

<h2><a name="who">De todos modos, ¿quiénes son todos ustedes?</a></h2>
<p>Debian lo producen cerca de un millar de
<a href="http://www.debian.org/devel/people">desarrolladores</a> activos, dispersos
<a href="http://www.debian.org/devel/developers.loc">por el mundo</a> que ayudan
voluntariamente en su tiempo libre.
Son pocos los desarrolladores que realmente se han encontrado en persona.
La comunicación se realiza principalmente a través de correo electrónico
(listas de correo en lists.debian.org) y
a través de IRC (canal #debian en irc.debian.org).
</p>
<p>El Proyecto Debian tiene una <a href="http://www.debian.org/intro/organization">estructura
organizada</a> cuidadosamente. Si desea más información sobre cómo es
Debian por dentro, siéntase libre de navegar por el
<a href="http://www.debian.org/devel/">rincón del desarrollador</a>.</p>

<h2><a name="users">¿Quién usa Debian?</a></h2>
<p>Aunque no hay disponibles estadísticas precisas (ya que Debian no
requiere que los usuarios se registren), hay signos bastante evidentes
de que Debian lo usan un amplio número de organizaciones, grandes y
pequeñas, así como muchos miles de personas de forma individual. Puede
ver en nuestra página <a href="http://www.debian.org/users/">¿Quién está usando Debian?</a>
una lista de organizaciones de importancia que han enviado una pequeña
descripción de cómo y por qué utilizan Debian.</p>
<h2><a name="history">¿Cómo empezó todo esto?</a></h2>
<p>Debian comenzó en agosto de 1993 gracias a Ian Murdock, como una
nueva distribución que se realizaría de forma abierta, en la línea del
espíritu de Linux y GNU. Debian estaba pensado para ser creada de
forma cuidadosa y concienzuda, y ser mantenida y soportada con el
mismo cuidado. Comenzó como un grupo de pocos y fuertemente unidos
hackers de Software Libre, y gradualmente creció hasta convertirse en
una comunidad grande y bien organizada de desarrolladores y usuarios.
Vea <a href="http://www.debian.org/doc/manuals/project-history/">la historia
detallada</a>.</p>
<p>Ya que mucha gente lo ha preguntado, Debian se pronuncia /&#712;de.bi.&#601;n/.
Viene de los nombres del creador de Debian, Ian Murdock, y de su esposa, Debra.</p>


<h1>Razones para escoger Debian</h1>

<p><span class="bold">Fuente: </span><a href="http://www.debian.org/intro/why_debian.es.html">debian.org</a></p>

<p>Gracias por tomar en cuenta el uso de Debian GNU/Linux en su ordenador.
Si aún no está convencido de por qué debe probar Debian, considere lo siguiente:</p>

<dl>
    <dt><strong>Está mantenida por sus usuarios.</strong></dt>
    <dd>Si algo necesita ser arreglado o mejorado, simplemente lo hacemos.</dd>

    <dt><strong>Soporte incomparable</strong></dt>
    <dd>El correo enviado a las <a href="http://www.debian.org/support#mail_lists">listas de correo</a>
    frecuentemente obtiene respuesta en quince minutos (o menos), gratuitamente, y por
    las personas que lo desarrollaron. Compare ésto al típico soporte telefónico:
    horas gastadas en el teléfono, pagando dinero, sólo para tener a alguien
    que no conoce el sistema lo suficientemente bien como para entender su pregunta.</dd>

    <dt><strong>No estará solo en su elección</strong></dt>
    <dd>Un amplio abanico de organizaciones e individuos usa ya Debian. Vea
    nuestra página <a href="http://www.debian.org/users/">¿Quién está usando Debian?</a> si
    desea una descripción de algunos sitios de perfil alto que usan
    Debian y han decidido enviar una corta descripción de cómo hacen uso
    de Debian y por qué.</dd>

    <dt><strong>El mejor sistema de empaquetamiento de software del mundo</strong></dt>
    <dd>¿Cansado de viejos archivos de software tres versiones anteriores
    al actual desordenando su sistema? ¿O de instalar software sólo para
    encontrar que hace que su sistema se colapse debido a conflictos de
    software? Dpkg, el sólido sistema de empaquetamiento de Debian, se
    encarga de estos asuntos por usted.</dd>

    <dt><strong>Instalación sencilla</strong></dt>
    <dd>Si ha oído que GNU/Linux es difícil de instalar entonces
    no ha probado Debian últimamente. Estamos mejorando constantemente el
    proceso de instalación. Puede realizar la instalación directamente desde
    desde un CD, DOS o discos flexibles o incluso a través de la red.</dd>

    <dt><strong>Increíble cantidad de software</strong></dt>
    <dd>Debian viene con más de <a href="http://www.debian.org/distrib/packages">29000
    elementos de software diferentes</a>. Cada bit de éstos es
    <a href="free">libre</a>.
    Si tiene software propietario que corre bajo GNU/Linux, puede usarlo
    (de hecho, puede que incluso exista un instalador en Debian que
    automáticamente instale y configure todo por usted).</dd>

    <dt><strong>Paquetes bien integrados</strong></dt>
    <dd>Debian sobrepasa a todas las otras distribuciones en lo bien
    integrados que están sus paquetes. Como todo el software lo
    empaqueta un grupo coherente, no sólo puede encontrar todos los
    paquetes en un mismo sitio sino que puede estar seguro de que hemos
    eliminado todos los problemas al respecto de complejas dependencias.
    Aunque creemos que el formato deb tiene algunas ventajas sobre el rpm,
    es la integración entre paquetes lo que hace a Debian más robusto.</dd>

    <dt><strong>Código fuente</strong></dt>
    <dd>Si usted es un desarrollador de software, apreciará el hecho de que
    haya cientos de herramientas y lenguajes de desarrollo, además de millones de
    líneas de código fuente en el sistema base. Todo el software en la distribución
    principal es conforme al criterio de las <a
    href="http://www.debian.org/social_contract#guidelines">Directrices de Software Libre
    de Debian (DFSG)</a>.
    Esto significa que usted puede usar libremente este código para estudiarlo
    o para incorporarlo a un nuevo proyecto de software libre. También hay una
    buena cantidad de herramientas y código apropiado para el uso en proyectos propios.</dd>

    <dt><strong>Actualizaciones fáciles</strong></dt>
    <dd>Actualizarse a una nueva versión de Debian es muy fácil gracias a nuestro
    sistema de empaquetamiento.
    Sólo tiene que ejecutar <tt>apt-get update ; apt-get dist-upgrade</tt>
    (o <tt>aptitude update ; aptitude dist-upgrade</tt>, según la versión)
    y usted puede actualizarse desde un CD en
    cuestión de minutos o configure apt para que utilice alguno de los trescientos
    <a href="http://www.debian.org/mirror/list">espejos</a> de Debian y actualícelo desde
    la red.</dd>

    <dt><strong>Sistema de seguimiento de errores</strong></dt>
    <dd>El <a href="http://bugs.debian.org/">sistema de seguimiento de errores</a>
    de Debian es público. No intentamos esconder la
    realidad de que el software no siempre trabaja de la manera que los usuarios
    desean. Aconsejamos a los usuarios que envíen informes de errores y serán notificados
    cuando y por qué el error ha sido solucionado. Este sistema permite que Debian responda
    a los problemas rápida y honestamente.</dd>
</dl>

<p>Si usted aún no es usuario de GNU/Linux, puede también disfrutar de los siguientes beneficios:</p>

<dl>
    <dt><strong>Estabilidad</strong></dt>
    <dd>Existen muchos casos de máquinas que trabajan durante más de un año
    seguido sin reiniciarse. De la misma forma, hay equipos que tan sólo son
    reinicializados debido a un fallo en el suministro de corriente o a una
    actualización del hardware. Compare esto con otros sistemas que se
    colapsan varias veces al día.</dd>

    <dt><strong>Rápido y ligero en memoria</strong></dt>
    <dd>Otros sistemas operativos pueden ser rápidos en una o dos áreas, pero,
    estando basado en GNU/Linux, Debian es ligero y humilde. El software para
    Windows se ejecuta bajo GNU/Linux usando un emulador a veces <b>más rápido</b>
    que en su ambiente original.</dd>

    <dt><strong>Los controladores para la mayoría del hardware están escrito por
    usuarios de GNU/Linux, no por el fabricante</strong></dt>
    <dd>Mientras que ésto puede significar retrasos antes de que el
    nuevo hardware sea soportado y la no existencia de soporte para algún hardware,
    permite que continúe el soporte mucho después de que el fabricante haya
    detenido su producción o haya quebrado. La experiencia ha demostrado que los
    controladores de fuentes abiertas son usualmente mejores que los controladores propietarios.</dd>

    <dt><strong>Buena seguridad del sistema</strong></dt>
    <dd>Debian y la comunidad del software libre son muy sensibles a asegurarse
    de que los arreglos de problemas de seguridad entren en la distribución
    rápidamente. Normalmente, los paquetes arreglados se hacen disponibles a
    los pocos días. La disponibilidad del código fuente permite que la seguridad
    en Debian se evalúe de forma abierta, lo que evita que se implementen
    modelos de seguridad pobres. Además, la mayoría de los proyectos de
    software libre tienen sistemas de revisión por terceras partes,
    que, como primera medida, evitan que se introduzcan en el sistema problemas
    de seguridad potenciales.</dd>

    <dt><strong>Software de seguridad</strong></dt>
    <dd>Muchos desconocen que cualquier cosa enviada por la red puede
    ser leída por cualquier máquina entre usted y el receptor. Debian
    tiene paquetes del famoso software GPG (y PGP) que permite enviar
    correo entre usuarios preservando su privacidad. Además, ssh permite crear
    conexiones seguras a otras máquinas que tengan ssh instalado.</dd>
</dl>

<p>Desde luego, Debian no es perfecto. Existen tres áreas que son causa común de quejas:</p>
<dl>
    <dt><em>"Falta de software comercial popular"</em></dt>
    <dd>
        <p>Es cierto que en GNU/Linux no se dispone de algunos paquetes de
        software populares. Sin embargo, existen programas para reemplazar
        la mayoría de ellos, diseñados para imitar las mejores características
        de los programas en propiedad, con el valor añadido de ser
        <a href="free">software libre</a>.</p>
        <p>La falta de programas de oficina como Word o Excel debería dejar de
        ser un problema, porque Debian incluye tres suites de programas de oficina
        compuestos por entero de <a href="free">software libre</a>,
        <a href="http://www.openoffice.org/">OpenOffice</a>,
        <a href="http://www.koffice.org/">KOffice</a> y
        <a href="http://live.gnome.org/GnomeOffice">GNOME Office</a>.</p>
        <p>También dispone de varias suites de programas oficina propietarias:
        <a href="http://www.vistasource.com/en/apl.php">Applixware (Anyware)</a>,
        <a href="http://www.oracle.com/us/products/applications/open-office/index.html">Oracle Open Office</a>,
        <a href="http://www.hancom.com/">Hancom Office</a>,
        <a href="http://xibios.free.fr/">Axene</a> y otros.</p>
        <p>Para aquellos interesados en bases de datos, Debian se distribuye
        con los programas de bases de datos populares
        <a href="http://www.mysql.com/">mySQL</a> y
        <a href="http://www.postgresql.org/">PostgreSQL</a>.
        También existen versiones para GNU/Linux de
        <a href="http://www.sapdb.org/">SAP DB</a>,
        <a href="http://www.oracle.com/technetwork/topics/linux/whatsnew/index.html">Oracle</a>,
        <a href="http://www.ibm.com/software/data/informix/">Informix</a>,
        <a href="http://www.ibm.com/software/data/db2/linux/">IBM DB2</a> y
        otras.</p>
        <p>Están apareciendo gran cantidad de otros paquetes propietarios, al
        tiempo que más compañías descubren la potencia de GNU/Linux y su gran
        mercado oculto, con una base de usuarios en rápido crecimiento (Ya que
        GNU/Linux es de distribución libre, no se pueden usar cifras de ventas
        para estimar sus usuarios. Las mejores estimaciones indican que GNU/Linux
        tiene un 5% del mercado, lo que da 15 millones de usuarios a
        principios de 2001).</p>
    </dd>
    <dt><em><q>GNU/Linux es difícil de configurar</q></em></dt>
    <dd><p>Observe que dice configurar, no instalar, ya que algunas personas
    encuentran que la instalación inicial de Debian es más fácil que la de
    Windows. Mucho hardware (impresoras por ejemplo) podría, sin embargo,
    ser mucho más fácil de instalar. Además, algún software podría tener
    un script que guiara al usuario a través de la configuración (al menos
    en las instalaciones más comunes). Ésta es un área en la que se está trabajando.</p></dd>
    <dt><em><q>No todo el hardware está soportado</q></em></dt>
    <dd><p>Particularmente, hardware realmente nuevo, viejo o raro. También el hardware
    que depende de software de "controlador" complejo, que el fabricante sólo
    distribuye para plataformas Windows (por ejemplo los WinModems o las tarjetas
    WiFi de equipos portátiles).
    Aun así, en la mayoría de los casos, está disponible hardware
    equivalente que trabaja con GNU/Linux.
    Algunos dispositivos no están soportados debido a que
    el vendedor decidió no dejar las especificaciones disponibles.
    Esto también es un área en el que se está trabajando.</p></dd>
</dl>
<p>Si lo anterior no es suficiente para convencerle de usar Debian, considere
lo siguiente: bajo coste (tan reducido como el coste de una conexión a Internet), fácil
instalación, y multitarea real que puede duplicar fácilmente su
productividad. ¿Cómo puede permitirse no probarlo?</p>
