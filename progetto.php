<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS &minus; Progetto</title>
    <meta property="og:title" content="Il progetto AS" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://www.progettoas.org/beta/image/avantisavoiaog.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="256" />
    <meta property="og:image:height" content="256" />
    <meta property="og:image:alt" content="Logo avantisavoia" />
    <meta property="og:url" content="https://www.progettoas.org/progetto.php" />
    <meta property="og:description" content="Progetto scolastico di conoscenza del territorio, del Villafranchese durante le guerre di indipendenza" />
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="preconnect" href="https://basemaps.cartocdn.com/light_all/">
    <link rel="preconnect" href="https://basemaps.cartocdn.com/dark_all/"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="css/accordion.min.css">
    <script src="js/script.js" async></script>
    <script src="js/app.js"></script>
</head>
<body class="bg-white dark:bg-as-nero font-['Open_Sans']">
      <nav class="sticky top-0 z-50 bg-white dark:bg-as-nero w-full px-3 lg:px-0">
        <?php include 'nav.php'?>
      </nav>
      <script src="js/fav-dk.min.js" async></script>
      <main class="w-full bg-light dark:bg-black grid justify-center mx-0">
        <div class="block bg-white dark:bg-light bg-center bg-no-repeat grid place-content-center bg-cover rounded-b-3xl" style="height: 35vh;">
          <img src="image/logomonogramma.svg" class="rounded-3xl bg-white p-8 mb-8" style="height: 15vh;" alt="" srcset=""> 
        </div>
        <div class="block mb-8 mt-8 md:max-w-5xl">             
            <div class="px-4 md:px-6">
                <div id="descrizione" class="md:rounded-3xl md:bg-as-rosso dark:text-white md:text-white p-0 md:p-6">
                <div class="p-1">
                    <div class="mb-6 flex flex-col md:flex-row gap-8 justify-between items-center">
                      <h1 id="descrition_title" class="block text-2xl text-left">Il progetto</h1>
                      <div name="a11y" class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-6">
                        <div class="flex flex-row justify-center items-center gap-2">
                            <button id="zoom-out" title="diminuisci carattere" onclick="riduciFont(this)" rel="description-place" class="h-6 w-6 grid place-content-center"><span class="text-xs">A</span></button>
                            <button id="zoom-in" title="aumenta carattere" onclick="aumentaFont(this)" rel="description-place" class="h-6 w-6 grid place-content-center"><span class="text-xl">A</span></button>                                         
                        </div>
                        <audio title="audio descrizione pagina" class="block " src="./audio/descrizioneAS_amplificato.mp3" controls controlsList="nodownload noaudio">
                          Your browser does not support the <code>audio</code> element.
                        </audio>
                      </div>
                    </div>                    
                    <p id="description-place" class="text-sm md:text-base text-center md:text-left" style="font-size: 1rem;">
                      <span>Il progetto AvAnti Savoia! Il Risorgimento a Villafranca e dintorni in Web app, realizzato con il contributo della Regione Veneto, ha coinvolto 4 classi di diversi indirizzi e 8 docenti di varie discipline, dell’Istituto C. Anti.</span>
                      <span class="block mt-2">Il prodotto è una Web app che sfruttando la geolocalizzazione permette di accedere a contenuti multimediali inerenti la storia del Risorgimento del territorio limitrofo la scuola.</span>
                      <span class="block mt-2">Per il lavoro si è ricorso a molteplici competenze. Il territorio è stato letto in chiave storico-artistica, alcuni hanno effettuato riprese e foto, editing video, scritto e registrato testi; altri programmato l’app, dedicandosi agli aspetti tecnici.</span>
                    </p>  
                </div>                
              </div>
              <div>
                <button type="slide" tabindex="0" id="q1" class="text-white accordion rounded-3xl flex flex-row justify-between items-center bg-as-rosso dark:hover:bg-white dark:hover:text-as-nero hover:bg-as-nero mt-6 px-7 py-6">
                  <div>I docenti referenti del progetto</div>
                  <div class="icon-keyboard_arrow_down arrow-down-transform"></div>
                </button>
                <div class="panel text-black dark:text-white">
                    <p class="pt-6 px-7">
                      Questo progetto, nelle sue numerose sfaccettature, è stato coordinato da alcuni docenti del nostro istituto. I referenti del progetto sono: 
                      Prof.ssa Marianna Barugola, Prof.ssa Cristina Carletti, Prof.ssa Irene Disco, Prof.ssa Grazia Felici, Prof. Christian Marchesini, Prof. Luca Porto, Prof. Lamberto Scolari e Prof. Andrea Tumicelli.
                    </p>
                </div>
                <button type="slide" tabindex="0" id="q2" class="text-white accordion rounded-3xl flex flex-row justify-between items-center bg-as-rosso dark:hover:bg-white dark:hover:text-as-nero hover:bg-as-nero mt-6 px-7 py-6">
                  <div>Altre figure che hanno contribuito</div>
                  <div class="icon-keyboard_arrow_down arrow-down-transform"></div>
                </button>
                <div class="panel text-black dark:text-white">
                    <p class="pt-6 px-7">Questo progetto non avrebbe potuto prendere vita senza il supporto amministrativo del D.S.G.A Marco Savazzi e del supporto tecnico di: Prof. Federico Beghini (informatica) e Prof.ssa Roberta Sainato (laboratorio multimediale) e Sig. Missaglia Andrea (tecnico laboratorio multimediale).</p>
                </div>
                
                <button type="slide" tabindex="0" id="q3" class="text-white accordion rounded-3xl flex flex-row justify-between items-center bg-as-rosso dark:hover:bg-white dark:hover:text-as-nero hover:bg-as-nero mt-6 px-7 py-6">
                  <div>Le classi che hanno partecipato</div>
                  <div class="icon-keyboard_arrow_down arrow-down-transform"></div>
                </button>
                <div class="panel text-black dark:text-white">
                    <p class="pt-6 px-7">A questo progetto hanno partecipato quattro classi del nostro istituto: 5ALA (Liceo scientifico opzione scienze applicate), 5AEA (Istituto tecnico elettronica-elettrotecnica, articolazione automazione), 4ALM (Liceo artistico audiovisivo e multimediale), 4BLM (Liceo artistico audiovisivo e multimediale).</p>
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
        
</body>
</html>
