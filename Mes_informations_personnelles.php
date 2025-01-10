<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Mes informations personnelles</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap">
</head>
<body>
    <div class="container">
    <h1>Mes informations personnelles</h1>

    <?php
 
        
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $date_naissance = $_POST["date_naissance"];
        
        echo "<p><strong>Prénom :</strong>" .$prenom. "</p>";
        echo "<p><strong>Nom :</strong>" .$nom. "</p>";
        echo "<p><strong>Email :</strong>" .$email. "</p>";
        echo "<p><strong>Date de naissance :</strong>" .$date_naissance. "</p>";
    ?>

    <a href="index.html">Retour au formulaire</a>
    
</body>

</html>

</form>
<style>
        body {
            font-family: 'Merriweather', serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px 30px;
            width: 50%;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            font-size: 2em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.5;
            margin: 10px 0;
        }

        p strong {
            color: #2c3e50;
        }

        .back-link {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #1d6fa5;
        }
    </style>