<?php $this->load->view('_blocks/header') ?>




<div class="company_name company_name_1 company_name_2">
    <table cellpadding="0" cellspacing="0" style="width: 100%">
        <tr>
            <th>Fattura Nr. / Invoice Nr. </th>
            <th>Del / Of  </th>
            <th>Cliente / Customer</th>
            <th>Partita IVA / VAT Nr. </th>
            <th>Rif. D.D.T. Nr. / Ref. Pro-Forma Invoice Nr. </th>
            <th>Totale Fattura € /Total Invoice € </th>
            <th></th>
        </tr>
        <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td align="center"><?= $invoice['invoice_number'] ?> </td>
                <td align="center"><?= $invoice['del_of'] ?> </td>
                <td align="center"><?= $invoice['customer_number'] ?>: <?= $invoice['customer_name'] ?> </td>
                <td align="center"><?= $invoice['vat_nr'] ?> </td>
                <td align="center"><?= $invoice['ref_ddt_document_nr'] ?> </td>

                <td align="center"><?= $invoice['total_invoice'] ?> </td>
                <td height="35" width="100" align="center"> <a title="edit" href="<?= site_url('fattura_invoice/edit/' . $invoice['id']) ?>"><img src="<?php echo base_url() ?>/assets/images/edit.png" alt="img" width="16" height="16" border="0"></a>
                    <a title="View" href="<?= site_url('fattura_invoice/view/' . $invoice['id']) ?>"><img src="<?php echo base_url() ?>/assets/images/view.png" alt="img" width="16" height="16" border="0"></a>   <a title="delete" href="<?= site_url('fattura_invoice/delete/' . $invoice['id']) ?>"><img src="<?php echo base_url(); ?>/assets/images/delete.png" alt="img" width="16" height="16" border="0"></a></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>


<?php $this->load->view('_blocks/footer') ?>