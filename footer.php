<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
  </body>
  <div class="b-example-divider"></div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="debug.php" class="nav-link px-2 text-muted">Session Actuelle</a></li>
     <li class="nav-item"><a href="reset.php" class="nav-link px-2 text-muted">Reset Session</a></li> 
      <!-- <li class="nav-item"><a href="addition.php" class="nav-link px-2 text-muted">Addition</a></li>
      <li class="nav-item"><a href="multiplication.php" class="nav-link px-2 text-muted">Multiplication</a></li>
      <li class="nav-item"><a href="division.php" class="nav-link px-2 text-muted">Division</a></li>
      <li class="nav-item"><a href="soustraction.php" class="nav-link px-2 text-muted">Soustraction</a></li>
      <li class="nav-item"><a href="monprofil.php" class="nav-link px-2 text-muted">Mon Profil</a></li>
      <li class="nav-item"><a href="login.php" class="nav-link px-2 text-muted">Login</a></li>
  --> 
    </ul>
   
    <p class="text-center text-muted">&copy; 2023 Cfitech, Inc. -  
 
    <?php    date_default_timezone_set('Europe/Paris');
  $date = date('d-m-y g:i');
  echo $date; ?>
    </p>
   
  

  </footer>
</div>
</html>
