<?php
  include_once 'header.php';
 ?>
      <section id="showcase">
      <div class="container">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quibusdam?7</h1>
      </div>
      </section>

      <div class="container">
        <section id="main">
        <?php
            //Welcome Message
            if (isset($_SESSION["useruid"])) {
              echo "<h1>Welcome" . $_SESSION["userid"] ."</h1>";
            }
            else {
              echo "<h1>Welcome</h1>";
            }
          ?>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, velit?</p>
        </section>
        <aside id="sidebar">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, cupiditate?</p>
        </aside>
<?php
  include_once 'footer.php';
?>
