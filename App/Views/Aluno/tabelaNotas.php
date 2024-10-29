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
<style>
table {
    border: 1px solid var(--shadow);
    border-radius: .5rem;
    width: 100%; 
}

thead {
    white-space: nowrap;
    background-color: var(--secondary);
    font-weight: 600;
}

td {
    text-align: center;
    padding: 0.5rem; 
    font-size: 1vw; 

}

tbody>tr:hover {
    background-color: rgba(0, 0, 0, 0.05);
}
</style>