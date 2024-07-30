<x-form.form route="{{route('evaluetion_responses.store')}}" method="create">
    <input hidden name="type" value="Avaliação dos Pares">
    <div class="col-span-12">
        Explicações ... ... ... Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aut reiciendis quos repellendus, sapiente corporis harum eligendi? Est, laborum labore fugit quo at quod aperiam? Eaque dolor eos aliquam accusamus.
    </div>
    <!-- Pergunta 1 -->
    <div class="col-span-12">
        <input hidden name="question_1" value="De que forma você avalia a participação dos seus colegas no GTA?">
        <p class="pb-3"><span class="font-semibold">1 - </span> De que forma você avalia a participação dos seus colegas no GTA?</p>
        <ul>
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="5"/>
                <p>Excelente:</p>
                <p>Meu(s) colega(s) é (são) sempre participativo e contribui de forma substancial para o grupo</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="4"/>
                <p>Bom:</p>
                <p>Meu(s) colega(s) é na maioria das vezes participativo e contribui de forma substancial para o grupo</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="3"/>
                <p>Regular:</p>
                <p>Meu(s) colega(s) é às vezes participativo e contribui de forma substancial para o grupo</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="2"/>
                <p>Ruim:</p>
                <p>Meu(s) colega(s) raramente é participativo e contribui de forma substancial para o grupo</p>
            </li>  
            <li class="flex items-center gap-2">
                <input type="radio" name="value_1" value="1"/>
                <p>Meu(s) colega(s) não vem participando das atividades</p>
            </li>
        </ul>
    </div>

    <!-- Pergunta 2 -->
    <div class="col-span-12">
        <input hidden name="question_2" value="Espaço para escrever alguma observação ou impressão que deseje compartilhar sobre seu(s) colega(s). Esse espaço pode ser reservado também para compartilhar impressões sobre algum colega em específico.">
        <p class="pb-3"><span class="font-semibold">2 - </span> Espaço para escrever alguma observação ou impressão que deseje compartilhar sobre seu(s) colega(s). Esse espaço pode ser reservado também para compartilhar impressões sobre algum colega em específico.</p>
        <textarea name="value_2" rows="4" cols="50" placeholder="Escreva aqui suas observações..."></textarea>
    </div>
</x-form.form>