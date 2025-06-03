<h2>Formulaire de contact</h2>
<!-- Action du formulaire qui dirige vers ContactController vers la méthode send() -->
<form action="index.php?controller=contact&action=send" method="POST">
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" placeholder="Votre nom">
    </div>
    <div>
        <label for="email">E-mail :</label>
        <input type="email" name="email" placeholder="Votre email">
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea name="message" placeholder="Votre message"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>
