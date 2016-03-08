<?php
	 $db = oci_connect("IY_ADMAA", "IY_ADMAA", "220.140.173.17:1551/YBHPROD");
	 if (!$db) die(" Error connecting to Oracle database : " . oci_error());
	 // GET le paramètre passé en URL
	 $regate_code=$_GET['regate'];
	
	// $stid = oci_parse($db, 'select * from t_stca_user');
	$stid=oci_parse($db,"SELECT * from t_crt_cart inner join t_acores_site on ( t_crt_cart.acores_site_id=t_acores_site.Acores_site_id) where t_acores_site.regate_code= '".$regate_code."' order by   t_crt_cart.creation_date DESC");
	 oci_execute($stid);
	 while ($row = oci_fetch_assoc($stid))
	{
		$arr1[]=array('CART_ID' => $row['CART_ID'],'REGATE_CODE' => $row['REGATE_CODE'],'CREATION_DATE' => $row['CREATION_DATE'],'TOTAL_AMOUNT' => $row['TOTAL_AMOUNT'] , 'DEVICE_ID' => $row['DEVICE_ID'],'EMAIL' => $row['EMAIL'],$row['CREATION_DATE'],'TOTAL_AMOUNT' => $row['TOTAL_AMOUNT'] , 'DEVICE_ID' => $row['DEVICE_ID'],'EMAIL' => $row['EMAIL']);
	}
	 echo json_encode(array("disfe" => $arr1));
?>

