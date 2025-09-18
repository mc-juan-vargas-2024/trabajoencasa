<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sobre mí — Juan Jose</title>
  <style>
    :root{
      --primary: #c1121f; /* rojo principal */
      --secondary: #1e293b;
      --light: #fffafa;
      --muted: #6b7280;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      font-family: "Segoe UI", Roboto, Arial, sans-serif;
      background: radial-gradient(circle at top left, #ffe5e5, #ffbaba, #ff8e8e);
      padding:2rem;
      color:var(--secondary);
    }
    .card{
      background:var(--light);
      max-width:800px;
      width:100%;
      border-left:8px solid var(--primary);
      border-radius:12px;
      padding:2rem 2.5rem;
      box-shadow:0 10px 25px rgba(193,18,31,0.3);
      transition:transform .25s ease, box-shadow .25s ease;
    }
    .card:hover{
      transform:scale(1.02);
      box-shadow:0 16px 40px rgba(193,18,31,0.45);
    }
    h1{
      font-size:2rem;
      margin-bottom:.5rem;
      color:var(--primary);
      text-align:center;
    }
    .subtitle{
      text-align:center;
      color:var(--muted);
      margin-bottom:1.5rem;
    }
    .section{
      margin-bottom:1.25rem;
    }
    .section-title{
      font-weight:700;
      font-size:1.2rem;
      margin-bottom:.25rem;
      display:flex;
      align-items:center;
      gap:.5rem;
      color:var(--secondary);
    }
    .section-title::before{
      content:"•";
      color:var(--primary);
      font-size:1.5rem;
      line-height:1;
    }
    .name{
      color:var(--muted);
      padding-left:1.5rem;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Sobre mí</h1>
    <p class="subtitle">Mi información</p>

    <div class="section">
      <p class="section-title">Mi nombre:</p>
      <p class="name">Juan Jose Vargas</p>
    </div>
     <div class="section">
      <p class="section-title">Procedencia:</p>
      <p class="name">Soy de Bucramanga y tengo 1 hermana mayor</p>
    </div>
        <div class="section">
      <p class="section-title">Mi niñez:</p>
      <p class="name">Crecí en Bucaramanga jugando futbol y fortnite</p>
    </div>
        <div class="section">
      <p class="section-title">Mi adolescencia:</p>
      <p class="name">En mi adolescencia jugue mucho fortite y lol</p>
    </div>
        <div class="section">
      <p class="section-title">A qué me dedico:</p>
      <p class="name">Ahora estudio ingeniería de sistemas y paso mucho tiempo con mi novia</p>
    </div>
        <div class="section">
      <p class="section-title">Mis metas:</p>
      <p class="name">Graduarme y ser Heroico en free fire</p>
    </div>
        <div class="section">
      <p class="section-title">Mis experiencias laborales:</p>
      <p class="name">• No tengo todavia</p>
      <p class="name">• No tengo todavia</p>
      <p class="name">• No tengo todavia</p>
      
     
    </div>

      <p class="section-title">Mis habilidades:</p>
      <p class="name">• Logica de programacion</p>
      <p class="name">• Trabajo en equipo</p>
      <p class="name">• Manejo total de ChatGPT</p>
     
    </div>

   
    </div>
  </div>
</body>
</html>
