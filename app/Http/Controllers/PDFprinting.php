<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PDFprinting extends Controller
{
    public static function print(Request $Request){
        
        $fpdf = new Fpdf('P', 'mm', 'A4');
        $fpdf->AddPage();
        $fpdf->SetTitle("Payslip");

        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Text(95, 15, "Payslip", 'C');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Text(92, 20, "Zoondle Inc");
        $fpdf->Text(80, 25, "21023 Pearson Point Road");
        $fpdf->Text(88, 30, "Gateway Avenue");
        $fpdf->Ln(30);

        $fpdf->SetX(15);
        $fpdf->SetFont('Arial', '' , 12);
        $fpdf->Text(10, 50, " Gateway Avenue :");       
        $fpdf->Text(10, 55, " Pay Period : ");
        $fpdf->Text(10, 60, " Worked Days : ");

        $fpdf->Text(60, 50, " 2018-06-23 ");
        $fpdf->Text(60, 55, " August 2021 ");
        $fpdf->Text(60, 60, " 26 ");

        $fpdf->Text(120, 50, " Employee Name : ");       
        $fpdf->Text(120, 55, " Designation : ");
        $fpdf->Text(120, 60, " Department : ");

        $fpdf->Text(160, 50, " Sally Harley ");
        $fpdf->Text(160, 55, " Marketing Executive ");
        $fpdf->Text(160, 60, " Marketing ");

        $fpdf->Ln(30);
        $fpdf->SetX(15);
        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Cell(120, 10, "Earnings", 1, 1, 'C');
        $fpdf->SetX(15);
        $fpdf->SetFont('Arial', '' , 14);
        $fpdf->Cell(120, 10, "Basic", 1, 'L');
        $fpdf->Cell(120, 10, "Incentive Pay", 1, 'L');
        $fpdf->Cell(120, 10, "House Rent Allowance", 1, 'L');
        $fpdf->Cell(120, 10, "Meal Allowance", 1, 'L');
        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Cell(120, 10, "Total Earnings", 1, 'L');


        $fpdf->SetY(70);
        $fpdf->SetX(135);
        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Cell(60, 10, "Amount", 1, 1, 'C');
        $fpdf->SetX(135);
        $fpdf->SetFont('Arial', '' , 14);
        $fpdf->Cell(60, 10, "10000", 1, 1, 'R');
        $fpdf->SetX(135);
        $fpdf->Cell(60, 10, "1000", 1, 1, 'R');
        $fpdf->SetX(135);
        $fpdf->Cell(60, 10, "400", 1,  1,'R');
        $fpdf->SetX(135);
        $fpdf->Cell(60, 10, "200", 1,  1, 'R');
        $fpdf->SetX(135);
        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Cell(60, 10, "11600", 1,  1, 'R');


        $fpdf->Ln(10);
        $fpdf->SetX(15);
        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Cell(120, 10, "Deduction", 1, 1, 'C');
        $fpdf->SetX(15);
        $fpdf->SetFont('Arial', '' , 14);
        $fpdf->Cell(120, 10, "Provident Fund", 1, 'L');
        $fpdf->Cell(120, 10, "Professional Tax", 1, 'L');
        $fpdf->Cell(120, 10, "Loan", 1, 'L');
        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Cell(120, 10, "Total Deduction", 1, 'L');

        $fpdf->SetY(140);
        $fpdf->SetX(135);
        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Cell(60, 10, "Amount", 1, 1, 'C');
        $fpdf->SetX(135);
        $fpdf->SetFont('Arial', '' , 14);
        $fpdf->Cell(60, 10, "1200", 1,  1, 'R');
        $fpdf->SetX(135);
        $fpdf->Cell(60, 10, "500", 1, 1, 'R');
        $fpdf->SetX(135);
        $fpdf->Cell(60, 10, "400", 1, 1, 'R');
        $fpdf->SetX(135);
        $fpdf->SetFont('Arial', 'B' , 14);
        $fpdf->Cell(60, 10, "2100", 1, 1, 'R');


        $fpdf->Ln(25);
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Text(100, 210, "Net Pay");

        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Text(103, 215, "9500");
        $fpdf->Text(80, 220, "Nine Thousand Five Hundred");

        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Text(30, 250, "Employer Signature.");
        $fpdf->Line(15, 270, 80, 270); 
        
        $fpdf->Text(145, 250, "Employee Signature."); 
        $fpdf->Line(130, 270, 195, 270); 
        
        $fpdf->Output();
        exit;
    }
}
