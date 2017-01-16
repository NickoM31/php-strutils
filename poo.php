<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POO</title>
</head>
<body>
	<h1>P.O.O</h1>
	<?php 

	class StrUtils{
		private $str = "Le lundi c'est ravioli!";


		public function __construct(){
			$this->str;
		}

		// public function getStr(){

	// return $this->str;
	// }
	

	public function bold(){
		$bold = '<li>'.'<strong>'.$this->str.'</strong>'.'</li>';
		$this->str = $bold;
	}

	public function italic(){
		$italic = '<li>'.'<em>'.$this->str.'</em>'.'</li>';
	}
	// public function underline(){
	// 	return $this->str;
	// }
	// public function capitalize(){
	// 	return $this->str;
	// }
	public function uglify(){
		$this->bold();
		$this->italic();

	}

}
$str = new StrUtils;
echo $str->bold();
echo $str->italic();
// echo $str->underline();
// echo $str->capitalize();
// echo $str->uglify();
?>


</body>
</html>