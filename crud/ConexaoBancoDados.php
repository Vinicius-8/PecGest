<?php

class ConexaoBancoDados {
    /**
     * Description of DataBanco
     *
     * @author Vinicius
     */
    
    private static $senha = SENHA; // senha do banco
    private static $Banco = BANCO; // nome do banco
    private static $host = HOST; // local do banco
    private static $usuario = USUARIO; // user do banco
    
    /** @var PDO */
    private static $conexao = null;
    
    //conecta com o bd e retorna um obj pdo
    private static function conectar() {
        try {
            if (self::$conexao == null):
                $dsn = 'mysql:host=' . self::$host . ';dbname=' . self::$Banco;
                
                $opcoes = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                
                self::$conexao = new PDO($dsn, self::$usuario, self::$senha, $opcoes);
            endif;
        } catch (PDOException $erro) {
            trigger_error("Não foi possivel realizar conexão com o banco",$erro);
            die;
        }
        
    self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$conexao;
    }
    
    /** objt PDO */
    static function getconexao() {
        return self::conectar();
    }
}
