<?php
    if (EM_PERIODO_LETIVO) {
        ?>
            <div class="unidade">Unidade <?= UNIDADE?></div>
            <div class="unidade">Unidade Termina em <?= date('d/m/Y', strtotime(FIM_UNIDADE))?></div>
            <?php
                if (date_diff(date_create(FIM_UNIDADE), date_create())->format('%a') <= 15) {
                    ?>
                        <p>Unidade acaba em <?= date_diff(date_create(FIM_UNIDADE), date_create())->format('%a') ?> dia(s) <br> Avise os Professores a Darem as Notas</p>
                    <?php
                }
            ?>
            <p>Nota Média do Ano: <?= $this->media_notas->media ?></p>
            <p>Nota Média da Unidade 1: <?= $this->media_notas->unidade1 ?></p>
            <p>Nota Média da Unidade 2: <?= $this->media_notas->unidade2 ?></p>
            <p>Nota Média da Unidade 3: <?= $this->media_notas->unidade3 ?></p>

            <p>Frequência Média do Ano: <?= $this->media_frequencia->media ?></p>
            <p>Frequência Média da Unidade 1: <?= $this->media_frequencia->unidade1 ?></p>
            <p>Frequência Média da Unidade 2: <?= $this->media_frequencia->unidade2 ?></p>
            <p>Frequência Média da Unidade 3: <?= $this->media_frequencia->unidade3 ?></p>

        <?php
    }

