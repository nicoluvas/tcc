<?php

namespace App\Tools;
use App\Connection;

abstract class Tools {
    public static function random_strings($length_of_string) {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        return substr(str_shuffle($str_result), 
                           0, $length_of_string);
    }

    public static function encrypt($data) {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $_ENV['CRYPT_KEY'], 0, $iv);
        return base64_encode($encrypted . '::' . $iv);
    }

    public static function decrypt($data) {
        list($encryptedData, $iv) = explode('::', base64_decode($data), 2);
	    return openssl_decrypt($encryptedData, 'aes-256-cbc', $_ENV['CRYPT_KEY'], 0, $iv);
    }

    public static function decryptRecursive(&$input) {
        $keysToDecrypt = ['nome', 'telefone', 'cpf', 'rg', 'email', 'nascimento', 'uf', 'cidade', 'bairro', 'logradouro', 'numero', 'complemento', 'cep'];
        if (is_object($input)) {
            foreach ($input as $key => $value) {
                if (!Tools::startsWithAny($key, $keysToDecrypt)) continue;
                $input->$key = Tools::decrypt($value);
            }
            // Verifica recursão em propriedades que são arrays
            foreach ($input as $key => $value) {
                if (is_array($value)) {
                    Tools::decryptRecursive($input->$key);
                }
            }
        }
        
        if (is_array($input)) {
            $ordenar = false;
            foreach ($input as &$value) {
                Tools::decryptRecursive($value);
                if (property_exists($value, 'cd_aluno') || property_exists($value, 'cd_docente')) {
                    $ordenar = true;
                }
            }
            if ($ordenar) {
                usort($input, function($a, $b) {
                    // Verifica qual propriedade 'nome' usar com base na classe
                    $nomeA = $a->nome_aluno ?? $a->nome_docente ?? $a->nome_responsavel;
                    $nomeB = $b->nome_aluno ?? $b->nome_docente ?? $b->nome_responsavel;
                
                    return strcmp($nomeA, $nomeB);
                });
                usort($input, function($a, $b) {
                    return strcmp($a->id_cargo!=1?$a->id_cargo:$a->id_turma, $b->id_cargo!=1?$b->id_cargo:$b->id_turma);
                });
            }
        }
    }

    public static function startsWithAny($string, $words) {
        foreach ($words as $word) {
            // Verifica se a string começa com a palavra
            if (strpos($string, $word) === 0) {
                return true; // Retorna verdadeiro se a string começar com uma das palavras
            }
        }
        return false; // Retorna falso se não começar com nenhuma das palavras
    }

    public static function emPeriodoLetivo($periodo=null) {
        if (null !== $periodo) {
            $sql = "SELECT * FROM tb_periodo_letivo WHERE cd_periodo_letivo = :periodo ORDER BY cd_periodo_letivo DESC LIMIT 1";
            $smt = Connection::connect()->prepare($sql);
            $smt->execute(['periodo' => $periodo]);
            $smt = $smt->fetch();

            if (empty($smt)) {
                require_once ERRO404;
                die();
            }
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
            $em_ferias = 0;
            if (date_diff($inicio_periodo, date_create())->format('%a') < 90) {
                define('UNIDADE', 1);
                define('FIM_UNIDADE', date('Y-m-d', strtotime($smt->inicio . ' + 90 days')));
            } else if (210 > date_diff($inicio_periodo, date_create())->format('%a') && date_diff($inicio_periodo, date_create())->format('d') > 90) {
                define('UNIDADE', 2);
                define('FIM_UNIDADE', date('Y-m-d', strtotime($smt->inicio . ' + 210 days')));
                if (INICIO_FERIAS < date('Y-m-d') && date('Y-m-d') < date('Y-m-d', strtotime(INICIO_FERIAS . ' + 30 days'))) {
                    $em_ferias = 1;
                }
            } else if (date_diff($inicio_periodo, date_create())->format('%a') > 210) {
                define('UNIDADE', 3);
                define('FIM_UNIDADE', date('Y-m-d', strtotime($smt->inicio . ' + 300 days')));
            }
            define('EM_FERIAS', $em_ferias);
            return;
        }

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
        $em_ferias = 0;
        if (date_diff($inicio_periodo, date_create())->format('%a') < 90) {
            define('UNIDADE', 1);
            define('FIM_UNIDADE', date('Y-m-d', strtotime($smt->inicio . ' + 90 days')));
        } else if (210 > date_diff($inicio_periodo, date_create())->format('%a') && date_diff($inicio_periodo, date_create())->format('d') > 90) {
            define('UNIDADE', 2);
            define('FIM_UNIDADE', date('Y-m-d', strtotime($smt->inicio . ' + 210 days')));
            if (INICIO_FERIAS < date('Y-m-d') && date('Y-m-d') < date('Y-m-d', strtotime(INICIO_FERIAS . ' + 30 days'))) {
                $em_ferias = 1;
            }
        } else if (date_diff($inicio_periodo, date_create())->format('%a') > 210) {
            define('UNIDADE', 3);
            define('FIM_UNIDADE', date('Y-m-d', strtotime($smt->inicio . ' + 300 days')));
        }
        define('EM_FERIAS', $em_ferias);
    }

    public static function isAjax() {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    }
}
