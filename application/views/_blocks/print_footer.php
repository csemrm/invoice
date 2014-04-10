<table cellpadding="5" cellspacing="0" width="100%" style=" border: 1px solid #078DB9">
    <tr align="left" >
        <td colspan="7" style="background:#078DB9; color:#111;border: 1px solid #078DB9; line-height: 15px"> </td>
    </tr> 
    <tr align="left" >
        <td colspan="4"> </td>
        <td style="background:#078DB9; color:#111;border: 1px solid #078DB9; line-height: 15px" colspan="2">Spese Accessorie €<br/>Charges €    </td>
        <td style="background:#E0E6E6; color:#111;text-align: right;border: 1px solid #078DB9"><?= !empty($form['accessories_cost']) ? $form['accessories_cost'] : '' ?></td>
    </tr>

    <tr align="left" >
        <td colspan="4"> </td>
        <td style="background:#078DB9; color:#111;border: 1px solid #078DB9; line-height: 15px" colspan="2">Spese di Trasporto € <br/>Transport Costs €</td>
        <td style="background:#E0E6E6; color:#111;border: 1px solid #078DB9;text-align: right"><?= !empty($form['transport_cost']) ? $form['transport_cost'] : '' ?></td>
    </tr>

    <tr align="left" >
        <td colspan="4"> </td>
        <td style="background:#078DB9; color:#111;border: 1px solid #078DB9; line-height: 15px" colspan="2">Imponibile €  <br/>Taxable Income €</td>
        <td style="background:#E0E6E6; color:#111;border: 1px solid #078DB9;text-align: right"><?= !empty($form['income_tax']) ? $form['income_tax'] : '' ?></td>
    </tr>

    <tr align="left" >
        <td colspan="4"> </td>
        <td style="background:#078DB9; color:#111;border: 1px solid #078DB9; line-height: 15px" colspan="2">Imposta I.V.A. € 22%<br/>VAT € 22%</td>
        <td style="background:#E0E6E6; color:#111;text-align: right;border: 1px solid #078DB9"><?= !empty($form['tax']) ? $form['tax'] : '' ?></td>
    </tr>

    <tr align="left" >
        <td colspan="4"> </td>
        <td style="background:#078DB9; color:#111;border: 1px solid #078DB9; line-height: 15px" colspan="2">Totale Quantità € <br/>Total Quantity €</td>
        <td style="background:#E0E6E6; color:#111;text-align: right;border: 1px solid #078DB9"><?= !empty($form['total_quantity']) ? $form['total_quantity'] : '' ?></td>
    </tr>
    <tr align="left" >
        <td colspan="4"> </td>
        <td style=" color:#111;border: 1px solid #078DB9; line-height: 15px" colspan="2">Totale Fattura € <br/>Total Invoice €</td>
        <td style="color:#111;text-align: right;border: 1px solid #078DB9"><?= !empty($form['total_invoice']) ? $form['total_invoice'] : '' ?></td>
    </tr>
</table> 
</div>