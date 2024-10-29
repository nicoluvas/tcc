<?php
use App\Tools\Tools;

if (!is_null($this->faltas)) {
?>
<div class="container">
    <?php
        foreach ($this->faltas as $data => $faltas):
            // Verifica se a requisição é AJAX e filtra por matéria
            if (Tools::isAjax()) {
                if ($_GET['materia'] != '' && 0 == sizeof(array_filter($faltas, function ($falta) {
                    return $falta->cd_materia == $_GET['materia'];
                }))) {
                    continue;
                }
            }

            // Conta as faltas por matéria
            $faltasPorMateria = [];
            foreach ($faltas as $falta) {
                if (Tools::isAjax() && $_GET['materia'] != '' && $falta->cd_materia != $_GET['materia']) {
                    continue;
                }
                if (!isset($faltasPorMateria[$falta->nm_materia])) {
                    $faltasPorMateria[$falta->nm_materia] = 0;
                }
                $faltasPorMateria[$falta->nm_materia]++;
            }

            // contagem ao inves do jumpscare kkkkkkkkkk
            if (!empty($faltasPorMateria)) {
            ?>
                <div class="dia">
                    <p><?= date('d/m/Y', strtotime($data)) ?></p>
                    <div class="faltas-dia">
                        <?php
                        foreach ($faltasPorMateria as $materia => $quantidade):
                        ?>
                            <p><?= $materia ?> <span><?= $quantidade ?> falta<?= $quantidade > 1 ? 's' : '' ?></span></p>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            <?php
            }
        endforeach;
    ?> 
</div>
<?php } ?>
