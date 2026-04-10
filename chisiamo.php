<center>
    <?php
    echo "<h1>Pagina in manutenzione.</h1>";
    echo "<p>Rimando alla home...</p>";
    ?>

    <script>
        function home() {
            setInterval(() => window.location = "index.php", 2000);
        }

        window.onload = home();
    </script>
</center>