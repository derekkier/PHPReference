<html>
	<head>
		<title>PHP Function Scope</title>
	</head>
	<body>
	<?php 
		$num = 10;
		function setNumber( &$n )
		{
			$n = 3;
			return $n ;
		}

		echo $num;
		echo '<br />';
		echo setNumber( $num ); 
		echo '<br />';
		echo $num;

		
		echo '<br />Sample Recursion <br />';
		function factorial($passedNum)
		{
			if( $passedNum > 1 )
			{

				//$num=$passedNum*($passedNum-1);
				return $passedNum*factorial( $passedNum-1 );	
			}
			else
			{
				return $passedNum;
			}
		}	

		echo factorial(5);
	?>
	</body>
</html>
