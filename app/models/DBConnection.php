<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 09/03/18
 * Time: 08:55
 */

class DBConnection
{
    const HOST = 'localhost';
    const BANCO = '3info3';
    const USUARIO = '3info3';
    const SENHA = '3info3';

<<<<<<< HEAD
    public static   function getConexao(){
=======
    public function getConexao(){
>>>>>>> ed3104c9c2ee1f99b5a4c3c6e4a7d32b9f16cdea
        try {
            $conexao = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::BANCO, self::USUARIO, self::SENHA);

            return $conexao;
        }catch (Exception $e){
            echo "Ocorreu um erro: {$e->getMessage()} na linha {$e->getLine()}";
        }
    }
}


$conexao = new DBConnection();
$conexao->getConexao();