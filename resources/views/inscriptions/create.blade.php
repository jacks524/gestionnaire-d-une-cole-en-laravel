<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription | École Primaire Les Petits Génies</title>
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
        }
        
        .header-decoration {
            height: 10px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--accent-color));
            margin-bottom: 20px;
        }
        
        .form-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 30px;
            border-top: 5px solid var(--accent-color);
        }
        
        .form-title {
            color: var(--primary-color);
            font-family: 'Fredoka One', cursive;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
        }
        
        .form-label {
            font-weight: bold;
            color: #555;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #ddd;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(136, 212, 152, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: bold;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #3a5a8f;
            transform: translateY(-2px);
        }
        
        .back-link {
            color: var(--secondary-color);
            font-weight: bold;
            margin-left: 20px;
            transition: all 0.3s;
        }
        
        .back-link:hover {
            color: #e07d3a;
            text-decoration: none;
        }
        
        .form-icon {
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="header-decoration"></div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h1 class="form-title">
                        <i class="fas fa-user-plus form-icon"></i>Nouvelle Inscription
                    </h1>
                    
                    <form action="{{ route('inscriptions.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nom" class="form-label">
                                <i class="fas fa-user form-icon"></i>Nom complet
                            </label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Ex: Jean Dupont" required>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="matricule" class="form-label">
                                        <i class="fas fa-id-card form-icon"></i>Matricule
                                    </label>
                                    <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Ex: MAT2023-001" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age" class="form-label">
                                        <i class="fas fa-birthday-cake form-icon"></i>Âge
                                    </label>
                                    <input type="number" class="form-control" id="age" name="age" min="5" max="12" placeholder="5-12 ans" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="classe" class="form-label">
                                        <i class="fas fa-door-open form-icon"></i>Classe
                                    </label>
                                    <select class="form-control" id="classe" name="classe" required>
                                        <option value="">Sélectionnez une classe</option>
                                        <option value="SIL">SIL</option>
                                        <option value="CP">CP</option>
                                        <option value="CE1">CE1</option>
                                        <option value="CE2">CE2</option>
                                        <option value="CM1">CM1</option>
                                        <option value="CM2">CM2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sexe" class="form-label">
                                        <i class="fas fa-venus-mars form-icon"></i>Sexe
                                    </label>
                                    <select class="form-control" id="sexe" name="sexe" required>
                                        <option value="">Sélectionnez</option>
                                        <option value="masculin">Masculin</option>
                                        <option value="féminin">Féminin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="montant" class="form-label">
                                <i class="fas fa-money-bill-wave form-icon"></i>Montant d'inscription
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">FCFA</span>
                                </div>
                                <input type="number" class="form-control" id="montant" name="montant" placeholder="Montant en FCFA" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="parent_phone" class="form-label">
                                <i class="fas fa-phone-alt form-icon"></i> Numéro du parent
                            </label>
                            <div class="input-icon">
                                <i class="fas fa-mobile-alt"></i>
                                <input type="tel" id="parent_phone" name="parent_phone" class="form-control" 
                                       placeholder="Ex: +237 600 000 000 " required>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-save"></i> Enregistrer l'inscription
                            </button>
                            <a href="{{ route('inscriptions.index') }}" class="back-link">
                                <i class="fas fa-list"></i> Voir toutes les inscriptions
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    
    <script>
        // Animation lors du chargement
        $(document).ready(function() {
        //    $('.form-container').hide().fadeIn(500);
        });
    </script>
</body>
</html>