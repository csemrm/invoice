            <table cellpadding="5" cellspacing="1" width="100%" style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333">
                <tr style="background:#078DB9; color:#fff;width:100px;font-size:13px">
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9; color:#333;width:90px">Quantità/Nr.</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:90px">Descrizione dei Beni</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:90">Articolo</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:100px">Marchio</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:105px">Composizione</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:100px">Colore</th>
                    <th style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;width:82px">Taglia</th>
                </tr>
              
                
               <?php
        $key = 0;
//var_dump($form['item']);exit;
        foreach ($form['item'] as $key => $item):
            ?>
            <tr style="background:#078DB9; border: solid 1px #C3C9C9; color:#fff;width:100px;font-size:13px"> 
				<td  width="90" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['qty']) ? $item['qty'] : '' ?> </td>
              
                <td width="90" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['description']) ? $item['description'] : '' ?> </td>
                <td width="90" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['article']) ? $item['article'] : '' ?> </td>
               
                <td width="100" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['marchio']) ? $item['marchio'] : '' ?> </td>
                <td width="105" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['composizione']) ? $item['composizione'] : '' ?> </td>
                <td width="100" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['color']) ? $item['color'] : '' ?> </td>
                <td width="82" align="center"style="margin-top:-15px; border: solid 1px #C3C9C9;color:#333;"><?= !empty($item['taglia']) ? $item['taglia'] : '' ?> </td>
            </tr>



        <?php endforeach; ?>

               

               <tr align="center" style="background:#E0E6E6;width:100px;font-size:13px">
        	<td></td>
            <td style="background:#078DB9; border: solid 1px #C3C9C9;color:#333;">Quantità Tot. Nr.</td>
           <td style="background:#078DB9; border: solid 1px #C3C9C9;color:#333;">Tot. Colli Nr.</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"></td>
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Porto</td>
             <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:184px;"></td>
            
        </tr>

             <tr align="left" style="background:#E0E6E6;font-size:13px">
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:180">Aspetto Esteriore dei Beni</td>
          <td  align="center"style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:191px"><?= !empty($form['appearance_of_goods']) ? $form['appearance_of_goods'] : '' ?> </td>
        
	
          <td style="background:#078DB9; color:#333;border: solid 1px #C3C9C9;width:107px">Causale del Trasporto</td>
            <td  style="background:#078DB9; color:#333;border: solid 1px #C3C9C9;width:184px"><?= !empty($form['cause_del_t']) ? $form['cause_del_t'] : '' ?></td>
           
			
        </tr>
        

                <tr align="left" style="background:#E0E6E6;font-size:13px">
            <td style="background:#078DB9;  color:#333;border: solid 1px #C3C9C9;width:180">Trasporto a Cura del</td>
 <td  align="center"style="background:#078DB9;  color:#333;border: solid 1px #C3C9C9;width:191px"><?= !empty($item['trasporto_cure']) ? $item['trasporto_cure'] : '' ?> </td>
         
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Vettore</td>
         
        
        </tr>

               <tr align="left" style="background:#E0E6E6;font-size:13px">
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:180px">Data e Ora Inizio Trasporto</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:191px"><?= !empty($form['data_inizio']) ? $form['data_inizio'] : '' ?></td>
    
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:107px">Firma del Vettore</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($form['f_del_v']) ? $form['f_del_v'] : '' ?> </td>
       
          
        </tr>
   
        <tr align="left" style="background:#E0E6E6;border: solid 1px #C3C9C9; color:#333;font-size:13px">
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:180px">Data e Ora Fine Trasporto</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:191px"><?= !empty($item['d_o_ f_t']) ? $item['d_o_ f_t'] : '' ?></td>
       
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;">Firma del Mittente</td>
          
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;"><?= !empty($item['f_d_m']) ? $item['f_d_m'] : '' ?></td>
         
        </tr>
        

                <tr align="left" style="background:#E0E6E6;font-size:13px">
            <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:180px">Firma del Destinatario</td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:191px"><?= !empty($form['f_del_d']) ? $form['f_del_d'] : '' ?></td>
         
            
        </tr>
        <tr align="left" style="background:#E0E6E6;font-size:13px">
          <td style="background:#B3B300;border: solid 1px #C3C9C9; color:#333;width:180px">Annotazioni: </td>
          <td style="background:#078DB9;border: solid 1px #C3C9C9; color:#333;width:191px"><?= !empty($form['annotazioni']) ? $form['annotazioni'] : '' ?></td>
       
            
        </tr>
		
          <tr align="left" style="background:#E0E6E6;font-size:13px">
            <td align="center" colspan="5">Dutta Fashion S.r.l.  - Sede Legale Viale E.  Caldara, 24 - 20122 Milano </td>
        </tr>
        
      </table>
      

        </div>

    </div>

    <!-- end body contener--> 


