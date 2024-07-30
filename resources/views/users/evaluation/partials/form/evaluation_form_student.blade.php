<input hidden value="Avaliação do Estudante" name="type">

<!-- Pergunta 1 -->
<div class="col-span-12">
    <input hidden name="question_1" value="De que forma você avalia a participação dos estudantes no GTA?">
    <p class="pb-3"><span class="font-semibold">1 - </span> De que forma você avalia a participação dos estudantes no GTA?</p>
    <ul class="flex flex-col gap-3">
        <li class="flex items-center gap-2">
            <input type="radio" name="value_1" value="5" />
            <p><span class="font-semibold">Excelente: </span>Os estudantes são sempre participativos e contribuem de forma substancial para o grupo</p>
        </li>
        <li class="flex items-center gap-2">
            <input type="radio" name="value_1" value="4" />
            <p><span class="font-semibold">Bom: </span>Os estudantes na maioria das vezes são participativos e contribuem de forma substancial para o grupo</p>
        </li>
        <li class="flex items-center gap-2">
            <input type="radio" name="value_1" value="3" />
            <p><span class="font-semibold">Regular: </span>Os estudantes às vezes são participativos e contribuem de forma substancial para o grupo</p>
        </li>
        <li class="flex items-center gap-2">
            <input type="radio" name="value_1" value="2" />
            <p><span class="font-semibold">Ruim: </span>Os estudantes raramente são participativos e contribuem de forma substancial para o grupo</p>
        </li>
        <li class="flex items-center gap-2">
            <input type="radio" name="value_1" value="1" />
            <p><span class="font-semibold">Péssimo: </span>Os estudantes não vêm participando das atividades</p>
        </li>
    </ul>
</div>

<!-- Pergunta 2 -->
<div class="col-span-12">
    <input hidden name="question_2"
        value="Espaço para escrever alguma observação ou impressão que deseje compartilhar sobre os estudantes. Esse espaço pode ser reservado também para compartilhar impressões sobre algum tutor em específico.">
    <p class="pb-3">
        <span class="font-semibold">2 - </span>
        Espaço para escrever alguma observação ou impressão que deseje compartilhar sobre os estudantes. Esse espaço
        pode ser reservado também para compartilhar impressões sobre algum tutor em específico.
    </p>
    <textarea name="value_2" class="summernote w-full" placeholder="Escreva aqui suas observações..."></textarea>
</div>
