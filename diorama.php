<!DOCTYPE html>
<html lang="it">
<head>
    <title>AS &minus; Diorama Custoza</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina dedicata alla ricostruzione di una battaglia di Custoza del 1848">
    <meta property="og:description" content="Pagina dedicata alla ricostruzione di una battaglia di Custoza del 1848" />
    <meta property="og:title" content="AS - Diorama Custoza" />
    <meta property="og:type" content="video.movie"/>
    <meta property="og:video" content="https://www.progettoas.org/video/battaglia-custoza.mp4" />
    <meta property="og:video:type" content="video/mp4" />
    <meta property="og:video:width" content="1920" />
    <meta property="og:video:height" content="1080" />
    <meta property="og:image" content="https://www.progettoas.org/image/battaglia-custoza.jpg" />
    <meta property="og:url" content="https://www.progettoas.org/plastico.php" />
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
    <link rel="preload" as="script" href="js/mapBattaglia.js"/>
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/iubenda_cs.js"/>
    <link rel="preload" as="script" href="https://cdn.iubenda.com/cs/tcf/stub-v2.js"/>
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
    <script src="https://cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
    <script>(_iub=self._iub||[]).csConfiguration={cookiePolicyId:76111223,siteId:2465383,timeoutLoadConfiguration:3e4,lang:"it",enableTcf:!0,tcfVersion:2,tcfPurposes:{2:"consent_only",3:"consent_only",4:"consent_only",5:"consent_only",6:"consent_only",7:"consent_only",8:"consent_only",9:"consent_only",10:"consent_only"},invalidateConsentWithoutLog:!0,googleAdditionalConsentMode:!0,consentOnContinuedBrowsing:!1,banner:{position:"bottom",acceptButtonDisplay:!0,customizeButtonDisplay:!0,closeButtonDisplay:!0,closeButtonRejects:!0,fontSizeBody:"14px"}};</script>
    <script async src="https://cdn.iubenda.com/cs/iubenda_cs.js"></script>
    <script type="module">
        import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
        const el = document.createElement('pwa-update');
        document.body.appendChild(el);
    </script>     
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
</head>
<body class="bg-white dark:bg-as-nero font-['Open_Sans']">
    <nav class="sticky top-0 z-50 bg-white dark:bg-as-nero w-full px-3 lg:px-0">
        <?php include 'nav.php'?>
    </nav> 
    <script src="js/fav-dk.min.js" async></script>   
    <main class="w-full bg-light dark:bg-black grid justify-center mx-0">
        <div class="block bg-[url(../image/plastico-aerea.jpg)] md:bg-center bg-no-repeat bg-cover rounded-b-3xl" style="height: 35vh;">
        </div>
        <div class="block mb-8 mt-8 md:max-w-5xl">             
            <div class="px-4 md:px-6">  
                <div class="flex flex-col md:grid md:grid-cols-3 gap-3 md:gap-0 justify-center items-center">
                    <div class="md:col-span-2 flex flex-col justify-center items-center gap-8 md:gap-12 mb-8 mt-6 md:mb-0 md:mt-0">
                        <p class="text-3xl text-center text-black dark:text-white">IL DIORAMA</p>
                        <p class="w-4/5 text-base italic text-center dark:text-white leading-loose">"Ars Bellica rappresenta il progetto che ha coinvolto oltre 15 studenti dell'istituto per la realizzazione di un diorama a tema storico."</p>
                    </div>
                    <div id="map" class="h-72 z-10 border-solid border-4 border-gray-200 dark:border-as-nero rounded-3xl"></div>
                </div> 
                <div class="grid place-content-center mt-8">
                    <div class="bg-as-rosso hover:bg-as-nero dark:hover:bg-light text-white hover:dark:text-as-nero rounded-md p-4 my-4 md:my-2 w-auto">
                        <?php include 'share.php'?>
                    </div>
                </div> 
                <div id="intro-diorama" class="flex flex-col justify-center items-center dark:text-white" style="font-size: 1rem;">
                    <div class="grid grid-cols-1 mt-8 md:grid-cols-2 gap-8 md:gap-4 justify-center items-center">
                        <div class="flex flex-col justify-center items-center">                            
                            <div class="flex flex-row justify-center items-center gap-2 dark:text-white">
                                <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="intro-diorama" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                                <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="intro-diorama" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>                        
                            </div>
                            <div class="text-center">
                                <span class="block mt-8">L’ episodio scelto è stato la battaglia di Custoza, combattuta dalle truppe del Regno di Sardegna, guidate dal re Carlo Alberto di Savoia, e da quelle dell'Impero austriaco, comandate dal maresciallo Josef Radetzky tra il 22 e il 27 Luglio 1848 nell’ ambito della Prima guerra d’indipendenza.</span>
                                <span class="block mt-2">Il plastico rappresenta il ripiegamento del battaglione centrale dei piemontesi avvenuto il pomeriggio del 25 luglio.</span>
                            </div>
                        </div>
                        <video class="block border-solid border-4 bg-black border-gray-200 dark:border-as-nero rounded-3xl w-full aspect-video" controls nodownload poster="./video/battaglia-custoza.png">
                            <source src="./video/battaglia-custoza.mp4" type="video/mp4">
                        </video>  
                    </div>
                    <div class="grid grid-cols-1 mt-8 md:grid-cols-2 gap-8 md:gap-4 justify-center items-center">
                        <div id="myCarousel" class="carousel slide border-solid border-4 bg-black border-gray-200 dark:border-as-nero rounded-3xl" data-ride="carousel">
                            <!-- Indicators -->
                            <!-- <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol> -->
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner rounded-3xl">
                                <div class="item w-full aspect-video md:aspect-auto md:h-56 lg:h-64 active">
                                    <img src="image/soldatini1.jpg" class="block w-full object-cover h-64" alt="immagine soldatini 1">
                                </div>
                                <div class="item w-full aspect-video md:aspect-auto md:h-56 lg:h-64">
                                    <img src="image/soldatini2.jpg" class="block w-full object-cover h-64" alt="immagine soldatini 2">
                                </div>                            
                                <div class="item w-full aspect-video md:aspect-auto md:h-56 lg:h-64">
                                    <img src="image/soldatini3.jpg" class="block w-full object-cover h-64" alt="immagine soldatini 3">
                                </div>                            
                                <div class="item w-full aspect-video md:aspect-auto md:h-56 lg:h-64">
                                    <img src="image/soldatini4.jpg" class="block w-full object-cover h-64" alt="immagine soldatini 4">
                                </div>                            
                                <div class="item w-full aspect-video md:aspect-auto md:h-56 lg:h-64">
                                    <img src="image/soldatini5.jpg" class="block w-full object-cover h-64" alt="immagine soldatini 5">
                                </div>                            
                                <div class="item w-full aspect-video md:aspect-auto md:h-56 lg:h-64">
                                    <img src="image/soldatini6.jpg" class="block w-full object-cover h-64" alt="immagine soldatini 6">
                                </div>                            
                                <div class="item w-full aspect-video md:aspect-auto md:h-56 lg:h-64">
                                    <img src="image/soldatini7.jpg" class="block w-full object-cover h-64" alt="immagine soldatini 7">
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control rounded-l-3xl" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control rounded-r-3xl" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <p class="block text-center">
                            La realizzazione del diorama è avvenuta sotto la direzione dei docenti Porto Luca e Scolari Lamberto.
                            <span class="block mt-2"> Il lavoro si è suddiviso tra la pitturazione dei soldati – dapprima austriaci e successivamente piemontesi – durante i primi mesi, per poi essere affiancato dalla modellazione del terreno vero e proprio, iniziata dopo alcune settimane.</span>
                        </p>

                    </div>
                </div>
                
                           
                
                
            </div>
        </div>
    </main>
    <script src="js/a11y.js" async></script>
    <script src="js/mapBattaglia.js"></script>
    <footer class="flex flex-col md:flex-row justify-center bg-white dark:bg-as-nero md:justify-between items-center bottom-0 w-full mx-auto p-2 md:p-6 lg:p-8 md:max-w-5xl text-black pb-8 md:pb-0">
        <?php include 'footer.php' ?>
    </footer>
    <a href="https://www.iubenda.com/privacy-policy/76111223" rel="noreferrer nofollow" target="_blank"><span class="sr-only">Privacy Policy - </span></a><a href="#" role="button" class="iubenda-advertising-preferences-link"><span class="sr-only">Personalizza tracciamento pubblicitario</span></a>
</body>