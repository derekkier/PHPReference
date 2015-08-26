<html>
	<head>
		<title>PHP Arrays Reference</title>
	</head>
	<body>
	<?php
	$assocArray = array
	(  
		'first_name'=>'Jason',
		'last_name'=>'Smith',
		'birthday'=>'6/20/1990'	
	);

	if( array_key_exists('first_name', $assocArray) )
	{
		echo $assocArray['first_name'];
	}
	
	$keyOfSearch = array_search('Smith', $assocArray);
	echo "<br /> The key for the term 'Smith' within \$assocArray is  $keyOfSearch";

	echo "<br /> Display key value pairs easily with the PHP function print_r. <br />";
	print_r($assocArray);

	echo "<br /> Display keys with array_keys(\$arr) function. <br />";
	print_r(array_keys($assocArray));

	echo "<br /> Display array's values with array_values(\$arr) function. <br />";
	print_r(array_values($assocArray));
	echo '<br />';
	$user1 = array
	(
		'username'=>'t1000',
		'first_name'=>'Tom',
		'last_name'=>'Johnson'
	);


	$user2 = array
	(
		'username'=>'t2000',
		'first_name'=>'Paul',
		'last_name'=>'Jones'
	);

	$users = array( $user1, $user2 );

	foreach( $users as $row )
	{
		foreach( $row as $key=>$value)
		{
			echo " $key=$value, ";
		}
		echo '<br />';
	}
	$arrNum = array(12,1,2,3,4,5,6,7,99,110);	
	$strArr = "kingdom,phylum,class,order,family,genus,species";
	echo '<pre>'.print_r( explode(',',$strArr),1 ).'</pre>';
	
	$arrTaxonomicRank = explode(',',$strArr);
	if( in_array('family',$arrTaxonomicRank ) )
	{
		echo 'The value \'family\' is in the $arrTaxonomicRank array';
	}
	
	$arrKeys = array( 'name'=>'xfile', 'number',42);
		
	if( in_array('xfile',$arrKeys ) )
	{
		echo '<br /> The value \'xfile\' is in the $arrKeys associative array using the in_array() function.';
	}

	echo '<br />Display the array in the reverse of how it was created using array_reverse() function.';
	echo '<pre>'.print_r( array_reverse($arrTaxonomicRank),1  ).'</pre>';
	
	echo '<br />Sort the array in ascending order a-z 1-10.';
	sort($arrTaxonomicRank);
	sort($arrNum);
	echo '<pre>'.print_r( $arrTaxonomicRank,1  ).'</pre>';
	echo '<pre>'.print_r( $arrNum,1  ).'</pre>';

	echo '<br />Sort the array in descending order z-a 10-1.';
	rsort($arrTaxonomicRank).'<br />';
	rsort($arrNum);
	echo '<pre>'.print_r( $arrTaxonomicRank,1  ).'</pre>';
	echo '<pre>'.print_r( $arrNum,1  ).'</pre>';
	
	echo '<br />Sort the keys of the array in descending order z-a 10-1.';
	krsort($arrTaxonomicRank).'<br />';
	krsort($user1);
	echo '<pre>'.print_r( $arrTaxonomicRank,1  ).'</pre>';
	echo '<pre>'.print_r( $user1,1  ).'</pre>';

	echo '<br />Sort the keys of the array in ascending order a-z 1-10.';
	ksort($arrTaxonomicRank);
	ksort($user1);
	echo '<pre>'.print_r( $arrTaxonomicRank,1  ).'</pre>';
	echo '<pre>'.print_r( $user1,1  ).'</pre>';
	
	echo '<br />Range array using function range(start,end).';
	$arrRange = range(5,20);
	echo '<pre>'.print_r( $arrRange,1  ).'</pre>';
	echo '<br />Range array count or size ='.count($arrRange);

	echo '<br />An array of lines by putting the contents of a file into an array.';
	$arrCodes = file("../files/people.csv");
	echo '<pre>'.print_r( $arrCodes,1  ).'</pre>';
	foreach( $arrCodes as $row)
	{
		list($first_name, $last_name, $phone, $role) = explode(',',$row);
		echo "$first_name | $last_name | $phone | $role";
		echo '<br /><br />';	
	}
	?>
	</body>
</html>
