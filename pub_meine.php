        <form action="index.php" method="post">
            <input name="return" type="hidden" align="right" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
            <input type="submit" value="Logout" />
        </form>
        <div class="button-container">
          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Take me to Narnia">
        </div>


        <script>
          $('#contact').on('submit', myFunction);

          function myFunction() {
              var x;
              if (confirm("Ihre Publikation wurde erfasst!") == true) {
                document.getElementById("demo").innerHTML = x;
                window.location.href='pub_meine.php';
              }
              // Damit das Formular nicht abgesendet wird an den Server
              return false;
          }
        </script>
