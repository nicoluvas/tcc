<h2>Alunos</h2>

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
                <a href="/docente/aluno/<?= $aluno->cd_aluno ?>/cancelar-matricula">Cancelar Matrícula</a>
            </div> 
        <?php
    endforeach;
?>
