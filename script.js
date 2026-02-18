/* ============================================================
   PORTFOLIO — AZEDDINE  |  Premium Script
   ============================================================ */

// ── YEAR ──────────────────────────────────────────────────────
const yearEl = document.getElementById("year");
if (yearEl) yearEl.textContent = new Date().getFullYear();

// ── NAV SCROLL ────────────────────────────────────────────────
const navbar = document.getElementById("navbar");
window.addEventListener("scroll", () => {
  navbar.classList.toggle("scrolled", window.scrollY > 30);
}, { passive: true });

// ── BURGER MENU ───────────────────────────────────────────────
const burger = document.getElementById("burgerBtn");
const mobile = document.getElementById("mobileMenu");

if (burger && mobile) {
  burger.addEventListener("click", () => {
    const open = mobile.style.display === "block";
    mobile.style.display = open ? "none" : "block";
    burger.setAttribute("aria-expanded", String(!open));
  });

  mobile.querySelectorAll("a").forEach(a => {
    a.addEventListener("click", () => {
      mobile.style.display = "none";
      burger.setAttribute("aria-expanded", "false");
    });
  });
}

// ── TYPED TEXT ────────────────────────────────────────────────
const typedEl = document.getElementById("typed");
if (typedEl) {
  const phrases = [
    "Développeur Web",
    "PHP / MySQL",
    "JavaScript",
    "Passionné du code 💜",
  ];
  let pi = 0, ci = 0, deleting = false;

  function type() {
    const phrase = phrases[pi];
    typedEl.textContent = deleting
      ? phrase.slice(0, ci--)
      : phrase.slice(0, ci++);

    let delay = deleting ? 50 : 90;

    if (!deleting && ci > phrase.length) {
      delay = 1800;
      deleting = true;
    } else if (deleting && ci < 0) {
      deleting = false;
      ci = 0;
      pi = (pi + 1) % phrases.length;
      delay = 400;
    }

    setTimeout(type, delay);
  }
  type();
}

// ── SCROLL REVEAL ─────────────────────────────────────────────
const reveals = document.querySelectorAll(".reveal");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        // Stagger children in the same parent
        const siblings = [...entry.target.parentElement.querySelectorAll(".reveal:not(.visible)")];
        const idx = siblings.indexOf(entry.target);
        setTimeout(() => {
          entry.target.classList.add("visible");
        }, idx * 80);
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
);

reveals.forEach(el => observer.observe(el));

// ── PARTICLES ─────────────────────────────────────────────────
(function initParticles() {
  const canvas = document.getElementById("particles");
  if (!canvas) return;

  const ctx = canvas.getContext("2d");
  let W, H, particles = [];

  const COLORS = ["#7c3aed", "#2563eb", "#06b6d4", "#a78bfa"];
  const COUNT = 55;

  function resize() {
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }

  function rand(min, max) { return Math.random() * (max - min) + min; }

  function createParticle() {
    return {
      x: rand(0, W),
      y: rand(0, H),
      r: rand(1, 2.5),
      vx: rand(-0.3, 0.3),
      vy: rand(-0.4, -0.1),
      alpha: rand(0.2, 0.7),
      color: COLORS[Math.floor(Math.random() * COLORS.length)],
    };
  }

  function init() {
    resize();
    particles = Array.from({ length: COUNT }, createParticle);
  }

  function draw() {
    ctx.clearRect(0, 0, W, H);

    particles.forEach(p => {
      ctx.save();
      ctx.globalAlpha = p.alpha;
      ctx.fillStyle = p.color;
      ctx.shadowColor = p.color;
      ctx.shadowBlur = 8;
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fill();
      ctx.restore();

      p.x += p.vx;
      p.y += p.vy;

      if (p.y < -10) { p.y = H + 10; p.x = rand(0, W); }
      if (p.x < -10) p.x = W + 10;
      if (p.x > W + 10) p.x = -10;
    });

    requestAnimationFrame(draw);
  }

  window.addEventListener("resize", resize, { passive: true });
  init();
  draw();
})();

// ── SMOOTH ACTIVE NAV LINK ────────────────────────────────────
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll(".links a, .mobile a");

const sectionObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        navLinks.forEach(link => {
          link.classList.toggle(
            "active",
            link.getAttribute("href") === "#" + entry.target.id
          );
        });
      }
    });
  },
  { threshold: 0.4 }
);

sections.forEach(s => sectionObserver.observe(s));
