<?php

use App\Http\Controllers\EditorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlipicaSkinController;
use App\Http\Controllers\OilySkinController;
use App\Http\Controllers\NormalSkinController;
use App\Http\Controllers\GreixController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\CuirCabellutController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\ParasitsController;
use App\Http\Controllers\SensitiveSkinController;
use App\Http\Controllers\AcneController;
use App\Http\Controllers\SkinController;
use App\Http\Controllers\CapilarController;
use App\Http\Controllers\PellController;
use App\Http\Controllers\VisitSpecialistController;
use App\Http\Controllers\PitiriasiController;
use App\Http\Controllers\MixedSkinController;
use App\Http\Controllers\VolumeController;
use App\Http\Controllers\DehyAlpticController;
use App\Http\Controllers\DehyOilyController;
use App\Http\Controllers\DesvitalisedController;
use App\Http\Controllers\DiagnosticController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\OccludedOilySkinController;
use App\Http\Controllers\FrizzController;
use App\Http\Controllers\HairLostController;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\HairQuestionnaireController;
use App\Http\Controllers\QuestionnairePageController;
use App\Http\Controllers\SkinPageController;
use App\Http\Controllers\SkinQuestionnaireController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
use App\Http\Controllers\QuestionnaireAdminController;
use App\Http\Controllers\PageTestController;

//HomePages
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

Route::get('/Page/{slug}', [DynamicPageController::class, 'getDynamicPage'])->name('DynamicPage');
Route::get('/Advice/{slug}', [DynamicPageController::class, 'getAdvicePage'])->name('AdvicePage');
Route::get('/Edit/Page/{slug}', [DynamicPageController::class, 'getEditorPage'])->middleware(UserMiddleware::class)->name('EditorPage');
Route::get('/Skin/{slug}', [SkinPageController::class, 'getSkinPage'])->name('SkinPage');
Route::get('/Questionari/{slug}', [QuestionnairePageController::class, 'getQuestionnairePage'])->name('Questionari');

//Editor
Route::post('/Edit/{slug}', [EditorController::class, 'updatePage'])->middleware(UserMiddleware::class)->name("updatePage");

//Questionnaries
Route::get('/questionari-pell', [DiagnosticController::class, 'showSkin'])->name('QuestionariPell');
Route::get('/questionari-cabell', [DiagnosticController::class, 'showHair'])->name('QuestionariCabell');
Route::get('/api/diagnostic/first-question', [DiagnosticController::class, 'getFirstQuestion']);
Route::post('/api/diagnostic/next-question', [DiagnosticController::class, 'getNextQuestion']);
Route::get('/api/diagnostic/recommendations', [DiagnosticController::class, 'getRecommendations']);
Route::post('/api/diagnostic/store-answers', [DiagnosticController::class, 'storeAnswers']);

Route::get('/Questionari/HairQuestionnaire', [HairQuestionnaireController::class, 'show'])->name('HairQuestionnaire'); //Controllador Questionari
Route::get('/Questionari/SkinQuestionnaire', [SkinQuestionnaireController::class, 'show'])->name('SkinQuestionnaire'); //Controllador Questionari

//Users
Route::post('/dashboard/addUser', [ProfileController::class, "AdminAddUser"])->middleware(AdminMiddleware::class)->name("User.add");
Route::get('/dashboard/editUser', [ProfileController::class, 'edit'])->middleware(AdminMiddleware::class)->name('User.edit');
Route::get('/dashboard', [ProfileController::class, 'getAllUsers'])->middleware(AdminMiddleware::class)->name('dashboard.list');
Route::get('/dashboard/pages', [DynamicPageController::class, 'getPages'])->middleware(UserMiddleware::class)->name('dashboard.pages');

Route::get('/editUser/{id}', [ProfileController::class, 'getUsersEditing'])->middleware(AdminMiddleware::class)->name('UserId.edit');
Route::post('/editUser/{id}', [ProfileController::class, 'AdminUpdateUsers'])->middleware(AdminMiddleware::class)->name('UserId.update');

Route::get('/deleteUser/{id}', [ProfileController::class, 'delete'])->middleware(AdminMiddleware::class)->name('UserId.delete');

Route::get('/profile', [ProfileController::class, 'edit'])->middleware(AdminMiddleware::class)->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->middleware(AdminMiddleware::class)->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(AdminMiddleware::class)->name('profile.destroy');
Route::get('/logout', [ProfileController::class, 'logout'])->name('profile.logout');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::delete('/modify/questions/{question}', [QuestionnaireAdminController::class, 'deleteQuestion'])->name('modify.questions.delete');
    Route::delete('/modify/answers/{answer}', [QuestionnaireAdminController::class, 'deleteAnswer'])->name('modify.answers.delete');
    Route::get('/delete/forms/{form}', [QuestionnaireAdminController::class, 'deleteForms'])->name('forms.delete');
});

Route::middleware([UserMiddleware::class])->group(function () {
    Route::get('/pages/filter/{category}', [DynamicPageController::class, 'filter']);
    Route::get('/modify/forms/{form}', [QuestionnaireAdminController::class, 'showUpdate'])->name('forms.show.update');
    Route::post('/modify/forms/{form}', [QuestionnaireAdminController::class, 'updateForms'])->name('forms.update');
    Route::post('/modify/forms', [QuestionnaireAdminController::class, 'createForms'])->name('modify.forms.create');
    Route::get('/questionnaire', [QuestionnaireAdminController::class, 'viewCreate'])->name('questionnaire.create');
    Route::get('/modify/questionnaire', [QuestionnaireAdminController::class, 'index'])->name('modify.questionnaire.index');
    Route::get('/modify/questionnaire/data', [QuestionnaireAdminController::class, 'getQuestionnaireData'])->name('modify.questionnaire.data');
    Route::post('/modify/questions', [QuestionnaireAdminController::class, 'createQuestion'])->name('modify.questions.create');
    Route::put('/modify/questions/{question}', [QuestionnaireAdminController::class, 'updateQuestion'])->name('modify.questions.update');
    Route::post('/modify/answers', [QuestionnaireAdminController::class, 'createAnswer'])->name('modify.answers.create');
    Route::put('/modify/answers/{answer}', [QuestionnaireAdminController::class, 'updateAnswer'])->name('modify.answers.update');
});

// Socialite Routes
Route::get('auth/{provider}', [App\Http\Controllers\Auth\SocialiteController::class, 'redirectToProvider'])
    ->name('socialite.redirect');
Route::get('auth/{provider}/callback', [App\Http\Controllers\Auth\SocialiteController::class, 'handleProviderCallback'])
    ->name('socialite.callback');

// Test
if (app()->environment('testing')) {
    Route::get('/test-page/{slug}', [PageTestController::class, 'show']);
}

// Routes for social authentication
// Delete the GitHub routes if they are not needed

require __DIR__.'/auth.php';
