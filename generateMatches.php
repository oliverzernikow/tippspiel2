<?php

//Übergabe von der GruppenID erstellt die Matches der Gruppe
function groupMatches($groupID)
{
    $query = "SELECT mannschaftAID, mannschaftDID FROM gruppe WHERE gruppe.gruppenbezeichnung == " . $groupID."";

    $dbConnection = connectToDatabase("localhost", "em-tippspiel", "tippspiel123", "tippspiel");
                    
    $result = mysqli_query($dbConnection, $query);
                    
    $array = array();
    $i = 0;
                    
    while($item = mysqli_fetch_assoc($result))
    {
        $array[$i][1] = $item['mannschaftAID'];
        $array[$i][2] = $item['mannschaftDID'];
        
        echo $array[$i][1];
        echo $array[$i][2];
    }
    
    mysqli_close($db_link);
    
    
}

 //Verbindung zum Datenbankserver herstellen
    function connectToDatabase($dbserver, $dbuser, $dbpassword, $dbDatabase)
    {
        $db_link = mysqli_connect ($dbserver, $dbuser, $dbpassword, $dbDatabase);

		if (!$db_link)
		{
			die('Connect Error:' . mysqli_connect_errno());
		}

        return $db_link;
    }
?>