<?php

class poem {

	public $poem;

	public function __construct($poem) {
		
		$poem = $this->poem;

	}

	public function display($content) {
		echo $content;
	}
	
	public function getFirstWord ($poem) {

		$poem = $this->poem;

		$poemLines = explode("<br/>", $poem);

		foreach ($poemLines as $line) {

			$firstWordPosition = stripos($line, " ");

			//$firstWordPosition = (int)$firstWordPosition;

			//var_dump($firstWordPosition);

			$firstWord = substr($line, 0, $firstWordPosition);

			echo $firstWord."<br/>";
		}

	}

}



	?>