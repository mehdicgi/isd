 <?php
	 $db = oci_connect("IY_ADMAA", "IY_ADMAA", "220.140.173.17:1551/YBHPROD");
	 if (!$db) die("Error connecting to Oracle database: " . oci_error());
 ?>
