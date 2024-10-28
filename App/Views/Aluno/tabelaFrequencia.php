<table>
    <thead>
        <td>Matéria</td>
        <td>Faltas Unidade <?= $_GET['unidade']??UNIDADE ?></td>
        <td>Frequência Unidade <?= $_GET['unidade']??UNIDADE ?></td>
        <td>Faltas Total</td>
        <td>Frequência Total</td>
    </thead>
    <?php

        use App\Tools\Tools;

        foreach ($this->frequeciaMaterias as $frequeciaMateria):
            if (Tools::isAjax()) {
                if ($_GET['materia'] != '' && $frequeciaMateria->cd_materia != $_GET['materia']) {
                    continue;
                }
            }
            ?>
                <tr>
                    <td><?= $frequeciaMateria->nm_materia ?></td>
                    <td><?= $frequeciaMateria->faltas_unidade ?></td>
                    <td><?= number_format($frequeciaMateria->frequencia*100, 2, ',', '.').'%' ?></td>
                    <td><?= $frequeciaMateria->faltas_total ?></td>
                    <td><?= number_format($frequeciaMateria->frequencia_total*100, 2, ',', '.').'%' ?></td>
                </tr>
            <?php
        endforeach;
    ?>
</table>