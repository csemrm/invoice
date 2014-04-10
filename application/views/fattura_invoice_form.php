<style>
    * {
        margin:0px;
    }
    body {
        background:#e0e6e6;
        font-size:14px;
        font-family:Arial, Helvetica, sans-serif;
    }
    input[type="text"]{
        border: solid 1px #afc2c5;
        padding:5px;
        vertical-align:bottom;
        width:100px;
    }
    input[type="text"]:focus, .company_name table tr td input[type="text"]:hover {
        background:#f4f6f6;
        transition: all 300ms ease 0s;
        border: solid 1px #0897c6;
        box-shadow: 2px 1px 3px #CAD3D4 inset;
    }



</style>
<form action="" method="post">
    <?php echo validation_errors(); ?>
    <div class="contener" style="box-shadow: 0 0 5px #ccc; width:980px; margin:auto;"> 

        <!-- start body contener-->

        <div class="body_contenet">

            <div class="company_name company_name_2" style="	padding:20px;
                 background:#FFF;
                 font-size:13px;
                 color:#333;
                 line-height:22px; width:938px; margin:auto;">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style=" border: solid 1px #C3C9C9; padding:10px; border-right:none;" width="400">
                            <div style="border-bottom: solid 0px #C3C9C9;"><h1>Dutta  Fashion S.r.l.</h1>
                                Sede Operativa:		
                                <p> Via Adda, 13/B</p>
                                <p>  20863 Concorezzo (MB)	</p>		
                                <p> Cell: 327.57.66.420	</p>		
                                <p>  info@duttafashion.it</p>		
                                <p>  www.duttafashion.it</p></div>
                            <div style="border-bottom: solid 0px #C3C9C9; padding:10px 0 5px">Sede Legale </div>	
                            <div>Viale E. Caldara, 24 - 20122 Milano</div>
                            <div>P. I.V.A. e C.F.  IT 08544880969</div>
                            <div>VAT Nr. and Tax Code  IT 08544880969	</div>		
                            <div>REA - Chamber of Commerce Company Nr.  MI - 2032599	</div>		
                            <div>Cap. Soc. I.V. - Capital - Euro 10.000,00	</div>		
                            <div>Banca - Bank: Banco Popolare - Ag.151 - Concorezzo (MB)	</div>		
                            <div>Iban - IT71G0503432980000000003162</div>	
                            <div><strong>Pagamento / Term of Payment</strong></div>		
                            <textarea name="term_of_payment" required style="width: 98%; height: 50px"><?= !empty($form['term_of_payment']) ? $form['term_of_payment'] : '' ?></textarea>
                        </td>
                        <td valign="top" style=" border: solid 1px #C3C9C9; padding:10px;" align="left" width="400"> 
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>FATTURA - INVOICE</strong></div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Fattura Nr. / Invoice Nr.:</strong></label> <input type="text"name="invoice_number" required value="<?= !empty($form['invoice_number']) ? $form['invoice_number'] : '' ?>"></div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Del / Of</strong> </label> <input type="text"name="del_of" required value="<?= !empty($form['del_of']) ? $form['del_of'] : '' ?>"></div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Cliente / Customer:</strong></label> 

                                <textarea name="customer_name" required style="width: 100%; height: 100px"><?= !empty($form['customer_name']) ? $form['customer_name'] : '' ?></textarea>
                            </div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Partita IVA/ VAT Nr.:</strong></label><input type="text"name="vat_nr" required value="<?= !empty($form['vat_nr']) ? $form['vat_nr'] : '' ?>"></div>
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Codice Fiscale/ Tax Code:</strong></label><input type="text"name="vat_tax_code" required value="<?= !empty($form['vat_tax_code']) ? $form['vat_tax_code'] : '' ?>"></div>
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Rif. D.D.T. Nr.:</strong> </label><input type="text"name="ref_ddt_document_nr" required value="<?= !empty($form['ref_ddt_document_nr']) ? $form['ref_ddt_document_nr'] : '' ?>"></div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Ref. Pro-Forma Invoice Nr.:</strong> </label><input type="text"name="ref_proforma_nr" required value="<?= !empty($form['ref_proforma_nr']) ? $form['ref_proforma_nr'] : '' ?>"></div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Del / Of</strong> </label> <input type="text"name="del_of2" required value="<?= !empty($form['del_of2']) ? $form['del_of2'] : '' ?>"></div>	

                        </td>
                    </tr>
                </table>


            </div>


            <div class="company_name_2" style="padding:20px;  background:#FFF;     font-size:13px;   color:#333;    line-height:22px; width:938px; margin:auto;">
                <table cellpadding="5" cellspacing="1" width="100%" style="margin-top:-15px; border: solid 1px #C3C9C9;">
                    <tr style="background:#078DB9; color:#fff;">
                        <th align="left" width="200">Descrizione dei Beni<br/>Item Description</th>
                        <th>Articolo<br/>Item </th>
                        <th>Q.tà/Nr.:<br/>Q.ty/Nr.:</th>
                        <th>Prezzo Unitario €<br/>Unit Price €</th>
                        <th>I.V.A.<br/>VAT</th>
                        <th>Sconto<br/>Discount</th>
                        <th>Importo €<br/>Amount €</th>
                        <th>#</th>
                    </tr>
                    <tbody id="item_table">


                        <?php
                        $key = 0;

                        if (isset($form['item']) || array_key_exists('item', $form)) {
                            foreach ($form['item'] as $key => $item):
                                ?>
                                <tr id="<?= $key ?>" style="background:<?= $key % 2 == 0 ? "#E0E6E6" : '#fff'; ?>">
                                    <td  align="left"><input type="text" name="item[<?= $key ?>][description]" required value="<?= !empty($item['description']) ? $item['description'] : '' ?>"></td>
                                    <td align="center"><input type="text" name="item[<?= $key ?>][article]"required value="<?= !empty($item['article']) ? $item['article'] : '' ?>"></td>

                                    <td  align="center"><input type="text" name="item[<?= $key ?>][qty]" required value="<?= !empty($item['qty']) ? $item['qty'] : 0 ?>"></td>
                                    <td  align="center"><input type="text" name="item[<?= $key ?>][unit_price]" required value="<?= !empty($item['unit_price']) ? $item['unit_price'] : 0 ?>"></td>
                                    <td  align="center"><input type="text" name="item[<?= $key ?>][vat]" required value="<?= !empty($item['vat']) ? $item['vat'] : 0 ?>"></td>
                                    <td align="center"><input type="text" name="item[<?= $key ?>][discount]" required value="<?= !empty($item['discount']) ? $item['discount'] : 0 ?>"></td>
                                    <td align="center"><input type="text" name="item[<?= $key ?>][amount]" required value="<?= !empty($item['amount']) ? $item['amount'] : 0 ?>"></td>
                                    <td  align="center"> <img src="<?= base_url() ?>assets/images/delete.png" alt="img" class="delete fattura_add_delete" width="16" height="16" border="0" title="Delete"/> <img src="<?= base_url() ?>assets/images/edit.png" class="fattura_add" alt="img" width="16" height="16" border="0" title="Add"/></td>
                                </tr>


                                <?php
                            endforeach;
                            $item = array();
                        }else {
                            ?>

                            <tr id="<?= $key ?>" style="background:<?= $key % 2 == 0 ? "#E0E6E6" : '#fff'; ?>">
                                <td   align="center"><input type="text" name="item[<?= $key ?>][description]" required value="<?= !empty($item['description']) ? $item['description'] : '' ?>"></td>
                                <td align="center"><input type="text" name="item[<?= $key ?>][article]"required value="<?= !empty($item['article']) ? $item['article'] : '' ?>"></td>


                                <td  align="center"><input type="text" name="item[<?= $key ?>][qty]" required value="<?= !empty($item['qty']) ? $item['qty'] : '' ?>"></td>
                                <td align="center"><input type="text" name="item[<?= $key ?>][unit_price]" required value="<?= !empty($item['unit_price']) ? $item['unit_price'] : '' ?>"></td>
                                <td align="center"><input type="text" name="item[<?= $key ?>][vat]" required value="<?= !empty($item['vat']) ? $item['vat'] : '' ?>"></td>
                                <td ><input type="text" name="item[<?= $key ?>][discount]" required value="<?= !empty($item['discount']) ? $item['discount'] : '' ?>"></td>
                                <td ><input type="text" name="item[<?= $key ?>][amount]" required value="<?= !empty($item['amount']) ? $item['amount'] : '' ?>"></td>
                                <td > <img src="<?= base_url() ?>assets/images/delete.png" alt="img" class="delete fattura_add_delete" width="16" height="16" border="0" title="Delete"/> <img src="<?= base_url() ?>assets/images/edit.png" class="fattura_add" alt="img" width="16" height="16" border="0" title="Add"/></td>
                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                    <tr align="left" >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="background:#078DB9; color:#fff;" colspan=2>Spese Accessorie € <br/>Charges € </td>
                        <td ><input type="text" name="accessories_cost" required value="<?= !empty($form['accessories_cost']) ? $form['accessories_cost'] : '' ?>"></td>
                    </tr>


                    <tr align="left" >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="background:#078DB9; color:#fff;" colspan=2>Spese di Trasporto €<br/> Transport Costs €</td>
                        <td ><input type="text" name="transport_cost" required value="<?= !empty($form['transport_cost']) ? $form['transport_cost'] : '' ?>"></td>
                    </tr>

                    <tr align="left" >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="background:#078DB9; color:#fff;" colspan=2> Imponibile €  <br/>Taxable Income €</td>
                        <td ><input type="text" name="income_tax" required value="<?= !empty($form['income_tax']) ? $form['income_tax'] : '' ?>"></td>
                    </tr>

                    <tr align="left" >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="background:#078DB9; color:#fff;" colspan=2>Imposta I.V.A. €<br/>VAT € 22%</td>
                        <td ><input type="text" name="vat_nr" required value="<?= !empty($form['vat_nr']) ? $form['vat_nr'] : '' ?>"></td>
                    </tr>
                    
                    <tr align="left" >
                        <td colspan="4"> </td>
                        <td style="background:#078DB9; color:#111;border: 1px solid #078DB9; line-height: 15px" colspan="2">Totale Quantità € <br/>Total Quantity €</td>
                        <td style="background:#E0E6E6; color:#111;text-align: right;border: 1px solid #078DB9"><input type="text" name="vat_nr" required value="<?= !empty($form['total_quantity']) ? $form['total_quantity'] : '' ?>"></td>
                    </tr>
                    <tr align="left" >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="background:#078DB9; color:#fff;" colspan=2>Totale Fattura € <br/>Total Invoice €</td>
                        <td ><input type="text" name="total_invoice" required value="<?= !empty($form['total_invoice']) ? $form['total_invoice'] : '' ?>"></td>
                    </tr>




                </table>


            </div>

        </div>
        <div style="text-align: right">
            <input type="hidden" name="id" value="<?= !empty($form['id']) ? $form['id'] : '' ?>"/>
            <!-- end body contener--> 

            <input type="submit" name="submit"  value="Submit"/> 
        </div>
    </div>
    <!-- end contener-->
</form>