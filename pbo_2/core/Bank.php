<?php

class Bank {

	public $saldo;


	public function __construct()
	{

		$this->saldo = 150000;
	
	}


	public function setorTunai($setoran)
	{

		$this->saldo += $setoran;
	
	}

	public function tarikTunai($tarikan)
	{

		$this->saldo -= $tarikan;

	}

	public function cekSaldo()
	{

		return $this->saldo;

	}

}