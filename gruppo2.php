<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Web Security 4AT - Sicurezza dei siti web</title>
</head>

<body>
    <?php include "components/header.php"; ?>

    <h1>La sicurezza dei siti web</h1>

    <div class="body">
        <article>
            <p>
                La sicurezza dei siti web è l'insieme di tecniche, strumenti e pratiche utilizzate per proteggere i siti
                internet da attacchi informatici, accessi non autorizzati e furti di dati. Oggi è un elemento
                fondamentale per garantire la protezione degli utenti e delle loro informazioni online.
            </p>

            <img class="preImg" src="https://dnewpydm90vfx.cloudfront.net/wp-content/uploads/2019/08/Sicurezza-dei-siti-web-in-ambito-sanitario.jpg">

            <h2>Proteggere il web significa proteggere i dati degli utenti</h2>

            <p>
                Ogni sito web connesso a Internet può essere un possibile bersaglio per hacker o software malevoli.
                Gli attacchi informatici possono avere diversi obiettivi: rubare dati personali, bloccare il
                funzionamento di un sito oppure diffondere malware tra gli utenti.

                Tra le minacce più comuni troviamo:

                <br><br>
                <b>SQL Injection</b>: attacco che sfrutta la vulnerabilità nel database per accedere ai dati.<br>
                <b>Cross-Site Scripting (XSS)</b>: inserimento di codice malevolo nelle pagine web.<br>
                <b>Attacchi DDoS</b>: sovraccarico dei server con milioni di richieste fino a bloccare il sito.<br>
                <b>Malware</b>: software dannosi che possono infettare il sito e i suoi visitatori.

                <br><br>
                Per ridurre il rischio di attacchi è importante utilizzare protocolli sicuri come HTTPS,
                mantenere aggiornati software e plugin, usare password robuste e monitorare costantemente
                il traffico del sito.
            </p>

            <div class="containerMaster proTips">
                <div class="heading">
                    <svg class="ok" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="m438-338 226-226-57-57-169 169-84-84-57 57 141 141Zm42 258q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z" />
                    </svg>
                    <h3 class="proTipsTitle">Consigli utili per la sicurezza dei siti web</h3>
                </div>
                <div class="container proTips">
                    <div class="card heading">
                        <svg class="ok" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="m438-338 226-226-57-57-169 169-84-84-57 57 141 141Zm42 258q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z" />
                        </svg>
                        <p>Utilizzare sempre il protocollo HTTPS per criptare la comunicazione tra browser e server.</p>
                    </div>
                    <div class="card heading">
                        <svg class="ok" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="m438-338 226-226-57-57-169 169-84-84-57 57 141 141Zm42 258q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z" />
                        </svg>
                        <p>Aggiornare regolarmente CMS, plugin e software per evitare vulnerabilità.</p>
                    </div>
                    <div class="card heading">
                        <svg class="ok" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="m438-338 226-226-57-57-169 169-84-84-57 57 141 141Zm42 258q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z" />
                        </svg>
                        <p>Utilizzare password complesse e attivare l'autenticazione a due fattori.</p>
                    </div>
                    <div class="card heading">
                        <svg class="ok" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="m438-338 226-226-57-57-169 169-84-84-57 57 141 141Zm42 258q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z" />
                        </svg>
                        <p>Eseguire backup regolari del sito per poter recuperare i dati in caso di attacco.</p>
                    </div>
                </div>
            </div>

            <br>

            <div class="containerMaster mustNots">
                <div class="heading">
                    <svg class="notOk" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="m754-318-60-62q12-32 19-66.5t7-69.5v-189l-240-90-146 55-62-62 208-78 320 120v244q0 51-11.5 101T754-318Zm38 262L662-186q-38 39-84.5 65.5T480-80q-139-35-229.5-159.5T160-516v-172L56-792l56-56 736 736-56 56ZM423-425Zm91-135Zm-34 396q35-11 67-31t59-47L240-608v92q0 121 68 220t172 132Z" />
                    </svg>
                    <h3 class="mustNotsTitle">Cose da non fare nella sicurezza dei siti web</h3>
                </div>
                <div class="container mustNots">
                    <div class="card heading">
                        <svg class="notOk" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="m754-318-60-62q12-32 19-66.5t7-69.5v-189l-240-90-146 55-62-62 208-78 320 120v244q0 51-11.5 101T754-318Zm38 262L662-186q-38 39-84.5 65.5T480-80q-139-35-229.5-159.5T160-516v-172L56-792l56-56 736 736-56 56ZM423-425Zm91-135Zm-34 396q35-11 67-31t59-47L240-608v92q0 121 68 220t172 132Z" />
                        </svg>
                        <p>Non utilizzare password deboli o facilmente indovinabili.</p>
                    </div>
                    <div class="card heading">
                        <svg class="notOk" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="m754-318-60-62q12-32 19-66.5t7-69.5v-189l-240-90-146 55-62-62 208-78 320 120v244q0 51-11.5 101T754-318Zm38 262L662-186q-38 39-84.5 65.5T480-80q-139-35-229.5-159.5T160-516v-172L56-792l56-56 736 736-56 56ZM423-425Zm91-135Zm-34 396q35-11 67-31t59-47L240-608v92q0 121 68 220t172 132Z" />
                        </svg>
                        <p>Non lasciare plugin o software del sito non aggiornati.</p>
                    </div>
                    <div class="card heading">
                        <svg class="notOk" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="m754-318-60-62q12-32 19-66.5t7-69.5v-189l-240-90-146 55-62-62 208-78 320 120v244q0 51-11.5 101T754-318Zm38 262L662-186q-38 39-84.5 65.5T480-80q-139-35-229.5-159.5T160-516v-172L56-792l56-56 736 736-56 56ZM423-425Zm91-135Zm-34 396q35-11 67-31t59-47L240-608v92q0 121 68 220t172 132Z" />
                        </svg>
                        <p>Non salvare dati sensibili senza sistemi di protezione e crittografia.</p>
                    </div>
                    <div class="card heading">
                        <svg class="notOk" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="m754-318-60-62q12-32 19-66.5t7-69.5v-189l-240-90-146 55-62-62 208-78 320 120v244q0 51-11.5 101T754-318Zm38 262L662-186q-38 39-84.5 65.5T480-80q-139-35-229.5-159.5T160-516v-172L56-792l56-56 736 736-56 56ZM423-425Zm91-135Zm-34 396q35-11 67-31t59-47L240-608v92q0 121 68 220t172 132Z" />
                        </svg>
                        <p>Non ignorare aggiornamenti di sicurezza o segnali di attività sospette.</p>
                    </div>
                </div>
            </div>

            <h3 class="customBlue">"La sicurezza non è un prodotto, ma un processo."</h3>
            <div class="heading">
                <svg class="customBlue" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                    <path d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q97-30 162-118.5T718-480H480v-315l-240 90v207q0 7 2 18h238v316Z" />
                </svg>
                <p><b>Bruce Schneier</b></p>
            </div>
        </article>

        <nav>
            <?php include "components/args.php" ?>
            <br>
            <div class="card created">
                <div class="heading">
                    <svg style="fill: aliceblue;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M160-400v-80h280v80H160Zm0-160v-80h440v80H160Zm0-160v-80h440v80H160Zm360 560v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T863-380L643-160H520Zm300-263-37-37 37 37ZM580-220h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z" />
                    </svg>
                    <h4>Articolo creato da:</h4>
                </div>
                <ul>
                    <li>Baroni Lorenzo</li>
                    <li>Dimiccoli Luca</li>
                    <li>Minuti Mattia</li>
                    <li>Bitozzi Daniele</li>
                </ul>
            </div>
        </nav>
    </div>
</body>

</html>