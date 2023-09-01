<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=master_contacts', "root", 'root');
    } catch (Exception $e) {
        die("Error".$e->getMessage());
    }

    $query = "SELECT * FROM contacts";
    $stmt = $db->query($query);

    $contacts = [];

    if($stmt->rowCount() > 0) {
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $contacts = [];
    }
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
        <div class="d-flex justify-content-between align-items-center">
            <h1>Liste des contacs</h1>
            <a class="btn btn-primary" href="create.php">Ajouter</a>
        </div>

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
                        echo "<td>".$contact["name"]."</td>";
                        echo "<td>".$contact['prenom']."</td>";
                        echo "<td>".$contact["phone"]."</td>";
                        echo "<td>".$contact["email"]."</td>";
                        echo "</tr>";
                    }

                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>