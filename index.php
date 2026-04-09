<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Security 4AT - Homepage</title>
    <link rel="stylesheet" href="style/home_style.css">
</head>

<body>
    <?php include "components/header.php" ?>

    <section class="hero" id="home">
        <div class="hero-left">
            <span class="tag">▪ PROGETTO EDUCATIVO</span>
            <h1>Naviga il Web con <br><span class="highlight">Consapevolezza.</span></h1>
            <p class="subtitle">
                Insieme per costruire uno spazio digitale sicuro. Scopri gli strumenti e i
                consigli necessari per proteggere la tua identità e i tuoi dati online.
            </p>
            <div class="hero-buttons">
                <button class="btn btn-blue">Inizia il Percorso</button>
                <button class="btn btn-light">Scopri gli argomenti</button>
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-img-container">
                <img src="https://www.digife.it/wp-content/uploads/2016/06/sicurezza-siti-web-digife.jpg" class="hero-img" alt="Hero Image">
                <p class="img-caption">"La sicurezza non è un prodotto che si acquista, ma un processo che si mette in atto." <br> - Kevin Mitnick </p>
            </div>
        </div>
    </section>

    <section class="intro-section">
        <h2>Cos’è la Sicurezza <span class="green">Online?</span></h2>
        <p class="intro-text">
            La sicurezza online non riguarda solo l’uso di software complessi, ma soprattutto lo sviluppo
            di una “mentalità critica”. È la capacità di riconoscere le minacce, proteggere la propria
            privacy e comportarsi in modo responsabile negli spazi digitali.
        </p>
        <p class="intro-text">
            Ogni nostra azione online lascia una traccia. Capire come gestire queste impronte digitali è
            il primo passo per un futuro digitale sereno.
        </p>
    </section>

    <section class="cards-grid">
        <div class="card">
            <div class="icon">🔒</div>
            <h3>Protezione</h3>
            <p>Difendere i propri dispositivi da accessi non autorizzati.</p>
        </div>
        <div class="card green-card">
            <div class="icon">🛡️</div>
            <h3>Privacy</h3>
            <p>Scegliere quali informazioni condividere e con chi.</p>
        </div>
        <div class="card">
            <div class="icon">🧭</div>
            <h3>Consapevolezza</h3>
            <p>Identificare tentativi di phishing e truffe digitali.</p>
        </div>
        <div class="card blue-card">
            <div class="icon">⚖️</div>
            <h3>Etica</h3>
            <p>Rispettare gli altri nel contesto digitale.</p>
        </div>
    </section>

    <div class="card args">
        <div class="heading">
            <svg class="customBlue" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="m300-300 280-80 80-280-280 80-80 280Zm180-120q-25 0-42.5-17.5T420-480q0-25 17.5-42.5T480-540q25 0 42.5 17.5T540-480q0 25-17.5 42.5T480-420Zm0 340q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Zm0-320Z" />
            </svg>
            <h4>Argomenti Correlati</h4>
        </div>
        <ul class="listOfArgs">
            <li class="card">
                <a href="gruppo1.php">Gruppo 1</a>
            </li>
            <br>
            <li class="card">
                <a href="gruppo2.php">Gruppo 2</a>
            </li>
            <br>
            <li class="card">
                <a href="gruppo3.php">Gruppo 3</a>
            </li>
            <br>
            <li class="card">
                <a href="gruppo4.php">Gruppo 4</a>
            </li>
            <br>
            <li class="card">
                <a href="gruppo5.php">Gruppo 5</a>
            </li>
        </ul>
    </div>
</body>

</html>