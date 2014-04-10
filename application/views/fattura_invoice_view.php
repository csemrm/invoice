<?php $this->load->view('_blocks/header') ?>

<style>
    * {
        margin:0px;
    }
    body {
        background:#e0e6e6;
        font-size:14px;
        font-family:Arial, Helvetica, sans-serif;
    }

</style>

<div class="contener" style="box-shadow: 0 0 5px #ccc; width:100%; margin:auto;"> 

    <!-- start body contener-->

    <div class="body_contenet">

        <div class="company_name company_name_2" style="padding:10px 20px 0;background:#FFF;font-size:13px;color:#333;line-height:22px;margin:auto;">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td style=" border: solid 0px #C3C9C9; padding:10px 0 0; border-right:none; vertical-align: top" width="400">
                        <div style="border-bottom: solid 0px #C3C9C9;"><h1>Dutta  Fashion S.r.l.</h1>
                            Sede Operativa 			
                            <p> Via Adda, 13/B</p>
                            <p>  20863 Concorezzo (MB)	</p>		
                            <p> Cell: 327.57.66.420	</p>		
                            <p>  info@duttafashion.it	</p>		
                            <p>  www.duttafashion.it	</p>		
                        </div>
                        <div style="border-bottom: solid 0px #C3C9C9; padding:10px 0">Sede Legale</div>	
                        <div>Viale E. Caldara, 24 - 20122 Milano</div>
                        <div>P. I.V.A. e C.F.  IT 08544880969</div>
                        <div>VAT Nr. and Tax Code  IT 08544880969	</div>		
                        <div>REA - Chamber of Commerce Company Nr.  MI - 2032599	</div>		
                        <div>Cap. Soc. I.V. - Capital - Euro 10.000,00	</div>		
                        <div>Banca - Bank: Banco Popolare - Ag.151 - Concorezzo (MB)	</div>		
                        <div>Iban - IT71G0503432980000000003162</div>	
                        <hr/>
                        <div style="font-weight: bold">Pagamento / Term of Payment</div>	
                        <p><?= !empty($form['term_of_payment']) ? $form['term_of_payment'] : '' ?> </p>	

                    </td>
                    <td width="1" style=" background: #000;"></td>
                    <td valign="top" style=" border: solid 0px #C3C9C9; padding:10px 0 0;" align="left" width="400">
                        <div style=" padding:5px; height: 20px"><strong>FATTURA - INVOICE</strong></div>	 <hr/>
                        <div style=" padding:5px;">Fattura Nr. / Invoice Nr.: <?= !empty($form['invoice_number']) ? $form['invoice_number'] : '' ?>.</div><hr/>	
                        <div style=" padding:5px;">Del / Of: <?= !empty($form['del_of']) ? $form['del_of'] : '' ?> </div><hr/>	
                        <div style=" padding:5px; height: 200px"><label style="font-weight: bold" >Cliente/Customer</label><br/> <?= !empty($form['customer_name']) ? $form['customer_name'] : '' ?> </div>	
                        <div style=" padding:5px;">Partita IVA /VAT Nr.: <?= !empty($form['vat_nr']) ? $form['vat_nr'] : '' ?> </div>
                        <div style=" padding:5px;">Codice Fiscale/Tax Code: <?= !empty($form['vat_tax_code']) ? $form['vat_tax_code'] : '' ?></div><hr/>
                        <div style=" padding:5px; font-size: 11px">Rif. D.D.T. Nr.: <?= !empty($form['ref_ddt_document_nr']) ? $form['ref_ddt_document_nr'] : '' ?> <br/>
                            Ref. Pro-Forma Invoice Nr.: <?= !empty($form['ref_proforma_nr']) ? $form['ref_proforma_nr'] : '' ?></div>	<hr/>
                        <div style=" padding:5px;">Del / Of: <?= !empty($form['del_of2']) ? $form['del_of2'] : '' ?> </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="company_name company_name_2" style="padding:20px; 
             background:#FFF;
             font-size:13px;
             color:#333;
             line-height:22px; margin:auto;">
            <table cellpadding="5" cellspacing="1" width="100%" style="margin-top:-15px; border: solid 1px #C3C9C9;">
                <tr style="background:#078DB9; color:#fff;">
                    <th  align="left">Descrizione dei Beni<br/>Item Description</th>
                    <th>Articolo<br/>Item </th>
                    <th>Q.tà/Nr.:<br/> Q.ty/Nr.:</th>
                    <th>Prezzo Unitario €<br/>Unit Price €</th>
                    <th>I.V.A.<br/> VAT</th>
                    <th>Sconto <br/>Discount</th>
                    <th>Importo € <br/>Amount €</th>
                </tr>

                <?php
                $key = 0;

                foreach ($form['item'] as $key => $item):
                    ?>

                    <tr align="center" style="background:#E0E6E6;">

                        <td   align="left"><?= !empty($item['description']) ? $item['description'] : '' ?> </td>
                        <td   align="center"><?= !empty($item['article']) ? $item['article'] : '' ?> </td>
                        <td   align="right"><?= !empty($item['qty']) ? $item['qty'] : '' ?> </td>
                        <td   align="right"><?= !empty($item['unit_price']) ? $item['unit_price'] : '' ?> </td>
                        <td   align="right"><?= !empty($item['vat']) ? $item['vat'] : '' ?> </td>
                        <td   align="right"><?= !empty($item['discount']) ? $item['discount'] : '' ?> </td>
                        <td  align="right" style="text-align: right"><?= !empty($item['amount']) ? $item['amount'] : '' ?> </td>
                    </tr> 
                <?php endforeach; ?> 

                <tr align="left" >
                    <td colspan="4"> </td>
                    <td style="background:#078DB9; color:#fff;" colspan="2"> Spese Accessorie €<br/>Charges €    </td>
                    <td style="background:#E0E6E6; color:#000;text-align: right"><?= !empty($form['accessories_cost']) ? $form['accessories_cost'] : '' ?></td>
                </tr>

                <tr align="left" >
                    <td colspan="4"> </td>
                    <td style="background:#078DB9; color:#fff;" colspan="2"> Spese di Trasporto € <br/>Transport Costs €</td>
                    <td style="background:#E0E6E6; color:#000;text-align: right"><?= !empty($form['transport_cost']) ? $form['transport_cost'] : '' ?></td>
                </tr>

                <tr align="left" >
                    <td colspan="4"> </td>
                    <td style="background:#078DB9; color:#fff;" colspan="2">Imponibile €  <br/>Taxable Income €</td>
                    <td style="background:#E0E6E6; color:#000;text-align: right"><?= !empty($form['income_tax']) ? $form['income_tax'] : '' ?></td>
                </tr>

                <tr align="left" >
                    <td colspan="4"> </td>
                    <td style="background:#078DB9; color:#fff;" colspan="2">Imposta I.V.A. € 22%<br/>VAT € 22%</td>
                    <td style="background:#E0E6E6; color:#000;text-align: right"><?= !empty($form['tax']) ? $form['tax'] : '' ?></td>
                </tr>

                <tr align="left" >
                    <td colspan="4"> </td>
                    <td style="background:#078DB9; color:#fff;" colspan="2">Totale Quantità € <br/>Total Quantity €</td>
                    <td style="background:#E0E6E6; color:#000;text-align: right"><?= !empty($form['total_quantity']) ? $form['total_quantity'] : '0' ?></td>
                </tr>
                <tr align="left" >
                    <td colspan="4"> </td>
                    <td style="background:#078DB9; color:#fff;" colspan="2">Totale Fattura € <br/>Total Invoice €</td>
                    <td style="background:#E0E6E6; color:#000;text-align: right"><?= !empty($form['total_invoice']) ? $form['total_invoice'] : '' ?></td>
                </tr>


            </table>
            <div> <a href="<?= site_url('fattura_invoice/printview/' . $form['id']) ?>">Print</a></div>

        </div>

    </div>
</div>
<!-- end body contener--> 



<?php $this->load->view('_blocks/footer') ?>