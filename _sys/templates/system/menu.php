<head>
    <meta name="author" content="Julian Ciuciumis">
    <meta charset="UTF-8">
    <title>gar-menu.php</title>
    <link rel="stylesheet" type="text/css" href="gar.css">
</head>
<body>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <h2>Klanten</h2>
        <a href="gar-create-klant1.php">Voeg klant toe</a>
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
        <h2>Home</h2>
        <a href="gar-menu.php">Home</a>
    </div>
</div>

<span style="margin-right: 1ch; top: 1.3ch;font-size:30px;cursor:pointer;float: right;overflow: hidden;" onclick="openNav()">&#9776;</span>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }
    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>

<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 1px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
