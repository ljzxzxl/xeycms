<?php
class db extends PDO {
    public function __construct(){
        try {
            parent::__construct("$GLOBALS[dsn]", $GLOBALS['user'], $GLOBALS['pass'], $GLOBALS['con']);
         } catch (PDOException $e) {
         die("Error: " . $e->__toString() . "<br/>");
        }
    }
    public final function query($sql){
        try {
            return parent::query($this->setString($sql));
        }catch (PDOException $e){
            die("Error: " . $e->__toString() . "<br/>");
        }
    }
    private final function setString($sql){
        return $sql;
    }
}
?>