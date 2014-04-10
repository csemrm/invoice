<style>
    * {
        margin:0px;
    }
    body {
        background:#e0e6e6;
        font-size:14px;
        font-family:Arial, Helvetica, sans-serif;
    }
    input[type="text"]{
        border: solid 1px #afc2c5;
        padding:5px;
        vertical-align:bottom;
        width:100px;
    }
    input[type="text"]:focus, .company_name table tr td input[type="text"]:hover {
        background:#f4f6f6;
        transition: all 300ms ease 0s;
        border: solid 1px #0897c6;
        box-shadow: 2px 1px 3px #CAD3D4 inset;
    }


</style>

<form action="" method="post">
    <!-- start contener-->
    <div class="contener" style="box-shadow: 0 0 5px #ccc; width:980px; margin:auto;"> 

        <!-- start body contener-->

        <div class="body_contenet">

            <div class="company_name company_name_2" style="	padding:20px;
                 background:#FFF;
                 font-size:13px;
                 color:#333;
                 line-height:22px; width:938px; margin:auto;">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style=" border: solid 1px #C3C9C9; padding:10px; border-right:none;" width="400">
                            <div style="border-bottom: solid 1px #C3C9C9;"><h1>Dutta  Fashion S.r.l</h1>
                                Sede Operativa 			
                                <p> Via Adda, 13/B</p>
                                <p>  20863 Concorezzo (MB)	</p>		
                                <p> Cell: 327.57.66.420	</p>		
                                <p>  info@duttafashion.it	</p>		
                                <p>  www.duttafashion.it			
                                    P. I.V.A. e C.F. IT 08544880969	</p>		
                                "Nr. REA MI - 2032599)</div>
                            <div style="border-bottom: solid 1px #C3C9C9; padding:10px 10px 10px 0;"><strong>Luogo di Destinzione :</strong>  <textarea style="width: 100%; height: 50px"  name="luogo_di_destinzione" required><?= !empty($form['luogo_di_destinzione']) ? $form['luogo_di_destinzione'] : '' ?>"</textarea></div>	
                        </td>
                        <td valign="top" style=" border: solid 1px #C3C9C9; padding:10px;" align="left" width="400">
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>D.D.T. - Documento di trasporto </strong>
                                <label>(ex Art. 1 D.P.R. 472/1996)</label></div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>D.D.T. Nr :</strong></label>  <input type="text"name="invoice_number" required value="<?= !empty($form['invoice_number']) ? $form['invoice_number'] : '' ?>"></div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Del :</strong> </label>  <input type="text"name="del_of" required value="<?= !empty($form['del_of']) ? $form['del_of'] : '' ?>"> </div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>Spett.le :</strong></label>   <textarea name="spett_le" style="width: 100%; height: 98px" required><?= !empty($form['spett_le']) ? $form['spett_le'] : '' ?></textarea></div>	
                            <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><label><strong>P. I.V.A. e C.F :</strong></label>   <input type="text"name="payment" required value="<?= !empty($form['payment']) ? $form['payment'] : '' ?>"></div>	
                        </td>
                    </tr>
                </table>


            </div>


            <?php echo validation_errors(); ?>
            <div class=" company_name_2" style="padding:20px; 
                 background:#FFF;
                 font-size:13px;
                 color:#333;
                 line-height:22px; width:938px; margin:auto;">
                <table cellpadding="5" cellspacing="1" width="100%" style="margin-top:-15px; border: solid 1px #C3C9C9;">
                    <thead>
                        <tr style="background:#078DB9; color:#fff;">
                            <th>Quantità/Nr.</th>
                            <th>Descrizione dei Beni</th>
                            <th>Articolo</th>
                            <th>Marchio</th>
                            <th>Composizione</th>
                            <th>Colore</th>
                            <th>Taglia</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="item_table">

                        <?php
                        $key = 0;
                        if (isset($form['item']) || array_key_exists('item', $form)) {
                            foreach ($form['item'] as $key => $item):
                                ?>
                                <tr id="<?= $key ?>">
                                    <td  width="190" align="center"><input type="text" name="item[<?= $key ?>][qty]" required value="<?= !empty($item['qty']) ? $item['qty'] : '' ?>"></td>
                                    <td width="250" align="center"><input type="text" name="item[<?= $key ?>][description]"required value="<?= !empty($item['description']) ? $item['description'] : '' ?>"></td>
                                    <td  width="50"><input type="text" name="item[<?= $key ?>][article]" required value="<?= !empty($item['article']) ? $item['article'] : 0 ?>"></td>
                                    <td width="120" align="center"><input type="text" name="item[<?= $key ?>][marchio]" required value="<?= !empty($item['marchio']) ? $item['marchio'] : 0 ?>"></td>
                                    <td width="120" align="center"><input type="text" name="item[<?= $key ?>][composizione]" required value="<?= !empty($item['composizione']) ? $item['composizione'] : 0 ?>"></td>
                                    <td width="150" align="center"><input type="text" name="item[<?= $key ?>][color]" required value="<?= !empty($item['color']) ? $item['color'] : 0 ?>"></td>
                                    <td align="center"><input type="text" name="item[<?= $key ?>][taglia]" required value="<?= !empty($item['taglia']) ? $item['taglia'] : 0 ?>"></td>
                                    <td width="100" align="center"> <img src="<?= base_url() ?>assets/images/delete.png" alt="img" class="delete fattura_add_delete" width="16" height="16" border="0" title="Delete" /> <img src="<?= base_url() ?>assets/images/edit.png" class="fattura_add" alt="img" width="16" height="16" border="0"  title="Add" /></td>

                                </tr>


                                <?php
                            endforeach;
                            $item = array();
                        }else {
                            ?>

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
                            <?php
                        }
                        ?>


                    </tbody>
                    <tfoot>
                        <tr >
                            <td colspan="6" style="height: 20px; background:#E0E6E6;"> </td>

                        </tr>
                        <tr align="center" style="background:#E0E6E6;">
                            <td></td>
                            <td style="background:#078DB9; color:#fff;"><strong>Quantita Tot Nr.</strong></td>

                            <td style="background:#078DB9; color:#fff;"><strong>Tot Colli Nr.</strong></td>
                            <td></td>
                            <td style="background:#078DB9; color:#fff;"><strong>Porta</strong></td>


                        </tr>

                        <tr align="left" style="background:#E0E6E6;">
                            <td><strong>Aspetto Esteriore dei Beni</strong></td><td align="center" style="background:#078DB9; color:#fff;"><input type="text"name="appearance_of_goods" required value="<?= !empty($form['appearance_of_goods']) ? $form['appearance_of_goods'] : '' ?>"></td>
                            <td></td>  <td></td>
                            <td><strong>Causale del Trasporto</strong></td> 
                            <td align="center" style="background:#078DB9; color:#fff;"><input type="text"name="cause_del_t" required value="<?= !empty($form['cause_del_t']) ? $form['cause_del_t'] : '' ?>"></td>

                            <td></td>
                        </tr>

                        <tr align="left" style="background:#E0E6E6;">
                            <td><strong>Trasporto a Cura del</strong></td>   <td align="center" style="background:#078DB9; color:#fff;"><input type="text"name="trasporto_cure" required value="<?= !empty($form['trasporto_cure']) ? $form['trasporto_cure'] : '' ?>"></td>
                            <td></td>
                            <td><strong> 	Vettore</strong></td> 
                            <td align="center" style="background:#078DB9; color:#fff;"><input type="text"name="vector" required value="<?= !empty($form['vector']) ? $form['vector'] : '' ?>"></td>
                            <td> </td>

                            <td></td>
                        </tr>

                        <tr align="left" style="background:#E0E6E6;"> <td><strong>Data e Ora Inizio Trasporto</strong></td>
                            <td align="center" style="background:#078DB9; color:#fff;"><input type="text" name="data_inizio" required value="<?= !empty($form['data_inizio']) ? $form['data_inizio'] : '' ?>"></td>

                            <td></td><td><strong>Firma del Vettore</strong> </td>
                            <td align="center" style="background:#078DB9; color:#fff;"><input type="text" name="f_del_v" required value="<?= !empty($form['f_del_v']) ? $form['f_del_v'] : '0' ?>"></td>

                            <td></td>
                            <td></td>
                        </tr>

                        <tr align="left" style="background:#E0E6E6;">
                            <td><strong>Data e Ora Fine Trasporto</strong></td>
                            <td align="center" style="background:#078DB9; color:#fff;"><input type="text" name="f_del_t" required value="<?= !empty($form['f_del_t']) ? $form['f_del_t'] : '0' ?>"></td>

                            <td></td>
                            <td><strong> Firma del Mittente</strong></td>
                            <td align="center" style="background:#078DB9; color:#fff;"><input type="text"name="f_d_m" required value="<?= !empty($form['f_d_m']) ? $form['f_d_m'] : '' ?>"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr align="left" style="background:#E0E6E6;">


                            <td><strong>Firma del Destinatario</strong></td>
                            <td align="center" style="background:#078DB9; color:#fff;"><input type="text"name="f_del_d" required value="<?= !empty($form['f_del_d']) ? $form['f_del_d'] : '' ?>"></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr align="left" style="background:#E0E6E6;">

                            <td><strong>Annotazioni: </strong></td>
                            <td align="center" style="background:#078DB9; color:#fff;"><input type="text" name="annotazioni" required value="<?= !empty($form['annotazioni']) ? $form['annotazioni'] : '' ?>"> </td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr align="left" style="background:#E0E6E6;">
                            <td align="center" colspan="7">Dutta Fashion S.r.l.  - Sede Legale Viale E.  Caldara, 24 - 20122 Milano </td>
                        </tr>
                    </tfoot>
                </table>


            </div>

        </div>
        <input type="hidden" name="id" value="<?= !empty($form['id']) ? $form['id'] : '' ?>"/>
        <!-- end body contener--> 
        <input type="submit" name="submit" value="submit"/>
    </div>
    <!-- end contener-->
</form>
