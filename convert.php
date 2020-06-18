<?php
// menyertakan autoloader
session_start();

require_once 'dompdf/autoload.inc.php';

$kode = $_SESSION['kode'];
$nama = $_SESSION['nama'];
$nik = $_SESSION['nik'];
$alamat = $_SESSION['alamat'];
$hp = $_SESSION['hp'];
$rute = $_SESSION['rute'];
$tanggal = $_SESSION['tanggal'];

// mengacu ke namespace DOMPDF
use Dompdf\Dompdf;

// menggunakan class dompdf
$dompdf = new Dompdf();

$html = 
		'<head>
			<title>index</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		</head>'.
		'<body class="text-center">
		<h1 style="margin-top: 50px;">TIKET PESERTA MUDIK GRATIS 2020</h1><br><br><br>
		<table style="margin: auto;">
		<tr>			
		<td>Kode Tiket</td>
				<td>:</td>
				<td><p><b>
				'.$kode.
				'
				</b></p>
			</tr>
			<tr>			
				<td>Nama:</td>
				<td>:</td>
				<td><p>
				'.$nama.
				'
				</p>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><p>
				'.$nik.
				'
				</p>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><p>
				'.$alamat.
				'
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><p>
				'.$hp.
				'
				</p>
			</tr>
			<tr>
				<td>Rute</td>
				<td>:</td>
				<td><p>
				'.$rute.
				'
				</p>
			</tr>
			<tr>
				<td>Keberangkatan</td>
				<td>:</td>
				<td><p>
				'.$tanggal.
				'
				</p>
			</tr>	
		</table>
		<br><br>
		<div>
			<p align="center">================================================================</p>
			<h4><b>SAAT PELAKSANAAN MUDIK GRATIS PESERTA WAJIB : </b></h4><br>
			<p>1. Mencetak Dan Membawa Dokumen Tiket Ini</p>
			<p>2. Membawa Fotocopy Kartu Keluarga</p>
			<p>3. Membawa Surat Keterangan Sehat</p>
			<p>4. Tidak Membawa Barang Berlebihan</p>
		</div>
		</body>';

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream('TiketMudik'.time(), array("Attachment"=>0));
?>