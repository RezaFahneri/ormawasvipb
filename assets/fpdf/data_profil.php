<?php 
require('fpdf182/fpdf.php');

//create a FPDF object
$pdf=new FPDF(); 

//set font for the entire document
$pdf->SetFont('Helvetica','B',20);
//$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P'); 
$pdf->SetDisplayMode('default');

//insert an image and make it a link
// $pdf->Image('image/logo.gif',100,10,20,0);

//display the title with a border around it
$pdf->SetXY(85,30);
$pdf->SetDrawColor(50,60,100);
$pdf->Write(10,'Data Profil',0,'C',0);
$pdf->Line(10,40,200,40);

//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (20,45);
$pdf->SetFontSize(10);
$pdf->SetTextColor(30,30,100);

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="ormawa"; // Database name 
$tbl_name="tbl_profil"; // Table name

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,"ormawa");

$sql="SELECT * FROM tbl_profil";
$result = mysqli_query($con,$sql);
while($rows= (mysqli_fetch_array($result,MYSQLI_ASSOC)))
{           
    $NIK = $rows['NIK'];
    $NIP = $rows['NIP'];
    $nama_lengkap = $rows['nama_lengkap'];
    $username = $rows['username'];
    $email = $rows['email'];
    $status = $rows['status'];

    $pdf->SetXY (20,60);    
    $pdf->SetFontSize(12);
    $pdf->SetTextColor(0,0,0);    
    $pdf->Write(7,"NIK");
    $pdf->SetXY (90,60);
    $pdf->Write(7,$NIK); 
    $pdf->SetXY (20,70);
    $pdf->Write(7,"NIP");
    $pdf->SetXY (90,70);
    $pdf->Write(7,$NIP);
    $pdf->SetXY (20,80);
    $pdf->Write(7,"Nama Lengkap");
    $pdf->SetXY (90,80);
    $pdf->Write(7,$nama_lengkap);
    $pdf->SetXY (20,90);
    $pdf->Write(7,"Username");
    $pdf->SetXY (90,90);
    $pdf->Write(7,$username);
    $pdf->SetXY (20,100);
    $pdf->Write(7,"Email");
    $pdf->SetXY (90,100);
    $pdf->Write(7,$email);
    $pdf->SetXY (20,110);
    $pdf->Write(7,"Status");
    $pdf->SetXY (90,110);
    $pdf->Write(7,$status);
    $pdf->Ln(); 
}

//Output the document
$pdf->Output('data_profil.pdf','I');     
?>
