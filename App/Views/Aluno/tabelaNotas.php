<h1>Unidade <?= $_GET['unidade']??UNIDADE ?></h1>
<table>
    <thead>
        <td>Matéria</td>
        <td>Prova</td>
        <td>Trabalho</td>
        <td>Média Unidade</td>
        <td>Média final</td>
    </thead>
    <?php

        use App\Tools\Tools;

        foreach ($this->notas as $nota):
            if (Tools::isAjax()) {
                if ($_GET['materia'] != '' && $nota->cd_materia != $_GET['materia']) {
                    continue;
                }
                if ($_GET['unidade'] != '' && $nota->unidade != $_GET['unidade']) {
                    continue;
                }
            }

            ?>
                <tr>
                    <td><?= $nota->nm_materia ?></td>
                    <td><?= $nota->prova ?></td>
                    <td><?= $nota->trabalho ?></td>
                    <td><?= number_format(($nota->prova*2 + $nota->trabalho)/3, 2, ',', '.') ?></td>
                    <td><?= number_format($nota->media_final, 2, ',', '.') ?></td>
                </tr>
            <?php
        endforeach;
    ?>
</table>
