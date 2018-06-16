<?php

/**
 * Description of Delete
 *
 * @author Vinicius
 */
class Delete extends conexaoBancoDados {
    
   private $tbl;        // tabela
    private $params;    // parametros ex: where
    private $vals;       // valores para inserir no sql 
    /** @var PDOStatement */
    private $sqlpronto;
    /** @var PDO */
    private $conexao;
 
    public function runDelete($tbl, $params, $vals) {
        $this->tbl = (string) $tbl;
        $this->params = (string) $params;
        if ($this->alterarVals($vals)):
            $this->getSintaxe();
            $this->run();
        else:
            echo "erro na deleção";
        endif;
    }
    
    public function getLinhasAfetadas() {//quantidade de linhas afetadas
        return $this->sqlpronto->rowCount();
    }

    public function alterarVals($vals) {//string --> array
        if (!empty($vals)):
           
            parse_str($vals, $this->vals);
            return true;
        else:
            return false;
        endif;
    }

    private function conect() {//conexao com o bd e preparação do sql
        
        $this->conexao = parent::getconexao();
        
        $this->sqlpronto = $this->conexao->prepare($this->sqlpronto);
    }
   
    private function getSintaxe() {//cria o sql
        $this->sqlpronto = "DELETE FROM {$this->tbl} {$this->params}";
    }
    
    private function run() {//executa o sql
        $this->conect();
        try {
            $this->sqlpronto->execute($this->vals);
            
        } catch (PDOException $e) {
            trigger_error("Erro ao cadastrar",$e->getCode());
        }
    }
}
