<?php 
namespace Tugas\BangunDatar;
// hitung Belah ketupat
class BelahKetupat extends BangunDatar
{
	protected $diagonal1,
			  $diagonal2;

	private $sisi;



	public function __construct( $diagonal1, $diagonal2)
	{
		$this->diagonal1 = $diagonal1;
		$this->diagonal2 = $diagonal2;
	}

	public function SetSisi( $sisi )
	{
		$this->sisi = $sisi;
	}

	public function hitungLuas()
	{
		return (0.5 * $this->diagonal1 * $this->diagonal2);
	}

		public function hitungKeliling()
	{
		return ( 4 * $this->sisi);
	}
}