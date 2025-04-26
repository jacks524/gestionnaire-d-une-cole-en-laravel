<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ConcourController;
use App\Http\Controllers\ConvocationController;

// Route de connexion
// Page de formulaire de connexion (GET)
Route::get('/', function () {
    return view('premiere_vue'); // Renommez cette vue en login.blade.php pour plus de clarté
})->name('login');

// Traitement de la connexion (POST)
Route::post('/login', function(Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('home');
    }
    
    return back()->withErrors([
        'email' => 'Identifiants incorrects',
    ])->onlyInput('email');
})->name('login.post');

// Route utilisateurs
use App\Http\Controllers\UsersController;

// Remplacez la route actuelle par :
Route::get('/users', [UsersController::class, 'create'])->name('users.form');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');

// Route home (protégée par auth)
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

// Routes ressources
Route::resource('inscriptions', InscriptionController::class);
Route::resource('notes', NoteController::class);
Route::resource('matieres', MatiereController::class);
Route::resource('personnels', PersonnelController::class);
Route::resource('gestion_concours', ConcourController::class);
Route::resource('convocations', ConvocationController::class);

// Routes inscriptions supplémentaires
Route::prefix('inscriptions')->group(function () {
    // Liste des inscriptions (GET)
    Route::get('/', [InscriptionController::class, 'index'])->name('inscriptions.index');
    
    // Formulaire de création (GET)
    Route::get('/create', [InscriptionController::class, 'create'])->name('inscriptions.create');
    
    // Enregistrement (POST)
    Route::post('/', [InscriptionController::class, 'store'])->name('inscriptions.store');
    
    // Formulaire d'édition (GET)
    Route::get('/{inscription}/edit', [InscriptionController::class, 'edit'])->name('inscriptions.edit');
    
    // Mise à jour (PUT/PATCH)
    Route::put('/{inscription}', [InscriptionController::class, 'update'])->name('inscriptions.update');
    
    // Suppression (DELETE)
    Route::delete('/{inscription}', [InscriptionController::class, 'destroy'])->name('inscriptions.destroy');
});