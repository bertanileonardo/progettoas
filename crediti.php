<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS &minus; Crediti</title>
    <meta name="description" content="Pagina dedicata ai crediti del progetto">
    <meta property="og:title" content="AS - crediti" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Progetto scolastico di conoscenza del territorio, del Villafranchese durante le guerre di indipendenza" />
    <!-- <meta property="og:image" content="https://www.progettoas.org/image/avantisavoiaog.jpg" /> -->
    <meta property="og:image" content="https://www.progettoas.org/image/creditistudenti.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:alt" content="Logo avantisavoia" />
    <meta property="og:url" content="https://www.progettoas.org/crediti.php" />
    <link rel="shortcut icon" id="faviconTag" href="image/favicon.svg" type="image/svg+xml">
    <link rel="manifest" href="./manifest.json">
    <link rel="apple-touch-icon" sizes="48x48" href="image/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="image/apple-touch-icon-72x72.png"> 
    <link rel="apple-touch-icon" sizes="96x96" href="image/apple-touch-icon-96x96.png">   
    <link rel="apple-touch-icon" sizes="144x144" href="image/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="168x168" href="image/apple-touch-icon-168x168.png">
    <link rel="apple-touch-icon" sizes="192x192" href="image/apple-touch-icon-192x192.png">
    <link rel="apple-touch-icon" sizes="256x256" href="image/apple-touch-icon-256x256.png">
    <link rel="apple-touch-icon" sizes="384x384" href="image/apple-touch-icon-384x384.png">
    <link rel="apple-touch-icon" sizes="512x512" href="image/apple-touch-icon-512x512.png">
    <link rel="preload" href="css/tailwind.css" as="style">
    <link rel="preload" href="icomoon/style.css" as="style">
    <link rel="preload" href="js/script.js" as="script">
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/iubenda_cs.js"/>
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/tcf/stub-v2.js"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="preconnect" href="https://basemaps.cartocdn.com/light_all/">
    <link rel="preconnect" href="https://basemaps.cartocdn.com/dark_all/"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="css/accordion.min.css">
    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="bg-white dark:bg-as-nero font-['Open_Sans']">
      <nav class="sticky top-0 z-50 bg-white dark:bg-as-nero w-full px-3 lg:px-0">
        <?php include 'nav.php'?>
      </nav>
      <script src="js/fav-dk.min.js" async></script>
      <main class="w-full bg-light dark:bg-black grid justify-center mx-0">
        <div class="block bg-[url(../image/soldatini6.jpg)] bg-center bg-no-repeat bg-cover rounded-b-3xl" style="height: 35vh;">
        </div>
        <div class="block mb-8 mt-8 md:max-w-5xl">             
            <div class="px-4 md:px-6">
                <div id="descrizione" class="md:rounded-3xl md:bg-as-rosso dark:text-white md:text-white p-0 md:p-6">
                <div class="p-1">
                    <div class="mb-6 flex flex-col md:flex-row gap-8 justify-between items-center">
                      <h1 id="descrition_title" class="block text-2xl text-left">Le risorse</h1>
                      <div name="a11y" class="flex flex-row justify-center items-center gap-2">
                          <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="description-place" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                          <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="description-place" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>                     
                          </button>                    
                      </div>
                    </div>
                    <p id="description-place" class="text-sm md:text-base" style="font-size: 1rem;">
                      <span>Per la realizzazione di questo progetto abbiamo utilizzato numerose risorse necessarie al completo sviluppo del sito e delle sue funzionalit&agrave;</span>
                    </p>  
                </div>                
              </div>
              <div>
                <style>
                  @font-face {
                    font-family: 'icomoon';
                    src:  url('icomoon/fonts/icomoon.eot?s90mdw');
                    src:  url('icomoon/fonts/icomoon.eot?s90mdw#iefix') format('embedded-opentype'),
                      url('icomoon/fonts/icomoon.ttf?s90mdw') format('truetype'),
                      url('icomoon/fonts/icomoon.woff?s90mdw') format('woff'),
                      url('icomoon/fonts/icomoon.svg?s90mdw#icomoon') format('svg');
                    font-weight: normal;
                    font-style: normal;
                    font-display: block;
                  }
                  .ul-li::before{
                    font-family: 'icomoon';
                    content: "\ea86"; 
                    color: #9b1a20;
                    margin-right: .5rem;
                  }
                </style>
                <button type="slide" tabindex="0" id="q1" class="text-white accordion rounded-3xl flex flex-row justify-between items-center bg-as-rosso dark:hover:bg-white dark:hover:text-as-nero hover:bg-as-nero mt-6 px-7 py-6">
                  <div>Le risorse open-source</div>
                  <div class="icon-keyboard_arrow_down arrow-down-transform"></div>
                </button>
                <div class="panel text-black dark:text-white">                    
                  <p class="pt-5 px-7 text-justify">
                    Per la realizzazione di questo progetto abbiamo utilizzato materiale open-source. Vogliamo ringraziare le comunità di sviluppatori dietro a questi progetti, facendoveli conoscere: 
                  </p>
                  <ul class="pt-3 px-7 list-none">
                    <li class="ul-li"><a class="underline" href="https://tailwindcss.com/" title="tailwindcss.com" target="_blank" rel="noopener noreferrer nofollow">TAILWIND CSS</a> <span class="italic" title="funzione">(libreria stili)</span></li>
                    <li class="ul-li"><a class="underline" href="https://getbootstrap.com/" title="getbootstrap.com" target="_blank" rel="noopener noreferrer nofollow">BOOTSTRAP</a> <span class="italic" title="funzione">(libreria js e stili)</span></li>
                    <li class="ul-li mt-1"><a class="underline" href="https://leafletjs.com/" title="leafljs.com" target="_blank" rel="noopener noreferrer nofollow">LEAFLET</a> <span class="italic" title="funzione">(libreria js per gestione mappe)</span></li>
                    <li class="ul-li mt-1"><a class="underline" href="https://www.openstreetmap.org/copyright" title="openstreetmap.org" target="_blank" rel="noopener noreferrer nofollow">OPENSTREETMAP</a> <span class="italic" title="funzione">(raccolta dati geografici)</span></li>
                  </ul>
                </div>  
                <button type="slide" tabindex="0" id="q1" class="text-white accordion rounded-3xl flex flex-row justify-between items-center bg-as-rosso dark:hover:bg-white dark:hover:text-as-nero hover:bg-as-nero mt-6 px-7 py-6">
                  <div>Risorsa per la geolocalizzazione</div>
                  <div class="icon-keyboard_arrow_down arrow-down-transform"></div>
                </button>
                <div class="panel text-black dark:text-white">                    
                <p class="pt-6 px-7 text-justify">
                    Grazie alla libreria <a class="underline" href="https://github.com/domoritz/leaflet-locatecontrol/blob/gh-pages/LICENSE" target="_blank" rel="noopener noreferrer nofollow">leaflet-locatecontrol</a> per lo script e gli stili necessari alla localizzazione dell'utente. 
                  </p>         
                </div>              
                <button type="slide" tabindex="0" id="q3" class="text-white accordion rounded-3xl flex flex-row justify-between items-center bg-as-rosso dark:hover:bg-white dark:hover:text-as-nero hover:bg-as-nero mt-6 px-7 py-6">
                  <div>Servizi di stile</div>
                  <div class="icon-keyboard_arrow_down arrow-down-transform"></div>
                </button>
                <div class="panel text-black dark:text-white">
                  <p class="pt-6 px-7 text-justify">
                    Grazie al servizio <a class="underline" href="http://cartodb.com/attributions" target="_blank" rel="noopener noreferrer nofollow">CARTO DB</a> (SaaS gestito della società CARTO) abbiamo potuto perfezionare la presentazione delle mappe. 
                    <span class="block mt-2">Grazie al servizio <a class="underline" href="https://icomoon.io/" target="_blank" rel="noopener noreferrer nofollow">IcoMoon</a> per la disponibilit&agrave; dei set delle icone utilizzate provenienti dalle risorse proprietarie e da Google.</span>
                  </p>
                </div>
                <button type="slide" tabindex="0" id="q3" class="text-white accordion rounded-3xl flex flex-row justify-between items-center bg-as-rosso dark:hover:bg-white dark:hover:text-as-nero hover:bg-as-nero mt-6 px-7 py-6">
                  <div>Progessive Web App</div>
                  <div class="icon-keyboard_arrow_down arrow-down-transform"></div>
                </button>
                <div class="panel text-black dark:text-white">
                  <p class="pt-6 px-7 text-justify">
                    Grazie al servizio <a class="underline" href="https://www.pwabuilder.com/" target="_blank" rel="noopener noreferrer nofollow">PWA-BUILDER</a> abbiamo potuto ottimizzare questo sito e renderlo fruibile come una Progessive Web App. Infatti, aggiungendo questa pagina alla schermata Home, il sito verr&agrave; installato come un'applicazione.
                  </p>
                </div>
              </div>                  
            </div>
        </div>
        <script src="js/a11y.js" async></script> 
        <script async src="js/accordion.min.js" async></script>       
      </main>
      <footer class="relative flex flex-col md:flex-row justify-center bg-white dark:bg-as-nero md:justify-between items-center bottom-0 w-full mx-auto p-2 md:p-6 lg:p-8 md:max-w-5xl text-black pb-8 md:pb-0">
        <?php include 'footer.php' ?>          
      </footer>
    <a href="https://www.iubenda.com/privacy-policy/76111223" rel="noreferrer nofollow" target="_blank"><span class="sr-only">Privacy Policy - </span></a><a href="#" role="button" class="iubenda-advertising-preferences-link"><span class="sr-only">Personalizza tracciamento pubblicitario</span></a>
        
</body>
</html>
