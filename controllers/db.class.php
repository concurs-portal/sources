<?php
ini_set('display_errors',1);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author Iulian
 */
class db extends PDO {
    protected $host;
    protected $database;
    protected $username;
    protected $password;
    protected $dns;
    
    public function __construct($host=false,$database=false,$username=false,$password=false){
        if($host)
            $this->host=$host;
        else
            $this->host=DB_HOST;
        
        if($database)
            $this->database=$database;
        else
            $this->database=DB_DATABASE;
        
        if($username)
            $this->username=$username;
        else
            $this->username=DB_USERNAME;
        
        if($password)
            $this->password=$password;
        else
            $this->password=DB_PASSWORD;
        
        $dsn='mysql:host='.$this->host.';dbname='.$this->database;
        parent::__construct($dsn, $this->username, $this->password);
    }
    
    public static function select_assoc($sql){
        $db=new Db();
        $stm=$db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function select_object($sql){
        $db=new Db();
        $stm=$db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    
    public static function select($sql){
        $db=new Db();
        $stm=$db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_NUM);
    }
    
    public static function select_list($sql){
        $db=new Db();
        $stm=$db->prepare($sql);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_NUM);
        debug($result);
        $ret=array();
        foreach($result as $res){
            $ret[$res[0]]=$res[1];
        }
        return $ret;
    }
    
    
    
    

}

?>
