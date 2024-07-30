<x-form.form route="{{route('evaluetion_responses.store')}}" method="create">
    <input hidden name="type" value="Auto Avaliação">
    <div class="col-span-12">
        Explicações ... ... ... Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aut reiciendis quos repellendus, sapiente corporis harum eligendi? Est, laborum labore fugit quo at quod aperiam? Eaque dolor eos aliquam accusamus.
    </div>
    <!-- Pergunta 1 -->
    <div class="col-span-12">
        <input hidden name="question_1" value="Como você avalia globalmente a sua participação até o momento?">
        <p class="pb-3"><span class="font-semibold">1 - </span> Como você avalia globalmente a sua participação até o momento?</p>
        <ul>
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="5"/>
                <p>Excelente:</p>
                <p>Participo bem de todas as atividades</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="4"/>
                <p>Boa:</p>
                <p>Participo das atividades, mas as vezes estou disperso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="3"/>
                <p>Regular:</p>
                <p>Participo das atividades, mas muitas vezes estou disperso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="2"/>
                <p>Ruim:</p>
                <p>Participo das atividades e não consigo me concentrar</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="1"/>
                <p>Péssimo:</p>
                <p>Não venho participando das atividades</p>
            </li>
        </ul>
    </div>

    <!-- Pergunta 2 -->
    <div class="col-span-12">
        <input hidden name="question_2" value="Como você avalia a sua participação nas atividades presenciais?">
        <p class="pb-3"><span class="font-semibold">2 - </span> Como você avalia a sua participação nas atividades presenciais?</p>
        <ul>
            <li class="flex items-center gap-2">
                <input type="radio" name="value_2" value="5"/>
                <p>Excelente:</p>
                <p>Participo bem de todas as atividades presenciais</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_2" value="4"/>
                <p>Boa:</p>
                <p>Participo das atividades presenciais, mas as vezes estou disperso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_2" value="3"/>
                <p>Regular:</p>
                <p>Participo das atividades presenciais, mas muitas vezes estou disperso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_2" value="2"/>
                <p>Ruim:</p>
                <p>Participo das atividades presenciais e não consigo me concentrar nelas</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_2" value="1"/>
                <p>Péssimo:</p>
                <p>Não venho participando das atividades presenciais</p>
            </li>
        </ul>
    </div>

    <!-- Pergunta 3 -->
    <div class="col-span-12">
        <input hidden name="question_3" value="Como você avalia a sua participação nas atividades assíncronas?">
        <p class="pb-3"><span class="font-semibold">3 - </span> Como você avalia a sua participação nas atividades assíncronas?</p>
        <ul>
            <li class="flex items-center gap-2">
                <input type="radio" name="value_3" value="5"/>
                <p>Excelente:</p>
                <p>Participo bem de todas as atividades assíncronas</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_3" value="4"/>
                <p>Boa:</p>
                <p>Participo das atividades assíncronas, mas as vezes estou disperso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_3" value="3"/>
                <p>Regular:</p>
                <p>Participo das atividades assíncronas, mas muitas vezes estou disperso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_3" value="2"/>
                <p>Ruim:</p>
                <p>Participo das atividades assíncronas e não consigo me concentrar nelas</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_3" value="1"/>
                <p>Péssimo:</p>
                <p>Não venho participando das atividades assíncronas</p>
            </li>
        </ul>
    </div>

    <!-- Pergunta 4 -->
    <div class="col-span-12">
        <input hidden name="question_4" value="Como você avalia a sua contribuição para o grupo nas atividades presenciais e assíncronas?">
        <p class="pb-3"><span class="font-semibold">4 - </span> Como você avalia a sua contribuição para o grupo nas atividades presenciais e assíncronas?</p>
        <ul>
            <li class="flex items-center gap-2">
                <input type="radio" name="value_4" value="5"/>
                <p>Excelente:</p>
                <p>Contribuo para o grupo de forma interativa, propositiva e acolhedora da diversidade de pensamento, com responsabilidade e compromisso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_4" value="4"/>
                <p>Boa:</p>
                <p>Na maior parte das vezes, eu contribuo para o grupo de forma interativa, propositiva e acolhedora da diversidade de pensamento, com responsabilidade e compromisso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_4" value="3"/>
                <p>Regular:</p>
                <p>Às vezes eu contribuo para o grupo de forma interativa, propositiva e acolhedora da diversidade de pensamento, com responsabilidade e compromisso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_4" value="2"/>
                <p>Ruim:</p>
                <p>Raramente eu contribuo para o grupo de forma interativa, propositiva e acolhedora da diversidade de pensamento, com responsabilidade e compromisso</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_4" value="1"/>
                <p>Péssimo:</p>
                <p>Não venho participando das atividades</p>
            </li>
        </ul>
    </div>
</x-form.form>