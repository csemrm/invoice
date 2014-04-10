 
            <table cellpadding="0" cellspacing="0" width="100%" >
                <tr>
                    <td style=" border: solid 1px #C3C9C9; padding:10px; border-right:none; width:400px;font-size:13px;color:#333;">
                        <h1>Dutta  Fashion S.r.l</h1>
                            Sede Operativa 			
                            <p> Via Adda, 13/B</p>
                            <p>  20863 Concorezzo (MB)	</p>		
                            <p> Cell: 327.57.66.420	</p>		
                            <p>  info@duttafashion.it	</p>		
                            <p>  www.duttafashion.it			
                                P. I.V.A. e C.F. IT 08544880969	</p>		
                            "Nr. REA MI - 2032599
                        <div style="border-bottom: solid 1px #C3C9C9; padding:10px;"><strong>Luogo di Destinzione</strong> </div>	
                    </td>
                    <td valign="top" style=" border: solid 1px #C3C9C9; padding:10px;" align="left" width="400">
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>Luogo di Destinzione :</strong><?= !empty($form['invoice_number']) ? $form['invoice_number'] : '' ?></div>	
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>D.D.T. Nr :</strong> <?= !empty($form['del_of']) ? $form['del_of'] : '' ?></div>	
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>Del :</strong>  </div>	
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>Spett.le :</strong> </div>	
                        <div style="border-bottom: solid 1px #C3C9C9; padding:5px;"><strong>P. I.V.A. e C.F :</strong> </div>	
                    </td>
                </tr>
            </table>

        <div class="company_name company_name_2" style="padding:20px;  background:#FFF;  font-size:13px;  color:#333;  line-height:22px; width:980px; margin:auto;">
            <table cellpadding="5" cellspacing="1" width="100%" style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333">
                <tr style="background:#078DB9; color:#fff;width:100px;">
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9; color:#333;width:90px">Quantità/Nr.</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:90px">Descrizione dei Beni</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:90">Articolo</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:100px">Marchio</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:100px">Composizione</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:100px">Colore</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:100px">Taglia</th>
                </tr>
              
                
               <?php
        $key = 0;
//var_dump($form['item']);exit;
        foreach ($form['item'] as $key => $item):
            ?>
            <tr style="background:#078DB9; border: solid 1px #C3C9C9; color:#fff;width:100px;"> 
				<td  width="90" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['qty']) ? $item['qty'] : '' ?> </td>
              
                <td width="90" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['description']) ? $item['description'] : '' ?> </td>
                <td width="90" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['article']) ? $item['article'] : '' ?> </td>
               
                <td width="100" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['marchio']) ? $item['marchio'] : '' ?> </td>
                <td width="100" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['composizione']) ? $item['composizione'] : '' ?> </td>
                <td width="100" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['color']) ? $item['color'] : '' ?> </td>
                <td width="100" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['taglia']) ? $item['taglia'] : '' ?> </td>
            </tr>



        <?php endforeach; ?>

               

               <tr align="center" style="background:#E0E6E6;width:100px;">
        	<td></td>
            <td style="background:#078DB9; border: solid 1px #C3C9C9;color:#333;">Quantità Tot. Nr.</td>
           <td style="background:#078DB9; border: solid 1px #C3C9C9;color:#333;">Tot. Colli Nr.</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Porto</td>
             <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:200px;"></td>
            
        </tr>

             <tr align="left" style="background:#E0E6E6;">
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Aspetto Esteriore dei Beni</td>
          <td width="120" align="center"style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($form['appearance_of_goods']) ? $form['appearance_of_goods'] : '' ?> </td>
        
	
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          <td style="background:#078DB9; color:#333;border: solid 1px #C3C9C9;">Causale del Trasporto</td>
            <td  style="background:#078DB9; color:#333;border: solid 1px #C3C9C9;"><?= !empty($form['cause_del_t']) ? $form['cause_del_t'] : '' ?></td>
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:172px;"></td>
			
        </tr>
        

                <tr align="left" style="background:#E0E6E6;">
            <td style="background:#078DB9;  color:#333;border: solid 1px #C3C9C9;">Trasporto a Cura del</td>
 <td width="120" align="center"style="background:#078DB9;  color:#333;border: solid 1px #C3C9C9;"><?= !empty($item['trasporto_cure']) ? $item['trasporto_cure'] : '' ?> </td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Vettore</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"> </td>
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
        
        </tr>

               <tr align="left" style="background:#E0E6E6;">
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Data e Ora Inizio Trasporto</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($form['data_inizio']) ? $form['data_inizio'] : '' ?></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Firma del Vettore</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($form['f_del_v']) ? $form['f_del_v'] : '' ?> </td>
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          
        </tr>
   
        <tr align="left" style="background:#E0E6E6;border: solid 1px #C3C9C9; color:#333;">
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Data e Ora Fine Trasporto</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($item['d_o_ f_t']) ? $item['d_o_ f_t'] : '' ?></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Firma del Mittente</td>
          
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($item['f_d_m']) ? $item['f_d_m'] : '' ?></td>
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
        </tr>
        

                <tr align="left" style="background:#E0E6E6;">
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Firma del Destinatario</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($form['f_del_d']) ? $form['f_del_d'] : '' ?></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"> </td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
            
        </tr>
        <tr align="left" style="background:#E0E6E6;">
          <td style="background:#B3B300;border: solid 1px #C3C9C9; color:#333;">Annotazioni: </td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($form['annotazioni']) ? $form['annotazioni'] : '' ?></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"> </td>
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
            
        </tr>
		
                 <tr align="left" style="background:#E0E6E6;">
            <td align="center" colspan="7">Dutta Fashion S.r.l.  - Sede Legale Viale E.  Caldara, 24 - 20122 Milano </td>
        </tr>
        
      </table>
      

        </div>

    </div>

    <!-- end body contener--> 

</div>

