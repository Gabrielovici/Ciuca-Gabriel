<?php
/* NeuroCAD — Pagina Home interactivă (fără video, cu efecte JS moderne) */
?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NeuroCAD - Copilotul tău inteligent pentru SolidWorks</title>
  <link rel="stylesheet" href="styles.css" />

  <style>
    /* ===== HERO ===== */
    .hero {
      padding: 100px 0 70px;
      text-align: center;
      color: white;
      background: radial-gradient(circle at top left, #1a1038, #0b1220 60%);
    }
    .hero h1 span {
      background: linear-gradient(90deg, #8b5cf6, #9333ea);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    /* ===== NAVBAR dinamic ===== */
    .site-header .nav {
      background: rgba(11,18,32,.85);
      border-bottom: 1px solid #222;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 10%;
      transition: all .3s ease;
    }
    .site-header .nav.scrolled {
      background: rgba(11,18,32,.95);
      backdrop-filter: blur(6px);
      box-shadow: 0 2px 8px rgba(0,0,0,.3);
    }

    /* ===== REVEAL ANIMATION ===== */
    .reveal {
      opacity: 0;
      transform: translateY(40px);
      transition: all 0.8s ease;
    }
    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* ===== BUTTONS ===== */
    .btn {
      padding: 10px 18px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      margin: 5px;
    }
    .btn.primary {
      background: linear-gradient(90deg, #9333ea, #5f00cc);
      color: white;
    }
    .btn.ghost {
      border: 1px solid #9333ea;
      color: #9333ea;
    }
    .btn.primary:hover { filter: brightness(1.1); }
    .btn.ghost:hover { background: #9333ea; color: white; }

    /* ===== FOOTER ===== */
    .site-footer {
      text-align: center;
      padding: 30px 0;
      color: #999;
      border-top: 1px solid #222;
    }

    body { background: #0b1220; color: #ddd; font-family: 'Segoe UI', sans-serif; }
    h2, h3 { color: white; }

    /* Center containers */
    .container { width: 85%; margin: auto; max-width: 1100px; }

    /* Scroll button */
    .back-to-top {
      position: fixed;
      right: 25px;
      bottom: 25px;
      font-size: 22px;
      background: #9333ea;
      color: white;
      border-radius: 50%;
      padding: 10px 14px;
      text-decoration: none;
      opacity: 0;
      pointer-events: none;
      transition: opacity .3s ease;
    }
    .back-to-top.show { opacity: 1; pointer-events: all; }

  </style>
</head>

<body id="top">

  <!-- ===== BUTON SUS ===== -->
  <a href="#top" class="back-to-top" aria-label="Mergi sus">⬆</a>

  <!-- ===== HEADER ===== -->
  <header class="site-header">
    <div class="container nav">
      <a class="logo" href="/">Neuro<span>CAD</span></a>
      <nav>
        <a href="#despre">Despre</a>
        <a href="#functii">Funcționalități</a>
        <a href="#tehnologie">Tehnologie</a>
        <a href="subscribe.php" class="btn ghost">Abonează-te</a>
        <a href="contact.php" class="btn primary">Contact</a>
      </nav>
    </div>

    <!-- HERO -->
    <div class="container hero">
      <div class="hero-content">
        <h1>Copilotul tău inteligent pentru <span id="typed"></span></h1>
        <p>Transformă modul în care proiectezi. <strong>NeuroCAD</strong> este un asistent AI care scrie macro-uri, optimizează modele și învață stilul tău de lucru.</p>
        <div class="cta-row">
          <a class="btn primary" href="contact.php">Hai să luăm legătura</a>
          <a class="btn ghost" href="subscribe.php">Abonează-te</a>
        </div>
      </div>
    </div>
  </header>

  <!-- ===== MAIN ===== -->
  <main>
    <section id="despre" class="section reveal">
      <div class="container">
        <h2>Ce este <span>NeuroCAD</span>?</h2>
        <p><strong>NeuroCAD</strong> este un copilot inteligent pentru <em>SolidWorks</em>,
        proiectat pentru a elimina munca repetitivă și a accelera procesul de design. 
        Îi spui ce vrei, iar el creează pentru tine.</p>
      </div>
    </section>

    <section id="functii" class="section reveal">
      <div class="container">
        <h2>Funcționalități principale</h2>
        <ul>
          <li>🧠 Asistență AI — predicții și completări inteligente.</li>
          <li>⚙️ Automatizare completă — macro-uri și componente dintr-un click.</li>
          <li>📊 Optimizare — analize pentru masă, cost și execuție.</li>
        </ul>
      </div>
    </section>

    <section id="tehnologie" class="section reveal">
      <div class="container">
        <h2>Tehnologie & Inovație</h2>
        <p>Motor AI antrenat pe mii de proiecte CAD, care înțelege geometria și intenția designerului.</p>
      </div>
    </section>
  </main>

  <!-- ===== FOOTER ===== -->
  <footer class="site-footer">
    <div class="container small">
      <p>© <?php echo date('Y'); ?> NeuroCAD • Toate drepturile rezervate</p>
    </div>
  </footer>

  <!-- ===== SCRIPTURI JS ===== -->
  <script>
  // ===== Buton "Mergi sus" =====
  (function(){
    const btn = document.querySelector('.back-to-top');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) btn.classList.add('show');
      else btn.classList.remove('show');
    });
  })();

  // ===== Navbar care devine opac =====
  window.addEventListener("scroll", () => {
    const nav = document.querySelector(".site-header .nav");
    if (window.scrollY > 60) nav.classList.add("scrolled");
    else nav.classList.remove("scrolled");
  });

  // ===== Text typing effect =====
  document.addEventListener("DOMContentLoaded", () => {
    const words = ["SolidWorks", "Design Inteligent", "Automatizare CAD"];
    let i = 0;
    const span = document.getElementById("typed");

    function type() {
      let word = words[i];
      let j = 0;
      span.textContent = "";
      const interval = setInterval(() => {
        span.textContent = word.substring(0, j);
        j++;
        if (j > word.length) {
          clearInterval(interval);
          setTimeout(erase, 1500);
        }
      }, 80);
    }
    function erase() {
      let word = words[i];
      let j = word.length;
      const interval = setInterval(() => {
        span.textContent = word.substring(0, j);
        j--;
        if (j < 0) {
          clearInterval(interval);
          i = (i + 1) % words.length;
          setTimeout(type, 300);
        }
      }, 40);
    }
    type();
  });

  // ===== Efect de apariție (reveal la scroll) =====
  document.addEventListener("DOMContentLoaded", () => {
    const els = document.querySelectorAll(".reveal");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });
    els.forEach(el => observer.observe(el));
  });
  </script>
</body>
</html>
