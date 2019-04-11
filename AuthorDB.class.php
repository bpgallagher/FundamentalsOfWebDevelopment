
<?php
/*
   Handles database access for the Authors table. 

 */
class AuthorDB 
{  
    
    private $pdo = null;
    
    private static $baseSQL = "SELECT * FROM Authors";
    private static $constraint = ' order by LastName';
    
    public function __construct($connection) {
        $this->pdo = $connection;
    }      

    public function findById($id)
    {
        $sql = self::$baseSQL .  ' WHERE AuthorID=? ';
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($id));
        return $statement->fetch();
        
    }
    
    public function getAll()
    {
        $sql = self::$baseSQL . self::$constraint;
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, null);
        return $statement;        
    }    

}

?>