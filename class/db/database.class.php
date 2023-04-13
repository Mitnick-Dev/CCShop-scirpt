<?php 
namespace ccshop\db;
use PDOException;

class Database
{
    private $MYSQL_HOST = 'localhost';
    private $MYSQL_USER;
    private $MYSQL_PASS;
    private $MYSQL_DB;
    private $CHARSET='UTF8';
    private $COLLATION= 'utf8_general_ci';
    private $pdo=null;
    private $stmt=null;

    private function ConnectDB($mysql_db, $mysql_user, $mysql_pass){;
        $SQL = 'mysql:host='.$this->MYSQL_HOST.';dbname='.$mysql_db;
        //database connection
        try {
            $this->pdo=new \PDO($SQL,$mysql_user,$mysql_pass);
            $this->pdo->exec("SET NAMES '".$this->CHARSET."' COLLATE '".
            $this->COLLATION."'");
            $this->pdo->exec("SET CHARACTER SET '".$this->CHARSET."'");
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        }catch (PDOException $e) {
            die("Could not reach database with PDO".$e->getMessage());
        } //try catch end
    } //connect db end

    private function myQuery($query,$params=null) {
        if(is_null($params)) {
            $this->stmt=$this->pdo->query($query);
        }else {
            $this->stmt=$this->pdo->prepare($query);
            $this->stmt->execute($params);                
        }
        return $this->stmt;
    }

    public function getRows($query,$params=null){
        try {
            return $this->myQuery($query, $params)->fetchAll();
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getRow($query,$params=null){
        try {
            return $this->myQuery($query, $params)->fetch();
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getColumn($query,$params=null){
        try {
            return $this->myQuery($query, $params)->fetchColumn();
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Insert($query,$params=null) {
        try {
            $this->myQuery($query,$params);
            return $this->pdo->lastInsertId();
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Update($query,$params=null) {
        try {
            return $this->myQuery($query,$params)->rowCount();
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Delete($query, $params) {
        return $this->Update($query,$params);
    }

    public function __construct($MYSQL_DB, $MYSQL_USER, $MYSQL_PASS){
        $this->MYSQL_DB=$MYSQL_DB;
        $this->MYSQL_USER=$MYSQL_USER;
        $this->MYSQL_PASS=$MYSQL_PASS;
        $this->ConnectDB($MYSQL_DB, $MYSQL_USER, $MYSQL_PASS);
    }

    public function __destruct(){
        $this->pdo=NULL;
    }
}
?>