<?php
include 'core/Bank.php';
include 'layout/head.php';
include 'layout/nav.php';
$bank = new Bank();
$bank->tarikTunai(100000);
?>
	


	<h1 class="marvel">
		Berhasil melakukan tarikan tunai,
		Saldo anda sekarang :<br> Rp.<span id="saldo">
		<?php	
		
		echo number_format($bank->cekSaldo(), 2);
		?>
		</span>
	</h1>	
	<br><br>
	

<?php
include 'layout/foot.php';
?>