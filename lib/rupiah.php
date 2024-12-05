<?php
function rupiah($angka){
	
	// $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.'); 
	return $hasil_rupiah;
}
