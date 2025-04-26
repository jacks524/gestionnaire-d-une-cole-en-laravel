<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Users</title>
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
        
        .users-container {
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
        
        .users-title {
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
        
        .btn-users {
            background-color: var(--primary-color);
            border: none;
            border-radius: 30px;
            padding: 12px;
            font-weight: bold;
            font-size: 1.1rem;
            letter-spacing: 1px;
            transition: all 0.3s;
            margin-top: 10px;
            width: 100%;
            color: white;
        }
        
        .btn-users:hover {
            background-color: #3a5a8f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
        
        .login-link {
            color: var(--primary-color);
            text-align: center;
            display: block;
            margin-top: 20px;
            font-size: 0.9rem;
        }
        
        .login-link:hover {
            color: #3a5a8f;
            text-decoration: none;
        }
        select.form-control {
            padding-right: 30px; /* Espace pour la flèche du select */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        select.form-control option {
            padding: 8px 15px;
            white-space: normal; /* Permet le retour à la ligne */
        }

    </style>
</head>

<body>
    <div class="header-decoration"></div>
    
    <div class="container my-auto">
        <div class="users-container">
            <div class="text-center">
                <img src="https://via.placeholder.com/100" alt="Logo" class="school-logo">
                <h1 class="users-title">Nouvel Utilisateur</h1>
            </div>
            
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="matricule" class="form-label">Matricule</label>
                    <div class="input-icon">
                        <i class="fas fa-id-card"></i>
                        <input type="text" class="form-control" id="matricule" name="matricule" 
                               placeholder="Votre matricule" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Nom complet</label>
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" id="name" name="name" 
                               placeholder="Votre nom complet" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control" id="email" name="email" 
                               placeholder="exemple@domaine.com" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe</label>
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" id="password" name="password" 
                               placeholder="••••••••" required>
                    </div>
                    <small class="form-text text-muted">Minimum 8 caractères</small>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirmation mot de passe</label>
                    <div class="input-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" id="password_confirmation" 
                               name="password_confirmation" placeholder="••••••••" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="role" class="form-label">
                        <i class="fas fa-user-tag"></i> Rôle
                    </label>
                    <select id="role" name="role" class="form-control" required  style="min-width:250px; width:auto;">
                        <option value="admin">Administrateur (Accès complet)</option>
                        <option value="teacher">Enseignant (Gestion des cours)</option>
                        <option value="parent">Parent (Consultation seulement)</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-users">
                    <i class="fas fa-user-plus mr-2"></i>Enregistrer
                </button>
                <a href="{{ route('login') }}" class="login-link">
                    <i class="fas fa-arrow-left mr-2" ></i>Retour à la liste
                </a>
            </form>
        </div>
    </div>
    
    <div class="footer">
        &copy; {{ now()->year }} Système Users - Tous droits réservés
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
</body>
</html>