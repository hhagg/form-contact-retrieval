<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form  action="/form.php"  method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Contact</h1>
        <div class="row">
            <label  for="lastName" class="form-label">Nom :</label>
            <input  type="text"  id="lastName" class="form-control" name="lastName">
        </div>
        <div class="row">
            <label  for="firstName" class="form-label">Prénom :</label>
            <input  type="text"  id="firstName" class="form-control" name="firstName">
        </div>
        <div class="row">
            <label  for="phone" class="form-label">Téléphone :</label>
            <input  type="text"  id="phone" class="form-control" name="phone" placeholder="xx-xx-xx-xx-xx">
        </div>
        <div class="row">
            <label  for="email" class="form-label"> Entrer votre email :</label>
            <input  type="email"  id="email" class="form-control" name="email" placeholder="exemple@domain.com" required>
        </div>
        <div class="row">
            <label  for="subject" class="form-label"> Entrer votre subject :</label>
            <input  type="subject"  id="subject" class="form-control" name="subject" required>
        </div>
        <div class="row">
            <label  for="message" class="form-label">Message :</label>
            <textarea  id="message" class="form-control" name="message" placeholder="Message ..." required></textarea>
        </div>
        <div class="row">
            <input  type="submit" class="btn btn-primary" value="Envoyer votre message"/>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>