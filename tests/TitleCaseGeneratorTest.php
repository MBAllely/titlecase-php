<?php

	require_once 'src/TitleCaseGenerator.php';

	class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
	{

		function test_makeTitleCase_oneWord()
		{
		//Arrange
		$test_TitleCaseGenerator = new TitleCaseGenerator;
		$input = "beowulf";

		//Act
		$result = $test_TitleCaseGenerator->makeTitleCase($input);

		//Assert
		$this->assertEquals('Beowulf', $result);
		}

		function test_makeTitleCase_multipleWords()
		{
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "hello goodbye";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals('Hello Goodbye', $result);
		}

		function test_makeTitleCase_articles()
		{
			//Arrange
			$test_TitleCaseGenerator = new TitleCaseGenerator;
			$input = "ride the bunny";

			//Act
			$result = $test_TitleCaseGenerator->makeTitleCase($input);

			//Assert
			$this->assertEquals('Ride the Bunny', $result);
		}

		// function test_makeTitleCase_firstWord()
		// {
		// 	//Arrange
		// 	$test_TitleCaseGenerator = new TitleCaseGenerator;
		// 	$input = "the long walk";
		//
		// 	//Act
		// 	$result = $test_TitleCaseGenerator->makeTitleCase($input);
		//
		// 	//Assert
		// 	$this->assertEquals('The Long Walk', $result);
		// }
	}

?>
