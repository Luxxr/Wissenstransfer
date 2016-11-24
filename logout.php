
        <form action="index.php" method="post">
            <input name="return" type="hidden" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
            <input type="submit" value="logout" />
        </form>
