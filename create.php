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

        <form action="src/models/create.php" method="POST">
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