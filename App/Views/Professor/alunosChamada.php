<?php

    foreach ($this->alunos as $aluno):
        ?>
            <div class="aluno">
                <p><?= $aluno->nome_aluno ?></p>
                <div class="boxes">
                    <?php
                        for ($i = 1; $i <= $this->qt_aulas; $i++) {
                            ?>
                            <input type="checkbox" name="falta-<?= $aluno->cd_aluno ?>-<?= $i ?>">
                            <?php
                        }
                    ?>
                </div>
            </div>
        <?php
    endforeach;
