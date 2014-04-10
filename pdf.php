<?php
	/**
		* Created by 23rd and Walnut
		* www.23andwalnut.com
		* User: Saleem El-Amin
		* Date: Jul 5, 2010
		* Time: 11:06:59 PM
	*/
	
	
	include('fpdf/fpdf.php');
	
	class PDF extends FPDF
	{
		
		
		function invoice($invoice,$unique)
		{
			//TODO: authorized admin or owner...owner function
			global $CONFIG;
			setlocale(LC_MONETARY, 'en_US');
			
			//all date into simple variables
			$company_details[0] = (isset($CONFIG['company']['address'])) ? $CONFIG['company']['address'] : '';
			$company_details[2] = (isset($CONFIG['company']['email'])) ? $CONFIG['company']['email'] : '';
			$company_details[3] = (isset($CONFIG['company']['phone'])) ? $CONFIG['company']['phone'] : '';
			//invoices details
			$invoicenumber = $invoice['main']['invoice_number'];
			$invoicetype = $invoice['main']['invoice_type'];
			$invoicedate = ($invoice['main']['date_of_issue'] != 0) ? date('M j, Y', $invoice['main']['date_of_issue']) : '';
			$invoicestatus = InvoicesController::invoice_status($invoice['main']['balance'], $invoice['main']['due_date'], is_array($invoice['line_items']));
			$invoiceduedate = ($invoice['main']['due_date'] != 0) ? date('M j, Y', $invoice['main']['due_date']) : '';
			//client---
			$client = $invoice['client'];
			$client_name = (!empty($client['name'])) ? $client['name'] : '';
			$client_address = (!empty($client['address_line_1'])) ? explode("\n",$client['address_line_1']) : '';
			//$client_address[] = (!empty($client['contact_email'])) ? $client['contact_email'] : '';
			//$client_address[] = (!empty($client['contact_phone'])) ? $client['contact_phone'] : '';
			//shipper details
			$shipper = $invoice['shipper'];
			$shipper_name = (!empty($shipper['name'])) ? $shipper['name'] : '';
			$shipper_cp = (!empty($shipper['contact_person'])) ? $shipper['contact_person'] : '';
			$shipper_message = $invoicetype=="lc" ? $shipper['lc_message'] :$shipper['tt_message'];
			$shipper_address = (!empty($shipper['address'])) ? explode("\n",$shipper['address']) : '';
			$shipper_bank_details = (!empty($shipper['bank_details'])) ? explode("\n",$shipper['bank_details']) : '';
			$shipper_lc_terms = (!empty($shipper['lc_terms'])) ? explode("\n",$shipper['lc_terms']) : '';
			$shipper_bl_terms = (!empty($shipper['bl_terms'])) ?$shipper['bl_terms'] : '';
			
			$arr = array("&quot;" => '"',"&amp;" => "&"); 
			
			//create pdf
			$this->AddPage();
			$this->SetFont('arial', 'B', 12);
			$this->SetTextColor(0, 0, 0);
			$this->Text(12, 16, "$shipper_name");
			$this->SetFont('arial', '', 9);
			$this->SetTextColor(0, 0, 0);
			$tmp_y = $this->GetY()+6 ;
			for ($i = 0; $i < count($shipper_address); $i++)
			{
				if (!empty($shipper_address[$i]))
				{
					$tmp_y = $tmp_y + 4;
					$this->Text(12, $tmp_y, $shipper_address[$i]);
				}
			}
			$this->SetXY(150, 12);
			$this->SetFont('arial', 'B', 11);
			$this->SetTextColor(0, 0, 0);
			$this->Cell(50, 5, 'PROFORMA INVOICE', 0, 0, 'R');
			$this->SetXY(174, 17);
			$this->SetFont('arial', 'B', 10);
			$this->SetTextColor(0, 0, 0);
			$this->Cell(25, 5,$invoicenumber, 1, 0, 'C');
			//Our Bank Address & Purchasers
			$base_y=$tmp_y+15;
			$this->SetXY(12, $base_y);
			$this->SetFont('arial', 'B', 10);
			$this->SetTextColor(0, 0, 0);
			$this->SetFillColor(238,238,238);
			$this->Cell(92, 5, '  Our Bank Address', 0, 0, 'L',true);
			$this->SetXY(107, $base_y);
			$this->SetFont('arial', 'B', 10);
			$this->SetTextColor(0, 0, 0);
			$this->SetFillColor(238,238,238);
			$this->Cell(92, 5, '  Purchasers', 0, 0, 'L',true);
			
			//bank_details---------
			$cell_height=count($shipper_bank_details)> count($client_address)+1 ? count($shipper_bank_details):count($client_address)+1;
			$this->SetXY(12, $base_y+10);
			$this->SetDrawColor(0,0,0);
			$this->SetTextColor(0, 0, 0);
			$this->Cell(190, 5* $cell_height , "", 1,0 , 'L');
			$this->SetFont('arial', '', 9);
			$this->SetTextColor(0, 0, 0);
			$tmp_y = $base_y + 10;
			for ($i = 0; $i < count($shipper_bank_details); $i++)
			{
				if (!empty($shipper_bank_details[$i]))
				{
					$tmp_y = $tmp_y + 4.5;
					$this->Text(14, $tmp_y, $shipper_bank_details[$i]);
				}
			}
			//clients Details-----
			$this->SetXY(107, $base_y+10);
			$this->SetDrawColor(0,0,0);
			$this->SetTextColor(0, 0, 0);
			$this->Cell(92, 5* $cell_height , "", 1,0 , 'L');
			$this->SetFont('arial', 'B', 9);
			$this->SetTextColor(0, 0, 0);
			$this->Text(109, $base_y + 14, $client_name);
			$this->SetFont('arial', '', 9);
			$this->SetTextColor(0, 0, 0);
			$tmp_y =$base_y+14 ;
			for ($i = 0; $i < count($client_address); $i++)
			{
				if (!empty($client_address[$i]))
				{
					$tmp_y = $tmp_y + 4;
					$this->Text(109, $tmp_y, $client_address[$i]);
				}
			}
			//ISSUE Header
			$base_y=$base_y+( 5* $cell_height) +15;
			$w1 = 25;
			$w2 = 25;
			$w3 = 55;
			$w4 = 55;
			$w5 = 27;
			$this->SetXY(12, $base_y);
			$this->SetFont('arial', 'B', 8);
			$this->SetTextColor(0, 0, 0);
			$this->SetFillColor(238,238,238);
			$this->SetDrawColor(0,0,0);
			$this->Cell($w1, 5, 'ISSUE DATE', 1, 0, 'C');
			$this->Cell($w2, 5, 'DELIVERY DATE', 1, 0, 'C');
			$this->Cell($w3, 5,'PAYMENT MODE', 1, 0, 'C');
			$this->Cell($w4, 5,'CONTACT PERSON', 1, 0, 'C');
			$this->Cell($w5, 5, 'CURRENCY', 1, 0, 'C');
			//ISSUE items 
			$base_y=$base_y+5;
			$w1 = 25;
			$w2 = 25;
			$w3 = 55;
			$w4 = 55;
			$w5 = 27;
			$this->SetXY(12, $base_y);
			$this->SetFont('arial', 'B', 8);
			$this->SetTextColor(0, 0, 0);
			$this->SetDrawColor(0,0,0);
			$this->Cell($w1, 5, $invoicedate, 1, 0, 'C');
			$this->Cell($w2, 5, $invoiceduedate, 1, 0, 'C');
			$pay_mode=$invoicetype=="lc"?"Transferable L/C at sight ": "Telegraphic Transfer";
			$this->Cell($w3, 5, $pay_mode, 1, 0, 'C');
			$this->Cell($w4, 5,  $shipper_cp, 1, 0, 'C');
			$this->Cell($w5, 5, 'USD', 1, 0, 'C');
			//Items headers
			$base_y=$base_y+10;
			$w1 = 15;
			$w2 = 90;
			$w3 = 15;
			$w4 = 20;
			$w5 = 20;
			$w6 = 27;
			$this->SetXY(12, $base_y);
			$this->SetFont('arial', 'B', 8);
			$this->SetTextColor(0, 0, 0);
			$this->SetFillColor(238,238,238);
			$this->SetDrawColor(0,0,0);
			$this->Cell($w1, 5, 'Art Num', 1, 0, 'C');
			$this->Cell($w2, 5, 'ARTICLE DESCRIPTION ', 1, 0, 'C');
			$this->Cell($w3, 5, 'SIZE', 1, 0, 'C');
			$this->Cell($w4, 5, 'QTY', 1, 0, 'C');
			$this->Cell($w5, 5, 'UNIT PRICE', 1, 0, 'C');
			$this->Cell($w6, 5, 'SUB TOTAL', 1, 0, 'C');
			
			//Items loop
			$tmp_y=$base_y+5;
			
			$total_items=count($invoice['line_items']);
			$max_limit=30;  //page items limit  for lc type invoice
			$min_limit=20;  //page items limit  for lc type invoice
			$total_page=($invoicetype=="lc"  && ($total_items%$max_limit>$min_limit)) || ($invoicetype=="lc"  && ($total_items%$max_limit==0)) ? ceil($total_items/$max_limit)+1 :  ceil($total_items/$max_limit) ;
			$pageno=1;
			$this->SetXY(150, 40);
			$this->SetFont('arial', '', 9);
			$this->SetTextColor(0, 0, 0);
			$this->Cell(50, 5, "$pageno of total page $total_page", 0, 0, 'R');
			$count_items=0;
			$page_total=0;
			for ($y = 0;
			$y < $total_items;
			$y++)
			{
				$k=$y;
				$base_y	=$tmp_y + (5 * $count_items);
				$this->SetXY(12, $base_y);
				$this->SetFont('arial', '', 8);
				$this->Cell($w1, 5,$invoice['line_items'][$k]['item_no'], 1, 0, 'C');
				$this->SetFont('arial', '', 7);
				$this->Cell($w2, 5,$invoice['line_items'][$k]['description'], 1, 0, 'L');
				$this->SetFont('arial', '', 8);
				$this->Cell($w3, 5, $invoice['line_items'][$k]['item_size'], 1, 0, 'C');
				$this->Cell($w4, 5, $invoice['line_items'][$k]['item_quantity'], 1, 0, 'R');
				$this->Cell($w5, 5, '$' . number_format($invoice['line_items'][$k]['item_rate'], 2, '.', ','), 1, 0, 'R');
				$this->Cell($w6, 5, '$' . number_format($invoice['line_items'][$k]['item_quantity'] * $invoice['line_items'][$k]['item_rate'], 2, '.', ','), 1, 0, 'R');
				//page total
				$page_total=$page_total+($invoice['line_items'][$k]['item_quantity'] * $invoice['line_items'][$k]['item_rate']);
				$count_items++;
				if(($count_items>=$max_limit && $total_items>$max_limit*$pageno) || ($count_items>$min_limit &&  $y==$total_items-1 && $invoicetype=="lc")){
					//page total
					$this->SetXY(12, $this->GetY()+5);
					$this->SetFont('arial', 'B', 9);
					$this->Cell(70+90, 5, "Sub Total:", 0, 0, 'R');
					$this->Cell(27, 5,   '$' . number_format($page_total, 2, '.', ','), 1, 0, 'R');
					//message
					$this->SetXY(12, 282);
					$this->SetFont('arial', 'B', 9);
					$this->Cell(187, 5, $shipper_message, 1, 0,'C',false);

					//headers
					$this->SetXY(12, 295);
					$this->Cell(50, 5, "", 0, 0, 'R');
					$this->SetFont('arial', 'B', 12);
					$this->SetTextColor(0, 0, 0);
					$this->Text(12, 16, "$shipper_name");
					$this->SetFont('arial', '', 9);
					$this->SetTextColor(0, 0, 0);
					$tmp_y = $this->GetY()+6 ;
					for ($i = 0; $i < count($shipper_address); $i++)
					{
						if (!empty($shipper_address[$i]))
						{
							$tmp_y = $tmp_y + 4;
							$this->Text(12, $tmp_y, $shipper_address[$i]);
						}
					}
					$pageno++; //page no increment
					$this->SetXY(150, 40);
					$this->SetFont('arial', '', 9);
					$this->SetTextColor(0, 0, 0);
					$this->Cell(50, 5, "$pageno of total page $total_page", 0, 0, 'R');
					$this->SetXY(150, 297);
					$this->SetXY(150, 12);
					$this->SetFont('arial', 'B', 11);
					$this->SetTextColor(0, 0, 0);
					$this->Cell(50, 5, 'PROFORMA INVOICE', 0, 0, 'R');
					$this->SetXY(174, 17);
					$this->SetFont('arial', 'B', 10);
					$this->SetTextColor(0, 0, 0);
					$this->Cell(25, 5,$invoicenumber, 1, 0, 'C');
					//Our Bank Address & Purchasers
					$base_y=$tmp_y+15;
					$this->SetXY(12, $base_y);
					$this->SetFont('arial', 'B', 10);
					$this->SetTextColor(0, 0, 0);
					$this->SetFillColor(238,238,238);
					$this->Cell(92, 5, '  Our Bank Address', 0, 0, 'L',true);
					$this->SetXY(107, $base_y);
					$this->SetFont('arial', 'B', 10);
					$this->SetTextColor(0, 0, 0);
					$this->SetFillColor(238,238,238);
					$this->Cell(92, 5, '  Purchasers', 0, 0, 'L',true);
					
					//bank_details---------
					$cell_height=count($shipper_bank_details)> count($client_address)+1 ? count($shipper_bank_details):count($client_address)+1;
					$this->SetXY(12, $base_y+10);
					$this->SetDrawColor(0,0,0);
					$this->SetTextColor(0, 0, 0);
					$this->Cell(92, 5* $cell_height , "", 1,0 , 'L');
					$this->SetFont('arial', '', 9);
					$this->SetTextColor(0, 0, 0);
					$tmp_y = $base_y + 10;
					for ($i = 0; $i < count($shipper_bank_details); $i++)
					{
						if (!empty($shipper_bank_details[$i]))
						{
							$tmp_y = $tmp_y + 4.5;
							$this->Text(14, $tmp_y, $shipper_bank_details[$i]);
						}
					}
					//clients Details-----
					$this->SetXY(107, $base_y+10);
					$this->SetDrawColor(0,0,0);
					$this->SetTextColor(0, 0, 0);
					$this->Cell(92, 5* $cell_height , "", 1,0 , 'L');
					$this->SetFont('arial', 'B', 9);
					$this->SetTextColor(0, 0, 0);
					$this->Text(109, $base_y + 14, $client_name);
					$this->SetFont('arial', '', 9);
					$this->SetTextColor(0, 0, 0);
					$tmp_y =$base_y+14 ;
					for ($i = 0; $i < count($client_address); $i++)
					{
						if (!empty($client_address[$i]))
						{
							$tmp_y = $tmp_y + 4;
							$this->Text(109, $tmp_y, $client_address[$i]);
						}
					}
					//ISSUE Header
					$base_y=$base_y+( 5* $cell_height) +15;
					$w1 = 25;
					$w2 = 25;
					$w3 = 55;
					$w4 = 55;
					$w5 = 27;
					$this->SetXY(12, $base_y);
					$this->SetFont('arial', 'B', 8);
					$this->SetTextColor(0, 0, 0);
					$this->SetFillColor(238,238,238);
					$this->SetDrawColor(0,0,0);
					$this->Cell($w1, 5, 'ISSUE DATE', 1, 0, 'C');
					$this->Cell($w2, 5, 'DELIVERY DATE', 1, 0, 'C');
					$this->Cell($w3, 5,'PAYMENT MODE', 1, 0, 'C');
					$this->Cell($w4, 5,'CONTACT PERSON', 1, 0, 'C');
					$this->Cell($w5, 5, 'CURRENCY', 1, 0, 'C');
					//ISSUE items 
					$base_y=$base_y+5;
					$w1 = 25;
					$w2 = 25;
					$w3 = 55;
					$w4 = 55;
					$w5 = 27;
					$this->SetXY(12, $base_y);
					$this->SetFont('arial', 'B', 8);
					$this->SetTextColor(0, 0, 0);
					$this->SetDrawColor(0,0,0);
					$this->Cell($w1, 5, $invoicedate, 1, 0, 'C');
					$this->Cell($w2, 5, $invoiceduedate, 1, 0, 'C');
					$pay_mode=$invoicetype=="lc"?"Transferable L/C at sight ": "Telegraphic Transfer";
					$this->Cell($w3, 5, $pay_mode, 1, 0, 'C');
					$this->Cell($w4, 5,  $shipper_cp, 1, 0, 'C');
					$this->Cell($w5, 5, 'USD', 1, 0, 'C');
					
					//headers	
					$base_y=$base_y+10;
					$w1 = 15;
					$w2 = 90;
					$w3 = 15;
					$w4 = 20;
					$w5 = 20;
					$w6 = 27;
					$this->SetXY(12, $base_y);
					$this->SetFont('arial', 'B', 8);
					$this->SetTextColor(0, 0, 0);
					$this->SetFillColor(238,238,238);
					$this->SetDrawColor(0,0,0);
					$this->Cell($w1, 5, 'Art Num', 1, 0, 'C');
					$this->Cell($w2, 5, 'ARTICLE DESCRIPTION ', 1, 0, 'C');
					$this->Cell($w3, 5, 'SIZE', 1, 0, 'C');
					$this->Cell($w4, 5, 'QTY', 1, 0, 'C');
					$this->Cell($w5, 5, 'UNIT PRICE', 1, 0, 'C');
					$this->Cell($w6, 5, 'SUB TOTAL', 1, 0, 'C');
					//bf---
					$this->SetXY(12, $base_y+5);
					$this->SetFont('arial', '', 8);
					$this->Cell($w1, 5,'', 1, 0, 'C');
					$this->SetFont('arial', 'B', 8);
					$this->Cell($w2, 5,'B/F', 1, 0, 'L');
					$this->SetFont('arial', 'B', 8);
					$this->Cell($w3, 5,'', 1, 0, 'C');
					$this->Cell($w4, 5, '', 1, 0, 'R');
					$this->Cell($w5, 5, '', 1, 0, 'R');
					$this->Cell($w6, 5, '$' . number_format($page_total, 2, '.', ','), 1, 0, 'R');
					$tmp_y=$base_y+10;
					$count_items=0;
				} 
			}
			
			$this->SetXY(12, $this->GetY()+5);
			$this->SetFont('arial', 'B', 9);
			$this->Cell(70+90, 5, "Total:", 0, 0, 'R');
			$this->Cell(27, 5,   '$' . number_format($invoice['main']['total'], 2, '.', ','), 1, 0, 'R');
			$this->SetXY(12, $this->GetY()+10);
			//if type lc then show lc terms---
			if($invoicetype=="lc"){
				//lc terms 
				$base_y= $this->GetY();
				$this->SetFont('arial', 'B', 9);
				$this->SetTextColor(0, 0, 0);
				$this->Text(12,$base_y, 'Please open L/C keeping the following terms:');
				$this->SetFont('arial', '', 8);
				$tmp_y = $base_y ;
				for ($i = 0; $i < count($shipper_lc_terms); $i++)
				{
					if (!empty($shipper_lc_terms[$i]))
					{
						$tmp_y = $tmp_y + 4.5;
						$this->Text(14, $tmp_y, strtr($shipper_lc_terms[$i],$arr));
					}
				}
				//bl terms 
				$base_y=$tmp_y+10;
				$this->SetFont('arial', 'B', 9);
				$this->SetTextColor(0, 0, 0);
				$this->Text(12,$base_y, 'Please keep following word in the B/L terms in the L/C : ');
				$this->SetFont('arial', 'I', 8);
				$this->SetXY(13, $base_y+1.5);
				$this->MultiCell(185, 4.5,  strtr($shipper_bl_terms,$arr), 0, 'L',false);
				
			}
			//message
			$this->SetXY(12, 282);
			$this->SetFont('arial', 'B', 9);
			$this->Cell(187, 5, $shipper_message, 1, 0,'C',false);
			$filename = $CONFIG['uploads']['path'] . "invoices/" . $invoice['main']['invoice_number'] .'-'.$unique. '.pdf';
			$this->Output($filename); //generat the invoice and then use any where.
			//unlink($filename);
		}
	}
	
?>
