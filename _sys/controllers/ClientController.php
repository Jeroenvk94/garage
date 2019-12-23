<?php 

require_once 'core/DatabaseController.php';

class Client extends Database 
{

    public function addClient($clientData)
    {

        $clientName = $clientData['klantnaamvak'];
        $clientAddress = $clientData['klantadresvak'];
        $clientZipcode = $clientData['klantpostcodevak'];
        $clientCity = $clientData['klantplaatsvak'];

        $validateUser = "SELECT * FROM `klant` WHERE `klantnaam` = '$clientName' AND `klantadres` = '$clientAddress' AND `klantpostcode` = '$clientZipcode' AND `klantplaats` = '$clientCity'";
        if($rs2 = $this->conn->query($validateUser))
        {

            if($rs2->num_rows >= 1)
            {
                return "Failed";
            }
            
            $query = "INSERT INTO `klant`
                    (`klantnaam`,`klantadres`,`klantpostcode`,`klantplaats`)
                    VALUES 
                    ('$clientName','$clientAddress','$clientZipcode','$clientCity')";

            if($rs = $this->conn->query($query))
            {
                return "Success";
            }
            else 
            {
                return "Failed";
            }

        }

    }

}

?>