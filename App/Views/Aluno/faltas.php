<?php
    use App\Tools\Tools;
    if (!is_null($this->faltas)) {
?>
<div class="container">
    <?php
        foreach ($this->faltas as $data => $faltas):
            if (Tools::isAjax()) {
                if ($_GET['materia'] != '' && 0==sizeof(array_filter($faltas, function ($falta) {
                    if ($falta->cd_materia != $_GET['materia']) return false;
                    return true;
                }))) {
                    continue;
                }
            }
            ?>
                <div class="dia">
                    <p><?= date('d/m/Y', strtotime($data)) ?></p>
                    <div class="faltas-dia">
                        <?php
                            foreach ($faltas as $falta):
                                if (Tools::isAjax()) {
                                    if ($_GET['materia'] != '' && $falta->cd_materia != $_GET['materia']) {
                                        continue;
                                    }
                                }
                                ?>
                                    <p><?= $falta->nm_materia ?> <span>falta</span></p>
                                <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            <?php
        endforeach;
    ?> 
</div>
<?php }