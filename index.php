<?php
/* ==========================================================
   NeuroCAD - Pagina principală 
   ========================================================== */
?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NeuroCAD – Copilotul tău inteligent pentru SolidWorks  </title>
  <link rel="stylesheet" href="styles.css" />
</head>
<style>
/* ===== HERO VIDEO BACKGROUND ===== */
.hero {
  position: relative;
  height: 90vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  color: white;
}

.video-bg {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  transform: translate(-50%, -50%);
  object-fit: cover;
  z-index: 1;
  filter: brightness(35%); /* întunecă puțin ca textul să fie clar */
}

.hero-inner {
  position: relative;
  z-index: 2;
  max-width: 850px;
  padding: 0 20px;
  animation: fade-in 0.9s ease both;
}

/* Animație fină */
@keyframes fade-in {
  from { opacity: 0; transform: translateY(35px); }
  to   { opacity: 1; transform: translateY(0); }
}

</style>
<body id="top">
  <!-- Buton "Mergi sus" -->
  <a href="#top" class="back-to-top" aria-label="Mergi sus">⬆</a>

  <!-- NAVBAR -->
  <header class="site-header">
    <div class="container nav">
      <a href="/" class="logo">Neuro<span>CAD</span></a>
      <nav>
        <a href="#despre">Despre</a>
        <a href="#functii">Funcționalități</a>
        <a href="#tehnologie">Tehnologie</a>
        <a href="#nevoie">Nevoia</a>
        <a href="subscribe.php" class="btn ghost">Abonează-te</a>
        <a href="contact.php" class="btn primary">Contact</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
 <section class="hero">
  <video autoplay muted loop playsinline class="video-bg">
    <source src="videoai.mp4" type="video/mp4">
  </video>

  <div class="hero-inner">
    <h1>Copilotul tău inteligent  pentru  <span id="typed"></span></h1>
    <div class="cta-row">
      <a class="btn primary" href="contact.php">Hai să luăm legătura</a>
      <a class="btn ghost" href="subscribe.php">Abonează-te</a>
    </div>
  </div>
</section>


  <!-- DESPRE -->
  <section id="despre" class="section reveal">
  <div class="container two-col">

    <!-- Text stânga -->
    <div>
      <h2>Ce este <span>NeuroCAD</span>?</h2>
      <p>
        <strong>NeuroCAD</strong> este un copilot inteligent pentru <em>SolidWorks </em>,
        creat pentru a elimina munca repetitivă și a accelera procesul de proiectare 3D.
        Scrie macro-uri, optimizează modele și învață stilul tău de lucru.
      </p>

      <ul class="bullets">
        <li>Conversie instantanee — text → model CAD.</li>
        <li>Compatibilitate completă cu SolidWorks 2020–2025.</li>
        <li>Macro-uri inteligente și forme parametrice complexe.</li>
      </ul>

      <a href="contact.php" class="btn primary" style="margin-top:10px;">Hai să luăm legătura</a>
    </div>

    <!-- Imagine dreapta -->
    <div class="image-box">
      <img src="NeuroCAD_logo.jpg" alt="NeuroCAD Preview">
    </div>

  </div>
</section>


  <!-- FUNCȚII -->
  <section id="functii" class="section alt reveal">
    <div class="container center">
      <h2>Funcționalități principale</h2>
      <div class="flex-cards">
        <div class="card"><h3> Asistență AI</h3><p>Predicții contextuale și completări inteligente.</p></div>
        <div class="card"><h3> Automatizare</h3><p>Generează macro-uri și modele instant.</p></div>
        <div class="card"><h3> Optimizare</h3><p>Analize pentru masă, cost și execuție.</p></div>
      </div>
    </div>
  </section>

  <!-- TEHNOLOGIE -->
  <section id="tehnologie" class="section reveal">
    <div class="container two-col">
      <div>
        <h2>Tehnologie & Inovație</h2>
        <p>Un motor AI antrenat pe mii de proiecte CAD reale, capabil să înțeleagă geometria, intenția de design și contextul modelului.</p>
      </div>
      <div class="card">
        <h3>Performanță & Securitate</h3>
        <p>Rulează local, păstrând datele tale complet private.</p>
      </div>
    </div>
  </section>

  <!-- DESCRIEREA NEVOII -->
  <section id="nevoie" class="section alt reveal">
    <div class="container">
      <h2>1. Descrierea Nevoii</h2>
      <div class="card">
        <h3>1.1 Ideea generală</h3>
        <p>Proiectul <strong>NeuroCAD</strong> propune un sistem inteligent care generează automat macro-uri CAD din limbaj natural, folosind <strong>rețele neuronale</strong> (NLP).</p>
        <blockquote>„Generează un cub de 200 mm cu fillet de 5 mm.”</blockquote>
      </div>
      <div class="card">
        <h3>1.2 Studiu de caz</h3>
        <p>Automatizarea modelării 3D în <em>SolidWorks</em> — reducerea timpului pierdut pe sarcini repetitive precum plăcuțe, flanșe, carcase.</p>
      </div>
      <div class="card">
        <h3>1.3 Beneficii</h3>
        <table class="pro-table">
          <thead><tr><th>Beneficiu</th><th>Descriere</th><th>Măsură</th></tr></thead>
          <tbody>
            <tr><td> Timp</td><td>Modelare în secunde, nu minute</td><td>↓ 80–90%</td></tr>
            <tr><td> Efort</td><td>Fără programare VBA</td><td>0 skill coding</td></tr>
            <tr><td> Standardizare</td><td>Macro-uri uniforme</td><td>100% consistență</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="cta" class="section highlight">
    <div class="container center">
      <h2>Momentan, vânzările sunt suspendate</h2>
      <p>Abonează-te la newsletter pentru lansarea oficială a <strong>NeuroCAD</strong>.</p>
      <a href="subscribe.php" class="btn primary">Abonează-te</a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container small">
      <p>© <?php echo date('Y'); ?> NeuroCAD • Toate drepturile rezervate</p>
    </div>
  </footer>

  <!-- JavaScript -->
  <script>
  document.addEventListener("DOMContentLoaded", () => {
    // Buton sus
    const btn = document.querySelector('.back-to-top');
    window.addEventListener('scroll', () => {
      btn.classList.toggle('show', window.scrollY > 400);
    });

    // Navbar efect
    const nav = document.querySelector('.site-header');
    window.addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', window.scrollY > 50);
    });

    // Text typing
    const words = ["SolidWorks ", "Design Inteligent ", "Automatizare CAD "];
    let i = 0, j = 0, span = document.getElementById('typed');
    let typing = true;
    function loop() {
      let word = words[i];
      span.textContent = word.slice(0, j);
      if (typing) {
        j++;
        if (j === word.length) { typing = false; setTimeout(loop, 1500); return; }
      } else {
        j--;
        if (j === 0) { typing = true; i = (i + 1) % words.length; }
      }
      setTimeout(loop, typing ? 90 : 45);
    }
    loop();

    // Apariție la scroll
    const reveals = document.querySelectorAll('.reveal');
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: .2 });
    reveals.forEach(r => obs.observe(r));
  });
  </script>
</body>
</html>
