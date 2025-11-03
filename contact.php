<?php
/* -----------------------------------------------------
   contact.php – Pagina de contact pentru NeuroCAD
   -----------------------------------------------------
   - Design dark, stil JetBrains, cu aceleași culori ca Home.
   - Formular cu validare minimă (server-side).
   - După trimitere: afișăm un mesaj de succes (fără DB pentru moment).
   - Include animații "fade-up" (IO + fallback).
----------------------------------------------------- */

$sent = false;
$errors = [];

// anti-spam (honeypot simplu)
$hp = $_POST['website'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $hp === '') {
  $nume     = trim($_POST['nume'] ?? '');
  $email    = trim($_POST['email'] ?? '');
  $telefon  = trim($_POST['telefon'] ?? '');
  $companie = trim($_POST['companie'] ?? '');
  $interes  = trim($_POST['interes'] ?? '');
  $mesaj    = trim($_POST['mesaj'] ?? '');

  if ($nume === '') $errors['nume'] = 'Completează numele.';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Email invalid.';
  if ($mesaj === '') $errors['mesaj'] = 'Scrie un mesaj.';

  if (!$errors) {
    // Aici ulterior poți salva în DB sau trimite email
    $sent = true;
  }
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NeuroCAD — Hai să luăm legătura</title>
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

<header class="site-header">
  <div class="container nav">
    <a class="logo" href="index.php">Neuro<span>CAD</span></a>
    <nav>
      <a href="index.php#despre">Despre</a>
      <a href="index.php#functii">Funcționalități</a>
      <a href="index.php#tehnologie">Tehnologie</a>
      <a href="subscribe.php" class="btn ghost">Abonează-te</a>
      <a href="contact.php" class="btn primary">Hai să luăm legătura</a>
    </nav>
  </div>

  <div class="container hero">
    <h1 class="fade-up">Hai să luăm legătura</h1>
    <p class="fade-up" style="transition-delay:.1s">
      Spune-ne despre echipa ta și cum plănuiești să folosești <strong>NeuroCAD</strong>. Răspundem rapid.
    </p>
  </div>
</header>

<main>
  <!-- CONTACTE RAPIDE + FORMULAR -->
  <section class="section">
    <div class="container two-col">
      <!-- Contacte rapide -->
      <aside class="card contact-card fade-up">
        <h3>Contacte rapide</h3>
        <ul class="contact-list">
          <li><span>Vânzări</span> <a href="tel:+40311222333">+40 311 222 333</a></li>
          <li><span>Suport</span> <a href="tel:+40311333444">+40 311 333 444</a></li>
          <li><span>Email</span> <a href="mailto:contact@neurocad.ai">contact@neurocad.ai</a></li>
          <li><span>Program</span> Luni–Vineri, 09:00–18:00</li>
        </ul>
        <div class="badges">
          <span class="chip">Răspuns &lt; 24h</span>
          <span class="chip">Demo live</span>
          <span class="chip">NDA disponibil</span>
        </div>
      </aside>

      <!-- Formular -->
      <div class="fade-up" style="transition-delay:.1s">
        <?php if ($sent): ?>
          <div class="card success">
            <h3>Mulțumim! 🎉</h3>
            <p>Mesajul tău a fost trimis. Îți răspundem în cel mult o zi lucrătoare.</p>
            <a class="btn ghost" href="index.php">Înapoi la Home</a>
          </div>
        <?php else: ?>
          <h2>Trimite-ne un mesaj</h2>
          <form method="post" class="contact-form" novalidate>
            <!-- honeypot anti-spam (ascuns) -->
            <input type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px" aria-hidden="true">

            <div class="grid-2">
              <div class="row">
                <label>Nume <span class="req">*</span></label>
                <input type="text" name="nume" value="<?php echo htmlspecialchars($_POST['nume'] ?? '') ?>" required />
                <?php if(isset($errors['nume'])): ?><small class="small" style="color:#fca5a5"><?php echo $errors['nume']; ?></small><?php endif; ?>
              </div>

              <div class="row">
                <label>Email <span class="req">*</span></label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>" required />
                <?php if(isset($errors['email'])): ?><small class="small" style="color:#fca5a5"><?php echo $errors['email']; ?></small><?php endif; ?>
              </div>

              <div class="row">
                <label>Telefon</label>
                <input type="tel" name="telefon" placeholder="+40 ..." value="<?php echo htmlspecialchars($_POST['telefon'] ?? '') ?>" />
              </div>

              <div class="row">
                <label>Companie</label>
                <input type="text" name="companie" placeholder="Numele companiei" value="<?php echo htmlspecialchars($_POST['companie'] ?? '') ?>" />
              </div>

              <div class="row row-full">
                <label>Interes</label>
                <select name="interes">
                  <option value="">Alege o opțiune</option>
                  <?php
                    $options = ['Automatizare procese','Optimizare design','Training echipă','Integrare cu SolidWorks'];
                    $cur = $_POST['interes'] ?? '';
                    foreach ($options as $opt) {
                      $sel = ($opt === $cur) ? 'selected' : '';
                      echo "<option $sel>$opt</option>";
                    }
                  ?>
                </select>
              </div>

              <div class="row row-full">
                <label>Mesaj <span class="req">*</span></label>
                <textarea name="mesaj" rows="6" placeholder="Spune-ne pe scurt ce ai nevoie..." required><?php echo htmlspecialchars($_POST['mesaj'] ?? '') ?></textarea>
                <?php if(isset($errors['mesaj'])): ?><small class="small" style="color:#fca5a5"><?php echo $errors['mesaj']; ?></small><?php endif; ?>
              </div>
            </div>

            <div class="actions">
              <button type="submit" class="btn primary">Trimite mesajul</button>
              <a class="btn ghost" href="index.php">Renunță</a>
            </div>
          </form>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- TABEL CU DATE / CONTACTE / ROLURI -->
  <section class="section alt">
    <div class="container">
      <h2 class="fade-up">Detalii de contact & puncte-cheie</h2>

      <div class="table-wrap fade-up" style="transition-delay:.1s">
        <table class="pro-table">
          <thead>
            <tr>
              <th>Nume</th>
              <th>Funcție</th>
              <th>Telefon</th>
              <th>Email</th>
              <th>Interes</th>
              <th>Observații</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Andrei Popescu</td>
              <td>Consultant Vânzări</td>
              <td><a href="tel:+40311222333">+40 311 222 333</a></td>
              <td><a href="mailto:andrei@neurocad.ai">andrei@neurocad.ai</a></td>
              <td>Demo tehnic</td>
              <td><span class="chip">Răspuns rapid</span></td>
            </tr>
            <tr>
              <td>Ioana Marinescu</td>
              <td>Suport Tehnic</td>
              <td><a href="tel:+40311333444">+40 311 333 444</a></td>
              <td><a href="mailto:ioana@neurocad.ai">ioana@neurocad.ai</a></td>
              <td>Integrare SW</td>
              <td><span class="chip">NDA la cerere</span></td>
            </tr>
            <tr>
              <td>Vlad Ionescu</td>
              <td>Parteneriate</td>
              <td><a href="tel:+40311444555">+40 311 444 555</a></td>
              <td><a href="mailto:vlad@neurocad.ai">vlad@neurocad.ai</a></td>
              <td>Distribuție</td>
              <td><span class="chip">Europa Centrală</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="grid-3 fade-up" style="margin-top:18px;transition-delay:.2s">
        <div class="card">
          <h3>Evaluare gratuită</h3>
          <p>Analizăm fluxul tău de proiectare și îți sugerăm unde NeuroCAD aduce cel mai mare impact.</p>
        </div>
        <div class="card">
          <h3>Demo personalizat</h3>
          <p>Demo live adaptat pe modelele tale — nu prezentări generice.</p>
        </div>
        <div class="card">
          <h3>Plan de adoptare</h3>
          <p>Ghid pas cu pas pentru pilot, training și rollout în echipă.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container small">
    <p>© <?php echo date('Y'); ?> NeuroCAD • Toate drepturile rezervate</p>
  </div>
</footer>

<!-- Script animații: IO + fallback -->
<script>
(function(){
  function inView(el){
    var r = el.getBoundingClientRect();
    return (r.top < window.innerHeight*0.85) && (r.bottom > 0);
  }
  function revealOnScroll(){
    document.querySelectorAll('.fade-up:not(.in)').forEach(function(el){
      if (inView(el)) el.classList.add('in');
    });
  }

  if ('IntersectionObserver' in window){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if (entry.isIntersecting){
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    document.addEventListener('DOMContentLoaded', function(){
      document.querySelectorAll('.fade-up').forEach(function(el){ io.observe(el); });
    });
  } else {
    document.addEventListener('scroll', revealOnScroll);
    window.addEventListener('resize', revealOnScroll);
    document.addEventListener('DOMContentLoaded', revealOnScroll);
    window.addEventListener('load', function(){ setTimeout(revealOnScroll, 50); });
  }
  window.addEventListener('load', function(){ setTimeout(revealOnScroll, 50); });
})();
</script>

</body>
</html>
<a href="#top" class="back-to-top" aria-label="Mergi sus">⬆</a>
