<?php $start = microtime(true);?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>1 лаба</title>
		<link rel="stylesheet" href="styles2.css">
	</head>
	<header>
		<div id="logo" >
			<img src="images/image2.png">
		</div>
		<div id="about">
			Сайт разработанный студентом группы P3211, Промоторовым Владиславом, <br/>
			по варианту 310 с использованием блочной верстки.
		</div>
	</header>
	<body>
		<div id="content" >
			<div class=program>
				<div id="dataimage">
					<img src="images/image4.png">
				</div>
				<div id="result">
					<h1>Result of calculations:</h1>
					<table>
						<tr><th>R</th><th>X</th><th>Y</th><th>Result</th></tr>
						<?php
						  session_start();
						  $aDoor = $_POST['R'];	
						  $x =	$_POST['enterX'];
						  $y =	$_POST['enterY'];				
						  if(empty($aDoor))
						  {
							echo("Didnt choose R");
						  }
						  elseif (!is_numeric($x)) {
						  	echo "Uncorrect X";
						  }
						  elseif(!is_numeric($y)){
						  	echo "Uncorrect Y";
						  }
						  else
						  {
						  	if($x<=5 and $x>=-5 and $y>=-5 and $y<=3){
						  		$_SESSION ['aDoor'][count($_SESSION['aDoor'])]=$aDoor;
						  		$_SESSION ['x'][count($_SESSION['x'])]=$x;
						  		$_SESSION ['y'][count($_SESSION['y'])]=$y;
								$N = count($_SESSION['x']);
								for($i=0; $i < $N; $i++)
								{
								  for($j=0; $j<count($_SESSION['aDoor'][$i]); $j++){
								  $r=$_SESSION['aDoor'][$i][$j];
								  $x=$_SESSION['x'][$i];
								  $y=$_SESSION['y'][$i];?>
								  <tr><td><?php echo($_SESSION['aDoor'][$i][$j]);?></td><td><?php echo($_SESSION['x'][$i]);?></td><td><?php echo($_SESSION['y'][$i]);?></td><td><?php 
									if($r*$r>=$x*$x+$y*$y and $x<=0 and $y<=0)
									{
										echo "true";
									}
									elseif ($y>=$x-$r/2 and $x>=0 and $y<=0) {
										echo "true";
									}
									elseif (abs($x)<=abs($r) and $x<=0 and $y>=0 and abs($y)<=abs($r)) {
										echo "true";
									}
									else{
										echo "false";
									}
								  ?></td></tr><?php
								  }
								}
							}
							else{
								echo "string";
							}
						  }
						?> 
					</table>
					<div id="time">
						<?php echo 'Время выполнения: '.(microtime(true) - $start).' с.';?>
						<br/>
						<?php echo('Текущее время: ' .date("H:i:s"))?>
					</div>
					<a href="https://se.ifmo.ru/~s225113/page.html"><input type="submit" value="Again" id="button"></a>
				</div>		
			</div>
		</div>
	</body>
</html>