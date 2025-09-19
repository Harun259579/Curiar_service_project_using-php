<?php
require('assets/plugin/pdf/fpdf.php');
include('../server/api.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Royal Express', 0, 1, 'C');
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Your Receipt', 0, 1, 'C');
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, date("Y-M-d-D"), 0, 1, 'C');
        $this->Ln(5);
    }

    function SenderTable($row)
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(180, 10, 'Sender Information', 1, 1, 'C');
        $this->SetFont('Arial', '', 12);

        $this->Cell(60, 10, 'Sender Name', 1, 0);
        $this->Cell(120, 10, $row['name'], 1, 1);

        $this->Cell(60, 10, 'Email', 1, 0);
        $this->Cell(120, 10, $row['email'], 1, 1);

        $this->Cell(60, 10, 'Phone Number', 1, 0);
        $this->Cell(120, 10, $row['phone'], 1, 1);

        $this->Cell(60, 10, 'Courier Date', 1, 0);
        $this->Cell(120, 10, $row['date_updated'], 1, 1);

        $this->Cell(60, 10, 'Weight', 1, 0);
        $this->Cell(120, 10, $row['weight'], 1, 1);

        $this->Ln(5);
    }

    function ReceiverTable($row)
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(180, 10, 'Receiver Information', 1, 1, 'C');
        $this->SetFont('Arial', '', 12);

        $this->Cell(60, 10, 'Receiver Name', 1, 0);
        $this->Cell(120, 10, $row['res_name'], 1, 1);

        $this->Cell(60, 10, 'Receiver Address', 1, 0);
        $this->Cell(120, 10, $row['red_address'], 1, 1);

        $this->Cell(60, 10, 'Receiver Phone', 1, 0);
        $this->Cell(120, 10, $row['res_phone'], 1, 1);

        $this->Ln(5);
    }

    function TotalAmount($row)
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(60, 10, 'Total Fee', 1, 0);
        $this->SetFont('Arial', '', 12);
        $this->Cell(120, 10, 'Rs. ' . $row['total_fee'] . '.00', 1, 1);
    }
}

// Fetch data
$data = getBille($_REQUEST['customer_id']);
$row = mysqli_fetch_assoc($data);

// Create PDF
$pdf = new PDF();
$pdf->AddPage(); // Header auto calls here

if ($row) {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 10, 'Courier Reference', 1, 0);
    $pdf->Cell(120, 10, '#' . $row['request_id'], 1, 1);
    $pdf->Ln(5);

    $pdf->SenderTable($row);
    $pdf->ReceiverTable($row);
    $pdf->TotalAmount($row);
} else {
    $pdf->SetFont('Arial', 'I', 12);
    $pdf->Cell(180, 10, 'No Data Found', 1, 1, 'C');
}

// Output PDF
$pdf->Output();
?>
