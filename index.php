<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholastic Guardian</title>
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
                <button class="btn btn-light">Scopri le Risorse</button>
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-img-container">
                <img src="https://www.digife.it/wp-content/uploads/2016/06/sicurezza-siti-web-digife.jpg" class="hero-img" alt="Hero Image">
                <p class="img-caption">“La sicurezza non è un prodotto, è un processo.”</p>
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
</body>
</html>