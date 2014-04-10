<?php $this->load->view('_blocks/header') ?>

<style>
    * {
        margin:0px;
    }
    body {
        background:#e0e6e6;
        font-size:14px;
        font-family:Arial, Helvetica, sans-serif;
    }

</style>


<!-- start contener-->
<div class="contener" style="box-shadow: 0 0 5px #ccc; width:980px; margin:auto;"> 

    <!-- start body contener-->

    <div class="body_contenet">

        <div class="company_name company_name_2" style="padding:20px;
             background:#FFF;
             font-size:13px;
             color:#333;
             line-height:22px; margin:auto;">
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
                        <div style="border-bottom: solid 1px #C3C9C9; padding:10px;"><strong>Luogo di Destinzione</strong> <br/><?= !empty($form['luogo_di_destinzione']) ? $form['luogo_di_destinzione'] : '' ?></div>	
                    </td>
                    <td valign="top" style=" border: solid 1px #C3C9C9; padding:10px;" align="left" width="400">
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>D.D.T. - Documento di trasporto </strong> </div>	
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>D.D.T. Nr :</strong> <?= !empty($form['invoice_number']) ? $form['invoice_number'] : '' ?></div>	
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>Del :</strong> <?= !empty($form['del_of']) ? $form['del_of'] : '' ?></div>	
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>Spett.le :</strong> <?= !empty($form['spett_le']) ? $form['spett_le'] : '' ?> </div>	
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>P. I.V.A. e C.F :</strong> <?= !empty($form['payment']) ? $form['payment'] : '' ?></div>	
                    </td>
                </tr>
            </table>


        </div>
    </div>
    <div class="company_name company_name_2" style="padding:20px; 
         background:#FFF;
         font-size:13px;
         color:#333;
         line-height:22px;  margin:auto;">
        <table cellpadding="5" cellspacing="1" width="100%" style="margin-top:-15px; border: solid 1px #C3C9C9;">
            <tr style="background:#078DB9; color:#fff;">
                <th>Quantità/Nr.</th>
                <th>Descrizione dei Beni</th>
                <th>Articolo</th>
                <th>Marchio</th>
                <th>Composizione</th>
                <th>Colore</th>
                <th>Taglia</th>
            </tr>

            <?php
            $key = 0;
//var_dump($form['item']);exit;
            foreach ($form['item'] as $key => $item):
                ?>
                <tr> 
                    <td  align="center"><?= !empty($item['qty']) ? $item['qty'] : '' ?> </td>

                    <td   align="center"><?= !empty($item['description']) ? $item['description'] : '' ?> </td>
                    <td   align="center"><?= !empty($item['article']) ? $item['article'] : '' ?> </td>

                    <td  align="center"><?= !empty($item['marchio']) ? $item['marchio'] : '' ?> </td>
                    <td  align="center"><?= !empty($item['composizione']) ? $item['composizione'] : '' ?> </td>
                    <td   align="center"><?= !empty($item['color']) ? $item['color'] : '' ?> </td>
                    <td   align="center"><?= !empty($item['taglia']) ? $item['taglia'] : '' ?> </td>
                </tr>



            <?php endforeach; ?>

            <tr align="center" style="background:#E0E6E6;">
                <td></td>
                <td style="background:#666; color:#fff;">Quantità Tot. Nr.</td>
                <td style="background:#666; color:#fff;">Tot. Colli Nr.</td>
                <td></td>
                <td style="background:#666; color:#fff;">Porto</td>
                <td></td>
                <td></td>
            </tr>

            <tr align="left" style="background:#E0E6E6;">
                <td style="background:#078DB9; color:#fff;" colspan="2">Aspetto Esteriore dei Beni</td>
                <td  align="center"><?= !empty($form['appearance_of_goods']) ? $form['appearance_of_goods'] : '' ?> </td>
                <td  align="center"><?= !empty($form['appearance_of_goods']) ? $form['appearance_of_goods'] : '' ?> </td>
                <td></td>
                <td style="background:#078DB9; color:#fff;">Causale del Trasporto</td>
                <td><?= !empty($form['cause_del_t']) ? $form['cause_del_t'] : '' ?></td>
                <td></td>
            </tr>

            <tr align="left" style="background:#E0E6E6;">
                <td style="background:#078DB9; color:#fff;" colspan="2">Trasporto a Cura del</td>
                <td  align="center"><?= !empty($form['trasporto_cure']) ? $form['trasporto_cure'] : '' ?> </td>

                <td style="background:#078DB9; color:#fff;">Vettore</td>
                <td  align="center"><?= !empty($form['vector']) ? $form['vector'] : '' ?> </td>

                <td></td>
                <td></td>
            </tr>

            <tr align="left" style="background:#E0E6E6;">
                <td style="background:#078DB9; color:#fff;" colspan="2">Data e Ora Inizio Trasporto</td>
                <td><?= !empty($form['data_inizio']) ? $form['data_inizio'] : '' ?></td>

                <td style="background:#078DB9; color:#fff;">Firma del Vettore</td>
                <td><?= !empty($form['f_del_v']) ? $form['f_del_v'] : '' ?> </td>
                <td></td>
                <td></td>
            </tr>

            <tr align="left" style="background:#E0E6E6;">
                <td style="background:#078DB9; color:#fff;" colspan="2">Data e Ora Fine Trasporto</td>
                <td><?= !empty($item['f_del_t']) ? $item['f_del_t'] : '' ?></td>

                <td style="background:#078DB9; color:#fff;">Firma del Mittente</td>

                <td><?= !empty($form['f_d_m']) ? $form['f_d_m'] : '' ?></td>
                <td></td><td></td>
            </tr>

            <tr align="left" style="background:#E0E6E6;">
                <td style="background:#078DB9; color:#fff;" colspan="2">Firma del Destinatario</td>
                <td><?= !empty($form['f_del_d']) ? $form['f_del_d'] : '' ?></td>
                <td></td>

                <td> </td>
                <td></td>
                <td></td>
            </tr>
            <tr align="left" style="background:#E0E6E6;">
                <td style="background:#078DB9; color:#fff;" colspan="2">Annotazioni: </td>
                <td><?= !empty($form['annotazioni']) ? $form['annotazioni'] : '' ?></td>

                <td></td>
                <td> </td>
                <td></td>
                <td></td>
            </tr>
            <tr align="left" style="background:#E0E6E6;">
                <td align="center" colspan="7">Dutta Fashion S.r.l.  - Sede Legale Viale E.  Caldara, 24 - 20122 Milano </td>
            </tr>

        </table>


    </div>
    <a href="<?= site_url('ddt/printview/' . $form['id']) ?>">Print</a>
</div>

