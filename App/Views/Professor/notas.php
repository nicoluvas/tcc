<?php
    if (!EM_PERIODO_LETIVO) {
        ?>
            <p>Fora de periodo letivo</p>
        <?php
        die();
    }
?>
<style>
    select[readonly='readonly'] {
        background: #eee; /*Simular campo inativo - Sugestão @GabrielRodrigues*/
        pointer-events: none;
        touch-action: none;
    }
</style>
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
    <select name="aluno" id="aluno" disabled required>
        <option value="" style="display: none;">Selecione um aluno</option>
        <?php
            foreach ($this->alunos as $aluno):
                ?>
                    <option value="<?= $aluno->cd_aluno ?>"><?= $aluno->nome_aluno ?></option>
                <?php
            endforeach;
        ?>
    </select>
    <p>Unidade <?= UNIDADE ?></p>
    <p id="aluno">Aluno: </p>
    <p id="materia">Materia: </p>
    <span>Prova</span><input type="number" name="prova" id="prova" readonly="readonly" value="0" step="0.01"> <br>
    <span>Trabalho</span><input type="number" name="trabalho" id="trabalho" readonly="readonly" value="0" step="0.01"> <br>
    <button type="button" id="editar">Editar</button>
    <button type="button" id="cancelar" style="display: none;">Cancelar</button>
    <button type="submit" id="salvar" style="display: none;">Salvar</button>
    <p id="retorno"></p>
    <script>
        let professor_materia = <?= json_encode($this->professor_materias_turmas) ?>;
        let alunos_turma = <?= json_encode($this->alunos_turma) ?>;

        $('form').on('submit', function (e) {
            e.preventDefault()

            $.ajax({
                'url': '/professor/notas/aluno/salvar',
                'type': 'POST',
                'dataType': 'json',
                'data': $(this).serialize()
            })
            .done(function (data) {
                $('p.retorno').text(data.msg)
                $('form').trigger("reset")
            })
            .catch(function (a) {
                console.log(a)
            })
        })

        $('form select#turma').on('change', function () {
            $('form select#turma option#init').remove()
            $('form select#materia').prop('disabled', false)
            $('form select#aluno').prop('disabled', false)

            let turma = $(this).val()
            $('form select#materia option').each(function () {
                if ($(this).val() in professor_materia[turma]) {
                    $(this).css('display', 'block')
                } else {
                    $(this).css('display', 'none')
                }
            })
            $('form select#aluno option').each(function () {
                if ($(this).val() in alunos_turma[turma]) {
                    $(this).css('display', 'block')
                } else {
                    $(this).css('display', 'none')
                }
            })

            $('form select#materia').val('')
            $('form select#aluno').val('')
            $('p#aluno').text('Aluno: ')
            $('p#materia').text('Materia: ')
            $('input#prova').val(0)
            $('input#trabalho').val(0)
        })

        $('form select#materia').on('change', function () {
            if ($('form select#aluno').val() == '') {
                return
            }

            $.ajax({
                'url': `/professor/notas/aluno/${$('form select#aluno').val()}/materia/${$(this).val()}`,
                'type': 'GET',
                'dataType': 'json'
            })
            .done(data => {
                $('input#prova').val(data.notas.prova??0)
                $('input#trabalho').val(data.notas.trabalho??0)
                $('p#aluno').text('Aluno: ' + data.notas.aluno)
                $('p#materia').text('Materia: ' + data.notas.materia)
            })
        })

        $('form select#aluno').on('click', function () {
            if ($('form select#materia').val() == '') {
                return
            }

            $.ajax({
                'url': `/professor/notas/aluno/${$(this).val()}/materia/${$('form select#materia').val()}`,
                'type': 'GET',
                'dataType': 'json'
            })
            .done(data => {
                $('input#prova').val(data.notas.prova??0)
                $('input#trabalho').val(data.notas.trabalho??0)
                $('p#aluno').text('Aluno: ' + data.notas.aluno)
                $('p#materia').text('Materia: ' + data.notas.materia)
            })
        })

        $('button#editar').on('click', function () {
            if ($('select#turma').val() == '' || $('select#materia').val() == '' || $('select#aluno').val() == '') {
                return
            }
            $('button#editar').css('display', 'none')
            $('button#cancelar').css('display', 'block')
            $('button#salvar').css('display', 'block')

            $('select').each(function () {
                $(this).attr('readonly', 'readonly')
            })

            var prova = $('input#prova').val()
            var trabalho = $('input#trabalho').val()
            $('button#cancelar').on('click', function () {
                $('button#editar').css('display', 'block')
                $('button#cancelar').css('display', 'none')
                $('button#salvar').css('display', 'none')
                
                $('select').each(function () {
                    $(this).removeAttr('readonly', 'readonly')
                })
                $('input#prova').attr('readonly', 'readonly')
                $('input#prova').val(prova)
                $('input#trabalho').val('readonly', 'readonly')
                $('input#trabalho').val(trabalho)
            })

            $('input#prova').removeAttr('readonly', 'readonly')
            $('input#trabalho').removeAttr('readonly', 'readonly')
        })
    </script>
</form>