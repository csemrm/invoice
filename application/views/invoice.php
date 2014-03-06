<?php $this->load->view('_blocks/header') ?>




<div class="company_name company_name_1 company_name_2">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th >Numero fattura/invoice Number</th>
            <th>Codice cliente/customer code</th>
            <th >Partita IVA/Codice fiscale - Vat number/tax code </th>
            <th>Pagamento/payment</th>
            <th >Rif. DDT/document of transport nr</th> 
            <th></th>
        </tr>
        <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td align="center"><?= $invoice['invoice_number'] ?> </td>
                <td align="center"><?= $invoice['customer_number'] ?> </td>
                <td align="center"><?= $invoice['vat_tax_code'] ?> </td>
                <td align="center"><?= $invoice['payment'] ?> </td>
                <td align="center"><?= $invoice['ref_ddt_document_transport'] ?> </td>

                <td height="35" width="100" align="center"> <a title="edit" href="<?= site_url('invoice/edit/' . $invoice['id']) ?>"><img src="/assets/images/edit.png" alt="img" width="16" height="16" border="0"></a>
                    <a title="View" href="<?= site_url('invoice/view/' . $invoice['id']) ?>"><img src="/assets/images/view.png" alt="img" width="16" height="16" border="0"></a>   <a title="delete" href="<?= site_url('invoice/delete/' . $invoice['id']) ?>"><img src="/assets/images/delete.png" alt="img" width="16" height="16" border="0"></a></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>


<?php $this->load->view('_blocks/footer') ?>