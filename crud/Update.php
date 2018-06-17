<?php


class Update extends conexaoBancodados {
    
    private $vals;    //valores a serem subistituidos na sql  
    private $tbl;        
    private $params;    
    private $dados;         
     

    /** @var PDOStatement */
    private $sqlpronto;

    /** @var PDO */
    private $conexao;

    public function runUpdate($tbl, array $dados, $params, $vals) {
        $this->tbl = (string) $tbl;
        $this->dados = $dados;
        $this->params = (string) $params;
        $this->alterarVals($vals);
        $this->getSintaxe();
        $this->run();
    }

    public function getLinhasAfetadas() {//quantidade de linhas afetadas
        return $this->sqlpronto->rowCount();
    }
    public function alterarVals($vals) {//string --> vetor

        if (!empty($vals)):
            parse_str($vals, $this->vals);
        else:
            return null;
        endif;
    }

    private function conect() {//obtem a conexao e prepara o sql
        $this->conexao = parent::getconexao();
        $this->sqlpronto = $this->conexao->prepare($this->sqlpronto);
    }
    private function getSintaxe() {//cria o sql

        foreach ($this->dados as $indexes => $valor):
            $str[] = $indexes . ' = :' . $indexes;
        endforeach;
        $str = implode(', ', $str);
        $this->sqlpronto = "UPDATE {$this->tbl} SET {$str} {$this->params}";
    
    }

    private function run() {//executa o sql
        $this->conect();
        try {
            $this->sqlpronto->execute(array_merge($this->dados, $this->vals));
        } catch (PDOException $e) {
            $this->result = null;
           trigger_error("erro: ",$e->getCode());
        }
    }

}
