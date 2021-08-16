<?php 

echo "<select>";
for($ano = date("Y"); $ano >= date("Y")-100; $ano--){
    echo '<option value= "'.$ano.'">'.$ano.'</option>';
}
echo "</select>";
?>