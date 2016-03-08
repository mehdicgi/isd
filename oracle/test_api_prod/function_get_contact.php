<?php
	//include('connexion.php');
	 $db = oci_connect("IY_ADMAA", "IY_ADMAA", "220.140.173.17:1551/YBHPROD");
	 if (!$db) die("Error connecting to Oracle database: " . oci_error());
	 echo "Successfully connected to Oracle database!";
	 $stid = oci_parse($db, 'SELECT * from t_acores_site ');
	 oci_execute($stid);
	 while ($row = oci_fetch_assoc($stid, OCI_ASSOC+OCI_RETURN_NULLS))
	{
		foreach ($row as $item) 
		{
			echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
		}	
	}
?>

