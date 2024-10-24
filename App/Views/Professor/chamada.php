<style>
    @import url('global.css');
    textarea {
        background-color: var(--background);
        border: 1px var(--shadow) solid;
        border-radius: .5rem;
        min-width: 30vw;
        min-height: 30vh;
        padding: 1vh;
    }

    .chmda{
        width: 75vw;
        padding: 1vw;
        background-color: var(--background-alt)
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input {
        padding: 1rem;
    background-color: var(--accent);
    border-radius: 1rem;
    padding: 1rem;
    margin: 0.5rem;
    border: none;
    font-weight: 600;
    &:hover {
        opacity: 0.5;
        cursor: pointer;
    }
    }

    .selects{
            display: flex;
            justify-content: center;
            padding: 1rem;
            column-gap: 1rem;
        }
        .selects>select{
            padding: 1rem;
        }

    .chmda{
        display: flex;
        justify-content: space-evenly;
        border: 1px solid var(--shadow);
        border-radius: .5rem;
    }

    .chmda-dir{
        display:flex;
        flex-direction:column;
    }
</style>
<?php
    if (!EM_PERIODO_LETIVO) {
        ?>
            <p>fora de periodo letivo</p>
        <?php
        exit();
    }
?>
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
        <select name="qt_aulas" id="qt_aulas" disabled>
            <option value="1">1 aula</option>
            <option value="2">2 aulas</option>
            <option value="3">3 aulas</option>
        </select>
    </div>

    <div class="chmda">
        <div class="alunos">Selecione uma sala.</div>
        <div class="chmda-dir">
            <h3>Conteúdo de aula e anotações</h3>
            <textarea name="ds_aula" id="ds_aula" disabled required></textarea>
            <input type="submit" value="Enviar" disabled>
            <p class="retorno"></p>
        </div>
    </div>
    <script>
        let professor_materia = <?= json_encode($this->professor_materias_turmas) ?>;

        $('form').on('submit', function (e) {
            e.preventDefault()

            $.ajax({
                'url': '/professor/chamada',
                'type': 'POST',
                'dataType': 'json',
                'data': $(this).serialize()
            })
            .done(function (data) {
                $('p.retorno').text(data.msg)
                $('form').trigger("reset")
                $('input[type="submit"]').prop('disabled', true)
            })
            .catch(function (a) {
                console.log(a)
            })
        })

        $('form select#turma').on('change', function () {
            $('form select#turma option#init').remove()
            $('form select#qt_aulas').prop('disabled', false)
            $('form select#materia').prop('disabled', false)
            $('form textarea').prop('disabled', false)
            $('input[type="submit"]').prop('disabled', false)

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
                'url': `/professor/chamada/alunos/turma/${$('form select#turma').val()}/qa/${$('form select#qt_aulas').val()}`,
                'type': 'GET',
                'dataType': 'html'
            })
            .done(function (data) {
                $('.alunos').html(data)
            })
        })

        $('form select#qt_aulas').on('change', function () {
            $.ajax({
                'url': `/professor/chamada/alunos/turma/${$('form select#turma').val()}/qa/${$('form select#qt_aulas').val()}`,
                'type': 'GET',
                'dataType': 'html'
            })
            .done(function (data) {
                $('.alunos').html(data)
            })
        })
    </script>
</form>
