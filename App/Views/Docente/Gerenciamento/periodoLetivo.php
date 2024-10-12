<?php
    if (EM_PERIODO_LETIVO) {
        ?>
            <h2>Em período Letivo</h2>
            <p>
                Início: <?= INICIO_PERIODO_LETIVO ?> <br>
                Fim: <?= FIM_PERIODO_LETIVO ?>
            </p>
        <?php
    } else {
        ?>
            <h2>Fora do ano letivo</h2>
            <form action="/docente/gerenciamento/periodo-letivo/iniciar" method="post">
                <h3>Iniciar Ano Letivo</h3>
                <input type="date" name="inicio" id="inicio" min='<?= date('Y-m-d', time()+1296000) ?>'>
                <p>Data Final: <span id="dia-final">Selecione uma data</span> <span id="dia-semana"></span></p>
                <input type="submit" value="Iniciar">
            </form>
            <script>
                $(document).ready(function() {
                    // Captura a mudança no campo de data
                    $('input[type="date"]').on('change', function() {
                        var date = new Date($(this).val()); // Pega o valor da data
                        date.setDate(date.getDate() + 300)
                        if (date.getDay() == 0 || date.getDay() == 6) {
                            date.setDate(date.getDate() + 2)
                        }
                        $('form p span#dia-final').html(String(date.getDate()).padStart(2, '0') + '/' + String(date.getMonth()+1).padStart(2, '0') + '/' + date.getFullYear())
                        $('form p span#dia-semana').html(['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'][date.getDay()])
                    });
                });
            </script>
        <?php
    }
?>
