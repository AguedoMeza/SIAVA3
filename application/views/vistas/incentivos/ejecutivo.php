/** FINALIZA VERSION 3(SIAVA3) **/

<?php
/** CREDITOS NUEVOS **/

$nb_c = 0;$nb_c1 = 0;$nb_c2 = 0;$nb_c3 = 0;$nb_c4 = 0;$nb_c5 = 0;
$nb_mo = 0;$nb_mo1 = 0;$nb_mo2 = 0;$nb_mo3 = 0;$nb_mo4 = 0;$nb_mo5 = 0;
$nb_b = 0;$nb_b1 = 0;$nb_b2 = 0;$nb_b3 = 0;$nb_b4 = 0;$nb_b5 = 0;
$total_c = 0;
$total_mo = 0;
$total_b = 0;


if(!empty($this->data['creditos_nuevos'])):
    $count_nb = count($this->data['creditos_nuevos']);
    for($a=0;$a<$count_nb;$a++){
        $cred_nb = $this->data['creditos_nuevos'][$a];
               
        if($a == 0){
            $nb_c1 = $cred_nb[0]->cantidad;
            $nb_mo1 = $cred_nb[0]->monto_otorgado;
            $nb_b1 = $cred_nb[0]->bono;
            
            
        }
        elseif($a == 1){
            $nb_c2 = $cred_nb[0]->cantidad;
            $nb_mo2 = $cred_nb[0]->monto_otorgado;
            $nb_b2 = $cred_nb[0]->bono;
            
        }
        elseif($a == 2){
            $nb_c3 = $cred_nb[0]->cantidad;
            $nb_mo3 = $cred_nb[0]->monto_otorgado;
            $nb_b3 = $cred_nb[0]->bono;
            
        }
        elseif($a == 3){
            $nb_c4 = $cred_nb[0]->cantidad;
            $nb_mo4 = $cred_nb[0]->monto_otorgado;
            $nb_b4 = $cred_nb[0]->bono;
            
        }
        elseif($a == 4){
            $nb_c5 = $cred_nb[0]->cantidad;
            $nb_mo5 = $cred_nb[0]->monto_otorgado;
            $nb_b5 = $cred_nb[0]->bono;
            
        }
   
   }
   
   /* foreach($this->data['creditos_nuevos_t'] as $nb):
        $nb_c = $nb->cantidad;
        $nb_mo = $nb->monto_otorgado;
        $nb_b = $nb->bono;
    endforeach;*/
endif;


/*
 * 
 * CREDITOS RENOVADOS
 * 
 */
$pb_c = 0;$pb_c1 = 0;$pb_c2 = 0;$pb_c3 = 0;$pb_c4 = 0;$pb_c5 = 0;
$pb_mo = 0;$pb_mo1 = 0;$pb_mo2 = 0;$pb_mo3 = 0;$pb_mo4 = 0;$pb_mo5 = 0;
$pb_b = 0;$pb_b1 = 0;$pb_b2 = 0;$pb_b3 = 0;$pb_b4 = 0;$pb_b5 = 0;

if(!empty($this->data['creditos_renovacion'])):
    
    //var_dump($this->data['creditos_renovacion']);
     $count_pb = count($this->data['creditos_renovacion']);
   for($a=0;$a<$count_pb;$a++){
       
        $cred_pb = $this->data['creditos_renovacion'][$a];
        
        if($a == 0){
            $pb_c1 = $cred_pb[0]->cantidad;
            $pb_mo1 = $cred_pb[0]->monto_otorgado;
            $pb_b1 = $cred_pb[0]->bono;
        }elseif($a == 1){
            $pb_c2 = $cred_pb[0]->cantidad;
            $pb_mo2 = $cred_pb[0]->monto_otorgado;
            $pb_b2 = $cred_pb[0]->bono;
        }elseif($a == 2){
            $pb_c3 = $cred_pb[0]->cantidad;
            $pb_mo3 = $cred_pb[0]->monto_otorgado;
            $pb_b3 = $cred_pb[0]->bono;
        }elseif($a == 3){
            $pb_c4 = $cred_pb[0]->cantidad;
            $pb_mo4 = $cred_pb[0]->monto_otorgado;
            $pb_b4 = $cred_pb[0]->bono;
        }elseif($a == 4){
            $pb_c5 = $cred_pb[0]->cantidad;
            $pb_mo5 = $cred_pb[0]->monto_otorgado;
            $pb_b5 = $cred_pb[0]->bono;
        }
                
        
        }
    
    
  /*  foreach($this->data['creditos_renovacion_t'] as $pb):
        $pb_c = $pb->cantidad;
        $pb_mo = $pb->monto_otorgado;
        $pb_b = $pb->bono;
    endforeach;    */
endif;


/*
 * 
 * 
 */
$porcentaje_rc = 0;
if(!empty(   $this->data['porcentaje_reactivacion_campania'])):
    foreach (   $this->data['porcentaje_reactivacion_campania'] as $reac):
    $porcentaje_rc = $reac->valor;    
    endforeach;    
endif;


/*
 * 
 * CREDITOS REACTIVADOS
 * 
 */
$fb_c = 0;$fb_c1 = 0;$fb_c2 = 0;$fb_c3 = 0;$fb_c4 = 0;$fb_c5 = 0;
$fb_mo = 0;$fb_mo1 = 0;$fb_mo2 = 0;$fb_mo3 = 0;$fb_mo4 = 0;$fb_mo5 = 0;
$fb_b = 0;$fb_b1 = 0;$fb_b2 = 0;$fb_b3 = 0;$fb_b4 = 0;$fb_b5 = 0;
$fb_factor_total1=0;$fb_factor_total2=0;$fb_factor_total3=0;$fb_factor_total4=0;$fb_factor_total5=0;
if(!empty($this->data['creditos_reactivacion'])):
    
      //var_dump($this->data['creditos_reactivacion']);
     $count_fb = count($this->data['creditos_reactivacion']);
   for($a=0;$a<$count_fb;$a++){
       
        $cred_fb = $this->data['creditos_reactivacion'][$a];
        
        if($a == 0){
            $fb_c1 = $cred_fb[0]->cantidad;
            $fb_mo1 = $cred_fb[0]->monto_otorgado;
            $fb_b1 = $cred_fb[0]->bono;
            $fb_factor_total1 = $cred_fb[0]->factor;

        }elseif($a == 1){
            $fb_c2 = $cred_fb[0]->cantidad;
            $fb_mo2 = $cred_fb[0]->monto_otorgado;
            $fb_b2 = $cred_fb[0]->bono;
            $fb_factor_total2 = $cred_fb[0]->factor;
            
        }elseif($a == 2){
            $fb_c3 = $cred_fb[0]->cantidad;
            $fb_mo3 = $cred_fb[0]->monto_otorgado;
            $fb_b3 = $cred_fb[0]->bono;
            $fb_factor_total3 = $cred_fb[0]->factor;

        }elseif($a == 3){
            $fb_c4 = $cred_fb[0]->cantidad;
            $fb_mo4 = $cred_fb[0]->monto_otorgado;
            $fb_b4 = $cred_fb[0]->bono;
            $fb_factor_total4 = $cred_fb[0]->factor;

        }elseif($a == 4){
            $fb_c5 = $cred_fb[0]->cantidad;
            $fb_mo5 = $cred_fb[0]->monto_otorgado;
            $fb_b5 = $cred_fb[0]->bono;
            $fb_factor_total5 = $cred_fb[0]->factor;

        }
      
   }   
           
   /*  foreach($this->data['creditos_reactivacion_t'] as $fb):
        $fb_c = $fb->cantidad;
        $fb_mo = $fb->monto_otorgado;
        $fb_b = $fb->bono;
     endforeach;    */
endif;


/*
 * 
 * REACTIVADOS TRADICIONAL
 * 
 * 
 */
$fbt_c = 0;$fbt_c1 = 0;$fbt_c2 = 0;$fbt_c3 = 0;$fbt_c4 = 0;$fbt_c5 = 0;
$fbt_mo = 0;$fbt_mo1 = 0;$fbt_mo2 = 0;$fbt_mo3 = 0;$fbt_mo4 = 0;$fbt_mo5 = 0;
$fbt_b = 0;$fbt_b1 = 0;$fbt_b2 = 0;$fbt_b3 = 0;$fbt_b4 = 0;$fbt_b5 = 0;

if(!empty($this->data['credito_reactivacion_tradicional'])):
    
    $count_fbt = count($this->data['credito_reactivacion_tradicional']);
     
     for($a=0;$a<$count_fbt;$a++){
         
        $cred_fbt = $this->data['credito_reactivacion_tradicional'][$a];
        
        if($a == 0){
            $fbt_c1 = $cred_fbt[0]->cantidad;
            $fbt_mo1 = $cred_fbt[0]->monto_otorgado;
            $fbt_b1 = $cred_fbt[0]->bono;
            $factor = $cred_fbt[0]->factor;               
        }elseif($a==1){
            $fbt_c2 = $cred_fbt[0]->cantidad;
            $fbt_mo2 = $cred_fbt[0]->monto_otorgado;
            $fbt_b2 = $cred_fbt[0]->bono;
        }elseif($a==2){
            $fbt_c3 = $cred_fbt[0]->cantidad;
            $fbt_mo3 = $cred_fbt[0]->monto_otorgado;
            $fbt_b3 = $cred_fbt[0]->bono;
        }elseif($a==3){
            $fbt_c4 = $cred_fbt[0]->cantidad;
            $fbt_mo4 = $cred_fbt[0]->monto_otorgado;
            $fbt_b4 = $cred_fbt[0]->bono;
        }elseif($a==4){
            $fbt_c5 = $cred_fbt[0]->cantidad;
            $fbt_mo5 = $cred_fbt[0]->monto_otorgado;
            $fbt_b5 = $cred_fbt[0]->bono;
        }
        
        }
    
    
endif;
$calculoBonoMactual =  $fb_factor_total1  * $fbt_mo1;
$calculoBonoMactual2 =  $fb_factor_total2  * $fbt_mo2;
$calculoBonoMactual3 =  $fb_factor_total3  * $fbt_mo3;
$calculoBonoMactual4 =  $fb_factor_total4  * $fbt_mo4;
$calculoBonoMactual5 =  $fb_factor_total5  * $fbt_mo5;
/*
 * 
 * REACTIVADOS CAMAPAÑA
 * 
 */
$fbc_c = 0;$fbc_c1 = 0;$fbc_c2 = 0;$fbc_c3 = 0;$fbc_c4 = 0;$fbc_c5 = 0;
$fbc_mo = 0;$fbc_mo1 = 0;$fbc_mo2 = 0;$fbc_mo3 = 0;$fbc_mo4 = 0;$fbc_mo5 = 0;
$fbc_b = 0;$fbc_b1 = 0;$fbc_b2 = 0;$fbc_b3 = 0;$fbc_b4 = 0;$fbc_b5 = 0;
if(!empty($this->data['credito_reactivacion_campania'])):
    
    $count_fbc = count($this->data['credito_reactivacion_campania']);
     
     for($a=0;$a<$count_fbc;$a++){
         
        $cred_fbc = $this->data['credito_reactivacion_campania'][$a];
        
        if($a == 0){
            $fbc_c1 = $cred_fbc[0]->cantidad;
            $fbc_mo1 = $cred_fbc[0]->monto_otorgado;
            $fbc_b1 = (($cred_fbc[0]->monto_otorgado*$fb_factor_total1) *$porcentaje_rc);            
        }elseif($a==1){
            $fbc_c2 = $cred_fbc[0]->cantidad;
            $fbc_mo2 = $cred_fbc[0]->monto_otorgado;
            $fbc_b2 =  (($cred_fbc[0]->monto_otorgado*$fb_factor_total2) *$porcentaje_rc);
        }elseif($a==2){
            $fbc_c3 = $cred_fbc[0]->cantidad;
            $fbc_mo3 = $cred_fbc[0]->monto_otorgado;
            $fbc_b3 =  (($cred_fbc[0]->monto_otorgado*$fb_factor_total3)*$porcentaje_rc);
        }elseif($a==3){
            $fbc_c4 = $cred_fbc[0]->cantidad;
            $fbc_mo4 = $cred_fbc[0]->monto_otorgado;
            $fbc_b4 =  (($cred_fbc[0]->monto_otorgado*$fb_factor_total4)*$porcentaje_rc);
        }elseif($a==4){
            $fbc_c5 = $cred_fbc[0]->cantidad;
            $fbc_mo5 = $cred_fbc[0]->monto_otorgado;
            $fbc_b5 =  (($cred_fbc[0]->monto_otorgado*$fb_factor_total5)*$porcentaje_rc);
        }
        
        }
    
    
endif;



//var_dump($this->data['credito_reactivacion_campania']);

$total_c =  $nb_c+$pb_c+$fb_c;
$total_mo = $nb_mo+$pb_mo+$fb_mo;
$total_b = $nb_b+$pb_b+$fb_b;        


$total_c_s1=0;
$total_c_s2=0;
$total_c_s3=0;
$total_c_s4=0;
$total_c_s5=0;

$total_mo_s1=0;
$total_mo_s2=0;
$total_mo_s3=0;
$total_mo_s4=0;       
$total_mo_s5=0;
        
$total_b_s1 = 0;
$total_b_s2 = 0;
$total_b_s3 = 0;
$total_b_s4 = 0;
$total_b_s5 = 0;

$total_c_s1 = $nb_c1+$pb_c1+$fb_c1;
$total_mo_s1 = $nb_mo1+$pb_mo1+$fb_mo1;
$total_b_s1 = $nb_b1 +  $pb_b1 + $calculoBonoMactual + $fbc_b1;



// $bonoTotal = $nb_b1 +  $pb_b1 + $fbt_b1+$fbc_b1; //prueba
        
$total_c_s2= $nb_c2+$pb_c2+$fb_c2;
$total_mo_s2= $nb_mo2+$pb_mo2+$fb_mo2;
$total_b_s2 = $nb_b2 +  $pb_b2  + $calculoBonoMactual2 + $fbc_b2;

$total_c_s3= $nb_c3+$pb_c3+$fb_c3;
$total_mo_s3=$nb_mo3+$pb_mo3+$fb_mo3;
$total_b_s3 = $nb_b3 +  $pb_b3  + $calculoBonoMactual3 + $fbc_b3;

$total_c_s4= $nb_c4+$pb_c4+$fb_c4;
$total_mo_s4=$nb_mo4+$pb_mo4+$fb_mo4;
$total_b_s4 = $nb_b4 +  $pb_b4  + $calculoBonoMactual4 + $fbc_b4;

$total_c_s5= $nb_c5+$pb_c5+$fb_c5;
$total_mo_s5=$nb_mo5+$pb_mo5+$fb_mo5;

$total_b_s5 = $nb_b5 + $pb_b5 + $calculoBonoMactual5 + $fbc_b5;


$total_c_ma = 0;
$total_mo_ma = 0;
$total_b_ma = 0;


/*
 * 
 *  MESES ANTERIORES
 * 
 */

$nb_c_ma = 0;$nb_c_ma1 = 0;$nb_c_ma2 = 0;$nb_c_ma3 = 0;$nb_c_ma4 = 0;$nb_c_ma5 = 0;
$nb_mo_ma = 0;$nb_mo_ma1 = 0;$nb_mo_ma2 = 0;$nb_mo_ma3 = 0;$nb_mo_ma4 = 0;$nb_mo_ma5 = 0;
$nb_b_ma = 0;$nb_b_ma1 = 0;$nb_b_ma2 = 0;$nb_b_ma3 = 0;$nb_b_ma4 = 0;$nb_b_ma5 = 0;

if(!empty($this->data['creditos_nuevos_ma'])):
    
     //var_dump($this->data['creditos_nuevos_ma']);
     $count_cma = count($this->data['creditos_nuevos_ma']);
     
     for($a=0;$a<$count_cma;$a++){
         
        $cred_cma = $this->data['creditos_nuevos_ma'][$a];        
        if($a == 0){
            $nb_c_ma1 = $cred_cma[0]->cantidad;
            $nb_mo_ma1 = $cred_cma[0]->monto_otorgado;
            $nb_b_ma1 = $cred_cma[0]->bono;
            
        }elseif($a==1){
            $nb_c_ma2 = $cred_cma[0]->cantidad;
            $nb_mo_ma2 = $cred_cma[0]->monto_otorgado;
            $nb_b_ma2 = $cred_cma[0]->bono;
            
        }elseif($a==2){
            $nb_c_ma3 = $cred_cma[0]->cantidad;
            $nb_mo_ma3 = $cred_cma[0]->monto_otorgado;
            $nb_b_ma3 = $cred_cma[0]->bono;
            
        }elseif($a==3){
            $nb_c_ma4 = $cred_cma[0]->cantidad;
            $nb_mo_ma4 = $cred_cma[0]->monto_otorgado;
            $nb_b_ma4 = $cred_cma[0]->bono;
            
        }elseif($a==4){
            $nb_c_ma5 = $cred_cma[0]->cantidad;
            $nb_mo_ma5 = $cred_cma[0]->monto_otorgado;
            $nb_b_ma5 = $cred_cma[0]->bono;
            
        }
        
        
   }
    
   //  var_dump($this->data['creditos_nuevos_ma_t']);
 /*   foreach($this->data['creditos_nuevos_ma_t'] as $nbma):    
    $nb_c_ma =  $nbma->cantidad;
    $nb_mo_ma = $nbma->monto_otorgado;
    $nb_b_ma = $nbma->bono;    
    endforeach;*/
endif;


$pb_c_ma = 0;$pb_c_ma1 = 0;$pb_c_ma2 = 0;$pb_c_ma3 = 0;$pb_c_ma4 = 0;$pb_c_ma5 = 0;
$pb_mo_ma = 0;$pb_mo_ma1 = 0;$pb_mo_ma2 = 0;$pb_mo_ma3 = 0;$pb_mo_ma4 = 0;$pb_mo_ma5 = 0;
$pb_b_ma = 0;$pb_b_ma1 = 0;$pb_b_ma2 = 0;$pb_b_ma3 = 0;$pb_b_ma4 = 0;$pb_b_ma5 = 0;

if(!empty($this->data['creditos_renovacion_ma'])):
    
   //  var_dump($this->data['creditos_renovacion_ma']);   
     $count_pbma = count($this->data['creditos_renovacion_ma']);
     
     for($b=0;$b<$count_pbma;$b++){
         
        $cred_pbma = $this->data['creditos_renovacion_ma'][$b];
        
        if($b == 0){
            $pb_c_ma1 = $cred_pbma[0]->cantidad;
            $pb_mo_ma1 = $cred_pbma[0]->monto_otorgado;
            $pb_b_ma1 = $cred_pbma[0]->bono;
            
        }elseif($b==1){
            $pb_c_ma2 = $cred_pbma[0]->cantidad;
            $pb_mo_ma2 = $cred_pbma[0]->monto_otorgado;
            $pb_b_ma2 = $cred_pbma[0]->bono;
            
        }elseif($b==2){
            $pb_c_ma3 = $cred_pbma[0]->cantidad;
            $pb_mo_ma3 = $cred_pbma[0]->monto_otorgado;
            $pb_b_ma3 = $cred_pbma[0]->bono;
            
        }elseif($b==3){
            $pb_c_ma4 = $cred_pbma[0]->cantidad;
            $pb_mo_ma4 = $cred_pbma[0]->monto_otorgado;
            $pb_b_ma4 = $cred_pbma[0]->bono;
            
        }elseif($b==4){
            $pb_c_ma5 = $cred_pbma[0]->cantidad;
            $pb_mo_ma5 = $cred_pbma[0]->monto_otorgado;
            $pb_b_ma5 = $cred_pbma[0]->bono;
            
        }
        }
     //   var_dump($this->data['creditos_renovacion_ma_t']);
   /*  foreach($this->data['creditos_renovacion_ma_t'] as $pbma):
        $pb_c_ma = $pbma->cantidad;
        $pb_mo_ma = $pbma->monto_otorgado;
        $pb_b_ma = $pbma->bono;        
        endforeach;*/
endif;

$fb_c_ma = 0;$fb_c_ma1 = 0;$fb_c_ma2 = 0;$fb_c_ma3 = 0;$fb_c_ma4 = 0;$fb_c_ma5 = 0;
$fb_mo_ma = 0;$fb_mo_ma1 = 0;$fb_mo_ma2 = 0;$fb_mo_ma3 = 0;$fb_mo_ma4 = 0;$fb_mo_ma5 = 0;
$fb_b_ma = 0;$fb_b_ma1 = 0;$fb_b_ma2 = 0;$fb_b_ma3 = 0;$fb_b_ma4 = 0;$fb_b_ma5 = 0;
$fb_factor_total_ma1=0;$fb_factor_total_ma2=0;$fb_factor_total_ma3=0;$fb_factor_total_ma4=0;$fb_factor_total_ma5=0;

if(!empty($this->data['creditos_reactivacion_ma'])):
    
     //var_dump($this->data['creditos_reactivacion_ma']);   
     $count_fbma = count($this->data['creditos_reactivacion_ma']);
     
     for($a=0;$a<$count_fbma;$a++){
         
        $cred_fbma = $this->data['creditos_reactivacion_ma'][$a];
        
        if($a == 0){
            $fb_c_ma1 = $cred_fbma[0]->cantidad;
            $fb_mo_ma1 = $cred_fbma[0]->monto_otorgado;
            $fb_b_ma1 = $cred_fbma[0]->bono;
            $fb_factor_total_ma1 =  $cred_fbma[0]->factor; 
        }elseif($a==1){
            $fb_c_ma2 = $cred_fbma[0]->cantidad;
            $fb_mo_ma2 = $cred_fbma[0]->monto_otorgado;
            $fb_b_ma2 = $cred_fbma[0]->bono;
            $fb_factor_total_ma2 =  $cred_fbma[0]->factor; 
        }elseif($a==2){
            $fb_c_ma3 = $cred_fbma[0]->cantidad;
            $fb_mo_ma3 = $cred_fbma[0]->monto_otorgado;
            $fb_b_ma3 = $cred_fbma[0]->bono;
            $fb_factor_total_ma3 =  $cred_fbma[0]->factor; 
        }elseif($a==3){
            $fb_c_ma4 = $cred_fbma[0]->cantidad;
            $fb_mo_ma4 = $cred_fbma[0]->monto_otorgado;
            $fb_b_ma4 = $cred_fbma[0]->bono;
            $fb_factor_total_ma4 =  $cred_fbma[0]->factor; 
        }elseif($a==4){
            $fb_c_ma5 = $cred_fbma[0]->cantidad;
            $fb_mo_ma5 = $cred_fbma[0]->monto_otorgado;
            $fb_b_ma5 = $cred_fbma[0]->bono;
            $fb_factor_total_ma5 =  $cred_fbma[0]->factor; 
        }
        
        }
       // var_dump($this->data['creditos_reactivacion_ma_t']);   
 /* foreach($this->data['creditos_reactivacion_ma_t'] as $fbma):
    $fb_c_ma = $fbma->cantidad;
    $fb_mo_ma = $fbma->monto_otorgado;
    $fb_b_ma = $fbma->bono;    
    $fb_factor_total_ma =  $fbma->factor; 
  endforeach;*/
endif;

/*
 * 
 * REACTIVACION TRADICIONAL
 * 
 */

$fbt_c_ma = 0;$fbt_c_ma1 = 0;$fbt_c_ma2 = 0;$fbt_c_ma3 = 0;$fbt_c_ma4 = 0;$fbt_c_ma5 = 0;
$fbt_mo_ma = 0;$fbt_mo_ma1 = 0;$fbt_mo_ma2 = 0;$fbt_mo_ma3 = 0;$fbt_mo_ma4 = 0;$fbt_mo_ma5 = 0;
$fbt_b_ma = 0;$fbt_b_ma1 = 0;$fbt_b_ma2 = 0;$fbt_b_ma3 = 0;$fbt_b_ma4 = 0;$fbt_b_ma5 = 0;
if(!empty($this->data['credito_reactivacion_tradicional_ma'])):
    
    $count_fbtma = count($this->data['credito_reactivacion_tradicional_ma']);
     
     for($a=0;$a<$count_fbtma;$a++){
         
        $cred_fbtma = $this->data['credito_reactivacion_tradicional_ma'][$a];
        
        if($a == 0){
            $fbt_c_ma1 = $cred_fbtma[0]->cantidad;
            $fbt_mo_ma1 = $cred_fbtma[0]->monto_otorgado;
            $fbt_b_ma1 = $cred_fbtma[0]->bono;            
        }elseif($a==1){
            $fbt_c_ma2 = $cred_fbtma[0]->cantidad;
            $fbt_mo_ma2 = $cred_fbtma[0]->monto_otorgado;
            $fbt_b_ma2 = $cred_fbtma[0]->bono;
        }elseif($a==2){
            $fbt_c_ma3 = $cred_fbtma[0]->cantidad;
            $fbt_mo_ma3 = $cred_fbtma[0]->monto_otorgado;
            $fbt_b_ma3 = $cred_fbtma[0]->bono;
        }elseif($a==3){
            $fbt_c_ma4 = $cred_fbtma[0]->cantidad;
            $fbt_mo_ma4 = $cred_fbtma[0]->monto_otorgado;
            $fbt_b_ma4 = $cred_fbtma[0]->bono;
        }elseif($a==4){
            $fbt_c_ma5 = $cred_fbtma[0]->cantidad;
            $fbt_mo_ma5 = $cred_fbtma[0]->monto_otorgado;
            $fbt_b_ma5 = $cred_fbtma[0]->bono;
            //$montoPrueba = $cred_fbtma[0]->monto_otorgado;
            
        }
        
        }
    
    
endif;


$calculoBono5 =  $fb_factor_total_ma5 * $fbt_mo_ma5;
$calculoBono4 =  $fb_factor_total_ma4 * $fbt_mo_ma4;
$calculoBono3 =  $fb_factor_total_ma3 * $fbt_mo_ma3;
$calculoBono2 =  $fb_factor_total_ma2 * $fbt_mo_ma2;
$calculoBono1 =  $fb_factor_total_ma1 * $fbt_mo_ma1;
/*
 * 
 * REACTIVACION CAMPAÑA
 * 
 */




$fbc_c_ma = 0;$fbc_c_ma1 = 0;$fbc_c_ma2 = 0;$fbc_c_ma3 = 0;$fbc_c_ma4 = 0;$fbc_c_ma5 = 0;
$fbc_mo_ma = 0;$fbc_mo_ma1 = 0;$fbc_mo_ma2 = 0;$fbc_mo_ma3 = 0;$fbc_mo_ma4 = 0;$fbc_mo_ma5 = 0;
$fbc_b_ma = 0;$fbc_b_ma1 = 0;$fbc_b_ma2 = 0;$fbc_b_ma3 = 0;$fbc_b_ma4 = 0;$fbc_b_ma5 = 0;
if(!empty($this->data['credito_reactivacion_campania_ma'])):
    
    $count_fbcma = count($this->data['credito_reactivacion_campania_ma']);
     
     for($a=0;$a<$count_fbcma;$a++){
         
        $cred_fbcma = $this->data['credito_reactivacion_campania_ma'][$a];
        
        if($a == 0){
            $fbc_c_ma1 = $cred_fbcma[0]->cantidad;
            $fbc_mo_ma1 = $cred_fbcma[0]->monto_otorgado;
            $fbc_b_ma1 = (($cred_fbcma[0]->monto_otorgado*$fb_factor_total_ma1) *$porcentaje_rc);            
        }elseif($a==1){
            $fbc_c_ma2 = $cred_fbcma[0]->cantidad;
            $fbc_mo_ma2 = $cred_fbcma[0]->monto_otorgado;
            $fbc_b_ma2 =  (($cred_fbcma[0]->monto_otorgado*$fb_factor_total_ma2) *$porcentaje_rc);
        }elseif($a==2){
            $fbc_c_ma3 = $cred_fbcma[0]->cantidad;
            $fbc_mo_ma3 = $cred_fbcma[0]->monto_otorgado;
            $fbc_b_ma3 =  (($cred_fbcma[0]->monto_otorgado*$fb_factor_total_ma3)*$porcentaje_rc);
        }elseif($a==3){
            $fbc_c_ma4 = $cred_fbcma[0]->cantidad;
            $fbc_mo_ma4 = $cred_fbcma[0]->monto_otorgado;
            $fbc_b_ma4 =  (($cred_fbcma[0]->monto_otorgado*$fb_factor_total_ma4)*$porcentaje_rc);
        }elseif($a==4){
            $fbc_c_ma5 = $cred_fbcma[0]->cantidad;
            $fbc_mo_ma5 = $cred_fbcma[0]->monto_otorgado;
            $fbc_b_ma5 =  (($cred_fbcma[0]->monto_otorgado*$fb_factor_total_ma5)*$porcentaje_rc);
        }
        
        }
    
    
endif;

//var_dump( $this->data['creditos_reactivacion_ma_t']);
//var_dump( $this->data['creditos_reactivacion_ma']);


$total_c_ma = $nb_c_ma + $pb_c_ma + $fb_c_ma;
$total_mo_ma = $nb_mo_ma + $pb_mo_ma + $fb_mo_ma;
$total_b_ma = $nb_b_ma + $pb_b_ma + $fb_b_ma;




$total_c_ma_s1=0;
$total_c_ma_s2=0;
$total_c_ma_s3=0;
$total_c_ma_s4=0;
$total_c_ma_s5=0;

$total_mo_ma_s1=0;
$total_mo_ma_s2=0;
$total_mo_ma_s3=0;
$total_mo_ma_s4=0;       
$total_mo_ma_s5=0;;

$total_b_ma_s1=0;
$total_b_ma_s2=0;
$total_b_ma_s3=0;
$total_b_ma_s4=0;
$total_b_ma_s5=0;

$total_c_ma_s1 = $nb_c_ma1+$pb_c_ma1+$fb_c_ma1;
$total_mo_ma_s1 = $nb_mo_ma1+$pb_mo_ma1+$fb_mo_ma1;
$total_b_ma_s1 = $nb_b_ma1 + $pb_b_ma1 + $calculoBono1 +$fbc_b_ma1;
        
$total_c_ma_s2= $nb_c_ma2+$pb_c_ma2+$fb_c_ma2;
$total_mo_ma_s2=  $nb_mo_ma2+$pb_mo_ma2+$fb_mo_ma2;
$total_b_ma_s2 = $nb_b_ma2 + $pb_b_ma2 + $calculoBono2 +$fbc_b_ma2;

$total_c_ma_s3= $nb_c_ma3+$pb_c_ma3+$fb_c_ma3;
$total_mo_ma_s3= $nb_mo_ma3+$pb_mo_ma3+$fb_mo_ma3;
$total_b_ma_s3 = $nb_b_ma3 + $pb_b_ma3 + $calculoBono3 +$fbc_b_ma3;

$total_c_ma_s4= $nb_c_ma4+$pb_c_ma4+$fb_c_ma4;
$total_mo_ma_s4= $nb_mo_ma4+$pb_mo_ma4+$fb_mo_ma4;
$total_b_ma_s4 = $nb_b_ma4 + $pb_b_ma4 + $calculoBono4 + $fbc_b_ma4;


$total_c_ma_s5= $nb_c_ma5+$pb_c_ma5+$fb_c_ma5;
$total_mo_ma_s5= $nb_mo_ma5+$pb_mo_ma5+$fb_mo_ma5;
$total_b_ma_s5 = $nb_b_ma5 + $pb_b_ma5 + $calculoBono5 + $fbc_b_ma5;




/*
 * 
 * cobranza
 * 
 * 
 */



$ec_cobranza_porcentaje = 0;
$ec_cobranza_monto = 0;
$ec_cobranza_bono1 = 0;
$ec_cobranza_bono_dos = 0;
$ec_cobranza_bono3 = 0;
$ec_cobranza_bono4 = 0;
$ec_cobranza_bono5 = 0;
$ec_cobranza_semana = 0;
$ec_cobranza_anio = '';
$year = date('Y');
$next_year = date("Y",strtotime($year."+ 1 year"));
$semana_actual = date("W");
$semanas_anuales =  idate('W', mktime(0, 0, 0, 12, 28, $year));

$ec_w1="";
$ec_w2="";
$ec_w3="";
$ec_w4="";
$ec_w5="";
       

$CI =& get_instance();
$CI->load->model('process_model');

if(!empty($this->data['ejecutivo_cobranza_bucket_siete'])):
    $count_week = count($this->data['ejecutivo_cobranza_bucket_siete']);
    for($i=0;$i<$count_week;$i++){        
        $ec_cobranza_porcentaje = $this->data['ejecutivo_cobranza_bucket_siete'][$i];         
        if($i == 0){        
            $ec_w1 = $ec_cobranza_porcentaje[0]->Porcentaje_Recuperacion;           
            
                if($ec_w1  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1 = $row->bono;                    
                      }
                   
                }else if($ec_w1 >= 60.00 && $ec_w1  <= 65.00 ){
                      $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1 = $row->bono;                    
                      }
                   
                }elseif($ec_w1 > 65.00 && $ec_w1  <= 70.00){
                    
                   $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1 = $row->bono;                    
                      }
                   
                }elseif($ec_w1 > 70.00 && $ec_w1 <= 75.00){
                    
                   $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1 = $row->bono;                    
                      }
                   
                }elseif($ec_w1 > 75.00){
                    
                  $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1 = $row->bono;                    
                      }
                   
                }
        
        }elseif($i == 1){
            
               $ec_w2 = $ec_cobranza_porcentaje[0]->Porcentaje_Recuperacion;
               
                 if($ec_w2  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono_dos = $row->bono;                    
                      }
                   
                }elseif($ec_w2 >= 60.00 && $ec_w2  <= 65.00 ){
                     $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono_dos = $row->bono;                    
                      }
                 // $ec_cobranza_bono_dos = 500;
                }elseif($ec_w2 > 65.00 && $ec_w2  <= 70.00){
                     $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono_dos = $row->bono;                    
                      }
                    // $ec_cobranza_bono_dos = 750;
                }elseif($ec_w2 > 70.00 && $ec_w2 <= 75.00){
                     $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono_dos = $row->bono;                    
                      }
                     //$ec_cobranza_bono_dos = 1000;
                }elseif($ec_w2 > 75.00){
                     $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono_dos = $row->bono;                    
                      }
                    // $ec_cobranza_bono_dos = 1250;
                }
        }elseif($i == 2){
           
            $ec_w3 = $ec_cobranza_porcentaje[0]->Porcentaje_Recuperacion;
                 if($ec_w3  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3 = $row->bono;                    
                      }
                   
                }elseif($ec_w3 >= 60.00 && $ec_w3  <= 65.00 ){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3 = $row->bono;                    
                      }
                   // $ec_cobranza_bono3 = 500;
                }elseif($ec_w3 > 65.00 && $ec_w3  <= 70.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3 = $row->bono;                    
                      }
                   //  $ec_cobranza_bono3 = 750;
                }elseif($ec_w3 > 70.00 && $ec_w3 <= 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3 = $row->bono;                    
                      }
                  //   $ec_cobranza_bono3 = 1000;
                }elseif($ec_w3 > 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3 = $row->bono;                    
                      }
                  //   $ec_cobranza_bono3 = 1250;
                }
        }elseif($i == 3){
           
            $ec_w4 = $ec_cobranza_porcentaje[0]->Porcentaje_Recuperacion; 
                 if($ec_w4  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4 = $row->bono;                    
                      }                   
                }elseif($ec_w4 >= 60.00 && $ec_w4  <= 65.00 ){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4 = $row->bono;                    
                      }
                    //$cobranza_bono4 = 500;
                }elseif($ec_w4 > 65.00 && $ec_w4  <= 70.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4 = $row->bono;                    
                      }
                     //$cobranza_bono4 = 750;
                }elseif($ec_w4 > 70.00 && $ec_w4 <= 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4 = $row->bono;                    
                      }
                     //$cobranza_bono4 = 1000;
                }elseif($ec_w4 > 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4 = $row->bono;                    
                      }
                     //$cobranza_bono4 = 1250;
                }
                
        }elseif($i == 4){
               
            $ec_w5 = $ec_cobranza_porcentaje[0]->Porcentaje_Recuperacion;
                 if($ec_w5  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5 = $row->bono;                    
                      }
                   
                }elseif($ec_w5 >= 60.00 && $ec_w5  <= 65.00 ){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5 = $row->bono;                    
                      }
                 //   $cobranza_bono5 = 500;
                }elseif($ec_w5 > 65.00 && $ec_w5  <= 70.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5 = $row->bono;                    
                      }
                   //  $cobranza_bono5 = 750;
                }elseif($ec_w5 > 70.00 && $ec_w5 <= 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5 = $row->bono;                    
                      }
                    // $cobranza_bono5 = 1000;
                }elseif($ec_w5 > 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5 = $row->bono;                    
                      }
                    // $cobranza_bono5 = 1250;
                }
        }
        
        
        
    }
 
endif;

/*
 * 
 * COBRANZA MA
 */


$ec_cobranza_porcentaje_ma = 0;
$ec_cobranza_monto_ma = 0;
$ec_cobranza_bono1_ma = 0;
$ec_cobranza_bono2_ma = 0;
$ec_cobranza_bono3_ma = 0;
$ec_cobranza_bono4_ma = 0;
$ec_cobranza_bono5_ma = 0;
$ec_cobranza_semana_ma = 0;
$ec_cobranza_anio_ma = '';
$year = date('Y');
$next_year = date("Y",strtotime($year."+ 1 year"));
$semana_actual = date("W");
$semanas_anuales =  idate('W', mktime(0, 0, 0, 12, 28, $year));

$ec_w1_ma="";
$ec_w2_ma="";
$ec_w3_ma="";
$ec_w4_ma="";
$ec_w5_ma="";
       

$CI =& get_instance();
$CI->load->model('process_model');

if(!empty($this->data['ejecutivo_cobranza_bucket_siete_ma'])):
    $cw = count($this->data['ejecutivo_cobranza_bucket_siete_ma']);
    for($i=0;$i<$cw;$i++){
        
        $ec_cobranza_porcentaje_ma = $this->data['ejecutivo_cobranza_bucket_siete_ma'][$i];
        
        if($i == 0){        
            $ec_w1_ma = $ec_cobranza_porcentaje_ma[0]->Porcentaje_Recuperacion;           
            
                if($ec_w1_ma  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1_ma = $row->bono;                    
                      }
                   
                }else if($ec_w1_ma >= 60.00 && $ec_w1_ma  <= 65.00 ){
                      $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1_ma = $row->bono;                    
                      }
                   
                }elseif($ec_w1_ma > 65.00 && $ec_w1_ma  <= 70.00){
                    
                   $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1_ma = $row->bono;                    
                      }
                   
                }elseif($ec_w1_ma > 70.00 && $ec_w1_ma <= 75.00){
                    
                   $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1_ma = $row->bono;                    
                      }
                   
                }elseif($ec_w1_ma > 75.00){
                    
                  $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono1_ma = $row->bono;                    
                      }
                   
                }
        
        }elseif($i == 1){
            
               $ec_w2_ma = $ec_cobranza_porcentaje_ma[0]->Porcentaje_Recuperacion;
                if($ec_w2_ma  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono2_ma = $row->bono;                    
                      }
                   
                }else if($ec_w2_ma >= 60.00 && $ec_w2_ma  <= 65.00 ){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono2_ma = $row->bono;                    
                      }
                 // $ec_cobranza_bono2_ma = 500;
                  
                }elseif($ec_w2_ma > 65.00 && $ec_w2_ma  <= 70.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono2_ma = $row->bono;                    
                      }
                   //  $ec_cobranza_bono2_ma = 750;
                }elseif($ec_w2_ma > 70.00 && $ec_w2_ma <= 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono2_ma = $row->bono;                    
                      }
                     //$ec_cobranza_bono2_ma = 1000;
                }elseif($ec_w2_ma > 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono2_ma = $row->bono;                    
                      }
                     //$ec_cobranza_bono2_ma = 1250;
                }
        }elseif($i == 2){
           
            $ec_w3_ma = $ec_cobranza_porcentaje_ma[0]->Porcentaje_Recuperacion;
            
                if($ec_w3_ma  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3_ma = $row->bono;                    
                      }
                   
                }elseif($ec_w3_ma >= 60.00 && $ec_w3_ma  <= 65.00 ){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3_ma = $row->bono;                    
                      }
                    //$ec_cobranza_bono3 = 500;
                }elseif($ec_w3_ma > 65.00 && $ec_w3_ma  <= 70.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3_ma = $row->bono;                    
                      }
                     //$ec_cobranza_bono3 = 750;
                }elseif($ec_w3_ma > 70.00 && $ec_w3_ma <= 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3_ma = $row->bono;                    
                      }
                     //$ec_cobranza_bono3 = 1000;
                }elseif($ec_w3_ma > 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono3_ma = $row->bono;                    
                      }
                     //$ec_cobranza_bono3 = 1250;
                }
        }elseif($i == 3){
           
            $ec_w4_ma = $ec_cobranza_porcentaje_ma[0]->Porcentaje_Recuperacion; 
            
                if($ec_w4_ma  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4_ma = $row->bono;                    
                      }
                   
                }elseif($ec_w4_ma >= 60.00 && $ec_w4_ma  <= 65.00 ){
                     $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4_ma = $row->bono;                    
                      }

                   // $cobranza_bono4 = 500;
                }elseif($ec_w4_ma > 65.00 && $ec_w4_ma  <= 70.00){
                     $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4_ma = $row->bono;                    
                      }

                  //   $cobranza_bono4 = 750;
                }elseif($ec_w4_ma > 70.00 && $ec_w4_ma <= 75.00){
                     $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4_ma = $row->bono;                    
                      }

                    // $cobranza_bono4 = 1000;
                }elseif($ec_w4_ma > 75.00){
                     $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono4_ma = $row->bono;                    
                      }

                   //  $cobranza_bono4 = 1250;
                }
                
        }elseif($i == 4){
               
            $ec_w5_ma = $ec_cobranza_porcentaje_ma[0]->Porcentaje_Recuperacion;
            
                if($ec_w5_ma  <= 59.9){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(1);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5_ma = $row->bono;                    
                      }
                   
                }elseif($ec_w5_ma >= 60.00 && $ec_w5_ma  <= 65.00 ){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(2);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5_ma = $row->bono;                    
                      }
                   // $cobranza_bono5 = 500;
                }elseif($ec_w5_ma > 65.00 && $ec_w5_ma  <= 70.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(3);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5_ma = $row->bono;                    
                      }
                    // $cobranza_bono5 = 750;
                }elseif($ec_w5_ma > 70.00 && $ec_w5_ma <= 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(4);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5_ma = $row->bono;                    
                      }
                     //$cobranza_bono5 = 1000;
                }elseif($ec_w5_ma > 75.00){
                    $result = $CI->process_model->bono_cobranza_ejecutivo(5);
                    foreach($result as $row){ 
                          $ec_cobranza_bono5_ma = $row->bono;                    
                      }
                   //  $cobranza_bono5 = 1250;
                }
        }
        
        
        
    }
 
endif;



?>

  <!--- TITULO DE LA PAGINA -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph2 icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Tablero de Incentivos
                    <div class="page-title-subheading">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->
    <div class="row">
        <div class="col-md-12">
            <h3>Mes actual</h3>
        </div>
    </div>
    
    <?php    
    $hoy = date('d');
    $mes = date('m');
    //date('Y-m-01', strtotime('-1 month'));
    //echo $hoy;
    ?>
    <!-- SEMANAS -->
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <?php 
        $i=4;
        $semana = array();
        foreach ($this->data['rango_semana'] as $wk):
          $semana[] = date('d',strtotime($wk['fi'])).' - '.date('d',strtotime($wk['ff']));
        endforeach; 
        $count = count($semana)-1;    
       
       for($a=0;$a<=$count;$a++){
           
            $sep_fi = explode(' - ', $semana[($count-$a)]);
            $m = date('m',strtotime($wk['ff']));
            
        if($hoy >= $sep_fi[0]):
        ?>        
        <li class="nav-item">
            <a role="tab" class="nav-link  <?php if($hoy >= $sep_fi[0] &&  $hoy <= $sep_fi[1]):  ?>active <?php endif; ?>" id="tab-<?php echo $i ?>" data-toggle="tab" href="#tab-content-<?php echo $i ?>">
                 <span>Días del  <?php echo $semana[($count-$a)]; ?></span>
            </a>
        </li>
        <?php       
        endif; 
        $i--;
       }
              
       $sep_semana_activa_1 = explode(' - ', $semana[0]);
       $sep_semana_activa_2 = explode(' - ', $semana[1]);
       $sep_semana_activa_3 = explode(' - ', $semana[2]);
       $sep_semana_activa_4 = explode(' - ', $semana[3]);
       $sep_semana_activa_5 = explode(' - ', $semana[4]);
       
       $s1a = $sep_semana_activa_1[0];
       $s1b = $sep_semana_activa_1[1];
       
       $s2a = $sep_semana_activa_2[0];
       $s2b = $sep_semana_activa_2[1];
       
       $s3a = $sep_semana_activa_3[0];
       $s3b = $sep_semana_activa_3[1];
       
       $s4a = $sep_semana_activa_4[0];
       $s4b = $sep_semana_activa_4[1];
       
       $s5a = $sep_semana_activa_5[0];
       $s5b = $sep_semana_activa_5[1];
       //echo $s1a;
        ?>
    </ul>
    
    <div class="tab-content">
        <!-- SEMANA 1 -->
        <div class="tab-pane tabs-animation fade <?php if($hoy >= $s1a &&  $hoy <= $s1b): ?> show active<?php endif; ?>" id="tab-content-0" role="tabpanel">
            <!-- NUEVOS -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Nuevos
                    </div>
                </div>
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                                <div class="widget-chart-content">
                                    <div class="widget-subheading">Cantidad</div>
                                    <div class="widget-numbers"><?php echo $nb_c1 ?></div>
                                </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="pe-7s-cash text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo1, 2, '.', ',')  //?></span></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                          <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                        <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                        <div class="widget-subheading">Bono</div>
                        <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b1, 2, '.', ',') ?></span></div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">
                </div>                    
            </div>
            <!-- RENOVACION -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Renovación
                    </div>
                </div>
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="pe-7s-wallet text-dark opacity-8"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $pb_c1 ?></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="pe-7s-cash text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo1, 2, '.', ',') ?></span></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b1, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>                    
            </div>
            
           <!-- REACTIVACION TRADICIONAL -->
           <div class="mb-3 card">
               <div class="card-header-tab card-header">
                   <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                       <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Créditos Reactivación Tradicional
                   </div>
               </div>
               <div class="no-gutters row">
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                               <i class="pe-7s-wallet text-dark opacity-8"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Cantidad</div>
                               <div class="widget-numbers"><?php echo $fbt_c1 ?></div>
                           </div>
                       </div>
                       <div class="divider m-0 d-md-none d-sm-block">
                           
                       </div>                           
                   </div>
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                               <i class="pe-7s-cash text-white"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Monto Dispersado</div>
                               <div class="widget-numbers">$<span><?php echo number_format($fbt_mo1, 2, '.', ',') ?></span></div>
                           </div>
                       </div>
                       <div class="divider m-0 d-md-none d-sm-block">
                           
                       </div>                           
                   </div>
                   <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($calculoBonoMactual, 2, '.', ',') ?></span></div>
                        </div>
                    </div>
                   </div>
               </div>
               <div class="text-center d-block p-3 card-footer">
                   
               </div>                   
           </div>
            <!-- REACTIVACION CAMPAÑA -->
             <div class="mb-3 card">
               <div class="card-header-tab card-header">
                   <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                       <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Créditos Reactivación Campaña
                   </div>
               </div>
               <div class="no-gutters row">
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                               <i class="pe-7s-wallet text-dark opacity-8"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Cantidad</div>
                               <div class="widget-numbers"><?php echo $fbc_c1 ?></div>
                           </div>
                       </div>
                       <div class="divider m-0 d-md-none d-sm-block">
                           
                       </div>                           
                   </div>
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                               <i class="pe-7s-cash text-white"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Monto Dispersado</div>
                               <div class="widget-numbers">$<span><?php echo number_format($fbc_mo1, 2, '.', ',') ?></span></div>
                           </div>
                       </div>
                       <div class="divider m-0 d-md-none d-sm-block">
                           
                       </div>                           
                   </div>
                   <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b1, 2, '.', ',') ?></span></div>
                        </div>
                    </div>
                   </div>
               </div>
               <div class="text-center d-block p-3 card-footer">
                   
               </div>                   
           </div>            
            <!-- FIN REACTIVACION CAMPAÑA -->

           
           <!-- TOTAL SEMANA 1-->
           <div class="mb-3 card" style="background: #e0f3ff">
               <div class="card-header-tab card-header" style="background: #e0f3ff">
                   <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                       <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total semana 1
                   </div>
               </div>
               <div class="no-gutters row">
                   <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                               <i class="pe-7s-wallet text-dark opacity-8"></i>
                           </div>
                           <div class="widget-chart-content">
                               <div class="widget-subheading">Cantidad total</div>
                               <div class="widget-numbers"><?php echo $total_c_s1 ?></div>
                           </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                   
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s1, 2, '.', ',') ?></span></div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                   
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Bono Semanal2</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s1, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>
                </div>
               </div>
               <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
               </div>
           </div>
           <!-- FIN TOTAL SEMANA 1 -->
           
           <!-- COBRANZA -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <?php 
               
                ?>
                 <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 1</div>
                            <div class="widget-numbers"><?php echo ($ec_w1)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono1, 2, '.', ',') ?>
                                            </div>
                             
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                       
                    </div>                        
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4"></div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total=0;                            
                           if($ec_w1 != ""){                               
                               $ec_cobranza_total = $ec_cobranza_bono1;                              
                           } echo number_format(($ec_cobranza_total), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                
                              
                
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           
           <!-- TOTAL SEMANA Y COBRANZA -->
            <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 1</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_s1, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono1), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_s1+$ec_cobranza_bono1), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
        </div>
        
        <!-- SEMANA 2 -->
        <div class="tab-pane tabs-animation fade <?php if($hoy >= $s2a &&  $hoy <= $s2b): ?>show active<?php endif; ?>" id="tab-content-1" role="tabpanel">
            <!-- NUEVOS -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Nuevos
                    </div>
                </div>
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="pe-7s-wallet text-dark opacity-8"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c2 ?></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="pe-7s-cash text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo2, 2, '.', ',')  //?></span></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">
                    
                </div>                    
            </div>
            <!-- RENOVACION -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Renovación
                    </div>
                </div>
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="pe-7s-wallet text-dark opacity-8"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $pb_c2 ?></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="pe-7s-cash text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo2, 2, '.', ',')  //?></span></div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block">
                            
                        </div>                            
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">
                    
                </div>                   
            </div>
            <!-- REACTIVACION TRADICIONAL -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Reactivación Tradicional
                    </div>
                </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $fbt_c2 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($fbt_mo2, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($calculoBonoMactual2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
            
            <!-- REACTIVACION CAMPAÑA -->
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Créditos Reactivación Campaña
                    </div>
                </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $fbc_c2 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($fbc_mo2, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>         
            
            <!-- FIN REACTIVACION CAMPAÑA -->
            
           <!-- TOTAL SEMANA 2-->
           <div class="mb-3 card" style="background: #e0f3ff">
            <div class="card-header-tab card-header" style="background: #e0f3ff">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                  Total semana 2
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad total</div>
                            <div class="widget-numbers"><?php echo $total_c_s2 ?></div>                                
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s2, 2, '.', ',') ?></span></div>                                        
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Bono Semanal</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s2, 2, '.', ',')  ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
            </div>
        </div>
           <!-- FIN TOTAL SEMANA 2 -->
          <!-- COBRANZA -->
          
                <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">                         
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>                           
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 2</div>
                            <div class="widget-numbers"><?php echo ($ec_w2)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono_dos, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4"></div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total=0;
                           if($ec_w2 != ""){
                               
                               $ec_cobranza_total = $ec_cobranza_bono_dos;                                 
                           }
                           echo number_format(($ec_cobranza_total), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
          <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 2</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_s2, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono_dos), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_s2+$ec_cobranza_bono_dos), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
       </div>
       
       <!-- SEMANA 3 -->
       <div class="tab-pane tabs-animation fade <?php if($hoy >= $s3a &&  $hoy <= $s3b): ?>show active<?php endif; ?>" id="tab-content-2" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c3 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo3, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $pb_c3 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo3, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $fbt_c3 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($fbt_mo3, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($calculoBonoMactual3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           
              <!-- REACTIVACION CAMPAÑA -->
              <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $fbc_c3 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($fbc_mo3, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>              
              <!-- FIN REACTIVACION CAMPAÑA -->
           
           
           <!-- TOTAL SEMANA 3-->
           <div class="mb-3 card" style="background: #e0f3ff">
            <div class="card-header-tab card-header" style="background: #e0f3ff">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                  Total semana 3
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad total</div>
                            <div class="widget-numbers"><?php echo $total_c_s3 ?></div>                                
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s3, 2, '.', ',') ?></span></div>                                        
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Bono Semanal</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s3, 2, '.', ',')  ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
            </div>
        </div>
           <!-- FIN TOTAL SEMANA 3 -->
           <!-- COBRANZA S3 -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">                          
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>                          
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 3</div>
                            <div class="widget-numbers"><?php echo ($ec_w3)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                <div class="d-inline  pr-1">
                                    <!--<i class="fa fa-angle-down"></i>-->
                                    <span class="pl-1">Bono</span>
                                </div>
                               <?php echo number_format($ec_cobranza_bono3, 2, '.', ',') ?>
                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total=0;                         
                           if($ec_w3 != ""){                               
                                $ec_cobranza_total =$ec_cobranza_bono3;                                
                            }
                            echo number_format(($ec_cobranza_total), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 3</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_s3, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono3), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_s3+$ec_cobranza_bono3), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
           
           
       </div>
       
       <!-- SEMANA 4 -->
       <div class="tab-pane tabs-animation fade <?php if($hoy >= $s4a &&  $hoy <= $s4b): ?>show active<?php endif; ?>" id="tab-content-3" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c4 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo4, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $pb_c4 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo4, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $fbt_c4 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($fbt_mo4, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($calculoBonoMactual4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!--REACTIVACION CAMPAÑA -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $fbc_c4 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($fbc_mo4, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           
           <!-- FIN REACTIVACION CAMPAÑA -->
           <!-- TOTAL SEMANA 4-->
           <div class="mb-3 card" style="background: #e0f3ff">
            <div class="card-header-tab card-header" style="background: #e0f3ff">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                  Total samana 4
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad total</div>
                            <div class="widget-numbers"><?php echo $total_c_s4 ?></div>                                
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s4, 2, '.', ',') ?></span></div>                                        
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Bono Semanal</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s4, 2, '.', ',')  ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
            </div>
        </div>
           <!-- FIN TOTAL SEMANA 4 -->
           <!-- COBRANZA -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">                
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">                         
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>                           
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 4</div>
                            <div class="widget-numbers"><?php echo ($ec_w4)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono4, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total=0;
                         
                            if($ec_w4 != ""){
                                
                                $ec_cobranza_total= $ec_cobranza_bono4;                                
                            }echo number_format(($ec_cobranza_total), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>  
           <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 4</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_s4, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono4), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_s4+$ec_cobranza_bono4), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
           
       </div>
       
       <!-- SEMANA 5 -->
       <div class="tab-pane tabs-animation fade <?php if($hoy >= $s5a &&  $hoy <= $s5b): ?>show active<?php endif; ?>" id="tab-content-3" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c5 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo5, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b5, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $pb_c5 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($pb_mo5, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b5, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $fbt_c5 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($fbt_mo5, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($calculoBonoMactual5, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!--REACTIVACION CAMPAÑA -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
                </div>
            </div>

                <div class="no-gutters row">
                     <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $fbc_c5 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($fbc_mo5, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b5, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                    
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           
           <!-- FIN REACTIVACION CAMPAÑA -->
           <!-- TOTAL SEMANA 5-->
           <div class="mb-3 card" style="background: #e0f3ff">
            <div class="card-header-tab card-header" style="background: #e0f3ff">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                  Total samana 5
                </div>

            </div>
            <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad total</div>
                            <div class="widget-numbers"><?php echo $total_c_s5 ?></div>                                
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total de Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_mo_s5, 2, '.', ',') ?></span></div>                                        
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Total Bono Semanal</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_s5, 2, '.', ',')  ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-block p-3 card-footer"  style="background: #e0f3ff" >
            </div>
        </div>
           <!-- FIN TOTAL SEMANA 5 -->
          <!-- COBRANZA -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">                
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">                         
                           <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                            <i class="lnr-pie-chart text-white opacity-8"></i>                           
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 5</div>
                            <div class="widget-numbers"><?php echo ($ec_w5)   ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono5, 2, '.', ',') ?>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total=0;
                         
                            if($ec_w5 != ""){
                                
                                $ec_cobranza_total= $ec_cobranza_bono5;                                
                            }echo number_format(($ec_cobranza_total), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>     
          
          <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 5</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_s5, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono5), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_s5+$ec_cobranza_bono5), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
       </div>
       
       <!-- FIN SEMANA 5 -->       
   </div>
    
     
     <!--
     *
     *
     *
     *
     *
     *  MESES ANTERIORES 
     *
     *
     *
     *
     *
     -->
     
     <div class="row">
         <div class="col-md-12">
             <h3>Mes anterior</h3>
         </div>
     </div>
     
      
    <?php
    
   
   
    
    $hoy = date('d');
    $mes = date('m');
    //date('Y-m-01', strtotime('-1 month'));
    //echo $hoy;
    ?>
    <!-- SEMANAS -->
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <?php 
        
        $i=0;$valor=0;
        
        $i=9;$valor=9;
        
        
        $semana = array();

        foreach ($this->data['rango_semana_ma'] as $wk):
          $semana[] = date('d',strtotime($wk['fi'])).' - '.date('d',strtotime($wk['ff']));
        endforeach; 

        $count = count($semana)-1;
       
       for($a=0;$a<=$count;$a++)
       {
                $sep_fi = explode(' - ', $semana[($count-$a)]);
                $m = date('m',strtotime($wk['ff']));
                
            ?>        
            <li class="nav-item">
                <a role="tab" class="nav-link  <?php if($i == $valor): ?>active <?php endif; ?>" id="tab-<?php echo $i ?>" data-toggle="tab" href="#tab-content-<?php echo $i ?>">
                     <span>Días del  <?php echo $semana[($count-$a)]; ?></span>
                </a>
            </li>
            <?php       
        
            $i--;
       }
        ?>
    </ul>
     
     
   <div class="tab-content">
       <!-- SEMANA 1 -->
       <div class="tab-pane tabs-animation fade" id="tab-content-5" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos 
                </div>
            </div>

                <div class="no-gutters row">
                      <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c_ma1 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma1, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma1, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                        <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad</div>
                            <div class="widget-numbers"><?php echo $pb_c_ma1 ?></div>                                        
                        </div>                                    
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                        <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma1, 2, '.', ',') ?></span></div>
                        </div>
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>                            
            </div>
            <div class="col-sm-12 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                        <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma1, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbt_c_ma1 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma1, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($calculoBono1, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           
           <!-- REACTIVACION CAMPAÑA -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbc_c_ma1 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma1, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma1, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>           
           <!-- FIN REACTIVACION CAMPAÑA -->
           
           <!-- TOTAL SEMANA ANTERIOR 1-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 1
               </div>
           </div>
           <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                           <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Cantidad</div>
                           <div class="widget-numbers"><?php echo $total_c_ma_s1 ?></div>                                
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                           <i class="pe-7s-cash text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Monto Dispersado</div>
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s1, 2, '.', ',') ?></span></div>                                        
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total Bono Semanal</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s1, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
            <!-- FIN TOTAL SEMANA ANTERIOR 1-->
           <!-- COBRANZA -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <?php 
               
                ?>
                 <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 1</div>
                            <div class="widget-numbers"><?php echo ($ec_w2_ma)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono1_ma, 2, '.', ',') ?>
                                            </div>
                             
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                       
                    </div>                        
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4"></div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total_ma=0;                            
                           if($ec_w2_ma != ""){                               
                               $ec_cobranza_total_ma = $ec_cobranza_bono1_ma;                              
                           } echo number_format(($ec_cobranza_total_ma), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                
                              
                
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- //COBRANZA-->
           <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 1</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_ma_s1, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono1_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_ma_s1 +$ec_cobranza_bono1_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
       </div>
       <!-- SEMANA 2 -->
       <div class="tab-pane tabs-animation fade" id="tab-content-6" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
                </div>
            </div>

                <div class="no-gutters row">
                      <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c_ma2 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma2, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma2, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                        <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad</div>
                            <div class="widget-numbers"><?php echo $pb_c_ma2 ?></div>                                        
                        </div>                                    
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                        <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma2, 2, '.', ',') ?></span></div>
                        </div>
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>                            
            </div>
            <div class="col-sm-12 col-md-4 col-xl-4">
              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                        <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma2, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbt_c_ma2 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma2, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbt_b_ma2, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION CAMPAÑA-->
                <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbc_c_ma2 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma2, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma2, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- FIN REACTIVACION CAMPAÑA -->
           <!-- TOTAL SEMANA ANTERIOR 2-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 2
               </div>
           </div>
           <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                           <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Cantidad</div>
                           <div class="widget-numbers"><?php echo $total_c_ma_s2 ?></div>                                
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                           <i class="pe-7s-cash text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Monto Dispersado</div>
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s2, 2, '.', ',') ?></span></div>                                        
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total Bono Semanal</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s2, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
            <!-- FIN TOTAL SEMANA ANTERIOR 2-->
            <!-- COBRANZA -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <?php 
               
                ?>
                 <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 2</div>
                            <div class="widget-numbers"><?php echo ($ec_w2_ma)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono2_ma, 2, '.', ',') ?>
                                            </div>
                             
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                       
                    </div>                        
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4"></div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total_ma=0;                            
                           if($ec_w2_ma != ""){                               
                               $ec_cobranza_total_ma = $ec_cobranza_bono2_ma;                              
                           } echo number_format(($ec_cobranza_total_ma), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                
                              
                
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- //COBRANZA-->
            <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 2</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_ma_s2, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono2_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_ma_s2 +$ec_cobranza_bono2_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
           
       </div>
       
       <!-- SEMANA 3 -->
         <div class="tab-pane tabs-animation fade" id="tab-content-7" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos 
                </div>
            </div>

                <div class="no-gutters row">
                      <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c_ma3 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma3, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma3, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                        <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad</div>
                            <div class="widget-numbers"><?php echo $pb_c_ma3 ?></div>                                        
                        </div>                                    
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                        <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma3, 2, '.', ',') ?></span></div>
                        </div>
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>                            
            </div>
            <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                        <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma3, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbt_c_ma3 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma3, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($calculoBono3, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION CAMPAÑA -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbc_c_ma3 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma3, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma3, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- FIN REACTIVACION CAMPAÑA-->
           
           <!-- TOTAL SEMANA ANTERIOR 3-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 3
               </div>
           </div>
           <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                           <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Cantidad</div>
                           <div class="widget-numbers"><?php echo $total_c_ma_s3 ?></div>                                
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                           <i class="pe-7s-cash text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Monto Dispersado</div>
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s3, 2, '.', ',') ?></span></div>                                        
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total Bono Semanal</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s3, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
            <!-- FIN TOTAL SEMANA ANTERIOR 3-->
            <!-- COBRANZA -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <?php 
               
                ?>
                 <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 3</div>
                            <div class="widget-numbers"><?php echo ($ec_w3_ma)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono3_ma, 2, '.', ',') ?>
                                            </div>
                             
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                       
                    </div>                        
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4"></div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total_ma=0;                            
                           if($ec_w3_ma != ""){                               
                               $ec_cobranza_total_ma = $ec_cobranza_bono3_ma;                              
                           } echo number_format(($ec_cobranza_total_ma), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                
                              
                
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- //COBRANZA-->
            <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 3</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_ma_s3, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono3_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_ma_s3 +$ec_cobranza_bono3_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
       </div>
       
       <!-- SEMANA 4 -->
         <div class="tab-pane tabs-animation fade" id="tab-content-8" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos
                </div>
            </div>

                <div class="no-gutters row">
                      <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c_ma4 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma4, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma4, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                        <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad</div>
                            <div class="widget-numbers"><?php echo $pb_c_ma4 ?></div>                                        
                        </div>                                    
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                        <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma4, 2, '.', ',') ?></span></div>
                        </div>
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>                            
            </div>
            <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                        <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma4, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbt_c_ma4 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>  
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma4, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($calculoBono4, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION CAMPAÑA -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbc_c_ma4 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma4, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma4, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- FIN REACTIVACION CAMPAÑA-->
           
           <!-- TOTAL SEMANA ANTERIOR 4-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 4
               </div>
           </div>
           <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                           <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Cantidad</div>
                           <div class="widget-numbers"><?php echo $total_c_ma_s4 ?></div>                                
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                           <i class="pe-7s-cash text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Monto Dispersado</div>
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s4, 2, '.', ',') ?></span></div>                                        
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total Bono Semanal</div> 
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s4, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
            <!-- COBRANZA -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <?php 
               
                ?>
                 <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 5</div>
                            <div class="widget-numbers"><?php echo ($ec_w4_ma)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono4_ma, 2, '.', ',') ?>
                                            </div>
                             
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                       
                    </div>                        
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4"></div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total_ma=0;                            
                           if($ec_w4_ma != ""){                               
                               $ec_cobranza_total_ma = $ec_cobranza_bono4_ma;                              
                           } echo number_format(($ec_cobranza_total_ma), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                
                              
                
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- //COBRANZA-->
            <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 4</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_ma_s4, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono4_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>             
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_ma_s4 +$ec_cobranza_bono4_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
           
         </div>
            <!-- FIN TOTAL SEMANA ANTERIOR 4-->
           
           <!-- SEMANA 5 -->
            <div class="tab-pane tabs-animation fade show active" id="tab-content-9" role="tabpanel">
           <!-- NUEVOS -->
            <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Nuevos 29 -05
                </div>
            </div>

                <div class="no-gutters row">
                      <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                            <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cantidad</div>
                                <div class="widget-numbers"><?php echo $nb_c_ma5 ?></div>                                         
                            </div>                                     
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                            <i class="pe-7s-cash text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Monto Dispersado</div>
                                <div class="widget-numbers">$<span><?php echo number_format($nb_mo_ma5, 2, '.', ',')  //?></span></div>
                            </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block"></div>                             
                </div>

                <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i></div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Bono</div>
                                <div class="widget-numbers text-success">$<span><?php echo number_format($nb_b_ma5, 2, '.', ',') ?></span></div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- RENOVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Renovación
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                        <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cantidad</div>
                            <div class="widget-numbers"><?php echo $pb_c_ma5 ?></div>                                        
                        </div>                                    
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                        <i class="pe-7s-cash text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Monto Dispersado</div>
                            <div class="widget-numbers">$<span><?php echo number_format($pb_mo_ma5, 2, '.', ',') ?></span></div>
                        </div>
                </div>
                <div class="divider m-0 d-md-none d-sm-block"></div>                            
            </div>
            <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                        <i class="pe-7s-piggy text-white"></i></div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono</div>
                            <div class="widget-numbers text-success">$<span><?php echo number_format($pb_b_ma5, 2, '.', ',') ?></span></div>
                        </div>
                </div>
            </div>
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
            <!-- actual -->
           <!-- REACTIVACION -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Tradicional
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbt_c_ma5 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbt_mo_ma5, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success"><?php echo number_format($calculoBono5, 2, '.', ',') ?><span></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- REACTIVACION CAMPAÑA -->
           <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                    Créditos Reactivación Campaña
                </div>
            </div>

                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                       <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Cantidad</div>
                       <div class="widget-numbers"><?php echo $fbc_c_ma5 ?></div>                                            
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-6 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                       <i class="pe-7s-cash text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Monto Dispersado</div>
                       <div class="widget-numbers">$<span><?php echo number_format($fbc_mo_ma5, 2, '.', ',') ?></span></div>                                       
                   </div>
               </div>
               <div class="divider m-0 d-md-none d-sm-block"></div>
           </div>
           <div class="col-sm-12 col-md-4 col-xl-4">
               <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                   <div class="icon-wrapper rounded-circle">
                       <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                       <i class="pe-7s-piggy text-white"></i></div>
                   <div class="widget-chart-content">
                       <div class="widget-subheading">Bono</div>
                       <div class="widget-numbers text-success">$<span><?php echo number_format($fbc_b_ma5, 2, '.', ',') ?></span></div>
                   </div>
               </div>
           </div> 
                </div>
                <div class="text-center d-block p-3 card-footer">

                </div>
            </div>
           <!-- FIN REACTIVACION CAMPAÑA-->
           
           <!-- TOTAL SEMANA ANTERIOR 5-->
               <div class="mb-3 card" style="background: #e0f3ff">
           <div class="card-header-tab card-header" style="background: #e0f3ff">
               <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                   <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                 Total semana 5
               </div>
           </div>
           <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                           <i class="pe-7s-wallet text-dark opacity-8"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Cantidad</div>
                           <div class="widget-numbers"><?php echo $total_c_ma_s5 ?></div>                                
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                           <i class="pe-7s-cash text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Monto Dispersado</div>
                           <div class="widget-numbers">$<span><?php echo number_format($total_mo_ma_s5, 2, '.', ',') ?></span></div>                                        
                       </div>
                   </div>
                   <div class="divider m-0 d-md-none d-sm-block"></div>
               </div>
               <div class="col-sm-12 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                           <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                           <i class="pe-7s-piggy text-white"></i></div>
                       <div class="widget-chart-content">
                           <div class="widget-subheading">Total Bono Semanal</div>
                           <div class="widget-numbers text-success">$<span><?php echo number_format($total_b_ma_s5, 2, '.', ',') ?></span></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="text-center d-block p-3 card-footer" style="background: #e0f3ff">
           </div>
       </div>
           <!-- FIN SEMANA 5-->
 <!-- COBRANZA -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Cobranza 1 - 7
                     </div>
                 </div>                 
            <div class="no-gutters row">
                <?php 
               
                ?>
                 <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                 <div class="icon-wrapper-bg opacity-10 bg-info"></div>
                                 <i class="lnr-pie-chart text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Porcentaje Semana 4</div>
                            <div class="widget-numbers"><?php echo ($ec_w5_ma)  ?>%</div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline  pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->
                                                    <span class="pl-1">Bono</span>
                                                </div>
                                               <?php echo number_format($ec_cobranza_bono5_ma, 2, '.', ',') ?>
                                            </div>
                             
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                       
                    </div>                        
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4"></div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Acumulado</div>
                            <div class="widget-numbers">$<span><?php 
                            $ec_cobranza_total_ma=0;                            
                           if($ec_w5_ma != ""){                               
                               $ec_cobranza_total_ma = $ec_cobranza_bono4_ma;                              
                           } echo number_format(($ec_cobranza_total_ma), 2, '.', ',')  
                                    ?></span></div>
                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline pr-1">
                                                    <!--<i class="fa fa-angle-down"></i>-->                                                  
                                                </div>
                                            </div>
                        </div>
                    </div>
                    <div class="divider m-0 d-md-none d-sm-block">
                        
                    </div>                        
                </div>
                

                
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- //COBRANZA-->
            <!-- TOTAL de BONO -->
                 <div class="mb-3 card">
                 <div class="card-header-tab card-header">
                     <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                         <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                       Total Semana + Cobranza
                     </div>
                 </div>                 
            <div class="no-gutters row">
               <div class="col-sm-6 col-md-4 col-xl-4">
                   <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                            <i class="pe-7s-piggy text-white"></i>
                        </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Semana 5</div>
                            <div class="widget-numbers">$<span><?php echo number_format($total_b_ma_s5, 2, '.', ',')  ?></span></div> 
                        </div>
                    </div>                 
                </div>
              
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Cobranza</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($ec_cobranza_bono5_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                       <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                       <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-success"></div>
                                 <i class="pe-7s-piggy text-white opacity-8"></i>
                       </div>
                        <div class="widget-chart-content">
                            <div class="widget-subheading">Bono Total</div>
                            <div class="widget-numbers">$<span><?php echo number_format(($total_b_ma_s5 +$ec_cobranza_bono5_ma), 2, '.', ',')  ?></span></div>                            
                        </div>
                    </div>                     
                </div>
            </div>
                 <div class="text-center d-block p-3 card-footer">
                     
                 </div>                     
             </div>
           <!-- // BONO TOTAL -->
           
    </div>