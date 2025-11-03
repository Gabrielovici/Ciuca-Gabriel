<?php /* -------------------------
     NeuroCAD - Pagina principală
     ----------------------------
     Asta e pagina "Home" a site-ului tău.
     Aici prezentăm softul, ce face, și linkuri spre alte pagini.
  */ ?>

<!DOCTYPE html>
<html lang="ro">
<head>
  <!-- Setăm caracterele pentru diacritice -->
  <meta charset="utf-8" />

  <!-- Face pagina să se afișeze corect și pe telefon -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Textul care apare în tab-ul browserului -->
  <title>NeuroCAD</title>

  <!-- Legăm fișierul de stiluri (culori, poziționare etc.)!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
  <link rel="stylesheet" href="styles.css" />
</head>

<a href="#top" class="back-to-top" aria-label="Mergi sus">⬆</a>
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

  <!-- =========================== -->
  <!--     ANTETUL SITE-ULUI      -->
  <!-- =========================== -->
  <header class="site-header">
    <div class="container nav">

      <!-- LOGO-UL - numele softului -->
      <a class="logo" href="/">Neuro<span>CAD</span></a>

      <!-- MENIUL DE NAVIGARE -->
     <nav>
  <a href="#despre">Despre</a>
  <a href="#functii">Funcționalități</a>
  <a href="#tehnologie">Tehnologie</a>



  <!-- Abonarea rămâne link secundar -->
  <a href="subscribe.php" class="btn ghost">Abonează-te</a>

  <a href="contact.php" class="btn primary">Hai să luăm legătura</a>


</nav>

    </div>

    <!-- ZONA HERO (titlu mare + butoane) -->
    <div class="container hero">
      <!-- Titlul principal -->
      <h1>Copilotul tău inteligent pentru <span>SolidWorks</span></h1>

      <!-- Descriere scurtă -->
      <!-- ======= SECTIUNEA DESPRE ======= -->
<section id="despre" class="section">
  <div class="container two-col">

    <!-- Coloana din stânga -->
    <div>
      <h2>Ce este <span>NeuroCAD</span>?</h2>
      <p>
        <strong>NeuroCAD</strong> este copilotul tău inteligent pentru <em>SolidWorks</em> —
        un asistent bazat pe inteligență artificială care transformă ideile tale în modele 3D
        reale, în doar câteva secunde. Gândește-l ca pe un inginer virtual care îți anticipează
        pașii, învață stilul tău de lucru și te ajută să proiectezi cu o precizie incredibilă.
      </p>

      <!--  Puncte forte -->
      <h3 class="subtitle">Puncte forte</h3>
      <ul class="bullets fancy">
        <li><strong>Conversie instantanee</strong> – transformă descrieri text în modele CAD complet funcționale.</li>
        <li><strong>Compatibilitate totală</strong> – funcționează nativ cu <em>SolidWorks 2020–2025</em>.</li>
        <li><strong>Forme parametrice</strong> – suport pentru cuburi, prisme, cilindri și operații precum chamfer, fillet sau găuri.</li>
        <li><strong>Extensibilitate ridicată</strong> – poți adăuga rapid forme, macro-uri și comenzi noi.</li>
        <li><strong>Mod educațional</strong> – explică pas cu pas cum se generează fiecare macro, perfect pentru învățare.</li>
        <li><strong>Opțional</strong> – control vocal și previzualizare 3D interactivă în timp real.</li>
      </ul>
    </div>

    <!-- Coloana din dreapta (card lateral) -->
    <div class="card">
      <h3>De ce NeuroCAD?</h3>
      <p>
        Pentru că un inginer nu ar trebui să piardă timp cu operații repetitive.
        <strong>NeuroCAD</strong> automatizează procesele de proiectare și îți oferă o
        experiență fluidă, sigură și inteligentă, ca să te concentrezi pe ceea ce contează:
        <em>inovația</em>.
      </p>
    </div>
  </div>
</section>


      <!-- Butoane mari de acțiune -->
      <div class="cta-row">
  <a class="btn primary" href="contact.php">Hai să luăm legătura</a>
  <a class="btn ghost" href="subscribe.php">Abonează-te</a>
</div>

    </div>
  </header>

  <!-- =========================== -->
  <!--        CONȚINUT PRINCIPAL   -->
  <!-- =========================== -->
  <main>

    <!-- ======= SECTIUNEA DESPRE ======= -->
    <section id="despre" class="section">
      <div class="container two-col">

        <!-- Coloana din stânga -->
        <div>
          <h2>Ce este <span>NeuroCAD</span>?</h2>
          <p>
            NeuroCAD este un asistent bazat pe inteligență artificială, integrat în SolidWorks,
            care te ajută să proiectezi mai rapid, mai precis și mai eficient.
          </p>

          <!-- Listă cu beneficii -->
          <ul class="bullets">
            <li>Analizează modelele și sugerează optimizări inteligente.</li>
            <li>Generează automat schițe și componente repetitive.</li>
            <li>Reduce timpii de proiectare și erorile umane.</li>
          </ul>
        </div>

        <!-- Coloana din dreapta (cardul gri) -->
        <div class="card">
          <h3>De ce NeuroCAD?</h3>
          <p>
            Pentru că inginerii nu ar trebui să piardă timp cu sarcini repetitive.
            NeuroCAD învață stilul tău de lucru și te ajută să te concentrezi pe inovație.
          </p>
        </div>
      </div>
    </section>

<!-- ======= SECTIUNEA FUNCTII ======= -->
<section id="functii" class="section alt animate-on-scroll">
  <div class="container">
    <h2>Funcționalități principale</h2>

    <!-- Trei carduri pe rând -->
    <div class="grid-3">

      <!-- Card 1 -->
      <div class="card fade-up">
        <h3>🧠 Asistență AI</h3>
        <p>Predicții contextuale și sugestii automate bazate pe modele de lucru reale.</p>
      </div>

      <!-- Card 2 -->
      <div class="card fade-up" style="animation-delay: .1s;">
        <h3>⚙️ Automatizare</h3>
        <p>Crează componente, features și rapoarte fără intervenție manuală.</p>
      </div>

      <!-- Card 3 -->
      <div class="card fade-up" style="animation-delay: .2s;">
        <h3>📊 Optimizare</h3>
        <p>Analizează designurile pentru a reduce masa, costurile și timpii de execuție.</p>
      </div>

    </div>
  </div>
</section>



    <!-- ======= SECTIUNEA TEHNOLOGIE ======= -->
    <section id="tehnologie" class="section">
      <div class="container two-col">

        <!-- Text explicativ -->
        <div>
          <h2>Tehnologie</h2>
          <p>
            NeuroCAD se bazează pe modele AI de ultimă generație, antrenate pe mii de proiecte CAD.
            Compatibil cu SolidWorks și alte soluții CAD majore.
          </p>

          <ul class="bullets">
            <li>Motor AI proprietar pentru recunoașterea formelor.</li>
            <li>Integrare rapidă prin plugin oficial SolidWorks.</li>
            <li>Funcționează local, fără a încărca date în cloud.</li>
          </ul>
        </div>

        <!-- Cardul cu informații despre securitate -->
        <div class="card">
          <h3>Performanță & Securitate</h3>
          <p>
            Totul rulează pe stația ta de lucru, fără conexiuni externe.
            Datele de proiectare rămân 100% confidențiale.
          </p>
        </div>
      </div>
    </section>

    <!-- ======= SECTIUNEA CTA (Abonare) ======= -->
    <section id="cta" class="section highlight">
      <div class="container center">
        <h2>Momentan, vânzările sunt suspendate</h2>
        <p>
          Abonează-te la newsletter pentru a fi notificat când lansăm versiunea publică a
          <strong>NeuroCAD</strong>.
        </p>

        <!-- Butonul duce la pagina "subscribe.php" -->
        <a class="btn primary" href="subscribe.php">Abonează-te</a>
      </div>
    </section>

  </main>

  <!-- =========================== -->
  <!--          FOOTER            -->
  <!-- =========================== -->
  <footer class="site-footer">
    <div class="container small">
      <!-- Afișează automat anul curent -->
      <p>© <?php echo date('Y'); ?> NeuroCAD • Toate drepturile rezervate</p>
    </div>
  </footer>

</body>
</html>
