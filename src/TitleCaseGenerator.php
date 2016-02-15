<?php
	 class TitleCaseGenerator
		{
			function makeTitleCase($title)
			{
				$words = explode(" ", $title);
				$wordsCap = array();

				$ignoreThese = ['and','a','the'];

				foreach($words as $key => $word) {
					if ($key == 0) {
						$cap = ucfirst($word);
						array_push($wordsCap, $cap);
					} elseif (in_array($word, $ignoreThese)){
						array_push($wordsCap, $word);
					} else {
					$cap = ucfirst($word);
					array_push($wordsCap, $cap);
					}
				}

				return implode(" ", $wordsCap);
			}
		}
 ?>
