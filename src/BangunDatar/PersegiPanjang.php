<?php 

namespace Tugas\BangunDatar;
// hitung persegi panjang
class PersegiPanjang extends BangunDatar
{
	public $panjang,
		   $lebar;

	public function __construct( $panjang, $lebar ) 
	{
		$this->panjang = $panjang;
		$this->lebar = $lebar;
	}

	public function hitungLuas()
	{
		return ($this->panjang * $this->lebar);
	}

	public function hitungKeliling()
	{
		return (2 * ($this->panjang + $this->lebar));
	}
}