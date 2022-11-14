<?php

if (isset($_POST['edad'])) {
    $edad = $_POST['edad'];
   var_dump($edad);
}


 if ($edad >17 ):?>
<div style="background: green;">
    <div
    class="tet"><span>Puede ingresar</span></div> 
</div>
<?php elseif($edad == 17 ):?>
    <div style="background: yellow;">
    <div
    class="tet"><span>TE FALTA UN AGE</span></div> 
</div>

 <?php else:?>
    <div style="background: red;">
    <div
    class="tet"><span>Eres un pollito</span></div> 
</div>
   
<?php endif;?>