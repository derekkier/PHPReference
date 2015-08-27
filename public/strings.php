<html>
	<head>
		<title>PHP Regular expressions for strings.</title>
	</head>
	<body>
<?php 
		/*
		 * \d 0-9
		 * \D NOT 0-9
		 * \w a-z0-9_
		 * \W NOT a word
		 * \s white space
		 * \S NOT white space
		 * \b word boundary - item1 item2 - the space between the words
		 * . anything but a new line \n
		 *
		 * Some string methods
		 * ucfirst - upper case first letter in the string.
		 * ucwords - every words first letter is in upper case.
		 * strtolower - entire string is changed to lower case.
		 * strtoupper - entire string is changed to upper case.
		 * strip_tags - strips html tags
		*/
		$strRandom = "Mailman Mailwoman Jennner Jennifer Jenny Jen Doctor Doug Dog";

		preg_match_all('/Je[nifery]{1,6}/', $strRandom, $matchName);	
		
		foreach($matchName as $row)
		{
			echo print_r($row,1).'<br />';
		}
		echo '<br />------------------<br />';

		preg_replace('/Jennner/','John',$strRandom);
		
		echo '<br />';
		echo str_ireplace('Doctor','Dr.',$strRandom);
		echo '<br />Position of Doctor.';
		echo strpos($strRandom,'Doctor');
		echo '<br />Position of Mailman.';
		echo strpos($strRandom,'Mailman');
		echo '<br />Last Position of Mail.';
		echo strrpos($strRandom,'Mail');
		echo '<br />Substr 8,9. <br />';
		echo substr($strRandom,8,9);
		echo '<br />Length of the string using strlen - This is a string. <br />';
		echo strlen('This is a string.');
		//strpos  str_replace 	
		echo '<br />';
		echo $strRandom;
		echo '<br />';

		$strPeopleTitle = "John Smith (CE) Bob Jones (CFO) Amy Lee (MD) ";
		$arrPeople = preg_split('/\s\(.{2,3}\)\s?/', $strPeopleTitle);	
		echo '<br />'.count($arrPeople).'<br />';
		displayArrayRows( $arrPeople );

		echo $strHTML = "<p class='red'>Some text goes in <b>here</b></p>";
		echo '<br />'.strip_tags($strHTML).'<br />';


		$randomArray = array("Derek","123 Main St.","PA","12345","(412)-537-5555", "12/12/1974","dbanas123@gmail.com","$1,234","Turtle3Dove","123-45-6789","p* 1 ", "<p>Random Text</p>", "Mailman", "Mailwoman", "Jennifer", "Jenny", "Jen", "Doctor", "Doug", "Dog","<<bla>>Bla bla<<bla>> More text code .","code","aAsf9codecodecode","702.488.7273","702-488.7273");
		
		doAndShowPregGrep('/^\\(?[0-9]{3}\\)?-?.?[0-9]{3}-?.?[0-9]{4}$/',$randomArray,"randomArray");

		function doAndShowPregGrep($strPattern,$arr,$strArrayName='someArray')
		{
			echo 'preg_grep("'.$strPattern.'",'.$strArrayName.');<br />';
			$arrMatches = preg_grep($strPattern,$arr );
			displayArrayRows( $arrMatches );
		}	
		
		function displayArrayRows( $arr )
		{
			foreach( $arr as $row)
			{
				echo print_r($row,1).'<br />';
			}

			echo '<br />--------------------<br />';
		}


	?>
	</body>
</html>
