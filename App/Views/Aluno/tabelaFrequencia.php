<h1>Unidade <?= $_GET['unidade'] ?? UNIDADE ?></h1>
<table id="oppacity-appear">
    <thead>
        <tr>
            <td>Matéria</td>
            <td>Faltas Unidade <?= $_GET['unidade'] ?? UNIDADE ?></td>
            <td>Frequência Unidade <?= $_GET['unidade'] ?? UNIDADE ?></td>
            <td>Faltas Total</td>
            <td>Frequência Total</td>
        </tr>
    </thead>
    <tbody>
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
                <td><?= number_format($frequeciaMateria->frequencia * 100, 2, ',', '.') . '%' ?></td>
                <td><?= $frequeciaMateria->faltas_total ?></td>
                <td><?= number_format($frequeciaMateria->frequencia_total * 100, 2, ',', '.') . '%' ?></td>
            </tr>
    <?php endforeach; ?>
    </tbody>
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
