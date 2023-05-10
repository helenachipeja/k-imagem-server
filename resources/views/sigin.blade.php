<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"
content="IE=edge">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<title>UI</title>
<link rel="stylesheet" href="style-login.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="index.html" class="nav-item nav-link active">Inicio</a>
            <a href="shop.html" class="nav-item nav-link">serviços</a>
            <a href="FAQ.html" class="nav-item nav-link">FAQ</a>
            <a href="contact.html" class="nav-item nav-link">Contacto</a>
        </nav>
        <form action="#" class="search-bar">
            <input type="text" placeholder="Pesquisa" >
            <button type="submit">
               <i class='bx bx-search'>

               </i>
            </button>
        </form>
    </header>
    <div class="background"></div>
    <div class="container">
        <div class="content">
        <h2 class="logo"><i class='bx bxl-firebase'></i>K-Imagem</h2>
        <div class="text-sci">
            <h2>Bem Vindo! <br><span></span></h2>
            <p>A K-Imagem é uma empresa especializada na criação de identidade visual para empresas e marcas, oferecendo serviços de design de logotipos, papelaria, brindes, impressão e muito mais.</p>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
            </div>
        </div>
        </div>
        <div class="logreg-box">
            <div class="form-box login">
                <form action="#">
                    <h2>Login</h2>
                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-envelope'></i>
                        </span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-lock-alt'></i>
                        </span>
                        <input type="password" required>
                        <label>Senha</label>
                    </div>

                    <div class="remember-forget">
                        <label ><input type="checkbox"> Lembre-me</label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>

                    <button type="submit" class="btn"  onclick="window.location.href='checkout.html'">Entrar</button>
                    <div class="login-register">
                        <p>Não tem uma conta?<a href="#" class="register-link">  Cadastro</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="#">
                    <h2>Cadastro</h2>
                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-user'></i>
                        </span>
                        <input type="text" required>
                        <label>Nome</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-envelope'></i>
                        </span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-lock-alt'></i>
                        </span>
                        <input type="password" required>
                        <label>Senha</label>
                    </div>

                    <div class="remember-forget">
                        <label ><input type="checkbox"> eu aceito os termos e condiçoes</label>

                    </div>

                    <button type="submit" class="btn">Cadastro</button>
                    <div class="login-register">
                        <p>Ja tem uma conta?<a href="#" class="login-link">  Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="script-login.js"></script>
</body>
</html>
