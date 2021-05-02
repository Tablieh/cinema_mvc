
<h1>
    Inscrivez-vous !!
</h1>
<form action="?ctrl=security&action=register" method="post">
    <p>
        <label for="pesudo">Votre pesudo : </label><br>
        <input type="pesudo" name="pesudo" id="pesudo" required>
    </p>
    <p>
        <label for="mail">Votre email : </label><br>
        <input type="email" name="email" id="mail" required>
    </p>
    <p>
        <label for="pass">Votre mot de passe : </label><br>
        <input type="password" name="password" id="pass" required>
    </p>
    <p>
        <label for="passr">Ressaisir votre mot de passe : </label><br>
        <input type="password" name="password_repeat" id="passr" required>
    </p>
    <p>
        <label for="created_at">created_at : </label><br>
      <input type="date" name="created_at" id="created_at" required>
    </p>
    <p>
        <input type="submit" name="submit" value="S'INSCRIRE">
    </p>
</form>