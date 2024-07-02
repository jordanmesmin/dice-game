<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athentification</title>
</head>
<body>
<div className="wrapper">
        <form>
            <h1>Connexion</h1>
            <div className="input-box">
                <input type="text" placeholder="Pseudo" required/>
                <FaUser className="icon" />
            </div>
            <div className="input-box">
                <input type="password" placeholder="password" required />
                <FaLock className="icon"/>
            </div>

            <div className="remember-forget">
                <label><input type="checkbox" />S'en souvenir</label>
                <a href="#">Mot de passe oublie </a>
            </div>

            <button type="submit">Se Connecter</button>

            <div className="register-link">
                <p>Je n'ai pas de compte! <a href="registration">Creer un Compte</a></p>
            </div>
  
        </form>
       </div>
</body>
</html>