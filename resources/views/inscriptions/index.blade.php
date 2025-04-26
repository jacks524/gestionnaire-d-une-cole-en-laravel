<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des inscriptions</title>

    <!-- Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Fredoka+One&display=swap" rel="stylesheet">

    <!-- Styles personnalisés -->
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

        h1 {
            font-family: 'Fredoka One', cursive;
            color: var(--primary-color);
            margin-top: 30px;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        th {
            background-color: var(--accent-color);
            color: white;
            text-align: center;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-school school-icon"></i> Liste des Élèves
            </a>
        </div>
    </nav>

    <div class="header-decoration"></div>

    <div class="container">
        <h1>Liste des élèves</h1>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-right my-3">
            <a href="/inscriptions/create" class="btn btn-primary">
                <i class="fas fa-user-plus"></i> Ajouter un étudiant
            </a>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Matricule</th>
                    <th>Âge</th>
                    <th>Classe</th>
                    <th>Montant</th>
                    <th>Téléphone Parent</th>
                    <th>Sexe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inscriptions as $inscription)
                    <tr>
                        <td>{{ $inscription->nom }}</td>
                        <td>{{ $inscription->matricule }}</td>
                        <td>{{ $inscription->age }}</td>
                        <td>{{ $inscription->classe }}</td>
                        <td>{{ $inscription->montant }}</td>
                        <td>{{ $inscription->parent_phone }}</td>
                        <td>{{ $inscription->sexe }}</td>
                        <td>
                            <a href="{{ route('inscriptions.edit', $inscription->id) }}" class="btn btn-sm btn-primary mb-1">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                            <form action="{{ route('inscriptions.destroy', $inscription->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
