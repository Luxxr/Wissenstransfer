
          <form action="index.php" method="post" class="button">
              <input name="return" type="hidden" align="right" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
              <input type="submit" value="Logout" />
          </form>


          .button{
              float:right;
              border: none;
              color: black;
              padding: 15px 32px;
              text-decoration: none;
              display: inline-block;
              font-size: 16px
          }


          <!-- Logout Button -->

            <form action="index.php" method="post" class="button">
                  <input name="return" type="hidden" align="right" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
                  <input type="submit" value="Logout" />
            </form>
