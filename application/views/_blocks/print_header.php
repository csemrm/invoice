
<div style="line-height: 10px; color: #111; font-size: 12px; font-family:Arial,Helvetica,sans-serif ">
    <table style="border: 1px solid #078DB9">
        <tr>
            <td width="50%" style="border: 1px solid #078DB9">

                <div ><img src="/assets/images/logo.png" width="150"  /></div>
                <div style="line-height: 20px">Sede Operativa </div>			
                <div>Via Adda, 13/B</div>
                <div>20863 Concorezzo (MB)</div>		
                <div>Cell: 327.57.66.420</div>		
                <div>info@duttafashion.it</div>		
                <div>www.duttafashion.it</div>		
                <div style="line-height: 15px;">Sede Legale</div>	
                <div style="line-height: 8px;">Viale E. Caldara, 24 - 20122 Milano</div>
                <div>P. I.V.A. e C.F.  IT 08544880969</div>
                <div>V.A.T Nr. and Tax Code  IT 08544880969</div>		
                <div>REA - Chamber of Commerce Company Nr.  MI - 2032599</div>		
                <div>Cap. Soc. I.V. - Capital - Euro 10.000,00	</div>		
                <div>Banca - Bank: Banco Popolare - Ag.151 - Concorezzo (MB)</div>		
                <div>Iban - IT71G0503432980000000003162</div>	 
                <div style="font-weight: bold; line-height: 10px;">Pagamento / Term of Payment</div>	
                <div  style="line-height: 15px; margin-bottom: 15px;"><?= !empty($form['term_of_payment']) ? $form['term_of_payment'] : '' ?> </div>	

            </td> 
            <td valign="top" align="left" width="50%">
                <div style=" padding:5px 0; line-height: 20px; font-size: 20px;"><strong>FATTURA - INVOICE</strong></div>
                <div style=" padding:5px; line-height: 15px; vertical-align: middle; font-size: 12px; border-top: 1px solid #078DB9">Fattura Nr. / Invoice Nr.: <?= !empty($form['invoice_number']) ? $form['invoice_number'] : '' ?>.</div>
                <div style=" padding:5px; line-height: 20px; font-size: 12px; border-top: 1px solid #078DB9; border-bottom: 1px solid #078DB9">Del / Of: <?= !empty($form['del_of']) ? $form['del_of'] : '' ?> </div>
                <div style=" padding:5px; line-height: 0px; font-size: 12px;"><div style="line-height: 5px; font-weight: bold">Cliente/Customer</div>
                    <div style="line-height: 15px;"><?= !empty($form['customer_name']) ? $form['customer_name'] : '' ?> </div></div>	
                <div style=" padding:5px; line-height: 8px; font-size: 12px;">Partita IVA /VAT Nr.: <?= !empty($form['vat_nr']) ? $form['vat_nr'] : '' ?> </div>
                <div style=" padding:5px; line-height: 8px; font-size: 12px; ">Codice Fiscale/Tax Code: <?= !empty($form['vat_tax_code']) ? $form['vat_tax_code'] : '' ?></div>
                <div style=" padding:5px; line-height:12px; font-size: 11px;border-top: 1px solid #078DB9"><br>Rif. D.D.T. Nr.: <?= !empty($form['ref_ddt_document_nr']) ? $form['ref_ddt_document_nr'] : '' ?> <br/>
                    Ref. Pro-Forma Invoice Nr.: <?= !empty($form['ref_proforma_nr']) ? $form['ref_proforma_nr'] : '' ?></div>	
                <div style=" padding:5px; line-height: 20px; font-size: 12px; border-top: 1px solid #078DB9">Del / Of: <?= !empty($form['del_of2']) ? $form['del_of2'] : '' ?> </div>
            </td>
        </tr>

    </table>  

