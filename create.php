<?php
    if(isset($_POST['name'])) {
        if(isset($_POST["name"]) and
            isset($_POST["prenom"]) and
            isset($_POST["phone"]) and
            isset($_POST["email"])
        ) {
          
            try {
                $db = new PDO('mysql:host=localhost;dbname=master_contacts', "root", 'root');
            } catch (Exception $e) {
                die("Error".$e->getMessage());
            }

            $stamt = $db->prepare("INSERT INTO contacts (name, prenom, phone, email) VALUES (?, ?, ?, ?)");
    
            $created = $stamt->execute([$_POST['name'], $_POST['prenom'], $_POST['phone'], $_POST['email']]);

            if($created) {
                header('location: index.php');
            } else {
                header('location: create.php');
            }
        } else {

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h1>Creation</h1>

        <form action="create.php" method="POST">
            <div class="form-group mb-3">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group mb-3">
                <label for="">Prenom</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="form-group mb-3">
                <label for="">Phone</label>
                <input type="tel" class="form-control" name="phone">
            </div>
            <div class="form-group mb-3">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <button class="btn btn-primary" type="submit">Creer</button>
        </form>
    </div>
</body>
</html>