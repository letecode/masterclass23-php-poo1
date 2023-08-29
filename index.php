<?php
    include "models/data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Liste des contacs</h1>

        <table class="table">
            <thead>
                <th>Name</th>
                <th>Prenom</th>
                <th>Phone</th>
                <th>Email</th>
            </thead>
            <tbody>
            
                <?php

                    foreach($contacts as $contact) {
            
                        echo "<tr>";
                        echo "<td>".$contact->name."</td>";
                        echo "<td>".$contact->prenom."</td>";
                        echo "<td>".$contact->phone."</td>";
                        echo "<td>".$contact->email."</td>";
                        echo "</tr>";
                    }

                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>