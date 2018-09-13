<?php

namespace Tugas\BangunDatar;
// hitung luas & keliling Persegi
class Persegi extends BangunDatar
{
	protected $sisi = 4;

	public function __construct( $sisi )
	{
		$this->sisi = $sisi;
	}


	public function hitungLuas()
	{
		return pow($this->sisi, 2);
	}

	public function hitungKeliling()
	{
		return ( 4 * $this->sisi);
	}

}

