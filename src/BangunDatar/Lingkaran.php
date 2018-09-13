<?php 
namespace Tugas\BangunDatar;
// hitung lingkaran
class Lingkaran extends BangunDatar
{
	protected $jariJari;

	public function __construct( $jariJari )
	{
		$this->jariJari = $jariJari;
	}

	public function hitungLuas()
	{
		return (3.14 * pow($this->jariJari, 2));
	}

	public function hitungKeliling()
	{
		return (2 * 3.14 * $this->jariJari);
	}
}