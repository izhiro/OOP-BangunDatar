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

	public function __construct( $alas, $tinggi )
	{
		$this->alas = $alas;
		$this->tinggi = $tinggi;
	}

	public function setSisiA( $sisiA )
	{
		$this->sisiA = $sisiA;
	}

	public function setSisiB( $sisiB )
	{
		$this->sisiB = $sisiB;
	}

	public function setSisiC( $sisiC )
	{
		$this->sisiC = $sisiC;
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

