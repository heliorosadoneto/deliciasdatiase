<?php  
if(!empty($flash)){
    echo "<h4>$flash</h4>";
}
?>
<form action="<?=$base?>/login" method="post">
    <input type="email" name="email">
    <input type="password" name="senha">
    <input type="submit" value="Singnin">
</form>