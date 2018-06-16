<?php
class Read extends ConexaoBancoDados {

   
    private $result; //resultado da consulta em forma de array
    private $daft = '*'; //coluna ser procurada na tabela
    private $select;    //sql de consulta
    private $vals;      //valores 
    /**
     * 
     * @param string $daft o que buscar no banco
     */
    function setDaft($daft) {
        $this->daft = $daft;
    }
    /** @var PDOStatement */
    private $sql_preparado;
    

    
        /** @var PDO */
    private $Conexao;
    
    public function runRead($Tabela, $Termos = null, $vals = null) {//metodo principal para a leitura
         if (!empty($vals)):
             $this->alterarVals($vals);
        endif;
        $this->select = "SELECT {$this->daft} FROM {$Tabela} {$Termos}";
        $this->run();
    }
    
    public function getresult() {//obtem o resultado da consulta em forma de array
        return $this->result;
    }

    public function getLinhasAfetadas() {//quantidadede linhas retornadas
        return $this->sql_preparado->rowCount();
    }
    
    public function alterarVals($vals) {//configura a string em arrays
        if (!empty($vals)):
            parse_str($vals, $this->vals);
        endif;
    }


    private function conect() {//obtem a conexao com o banco e prepara o sql
        $this->Conexao = parent::getconexao(); 
        $this->sql_preparado = $this->Conexao->prepare($this->select);
        $this->sql_preparado->setFetchMode(PDO::FETCH_ASSOC); 
    }

    private function getSintaxe() {//cria o sql
        if ($this->vals):
            foreach ($this->vals as $Indices => $Valor):
                
                if ($Indices == 'limit' || $Indices == 'offset'):
                    $Valor = (int) $Valor;
                
                endif;                
                $this->sql_preparado->bindValue(":{$Indices}", 
                                                $Valor, 
                                                ( is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            endforeach;

        endif;
    }

    private function run() {//executa o sql
        $this->conect();
        try {
            $this->getSintaxe(); 
            $this->sql_preparado->execute(); 
            $this->result = $this->sql_preparado->fetchAll(); 
        } catch (PDOException $e) {
            $this->result = null;
            echo $e->getMessage();
            trigger_error("Erro ao fazer leitura",$e->getCode());
        }
    }

}
