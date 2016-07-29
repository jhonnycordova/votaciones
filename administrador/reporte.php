<?php 
	include("../conex.php");
	
    $sql = ("SELECT * FROM candidatos order by votos desc");
    $result = mysql_query($sql);
   	

?>
<?php 

	require('../fpdf17/fpdf.php');
   	
		//Creación del objeto de la clase heredada
	$pdf = new FPDF();
	$pdf->AddPage();
	
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(0,10, 'Resultados Final',1,1,'C');
	$pdf->SetFont('Arial','B',12);
	
	$pdf->SetFont('Arial','B',15);
	$pdf->Cell(80,10, 'Candidato',1,0);
	$pdf->Cell(55,10, 'Partido',1,0);
	$pdf->Cell(55,10, 'Votos',1,1);
	$pdf->SetFont('Arial','',15);
	
	while($row= mysql_fetch_array($result)){

		$pdf->Cell(80,10, $row[nombre],1,0);
		
		$pdf->Cell(55,10, $row[partido],1,0);
		$pdf->Cell(55,10, $row[votos],1,0);
		$pdf->Ln(10);
	}

	$pdf->Output();
 ?>