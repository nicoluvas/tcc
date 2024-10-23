<h2>Alunos</h2>
<style>
@import url('/assets/css/global.css');

main .alunos {
    display: flex;
    flex-direction: column;
    row-gap: 8px;
}

.turmas {
    margin: 1rem;
}
</style>
<div class="turmas">
    <select id="turmasSelect" onchange="location = this.value;">
        <option value="">Selecione a turma</option>
        <?php foreach($this->turmas as $turma): ?>
        <option value="/docente/alunos/turma/<?= $turma->cd_turma ?>"><?= $turma->nm_turma ?></option>
        <?php endforeach; ?>
    </select>
</div>


<div class="alunos">
    <?php
    foreach($this->alunos as $aluno):
        ?>
    <div class="aluno" id="<?= $aluno->cd_aluno ?>">
        <p><?= $aluno->nome_aluno ?></p>
        <p>Turma <?= $aluno->nm_turma ?></p>
        <a href="/docente/aluno/<?= $aluno->cd_aluno ?>/info">Informações</a>
        <button class="cancelarMatricula" aluno="<?= $aluno->nome_aluno ?>" id="<?= $aluno->cd_aluno ?>">Cancelar
            Matrícula</button>
    </div>
    <?php
    endforeach;
    ?>
</div>

<script>
$('.aluno button.cancelarMatricula').click(function() {
    if (confirm('Deseja cancelar a matrícula de ' + $(this).attr('aluno') + '?')) {
        $.ajax({
                url: `/docente/aluno/${$(this).attr('id')}/cancelar-matricula`,
                type: 'POST',
                dataType: 'json'
            })
            .done(data => {
                if (data.ok) {
                    alert('Matrícula Cancelada!')
                    $(`.aluno#${$(this).attr('id')}`).remove()
                    return
                }
                alert('Algo deu errado!')
            })
    }
    return false; // cancel the event
});
</script>