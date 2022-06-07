<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Indicador Económico: Tipo de Cambio</title>
    <meta name="keywords" content="api, tipo de cambio, colon, dolar, dollar, Banco Central de Costa Rica, json, datos, euro, xml, servicio web, Requests, Fetch, Get, Python " />
    <meta name="description" content="TIPO DE CAMBIO MONETARIO">
    <meta name="robots" content="" />
    <link href="img/us-dollar-16.png" rel="icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
<script>
function enviar_ajax(){	

	$.ajax({
	type: 'POST',
	url: 'enviar.php',
	data: $('#form1').serialize(),
	success: function(respuesta) {
		if(respuesta=='ok'){
      Swal.fire("Datos enviados", "Muchas gracias!", "success");
		}
		else {
		alert('Error en los datos.');
		}
	}
	});

  $('#form1')[0].reset();
}
</script>

<!--

-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css"/>    
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/templatemo-dream-pulse.css" />
  </head>
  <body>
    <main class="container-fluid">
      <div class="row">        
          <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
              <div class="tm-brand-box">
                <div class="tm-double-border-1">
                  <div class="tm-double-border-2">
                    <h1 class="tm-brand text-uppercase">Tipo de Cambio</h1>
                  </div>
                </div>
              </div>

              <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
                <li class="nav-item">
                  <a href="#intro" class="nav-link active">
                    <span class="d-inline-block mr-3">Inicio</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link">
                    <span class="d-inline-block mr-3">Acerca</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#work" class="nav-link">
                    <span class="d-inline-block mr-3">JSON</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#clients" class="nav-link">
                    <span class="d-inline-block mr-3">Multimoneda</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#talk" class="nav-link">
                    <span class="d-inline-block mr-3">Contacto</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
              </ul>
              <ul class="nav flex-row tm-social-links">
                <li class="nav-item">
                  <a href="https://www.facebook.com/ASdesarrolloweb" class="nav-link tm-social-link" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://twitter.com/MultihostE" class="nav-link tm-social-link" target="_blank">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://linkedin.com" class="nav-link tm-social-link" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
              <footer class="text-center text-white small">
                <p class="mb--0 mb-2">Copyright 2020 AS Desarollo Web</p>
                <p class="mb-0">Diseño:
                  <a rel="nofollow" href="https://albertosaenz.com" class="tm-footer-link" target="_blank">Alberto Sáenz</a>
                </p>
              </footer>
            </div>
          </nav>
          
          <main role="main" class="ml-sm-auto col-12">
            <div
              class="parallax-window"
              data-parallax="scroll"
              data-image-src="img/dream-pulse-header.jpg">
              <div class="tm-section-wrap">
                <section id="intro" class="tm-section">
                    <div class="tm-bg-white-transparent tm-intro">
                        <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Tipo de Cambio Monetario</h2>
                        <p class="tm-color-gray">
                          Un indicador económico es un tipo de dato de carácter estadístico sobre la economía que permite realizar un análisis de la situación y del rendimiento de la economía tanto pasada como presente.
                        </p>
                        <p class="mb-0 tm-color-gray">
                          En muchos casos sirve para realizar previsiones sobre la futura evolución de la economía.
                        </p>
                    </div>              
                </section>
            </div>            
          </div>

          <div class="tm-section-wrap bg-white">
            <section id="about" class="row tm-section">
              <div class="col-xl-6">
                <div class="tm-section-half">    
                    <div><i class="fas fa-6x fa-money-check-alt tm-section-icon"></i></div>                        
                    <h2 class="tm-section-title tm-color-primary mb-5 ">Acerca de este sitio</h2>
                    <p class="mb-5">
                      El BCCR ofrece una plataforma que permite a usuarios conectarse con su servicio web y consultar información como 
el tipo de cambio con respecto al Dólar, Euro, y otros monedos, así como tasas de interés,
inflación, y otros indicadores de interés para el público, de una manera transparente y 
rápida.
                    </p>
                    <p>
                      Cualquier persona o institución, sea privada o pública, puede acceder esta 
información del día o histórica desde cualquier parte del mundo y sin ningún costo 
monetario. En este sitio hemos querido brindar de una forma simplificada algunos de los tipos de cambio vigentes al dia en formato JSON.
                    </p>
                    <p></p>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="tm-section-half">
                    <div><i class="fas fa-6x fa-paperclip tm-section-icon"></i></div>
                    <h2 class="tm-section-title tm-color-primary mb-5">Uso de los datos</h2>
                    <p class="mb-5">
                       
Del servicio web <a href="https://www.bccr.fi.cr/indicadores-economicos" target="_blank" title="Indicadores Económicos BCCR"> ObtenerIndicadoresEconomicosXML-BCCR</a> se obtiene los valores del indicador económico 
(XML) deseado para un rango de fecha determinado con formato dd/mm/yyyy 
(día/mes/año). Retorna un XML.
                    </p>
                    <p>
                      Nuestro sitio obtiene los valores de este XML y los conviente en un formato JSON, eliminando los valores de consulta adicionales y datos de credenciales, entregando únicamente los valores pertinentes a una consulta (Request) que necesite consumir:
                      <ul>
                        <li>Compra</li>
                        <li>Venta</li>
                        <li>Fecha</li>
                      </ul>
                    </p>
                </div>
              </div>
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="work" class="row tm-section">
              <div class="col-12">
                <div class="w-100 tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad"></br>
                      <div class="tm-flex-item-left"></br>
                      
                          <h2 class="tm-color-primary tm-section-title mb-4 ml-2">Servicio Web</h2>
                          <p>Un servicio web es una tecnología que utiliza un conjunto de protocolos y estándares que sirven para intercambiar datos entre aplicaciones. Distintas aplicaciones de software desarrolladas en lenguajes de programación diferentes, y ejecutadas sobre cualquier plataforma, pueden utilizar los servicios web para intercambiar datos en redes de ordenadores como Internet. La interoperabilidad se consigue mediante la adopción de estándares abiertos.</p>
                          <img src="img/stock-exchange-g37508416b_1280.jpg" class="img-fluid" alt="Monedas"></br>
                      <div>
                        <h2 class="tm-color-primary tm-section-title mb-4 ml-2">JSON tipo de cambio</h2>
                          <p>
                            Obtenga datos de tipos de cambio de US Dollar frente al CRC Colón de forma precisa y fiable actualizados cada 24 horas. Los datos y el uso de este servicio son gratuitos, y no requieren suscripción o registro previo.</p>
                          
                            <p><blockquote> 
                            
                          <?php

if (isset($_SESSION['COMPRA']) && isset($_SESSION['VENTA'])) {
	
	$Compra = $_SESSION['COMPRA'];
	$Venta = $_SESSION['VENTA'];

} else {

	//Obtener tipo de cambio
	$doc_c = new DOMDocument();
	$doc_v = new DOMDocument();
	$ind_econom_ws =
	'https://gee.bccr.fi.cr/Indicadores/Suscripciones/WS/wsindicadoreseconomicos.asmx/ObtenerIndicadoresEconomicos';
	$fecha = date("d/m/Y");
	$compra = 317;
	$venta = 318;
	$nombre = 'Dave'; // cambiar por su nombre
	$email = 'alb.saenz@gmail.com'; // cambiar por su correo electronico
	$tokenBCCR = 'IL7CLLIAAL'; // cambiar por el Token enviado por el BCCR

	$urlWS_c = $ind_econom_ws."?Indicador=".$compra."&FechaInicio=".$fecha."&FechaFinal=".$fecha."&Nombre=".$nombre.
	"&SubNiveles=N&CorreoElectronico=".$email."&Token=".$tokenBCCR;
	$urlWS_v = $ind_econom_ws."?Indicador=".$venta."&FechaInicio=".$fecha."&FechaFinal=".$fecha."&Nombre=".$nombre.
	"&SubNiveles=N&CorreoElectronico=".$email."&Token=".$tokenBCCR;

	//Valor Compra
	$xml_c = @file_get_contents($urlWS_c);
    if ($xml_c === false) {
       $Compra = "No disponible";
    } else {   
	   $doc_c->loadXML($xml_c);
	   $ind_c = $doc_c->getElementsByTagName('INGC011_CAT_INDICADORECONOMIC')->item(0);
	   $val_c = $ind_c->getElementsByTagName('NUM_VALOR')->item(0);
	   $Compra = substr($val_c->nodeValue,0,-6);
	   $_SESSION['COMPRA'] = $Compra;
    }

	//Valor Venta
	$xml_v = @file_get_contents($urlWS_v);
    if ($xml_v === false) {
       $Venta = "No disponible";
    } else {
        $doc_v->loadXML($xml_v);
        $ind_v = $doc_v->getElementsByTagName('INGC011_CAT_INDICADORECONOMIC')->item(0);
        $val_v = $ind_v->getElementsByTagName('NUM_VALOR')->item(0);
        $Venta = substr($val_v->nodeValue,0,-6);
        $_SESSION['VENTA'] = $Venta;
    }
	
}
echo "Tipo de Cambio del dia vigente al ".$fecha.", BCCR";
echo "<br>";
echo("Compra: ".$Compra);
echo "<br>";
echo("Venta: ".$Venta);
?>

</blockquote></p>
                          <p>Utilice la siguiente URL en su Requests, Fetch o Get para obtener un archivo <a href="https://www.json.org/json-es.html" target="_blank" title="¿Qué es un archivo JSON?"> JSON</a> con los datos</p> 
                          <p>
                            <a href="javascript:getlink();">Copiar URL</a>

<script>//<![CDATA[
function getlink() {
var aux = document.createElement("input");
aux.setAttribute("value","https://exchangecr.co/TCdolar.json");
document.body.appendChild(aux);
aux.select();
document.execCommand("copy");
document.body.removeChild(aux);
Swal.fire("Éxito!", "La URL ha sido copiada", "success");
}
//]]></script>
                          </p>
                          </p>
                          <p>Obtendrá los datos en el siguiente formato: </p>
                          <p><img src="img/TipoCambio.png" class="img-fluid" alt="json"> </p>
                      </div>

                      <div>
                        <h2 class="tm-color-primary tm-section-title mb-4 ml-2">Tutoriales</h2>
                          <p>
                            Mire ejemplos de implementación de consultas a servicios web utilizando los lenguajes de programación más populares.</p>
                          <p>
                            <ul> 
                              <li><a href="https://docs.python-requests.org/en/latest/" target="_blank" title="Ejemplo de Requests"> Requests con Python</a> </li>
                              <li><a href="https://developer.mozilla.org/es/docs/Web/API/Fetch_API/Using_Fetch" "target="_blank" title="Fetch JS"> Fetch con JavaScript</a></li>
                              <li><a href="https://www.w3schools.com/tags/ref_httpmethods.asp" target="_blank" title="HTTP get">HTTP método Get</a> </li>
                            </ul>
                            </p>
                      </div>

                      </div>                        
                    </div>                  
                  </div>     
              </div>         
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="clients" class="row tm-section">
              <div class="col-12 tm-section-pad">
                  <div class="tm-flex-item-left">
                      <div class="tm-w-80">
                          <h2 class="tm-color-primary tm-section-title mb-4">Multimoneda</h2>
                          <p class="mb-5">
                            Trabajamos en el desarollo de una API RESTful que brinda acceso a más de 250 monedas globales, más de 14,000 pares de conversión, datos históricos y de fluctuación, y mucho más.  Este nuevo servicio permitirá incorporar casi cualquier dato de moneda global en tus aplicaciones con facilidad y sin el dolor de cabeza de administrar toda esa información tú mismo.
                          </p>
                      </div>
                      
                      <div class="row tm-clients-images">
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="#">
                            <img src="img/LogoMoneda1.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="#">
                            <img src="img/LogoMoneda2.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="#">
                            <img src="img/LogoMoneda3.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="#">
                            <img src="img/LogoMoneda4.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="#">
                              <img src="img/LogoMoneda5.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="#">
                              <img src="img/LogoMoneda6.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="#">
                              <img src="img/LogoMoneda7.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="#">
                              <img src="img/LogoMoneda8.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                      </div>
                      <div class="tm-w-80">
                        <h2 class="tm-color-primary tm-section-title mb-4">Referencia rápida</h2>
                        <p class="mb-5">
                          En el siguiente cuadro podrá ver la referencia de los tipos de cambio de monedas mas relevantes respecto del colón costarricense.
                        </p>
                    </div>
                    <div>
                      <!-- Please do not edit this code Mconvert currency-rates-widget starts here --><script type="text/javascript">var w='100%';var h='386';var b='crc';var a='1';var l='en';var t='blue';var c='usd,cad,cny,eur,hkd,mxn,btc,eth';var ty='1';var f='2';var ht='mconvert.net/';</script><a href="https://mconvert.net/" title="Currency Exchange Rates"><script src="//mconvert.net/currency_rates"></script></a><span style="margin-right: 10px; font-size: 11px; text-align: right; display: block; font-family: Helvetica Neue;"><a href="https://mconvert.net/" style="color: #337ab7; text-decoration: none; font-family: Helvetica Neue;"></a></span><!-- Mconvert currency rates widget ends here -->
                    </div>
                  </div> 
              </div>                             
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="talk" class="row tm-section">
                <div class="col-xl-6 mb-5">
                  <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <h2 class="tm-color-primary tm-section-title mb-4">Apoya este servicio</h2>
                        <p class="mb-4">
                          Para este grupo de desarrolladores es importante saber que estas haciendo uso de esta servicio y que te está siendo de utilidad.
                        </p>
                        <p class="mb-3">
                          Cualquier idea, sugerencia o comentario hazlo llegar con el formulario adjunto. Muestra tu apoyo patrocinando un café para los programadores.
                        </p>
                        <div id="donate-button-container">
                          <div id="donate-button"></div>
                          <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                          <script>
                          PayPal.Donation.Button({
                          env:'production',
                          hosted_button_id:'4ETX8Q7U28K2Y',
                          image: {
                          src:'https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif',
                          alt:'Donate with PayPal button',
                          title:'PayPal - The safer, easier way to pay online!',
                          }
                          }).render('#donate-button');
                          </script>
                          </div>
                          
                    </div>                    
                  </div>                  
                </div>
                <div class="col-xl-6 mb-5">
                  <div class="tm-contact-form-wrap">
                    <form onsubmit="enviar_ajax(); return false" id="form1" class="tm-contact-form">
                        <div class="form-group">
                          <input type="text" id="name" name="name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Tu nombre" required="" />
                        </div>
                        <div class="form-group">
                          <input type="email" id="email" name="email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Tu correo" required="" />
                        </div>
                
                        <div class="form-group">
                          <textarea rows="4" id="message" name="message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Mensaje..." required=""></textarea>
                        </div>
                
                        <div class="form-group mb-0">
                          <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                            ENVIAR
                          </button>
                        </div>
                      </form>
                  </div>                    
                </div>
              </section>
          </div>
        </main>        
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-scripts.js"></script>
  </body>
</html>