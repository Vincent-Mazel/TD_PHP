<?php
    require 'fonctions.php';

    start_page('Incroyable calculatrice');
?>

<form name ="calculatrice" method="post" action="calcul.php">
    Op1 : <input type="text" name="op1"/> <br/>
    Op2 : <input type="text" name="op2"/> <br/>

    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>

    <input type="submit" value="submit" name="action"/><br/>
    <input type="reset" value="effacer"/><br/>

</form>

<?php
    end_page();
?>