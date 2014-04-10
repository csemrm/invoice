<tr id="<?= $key ?>">
    <td  width="190" align="center"><input type="text" name="item[<?= $key ?>][qty]" required value="<?= !empty($item['qty']) ? $item['qty'] : '' ?>"></td>
    <td width="250" align="center"><input type="text" name="item[<?= $key ?>][description]"required value="<?= !empty($item['description']) ? $item['description'] : '' ?>"></td>

    <td width="120" align="center"><input type="text" name="item[<?= $key ?>][article]" required value="<?= !empty($item['article']) ? $item['article'] : '' ?>"></td>
    <td width="120" align="center"><input type="text" name="item[<?= $key ?>][marchio]" required value="<?= !empty($item['marchio']) ? $item['marchio'] : '' ?>"></td>
    <td width="150" align="center"><input type="text" name="item[<?= $key ?>][composizione]" required value="<?= !empty($item['composizione']) ? $item['composizione'] : '' ?>"></td>
    <td align="center"><input type="text" name="item[<?= $key ?>][color]" required value="<?= !empty($item['color']) ? $item['color'] : '' ?>"></td>
    <td  width="50"><input type="text" name="item[<?= $key ?>][taglia]" required value="<?= !empty($item['taglia']) ? $item['taglia'] : '' ?>"></td>
    <td  align="center"> <img src="<?= base_url() ?>assets/images/delete.png" alt="Del"  title="Delete" class="delete ddt_add_delete" width="16" height="16" border="0"/> <img src="<?= base_url() ?>assets/images/edit.png" class="ddt_add" alt="Add" title="Add" width="16" height="16" border="0"/></td>
</tr>