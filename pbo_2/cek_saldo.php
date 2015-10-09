<?php
include 'core/Bank.php';
include 'layout/head.php';
include 'layout/nav.php';
?>


	<h1 class="marvel">
		Saldo Anda Sekarang :<br> Rp.
		<?php
		$bank = new Bank();
		echo number_format($bank->cekSaldo(), 2);
		?>
	</h1>
	
	<br><br>



</div>
	
</body>
</html>