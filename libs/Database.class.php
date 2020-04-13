<?php
Class Database extends PDO
{
    private $host = DB_HOST;
    private $port = DB_PORT;
    private $dbname = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;

    private $error;
    private $stmt;
    private $_db;

    public function __construct()
    {
        $dsn = "sqlsrv:Server = $this->host,$this->port;Database=$this->dbname";
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        try {
            $this->_db = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            echo $e->getMessage();
            $this->error = $e->getMessage();
        }
    }
    public function insert($tableName, $data){
        $fields = array_keys($data);
        $cols = implode(', ',  $fields);
        $params = ':'. implode(',:', $fields);
        $sql = "INSERT INTO $tableName ($cols) VALUES ($params)";
        $this->query($sql);
        $data = $this->renameKey($data, ':');
        $this->bind($data);
        try{
            $this->execute();
        }catch (PDOException $e){
            return $e->getMessage();
        }
        return True;
    }

    public function update($tableName, $data, $where){
        $fields_data = array_keys($data);
        $query_data = $this->createQuery($fields_data);

        $fields_where = array_keys($where);
        $query_where = $this->createQuery($fields_where);

        $sql = "UPDATE $tableName SET $query_data WHERE $query_where";
        $this->query($sql);
        $data = $this->renameKey($data, ':');
        $where = $this->renameKey($where, ':');
        $this->bind($data);
        $this->bind($where);

        try{
            $this->execute();
        }catch (PDOException $e){
            return $e->getMessage();
        }
        return true;
    }

    public function delete($tableName, $where){
        $fields = array_keys($where);
        $query = $this->createQuery($fields);

        $sql = "DELETE FROM $tableName WHERE $query";
        $this->query($sql);
        $data = $this->renameKey($where, ':');
        $this->bind($data);

        try{
            $this->execute();
        }catch (PDOException $e){
            return $e->getMessage();
        }
        return true;
    }

    private function createQuery($fields){
        $query = [];
        for($i = 0 ;$i < count($fields); $i++){
            $query[] = $fields[$i].'=:'.$fields[$i];
        }
        return implode(', ', $query);
    }

    private function renameKey($arr, $prefix){
        foreach ($arr as  $key => $value){
            $arr[$prefix.$key] = $value;
            unset($arr[$key]);
        }
        return $arr;
    }

    public function query($sql)
    {
        $this->stmt = $this->_db->prepare($sql);
    }

    public function bind($params)
    {
        foreach ($params as $param => $value) {
            $type = isset($p['type']) ? $p['type'] : NULL;
            if (is_null($type)) {
                switch (True) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this->stmt->bindValue($param, $value, $type);
        }
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function find()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findALL()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId($name = null)
    {
        return $this->_db->lastInsertId($name);
    }
}
