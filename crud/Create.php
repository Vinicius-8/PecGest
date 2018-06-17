<?php
    /**
     * Description of DataBanco
     *
     * @author Vinicius
     */

    

class Create extends ConexaoBancodados {

    private $tbl; //tabela a inserir
    private $datas;  //dados a serem inseridos
    private $results; //index da tupla que foi inserida

    /** @var PDOStatement */
    private $sqlpronto; 

    /** @var PDO */
    private $conexao;
    
    public function runCreate($tbl, array $datas) {//metodo principal de execução
        $this->tbl = (string) $tbl;
        $this->datas = $datas;
        $this->getSintaxe();
        $this->run();
    }

    public function getresults() {//obtem o id da ultima tupla inserida
        return $this->results;
    }

    private function conect() {//obtem a conexao com o banco e prepara o sql
        $this->conexao = parent::getconexao(); 
        $this->sqlpronto = $this->conexao->prepare($this->sqlpronto);       
    }

    private function getSintaxe() {//transforma o array em string e prepara o sql
        $colunas = implode(', ', array_keys($this->datas));       
        $valores = ':' . implode(', :', array_keys($this->datas));        
        $this->sqlpronto = "INSERT INTO {$this->tbl} ({$colunas}) VALUES ({$valores})";
    }
    
    private function run() {//executa o sql
        $this->conect();
        try {                        
            $this->sqlpronto->execute($this->datas);
            $this->results = $this->conexao->lastInsertId(); 
        } catch (PDOException $e) {
            $this->results = null;
            echo $e->getMessage();
            trigger_error("erro no cadastro",$e->getCode());
        }
    }

}
