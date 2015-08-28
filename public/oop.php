<html>
	<head>
		<title>PHP Object Oriented Programming Samples.</title>
	</head>
	<body>
	<?php
		/*
		 * Definition of encapsulation:
		 * Encapsulation is the mechanism that binds together code 
		 * and the data it manipulates, and keeps both safe from outside 
		 * interference and misuse. The wrapping up of data and methods 
		 * into a single unit (called class) is known as encapsulation.
		*/
		class Animal
		{
			private $name;
			private $favFood = "Meat";
			private $age;
			protected $type;
			static public $numOfAnimals = 0;	
			//const kingdom = 'Animal Kingdom';
			
			public function __construct( $name="No Name" )
			{
				echo "__construct was called". "<br />";
				$this->setName( $name );
				self::$numOfAnimals++;
			}
			
			public function __destruct()
			{
				echo "__destruct was called". "<br />";
				self::$numOfAnimals--;
			}

			public function getAge()
			{
				return $this->age;
			}

			public function setAge($val)
			{			public function __destruct()
			{
				echo "__destruct for dog was called". "<br />";
				parent::__destruct();get_class_vars(__CLASS__)
			
				$this->age=$val;
			}

			public function setFavFood($favFood)
			{
				$this->favFood=$favFood;
			}

			final public function setName($name)
			{
				$this->name = $name;
			}

			public function makeNoise()
			{
				return 'Grr';
			}

			public function favFood()
			{
				return 'My favorite food is '.$this->favFood.'.';
			}

			public function move()
			{
				return 'Walk around.';
			}

			public function getAllProperties()
			{
				return get_class_vars(__CLASS__);
			}

			public function displayAllProperties()
			{
				echo '<pre>'.print_r( $this->getAllProperties(), 1 ).'</pre>';	
			}
			
			public function recursiveMultiplyByHalf($			public function __destruct()
			{
				echo "__destruct for dog was called". "<br />";
				parent::__destruct();
			num)
			{
				if( $num <= 1 )
				{
					return 1;
				}
				else
				{
					return $num*$this->recursiveMultiplyByHalf($num/2);
				}
			}
		}	

		class Dog extends Animal
		{
			public function __construct( $name="No Name" )
			{echo '<br />Number of animals:'.Animal::$numOfAnimals;
				echo "__construct for dog was called". "<br />";
				parent::__construct($name);
			}
			
			public function __destruct()
			{
				echo "__destruct for dog was called". "<br />";
				parent::__destruct();
			}
			
			//Overrides Animal makeNoise function	
			public function makeNoise()
			{
				return 'Bark bark.';
			}
		}

		$zack= new Dog("Zack");
		$zack->setAge(7);
		echo '<br />age:'.'<br />';	
		echo $zack->getAge().'<br />';
		//echo 'type:';
		//echo $zack->kingdom.'<br />';
		//$zack->displayAllProperties();
		//echo $zack->recursiveMultiplyByHalf(5);
		
		$ralph= new Dog("Ralph");
		$ralph->setAge(3);
		echo '<br />age:'.'<br />';	
		echo $ralph->getAge().'<br />';

		$bonnie= new Dog("Bonnie");
		$bonnie->setAge(2);
		echo '<br />age:'.'<br />';	
		echo $bonnie->getAge().'<br />';
		//kill bonnie
		unset($bonnie);

		echo '<br />Number of animals:'.Animal::$numOfAnimals;
		echo '<br />';
	?>
	</body>
</html>
