<tr id="<?= $key ?>" style="background:<?= $key % 2 == 0 ? "#E0E6E6" : '#fff'; ?>">
    <td align="center"><input type="text" name="item[<?= $key ?>][description]" required value="<?= !empty($item['description']) ? $item['description'] : '' ?>"></td>
    <td  align="center"><input type="text" name="item[<?= $key ?>][article]"required value="<?= !empty($item['article']) ? $item['article'] : '' ?>"></td>


    <td  align="center"><input type="text" name="item[<?= $key ?>][qty]" required value="<?= !empty($item['qty']) ? $item['qty'] : '' ?>"></td>
    <td  align="center"><input type="text" name="item[<?= $key ?>][unit_price]" required value="<?= !empty($item['unit_price']) ? $item['unit_price'] : '' ?>"></td>
    <td align="center"><input type="text" name="item[<?= $key ?>][vat]" required value="<?= !empty($item['vat']) ? $item['vat'] : '' ?>"></td>
    <td  ><input type="text" name="item[<?= $key ?>][discount]" required value="<?= !empty($item['discount']) ? $item['discount'] : '' ?>"></td>
    <td  ><input type="text" name="item[<?= $key ?>][amount]" required value="<?= !empty($item['amount']) ? $item['amount'] : '' ?>"></td>
    <td  align="center"> <img src="<?= base_url() ?>assets/images/delete.png" alt="img" class="delete fattura_add_delete" width="16" height="16" border="0" title="Delete"/> <img src="<?= base_url() ?>assets/images/edit.png" class="fattura_add" alt="img" width="16" height="16" border="0" title="Add"/></td>

-</tr>