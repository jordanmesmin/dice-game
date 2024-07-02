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
            <h1>Inscription</h1>
            <div className="input-box">
                <input type="text" placeholder="Pseudo" required/>
            </div>
            <div className="input-box">
                <input type="email" placeholder="email" required />
            </div>
            <div className="input-box">
                <input type="password" placeholder="password" required />
            </div>

            <div className="remember-forget">
                <label><input type="checkbox" />S'en souvenir</label>
                <a href="#">Mot de passe oublie </a>
            </div>

            <button type="submit">S'inscrire'</button>

            <div className="register-link">
                <p>J'ai deja un compte <a href="log">se connecter</a></p>
            </div>
  
        </form>
       </div>
</body>
</html>