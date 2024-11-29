<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/css/cadastro/mobile.css">
</head>
<body>
    <div id="register">
        <div id="logo">
        </div>
            <div id="dates">
                <span> <label for="name"> <ion-icon name="person-sharp"></ion-icon> </label>
                <input type="text" id= "name" name = "name" aria-label = "Nome" minlength = "4" maxlength = "255" placeholder = "Nome" required> </span>

                <span> <label for="email"> <ion-icon name="at-sharp"></ion-icon> </label> 
                <input type="email" id= "email" name = "email" aria-label = "Email" minlength = "4" maxlength = "255" placeholder = "Email" required> </span>

                <span> <label for="birth"> <ion-icon name="calendar-sharp"></ion-icon> </label>
                <input type="date" id= "birth" required> </span>

                <span> <label for="pass"> <ion-icon name="lock-closed-sharp"></ion-icon> </label> 
                <input type="password" id = "pass" name = "pass" aria-label = "Senha" placeholder = "Senha"  required>  </span>
        </div>
        <div id="buttons">
            <button type = "submit" id = "butt-register" class = "button" aria-label = "Cadastrar">Cadastrar</button>
            <button type = "button" id = "butt-login" class = "button" aria-label = "Entrar"><a href="#">Entrar</a></button>
        </div>
        <span> <ion-icon name="reader-sharp"></ion-icon> <a href="#">Confira nossos termos e serviços</a> </span>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>