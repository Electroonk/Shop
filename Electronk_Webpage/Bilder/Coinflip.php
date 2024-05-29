<?php
opcache_reset();
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaufbestätigung</title>

    <script>
        alert(localStorage.getItem("test"));
    </script>

</head>
<body>
    <center><h1>Zahlung bestätigen</h1></center>
    <br><br><br><br><br><br></br>
    <table align="center" border="1">
    <tr><center><p>Klicke um den Kauf zu bestätigen</p></tr></center> </tr> <br>
</table>
<center><b>75,46€</b></center>
<br>











<table align="center">
    <th><button style="font-size:35px; background-color: #186A3B; border-radius: 50px;" onclick="generateRandomAnswer()">Kauf bestätigen</button></th>
    <div id="loading-screen"><img src="https://m.media-amazon.com/images/G/03/ui/loadIndicators/loading-large._CB485945288_.gif"><br><br></div>
    
</table> 
<br>  
<table align="center">  
    <br /> <tr>
     <td><button style="font-size:35px; background-color: #1CB9CA; border-radius: 50px;" onclick="window.location.href='index.php';">Startseite</button></td>
  </tr>
</table> 

    <style>
        /* Stil für den Ladebildschirm */
        #loading-screen {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(253, 254, 254);
            color: white;
            font-size: 24px;
            text-align: center;
            padding-top: 50vh;
        }
    </style>

<script>
        function generateRandomAnswer() {
            // Zeige den Ladebildschirm an
            document.getElementById("loading-screen").style.display = "block";

            // Simuliere eine Verzögerung (z. B. API-Anfrage)
            setTimeout(function() {
                // Zufällige Antwort auswählen
                const answers = ["Ihr Kauf ist erfolgreich", "Ihr Kauf ist fehlgeschlagen","Ihr Kauf ist fehlgeschlagen Ware konnte nicht zugestellt werden"];
                const randomIndex = Math.floor(Math.random() * answers.length);
                const randomAnswer = answers[randomIndex];

                // Antwort anzeigen
                alert(randomAnswer);

                // Verstecke den Ladebildschirm
                document.getElementById("loading-screen").style.display = "none";
            }, 2000); // 2 Sekunden Verzögerung (kann angepasst werden)
        }
    </script>
</body>
</html>