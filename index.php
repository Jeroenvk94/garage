<head>
    <meta name="author" content="Julian Ciuciumis">
    <meta charset="UTF-8">
    <title>gar-menu</title>
</head>
<style>
    html{
        background-color: #000000;
    }
    body {
        font-family: 'Lato', sans-serif;
    }

    h2{
        color: white;
    }

    .overlay-content {
        position: relative;
        width: 100%;
        text-align: center;
        margin-top: 10%;
    }

    .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
    }

    .overlay a:hover {
        color: #6aa8c3;
    }


</style>
<body>

<div id="myNav" class="overlay">
    <div class="overlay-content">
        <h2>Klanten</h2>
        <a href="/klant/add">Voeg klant toe</a>
        <a href="gar-read-klant.php">Alle klanten</a>
        <a href="gar-update-klant1.php">Bewerk klant info</a>
        <a href="gar-delete-klant1.php">Verwijder klant</a>
        <br>
        <h2>Auto</h2>
        <a href="gar-create-auto1.php">Voeg auto toe</a>
        <a href="gar-read-auto.php">Alle auto's</a>
        <a href="gar-update-auto1.php">Bewerk auto info</a>
        <a href="gar-delete-auto1.php">Verwijder auto</a>
        <br>
    </div>
</div>
