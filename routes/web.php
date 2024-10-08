<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Company\CompanyFinancialBlockController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentDepartmentController;
use App\Http\Controllers\Admin\Company\CompanyOccupationController;
use App\Http\Controllers\Admin\Company\CompanyOrganizationController;
use App\Http\Controllers\Admin\Company\CompanyOrganizationLinkedUserController;
use App\Http\Controllers\Admin\Company\CompanyTypeEstablishmentController;
use App\Http\Controllers\Admin\Institution\InstitutionEducationController;
use App\Http\Controllers\Admin\Institution\InstitutionEducationCourseController;
use App\Http\Controllers\Admin\Region\RegionCityController;
use App\Http\Controllers\Admin\Region\RegionCountryController;
use App\Http\Controllers\Admin\Region\RegionStateController;
use App\Http\Controllers\Admin\User\UsersController;
use App\Http\Controllers\Admin\Notice\NoticeBoardController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\ContactListsController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\Profile\EvaluetionResponseController;

//Rota de Login
Route::get('/',function(){return redirect()->route('login');});

//Camada de Seguraça para Usuários Logados
Route::middleware('auth')->group(function () {
    
    //Rota - Página Home
    Route::get('home', [HomeController::class, 'index'])->name('home'); 

    //Lista Telefônica
    Route::resource('contacts', ContactListsController::class);
    
    //Grupo de Rotas - Perfil do Usuário
    Route::prefix('profiles')->group(function (){
        //Rotas de Perfil do Usuário
        Route::get('personal',[ProfileController::class,'editPersonal'])->name('profiles.editPersonal');
        Route::put('personal',[ProfileController::class,'updatePersonal'])->name('profiles.updatePersonal');
        Route::get('password',[ProfileController::class,'editPassword'])->name('profiles.editPassword');
        Route::put('password',[ProfileController::class,'updatePassword'])->name('profiles.updatePassword');
        Route::get('professional',[ProfileController::class,'editProfessional'])->name('profiles.editProfessional');
        Route::put('professional',[ProfileController::class,'updateProfessional'])->name('profiles.updateProfessional');
        Route::get('bank/detail',[ProfileController::class,'bankDetail'])->name('profiles.bankDetail');
        Route::get('notices/user', [ProfileController::class, 'noticeUser'])->name('notices.user');
        Route::get('notices/{notice}/read',[ProfileController::class,'noticeRead'])->name('notices.markRead');
    });

    //Camada de Seguraça para Contas Verificadas
    Route::middleware(['verified'])->group(function () {  
        
        //Grupo de Rotas - Configuração dos Perfis dos Usuários
        Route::prefix('users')->group(function (){
            //Rota - Dados dos Usuários Cadastrados
                Route::get('index',[UsersController::class,'index'])->name('users.index');
                Route::put('update/{user}',[UsersController::class,'update'])->name('users.update');
                Route::put('permission/{user}',[UsersController::class,'permission'])->name('users.permission');
                Route::put('bank/detail/{user}',[UsersController::class,'bankDetail'])->name('users.bankDetail');
                Route::get('verify/{user}',[UsersController::class,'verify'])->name('users.verify');
        });

        //Avisos
        Route::resource('notices', NoticeBoardController::class);

        //Avaliações
        Route::resource('evaluations', EvaluationController::class);

        //Grupo de Rotas - Configurações da Organização
        Route::prefix('project')->group(function (){

            //Rota - Dados do Organograma dos Grupos do Programa
            Route::get('organizations/organize',[CompanyOrganizationController::class,'organize'])->name('organizations.organize');
            Route::put('organizations/status/{organization}',[CompanyOrganizationController::class,'status'])->name('organizations.status');
            Route::resource('organizations',CompanyOrganizationController::class);
            
            //Rota de Vinculação de Usuário com Organização
            Route::resource('organization_linked_users',CompanyOrganizationLinkedUserController::class);
                
            //Rota - Dados Funções do Programa
                Route::resource('occupations',CompanyOccupationController::class);
        });

        //Grupo de Rodas - Configurações do Sistema
        Route::prefix('configuration')->group(function (){            

            //Grupo de Rotas - Configurações da Organização
            Route::prefix('company')->group(function (){
                //Rota - Nível de Atenção
                    Route::resource('financial_blocks',CompanyFinancialBlockController::class);
                //Rota - Dados Tipo de Estabelecimento
                    Route::resource('type_establishments',CompanyTypeEstablishmentController::class);
                //Rota - Dados Estabelecimento de Saúde 
                    Route::put('establishments/status/{establishment}',[CompanyEstablishmentController::class,'status'])->name('establishments.status');
                    Route::resource('establishments',CompanyEstablishmentController::class);
                    Route::resource('establishment_departments',CompanyEstablishmentDepartmentController::class);
            });

            //Grupo de Rotas - Configurações da Organização
            Route::prefix('institution')->group(function (){
                //Rota - Cursos de Graduação
                    Route::resource('courses',InstitutionEducationCourseController::class);
                //Rota - Instituições de Ensino
                    Route::resource('institutions',InstitutionEducationController::class);
            });

            //Grupo de Rotas - Configuração de Localização
            Route::prefix('region')->group(function (){
                //Rota - Dados Paises
                    Route::put('countries/status/{country}',[RegionCountryController::class,'status'])->name('countries.status');
                    Route::resource('countries',RegionCountryController::class);
                //Rota - Dados Estados
                    Route::put('states/status/{state}',[RegionStateController::class,'status'])->name('states.status');
                    Route::resource('states',RegionStateController::class);
                //Rota - Dados Cidades
                    Route::put('cities/status/{city}',[RegionCityController::class,'status'])->name('cities.status');
                    Route::resource('cities',RegionCityController::class);
            });
        });
    });
});

//Rotas de Autenticação
Auth::routes(['verify' => true]);


