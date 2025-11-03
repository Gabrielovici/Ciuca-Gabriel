<?php
/* -----------------------------------------------------
   Pagina: subscribe.php
   Scop: formular pentru abonarea la newsletter NeuroCAD
   ----------------------------------------------------- */

// variabilă simplă ca să știm dacă formularul a fost trimis
$subscribed = false;

// când utilizatorul apasă butonul de abonare
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST["email"]);

  // aici putem valida emailul (deocamdată doar simplu)
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // momentan doar simulăm abonarea (nu salvăm încă)
    $subscribed = true;
  }
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NeuroCAD — Abonează-te</title>

  <!-- folosim același fișier CSS -->
  <link rel="stylesheet" href="styles.css" />
</head>

<script>
(function(){
  var b=document.querySelector('.back-to-top');
  if(!b) return;
  var t=false;
  function onS(){
    if(!t){
      requestAnimationFrame(function(){
        (scrollY>400)? b.classList.add('show') : b.classList.remove('show');
        t=false;
      });
      t=true;
    }
  }
  addEventListener('scroll',onS,{passive:true});
  addEventListener('load',onS);
})();
</script>


<body>
  <!-- Bara de sus -->
  <header class="site-header">
    <div class="container nav">
      <a class="logo" href="index.php">Neuro<span>CAD</span></a>
      <nav>
        <a href="index.php#despre">Despre</a>
        <a href="index.php#functii">Funcționalități</a>
        <a href="index.php#tehnologie">Tehnologie</a>
        <a href="contact.php" class="btn primary">Hai sa luam legatura</a>
      </nav>
    </div>
  </header>

  <!-- Conținutul principal -->
  <main class="section center">
    <div class="container">
      <?php if ($subscribed): ?>
        <!-- Mesaj după abonare -->
        <h1>Mulțumim pentru abonare! 🎉</h1>
        <p>Te vom anunța când NeuroCAD va fi disponibil public.</p>
        <a href="index.php" class="btn ghost">Înapoi la pagina principală</a>
      <?php else: ?>
        <!-- Formularul de abonare -->
        <h1>Abonează-te la newsletter</h1>
        <p>Primește actualizări despre lansarea <strong>NeuroCAD</strong> și noile funcționalități.</p>

        <form method="post" class="subscribe-form">
          <input
            type="email"
            name="email"
            placeholder="Introdu adresa ta de email"
            required
          />
          <button type="submit" class="btn primary">Abonează-mă</button>
        </form>
      <?php endif; ?>
    </div>
  </main>

  <!-- Subsolul -->
  <footer class="site-footer">
    <div class="container small">
      <p>© <?php echo date('Y'); ?> NeuroCAD • Toate drepturile rezervate</p>
    </div>
  </footer>
</body>
</html>
<a href="#top" class="back-to-top" aria-label="Mergi sus">⬆</a>
