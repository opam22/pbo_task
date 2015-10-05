<?php

$nilaiAbsen = $_POST['nilaiAbsen'];
$nilaiTugas = $_POST['nilaiTugas'];
$nilaiUTS = $_POST['nilaiUTS'];
$nilaiUAS = $_POST['nilaiUAS'];

$finalScore = ($nilaiAbsen * 10 / 100) + ($nilaiTugas * 20 / 100) + ($nilaiUTS * 30 / 100) + ($nilaiUAS * 40 / 100);

if ($finalScore >= 80) {
	header('location:index.php?score=a');
}
else if ($finalScore >= 70 && $finalScore < 80) {
	header('location:index.php?score=b');
}
else if ($finalScore >= 60 && $finalScore < 70) {
	header('location:index.php?score=c');
}
else if ($finalScore >= 50 && $finalScore < 60) {
	header('location:index.php?score=d');
}
else if ($finalScore >= 40 && $finalScore < 500) {
	header('location:index.php?score=e');
}