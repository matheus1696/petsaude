<!-- Inicio de Componentização do Conteiner -->
<div class="xl:px-20 py-12">
    <x-conteiner>
        <h3 class="mb-3 text-lg font-semibold text-center">Dados do Pessoais</h3>
    
        <x-form.form method="edit" route="{{route('profiles.updatePersonal')}}">
                
                <x-form.input col="6" label="Nome Completo" name="name" id="name" value="{{$db->name}}" required="required" placeholder="Fulano da Pereira da Silva Dómino"/>
                <x-form.input col="6" label="Email" name="disabled" id="disabled" value="{{$db->email}}" disabled="disabled"/>                
                <x-form.input col="12" label="Endereço" name="address" id="address" value="{{$db->address}}"/>                    
                <x-form.input col="12" label="Nome da Mãe" name="name_mother" id="name_mother" value="{{$db->name_mother}}"/>   
                <x-form.input col="3" label="CPF" name="cpf" id="cpf" value="{{$db->cpf}}" maxlength="14" minlength="14" placeholder="000.000.000-00"/>                
                <x-form.input col="3" label="RG" name="registration" id="registration" value="{{$db->registration}}" maxlength="10" minlength="8" placeholder="999.999-2"/>    
                <x-form.input col="3" label="Data Nascimento" type="date" name="birthday" id="birthday" value="{{$db->birthday}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}"/>
    
                <x-form.select col="3" label="Sexo" name="sexual_orientation_id" id="sexual_orientation_id">
                    @foreach ($dbUserSexualOrientations as $dbUserSexualOrientation)
                        <option value="{{$dbUserSexualOrientation->id}}" @if ($db->sexual_orientation_id == $dbUserSexualOrientation->id) selected @endif>
                            {{$dbUserSexualOrientation->sexual_orientation}}
                        </option>
                    @endforeach
                </x-form.select>                
                
                <x-form.input col="3" label="Contato 1" type="tel" name="contact_1" id="contact_1" value="{{$db->contact_1}}" maxlength="15" minlength="13" placeholder="(00) 00000-0000"/>                    
                <x-form.input col="3" label="Contato 2" type="tel" name="contact_2" id="contact_2" value="{{$db->contact_2}}" maxlength="15" minlength="13" placeholder="(00) 00000-0000"/>

                <x-form.select col="3" label="Instituição de Ensino" name="education_institution_id" id="education_institution_id">
                    @foreach ($dbCompanyEducationInstitutions as $dbCompanyEducationInstitution)
                        <option value="{{$dbCompanyEducationInstitution->id}}" @if ($db->education_institution_id == $dbCompanyEducationInstitution->id) selected @endif>
                            {{$dbCompanyEducationInstitution->acronym}}
                        </option>
                    @endforeach
                </x-form.select>

                <x-form.select col="3" label="Curso" name="education_course_id" id="education_course_id">
                    @foreach ($dbCompanyEducationCourses as $dbCompanyEducationCourse)
                        <option value="{{$dbCompanyEducationCourse->id}}" @if ($db->education_course_id == $dbCompanyEducationCourse->id) selected @endif>
                            {{$dbCompanyEducationCourse->title}}
                        </option>
                    @endforeach
                </x-form.select>                          
    
        </x-form.form>
    </x-conteiner>
</div>