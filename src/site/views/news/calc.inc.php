<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 06.03.17
 * Time: 19:33
 */

?>

    <form action="#" method="post">
        <input type="text" name="var1" value="<?php if (isset($data['var1'])) echo $data['var1'];?>">
        <select name="action">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>

        </select>
        <input type="text" name="var2" value="<?php if (isset($data['var2'])) echo $data['var2'];?>">
        <input type="submit" value="=" name="solve">
    </form>
    <?php if (isset($data['result'])):?>
    <p>Result: <?= $data['result'] ?></p>
    <?php endif;?>
<?php showFooter() ?>