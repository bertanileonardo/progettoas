<!DOCTYPE html>
<html lang="it">
<head>
    <title>AS &minus; Villafranca</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina dedicata alla storia di Villafranca">
    <meta property="og:description" content="Pagina dedicata alla storia di Villafranca" />
    <meta property="og:title" content="AS - Villafranca" />
    <meta property="og:type" content="website"/>
    <!-- <meta property="og:image" content="https://www.progettoas.org/image/avantisavoiaog.jpg" /> -->
    <meta property="og:image" content="https://www.progettoas.org/image/caffe-fantoni.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:alt" content="Logo avantisavoia" />
    <meta property="og:url" content="https://www.progettoas.org/villafranca.php" />
    <link rel="shortcut icon" id="faviconTag" href="image/favicon.svg" type="image/svg+xml">
    <link rel="manifest" href="./manifest.json">
    <link rel="apple-touch-icon" sizes="57x57" href="image/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="image/apple-touch-icon-72x72.png">    
    <link rel="apple-touch-icon" sizes="144x144" href="image/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="image/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="image/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="image/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="image/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="256x256" href="image/apple-touch-icon-256x256.png">
    <link rel="apple-touch-icon" sizes="512x512" href="image/apple-touch-icon-512x512.png">
    <link rel="preload" href="css/tailwind.css" as="style">
    <link rel="preload" href="icomoon/style.css" as="style">
    <link rel="preload" href="js/script.js" as="script">
    <link rel="preload" as="script" href="js/a11y.js"/>
    <link rel="preload" as="script" href="js/mapVillafranca.js"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./leaflet/leaflet.css">
	<script src="./leaflet/leaflet-src.js"></script>
	<link rel="stylesheet" href="./leaflet/L.Control.Locate.css">
	<script src="./leaflet/L.Control.Locate.js"></script>
    <link rel="stylesheet" href="css/mappa.css">
    <!-- <script src="js/map.js"></script> -->
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
    <script type="module">
        import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
        const el = document.createElement('pwa-update');
        document.body.appendChild(el);
    </script>    
</head>
<body class="bg-white dark:bg-as-nero font-['Open_Sans']">
    <nav class="sticky top-0 z-50 bg-white dark:bg-as-nero w-full px-3 lg:px-0">
        <?php include 'nav.php'?>
    </nav> 
    <script src="js/fav-dk.min.js" async></script>   
    <main class="w-full bg-light dark:bg-black grid justify-center mx-0">
        <div class="block bg-[url(../image/caffe-fantoni.jpg)] md:bg-[url(../image/frontespizio-villafranca.svg)] bg-center bg-no-repeat bg-cover rounded-b-3xl" style="height: 35vh;">
        </div>
        <div class="block mb-8 mt-8 md:max-w-5xl">             
            <div class="px-4 md:px-6">  
                <div class="flex flex-col md:grid md:grid-cols-3 gap-3 md:gap-0 justify-center items-center">
                    <div class="md:col-span-2 flex flex-col justify-center items-center gap-8 md:gap-12 mb-8 mt-6 md:mb-0 md:mt-0">
                        <p class="text-3xl text-center text-black dark:text-white">VILLAFRANCA di VERONA</p>
                        <p class="w-4/5 text-base italic text-center dark:text-white leading-loose">"
                            A Villafranca, luogo di passaggio e di incontro, i sovrani delle potenze coinvolte si accordarono l'11 luglio 1859."</p>
                    </div>
                    <div id="map" class="h-72 z-10 border-solid border-4 border-gray-200 dark:border-as-nero rounded-3xl"></div>
                </div> 
                <div class="grid place-content-center mt-8">
                    <div class="bg-as-rosso hover:bg-as-nero dark:hover:bg-light text-white hover:dark:text-as-nero rounded-md p-4 my-4 md:my-2 w-auto">
                        <?php include 'share.php'?>
                    </div>
                </div>
                <div name="casa del trattato o museo del risorgimento" class="flex flex-col-reverse md:flex-row gap-8 mt-8 justify-center items-center">
                    <video class="block border-solid border-4 aspect-[4/5] border-gray-200 dark:border-as-nero rounded-3xl w-full md:w-76 lg:w-96" controls preload="auto" controlslist="nodownload" poster="./video/casa-del-trattato.png">
                        <source src="./video/casa-del-trattato.mp4" type="video/mp4">
                    </video>
                    <div class="block dark:text-white">
                        <h1 class="w-full text-2xl text-center lg:text-3xl md:text-left">
                            MUSEO del RISORGIMENTO
                        </h1>
                        <div name="a11y" class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-6 my-6">
                            <div class="flex flex-row justify-center items-center gap-2">
                                <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="casa-del-trattato" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                                <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="casa-del-trattato" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>
                            </div>
                            <audio title="audio descrizione casa del trattato" src="./audio/museoRisorgimento_amplificato.mp3" controls controlsList="nodownload">
                                Your browser does not support the <code>audio</code> element.
                            </audio>                 
                        </div>
                        <div id="casa-del-trattato" style="font-size: 1rem;">
                            <span>L’11 luglio 1859, Napoleone III e Francesco Giuseppe, imperatori di Francia ed Austria, si incontrano per un armistizio, primo passo per la fine della Seconda guerra d’Indipendenza.</span>
                            <span class="block mt-2">Il colloquio avviene in una stanza di un palazzo signorile della famiglia Gandini Morelli Bugna.</span>
                            <span class="block mt-2">L’edificio oggi, noto anche come Casa del trattato e situato, non a caso, in via Pace, ospita il Museo del Risorgimento, i cui primi allestimenti risalgono al 1959, centenario dell’incontro.</span>
                            <span class="block mt-2">La ricca collezione comprende: armi e cimeli militari dei diversi eserciti in lotta, stampe d’epoca e documenti relativi ai protagonisti villafranchesi.</span>
                        </div>
                    </div>
                </div> 
                <div name="caffe fantoni" class="flex flex-col md:flex-row gap-8 mt-16 md:mt-8 justify-center items-center">
                    <div class="block dark:text-white md:text-right">
                        <h1 class="w-full text-2xl text-center lg:text-3xl md:text-right">
                            CAFF&Egrave; FANTONI
                        </h1>
                        <div name="a11y" class="flex flex-col md:flex-row-reverse justify-center md:justify-between items-center gap-6 my-6">
                            <div class="flex flex-row justify-center items-center gap-2">
                                <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="caffe-fantoni" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                                <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="caffe-fantoni" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>
                            </div>
                            <audio title="audio descrizione caffe fantoni" src="./audio/caffeFantoni_amplificato.mp3" controls controlsList="nodownload">
                                Your browser does not support the <code>audio</code> element.
                            </audio>                 
                        </div>  
                        <div id="caffe-fantoni" style="font-size: 1rem;">                      
                            <span>Caff&egrave; Fantoni apre i battenti nel 1842, quando Villafranca &egrave; ancora una cittadina austriaca.</span>
                            <span class="block mt-2">I proprietari seguono da vicino le vicende del Risorgimento, adattando stile e prodotti commerciali. Il primo arredo del locale richiama infatti l’ambiente viennese, la “Torta della Pace” e i “Biscotti Umberto” rievocano invece l’armistizio del 1859 e l’episodio del Quadrato.</span>
                            <span class="block mt-2">&Egrave; situato nel centro del paese, a poca distanza da due lapidi: una che ricorda il soggiorno di Carlo Alberto presso l’albergo “Il Sole”, nel 1848, durante la Prima guerra d’Indipendenza, e l’altra che indica la sosta di Napoleone Bonaparte, nel 1796.</span>
                        </div>                    
                    </div>
                    <video class="block border-solid border-4 aspect-[4/5] border-gray-200 dark:border-as-nero rounded-3xl w-full md:w-76 lg:w-96" controls preload="auto" controlslist="nodownload" poster="./video/caffe-fantoni.png">
                        <source src="./video/caffe-fantoni.mp4" type="video/mp4">
                    </video>
                </div>
                <div name="link interno" class="flex justify-around flex-col md:flex-row items-center mt-8 gap-8 md:gap-0">
                    <p class="text-base text-center text-black dark:text-white">Guarda la nostra guida sui luoghi del Risorgimento a Custoza.</p>
                    <a href="custoza.php" class="bg-as-rosso text-white text-center w-32 md:w-48 py-2 rounded-md md:text-xl hover:bg-as-nero dark:hover:bg-light hover:dark:text-as-nero">CUSTOZA</a>
                </div>
            </div>
        </div>
    </main>
    <script src="js/a11y.js" async></script>
    <script src="js/mapVillafranca.js"></script>
    <footer class="flex flex-col md:flex-row justify-center bg-white dark:bg-as-nero md:justify-between items-center bottom-0 w-full mx-auto p-2 md:p-6 lg:p-8 md:max-w-5xl text-black pb-8 md:pb-0">
        <?php include 'footer.php' ?>
    </footer>
</body>
