<?php

class BarcodeGenerator extends CI_Controller
{
	function index()
	{
		$this->load->view('barcode_view');
	}
	 
	function bikin_barcode($kode)
	{
		//kita load library nya ini membaca file Zend.php yang berisi loader
		//untuk file yang ada pada folder Zend
		$this->load->library('Zend');
		 
		//load yang ada di folder Zend
		$this->zend->load('Zend/Barcode');
		 
		//generate barcodenya
		Zend_Barcode::render('code128', 'image', array('text'=>$kode), array());
	}
}