<?php 
namespace Tugas\BangunDatar;
// hitung segitiga
class Segitiga extends BangunDatar
{
	protected $alas,
			  $tinggi;

	private $sisiA,
			$sisiB,
			$sisiC;

	public function __construct( $sisiA , $sisiB, $sisiC )
	{
		$this->sisiA = $sisiA;
		$this->sisiB = $sisiB;
		$this->sisiC = $sisiC;
	}

	public function setAlas( $alas )
	{
		$this->alas = $alas;
	}

	public function setTinggi( $tinggi )
	{
		$this->tinggi = $tinggi;
	}


	public function hitungLuas()
	{
		return (0.5 * $this->alas * $this->tinggi);
	}

	public function hitungKeliling()
	{
		return ($this->sisiA + $this->sisiB + $this->sisiC);
	}
}

