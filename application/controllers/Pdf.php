<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
	}

	public function index()
	{
		$data['empresas'] = [
			'1' => 'Alfa Omega',
			'2' => 'Borboleta Flora',
			'3' => 'Chocolate bom bom',
			'4' => 'IBM',
			'5' => 'Jornal Nacional',
			'6' => 'Microsoft',
			'7' => 'Nano Incub',
			'8' => 'Otavio Mendes',
			'9' => 'Tatoo Caneta',
			'10' => 'Uba Bordô',
			'11' => 'Zebra Closet',
			'12' => 'Alfa Omega',
			'13' => 'Borboleta Floricultura',
			'14' => 'Chocolate bom bom',
			'15' => 'IBM',
			'16' => 'Jornal Nacional',
			'17' => 'Microsoft',
			'18' => 'Nano Incub',
			'19' => 'Otavio Mendes',
			'20' => 'Tatoo Caneta',
			'21' => 'Uba Bordô',
			'22' => 'Zebra Closet'
		];

		$this->load->view('pdf/view_pdf', $data);
	}

	public function table()
	{
		$data['empresa_id'] = '9';

		$data['empresas'] = [
			'1' => 'Alfa Omega',
			'2' => 'Borboleta Flora',
			'3' => 'Chocolate bom bom',
			'4' => 'IBM',
			'5' => 'Jornal Nacional',
			'6' => 'Microsoft',
			'7' => 'Nano Incub',
			'8' => 'Otavio Mendes',
			'9' => 'Tatoo Caneta',
			'10' => 'Uva Bordô',
			'11' => 'Zebra Closet'
		];


		$this->load->view('pdf/view_table', $data);
	}
}
