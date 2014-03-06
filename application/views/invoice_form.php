<form action="" method="post">
    <?php echo validation_errors(); ?>
    <div class="company_name">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="700"><table cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="350">Numero fattura/invoice Number :</td>
                            <td width="400" align="left" valign="bottom">

                                <table cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td width="100"><input type="text" name="invoice_number" required value="<?= !empty($form['invoice_number']) ? $form['invoice_number'] : '' ?>"> </td>
                                        <td width="50" align="center" valign="top"> del/of </td>
                                        <td><input type="text" name="del_of" required value="<?= !empty($form['del_of']) ? $form['del_of'] : '' ?>"> </td>
                                    </tr>
                                </table>

                            </td>


                        </tr>
                        <tr>
                            <td width="350">Codice cliente/customer code :</td>
                            <td align="left" width="400"><input style="width:337px;" type="text" name="customer_number" required value="<?= !empty($form['customer_number']) ? $form['customer_number'] : '' ?>"></td>
                        </tr>
                        <tr>
                            <td width="350">Partita IVA/Codice fiscale - Vat number/tax code :</td>
                            <td align="left" width="400"><input style="width:337px;" type="text"  name="vat_tax_code" required value="<?= !empty($form['vat_tax_code']) ? $form['vat_tax_code'] : '' ?>"></td>
                        </tr>
                    </table></td>
                <td width="250" align="left" valign="middle"><h3>Cliente</h3>
                    <textarea  name="customer_name" required><?= !empty($form['customer_name']) ? $form['customer_name'] : '' ?></textarea>
                </td>
            </tr>
        </table>
    </div>
    <div class="company_name">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="305" valign="top">Pagamento/payment</td>
                <td align="left" width="630"><input style="width:550px;" type="text" name="payment" required value="<?= !empty($form['payment']) ? $form['payment'] : '' ?>"></td>
            </tr>
            <tr>
                <td width="305" valign="top">Rif. DDT/document of transport nr</td>
                <td align="left" width="630"><input style="width:550px;" type="text" name="ref_ddt_document_transport" required value="<?= !empty($form['ref_ddt_document_transport']) ? $form['ref_ddt_document_transport'] : '' ?>"></td>
            </tr>
        </table>
    </div>
    <div class="company_name company_name_1">
        <table cellpadding="0" cellspacing="0" >
            <thead>
                <tr>
                    <th width="190">Codice articolo/article code</th>
                    <th width="250">Descrizione/description</th>
                    <th width="50">Q.ta</th>
                    <th width="120">Prezzo unitario</th>
                    <th width="120">Sconto/discount</th>
                    <th width="150">Importo/Amount</th>
                    <th>Iva/Vat</th>
                    <th>Iva</th>
                </tr>
            </thead>
            <tbody id="item_table">
                <?php
                $key = 0;
                if (is_array($form['item']) && array_key_exists('item', $form)) {
                    foreach ($form['item'] as $key => $item):
                        
                        ?>
                        <tr id="<?= $key ?>">
                            <td  width="190" align="center"><input type="text" name="item[<?= $key ?>][code]" required value="<?= !empty($item['code']) ? $item['code'] : '' ?>"></td>
                            <td width="250" align="center"><input type="text" name="item[<?= $key ?>][description]"required value="<?= !empty($item['description']) ? $item['description'] : '' ?>"></td>
                            <td  width="50"><input type="text" name="item[<?= $key ?>][qty]" required value="<?= !empty($item['qty']) ? $item['qty'] : 0 ?>"></td>
                            <td width="120" align="center"><input type="text" name="item[<?= $key ?>][price]" required value="<?= !empty($item['price']) ? $item['price'] : 0 ?>"></td>
                            <td width="120" align="center"><input type="text" name="item[<?= $key ?>][discount]" required value="<?= !empty($item['discount']) ? $item['discount'] : 0 ?>"></td>
                            <td width="150" align="center"><input type="text" name="item[<?= $key ?>][amount]" required value="<?= !empty($item['amount']) ? $item['amount'] : 0 ?>"></td>
                            <td align="center"><input type="text" name="item[<?= $key ?>][vat]" required value="<?= !empty($item['vat']) ? $item['vat'] : 0 ?>"></td>
                            <td width="100" align="center"> <img src="<?= base_url() ?>assets/images/delete.png" alt="img" class="delete add_delete" width="16" height="16" border="0"> <img src="<?= base_url() ?>assets/images/edit.png" class="add" alt="img" width="16" height="16" border="0"></td>
                        </tr>


                        <?php
                    endforeach;
                    $item = array();
                }else {
                    ?>

                    <tr id="<?= $key ?>">
                        <td  width="190" align="center"><input type="text" name="item[<?= $key ?>][code]" required value="<?= !empty($item['code']) ? $item['code'] : '' ?>"></td>
                        <td width="250" align="center"><input type="text" name="item[<?= $key ?>][description]"required value="<?= !empty($item['description']) ? $item['description'] : '' ?>"></td>
                        <td  width="50"><input type="text" name="item[<?= $key ?>][qty]" required value="<?= !empty($item['qty']) ? $item['qty'] : '' ?>"></td>
                        <td width="120" align="center"><input type="text" name="item[<?= $key ?>][price]" required value="<?= !empty($item['price']) ? $item['price'] : '' ?>"></td>
                        <td width="120" align="center"><input type="text" name="item[<?= $key ?>][discount]" required value="<?= !empty($item['discount']) ? $item['discount'] : '' ?>"></td>
                        <td width="150" align="center"><input type="text" name="item[<?= $key ?>][amount]" required value="<?= !empty($item['amount']) ? $item['amount'] : '' ?>"></td>
                        <td align="center"><input type="text" name="item[<?= $key ?>][vat]" required value="<?= !empty($item['vat']) ? $item['vat'] : '' ?>"></td>
                        <td width="100" align="center"> <img src="<?= base_url() ?>assets/images/delete.png" alt="img" width="16" height="16" border="0" class="delete"> <img src="<?= base_url() ?>assets/images/edit.png" alt="img" width="16" height="16" class="add" border="0"></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td align="right" colspan="5"><p>Imponibile/taxable income</p>
                        <p> Imposta IVA/Vat </p>
                        TOTALE FATTURA/TOTAL INVOICE </td>
                    <td valign="bottom"><div class="total_invoice"></div></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="company_name">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="305" valign="top">Pagamento/payment</td>
                <td align="left" width=""><input style="width:450px;" type="text" id="deadlines_payment"name="deadlines_payment" required value="<?= !empty($form['deadlines_payment']) ? $form['deadlines_payment'] : '' ?>"></td>
                <td width="150" align="right" valign="top"> Terms of payment</td>
            </tr>
        </table>
    </div>
    <div class="company_name">
        <input type="hidden" name="id" value="<?= !empty($form['id']) ? $form['id'] : '' ?>"/>
        <input type="submit" name="submit" value="submit"/>
    </div>
</div>
</form>

<script>
    $(function() {
        $("#deadlines_payment").datepicker();
    });
</script>