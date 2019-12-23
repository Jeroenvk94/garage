<?php 

class Database 
{
    /**
     *  Constructor, connects to the database
     *  @param String $sHost
     *  @param String $sDatabase
     *  @param String $sUser
     *  @param String $sPass
     */

    public function __construct($sHost, $sDatabase, $sUser, $sPass)
    {
        $this->_sDatabase = $sDatabase;

        if($this->conn = @mysqli_connect($sHost, $sUser, $sPass))
        {
            mysqli_select_db($this->conn, $this->_sDatabase);
            mysqli_query($this->conn, "SET NAMES `utf8`");
            return $this->_sDatabase;
        }
        else 
        {
            die ('Could not connect to database');
        }
    }

}

?>