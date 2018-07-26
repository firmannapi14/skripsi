<?php
include '../lib/connection.php';
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','LEGAL');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->Image('img/logostt.png',10,5);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(210,10,'** DAFTAR PENGESAHAN SKPI **',0,1,'C');
$pdf->SetFont('Arial','I',13);
$pdf->Cell(210,10,'Sekolah Tinggi Teknik PLN Jakarta',0,1,'C');

if ($_GET['role'] != "" && $_GET['id'] != 0 ) {
    $mhs     = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE nim=$_GET[id]");
    $datamhs = mysqli_fetch_array($mhs);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(210,10,"NIM & NAMA \t\t\t : ".$datamhs['nim']." & ".$datamhs['nama_mahasiswa'],0,1,'');
    $pdf->Cell(210,0,"JURUSAN \t\t\t\t\t\t\t : ".$datamhs['jurusan'],0,1,'');
} else {
    if (isset($_POST['cek'])) {
        $id = $_POST['nimhs'];

        if ($id != "") {
            $mhs     = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE nim=$id");
            $datamhs = mysqli_fetch_array($mhs);
            $pdf->SetFont('Arial','',9);
            $pdf->Cell(210,10,"NIM & NAMA \t\t\t : ".$datamhs['nim']." & ".$datamhs['nama_mahasiswa'],0,1,'');
            $pdf->Cell(210,0,"JURUSAN \t\t\t\t\t\t\t : ".$datamhs['jurusan'],0,1,'');
        }
    }
}

if ($_GET['role'] != "" && $_GET['id'] != 0 ) {
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(10,6,'No.',1,0,'C');
    $pdf->Cell(45,6,'Klasifikasi',1,0,'C');
    $pdf->Cell(25,6,'Tanggal Terbit',1,0,'C');
    $pdf->Cell(110,6,'Judul',1,1,'C');
} else {
    if (isset($_POST['cek'])) {
        $id = $_POST['nimhs'];

        if ($id != "") {
            $pdf->Cell(10,7,'',0,1);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(10,6,'No.',1,0,'C');
            $pdf->Cell(45,6,'Klasifikasi',1,0,'C');
            $pdf->Cell(25,6,'Tanggal Terbit',1,0,'C');
            $pdf->Cell(110,6,'Judul',1,1,'C');
        } else {
            $pdf->Cell(10,7,'',0,1);
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(10,6,'No.',1,0,'C');
            $pdf->Cell(18,6,'Klasifikasi',1,0,'C');
            $pdf->Cell(45,6,'Nama Mahasiswa',1,0,'C');
            $pdf->Cell(35,6,'Klasifikasi',1,0,'C');
            $pdf->Cell(23,6,'Tanggal Terbit',1,0,'C');
            $pdf->Cell(70,6,'Judul',1,1,'C');
        }
    }
}

if ($_GET['role'] != "" && $_GET['id'] != 0) {
    $pdf->SetFont('Arial','',8);
    $no=1;
    $sql = mysqli_query($conn, "SELECT * FROM tb_report
                                JOIN tb_klasifikasi ON tb_report.kode_klasifikasi=tb_klasifikasi.kode_klasifikasi
                                WHERE tb_report.nim=$_GET[id]");
    while ($row = mysqli_fetch_array($sql)){
        $pdf->Cell(10,6,$no.".",1,0,'C');
        $pdf->Cell(45,6,$row['klasifikasi'],1,0);
        $pdf->Cell(25,6,date('d M Y', strtotime($row['tgl_terbit'])),1,0);
        $pdf->Cell(110,6,$row['judul'],1,1);
        $no++;
    }
} else {
    if (isset($_POST['cek'])) {
        $id = $_POST['nimhs'];

        if ($id != "") {
            $pdf->SetFont('Arial','',8);
            $no=1;
            $sql = mysqli_query($conn, "SELECT * FROM tb_report
                                        JOIN tb_klasifikasi ON tb_report.kode_klasifikasi=tb_klasifikasi.kode_klasifikasi
                                        WHERE tb_report.nim=$id");
            while ($row = mysqli_fetch_array($sql)){
                $pdf->Cell(10,6,$no.".",1,0,'C');
                $pdf->Cell(45,6,$row['klasifikasi'],1,0);
                $pdf->Cell(25,6,date('d M Y', strtotime($row['tgl_terbit'])),1,0);
                $pdf->Cell(110,6,$row['judul'],1,1);
                $no++;
            }
        } else {
            $pdf->SetFont('Arial','',8);
            $no=1;
            $sql = mysqli_query($conn, "SELECT * FROM tb_report
                                        JOIN tb_klasifikasi ON tb_report.kode_klasifikasi=tb_klasifikasi.kode_klasifikasi
                                        JOIN tb_mahasiswa ON tb_report.nim=tb_mahasiswa.nim");
            while ($row = mysqli_fetch_array($sql)){
                $pdf->Cell(10,6,$no.".",1,0,'C');
                $pdf->Cell(18,6,$row['nim'],1,0,'C');
                $pdf->Cell(45,6,$row['nama_mahasiswa'],1,0,'');
                $pdf->Cell(35,6,$row['klasifikasi'],1,0);
                $pdf->Cell(23,6,date('d M Y', strtotime($row['tgl_terbit'])),1,0,'C');
                $pdf->Cell(70,6,$row['judul'],1,1);
                $no++;
            }
        }
    }
}


$pdf->Output();

?>
