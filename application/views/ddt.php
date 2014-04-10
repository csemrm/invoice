<?php $this->load->view('_blocks/header') ?>




<div class="company_name company_name_1 company_name_2">
    <table cellpadding="0" cellspacing="0" style="width: 100%">
        <tr>
            <th>D.D.T. Nr.</th>
            <th>Del :</th>
            <th>Spett.le :</th>
           
            <th></th>
        </tr>
		
        <?php foreach ($invoices as $invoice): ?>
            <tr>
			
                <td align="center"><?= $invoice['invoice_number'] ?> </td>
                <td align="center"><?= $invoice['del_of'] ?> </td>
                <td align="center"><?= $invoice['spett_le'] ?> </td>

                <td height="35" width="100" align="center"> <a title="edit" href="<?= site_url('ddt/edit/' . $invoice['id']) ?>"><img src="<?php echo base_url() ?>/assets/images/edit.png" alt="img" width="16" height="16" border="0"></a>
                    <a title="View" href="<?= site_url('ddt/view/' . $invoice['id']) ?>"><img src="<?php echo base_url()?>/assets/images/view.png" alt="img" width="16" height="16" border="0"></a>   <a title="delete" href="<?= site_url('ddt/delete/' . $invoice['id']) ?>"><img src="<?php echo base_url();?>/assets/images/delete.png" alt="img" width="16" height="16" border="0"></a></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>


