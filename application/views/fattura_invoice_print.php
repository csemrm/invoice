<?php $this->load->view('_blocks/print_header') ?>
<table cellpadding="5" cellspacing="0" width="100%" style="border: 1px solid #078DB9">
    <tr style="background:#078DB9; color:#333; font-weight: bold">
        <th width="22%" align="left" style="border: 1px solid #078DB9; ">Descrizione dei Beni<br/>Item Description</th>
        <th width="13%" style="border: 1px solid #078DB9">Articolo<br/>Item </th>
        <th width="13%" style="border: 1px solid #078DB9">Q.tà/Nr.:<br/> Q.ty/Nr.:</th>
        <th width="17%" style="border: 1px solid #078DB9">Prezzo Unitario €<br/>Unit Price €</th>
        <th width="12%" style="border: 1px solid #078DB9">I.V.A.<br/> VAT</th>
        <th width="12%" style="border: 1px solid #078DB9">Sconto <br/>Discount</th>
        <th width="11%" style="border: 1px solid #078DB9">Importo € <br/>Amount €</th>
    </tr>
    <?php
    $key = 0;
    foreach ($form['item'] as $key => $item):

        if ($key % 10 == 7) {
            ?>
        </table> 
        <?php $this->load->view('_blocks/print_footer_blank') ?>
        <style>
            .break { page-break-before: always; }
        </style>
        <h1 class="break"></h1>
        <?php $this->load->view('_blocks/print_header') ?>

        <table cellpadding="5" cellspacing="0" width="100%" style="border: 1px solid #078DB9">
            <tr style="background:#078DB9; color:#333; font-weight: bold">
                <th width="22%" align="left" style="border: 1px solid #078DB9; ">Descrizione dei Beni<br/>Item Description</th>
                <th width="13%" style="border: 1px solid #078DB9">Articolo<br/>Item </th>
                <th width="13%" style="border: 1px solid #078DB9">Q.tà/Nr.:<br/> Q.ty/Nr.:</th>
                <th width="17%" style="border: 1px solid #078DB9">Prezzo Unitario €<br/>Unit Price €</th>
                <th width="12%" style="border: 1px solid #078DB9">I.V.A.<br/> VAT</th>
                <th width="12%" style="border: 1px solid #078DB9">Sconto <br/>Discount</th>
                <th width="11%" style="border: 1px solid #078DB9">Importo € <br/>Amount €</th>
            </tr> 

            <?php
        } else {
            ?>

            <tr align="center" style="background:#E0E6E6;">

                <td align="left" style="border: 1px solid #078DB9"><?= !empty($item['description']) ? $item['description'] : '' ?> </td>
                <td align="center" style="border: 1px solid #078DB9"><?= !empty($item['article']) ? $item['article'] : '' ?> </td>
                <td align="right" style="border: 1px solid #078DB9"><?= !empty($item['qty']) ? $item['qty'] : '' ?> </td>
                <td align="right" style="border: 1px solid #078DB9"><?= !empty($item['unit_price']) ? $item['unit_price'] : '' ?> </td>
                <td align="right"style="border: 1px solid #078DB9"><?= !empty($item['vat']) ? $item['vat'] : '' ?> </td>
                <td align="right"style="border: 1px solid #078DB9"><?= !empty($item['discount']) ? $item['discount'] : '' ?> </td>
                <td align="right" style="border: 1px solid #078DB9"><?= !empty($item['amount']) ? $item['amount'] : '' ?> </td>
            </tr> 
        <?php } endforeach; ?> 
</table> 

<?php $this->load->view('_blocks/print_footer') ?>



<!-- end body contener--> 
<!--/td>
</tr>
</table-->

