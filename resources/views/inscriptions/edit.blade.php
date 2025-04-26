<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Fredoka+One&display=swap" rel="stylesheet">
    
    <!-- Reprenez le même style que create.blade.php -->
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
        
        /* ... (reprenez tout le style de create.blade.php) ... */
    </style>
</head>
<body>
    <div class="header-decoration"></div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h1 class="form-title">
                        <i class="fas fa-user-edit form-icon"></i> Modifier Inscription
                    </h1>
                    
                    <form action="{{ route('inscriptions.update', $inscription->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="nom" class="form-label">
                                <i class="fas fa-user form-icon"></i> Nom complet
                            </label>
                            <input type="text" class="form-control" id="nom" name="nom" 
                                   value="{{ old('nom', $inscription->nom) }}" required>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="matricule" class="form-label">
                                        <i class="fas fa-id-card form-icon"></i> Matricule
                                    </label>
                                    <input type="text" class="form-control" id="matricule" name="matricule" 
                                           value="{{ old('matricule', $inscription->matricule) }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age" class="form-label">
                                        <i class="fas fa-birthday-cake form-icon"></i> Âge
                                    </label>
                                    <input type="number" class="form-control" id="age" name="age" 
                                           value="{{ old('age', $inscription->age) }}" min="5" max="12" required>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Répétez le même pattern pour tous les champs -->
                        <div class="form-group">
                            <label for="parent_phone" class="form-label">
                                <i class="fas fa-phone-alt form-icon"></i> Numéro du parent
                            </label>
                            <input type="tel" class="form-control" id="parent_phone" name="parent_phone" 
                                   value="{{ old('parent_phone', $inscription->parent_phone) }}" required>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-save"></i> Mettre à jour
                            </button>
                            <a href="{{ route('inscriptions.index') }}" class="back-link">
                                <i class="fas fa-list"></i> Retour à la liste
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>