<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Azeddine — Développeur Web</title>
  <meta name="description" content="Portfolio d'Azeddine, développeur web PHP/MySQL/JavaScript basé à Casablanca, Maroc." />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>

<!-- CANVAS PARTICLES -->
<canvas id="particles"></canvas>

<!-- ── NAV ──────────────────────────────────────────────── -->
<header class="nav" id="navbar">
  <div class="nav-inner">
    <a class="logo" href="#accueil">AZ.</a>

    <nav class="links">
      <a href="#accueil">Accueil</a>
      <a href="#competences">Compétences</a>
      <a href="#projets">Projets</a>
      <a href="#parcours">Formation</a>
      <a href="#contact">Contact</a>
    </nav>

    <a class="nav-btn" href="#contact">Me contacter</a>
    <button class="burger" id="burgerBtn" aria-label="Menu" aria-expanded="false"><i class="fa-solid fa-bars"></i></button>
  </div>

  <!-- Mobile menu -->
  <div class="mobile" id="mobileMenu">
    <a href="#accueil">Accueil</a>
    <a href="#competences">Compétences</a>
    <a href="#projets">Projets</a>
    <a href="#parcours">Formation</a>
    <a href="#contact">Contact</a>
  </div>
</header>

<main>

  <!-- ── HERO ───────────────────────────────────────────── -->
  <section id="accueil" class="hero">
    <div class="hero-text">
      <div class="hero-badge"><i class="fa-solid fa-circle-check"></i> Disponible pour des projets</div>

      <h1>
        Bonjour, je suis<br>
        <span class="grad-text">Azeddine</span>
      </h1>

      <p class="subtitle">
        <span id="typed"></span><span class="typed-cursor"></span>
      </p>

      <p class="desc">
        Je construis des sites et applications web modernes, performants et élégants.
        Passionné par le code, j'aime apprendre, collaborer et réaliser des projets concrets.
      </p>

      <div class="btns">
        <a class="btn btn-primary" href="#projets">
          <i class="fa-solid fa-bolt"></i> Voir mes projets
        </a>
        <a class="btn btn-outline" href="#contact">
          <i class="fa-solid fa-envelope"></i> Me contacter
        </a>
        <a class="btn btn-ghost" href="https://github.com/azeddinazhari-hash" target="_blank" rel="noreferrer">
          <i class="fa-brands fa-github"></i> GitHub
        </a>
      </div>

      <div class="stats">
        <div class="stat-item">
          <span class="stat-num">4+</span>
          <span class="stat-label">Projets réalisés</span>
        </div>
        <div class="stat-item">
          <span class="stat-num">1+</span>
          <span class="stat-label">An de formation</span>
        </div>
        <div class="stat-item">
          <span class="stat-num">5+</span>
          <span class="stat-label">Technologies</span>
        </div>
      </div>
    </div>

    <div class="hero-photo">
      <div class="avatar-wrap">
        <img src="jjjj2.jpeg" alt="Photo de profil — Azeddine" class="avatar" />

        <div class="float-badge b1">
          <span class="dot"></span>
          Disponible
        </div>

        <div class="float-badge b2">
          <i class="fa-solid fa-location-dot" style="color:#06b6d4"></i> Casablanca
        </div>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- ── COMPÉTENCES ────────────────────────────────────── -->
  <section id="competences" class="section">
    <div class="section-head reveal">
      <span class="section-label">// skills</span>
      <h2>Mes Compétences</h2>
      <p>Technologies et outils que j'utilise au quotidien.</p>
    </div>

    <div class="skills-grid">
      <div class="skill-card reveal">
        <div class="skill-icon"><i class="fa-solid fa-palette"></i></div>
        <h3>Frontend</h3>
        <div class="tags">
          <span>HTML5</span>
          <span>CSS3</span>
          <span>JavaScript</span>
          <span>Responsive</span>
        </div>
      </div>

      <div class="skill-card reveal">
        <div class="skill-icon"><i class="fa-solid fa-server"></i></div>
        <h3>Backend</h3>
        <div class="tags">
          <span>PHP</span>
          <span>MySQL</span>
          <span>Python</span>
          <span>C++</span>
        </div>
      </div>

      <div class="skill-card reveal">
        <div class="skill-icon">🛠</div>
        <h3>Outils & DevOps</h3>
        <div class="tags">
          <span>Git</span>
          <span>GitHub</span>
          <span>XAMPP</span>
          <span>VS Code</span>
        </div>
      </div>

      <div class="skill-card reveal">
        <div class="skill-icon"><i class="fa-solid fa-people-group"></i></div>
        <h3>Soft Skills</h3>
        <ul class="list">
          <li>Travail en équipe</li>
          <li>Communication</li>
          <li>Sérieux &amp; ponctuel</li>
          <li>Apprentissage rapide</li>
        </ul>
      </div>

      <div class="skill-card reveal">
        <div class="skill-icon"><i class="fa-solid fa-microchip"></i></div>
        <h3>IoT & Embarqué</h3>
        <div class="tags">
          <span>Arduino</span>
          <span>Raspberry Pi</span>
          <span>Capteurs</span>
          <span>Systèmes Embarqués</span>
        </div>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- ── PROJETS ────────────────────────────────────────── -->
  <section id="projets" class="section">
    <div class="section-head reveal">
      <span class="section-label">// projects</span>
      <h2>Mes Projets</h2>
      <p>Quelques projets que j'ai réalisés durant ma formation.</p>
    </div>

    <div class="projects-grid">

      <div class="project-card reveal">
        <div class="project-top">
          <div class="project-icon"><i class="fa-solid fa-futbol"></i></div>
          <div class="project-actions">
            <a class="action-btn" href="#" target="_blank" rel="noreferrer"><i class="fa-brands fa-github"></i> GitHub</a>
          </div>
        </div>
        <h3>KoraNow</h3>
        <p>Plateforme pour organiser des matchs de football amateurs avec gestion des équipes, scores et calendriers.</p>
        <div class="tags">
          <span>PHP</span><span>MySQL</span><span>HTML/CSS</span>
        </div>
      </div>

      <div class="project-card reveal">
        <div class="project-top">
          <div class="project-icon"><i class="fa-solid fa-calendar-days"></i></div>
          <div class="project-actions">
            <a class="action-btn" href="#" target="_blank" rel="noreferrer"><i class="fa-brands fa-github"></i> GitHub</a>
          </div>
        </div>
        <h3>Terrain Booking</h3>
        <p>Système de réservation de terrains sportifs avec calendrier interactif et gestion des créneaux horaires.</p>
        <div class="tags">
          <span>PHP</span><span>MySQL</span><span>JavaScript</span>
        </div>
      </div>

      <div class="project-card reveal">
        <div class="project-top">
          <div class="project-icon"><i class="fa-solid fa-globe"></i></div>
          <div class="project-actions">
            <a class="action-btn" href="#" target="_blank" rel="noreferrer"><i class="fa-solid fa-code"></i> Code</a>
          </div>
        </div>
        <h3>Portfolio</h3>
        <p>Mon site portfolio personnel avec design responsive, animations CSS et sections dynamiques.</p>
        <div class="tags">
          <span>HTML</span><span>CSS</span><span>JavaScript</span>
        </div>
      </div>

      <div class="project-card reveal">
        <div class="project-top">
          <div class="project-icon"><i class="fa-solid fa-lightbulb"></i></div>
          <div class="project-actions">
            <a class="action-btn" href="#" target="_blank" rel="noreferrer"><i class="fa-brands fa-github"></i> GitHub</a>
          </div>
        </div>
        <h3>Mini Projet</h3>
        <p>Application JavaScript interactive — ToDo list, calculatrice ou autre projet pratique réalisé en formation.</p>
        <div class="tags">
          <span>JavaScript</span><span>HTML/CSS</span>
        </div>
      </div>

    </div>
  </section>

  <div class="divider"></div>

  <!-- ── FORMATION ──────────────────────────────────────── -->
  <section id="parcours" class="section">
    <div class="section-head reveal">
      <span class="section-label">// education</span>
      <h2>Mon Parcours</h2>
      <p>Formation académique et apprentissage en développement web.</p>
    </div>

    <div class="timeline">

      <div class="timeline-item reveal">
        <div class="timeline-dot"><i class="fa-solid fa-graduation-cap"></i></div>
        <div class="timeline-content">
          <div class="timeline-meta">
            <span class="timeline-year">2024</span>
            <span class="timeline-place">Lycée Ouled Saleh — Nouacer, Casablanca</span>
          </div>
          <h3>Baccalauréat Sciences de la Vie et de la Terre</h3>
          <p>Obtention du baccalauréat SVT avec mention. Solide base scientifique et analytique.</p>
        </div>
      </div>

      <div class="timeline-item reveal">
        <div class="timeline-dot"><i class="fa-solid fa-laptop-code"></i></div>
        <div class="timeline-content">
          <div class="timeline-meta">
            <span class="timeline-year">1 an</span>
            <span class="timeline-place">Victoria Professionnel Institut</span>
          </div>
          <h3>Formation en Développement Informatique</h3>
          <p>
            Développement web &amp; programmation : HTML, CSS, JavaScript, PHP, Python, C++.
            Conception de bases de données, projets pratiques et travail en équipe.
          </p>
        </div>
      </div>

      <div class="timeline-item reveal">
        <div class="timeline-dot"><i class="fa-solid fa-microchip"></i></div>
        <div class="timeline-content">
          <div class="timeline-meta">
            <span class="timeline-year">2024 - Présent</span>
            <span class="timeline-place">Victoria Professionnel Institut</span>
          </div>
          <h3>Formation en IoT (Internet des Objets)</h3>
          <p>
            Étude des systèmes embarqués, capteurs et protocoles de communication connectés.
            Développement de solutions intelligentes alliant matériel et logiciel.
          </p>
        </div>
      </div>

    </div>
  </section>

  <div class="divider"></div>

  <!-- ── CONTACT ────────────────────────────────────────── -->
  <section id="contact" class="section">
    <div class="section-head reveal">
      <span class="section-label">// contact</span>
      <h2>Me Contacter</h2>
      <p>Disponible pour des projets freelance, stages ou opportunités.</p>
    </div>

    <div class="contact-grid reveal">
      <div class="contact-card">
        <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
        <div>
          <h3>Email</h3>
          <a href="mailto:truckazeddine@gmail.com">truckazeddine@gmail.com</a>
        </div>
      </div>

      <div class="contact-card">
        <div class="contact-icon"><i class="fa-brands fa-github"></i></div>
        <div>
          <h3>GitHub</h3>
          <a href="https://github.com/azeddinazhari-hash" target="_blank" rel="noreferrer">github.com/azeddinazhari-hash</a>
        </div>
      </div>

      <div class="contact-card">
        <div class="contact-icon"><i class="fa-brands fa-linkedin"></i></div>
        <div>
          <h3>LinkedIn</h3>
          <a href="https://www.linkedin.com/in/azeddine-azhari-0a40173a0" target="_blank" rel="noreferrer">linkedin.com/in/azeddine-azhari</a>
        </div>
      </div>

      <div class="contact-card">
        <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
        <div>
          <h3>Téléphone</h3>
          <a href="tel:+212702372887">07 02 37 28 87</a>
        </div>
      </div>

      <div class="contact-card">
        <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
        <div>
          <h3>Localisation</h3>
          <a href="#">Casablanca, Maroc 🇲🇦</a>
        </div>
      </div>
    </div>

    <div class="cta-banner reveal">
      <h3>Travaillons ensemble <i class="fa-solid fa-rocket"></i></h3>
      <p>Un projet en tête ? Je suis disponible et motivé pour collaborer.</p>
      <a class="btn btn-primary" href="mailto:truckazeddine@gmail.com">
        <i class="fa-solid fa-paper-plane"></i> Envoyer un email
      </a>
    </div>
  </section>

</main>

<!-- ── FOOTER ─────────────────────────────────────────────── -->
<footer class="footer">
  <div class="inner">
    <span class="footer-logo">AZ.</span>
    <span class="footer-copy">© <span id="year"></span> Azeddine — Built with PHP / HTML / CSS / JS</span>
    <div class="footer-links">
      <a href="https://github.com/azeddinazhari-hash" target="_blank" rel="noreferrer">GitHub</a>
      <a href="https://www.linkedin.com/in/azeddine-azhari-0a40173a0" target="_blank" rel="noreferrer">LinkedIn</a>
    </div>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
