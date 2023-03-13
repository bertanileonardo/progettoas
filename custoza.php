<!DOCTYPE html>
<html lang="it">
<head>
    <title>AS &minus; Custoza</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina dedicata alla storia di Custoza">
    <meta property="og:description" content="Pagina dedicata alla storia di Custoza" />
    <meta property="og:title" content="AS - Custoza" />
    <meta property="og:type" content="website"/>
    <!-- <meta property="og:image" content="https://www.progettoas.org/image/avantisavoiaog.jpg" /> -->
    <meta property="og:image" content="https://www.progettoas.org/image/ossariogrande.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:alt" content="Logo avantisavoia" />
    <meta property="og:url" content="https://www.progettoas.org/custoza.php" />
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
    <link rel="preload" as="script" href="js/mapCustoza.js"/>
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
        <div class="block bg-[url(../image/ossario.jpg)] md:bg-[url(../image/frontespizio-custoza.svg)] bg-center bg-no-repeat bg-cover rounded-b-3xl" style="height: 35vh;">
        </div>
        <div class="block mb-8 mt-8 md:max-w-5xl">             
            <div class="px-4 md:px-6">  
                <div class="flex flex-col md:grid md:grid-cols-3 gap-3 md:gap-0 justify-center items-center">
                    <div class="md:col-span-2 flex flex-col justify-center items-center gap-8 md:gap-12 mb-8 mt-6 md:mb-0 md:mt-0 w-full">
                        <p class="text-3xl text-center text-black dark:text-white">CUSTOZA</p>
                        <p class="w-4/5 text-base italic text-center dark:text-white leading-loose">"Nemici in vita / morte li adegu&ograve; / piet&agrave; li raccolse."</p>
                    </div>
                    <div id="map" class="h-72 w-full z-10 border-solid border-4 border-gray-200 dark:border-as-nero rounded-3xl"></div>
                </div> 
                <div class="grid place-content-center mt-8">
                    <div class="bg-as-rosso hover:bg-as-nero dark:hover:bg-light text-white hover:dark:text-as-nero rounded-md p-4 my-4 md:my-2 w-auto">
                        <?php include 'share.php'?>
                    </div>
                </div>
                <div name="ossario di custoza" class="flex flex-col-reverse md:flex-row gap-8 mt-8 justify-center items-center">
                    <video id="block-ossario" class="block border-solid border-4 aspect-[4/5] border-gray-200 dark:border-as-nero rounded-3xl w-full md:w-76 lg:w-96" controls preload="auto" controlslist="nodownload" poster="./video/custoza.png">
                        <source src="./video/custoza.mp4" type="video/mp4">
                    </video>
                    <div class="block dark:text-white">
                        <h1 class="w-full text-2xl text-center lg:text-3xl md:text-left">
                            OSSARIO di CUSTOZA
                        </h1>
                        <div name="a11y" class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-6 my-6">
                            <div class="flex flex-row justify-center items-center gap-2">
                                <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="ossario" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                                <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="ossario" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>
                            </div>
                            <audio title="audio descrizione casa del trattato" src="./audio/ossario_amplificato.mp3" controls controlsList="nodownload">
                                Your browser does not support the <code>audio</code> element.
                            </audio>                 
                        </div>
                        <div id="ossario" class="text-center md:text-left" style="font-size: 1rem;">
                            <span>Il monumento si erge sulla cima del colle Belvedere, a dominare i luoghi dove si sono combattute le battaglie decisive della Prima e della Terza guerra d’Indipendenza.</span>
                            <span class="block mt-2">&Egrave; il parroco Gaetano Pivatelli a ispirare l’opera che, dopo un concorso nazionale, viene realizzata dall’architetto Giacomo Franco e inaugurata il 24 giugno 1879 alla presenza di autorit&agrave; sia del Regno d’Italia che dell’Impero asburgico.</span>
                            <span class="block mt-2">Simbolo di pace, &egrave; costituito di tre parti principali: la cripta, dove sono conservati i resti di quasi 2000 caduti negli scontri del 1848 e del 1866; la cappella; il ballatoio, che introduce ad un piccolo museo archeologico e dal quale &egrave; visibile un incredibile panorama.</span>

                        </div>  
                    </div>
                </div> 
                <div name="monumento ai granatieri di sardegna" class="flex flex-col md:flex-row gap-8 mt-16 md:mt-8 justify-center items-center">
                    <div class="block dark:text-white md:text-right">
                        <h1 class="w-full text-2xl text-center lg:text-3xl md:text-right">
                            MONUMENTO ai GRANATIERI di SARDEGNA
                        </h1>
                        <div name="a11y" class="flex flex-col md:flex-row-reverse justify-center md:justify-between items-center gap-6 my-6">
                            <div class="flex flex-row justify-center items-center gap-2">
                                <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="granatieri" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                                <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="granatieri" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>
                            </div>
                            <audio title="audio descrizione caffe fantoni" src="./audio/granatieri_amplificato.mp3" controls controlsList="nodownload">
                                Your browser does not support the <code>audio</code> element.
                            </audio>                 
                        </div>  
                        <div id="granatieri" class="text-center md:text-right" style="font-size: 1rem;">                      
                            <span>Tra i vigneti di Custoza, in aperta campagna e a poche centinaia di metri dalla Casa del Tamburino Sardo, si trova un obelisco in pietra grigia alla memoria dei Granatieri di Sardegna che qui trovarono la morte il 24 giugno 1866, durante la battaglia decisiva della Terza guerra d'Indipendenza.</span>
                            <span class="block mt-2">Il monumento &egrave; sulla sommit&agrave; del Monte Croce, una posizione strategica dalla quale &egrave; visibile l'intera pianura tra Villafranca e Verona e che i granatieri riuscirono a mantenere respingendo due attacchi austriaci, prima di essere sconfitti da avversari maggiori nel numero e meglio armati.</span>
                        </div>                    
                    </div>
                    <div id="block-granatieri" class="block border-solid border-4 aspect-[4/5] border-gray-200 bg-[url(../image/granatieri-di-sardegna.jpg)] bg-center bg-no-repeat bg-cover dark:border-as-nero rounded-3xl w-full md:w-76 md:h-22p5 lg:w-96 lg:h-30">
                    </div>
                </div>
                <div name="casa del tamburino sardo" class="flex flex-col-reverse md:flex-row gap-8 mt-16 md:mt-8 justify-center items-center">
                    <div id="block-tamburino" class="block border-solid border-4 aspect-[4/5] border-gray-200 bg-[url(../image/tamburino-sardo.jpg)] bg-center bg-no-repeat bg-cover dark:border-as-nero rounded-3xl w-full md:w-76 md:h-22p5 lg:w-96 lg:h-30"></div>
                    <div class="block dark:text-white">
                        <h1 class="w-full text-2xl text-center lg:text-3xl md:text-left">
                            CASA del TAMBURINO SARDO
                        </h1>
                        <div name="a11y" class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-6 my-6">
                            <div class="flex flex-row justify-center items-center gap-2">
                                <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="tamburino-sardo" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                                <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="tamburino-sardo" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>
                            </div>
                            <audio title="audio descrizione casa del tamburino sardo" src="./audio/tamburino_amplificato.mp3" controls controlsList="nodownload">
                                Your browser does not support the <code>audio</code> element.
                            </audio>                 
                        </div>
                        <div id="tamburino-sardo" class="text-center md:text-left" style="font-size: 1rem;">
                            <span>La casa detta del Tamburino Sardo &egrave; casa colonica ottocentesca su due livelli posta sul monte Croce, teatro di eroiche vicende risorgimentali.</span>
                            <span class="block mt-2">Il tamburino riusc&igrave; a consegnare una richiesta di aiuto al battaglione dei Carabinieri in prossimit&agrave; di Villafranca nonostante una ferita alla gamba. Due giorni dopo, tuttavia, l'esercito piemontese ripiegher&agrave; a Goito.</span>
                            <span class="block mt-2">Una targa all'esterno della casa ricorda il sacrificio del giovane; l'episodio &egrave; narrato da Edmondo De Amicis nel suo “Cuore”.</span>
                        </div>
                    </div>
                </div> 
                <div name="link interno" class="flex justify-around flex-col md:flex-row items-center mt-8 gap-8 md:gap-0">
                    <p class="text-base text-center text-black dark:text-white">Guarda la nostra ricostruzione della Battaglia di Custoza del 25 luglio 1848.</p>
                    <a href="diorama.php" class="bg-as-rosso text-white text-center w-32 md:w-48 py-2 rounded-md md:text-xl hover:bg-as-nero dark:hover:bg-light hover:dark:text-as-nero">IL DIORAMA</a>
                </div>
            </div>
        </div>
    </main>
    <script src="js/a11y.js" async></script>
    <script src="js/mapCustoza.js"></script>
    <script>
        var height = document.getElementById("block-ossario").offsetHeight;
        console.log(height);
        document.getElementById("block-granatieri").style.height = height;
        document.getElementById("block-tamburino").style.height = height;
    </script>
    <footer class="flex flex-col md:flex-row justify-center bg-white dark:bg-as-nero md:justify-between items-center bottom-0 w-full mx-auto p-2 md:p-6 lg:p-8 md:max-w-5xl text-black pb-8 md:pb-0">
        <?php include 'footer.php' ?>
    </footer>
</body>
