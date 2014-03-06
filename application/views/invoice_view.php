<?php $this->load->view('_blocks/header') ?>
<!--div> <a href="<?= site_url('invoice/printview/' . $form['id']) ?>">Print</a></div-->
<div class="company_name company_name_2">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td width="700"><table cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="350">Numero fattura/invoice Number :</td>
                        <td width="400" align="left" valign="bottom">

                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td width="70"><strong><?= !empty($form['invoice_number']) ? $form['invoice_number'] : '' ?></strong></td>
                                    <td width="50" align="left" valign="top"> del/of </td>
                                    <td width="100" align="left"><strong><?= !empty($form['del_of']) ? $form['del_of'] : '' ?></strong></td>
                                </tr>
                            </table>

                        </td>


                    </tr>
                    <tr>
                        <td width="350">Codice cliente/customer code :</td>
                        <td align="left" width="400"><strong><?= !empty($form['customer_number']) ? $form['customer_number'] : '' ?></strong></td>
                    </tr>
                    <tr>
                        <td width="350">Partita IVA/Codice fiscale - Vat number/tax code :</td>
                        <td align="left" width="400"><strong><?= !empty($form['vat_tax_code']) ? $form['vat_tax_code'] : '' ?></strong></td>
                    </tr>
                </table></td>
            <td width="250" align="left" valign="middle"><h3>Cliente</h3>
                <?= !empty($form['customer_name']) ? $form['customer_name'] : '' ?>
            </td>
        </tr>
    </table>
</div>
<div class="company_name company_name_2">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td width="325" valign="top">Pagamento/payment</td>
            <td align="left" width="630"><strong><?= !empty($form['payment']) ? $form['payment'] : '' ?></strong></td>
        </tr>
        <tr>
            <td width="325" valign="top">Rif. DDT/document of transport nr</td>
            <td align="left" width="630"><strong><?= !empty($form['ref_ddt_document_transport']) ? $form['ref_ddt_document_transport'] : '' ?></strong></td>
        </tr>
    </table>
</div>
<div class="company_name company_name_1 company_name_2">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th width="190">Codice articolo/article code</th>
            <th width="250">Descrizione/description</th>
            <th width="50">Q.ta</th>
            <th width="120">Prezzo unitario</th>
            <th width="120">Sconto/discount</th>
            <th width="150">Importo/Amount</th>
            <th>Iva/Vat</th>
        </tr>
        <?php
        $key = 0;

        foreach ($form['item'] as $key => $item):
            ?>
            <tr>
                <td width="190" align="center"><?= !empty($item['code']) ? $item['code'] : '' ?> </td>
                <td width="250" align="center"><?= !empty($item['description']) ? $item['description'] : '' ?> </td>
                <td  width="50" align="center"><?= !empty($item['qty']) ? $item['qty'] : '' ?> </td>
                <td width="120" align="center"><?= !empty($item['price']) ? $item['price'] : '' ?> </td>
                <td width="120" align="center"><?= !empty($item['discount']) ? $item['discount'] : '' ?> </td>
                <td width="150" align="center"><?= !empty($item['amount']) ? $item['amount'] : '' ?> </td>
                <td width="60" align="center"><?= !empty($item['vat']) ? $item['vat'] : '' ?> </td>
            </tr>



        <?php endforeach; ?>



        <tr>
            <td align="right" colspan="5"><p>Imponibile/taxable income</p>
                <p> Imposta IVA/Vat </p>
                TOTALE FATTURA/TOTAL INVOICE </td>
            <td valign="bottom"><div class="total_invoice"><strong><?= !empty($form['imposta']) ? $form['imposta'] : '' ?></strong></div></td>
            <td></td>
        </tr>
    </table>
</div>
<div class="company_name company_name_2">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td width="305" valign="top">Pagamento/payment</td>
            <td align="left" width=""><strong><?= !empty($form['deadlines_payment']) ? $form['deadlines_payment'] : '' ?></strong></td>
            <td width="150" align="right" valign="top"> Terms of payment</td>
        </tr>
    </table>
</div>
</div>

<?php $this->load->view('_blocks/footer') ?>