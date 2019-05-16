<?php
	require 'fpdf/fpdf.php';

	// $fpdf = new FPDF();

	class Guide extends FPDF
	{
		public function __construct()
		{
			parent::__construct('P', 'cm');

			$this->AddPage();
			$this->SetMargins(0, 0, 0);
			$this->SetAutoPageBreak(false);

			$this->pdf_header();
			$this->pdf_client_info();
			$this->pdf_treatment();
			$this->subscriptions();

			$this->Output();
		}

		protected function pdf_header()
		{
			$this->Image('images/newcard-logo.png', -2.7, -2.7, 12, 0);

			$this->SetFont('Helvetica','B', 10);

		    $this->SetXY(6.5, 0.3);
			$this->Cell(7, 1, 'AUTORIZAÇÃO DE PROCEDIMENTO MÉDICO Nº ', 0, 1, 'L');

		    $this->SetXY(15, 0.3);
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

		    $this->SetXY(1, 1.5);
			$this->Cell(1.2, 0.3, 'CLIENTE: ', 0, 1, 'L');

		    $this->SetXY(1, 2);
			$this->Cell(1.2, 0.3, 'LOCAL ANTED: ', 0, 1, 'L');

		    $this->SetXY(1, 2.5);
			$this->Cell(1.2, 0.3, 'ENDEREÇO: ', 0, 1, 'L');

		    $this->SetXY(1, 3);
			$this->Cell(1.2, 0.3, 'PROFISSIONAL: ', 0, 1, 'L');

		    $this->SetXY(17.5, 1.5);
			$this->Cell(1.2, 0.3, 'CONTRATO: ', 0, 1, 'L');

		    $this->SetXY(17.5, 1.5);
			$this->Cell(1.2, 1, 'EMISSÃO: ', 0, 1, 'L');

			$this->SetFont('Helvetica', '', 7);

		    $this->SetXY(3.5, 1.5);
			$this->Cell(1.2, 0.3, 'CLIENTE TESTE', 0, 1, 'L');

		    $this->SetXY(3.5, 2);
			$this->Cell(1.2, 0.3, 'CLINICA EXCELENT MED', 0, 1, 'L');

		    $this->SetXY(3.5, 2.5);
			$this->Cell(1.2, 0.3, 'RUA TESTE, 92 - VILA TESTE - CIDADE TESTE - (00) 0000-0000', 0, 1, 'L');

		    $this->SetXY(3.5, 3);
			$this->Cell(1.2, 0.3, 'PROFISSIONAL TESTE', 0, 1, 'L');

		    $this->SetXY(19, 1.5);
			$this->Cell(1.2, 0.3, '17597', 0, 1, 'L');

		    $this->SetXY(19, 1.5);
			$this->Cell(1.2, 1, '03/05/2019', 0, 1, 'L');
		}

		protected function pdf_treatment()
		{
			$this->SetFont('Helvetica', 'B', 7);

		    $this->SetXY(1, 3.7);
			$this->Cell(1.2, 0.3, 'TRAT. ', 0, 1, 'L');

		    $this->SetXY(3.5, 3.7);
			$this->Cell(1.2, 0.3, 'PROCEDIMENTOS', 0, 1, 'L');

		    $this->SetXY(19.5, 3.7);
			$this->Cell(1.2, 0.3, 'QTD. ', 0, 1, 'L');

			$this->SetFont('Helvetica', '', 7);

		    $this->SetXY(1, 4.2);
			$this->Cell(1.2, 0.3, '95705', 0, 1, 'L');

		    $this->SetXY(3.5, 4.2);
			$this->Cell(1.2, 0.3, '133', 0, 1, 'L');

		    $this->SetXY(4.3, 4.2);
			$this->Cell(1.2, 0.3, 'VHS', 0, 1, 'L');

		    $this->SetXY(19.5, 4.2);
			$this->Cell(1.2, 0.3, '1 ', 0, 1, 'L');


		    $this->SetXY(1, 4.6);
			$this->Cell(1.2, 0.3, '95704', 0, 1, 'L');

		    $this->SetXY(3.5, 4.6);
			$this->Cell(1.2, 0.3, '66', 0, 1, 'L');

		    $this->SetXY(4.3, 4.6);
			$this->Cell(1.2, 0.3, 'HEMOGRAMA', 0, 1, 'L');

		    $this->SetXY(19.5, 4.6);
			$this->Cell(1.2, 0.3, '1 ', 0, 1, 'L');


		    $this->SetXY(1, 5);
			$this->Cell(1.2, 0.3, '95706', 0, 1, 'L');

		    $this->SetXY(3.5, 5);
			$this->Cell(1.2, 0.3, '96', 0, 1, 'L');

		    $this->SetXY(4.3, 5);
			$this->Cell(1.2, 0.3, 'PCR-ULTRA SENSIVEL', 0, 1, 'L');

		    $this->SetXY(19.5, 5);
			$this->Cell(1.2, 0.3, '1 ', 0, 1, 'L');


		    $this->SetXY(1, 5.4);
			$this->Cell(1.2, 0.3, '95706', 0, 1, 'L');

		    $this->SetXY(3.5, 5.4);
			$this->Cell(1.2, 0.3, '96', 0, 1, 'L');

		    $this->SetXY(4.3, 5.4);
			$this->Cell(1.2, 0.3, 'PCR-ULTRA SENSIVEL', 0, 1, 'L');

		    $this->SetXY(19.5, 5.4);
			$this->Cell(1.2, 0.3, '1 ', 0, 1, 'L');


		    $this->SetXY(1, 5.8);
			$this->Cell(1.2, 0.3, '95706', 0, 1, 'L');

		    $this->SetXY(3.5, 5.8);
			$this->Cell(1.2, 0.3, '96', 0, 1, 'L');

		    $this->SetXY(4.3, 5.8);
			$this->Cell(1.2, 0.3, 'PCR-ULTRA SENSIVEL', 0, 1, 'L');

		    $this->SetXY(19.5, 5.8);
			$this->Cell(1.2, 0.3, '1 ', 0, 1, 'L');
		}

		protected function subscriptions()
		{
			$this->SetFont('Helvetica', 'B', 7);

		    $this->SetXY(1, 6.4);
			$this->Cell(1.2, 0.3, 'OBS.: FAVOR TRAZER ESTA GUIA NO MOMENTO DO ATENDIMENTO', 0, 1, 'L');

			$this->SetFont('Helvetica', '', 20);

		    $this->SetXY(1, 7);
			$this->Cell(1.2, 0.3, '* 0000051824 *', 0, 1, 'L');

			$this->SetFont('Helvetica', '', 7);

		    $this->SetXY(7.5, 7.2);
			$this->Cell(6, 0, '', 1, 1, 'L');

		    $this->SetXY(14.5, 7.2);
			$this->Cell(6, 0, '', 1, 1, 'L');

		    $this->SetXY(7.5, 7);
			$this->Cell(6, 1, 'LABORATORIO TESTE', 0, 1, 'C');

		    $this->SetXY(14.5, 7);
			$this->Cell(6, 1, 'CLIENTE TESTE', 0, 1, 'C');
		}
	}