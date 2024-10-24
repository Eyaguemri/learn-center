<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
       

        
        .logosec .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        .searchbar input,
        .searchbar2 input {
            padding: 5px;
            width: 200px;
            margin-right: 10px;
        }

        .searchbtn img {
            width: 20px;
            cursor: pointer;
        }

        .message {
            display: flex;
            align-items: center;
        }

        .message .circle {
            width: 10px;
            height: 10px;
            background-color: red;
            border-radius: 50%;
            margin-right: 10px;
        }

        .message .dp img {
            width: 40px;
            border-radius: 50%;
        }

        .main-container {
            display: flex;
        }

        .navcontainer {
            width: 250px;
            background-color: #0367f4;
            height: 100vh;
            color: white;
        }

        .nav {
            padding: 20px;
        }

        .nav-upper-options {
            display: flex;
            flex-direction: column;
        }

        .nav-option {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .nav-option img {
            width: 30px;
            margin-right: 10px;
        }

        .main {
            flex: 1;
            padding: 20px;
        }

        .box-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .box {
            flex: 1;
            padding: 20px;
            margin-right: 20px;
            background-color: #f4f4f4;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .box img {
            width: 50px;
            margin-top: 10px;
        }

        .report-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .report-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .report-body {
            overflow-x: auto;
        }

        .student-table {
            width: 100%;
            border-collapse: collapse;
        }

        .student-table th,
        .student-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .student-table th {
            background-color: #03A9F4;
            color: white;
        }

        .student-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .student-table tr:hover {
            background-color: #ddd;
        }

        .student-table .modifier a{
            color: rgb(4, 152, 4);
        }

        .student-table .supprimer a {
            color: rgb(248, 16, 16);
        }

    </style>
</head>

<body>
    <!-- for header part -->
    

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" alt="dashboard">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="option2 nav-option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" alt="articles">
                            <a href="dashbord.html"
                        >Tableau de bord </a>
                       
                        
                    </div>
                    <div class="nav-option option3">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img" alt="report">
                            <a href="nouveauEtudiant.html"
                        >ajouter etudiants</a>
                    </div>
                   
                   
                    
                   
                </div>
            </nav>
        </div>

        <div class="main">
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">List of Students</h1>
                </div>

                <div class="report-body">
                    <?php
                    require_once('../controllers/etudiantControllers.php');

                    $us = new etudiantControllers();
                    $res = $us->liste();

                    echo "<table class='student-table'>
                    <tr>
                    <th>ID</th><th>Numero identite</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Classe</th>
                    <th>Modifier</th>
                    <th>Supprimer</th></tr>";

                    if (is_array($res) || is_object($res)) {
                        foreach ($res as $row) {
                            echo "<tr><td>{$row['id']}</td><td>{$row['identite']}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['prenom']}</td>
                            <td>{$row['numtel']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['class']}</td>
                            <td><span class='modifier'><a href ='modifi.php?id={$row['id']}'>Modifier</a></td>
                            <td><span class='supprimer'><a href='supp.php?id={$row['id']}'>Supprimer</a></td> </tr>";
                        }
                    }
                    echo "</table>";
                   
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>