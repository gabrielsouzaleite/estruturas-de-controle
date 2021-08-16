<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="ok">
    
</form> 

<?php 
if (isset($_GET)){
    foreach ($_GET as $key => $value) {
        echo"O nome do campo: ".$key."<br>";
        echo"O valor do campo é: ".$value;
        echo"<hr>";
    }
}
?>