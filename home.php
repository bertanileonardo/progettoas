<!DOCTYPE html>
<html lang="it">
<head>
    <title>AS &minus; Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Progetto scolastico di conoscenza del territorio veronese durante le guerre di indipendenza">
    <meta property="og:description" content="Progetto scolastico di conoscenza del territorio veronese durante le guerre di indipendenza" />
    <meta property="og:title" content="Mappa progetto" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://www.progettoas.org/image/avantisavoiaog.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:alt" content="Logo avantisavoia" />
    <meta property="og:url" content="https://www.progettoas.org/home.php" />
    <link rel="canonical" href="https://progettoas.org" />
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
    <link rel="preload" as="script" href="js/mapClusterFull.js"/>
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/iubenda_cs.js"/>
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/tcf/stub-v2.js"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./leaflet/leaflet.css">
	<script src="./leaflet/leaflet-src.js"></script>
	<link rel="stylesheet" href="./leaflet/MarkerCluster.css">
	<link rel="stylesheet" href="./leaflet/MarkerCluster.Default.css">
	<link rel="stylesheet" href="./leaflet/L.Control.Locate.css">
	<script src="./leaflet/leaflet.markercluster-src.js"></script>
	<script src="./leaflet/L.Control.Locate.js"></script>
    <link rel="stylesheet" href="css/mappa.css">
    <!-- <script src="js/map.js"></script> -->
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
    <script>(_iub=self._iub||[]).csConfiguration={cookiePolicyId:76111223,siteId:2465383,timeoutLoadConfiguration:3e4,lang:"it",enableTcf:!0,tcfVersion:2,tcfPurposes:{2:"consent_only",3:"consent_only",4:"consent_only",5:"consent_only",6:"consent_only",7:"consent_only",8:"consent_only",9:"consent_only",10:"consent_only"},invalidateConsentWithoutLog:!0,googleAdditionalConsentMode:!0,consentOnContinuedBrowsing:!1,banner:{position:"bottom",acceptButtonDisplay:!0,customizeButtonDisplay:!0,closeButtonDisplay:!0,closeButtonRejects:!0,fontSizeBody:"14px"}};</script>
    <script async src="https://cdn.iubenda.com/cs/iubenda_cs.js"></script>
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
        <div class="block bg-[url(../image/team.webp)] bg-center bg-no-repeat bg-cover rounded-b-3xl" style="height: 35vh;">
        </div>
        <div class="block mb-8 mt-8 md:max-w-5xl">             
            <div class="px-4 md:px-6">
                <div id="descrizione" class="md:rounded-3xl md:bg-as-rosso dark:text-white md:text-white p-0 md:p-6">
                    <div class="p-1">
                        <div class="mb-6 flex flex-col md:flex-row gap-8 justify-between items-center">
                            <h1 id="descrition_title" class="block text-2xl text-left">AvAnti Savoia</h1>
                            <div name="a11y" class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-6">
                                <div class="flex flex-row justify-center items-center gap-2">
                                    <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="description-place" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                                    <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="description-place" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>                        
                                </div>
                                <audio title="audio descrizione pagina" class="block" src="./audio/presentazioneAS_amplificato.mp3" controls controlsList="nodownload noaudio">
                                    Your browser does not support the <code>audio</code> element.
                                </audio>
                            </div>
                        </div>
                        <p id="description-place" class="text-sm md:text-base text-center md:text-left" style="font-size: 1rem;">
                            <span>Il territorio ci parla. Custoza sembra protetta dall’Ossario e camminando tra le sue campagne si pu&ograve; giungere alla Casa del Tamburino sardo o, poco pi&ugrave; in l&agrave;, al Monumento ai Granatieri di Sardegna.</span>
                            <span class="block mt-2">Chi arriva a Villafranca da Verona nota subito l’Obelisco del Quadrato e, magari passeggiando verso il centro, percorre via Pace, dove una lapide ricorda un episodio del 1859 e introduce al Museo del Risorgimento. Le strade attorno al polo scolastico portano i nomi di Luigi Prina e Luigi Zanini.</span>
                            <span class="block mt-2">L’app e i suoi contenuti servono a congiungere questi ed altri luoghi, comprendere e approfondire i segni del territorio, una zona chiave per il Risorgimento italiano.</span>
                        </p>  
                    </div>
                </div>
                <div name="tappe_locali" class="grid grid-cols-1 mt-8 md:grid-cols-2 gap-8 md:gap-4 justify-center items-center">
                    <div class="flex justify-center items-center flex-col">
                        <p class="w-full md:w-5/6 text-xl text-center text-black dark:text-white">Le nostre guide alle localit&agrave; interessate dalle battaglie.</p>
                        <div class="mt-8 flex md:flex-col gap-6 justify-evenly items-center">
                            <a href="villafranca.php" class="bg-as-rosso text-white text-center w-32 md:w-48 py-2 rounded-md md:text-xl hover:bg-as-nero dark:hover:bg-light hover:dark:text-as-nero"">VILLAFRANCA</a>
                            <a href="custoza.php" class="bg-as-rosso text-white text-center w-32 md:w-48 py-2 rounded-md md:text-xl hover:bg-as-nero dark:hover:bg-light hover:dark:text-as-nero"">CUSTOZA</a>
                        </div>
                    </div>
                    <div id="map" class="h-72 z-10 border-solid border-4 border-gray-200 dark:border-as-nero w-full rounded-3xl"></div>
                </div> 
                <div name="diorama" class="grid grid-cols-1 mt-8 md:grid-cols-2 gap-8 md:gap-4 justify-center items-center">
                    <div class="h-72 bg-[url(../image/soldatini.jpg)] bg-no-repeat bg-cover bg-center border-solid border-4 border-gray-200 dark:border-as-nero w-full rounded-3xl object-cover">
                        
                    </div>
                    <div class="flex flex-col gap-8 justify-center items-center">
                        <div class="flex flex-col gap-4 justify-center items-center">
                            <p class="block text-xl text-center text-black dark:text-white w-full md:w-5/6">La ricostruzione della battaglia di Custoza avvenuta il 25 luglio 1848.</p>
                            <p class="block text-center text-black dark:text-white w-full md:w-5/6">realizzata dagli studenti del nostro istituto</p>
                        </div>
                        <a href="diorama.php" class="bg-as-rosso text-white text-center w-32 md:w-48 py-2 rounded-md md:text-xl hover:bg-as-nero dark:hover:bg-light hover:dark:text-as-nero">IL DIORAMA</a>
                    </div>
                </div> 
            </div>
        </div>
    </main>
    <script src="js/a11y.js"></script>
    <script src="js/mapClusterFull.js"></script>
    <footer class="flex flex-col md:flex-row justify-center bg-white dark:bg-as-nero md:justify-between items-center bottom-0 w-full mx-auto p-2 md:p-6 lg:p-8 md:max-w-5xl text-black pb-8 md:pb-0">
        <?php include 'footer.php' ?>
    </footer>
    <a href="https://www.iubenda.com/privacy-policy/76111223" rel="noreferrer nofollow" target="_blank"><span class="sr-only">Privacy Policy - </span></a><a href="#" role="button" class="iubenda-advertising-preferences-link"><span class="sr-only">Personalizza tracciamento pubblicitario</span></a>
</body>