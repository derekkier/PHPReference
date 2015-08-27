<html>
	<head>
		<title>PHP Regular Expressions</title>
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
		*/
		$randomArray = array("Derek","123 Main St.","PA","12345","(412)-537-5555", "12/12/1974","dbanas123@gmail.com","$1,234","Turtle3Dove","123-45-6789","p* 1 ", "<p>Random Text</p>", "Mailman", "Mailwoman", "Jennifer", "Jenny", "Jen", "Doctor", "Doug", "Dog","<<bla>>Bla bla<<bla>> More text code .","code","aAsf9codecodecode","702.488.7273","702-488.7273");
		
		$arrMatches = preg_grep("/a/",$randomArray );
		
		//echo gettype($arrMatches).'<br />';
		echo 'preg_grep("/a/",$randomArray);<br />';	
		displayMatches( $arrMatches);


		/*	
		$arrMatches = preg_grep("/^12/",$randomArray );
		//echo 'preg_grep("/12/",$randomArray);<br />';	
		displayMatches( $arrMatches);
		*/	
			
		doAndShowPregGrep("/PA/",$randomArray,"randomArray");
		doAndShowPregGrep("/^[a-zA-Z]{5}$/",$randomArray,"randomArray");
		doAndShowPregGrep("/^123/",$randomArray,"randomArray");
		doAndShowPregGrep("/^12345$/",$randomArray,"randomArray");
		doAndShowPregGrep("/^[0-9]*$/",$randomArray,"randomArray");
		doAndShowPregGrep("/^<.*>(.*)<.*>$/",$randomArray,"randomArray");
		doAndShowPregGrep("/^[^code]+(code){3}$/",$randomArray,"randomArray");
		doAndShowPregGrep("/Je[n|nifer|nny]/",$randomArray,"randomArray");
		doAndShowPregGrep("/[^code]$/",$randomArray,"randomArray");
		doAndShowPregGrep('/^\\${1}[0-9,.]+$/',$randomArray,"randomArray");
		doAndShowPregGrep('/^\\(?[0-9]{3}\\)?-?.?[0-9]{3}-?.?[0-9]{4}$/',$randomArray,"randomArray");

		function doAndShowPregGrep($strPattern,$arr,$strArrayName='someArray')
		{
			echo 'preg_grep("'.$strPattern.'",'.$strArrayName.');<br />';
			$arrMatches = preg_grep($strPattern,$arr );
			displayMatches( $arrMatches );
		}	
		
		function displayMatches( $arr )
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
