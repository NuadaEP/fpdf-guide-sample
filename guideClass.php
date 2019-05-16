<?php
	require 'fpdf/fpdf.php';

	// $fpdf = new FPDF();

	class Guide extends FPDF
	{
		public function __construct()
		{
			parent::__construct('L', 'cm', [21, 8]);

			$this->AddPage();
			$this->SetMargins(0, 0);

			$this->pdf_header();
			$this->pdf_client_info();
			$this->pdf_treatment();
			$this->pdf_output('oi');

			$this->Output();
		}

		protected function pdf_header()
		{
			$this->Image('images/newcard-logo.png', -2, -1.5, 8, 0);
			$this->SetFont('Helvetica','B', 12);

		    $this->SetXY(6, 0.3);
			$this->Cell(7, 1, 'AUTORIZAÇÃO DE CONSULTA Nº ', 0, 1, 'L');

		    $this->SetXY(13, 0.3);
			$this->SetTextColor('255', '0', '0');
			$this->Cell(2, 1, '51834', 0, 1, 'L');

			$this->SetTextColor('0', '0', '0');
			$this->SetFont('Helvetica', '', 9);

		    $this->SetXY(18, 0.3);
			$this->Cell(1.5, 0.5, 'JAÚ - SP', 0, 1, 'L');

			$this->SetFont('Helvetica', '', 7);
		    $this->SetXY(17.8, 0.6);
			$this->Cell(1.5, 0.5, '(14) 3416-5444', 0, 1, 'L');

		    $this->SetXY(0.5, 1.2);
			$this->Cell(20, 0, '', 1, 1, 'L');
		}

		protected function pdf_client_info()
		{
			$this->SetFont('Helvetica','B', 6);

		    $this->SetXY(0.5, 1.5);
			$this->Cell(1.2, 0.3, 'CLIENTE: ', 0, 1, 'L');

		    $this->SetXY(0.5, 2);
			$this->Cell(1.2, 0.3, 'LOCAL ANTED: ', 0, 1, 'L');

		    $this->SetXY(0.5, 2.5);
			$this->Cell(1.2, 0.3, 'ENDEREÇO: ', 0, 1, 'L');

		    $this->SetXY(0.5, 3);
			$this->Cell(1.2, 0.3, 'PROFISSIONAL: ', 0, 1, 'L');

			$this->SetFont('Helvetica', '', 7);

		    $this->SetXY(3, 1.5);
			$this->Cell(1.2, 0.3, 'CLIENTE: ', 0, 1, 'L');

		    $this->SetXY(3, 2);
			$this->Cell(1.2, 0.3, 'LOCAL ANTED: ', 0, 1, 'L');

		    $this->SetXY(3, 2.5);
			$this->Cell(1.2, 0.3, 'ENDEREÇO: ', 0, 1, 'L');

		    $this->SetXY(3, 3);
			$this->Cell(1.2, 0.3, 'PROFISSIONAL: ', 0, 1, 'L');

		}

		protected function pdf_treatment()
		{
		}

		protected function pdf_output($text)
		{
			// $this->MultiCell(10, 1, $text, 0, 'C');
		}
	}