<form>
    
    <select name="turma" id="turma">
        <option value="" selected id='init'>Selecione uma turma</option>
        <?php
            foreach ($this->turmas as $turma):
                ?>
                    <option value="<?= $turma->cd_turma ?>"><?= $turma->nm_turma ?></option>
                    <?php
            endforeach;
        ?>
    </select>
    
    <select name="materia" id="materia" disabled>
        <option value="" id='init'>Selecione uma matéria</option>
        <?php
            foreach ($this->materias as $materia):
                ?>
                    <option value="<?= $materia->cd_materia ?>"><?= $materia->nm_materia ?></option>
                    <?php
            endforeach;
        ?>
    </select>
    <select name="professor" id="professor" disabled>
        <option value="" selected></option>
        <?php
            foreach ($this->professores as $professor):
                ?>
                    <option value="<?= $professor->cd_docente ?>"><?= $professor->nome_docente ?></option>
                <?php
            endforeach;
        ?>
    </select>
    <button type="button" id="editar" disabled>Editar</button>
    <button type="button" id="cancelar" style="display:none">Cancelar</button>
    <button type="submit" id="salvar" style="display:none">Salvar</button>
</form>
<script>
    $('form button#editar').on('click', function () {
        $(this).css('display', 'none')
        $('form button#cancelar').css('display', 'block')
        $('form button#salvar').css('display', 'block')
    })

    $('form button#cancelar').on('click', function () {
        $(this).css('display', 'none')
        $('form button#salvar').css('display', 'none')
        $('form button#editar').css('display', 'block')
    })

    $('form').on('submit', function (e) {
        e.preventDefault()

        $('form button#cancelar').css('display', 'none')
        $('form button#salvar').css('display', 'none')
        $('form button#editar').css('display', 'block')
    })

    $('form select#turma').on('change', function () {
        $('form select#turma option#init').remove()
        $('form select#materia').prop('disabled', false)
    })

    $('form select#materia').on('change', function () {
        $('form select#materia option#init').remove()
    })
</script>