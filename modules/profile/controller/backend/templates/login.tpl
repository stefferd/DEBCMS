<div class="container-fluid">
    <div class="container" style="width:500px;">
        <form class="form-signin" role="form" action="{$url}admin/" method="POST">
            <h2 class="form-signin-heading">Inloggen</h2>
            <input type="email" class="form-control" name="emailaddress" placeholder="Emailadres / Gebruikersnaam" required autofocus style="border-radius: 5px 5px 0 0;"/>
            <input type="password" class="form-control" name="password" placeholder="Wachtwoord" required style="border-radius: 0 0 5px 5px; margin-bottom: 20px; border-top: 0;">
            <button class="btn btn-lg btn-success" type="submit">Inloggen</button>
        </form>
    </div>
</div>