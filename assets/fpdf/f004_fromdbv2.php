<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
    // Title
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'Data Profil',0,1,'C');
    $this->Ln(10);
    // Ensure table header is printed
    parent::Header();
}
}

// Connect to database
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "ormawa";
$link = mysqli_connect($host, $user, $pass,$dbnm);

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
$pdf->Table($link,'select NIK,NIP,nama_lengkap,username from tbl_komdisma');
$pdf->AddPage();
// Second table: specify 3 columns
$pdf->AddCol('NIK',20,'NIK','C');
$pdf->cell(30, 10, "SS Height", 1, 0, 'C');
$pdf->cell(30, 10, "Provinces", 1, 0, 'C');
$pdf->AddCol('NIP',40,'NIP');
$pdf->AddCol('nama_lengkap',40,'Nama','R');
$pdf->AddCol('username',40,'Username','R');
$prop = array('HeaderColor'=>array(255,150,100),
            'color1'=>array(210,245,255),
            'color2'=>array(255,255,210),
            'padding'=>2);
$pdf->Table($link,'select NIK,NIP,nama_lengkap,username from tbl_komdisma',$prop);
$pdf->Output();
?>