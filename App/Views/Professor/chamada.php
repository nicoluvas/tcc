<form>
    <select name="turma" id="turma" required>
        <option value="" id="init">Selecione uma turma</option>
        <?php
            foreach($this->turmas as $turma):
                if (!array_key_exists($turma->cd_turma, $this->professor_materias_turmas)) continue;
                ?>
                    <option value="<?= $turma->cd_turma ?>"><?= $turma->nm_turma ?></option>
                    <?php
            endforeach;
            ?>
    </select>
    <select name="materia" id="materia" required disabled>
        <option value="">Selecione uma matéria</option>
        <?php
            $aux = [];
            foreach($this->professor_materias_turmas as $turma):
                foreach ($turma as $id_materia => $materia):
                    if (array_key_exists($id_materia, $aux)) continue;
                    $aux[$id_materia] = $materia;
                    ksort($aux, SORT_NUMERIC);
                endforeach;
            endforeach;
            foreach($aux as $id_materia => $materia):
                ?>
                    <option value="<?= $id_materia ?>"><?= $materia ?></option>
                <?php
            endforeach;
        ?>
    </select>
    <div class="alunos">

    </div>
    <script>
        let professor_materia = <?= json_encode($this->professor_materias_turmas) ?>;

        $('form select#turma').on('change', function () {
            $('form select#turma option#init').remove()
            $('form select#materia').prop('disabled', false)

            let turma = $(this).val()
            $('form select#materia option').each(function () {
                if ($(this).val() in professor_materia[turma]) {
                    $(this).css('display', 'block')
                } else {
                    $(this).css('display', 'none')
                }
            })
            $('form select#materia').val('')
            $.ajax({
                'url': `/professor/chamada/alunos/turma/${$('form select#turma').val()}/qa/2`,
                'type': 'GET',
                'dataType': 'html'
            })
            .done(function (data) {
                $('.alunos').html(data)
            })
            .catch(function (a) {
                console.log(a)
            })
        })

    </script>
</form>