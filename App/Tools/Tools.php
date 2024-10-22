<?php

namespace App\Tools;
use App\Connection;

abstract class Tools {
    public static function random_strings($length_of_string) {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        return substr(str_shuffle($str_result), 
                           0, $length_of_string);
    }

    public static function emPeriodoLetivo() {
        $sql = "SELECT * FROM tb_periodo_letivo ORDER BY cd_periodo_letivo DESC LIMIT 1";
        $smt = Connection::connect()->query($sql)->fetch();
        if ($smt->inicio == null) {
            define('ID_PERIODO_LETIVO', $smt->cd_periodo_letivo);
            define('EM_PERIODO_LETIVO', 0);
            return;
        } 
        define('EM_PERIODO_LETIVO', 1);
        define('ID_PERIODO_LETIVO', $smt->cd_periodo_letivo);
        define('INICIO_PERIODO_LETIVO', $smt->inicio);
        define('INICIO_FERIAS', $smt->inicio_ferias);
        define('FIM_PERIODO_LETIVO', $smt->fim);

        $inicio_periodo = date_create($smt->inicio);
        if (date_diff($inicio_periodo, date_create())->format('d') < 90) {
            define('UNIDADE', 1);
        } else if (210 > date_diff($inicio_periodo, date_create())->format('d') && date_diff($inicio_periodo, date_create())->format('d') > 90) {
            define('UNIDADE', 2);
        } else if (date_diff($inicio_periodo, date_create())->format('d') > 210) {
            define('UNIDADE', 3);
        }
    }

    public static function isAjax() {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    }
}
