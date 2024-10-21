<?php

    foreach ($this->alunos as $aluno):
        ?>
            <div class="aluno">
                <p><?= $aluno->nome_aluno ?></p>
            </div>
        <?php
    endforeach;
