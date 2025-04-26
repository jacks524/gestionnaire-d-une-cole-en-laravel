<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | École Primaire Les Petits Génies</title>
    <!-- Bootstrap + Font Awesome + Google Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Fredoka+One&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #4a6fa5;
            --secondary-color: #ff914d;
            --accent-color: #88d498;
        }
        
        body {
            font-family: 'Comic Neue', cursive;
            background-color: #f9f9f9;
            background-image: url('https://www.transparenttextures.com/patterns/cartographer.png');
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .header-decoration {
            height: 10px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--accent-color));
        }
        
        .login-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            margin: auto;
            width: 100%;
            max-width: 450px;
            border-top: 5px solid var(--accent-color);
            animation: fadeIn 0.6s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .school-logo {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
            object-fit: contain;
        }
        
        .login-title {
            color: var(--primary-color);
            font-family: 'Fredoka One', cursive;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
        }
        
        .form-label {
            font-weight: bold;
            color: #555;
            margin-left: 5px;
        }
        
        .form-control {
            border-radius: 12px;
            padding: 15px 20px;
            border: 2px solid #ddd;
            transition: all 0.3s;
            margin-bottom: 5px;
        }
        
        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(136, 212, 152, 0.25);
        }
        
        .btn-login {
            background-color: var(--primary-color);
            border: none;
            border-radius: 30px;
            padding: 12px;
            font-weight: bold;
            font-size: 1.1rem;
            letter-spacing: 1px;
            transition: all 0.3s;
            margin-top: 10px;
        }
        
        .btn-login:hover {
            background-color: #3a5a8f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .remember-me {
            color: #666;
        }
        
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 0.9rem;
        }
        
        .input-icon {
            position: relative;
        }
        
        .input-icon i {
            position: absolute;
            left: 15px;
            top: 15px;
            color: var(--primary-color);
            z-index: 10;
        }
        
        .input-icon input {
            padding-left: 40px;
        }
        
        .forgot-password {
            color: var(--secondary-color);
            text-align: right;
            display: block;
            margin-top: 5px;
            font-size: 0.9rem;
        }
        
        .forgot-password:hover {
            color: #e07d3a;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header-decoration"></div>
    
    <div class="container my-auto">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="login-container">
                    <div class="text-center">
                        <img src="/images/logo-ecole.png" alt="Logo École" class="school-logo">
                        <h1 class="login-title">
                            <i class="fas fa-user-graduate"></i> Connexion
                        </h1>
                    </div>
                    
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope form-icon"></i> Adresse e-mail
                            </label>
                            <div class="input-icon">
                                <i class="fas fa-at"></i>
                                <input type="email" id="email" name="email" class="form-control" 
                                       placeholder="exemple@ecole.com" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock form-icon"></i> Mot de passe
                            </label>
                            <div class="input-icon">
                                <i class="fas fa-key"></i>
                                <input type="password" id="password" name="password" class="form-control" 
                                       placeholder="••••••••" required>
                            </div>
                        </div>
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label remember-me" for="remember">
                                Se souvenir de moi
                            </label>
                        </div>
                        
                        <button class="btn btn-login btn-block" type="submit">
                            <i class="fas fa-sign-in-alt"></i> SE CONNECTER
                        </button>
                    </form>
                    
                    <a href="/users" class="btn btn-secondary btn-block mt-3">
                        <i class="fas fa-user-plus"></i> Inscription
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.form-control').focus(function() {
                $(this).parent().find('i').css('color', 'var(--accent-color)');
            }).blur(function() {
                $(this).parent().find('i').css('color', 'var(--primary-color)');
            });
        });
    </script>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</body>