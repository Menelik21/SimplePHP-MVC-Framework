<?php
/**
 * This model handel database connection.
 */
namespace App\core;

use PDO;

class Model{

    /**
     * Datasase connection properties comes from the database config
     */
    private $dbDriver = DB_DRIVER;
    private $dbHost = DB_HOST;
    private $dbName = DB_NAME;
    private $dbPort = DB_PORT;
    private $dbCharset = DB_CHARSET;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbConn = NULL;

    //Connection establish using PDO 
    public function connection(){
        //PDO("driver:host;dbname;port;charset",user,pass);
        $connData = $this->dbDriver.':host='.$this->dbHost.';dbname='.$this->dbName.';
                port='.$this->dbPort.';charset='.$this->dbCharset;

        try{
            $this->dbConn = new PDO($connData,$this->dbUser,$this->dbPass);
            $this->dbConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this->dbConn;
        }
        catch(PODException $e){
            throw new Exception($e->getMessage(), 1);
            
        }
    }
}

?>
