<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|GET|HEAD  | /                      | web.home           | WebController@home
*/
Route::get('/', [WebController::class, 'home'])->name('web.home');
Route::get('/layout', [WebController::class, 'test'])->name('web.test');



Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/article/{article}', [WebController::class, 'showArticle'])->name('article.show');



/*
|--------------------------------------------------------------------------
| Auth breeze routes
|--------------------------------------------------------------------------
|
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Routes filament admin
|--------------------------------------------------------------------------
| GET|HEAD   admin ............................... filament.admin.pages.dashboard › Filament\Pages ›        Dashboard
| GET|HEAD   admin/articles ...................... filament.admin.resources.articles.index ›                App\Filament\Resources\ArticleResource\Pages\ListArticles
| GET|HEAD   admin/articles/create ............... filament.admin.resources.articles.create ›               App\Filament\Resources\ArticleResource\Pages\CreateArticle
| GET|HEAD   admin/articles/{record} ............. filament.admin.resources.articles.view ›                 App\Filament\Resources\ArticleResource\Pages\ViewArticle
| GET|HEAD   admin/articles/{record}/edit ........ filament.admin.resources.articles.edit ›                 App\Filament\Resources\ArticleResource\Pages\EditArticle
| GET|HEAD   admin/categories .................... filament.admin.resources.categories.index ›              App\Filament\Resources\CategoryResource\Pages\ListCategories
| GET|HEAD   admin/categories/create ............. filament.admin.resources.categories.create ›             App\Filament\Resources\CategoryResource\Pages\CreateCategory
| GET|HEAD   admin/categories/{record} ........... filament.admin.resources.categories.view ›               App\Filament\Resources\CategoryResource\Pages\ViewCategory
| GET|HEAD   admin/categories/{record}/edit ...... filament.admin.resources.categories.edit ›               App\Filament\Resources\CategoryResource\Pages\EditCategory
| GET|HEAD   admin/login ......................... filament.admin.auth.login › Filament\Pages ›             Login
| POST       admin/logout ........................ filament.admin.auth.logout › Filament\Http ›             LogoutController
| GET|HEAD   admin/tags .......................... filament.admin.resources.tags.index ›                    App\Filament\Resources\TagResource\Pages\ListTags
| GET|HEAD   admin/tags/create ................... filament.admin.resources.tags.create ›                   App\Filament\Resources\TagResource\Pages\CreateTag
| GET|HEAD   admin/tags/{record}/edit ............ filament.admin.resources.tags.edit ›                     App\Filament\Resources\TagResource\Pages\EditTag
| GET|HEAD   admin/users ......................... filament.admin.resources.users.index ›                   App\Filament\Resources\UserResource\Pages\ListUsers
| GET|HEAD   admin/users/create .................. filament.admin.resources.users.create ›                  App\Filament\Resources\UserResource\Pages\CreateUser
| GET|HEAD   admin/users/{record} ................ filament.admin.resources.users.view ›                    App\Filament\Resources\UserResource\Pages\ViewUser
| GET|HEAD   admin/users/{record}/edit ........... filament.admin.resources.users.edit ›                    App\Filament\Resources\UserResource\Pages\EditUser
|
php artisan route:list --path=api
*/
