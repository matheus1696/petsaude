<!-- Inicio de Componentização do Conteiner -->
<div class="md:w-1/2 m-auto py-12">
    <x-conteiner>
        <h3 class="mb-3 text-lg font-semibold text-center">Dados Bancários</h3>

        @if (isset($db->CompanyOccupation->title))
            @if ($db->CompanyOccupation->title == "Estudante Voluntário")
                <div class="h-40 flex justify-center items-center pb-3">
                    Estudante Voluntário
                </div>
            @else
                <x-form.form method="edit" route="{{route('profiles.updateBankDetail')}}">
                            
                    <x-form.select col="12" label="Tipo de Conta" name="bank_account_type" id="bank_account_type">
                        <option value="Conta Corrente" selected>Conta Corrente</option>
                    </x-form.select>

                    <x-form.select col="12" label="Banco" name="bank" id="bank">
                        <option value="Santander" @if($db->bank == "Santander") selected @endif>Santander</option>
                        <option value="Bradesco"@if($db->bank == "Bradesco") selected @endif>Bradesco</option>
                    </x-form.select>

                    <x-form.input col="6" label="Agência" name="bank_agency" id="bank_agency" value="{{$db->bank_agency}}" maxlength="4" minlength="4"/>
                    <x-form.input col="6" label="Conta" name="bank_account" id="bank_account" value="{{$db->bank_account}}"/>

                </x-form.form>
            @endif
        @else            
            <div class="h-40 flex justify-center items-center pb-3">
                Participante sem Grupo ou Função Atribuida
            </div>
        @endif

        
    </x-conteiner>
</div>