<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="it"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>CENTROSPED S.R.L. Spedizioni Internazionali Brescia</title>
	<meta name="description" content ="Centrosped opera da pi&ugrave; di 20 anni nel settore 
	delle spedizioni internazionali, cura l'organizzazione dei trasporti via aerea e via mare, 
	offre tutta la serie di servizi correlati all'import-export. Si &egrave; specializzata nell'area caraibica 
	dove &egrave; responsabile dei trasporti, dell'organizzazione delle fiere e delle donazioni per Cuba da tutta Italia.">
	<meta name="keywords" content="spedizioni internazionali,spedizioni cuba,spedizioni internazionali brescia,spedizioni internazionali cuba,
	merci pericolose,trasporto merci pericolose,consulenza merci pericolose,donazioni cuba,trasporti cuba,fiere cuba,trasporti extracee,iata">
	<meta name="author" content="Corrado Floreancigh">
    
    
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
   
   
   <!-- JavaScript -->
   <script src="js/modernizr-1.7.min.js"></script>
   <script src="js/jquery-1.7.1.min.js"></script>
   <script src="js/jquery.flexslider-min.js"></script>
   
   <script>
  	$(document).ready(function(){   
	    
			
			//When btn is clicked
			$(".btn-responsive-menu").click(function() {
			  	$("#mainmenu").toggleClass("show");

				

			});

            //Slider
            $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                $('body').removeClass('loading');
                }
            });

            $('#divModalCookies').fadeIn(500,function() 
                            {
                               
                                $("#overlay").show().css({"opacity": "0.5"}).css({"z-index": "4"});
                            })

            });
			
			// When resize
			$(window).resize(function () {
				if ($(window).width() > 767) {
					$("#mainmenu").show();
				} else {
					$("#mainmenu").hide();
				}
			});

            $('#btnAccediCuba').on("touchend click",function(e) {
        e.preventDefault();
        window.location.href="https://www.centrosped-cuba.it";

        
        })

        $('#btnContinuaCS').on("click",function(e){
            e.preventDefault();
            
            $('#divModalCookies').fadeOut(300,function() {
                localStorage.setItem("cookieSeen","shown");
                $("#overlay").fadeOut(200);
            })
        });

        /* $('#btnFacebook').on("touchend click",function(e) {
            e.preventDefault();
            window.location.href="https://www.facebook.com/profile.php?id=100090809625954";
        })

        $('#btnInstagram').on("touchend click",function(e) {
            e.preventDefault();
            window.location.href="https://www.instagram.com/centrosped/";
        }) */
	
	});
	
	
	
   </script>

<style>
    .modale {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 99;
        /* Sit on top */
        padding-top: 140px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 90%;
        /* Full width */
        height: 100%;
        max-height: 98Vh;
        margin: 5%;
        /* Full height */
        overflow: auto;
       
    }
    /* Modal Content */
    
    .modale-content {
        background-color: #fefefe;
        margin: auto;
        padding: 10px;
        border: 1px solid #888;
        border-radius: 8px;
        width: 90%;
        max-width: 1200px;
        height: 93%;
        overflow: auto;
    }
    /* The Close Button */
    
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        
        padding: 10px;
        
      }

</style>

    <!-- Style -->
    <link href="style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet"  />
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
 
</head>
<body>
<div id="wrapper">

    <header id="header">
        
        <div id="titolo">
            <img src="img/title.png" style="vertical-align: top;" />
            <h5 style="font-family: arial">SPEDIZIONI INTERNAZIONALI</h5>
        </div>
        <div id="logo">
            <img src='img/logoCS.png' />
        </div>

			<div class="search" style="float: right; margin-top: 0px">
                <a href="iata.html"><img src='img/iata.png' style='vertical-align: middle; height: 65px; align: right' /></a>
            </div>
            
             <div class="btn-responsive-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </div>

    </header> <!-- #header -->
    
    <div id="mainmenu">
	 	<ul>
        	<li><a href="#" class="active">AZIENDA</a></li>
            <li><a href="cuba.html">CUBA</a></li>
			<li><a href="servizi.html">SERVIZI</a></li>
			<li><a href="merci_pericolose.html">MERCI PERICOLOSE</a></li>
			<li><a href="sedi.html">SEDI</a></li>
			<li><a href="contatti.html">CONTATTI</a></li>
			<li><a href="magazzino.html">MAGAZZINO</a></li>
			
        </ul>
	</div> <!-- #mainmenu -->
	<div style="float: right; margin-top: 5px; margin-right: 20px">
		<a href="#navi" style="font-size: 13px; text-decoration: underline;">Partenze Navi<img src='img/ico_boat.png' style='margin-left: 4px;vertical-align: middle' /></a>
        &nbsp;&nbsp;
        <a href="#aerei" style="font-size: 13px; text-decoration: underline;">Partenze Aeree<img src='img/ico_flight.png' style='margin-left: 4px;vertical-align: middle' /></a>
        &nbsp;&nbsp;
	</div>
    <div id="lang">
			
			<a href="en/index.html" target="_self"><img src='img/eng.png' style='vertical-align: middle;border: 1px solid black' /></a>
			<a href="esp/index.html" target="_self"><img src='img/esp.png' style='vertical-align: middle;border: 1px solid black' /></a>
			
	</div>
	<div id="main">

    <!-- Prompt IE 6 and 7 users to install Chrome Frame:		chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 8]>
        <p class="chromeframe alert alert-warning">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]--> 

		<div id="content">

            <article class="post">
            <h2 class="entry-title"><a href="#">L'azienda</a></h2>
                
                <a href="#">
                   <img src="img/azienda.jpg" class="index-thumb"/>
                </a>

                <div class="entry-content">
                   L'esperienza di oltre 30 anni nel settore delle spedizioni internazionali ha conferito alla Ditta <span class="info">Centrosped 
            Srl</span> - Spedizioni Internazionali, una consolidata ed affidabile competenza in ogni ambito e problematica legata all'<span class="info">import-export</span>.<br><br>
            I servizi aerei e marittimi sono operati dai principali aeroporti (Malpensa, Linate, Orio al Serio, Fiumicino)
            e porti italiani e nord-europei (Genova, Livorno, La Spezia, Napoli, Salerno, Venezia, Trieste, Rotterdam, Amburgo), 
		presso i quali disponiamo di collaboratori di lunga esperienza.<br><br>
		Oltre all'organizzazione dei <span class="info">trasporti aerei, marittimi e terrestri</span> ed a quello di <span class="info">magazzinaggio</span> temporaneo, la societ&agrave offre 
            una vasta gamma di servizi correlati: da quelli di pertinenza <span class="info">doganale</span>, alla consulenza per la <span class="info">negoziazione di crediti 
		documentari</span> e <span class="info">pagamenti vincolati</span>, dalla redazione del modello <span class="info">Intrastat</span>, al servizio 
		<span class="info">"door to door"</span>, operato attraverso corrieri espressi (DHL e UPS), con i quali intratteniamo un contratto personalizzato.<br><br>
		Siamo <a href="iata.html" class="red" style="border: 1px solid black; background-color: Yellow; padding-left: 4px; padding-right: 4px" title="Clicca per conoscere i vantaggi di affidarsi ad un agente IATA">agenti IATA</a> e a livello internazionale godiamo della collaborazione di una fitta rete di corrispondenti che ci consentono di 
		organizzare le spedizioni fino al punto di destinazione finale (o di origine), prevalentemente negli Usa, 
		Sudamerica ed Estremo Oriente.<br><br>
		Tuttavia, il fiore all'occhiello della nostra specializzazione sono le spedizioni per <a class="testo info" href="cuba.html" title="servicio Cuba" alt="servicio Cuba">CUBA</a>.<br>
                </div> <!-- .entry-content -->
    
            </article> <!-- .post  -->
            
            <hr /> 
            <div class="entry-content"><a name="navi" href="#"></a>
            
            <span style="font-size: 18px; color: darkblue; margin-right: 10px;">PROSSIME PARTENZE NAVI</span>
			<img src="img/hapag-lloyd-big.png" style="height: 50px; vertical-align: middle" />
            </div>
            <div class="entry-content">
			<?php
				if (file_exists("partenze.txt"))
				{
								
				$filenavi="partenze.txt";
				$fog=file($filenavi);
				
				foreach($fog as $zz => $linea) 
				{ // $zz ci indica in quale elemento dell'array siamo
					list ($nave, $livcari, $livpart, $gencari, $genpart, $cubarri) = explode(';', $linea);
					echo "<b>Nave: $nave</b>";
					if ($livcari!="") 
					{
						echo "<br /><span style='font-size: 14px'>Napoli (CUT OFF $livcari  ETA $livpart) Mariel arrivo $cubarri</span>";
					}
					if ($gencari!="") 
					{
						echo "<br /><span style='font-size: 14px'>Genova (CUT OFF $gencari  ETA $genpart) Mariel arrivo $cubarri</span>";
					}
					echo "<br />";
				}
				}
				
			?>
			</div>
            <div class="entry-content"><a name="aerei" href="#"></a>
            
            <span style="font-size: 18px; color: darkblue; margin-right: 10px;">PROSSIME PARTENZE AEREE</span>
			<img src="img/Neos_Logo.png" style="height: 50px; vertical-align: middle" />
            </div>
            <div class="entry-content">
			<?php
				if (file_exists("partenzeA.txt"))
				{
								
				$fileaerei="partenzeA.txt";
				$fog=file($fileaerei);
				
				foreach($fog as $zz => $linea) 
				{ // $zz ci indica in quale elemento dell'array siamo
					list ($volo, $tratta, $milpart, $orapart, $cubarri, $oraarri) = explode(';', $linea);
					echo "<b>Volo: $volo</b>";
					if ($volo!="") 
					{
						echo "<br /><span style='font-size: 14px'>Tratta $tratta (PARTENZA $milpart $orapart - ARRIVO HAV $cubarri $oraarri)</span>";
					}
					
					echo "<br />";
				}
				}
				
			?>
			</div>
            <hr /> 
    	</div> <!-- #content -->
    
    	<aside id="sidebar">
        	
        
            <div class="widget">
            	<h3>Servizi import export</h3>
                <div class="flexslider">
                    <ul class="slides">
        
                        <li>
                            <a href="servizi.html">
                                <img src="img/trasporti.jpg">
                                <div class="flex-caption">trasporti via aerea, via terra, via mare</div>
                            </a>
                        </li>
                        
                         <li>
                            <a href="magazzino.html">
                                <img src="img/maga.jpg">
                                <div class="flex-caption">magazzinaggio</div>
                            </a>
                        </li>
						<li>
                            <a href="servizi.html">
                                <img src="img/doortodoor.jpg">
                                <div class="flex-caption">servizio door to door</div>
                            </a>
                        </li>
						<li>
                            <a href="servizi.html">
                                <img src="img/pratiche.jpg">
                                <div class="flex-caption">pratiche e consulenze doganali</div>
                            </a>
                        </li>
                    </ul>  
                </div>
            </div>
            
            <div class="widget">
            	<h3>Spedizioni Cuba</h3>
                <div class="flexslider">
                    <ul class="slides">
        
                        <li>
                            <a href="cuba.html">
                                <img src="img/cuba.jpg">
                                <div class="flex-caption">importazioni esportazioni</div>
                            </a>
                        </li>
                        
                         <li>
                            <a href="cuba.html">
                                <img src="img/donazioni.jpg">
                                <div class="flex-caption">donazioni</div>
                            </a>
                        </li>
						<li>
                            <a href="cuba.html">
                                <img src="img/fiere.jpg">
                                <div class="flex-caption">organizzazione fiere</div>
                            </a>
                        </li>
                    </ul>  
                </div>
            </div>
			
			<div class="widget">
            	<h3>Trasporto Merci Pericolose</h3>
                <div class="flexslider">
                    <ul class="slides">
        
                        <li>
                            <a href="merci_pericolose.html">
                                <img src="img/merci-pericolose.jpg">
                                <div class="flex-caption">imballaggio</div>
                            </a>
                        </li>
                        <li>
                            <a href="merci_pericolose.html">
                                <img src="img/doc-mp.jpg">
                                <div class="flex-caption">documentazione</div>
                            </a>
                        </li>
                        <li>
                            <a href="merci_pericolose.html">
                                <img src="img/marcatura.jpg">
                                <div class="flex-caption">marcatura</div>
                            </a>
                        </li> 
						<li>
                            <a href="merci_pericolose.html">
                                <img src="img/consulenza-mp.jpg">
                                <div class="flex-caption">consulenza</div>
                            </a>
                        </li>
                    </ul>  
                </div>
            </div>
            
        	<div class="widget">
                <h3>Links utili</h3>
                <ul>
                    <li><a href="http://www.import-export.it" target="_blank">- Il portale italiano di import-export</a></li>
                    <li><a href="http://www.track-trace.com/aircargo" target="_blank">- Il portale dedicato al trasporto aereo</a></li>
                    <li><a href="http://www.cargoserv.com/tracking.asp" target="_blank">- Sito di monitoraggio in tempo reale delle spedizioni</a></li>
                </ul>
            </div>

    	</aside> <!-- #sidebar -->
    
	</div> <!-- #main -->
    <div id="divModalCookies" class="modale" style="padding-top:5vh!important; margin: 0; width: 100%">
        <div class="modale-content" style="background: black;  width: 800px; max-width: 95%; border-radius: 4px; border: 1px solid darkgray; height:auto; opacity:0.98">
            
            
                <div style="clear: both; height:10px"></div>
            
                <div>
                    <div style="text-align: center; opacity: 0.85; width: 90%; margin: auto; line-height: 24px; text-transform:none!important; margin-top: 40px">
                        <p style="font-weight: 700; font-size: 24pt;color: white">Nuovo servizio spedizioni a Cuba per privati
                        </p>
                        <img src="img/cuba-flag-lowres.gif" style="height: 212px; margin: 40px auto" />
                        <div style='height: 12px; clear: both'></div>
                        
                            
                            <p style="color: white; font-size: 14pt; line-height: 1.4em;">
                                Dal 22 maggio in linea il nostro portale per l'invio merce a Cuba per i privati.
                                <br /><br />Clicca su 'Accedi' per accedere al portale.
                            <br /> <br />
                            
                        </p>
                    </div>
                        <button id="btnAccediCuba" class="btn" style="font-size: 16pt; cursor: pointer; float: left; margin: 40px; margin-left: 80px; padding: 15px">Accedi</button>
                        <button id="btnContinuaCS" class="btn" style="font-size: 16pt; cursor: pointer; float: right; margin: 40px; padding: 15px">Continua su Centrosped.it</button>
                        <div style="height: 10px; clear: both"></div>
                        <div style="text-align: center">
                        <a href="https://www.facebook.com/profile.php?id=100090809625954" data-ignore="push" target="_blank" alt="facebook" title="visita la nostra pagina facebook"><img id="btnFacebook" src="img/logo-facebook.png" title="visita la nostra pagina facebook" alt="facebook" style="height: 64px; cursor: pointer; margin-right: 20px" /></a>
                        <a href="https://www.instagram.com/centrosped/" data-ignore="push" target="_blank" alt="instagram" title="visita la nostra pagina instagram"><img id="btnInstagram" src="img/logo-instagram.png" title="visita la nostra pagina instagram" alt="instagram" style="height: 64px; cursor: pointer;"/></a>
                        </div>
                        <div style="height: 20px; clear: both"></div>
                </div>
            </div>
    
    </div>

 	<footer id="footer">
      
        <p style="text-align: center; font-size: 14px">&copy; 2010-2016 CENTROSPED S.r.l. Spedizioni Internazionali - Via Luigi Gussalli, 13 - 25131 Brescia (Italy) - Cap.Sociale: &euro; 41.000,00 i.v.<br />P.IVA 02005010174 &nbsp&nbsp Tel. +39(0)30 3581363 &nbsp +39(0)30 3581355 &nbsp Fax +39(0)30 3581345 &nbsp&nbsp  E-Mail: <a href="mailto:info@centrosped.it">info@centrosped.it</a></p>
        
    </footer> <!-- #footer -->
    
    <div class="clear"></div>

</div> <!-- #wrapper -->

</body>
</html>


	
