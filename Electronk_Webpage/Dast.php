<?php
opcache_reset();
?>

<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein Online-Shop</title>
    
    <style>
        /* Allgemeine Stile */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        /* Header */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        /* Hauptinhalt */
        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(33.33% - 20px);
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h3 {
            font-size: 1.2rem;
            margin: 0;
        }
        .product p {
            font-size: 1rem;
            color: #777;
        }
        /* Footer */
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
        }

        /* Allgemeine Stile */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        /* Header */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        /* Hauptinhalt */
        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(33.33% - 20px);
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h3 {
            font-size: 1.2rem;
            margin: 0;
        }
        .product p {
            font-size: 1rem;
            color: #777;
        }
        /* Footer */
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
        }

        a {
            color:white
        }
    </style>
    <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;   
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}


a:hover {
  background-color: #111;
}


</style>
    <ul>
  <li><img src="Bilder/Logo.jpeg" alt="Logo" height="55"></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="Warenkorp_test.php">Warenkorp</a></li>
  <li><a href="OldPa.php">Altepg</a></li>
  <li><a href="Anmeldung.php">Anmeldung</a></li>
 

</ul>
<style>
/* Ihr benutzerdefiniertes CSS hier einfügen */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .login-container {
            width: 400px; 
            height: 567px; /* Höhe Anpassen*/
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .img-group {
            width: 40%;
            border-radius: 50%;
        }

</style>


<header></header>



</head>
<body>
  

<div class="login-container">
          <div align="center">
            <img src="Bilder/Avatar.jpg" class="img-group">

        </div>
        <h2>Login</h2>
        <form action="login.php" method="post" onsubmit="return handleLogin()">
            <div class="form-group">
                <label for="username">Benutzername:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Anmelden</button>
            </div>
      

      </form>
    </div>


    <script>
        function handleLogin() {
            // Hier können Sie die Anmeldeüberprüfung durchführen
            // Wenn die Anmeldung erfolgreich ist:
            const username = document.getElementById('username').value;
            localStorage.setItem('loggedInUser', username);
            return true; // Formular wird gesendet
        }
    </script>

</body>