<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>École Primaire Les Petits Génies | Gestion Scolaire</title>
    @csrf
    
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
        
        .navbar-brand {
            font-family: 'Fredoka One', cursive;
            font-size: 1.8rem;
            color: white !important;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-bottom: 4px solid var(--accent-color);
        }
        
        .nav-link {
            font-size: 1.1rem;
            color: white !important;
            margin: 0 8px;
            padding: 8px 16px !important;
            border-radius: 20px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            background-color: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }
        
        .nav-item.active .nav-link {
            background-color: var(--accent-color);
            font-weight: bold;
        }
        
        .header-decoration {
            height: 10px;
            background: linear-gradient(90deg, #4a6fa5, #ff914d, #88d498);
            margin-bottom: 20px;
        }
        
        .school-icon {
            margin-right: 10px;
            font-size: 1.5rem;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="header-decoration"></div>
    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="fas fa-school school-icon"></i>
                    Les Petits Génies
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">
                                <i class="fas fa-home"></i> Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/inscriptions/create">
                                <i class="fas fa-user-plus"></i> Inscriptions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inscriptions.index') }}">
                                <i class="fas fa-users" ></i> Élèves
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/notes">
                                <i class="fas fa-clipboard-check"></i> Notes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/matieres">
                                <i class="fas fa-book-open"></i> Matières
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/personnel">
                                <i class="fas fa-chalkboard-teacher"></i> Personnel
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <i class="fas fa-tasks"></i> Examens
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/gestion_concours"><i class="fas fa-graduation-cap"></i> Concours</a>
                                <a class="dropdown-item" href="/convocation"><i class="fas fa-envelope"></i> Convocation</a>
                            </div>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ml-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/profile">
                                <i class="fas fa-user-circle"></i> Profil
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="mt-4 text-center">
            <img src="/images/school-banner.png" alt="École Les Petits Génies" class="img-fluid rounded" style="max-height: 200px;">
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    
    <script>
        // Active le menu déroulant
        $(document).ready(function(){
            $('.dropdown-toggle').dropdown();
            
            // Met en surbrillance l'élément de menu actif
            const current = location.pathname.split('/')[1];
            if (current === "") return;
            
            $('.nav-item a').each(function(){
                const $this = $(this);
                if ($this.attr('href').indexOf(current) !== -1) {
                    $this.parent().addClass('active');
                }
            });
        });
    </script>
</body>
</html>