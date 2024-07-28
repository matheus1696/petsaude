<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\ProfilePersonalUpdateRequest;
use App\Http\Requests\Profile\ProfilePasswordUpdateRequest;
use App\Http\Requests\Profile\ProfileProfessionalUpdateRequest;
use App\Models\Institution\InstitutionEducation;
use App\Models\Institution\InstitutionEducationCourse;
use App\Models\Notice\NoticeBoardHistory;
use App\Models\Profile\Profile;
use App\Models\User\UserSexualOrientation;
use App\Services\Logger;

class ProfileController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPersonal()
    {
        //Listando Dados
        $db = Profile::find(Auth::user()->id);

        if ($db) {
            //Log do Sistema
            Logger::editUserProfile($db->name);
            
            $dbUserSexualOrientations = UserSexualOrientation::where('status',true)->orderBy('sexual_orientation')->get();
            $dbInstitutionEducations = InstitutionEducation::where('status',true)->orderBy('title')->get();
            $dbInstitutionEducationCourses = InstitutionEducationCourse::where('status',true)->orderBy('title')->get();

            return view('users.profile.profile_personal',[
                'db'=>$db,
                'dbUserSexualOrientations'=>$dbUserSexualOrientations,
                'dbInstitutionEducations'=>$dbInstitutionEducations,
                'dbInstitutionEducationCourses'=>$dbInstitutionEducationCourses,
            ]);
        } else {
            //Log do Sistema
            Logger::errorUserNoExistent('Usuário informado não existe');

            return redirect(route('home'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePersonal(ProfilePersonalUpdateRequest $request)
    {
        //Listando Usuário
        $db = Profile::find(Auth::user()->id);

        if ($db) {
            //Alterando Dados do Usuário
            $data = $request->only('name','address','name_mother','cpf','registration','birthday','sexual_orientation_id','contact_1','contact_2','institution_education_id','institution_education_course_id');
            $db->update($data);
            
            //Log do Sistema
            Logger::updateUserProfileData($db->name);

            return redirect(route('profiles.editPersonal'))
                ->with('success','Alteração dos dados realizada com sucesso.');

        } else {
            return redirect(route('home'));
        };
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPassword()
    {
        //Listando Dados
        $db = Profile::find(Auth::user()->id);

        if ($db) {
            //Log do Sistema
            Logger::editUserProfile($db->name);

            return view('users.profile.profile_password', compact('db'));
        } else {
            //Log do Sistema
            Logger::errorUserNoExistent('Usuário informado não existe');

            return redirect(route('home'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePassword(ProfilePasswordUpdateRequest $request)
    {
        //Listando Usuário
        $db = Profile::find(Auth::user()->id);

        if ($db) {
            $db->password = Hash::make($request['password']);
            $db->save();

            //Log do Sistema
            Logger::updateUserProfilePassword($db->name);

            return redirect(route('profiles.editPassword'))
                ->with('success','Alteração de senha realizada com sucesso.');

        } else {
            return redirect(route('home'));
        };
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProfessional()
    {
        //Listando Dados
        $db = Profile::find(Auth::user()->id);

        if ($db) {
            //Log do Sistema
            Logger::editUserProfile($db->name);

            return view('users.profile.profile_professional', compact('db'));
        } else {
            //Log do Sistema
            Logger::errorUserNoExistent('Usuário informado não existe');

            return redirect(route('home'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProfessional(ProfileProfessionalUpdateRequest $request)
    {
        //Listando Usuário
        $db = Profile::find(Auth::user()->id);

        if ($db) {

            $db->password = Hash::make($request['password']);
            $db->save();

            //Log do Sistema
            Logger::updateUserProfilePassword($db->name);

            return redirect(route('profiles.editProfessional'))
                ->with('success','Alteração de senha realizada com sucesso.');

        } else {
            return redirect(route('home'));
        };
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function bankDetail()
    {
        //Listando Dados
        $db = Profile::find(Auth::user()->id);

        if ($db) {
            //Log do Sistema
            Logger::editUserProfile($db->name);

            return view('users.profile.profile_bank_detail', compact('db'));
        } else {
            //Log do Sistema
            Logger::errorUserNoExistent('Usuário informado não existe');

            return redirect(route('home'));
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function noticeUser()
    {
        //
        $dbNotices = NoticeBoardHistory::where('to_specific_user_id',Auth::user()->id)->orderBy('mark_read')->paginate(100);

        return view('admin.notice.notice_user', compact('dbNotices'));
    }
    
    public function noticeRead(string $id)
    {
        //
        $dbNoticeHistory = NoticeBoardHistory::find($id);
        $dbNoticeHistory->update(['mark_read'=>!$dbNoticeHistory->mark_read]);

        return redirect()->back();
    }
}
