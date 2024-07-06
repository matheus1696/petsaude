<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company\CompanyOccupation;
use App\Models\Company\CompanyOrganization;
use App\Models\User;
use App\Models\User\UserHasPermissions;
use App\Models\User\UserPermissions;
use App\Services\Logger;

class UsersController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Listando Dados
        $db = User::orderBy('name')->with('SexualOrientation')->paginate(20);
        $dbUsers = User::select()->orderBy('name')->get();
        $dbPermissions= UserPermissions::all();
        $dbHasPermissions = UserHasPermissions::all();
        $dbCompanyOrganizational = CompanyOrganization::where('status',true)->get();
        $dbCompanyOccupations = CompanyOccupation::where('status',true)->get();

        //Pesquisa de Dados
        $search = $request->all();
        
        if (isset($search['searchName']) || isset($search['searchEmail'])) {

            $query = User::query();

            if (!empty($search['searchName'])) { $query->where('name', $search['searchName']);}

            if (!empty($search['searchEmail'])) {$query->where('email', $search['searchEmail']);}

            $db = $query->orderBy('name')->paginate(20);
        }      

        //Log do Sistema
        Logger::access();

        return view('admin.users.users_index',[
            'search'=>$search,
            'db'=>$db,
            'dbUsers'=>$dbUsers,
            'dbPermissions'=>$dbPermissions,
            'dbHasPermissions'=>$dbHasPermissions,
            'dbCompanyOrganizational'=>$dbCompanyOrganizational,
            'dbCompanyOccupations'=>$dbCompanyOccupations,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Listando Dados Usuário
        $db = User::find($id);

        //Alterando Dados do Usuário
        $data = $request->only('organization_id','occupation_id');
        $db->update($data);

        //Log do Sistema
        Logger::updateUserProfileData($db->name);
        
        return(redirect(route('users.index'))
            ->with('success',`Dados do Usuário Alterado com sucesso`));
    }

    /**
     * Update the specified resource in storage.
     */
    public function permission(Request $request, string $id)
    {
        //Listando Dados Usuário
        $db = User::find($id);

        //Alterando Permissão do Usuário
            //Listando Permissões
            $dbPermissions = UserPermissions::all();

            //Sicronizando Permissões (Exclusão de Permissões Cadastradas)
            UserHasPermissions::where('model_id', $id)->delete();

            //Atribundo FALSE nas permissões vazias encaminhadas pelo POST (Input Checked)
            foreach ($dbPermissions as $Permission) {
                if (empty($request[$Permission->name])) {
                    $request[$Permission->name] = false;
                };
            }

            //Atribuindo a permissão com TRUE em USER
            $userPermission = UserPermissions::select()->where('name','user')->first();
            $request['user'] = $userPermission->id;

            //Realizando a atualização das permissões
            foreach ($dbPermissions as $Permission) {
                if ($request[$Permission->name]) {
                    $data = new UserHasPermissions;
                    $data->permission_id = $request[$Permission->name];
                    $data->model_id = $id;
                    $data->save();

                    //Log do Sistema
                    Logger::updateUserPermission($db->name);
                }
            }

        return(redirect(route('users.index'))
            ->with('success',`Permissão do Usuário Alteradas`));
    }

    /**
     * Update the specified resource in storage.
     */
    public function bankDetail(Request $request, string $id)
    {
        //Listando Dados Usuário
        $db = User::find($id);

        //Alterando Dados do Usuário
        $data = $request->only('bank_account_type','bank_name','bank_agency','bank_account');
        $db->update($data);

        //Log do Sistema
        Logger::updateUserProfileData($db->name);
        
        return(redirect(route('users.index'))
            ->with('success',`Dados do Usuário Alterado com sucesso`));
    }

    public function verify(string $id)
    {
        //Solicitando Verificação de Conta
        $db = User::find($id);
        $db->email_verified_at = NULL;
        $db->save();

        //Log do Sistema
        Logger::updateUserVerify($db->name);

        return redirect(route('users.index'))
            ->with('success','Conta desativada com sucesso.');
    }
}
