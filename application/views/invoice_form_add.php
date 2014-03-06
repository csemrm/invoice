
<tr id="<?= $key ?>">
    <td  width="190" align="center"><input type="text" name="item[<?= $key ?>][code]" required value="<?= !empty($item['code']) ? $item['code'] : '' ?>"></td>
    <td width="250" align="center"><input type="text" name="item[<?= $key ?>][description]"required value="<?= !empty($item['description']) ? $item['description'] : '' ?>"></td>
    <td  width="50"><input type="text" name="item[<?= $key ?>][qty]" required value="<?= !empty($item['qty']) ? $item['qty'] : '' ?>"></td>
    <td width="120" align="center"><input type="text" name="item[<?= $key ?>][price]" required value="<?= !empty($item['price']) ? $item['price'] : '' ?>"></td>
    <td width="120" align="center"><input type="text" name="item[<?= $key ?>][discount]" required value="<?= !empty($item['discount']) ? $item['discount'] : '' ?>"></td>
    <td width="150" align="center"><input type="text" name="item[<?= $key ?>][amount]" required value="<?= !empty($form['amount']) ? $form['amount'] : '' ?>"></td>
    <td align="center"><input type="text" name="item[<?= $key ?>][vat]" required value="<?= !empty($item['vat']) ? $item['vat'] : '' ?>"></td>
    <td width="100" align="center"> <img src="<?= base_url() ?>assets/images/delete.png" alt="img" class="delete add_delete" width="16" height="16" border="0"> <img src="<?= base_url() ?>assets/images/edit.png" class="add" alt="img" width="16" height="16" border="0"></td>
</tr>
