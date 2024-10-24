<?php
    if (!EM_PERIODO_LETIVO) {
        ?>
<p style="display:flex; justify-content:center; font-size: 10vh;">Fora de período letivo. 😐</p>
<?php
        die();
    }
?>
<style>
@import url('/assets/css/global.css');
main {
    display:flex;
    justify-content:center;
}
form {
    display: flex;
    justify-content: center;
    flex-direction: column;
    background-color: var(--background);
    min-width: 50vw;
}

input {
    padding: 1vw;
    background-color: var(--background);
    min-height: 1rem;
    border: none;
    border-radius: .5rem;
}

select[readonly='readonly'] {
    background: #eee;
    pointer-events: none;
    touch-action: none;
}

select {
    padding: 1rem;
    background-color: var(--accent);
    color: var(--text);
    font-weight: 600;
    border-radius: .5rem;
    border: none;
}

.selects {
    margin: 1vw;
    display: flex;
    justify-content: space-evenly;
}

button {
    padding: 1rem;
    font-weight: 500;
    background-color: var(--accent);
    border-radius: .5rem;
    border:none;
    max-height: fit-content;
    max-width: fit-content; 
    &:hover{
        cursor:pointer;
        opacity:.9;
    }
}
</style>
<form>
    <div class="selects">
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
    </div>

    <div
        style="display:flex;flex-direction:column;background-color:var(--background-alt);border-radius:.5rem;border:1px solid var(--shadow);margin: 0 5vw 0 5vw;padding: 1vw;">
        <p style="font-size: 3rem; font-weight: 700; margin: 0;">Unidade <?= UNIDADE ?></p>
        <div style="border-radius: .5rem; border: 1px var(--shadow) solid;padding: 0 1vw 0 1vw;margin: 5vh 0 5vh 0;background-color:var(--background)">
            <p id="aluno">Aluno: </p>
            <p id="materia">Materia: </p>

        </div>
        <div style="display:flex; column-gap: 1vw;">
            <div style="display:flex;flex-direction:column;">
                <span>Prova</span>
                <input type="number" name="prova" id="prova" readonly="readonly" value="0" step="0.01" min="0" max="10">

            </div>
            <div style="display:flex;flex-direction:column;">
                <span>Trabalho</span>
                <input type="number" name="trabalho" id="trabalho" readonly="readonly" value="0" step="0.01" min="0"
                    max="10">

            </div>

            <button type="button" id="editar">Editar</button>
            <button type="button" id="cancelar" style="display: none;">Cancelar</button>
            <button type="submit" id="salvar" style="display: none;">Salvar</button>
        </div>

        <p id="retorno"></p>
    </div>
    <script>
    let professor_materia = <?= json_encode($this->professor_materias_turmas) ?>;
    let alunos_turma = <?= json_encode($this->alunos_turma) ?>;

    $('form').on('submit', function(e) {
        e.preventDefault()

        $.ajax({
                'url': '/professor/notas/aluno/salvar',
                'type': 'POST',
                'dataType': 'json',
                'data': $(this).serialize()
            })
            .done(function(data) {
                $('p#retorno').text(data.msg)
                $('select#turma').removeAttr('readonly', 'readonly')
                $('select#materia').removeAttr('readonly', 'readonly')
                $('select#aluno').removeAttr('readonly', 'readonly')
                $('input#prova').attr('readonly', 'readonly')
                $('input#trabalho').attr('readonly', 'readonly')
                $('button#editar').css('display', 'block')
                $('button#cancelar').css('display', 'none')
                $('button#salvar').css('display', 'none')
            })
            .catch(function(a) {
                console.log(a)
            })
    })

        $('form select#turma').on('change', function () {
            $('form select#materia').prop('disabled', false)
            $('form select#aluno').prop('disabled', false)

        let turma = $(this).val()
        $('form select#materia option').each(function() {
            if ($(this).val() in professor_materia[turma]) {
                $(this).css('display', 'block')
            } else {
                $(this).css('display', 'none')
            }
        })
        $('form select#aluno option').each(function() {
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

    $('form select#materia').on('change', function() {
        if ($('form select#aluno').val() == '') {
            return
        }

        $.ajax({
                'url': `/professor/notas/aluno/${$('form select#aluno').val()}/materia/${$(this).val()}`,
                'type': 'GET',
                'dataType': 'json'
            })
            .done(data => {
                console.log(data)
                $('input#prova').val(data.notas.prova)
                $('input#trabalho').val(data.notas.trabalho)
                $('p#aluno').text('Aluno: ' + data.notas.aluno)
                $('p#materia').text('Materia: ' + data.notas.materia)
            })
    })

    $('form select#aluno').on('click', function() {
        if ($('form select#materia').val() == '') {
            return
        }

        $.ajax({
                'url': `/professor/notas/aluno/${$(this).val()}/materia/${$('form select#materia').val()}`,
                'type': 'GET',
                'dataType': 'json'
            })
            .done(data => {
                console.log(data)
                $('input#prova').val(data.notas.prova)
                $('input#trabalho').val(data.notas.trabalho)
                $('p#aluno').text('Aluno: ' + data.notas.aluno)
                $('p#materia').text('Materia: ' + data.notas.materia)
            })
            .catch(data => console.log(data))
    })

    $('button#editar').on('click', function() {
        if ($('select#turma').val() == '' || $('select#materia').val() == '' || $('select#aluno').val() == '') {
            return
        }
        $('button#editar').css('display', 'none')
        $('button#cancelar').css('display', 'block')
        $('button#salvar').css('display', 'block')

        $('select').each(function() {
            $(this).attr('readonly', 'readonly')
        })

        var prova = $('input#prova').val()
        var trabalho = $('input#trabalho').val()
        $('button#cancelar').on('click', function() {
            $('button#editar').css('display', 'block')
            $('button#cancelar').css('display', 'none')
            $('button#salvar').css('display', 'none')

            $('select').each(function() {
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