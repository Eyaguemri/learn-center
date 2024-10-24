<?php
require_once('../controllers/etudiantControllers.php');
$etudiantCtr = new etudiantControllers();
$res = $etudiantCtr->getetudiant($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Etudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Modifier Etudiant</h2>
        <form name="f1" method="post" action="Modification.php">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" readonly="readonly" value="<?php echo $res['id'] ?>" />
            </div>
            <div class="form-group">
                <label for="identite">Numéro Identité</label>
                <input type="text" id="identite" name="identite" value="<?php echo $res['identite'] ?>" />
            </div>
            <div class="form-group">
                <label for="username">Nom</label>
                <input type="text" id="username" name="username" value="<?php echo $res['username'] ?>" />
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $res['prenom'] ?>" />
            </div>
            <div class="form-group">
                <label for="numtel">Téléphone</label>
                <input type="text" id="numtel" name="numtel" value="<?php echo $res['numtel'] ?>" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $res['email'] ?>" />
            </div>
            <div class="form-group">
                <label for="class">classe:</label>
                <select id="class" name="class" required>
                    <option value="SEM">SEM</option>
                    <option value="DSI">DSI</option>
                    <option value="MDW">MDW</option>
                    <option value="RSI">RSI</option>
                </select>
            </div>
            <button type="submit" name="mod">Modifier</button>
        </form>
    </div>
</body>
</html>
