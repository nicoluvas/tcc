<h2>Alunos</h2>
<style>
      @import url('/assets/css/global.css');
    main > div > a {
    padding: 2px 5px 2px 5px;
      border: 1px solid var(--shadow);
      border-radius: 10px;
      background-color: var(--shadow);
    }
</style>
<?php
    foreach($this->turmas as $turma) :
        ?>
            <a href="/docente/alunos/turma/<?= $turma->cd_turma ?>"><?= $turma->nm_turma ?></a>
        <?php
    endforeach;
?>
<?php
    foreach($this->alunos as $aluno):
        ?>
            <hr>
            <div class="aluno">
                <p><?= $aluno->nome_aluno ?></p>
                <a href="/docente/aluno/<?= $aluno->cd_aluno ?>/info">Informações</a>
                <a class="cancelarMatricula" id="<?= $aluno->nome_aluno ?>" href="/docente/aluno/<?= $aluno->cd_aluno ?>/cancelar-matricula">Cancelar Matrícula</a>
            </div> 
        <?php
    endforeach;
?>
<script>
    $('.aluno a.cancelarMatricula').click(function() {
        if (confirm('Deseja cancelar a matrícula de ' + $(this).attr('id') + '?')) {
            return true
        }
        return false; // cancel the event
    });
</script>

