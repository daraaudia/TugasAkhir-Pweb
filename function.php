<?php 
	function getClickCount(){
		return (int)file_get_contents("counter.txt");
	}

	function increment(){
		$count = getClickCount() + 1;
		file_put_contents("counter.txt",$count);
	}

	function tolak(){
		if(!isset($_SESSION['status'])){
			header("Location: login.php?");
		}
	}
	function persen(){
		$persen = (getClickCount() * 100)/100;
		if ($persen > 100) {
			$persen = 100;
		}
		return $persen;
	}
?>
