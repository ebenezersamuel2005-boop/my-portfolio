<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Ebenezer Samuel — IT Student & Android Developer</title>
  <meta name="description" content="Portfolio of Ebenezer Samuel — Java, Android, SQL, PHP, Networking" />
  <style>
    /* Reset & base */
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#7dd3fc;
      --muted:#9aa4b2;
      --glass: rgba(255,255,255,0.03);
      --glass-2: rgba(255,255,255,0.02);
      --radius:14px;
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      background: linear-gradient(180deg,#071026 0%, #07162a 60%);
      color:#e6eef6;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      line-height:1.5;
      padding:32px;
    }
    .container{max-width:1000px;margin:0 auto;}
    header{display:flex;align-items:center;justify-content:space-between;gap:16px;margin-bottom:28px}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{
      width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,var(--accent),#60a5fa);
      display:grid;place-items:center;color:#04263a;font-weight:700;font-size:20px;
      box-shadow:0 6px 20px rgba(7,18,36,0.6);
    }
    nav{display:flex;gap:12px;align-items:center}
    nav a{color:var(--muted);text-decoration:none;font-weight:600;padding:8px 12px;border-radius:10px}
    nav a:hover{color:white;background:var(--glass-2)}
    .cta{background:linear-gradient(90deg,#06b6d4,#60a5fa);color:#021226;padding:10px 14px;border-radius:10px;font-weight:700;text-decoration:none}
    /* Hero */
    .hero{display:grid;grid-template-columns:1fr 360px;gap:28px;align-items:center;margin-bottom:28px}
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:22px;border-radius:var(--radius);box-shadow:0 8px 30px rgba(2,6,23,0.6)}
    h1{margin:0;font-size:28px}
    .sub{color:var(--muted);margin-top:8px}
    .hero .meta{margin-top:18px;display:flex;flex-wrap:wrap;gap:10px}
    .chip{background:var(--glass);padding:8px 10px;border-radius:999px;font-weight:700;color:var(--accent);font-size:13px}
    /* right column profile */
    .profile{display:flex;flex-direction:column;gap:14px;align-items:center;text-align:center}
    .avatar{width:140px;height:140px;border-radius:18px;background:linear-gradient(180deg,#04263a,#083046);display:grid;place-items:center;font-size:48px;font-weight:800;color:var(--accent)}
    .small{color:var(--muted);font-size:14px}
    /* two-column sections */
    .grid-2{display:grid;grid-template-columns:1fr 1fr;gap:18px;margin-top:18px}
    ul{margin:0;padding-left:18px}
    .skills{display:flex;flex-wrap:wrap;gap:10px}
    .skill{background:var(--glass);padding:8px 10px;border-radius:10px;color:var(--accent);font-weight:700}
    .projects .proj{border-radius:12px;padding:12px;background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.005));margin-bottom:12px}
    footer{margin-top:28px;color:var(--muted);font-size:14px;text-align:center}
    /* contact form */
    form{display:grid;gap:8px}
    input,textarea{background:transparent;border:1px solid rgba(255,255,255,0.06);padding:10px;border-radius:10px;color:inherit;min-height:40px}
    textarea{min-height:100px;resize:vertical}
    button{background:var(--accent);border:none;padding:10px 14px;border-radius:10px;font-weight:800;color:#021226;cursor:pointer}
    /* responsive */
    @media(max-width:880px){
      .hero{grid-template-columns:1fr; text-align:center}
      nav{display:none}
      header{align-items:flex-start;gap:8px}
      .grid-2{grid-template-columns:1fr}
      .profile{align-items:center}
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="brand">
        <div class="logo">ES</div>
        <div>
          <div style="font-weight:800">Ebenezer Samuel G</div>
          <div class="small">B.Voc IT • Android & Java • Chennai</div>
        </div>
      </div>

      <nav aria-label="Main navigation">
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#skills">Skills</a>
        <a href="#contact" class="cta">Contact</a>
      </nav>
    </header>

    <section class="hero">
      <div class="card">
        <h1>Hi — I'm Ebenezer. <span style="color:var(--accent)">Android & Java developer</span></h1>
        <p class="sub">Motivated IT student with hands-on experience in Java, SQL, PHP and Android app development. Built real-world projects and completed a networking internship.</p>

        <div class="meta">
          <div class="chip">Open to rotational shifts</div>
          <div class="chip">FY'26 • Eligible</div>
          <div class="chip">Chennai</div>
        </div>

        <div class="grid-2" style="margin-top:18px">
          <div>
            <h3 style="margin:0 0 8px 0">Experience & Internship</h3>
            <div class="small">Networking Intern — SYSTECH<br>LAN/WAN configuration, Router & Switch troubleshooting, user support.</div>
            <h3 style="margin:14px 0 8px 0">Education</h3>
            <div class="small">B.Voc in Information Technology (2023–2026) — Bishop Heber College</div>
          </div>
          <div>
            <h3 style="margin:0 0 8px 0">Contact</h3>
            <div class="small">📞 +91 89250 49543<br>✉️ ebenezersamuel3333@gmail.com<br>🔗 <a href="#" style="color:var(--accent)">LinkedIn / Resume</a></div>
            <div style="margin-top:12px">
              <a href="#contact" class="cta" style="display:inline-block">Message Me</a>
            </div>
          </div>
        </div>
      </div>

      <aside class="profile card" aria-labelledby="profileTitle">
        <div id="profileTitle" class="avatar">ES</div>
        <div style="font-weight:800">Android • Java • SQL</div>
        <div class="small">Projects: IoT Air Monitor, Blood Bank (Java), Stationery Shop (PHP), Restaurant App (Android)</div>
        <div style="margin-top:12px">
          <a href="#" class="chip" style="text-decoration:none">Download Resume</a>
        </div>
      </aside>
    </section>

    <section id="skills" class="card" style="margin-top:14px">
      <h2 style="margin:0 0 8px 0">Skills</h2>
      <div class="skills">
        <span class="skill">Java</span>
        <span class="skill">Android Studio</span>
        <span class="skill">SQL</span>
        <span class="skill">PHP</span>
        <span class="skill">HTML/CSS/JS</span>
        <span class="skill">Networking (LAN/WAN)</span>
        <span class="skill">Problem Solving</span>
      </div>
    </section>

    <section id="projects" class="projects" style="margin-top:14px">
      <div class="card">
        <h2 style="margin:0 0 12px 0">Selected Projects</h2>

        <div class="proj">
          <strong>Air Monitoring System (IoT)</strong>
          <div class="small">Real-time air quality monitoring using sensors, data collection and dashboard display.</div>
        </div>

        <div class="proj">
          <strong>Blood Bank Management System (Java)</strong>
          <div class="small">Web app to manage donors, blood stock, and requests for hospitals.</div>
        </div>

        <div class="proj">
          <strong>Stationery Shop Management (PHP)</strong>
          <div class="small">Inventory and sales management system with admin and billing modules.</div>
        </div>

        <div class="proj">
          <strong>Restaurant Management System (Android)</strong>
          <div class="small">Android app for order taking and automated billing for small restaurants.</div>
        </div>
      </div>
    </section>

    <section id="contact" class="card" style="margin-top:14px">
      <h2 style="margin:0 0 12px 0">Contact Me</h2>
      <form id="contactForm" onsubmit="return handleSubmit(event)">
        <input id="name" placeholder="Your name" required />
        <input id="email" type="email" placeholder="Your email" required />
        <textarea id="message" placeholder="Message (role interest, quick intro)" required></textarea>
        <div style="display:flex;gap:10px;align-items:center">
          <button type="submit">Send Message</button>
          <div class="small" style="color:var(--muted)">This form is client-side demo only.</div>
        </div>
        <div id="status" style="margin-top:8px;color:var(--accent);font-weight:700"></div>
      </form>
    </section>

    <footer class="small">
      © <span id="year"></span> Ebenezer Samuel — Built with care. References available upon request.
    </footer>
  </div>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();

    function handleSubmit(e){
      e.preventDefault();
      var name = document.getElementById('name').value.trim();
      var email = document.getElementById('email').value.trim();
      var msg = document.getElementById('message').value.trim();
      if(!name||!email||!msg){ alert('Please fill all fields'); return false; }
      // Demo action: create mailto link so clicking "Send" opens user's mail client populated.
      var subject = encodeURIComponent('Opportunity / Contact from Portfolio — ' + name);
      var body = encodeURIComponent('Name: ' + name + '\\nEmail: ' + email + '\\n\\nMessage:\\n' + msg);
      var mailto = 'mailto:ebenezersamuel3333@gmail.com?subject=' + subject + '&body=' + body;
      // Open mail client
      window.location.href = mailto;
      document.getElementById('status').textContent = 'Opened your email client to send the message. (Or copy-paste the message manually)';
      return false;
    }
  </script>
</body>
</html>
