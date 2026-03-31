<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GAL TRHAYDERS AI | Trade Smarter</title>
  <meta name="description" content="Trade Smarter. Earn Better. Let AI Do The Work with GAL TRHAYDERS AI." />
  <style>
    :root{
      --bg:#06111f;
      --bg-2:#0b1730;
      --panel:rgba(255,255,255,0.06);
      --panel-2:rgba(255,255,255,0.08);
      --stroke:rgba(255,255,255,0.10);
      --white:#ffffff;
      --text:#d9e6ff;
      --muted:#9eb1d5;
      --green:#18c37e;
      --green-2:#0ee28f;
      --blue:#4da3ff;
      --violet:#7c5cff;
      --gold:#ffcb57;
      --danger:#ff7a7a;
      --shadow:0 16px 50px rgba(0,0,0,0.30);
      --radius:22px;
      --radius-lg:28px;
      --max:1180px;
      --transition:0.32s ease;
    }

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    html{
      scroll-behavior:smooth;
    }

    body{
      font-family:Inter, Arial, Helvetica, sans-serif;
      background:
        radial-gradient(circle at top left, rgba(77,163,255,0.10), transparent 25%),
        radial-gradient(circle at top right, rgba(24,195,126,0.10), transparent 22%),
        linear-gradient(180deg, #030814 0%, #071224 42%, #09182d 100%);
      color:var(--white);
      line-height:1.6;
      overflow-x:hidden;
      padding-bottom:90px;
    }

    a{
      text-decoration:none;
      color:inherit;
    }

    ul{
      list-style:none;
    }

    button{
      font:inherit;
    }

    .container{
      width:min(92%, var(--max));
      margin:auto;
    }

    .section{
      padding:64px 0;
      position:relative;
    }

    .section-title{
      font-size:clamp(26px, 5vw, 52px);
      line-height:1.08;
      font-weight:900;
      letter-spacing:-0.02em;
      margin-bottom:14px;
    }

    .section-subtitle{
      max-width:760px;
      color:var(--muted);
      font-size:15px;
      margin-bottom:26px;
    }

    .badge{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:10px 14px;
      border-radius:999px;
      color:#d6e7ff;
      font-size:12px;
      font-weight:800;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
    }

    .btn{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      gap:10px;
      padding:14px 18px;
      border-radius:999px;
      font-size:14px;
      font-weight:800;
      transition:var(--transition);
      border:1px solid transparent;
      cursor:pointer;
      text-align:center;
    }

    .btn-primary{
      background:linear-gradient(135deg, var(--green-2), var(--green));
      color:#04111f;
      box-shadow:0 12px 28px rgba(24,195,126,0.30);
    }

    .btn-primary:hover{
      transform:translateY(-2px);
    }

    .btn-secondary{
      background:rgba(255,255,255,0.05);
      color:#fff;
      border-color:rgba(255,255,255,0.1);
    }

    .btn-secondary:hover{
      background:rgba(255,255,255,0.08);
    }

    .btn-dark{
      background:linear-gradient(135deg, rgba(77,163,255,0.18), rgba(124,92,255,0.18));
      color:#fff;
      border-color:rgba(255,255,255,0.1);
    }

    .btn-whatsapp{
      background:linear-gradient(135deg, #25D366, #1ebe5d);
      color:#04111f;
      box-shadow:0 12px 28px rgba(37,211,102,0.25);
    }

    .btn-whatsapp:hover{
      transform:translateY(-2px);
    }

    .btn-book{
      background:linear-gradient(135deg, var(--gold), #ff9f1c);
      color:#04111f;
      box-shadow:0 14px 30px rgba(255, 190, 61, 0.28);
    }

    .btn-book:hover{
      transform:translateY(-2px);
      box-shadow:0 18px 36px rgba(255, 190, 61, 0.34);
    }

    .glass{
      background:var(--panel);
      backdrop-filter:blur(14px);
      -webkit-backdrop-filter:blur(14px);
      border:1px solid var(--stroke);
      box-shadow:var(--shadow);
    }

    .spotlight{
      position:absolute;
      width:360px;
      height:360px;
      border-radius:50%;
      filter:blur(80px);
      opacity:0.15;
      pointer-events:none;
      z-index:0;
    }

    .spot-1{top:-70px; left:-100px; background:#4da3ff;}
    .spot-2{top:120px; right:-120px; background:#18c37e;}
    .spot-3{bottom:-100px; left:15%; background:#7c5cff;}

    .navbar{
      position:sticky;
      top:0;
      z-index:1000;
      background:rgba(3,8,20,0.88);
      backdrop-filter:blur(16px);
      border-bottom:1px solid rgba(255,255,255,0.06);
    }

    .nav-wrap{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:14px;
      padding:12px 0;
    }

    .logo{
      display:flex;
      align-items:center;
      gap:10px;
      min-width:0;
      font-weight:900;
      font-size:15px;
    }

    .logo-mark{
      width:36px;
      height:36px;
      border-radius:12px;
      display:grid;
      place-items:center;
      background:linear-gradient(135deg, var(--green), var(--blue));
      box-shadow:0 10px 24px rgba(24,195,126,0.22);
      flex-shrink:0;
    }

    .logo span{
      white-space:nowrap;
      overflow:hidden;
      text-overflow:ellipsis;
    }

    .nav-links{
      display:none;
      align-items:center;
      gap:22px;
    }

    .nav-links a{
      color:#c9d8f2;
      font-size:14px;
      font-weight:700;
    }

    .nav-actions{
      display:flex;
      align-items:center;
      gap:10px;
    }

    .desktop-only{
      display:none !important;
    }

    .menu-toggle{
      width:44px;
      height:44px;
      border-radius:14px;
      border:1px solid rgba(255,255,255,0.1);
      background:rgba(255,255,255,0.04);
      display:flex;
      align-items:center;
      justify-content:center;
      flex-direction:column;
      gap:5px;
      cursor:pointer;
      flex-shrink:0;
    }

    .menu-toggle span{
      width:18px;
      height:2px;
      background:#fff;
      border-radius:2px;
    }

    .mobile-menu{
      display:none;
      padding:0 0 14px;
    }

    .mobile-menu.show{
      display:block;
    }

    .mobile-menu-inner{
      padding:14px;
      border-radius:18px;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
    }

    .mobile-menu a{
      display:block;
      padding:13px 8px;
      border-bottom:1px solid rgba(255,255,255,0.06);
      color:#dce9ff;
      font-size:14px;
      font-weight:700;
    }

    .mobile-menu a:last-child{
      border-bottom:none;
    }

    .hero{
      position:relative;
      padding:34px 0 18px;
      overflow:hidden;
    }

    .hero-grid{
      display:grid;
      grid-template-columns:1fr;
      gap:22px;
      position:relative;
      z-index:2;
    }

    .hero-copy h1{
      font-size:clamp(30px, 8vw, 62px);
      line-height:1.02;
      letter-spacing:-0.04em;
      font-weight:950;
      margin:14px 0;
      max-width:760px;
    }

    .hero-copy p{
      font-size:15px;
      color:var(--text);
      margin-bottom:20px;
      max-width:650px;
    }

    .hero-actions{
      display:flex;
      flex-direction:column;
      gap:12px;
      margin:22px 0 12px;
    }

    .hero-actions .btn{
      width:100%;
    }

    .urgency{
      color:#ffe08a;
      font-size:13px;
      font-weight:800;
      margin-top:4px;
    }

    .hero-bullets{
      display:grid;
      grid-template-columns:1fr;
      gap:12px;
      margin-top:18px;
    }

    .hero-bullet{
      display:flex;
      align-items:center;
      gap:12px;
      padding:14px;
      border-radius:18px;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.07);
      font-size:14px;
      font-weight:750;
    }

    .icon-dot{
      width:32px;
      height:32px;
      min-width:32px;
      border-radius:50%;
      display:grid;
      place-items:center;
      background:linear-gradient(135deg, rgba(24,195,126,0.24), rgba(77,163,255,0.24));
      border:1px solid rgba(255,255,255,0.08);
      font-size:14px;
      flex-shrink:0;
    }

    .hero-visual{
      position:relative;
      z-index:2;
      display:flex;
      flex-direction:column;
      gap:12px;
    }

    .dashboard-card{
      width:100%;
      border-radius:24px;
      padding:18px;
      background:linear-gradient(180deg, rgba(255,255,255,0.10), rgba(255,255,255,0.04));
      border:1px solid rgba(255,255,255,0.10);
      box-shadow:var(--shadow);
    }

    .dashboard-top{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:10px;
      flex-wrap:wrap;
      margin-bottom:14px;
    }

    .dashboard-title{
      font-size:16px;
      font-weight:850;
    }

    .live-chip{
      padding:7px 10px;
      border-radius:999px;
      background:rgba(24,195,126,0.12);
      border:1px solid rgba(24,195,126,0.22);
      color:#a5ffda;
      font-size:12px;
      font-weight:800;
    }

    .chart{
      height:170px;
      border-radius:18px;
      margin-bottom:14px;
      position:relative;
      overflow:hidden;
      border:1px solid rgba(255,255,255,0.08);
      background:
        linear-gradient(to top, rgba(24,195,126,0.12), rgba(77,163,255,0.04)),
        linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.02));
    }

    .chart::before{
      content:"";
      position:absolute;
      inset:0;
      background:
        linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
      background-size:34px 34px;
      opacity:0.34;
    }

    .chart svg{
      position:absolute;
      inset:0;
      width:100%;
      height:100%;
    }

    .metric-grid{
      display:grid;
      grid-template-columns:1fr;
      gap:10px;
    }

    .metric{
      padding:14px;
      border-radius:16px;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
    }

    .metric span{
      display:block;
      font-size:12px;
      color:var(--muted);
      margin-bottom:5px;
    }

    .metric strong{
      font-size:16px;
      font-weight:900;
    }

    .floating-mini-wrap{
      display:grid;
      gap:10px;
    }

    .floating-mini{
      padding:14px;
      border-radius:16px;
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.08);
      box-shadow:var(--shadow);
    }

    .floating-mini h4{
      font-size:12px;
      color:#bfd0ee;
      margin-bottom:6px;
      font-weight:700;
    }

    .floating-mini strong{
      font-size:18px;
      font-weight:900;
    }

    .grid-2,
    .grid-3,
    .steps,
    .footer-grid{
      display:grid;
      grid-template-columns:1fr;
      gap:18px;
      position:relative;
      z-index:2;
    }

    .card,
    .feature,
    .step,
    .highlight-box,
    .cta,
    .disclaimer{
      padding:22px;
      border-radius:22px;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
      box-shadow:var(--shadow);
    }

    .card-title{
      font-size:22px;
      font-weight:850;
      margin-bottom:10px;
    }

    .card-text{
      color:var(--muted);
      font-size:15px;
      margin-bottom:15px;
    }

    .list{
      display:grid;
      gap:12px;
    }

    .list li{
      display:flex;
      align-items:flex-start;
      gap:12px;
      padding:14px;
      border-radius:16px;
      background:rgba(255,255,255,0.04);
      border:1px solid rgba(255,255,255,0.06);
      color:#e7efff;
      font-size:14px;
      font-weight:700;
    }

    .list-icon{
      width:32px;
      height:32px;
      min-width:32px;
      border-radius:12px;
      display:grid;
      place-items:center;
      background:linear-gradient(135deg, rgba(77,163,255,0.24), rgba(124,92,255,0.22));
      font-size:14px;
      flex-shrink:0;
    }

    .feature-icon{
      width:54px;
      height:54px;
      border-radius:18px;
      display:grid;
      place-items:center;
      margin-bottom:14px;
      font-size:23px;
      background:linear-gradient(135deg, rgba(24,195,126,0.18), rgba(77,163,255,0.20));
      border:1px solid rgba(255,255,255,0.08);
    }

    .feature h3,
    .step h3{
      font-size:19px;
      font-weight:850;
      margin-bottom:8px;
    }

    .feature p,
    .step p,
    .highlight-box p,
    .cta p,
    .disclaimer p,
    .footer p{
      color:var(--muted);
      font-size:15px;
    }

    .step-number{
      width:50px;
      height:50px;
      border-radius:16px;
      display:grid;
      place-items:center;
      font-size:19px;
      font-weight:900;
      color:#04111f;
      background:linear-gradient(135deg, var(--green-2), var(--green));
      margin-bottom:14px;
      box-shadow:0 12px 28px rgba(24,195,126,0.24);
    }

    .highlight-box{
      background:linear-gradient(135deg, rgba(24,195,126,0.16), rgba(77,163,255,0.12));
      border:1px solid rgba(255,255,255,0.10);
    }

    .highlight-box h3{
      font-size:24px;
      line-height:1.12;
      font-weight:900;
      margin-bottom:10px;
    }

    .tagline-grid{
      display:grid;
      grid-template-columns:1fr;
      gap:12px;
      margin-top:18px;
    }

    .tagline{
      padding:14px;
      border-radius:16px;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
      font-size:14px;
      font-weight:800;
      color:#f5f9ff;
    }

    .bonus-book-section{
      position:relative;
      z-index:2;
    }

    .bonus-book-card{
      position:relative;
      overflow:hidden;
      border-radius:28px;
      padding:24px;
      background:
        radial-gradient(circle at top right, rgba(255,190,61,0.18), transparent 22%),
        radial-gradient(circle at bottom left, rgba(77,163,255,0.16), transparent 22%),
        linear-gradient(135deg, rgba(255,255,255,0.09), rgba(255,255,255,0.04));
      border:1px solid rgba(255,255,255,0.10);
      box-shadow:var(--shadow);
    }

    .bonus-book-card::before{
      content:"";
      position:absolute;
      top:-80px;
      right:-80px;
      width:200px;
      height:200px;
      border-radius:50%;
      background:rgba(255,190,61,0.08);
      filter:blur(10px);
      pointer-events:none;
    }

    .bonus-book-grid{
      display:grid;
      grid-template-columns:1fr;
      gap:20px;
      align-items:center;
      position:relative;
      z-index:2;
    }

    .bonus-book-cover{
      display:flex;
      justify-content:center;
      align-items:center;
    }

    .book-mock{
      width:220px;
      max-width:100%;
      border-radius:24px;
      padding:16px;
      background:linear-gradient(180deg, #0a2144, #08172d);
      border:1px solid rgba(255,255,255,0.10);
      box-shadow:0 20px 40px rgba(0,0,0,0.35);
      transform:perspective(1000px) rotateY(-10deg);
    }

    .book-inner{
      min-height:300px;
      border-radius:18px;
      padding:18px;
      background:
        radial-gradient(circle at top right, rgba(77,163,255,0.22), transparent 22%),
        linear-gradient(180deg, #0b2f62, #07162b);
      border:1px solid rgba(255,255,255,0.08);
      display:flex;
      flex-direction:column;
      justify-content:space-between;
    }

    .book-topline{
      color:#ffd76e;
      font-size:11px;
      font-weight:800;
      letter-spacing:0.06em;
      text-transform:uppercase;
    }

    .book-title{
      font-size:34px;
      line-height:0.95;
      font-weight:950;
      color:#fff;
      margin:10px 0 8px;
    }

    .book-subtitle{
      color:#d9e6ff;
      font-size:12px;
      font-weight:700;
      line-height:1.35;
      margin-bottom:18px;
    }

    .book-silhouette{
      width:100%;
      height:120px;
      border-radius:14px;
      background:linear-gradient(135deg, rgba(255,255,255,0.08), rgba(255,255,255,0.02));
      border:1px solid rgba(255,255,255,0.07);
      margin-bottom:14px;
      position:relative;
      overflow:hidden;
    }

    .book-silhouette::before{
      content:"";
      position:absolute;
      width:74px;
      height:74px;
      border-radius:50%;
      background:rgba(255,255,255,0.18);
      top:12px;
      left:50%;
      transform:translateX(-50%);
    }

    .book-silhouette::after{
      content:"";
      position:absolute;
      width:120px;
      height:80px;
      border-radius:40px 40px 12px 12px;
      background:rgba(255,255,255,0.12);
      bottom:8px;
      left:50%;
      transform:translateX(-50%);
    }

    .book-author{
      color:#fff;
      font-size:14px;
      font-weight:900;
    }

    .bonus-book-copy .bonus-label{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:10px 14px;
      border-radius:999px;
      background:rgba(255,190,61,0.16);
      border:1px solid rgba(255,190,61,0.24);
      color:#ffe08a;
      font-size:12px;
      font-weight:900;
      margin-bottom:14px;
    }

    .bonus-book-copy h2{
      font-size:clamp(28px, 6vw, 46px);
      line-height:1.05;
      font-weight:950;
      margin-bottom:12px;
    }

    .bonus-book-copy p{
      color:var(--text);
      font-size:15px;
      margin-bottom:16px;
      max-width:720px;
    }

    .bonus-features{
      display:grid;
      grid-template-columns:1fr;
      gap:10px;
      margin:18px 0 22px;
    }

    .bonus-feature{
      display:flex;
      align-items:flex-start;
      gap:12px;
      padding:14px;
      border-radius:16px;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
      color:#eaf2ff;
      font-size:14px;
      font-weight:700;
    }

    .bonus-icon{
      width:32px;
      height:32px;
      min-width:32px;
      border-radius:12px;
      display:grid;
      place-items:center;
      background:linear-gradient(135deg, rgba(255,190,61,0.22), rgba(77,163,255,0.22));
      border:1px solid rgba(255,255,255,0.08);
      font-size:14px;
    }

    .bonus-actions{
      display:flex;
      flex-direction:column;
      gap:12px;
    }

    .bonus-actions .btn{
      width:100%;
    }

    .download-note{
      margin-top:10px;
      color:#bcd0ef;
      font-size:13px;
      font-weight:700;
    }

    .cta{
      text-align:center;
      background:
        radial-gradient(circle at top right, rgba(24,195,126,0.18), transparent 24%),
        radial-gradient(circle at bottom left, rgba(77,163,255,0.14), transparent 25%),
        linear-gradient(135deg, rgba(255,255,255,0.08), rgba(255,255,255,0.04));
    }

    .cta h2{
      font-size:clamp(27px, 6vw, 54px);
      line-height:1.08;
      font-weight:950;
      margin-bottom:12px;
    }

    .contact-line{
      font-size:18px;
      font-weight:900;
      color:#ffe08a;
      margin:14px 0 18px;
      word-break:break-word;
    }

    .cta-actions{
      display:flex;
      flex-direction:column;
      gap:12px;
    }

    .cta-actions .btn{
      width:100%;
    }

    .contact-links{
      display:grid;
      gap:12px;
      margin-top:18px;
      text-align:left;
    }

    .contact-item{
      display:flex;
      align-items:flex-start;
      gap:12px;
      padding:14px;
      border-radius:16px;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
    }

    .contact-icon{
      width:34px;
      height:34px;
      min-width:34px;
      border-radius:12px;
      display:grid;
      place-items:center;
      background:linear-gradient(135deg, rgba(24,195,126,0.18), rgba(77,163,255,0.20));
      border:1px solid rgba(255,255,255,0.08);
      font-size:14px;
    }

    .contact-item strong{
      display:block;
      font-size:14px;
      color:#fff;
      margin-bottom:3px;
    }

    .contact-item a,
    .contact-item span{
      color:var(--text);
      font-size:14px;
      word-break:break-word;
    }

    .whatsapp-action{
      margin-top:10px;
    }

    .disclaimer{
      background:rgba(255,122,122,0.08);
      border:1px solid rgba(255,122,122,0.20);
    }

    .disclaimer h3{
      font-size:22px;
      font-weight:900;
      margin-bottom:10px;
    }

    .testimonials-grid{
      display:grid;
      grid-template-columns:1fr;
      gap:16px;
      position:relative;
      z-index:2;
    }

    .testimonial-card{
      padding:22px;
      border-radius:22px;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
      box-shadow:var(--shadow);
    }

    .testimonial-top{
      display:flex;
      align-items:center;
      gap:12px;
      margin-bottom:14px;
    }

    .testimonial-avatar{
      width:48px;
      height:48px;
      min-width:48px;
      border-radius:16px;
      display:grid;
      place-items:center;
      font-size:15px;
      font-weight:900;
      color:#fff;
      background:linear-gradient(135deg, rgba(24,195,126,0.26), rgba(77,163,255,0.28));
      border:1px solid rgba(255,255,255,0.08);
    }

    .testimonial-top h3{
      font-size:17px;
      font-weight:850;
      margin-bottom:2px;
    }

    .testimonial-top span{
      display:block;
      font-size:13px;
      color:var(--muted);
    }

    .testimonial-card p{
      color:var(--text);
      font-size:15px;
      margin-bottom:14px;
    }

    .stars{
      color:#ffcb57;
      letter-spacing:2px;
      font-size:15px;
      font-weight:900;
    }

    .testimonial-highlight{
      margin-top:18px;
      padding:22px;
      border-radius:22px;
      background:linear-gradient(135deg, rgba(24,195,126,0.16), rgba(77,163,255,0.12));
      border:1px solid rgba(255,255,255,0.10);
      box-shadow:var(--shadow);
    }

    .highlight-pill{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      padding:8px 12px;
      border-radius:999px;
      background:rgba(255,255,255,0.08);
      border:1px solid rgba(255,255,255,0.08);
      color:#dce8ff;
      font-size:12px;
      font-weight:800;
      margin-bottom:12px;
    }

    .testimonial-highlight h3{
      font-size:24px;
      line-height:1.15;
      font-weight:900;
      margin-bottom:10px;
    }

    .testimonial-highlight p{
      color:var(--text);
      font-size:15px;
    }

    .faq-wrap{
      display:grid;
      gap:14px;
      position:relative;
      z-index:2;
    }

    .faq-item{
      border-radius:20px;
      overflow:hidden;
      background:rgba(255,255,255,0.05);
      border:1px solid rgba(255,255,255,0.08);
      box-shadow:var(--shadow);
    }

    .faq-question{
      width:100%;
      background:transparent;
      border:none;
      color:#fff;
      cursor:pointer;
      text-align:left;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:14px;
      padding:18px 18px;
      font-size:15px;
      font-weight:800;
    }

    .faq-icon{
      width:30px;
      height:30px;
      min-width:30px;
      border-radius:10px;
      display:grid;
      place-items:center;
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.08);
      font-size:18px;
      line-height:1;
      transition:var(--transition);
    }

    .faq-answer{
      display:grid;
      grid-template-rows:0fr;
      transition:grid-template-rows 0.32s ease;
    }

    .faq-answer p{
      overflow:hidden;
      color:var(--muted);
      font-size:14px;
      line-height:1.7;
      padding:0 18px 0;
    }

    .faq-item.active .faq-answer{
      grid-template-rows:1fr;
    }

    .faq-item.active .faq-answer p{
      padding:0 18px 18px;
    }

    .faq-item.active .faq-icon{
      transform:rotate(45deg);
      background:rgba(24,195,126,0.14);
      border-color:rgba(24,195,126,0.25);
      color:#baffdf;
    }

    .footer{
      padding:54px 0 20px;
      position:relative;
      z-index:2;
    }

    .footer-grid{
      padding:22px;
      border-radius:22px;
      background:rgba(255,255,255,0.04);
      border:1px solid rgba(255,255,255,0.08);
      box-shadow:var(--shadow);
    }

    .footer h3,
    .footer h4{
      margin-bottom:12px;
    }

    .footer a{
      display:block;
      margin-bottom:10px;
      color:#dce8ff;
      font-size:14px;
      font-weight:600;
      word-break:break-word;
    }

    .footer-bottom{
      margin-top:18px;
      text-align:center;
      color:#8ea3c8;
      font-size:13px;
    }

    .sticky-cta{
      position:fixed;
      left:0;
      right:0;
      bottom:0;
      z-index:1200;
      padding:10px 12px calc(10px + env(safe-area-inset-bottom));
      background:rgba(3,8,20,0.94);
      backdrop-filter:blur(16px);
      border-top:1px solid rgba(255,255,255,0.08);
    }

    .sticky-cta-inner{
      display:grid;
      grid-template-columns:1fr auto;
      gap:10px;
      align-items:center;
      padding:10px;
      border-radius:18px;
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.08);
      box-shadow:var(--shadow);
    }

    .sticky-cta-text small{
      display:block;
      color:#9eb1d5;
      font-size:11px;
      margin-bottom:2px;
      font-weight:700;
    }

    .sticky-cta-text strong{
      display:block;
      color:#fff;
      font-size:13px;
      line-height:1.25;
      font-weight:900;
    }

    .sticky-cta .btn{
      padding:12px 16px;
      font-size:13px;
      white-space:nowrap;
    }

    .reveal{
      opacity:0;
      transform:translateY(24px);
      transition:0.7s ease;
    }

    .reveal.active{
      opacity:1;
      transform:translateY(0);
    }

    @media (min-width:768px){
      body{
        padding-bottom:0;
      }

      .sticky-cta{
        display:none;
      }

      .container{
        width:min(92%, var(--max));
      }

      .section{
        padding:84px 0;
      }

      .hero{
        padding:62px 0 28px;
      }

      .hero-grid{
        grid-template-columns:1.02fr 0.98fr;
        gap:28px;
        align-items:center;
      }

      .hero-actions{
        flex-direction:row;
        flex-wrap:wrap;
      }

      .hero-actions .btn{
        width:auto;
      }

      .hero-bullets{
        grid-template-columns:repeat(2, 1fr);
      }

      .metric-grid{
        grid-template-columns:repeat(3,1fr);
      }

      .floating-mini-wrap{
        grid-template-columns:repeat(3,1fr);
      }

      .grid-2{
        grid-template-columns:repeat(2,1fr);
      }

      .grid-3{
        grid-template-columns:repeat(2,1fr);
      }

      .steps{
        grid-template-columns:repeat(2,1fr);
      }

      .testimonials-grid{
        grid-template-columns:repeat(2,1fr);
      }

      .testimonial-highlight h3{
        font-size:28px;
      }

      .faq-question{
        font-size:16px;
        padding:20px 20px;
      }

      .faq-answer p{
        font-size:15px;
        padding:0 20px 0;
      }

      .faq-item.active .faq-answer p{
        padding:0 20px 20px;
      }

      .footer-grid{
        grid-template-columns:2fr 1fr 1fr;
      }

      .nav-links{
        display:none;
      }

      .desktop-only{
        display:none !important;
      }

      .menu-toggle{
        display:flex;
      }

      .cta-actions{
        flex-direction:row;
        justify-content:center;
        flex-wrap:wrap;
      }

      .cta-actions .btn{
        width:auto;
      }

      .contact-links{
        grid-template-columns:repeat(2, 1fr);
      }

      .bonus-book-grid{
        grid-template-columns:280px 1fr;
        gap:26px;
      }

      .bonus-features{
        grid-template-columns:repeat(2, 1fr);
      }

      .bonus-actions{
        flex-direction:row;
        flex-wrap:wrap;
      }

      .bonus-actions .btn{
        width:auto;
      }
    }

    @media (min-width:1100px){
      .nav-links{
        display:flex;
      }

      .desktop-only{
        display:inline-flex !important;
      }

      .menu-toggle,
      .mobile-menu{
        display:none !important;
      }

      .hero{
        padding:78px 0 34px;
      }

      .hero-copy h1{
        font-size:68px;
      }

      .hero-copy p,
      .section-subtitle{
        font-size:17px;
      }

      .hero-actions{
        flex-direction:row;
      }

      .hero-bullets{
        grid-template-columns:repeat(2, minmax(220px,1fr));
      }

      .floating-mini-wrap{
        display:none;
      }

      .hero-visual{
        position:relative;
        min-height:500px;
        justify-content:center;
      }

      .dashboard-card{
        max-width:500px;
        margin:auto;
      }

      .hero-visual .floating-one,
      .hero-visual .floating-two,
      .hero-visual .floating-three{
        position:absolute;
        width:180px;
      }

      .hero-visual .floating-one{ top:15px; left:0; }
      .hero-visual .floating-two{ right:0; bottom:110px; }
      .hero-visual .floating-three{ left:20px; bottom:10px; }

      .grid-3{
        grid-template-columns:repeat(3,1fr);
      }

      .steps{
        grid-template-columns:repeat(4,1fr);
      }

      .testimonials-grid{
        grid-template-columns:repeat(3,1fr);
      }

      .contact-links{
        grid-template-columns:repeat(4, 1fr);
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="container">
      <div class="nav-wrap">
        <a href="#" class="logo">
          <div class="logo-mark">GAL</div>
          <span>GAL TRHAYDERS AI</span>
        </a>

        <div class="nav-links">
          <a href="#problem">Problem</a>
          <a href="#solution">Solution</a>
          <a href="#how-it-works">How It Works</a>
          <a href="#features">Features</a>
          <a href="#bonus-book">Bonus Book</a>
          <a href="#testimonials">Testimonials</a>
          <a href="#faq">FAQ</a>
          <a href="#offer">Pre-Launch</a>
          <a href="#contact">Contact</a>
        </div>

        <div class="nav-actions">
          <a href="https://trhayders.com/" target="_blank" class="btn btn-secondary desktop-only">VIP Waitlist</a>
          <a href="https://trhayders.com/" target="_blank" class="btn btn-primary desktop-only">Get Early Access</a>

          <button class="menu-toggle" id="menuToggle" aria-label="Open Menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>

      <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-inner">
          <a href="#problem">Problem</a>
          <a href="#solution">Solution</a>
          <a href="#how-it-works">How It Works</a>
          <a href="#features">Features</a>
          <a href="#bonus-book">Bonus Book</a>
          <a href="#testimonials">Testimonials</a>
          <a href="#faq">FAQ</a>
          <a href="#offer">Pre-Launch</a>
          <a href="#contact">Contact</a>
          <a href="https://trhayders.com/" target="_blank">Get Early Access</a>
          <a href="https://trhayders.com/" target="_blank">Join VIP Waitlist</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="hero">
    <div class="spotlight spot-1"></div>
    <div class="spotlight spot-2"></div>

    <div class="container hero-grid">
      <div class="hero-copy reveal">
        <div class="badge">🚀 Next-Generation AI Trading System</div>

        <h1>Trade Smarter. Earn Better. Let AI Do The Work.</h1>

        <p>
          Introducing <strong>GAL TRHAYDERS AI</strong> — a next-generation trading system designed
          to analyze the market and execute trades intelligently, so you don’t have to.
        </p>

        <div class="hero-actions">
          <a href="https://trhayders.com/" target="_blank" class="btn btn-primary">Get Early Access</a>
          <a href="https://trhayders.com/" target="_blank" class="btn btn-secondary">Join VIP Waitlist</a>
        </div>

        <div class="urgency">⚠️ Limited pre-launch slots available.</div>

        <div class="hero-bullets">
          <div class="hero-bullet"><span class="icon-dot">✓</span> No Experience Needed</div>
          <div class="hero-bullet"><span class="icon-dot">🧠</span> No Emotional Trading</div>
          <div class="hero-bullet"><span class="icon-dot">🤖</span> Fully Automated AI System</div>
          <div class="hero-bullet"><span class="icon-dot">🌍</span> Built for Smart Earners Worldwide</div>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="floating-mini-wrap">
          <div class="floating-mini floating-one">
            <h4>AI Confidence</h4>
            <strong>97.4%</strong>
          </div>
          <div class="floating-mini floating-two">
            <h4>Market Scan</h4>
            <strong>24/7 Live</strong>
          </div>
          <div class="floating-mini floating-three">
            <h4>Automation</h4>
            <strong>Smart Active</strong>
          </div>
        </div>

        <div class="dashboard-card">
          <div class="dashboard-top">
            <div class="dashboard-title">AI Trading Dashboard</div>
            <div class="live-chip">● System Active</div>
          </div>

          <div class="chart">
            <svg viewBox="0 0 600 240" preserveAspectRatio="none">
              <defs>
                <linearGradient id="lineGlow" x1="0" x2="1">
                  <stop offset="0%" stop-color="#18c37e"></stop>
                  <stop offset="100%" stop-color="#4da3ff"></stop>
                </linearGradient>
              </defs>
              <path d="M0,190 C45,184 65,170 100,160 C140,150 170,165 210,132 C250,100 290,115 330,90 C380,60 410,78 450,55 C500,28 545,36 600,12 L600,240 L0,240 Z"
                fill="rgba(24,195,126,0.10)"></path>
              <path d="M0,190 C45,184 65,170 100,160 C140,150 170,165 210,132 C250,100 290,115 330,90 C380,60 410,78 450,55 C500,28 545,36 600,12"
                fill="none"
                stroke="url(#lineGlow)"
                stroke-width="5"
                stroke-linecap="round"></path>
            </svg>
          </div>

          <div class="metric-grid">
            <div class="metric">
              <span>Market Analysis</span>
              <strong>Real-Time</strong>
            </div>
            <div class="metric">
              <span>Automation Mode</span>
              <strong>24/7</strong>
            </div>
            <div class="metric">
              <span>Risk Control</span>
              <strong>Smart AI</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="section" id="problem">
    <div class="spotlight spot-3"></div>
    <div class="container grid-2">
      <div class="card reveal">
        <h2 class="card-title">Why Most Traders Struggle</h2>
        <p class="card-text">
          Most traders lose money because the market moves fast, emotions interfere,
          and consistency is difficult to maintain manually.
        </p>

        <ul class="list">
          <li><span class="list-icon">⏱️</span> Not enough time to monitor the market</li>
          <li><span class="list-icon">😓</span> Emotions affect decisions</li>
          <li><span class="list-icon">📉</span> Weak strategy and poor consistency</li>
          <li><span class="list-icon">⚠️</span> Even experienced traders struggle long-term</li>
        </ul>
      </div>

      <div class="card reveal">
        <h2 class="card-title">From Stressful Trading to Smart Automation</h2>
        <p class="card-text">
          Manual trading often leads to hesitation, poor discipline, overtrading,
          and missed opportunities. Intelligent automation changes that model.
        </p>

        <div class="tagline-grid">
          <div class="tagline">Let AI Trade While You Live Your Life</div>
          <div class="tagline">From Stressful Trading to Smart Automation</div>
          <div class="tagline">The Future of Trading is Already Here</div>
          <div class="tagline">Don’t Trade Harder — Trade Smarter</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="solution">
    <div class="container">
      <div class="reveal">
        <div class="badge">🤖 AI-Powered Market Edge</div>
        <h2 class="section-title">Meet Your AI Trading Advantage</h2>
        <p class="section-subtitle">
          GAL TRHAYDERS AI is built to analyze market data, identify high-probability opportunities,
          and execute trades automatically with reduced stress.
        </p>
      </div>

      <div class="grid-3">
        <div class="feature reveal">
          <div class="feature-icon">📊</div>
          <h3>Real-Time Analysis</h3>
          <p>Scans live market activity and reacts to changing conditions quickly.</p>
        </div>

        <div class="feature reveal">
          <div class="feature-icon">🎯</div>
          <h3>Opportunity Detection</h3>
          <p>Identifies stronger setups using advanced analytical logic and AI signals.</p>
        </div>

        <div class="feature reveal">
          <div class="feature-icon">⚡</div>
          <h3>Automated Execution</h3>
          <p>Helps reduce emotional pressure and manual guesswork in live trading.</p>
        </div>
      </div>

      <div class="highlight-box reveal" style="margin-top:20px;">
        <h3>💡 No stress. No guesswork. Just smart automation.</h3>
        <p>
          Designed for both beginners and experienced users who want a simpler and more intelligent trading workflow.
        </p>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="reveal">
        <div class="badge">⚙️ Simple 4-Step Setup</div>
        <h2 class="section-title">How It Works</h2>
        <p class="section-subtitle">A simple onboarding flow built for convenience and speed.</p>
      </div>

      <div class="steps">
        <div class="step reveal">
          <div class="step-number">1</div>
          <h3>Sign Up</h3>
          <p>Create your account and get verified.</p>
        </div>

        <div class="step reveal">
          <div class="step-number">2</div>
          <h3>Fund & Connect</h3>
          <p>Link your trading account securely.</p>
        </div>

        <div class="step reveal">
          <div class="step-number">3</div>
          <h3>Activate AI</h3>
          <p>Turn on the system and let it begin working.</p>
        </div>

        <div class="step reveal">
          <div class="step-number">4</div>
          <h3>Monitor & Earn</h3>
          <p>Track activity while staying focused on life.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="reveal">
        <div class="badge">💎 Engineered for Results</div>
        <h2 class="section-title">Powerful Features Designed for Results</h2>
        <p class="section-subtitle">
          Every feature is structured to support better execution, visibility, and automation.
        </p>
      </div>

      <div class="grid-3">
        <div class="feature reveal">
          <div class="feature-icon">🧠</div>
          <h3>Advanced AI Algorithms</h3>
          <p>Processes market data and improves timing accuracy.</p>
        </div>

        <div class="feature reveal">
          <div class="feature-icon">🤖</div>
          <h3>Automated Trade Execution</h3>
          <p>Removes much of the delay and pressure of manual entry.</p>
        </div>

        <div class="feature reveal">
          <div class="feature-icon">🛡️</div>
          <h3>Risk Management System</h3>
          <p>Protective controls built to support disciplined automation.</p>
        </div>

        <div class="feature reveal">
          <div class="feature-icon">📈</div>
          <h3>Real-Time Market Analysis</h3>
          <p>Responsive monitoring for active market conditions.</p>
        </div>

        <div class="feature reveal">
          <div class="feature-icon">💻</div>
          <h3>User-Friendly Dashboard</h3>
          <p>Simple experience for setup, tracking, and control.</p>
        </div>

        <div class="feature reveal">
          <div class="feature-icon">🌍</div>
          <h3>Scalable for Beginners & Pros</h3>
          <p>Accessible for new users and robust enough for advanced participants.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section bonus-book-section" id="bonus-book">
    <div class="container">
      <div class="bonus-book-card reveal">
        <div class="bonus-book-grid">
          <div class="bonus-book-cover">
            <div class="book-mock">
              <div class="book-inner">
                <div>
                  <div class="book-topline">Enlightening The African People</div>
                  <div class="book-title">MR.<br>BLOCKCHAIN</div>
                  <div class="book-subtitle">THE HIDDEN SECRET OF THE FUTURE TECH</div>
                </div>
                <div>
                  <div class="book-silhouette"></div>
                  <div class="book-author">Great Adetula A. Emmanuel</div>
                </div>
              </div>
            </div>
          </div>

          <div class="bonus-book-copy">
            <div class="bonus-label">🎁 FREE BONUS BOOK DOWNLOAD</div>
            <h2>Get the “MR. BLOCKCHAIN” Book Instantly</h2>
            <p>
              As a special bonus, users can download the <strong>MR. BLOCKCHAIN</strong> book instantly.
              It is presented as a premium educational resource to help readers understand blockchain,
              crypto concepts, and future-facing technology.
            </p>

            <div class="bonus-features">
              <div class="bonus-feature">
                <span class="bonus-icon">📘</span>
                Practical blockchain knowledge in a readable format
              </div>
              <div class="bonus-feature">
                <span class="bonus-icon">⚡</span>
                Instant PDF download with one click
              </div>
              <div class="bonus-feature">
                <span class="bonus-icon">🧠</span>
                Ideal for beginners and curious learners
              </div>
              <div class="bonus-feature">
                <span class="bonus-icon">🎯</span>
                Positioned as an exclusive value-add bonus
              </div>
            </div>

            <div class="bonus-actions">
              <a href="MR. BLOCKCHAIN..pdf" download="MR. BLOCKCHAIN.pdf" class="btn btn-book">
                ⬇ Download Book Now
              </a>
              <a href="MR. BLOCKCHAIN..pdf" target="_blank" class="btn btn-secondary">
                👁 Preview Book
              </a>
            </div>

            <div class="download-note">
               Download starts immediately when clicked.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="testimonials">
    <div class="container">
      <div class="reveal">
        <div class="badge">⭐ Early Interest & Positioning</div>
        <h2 class="section-title">Why Early Users Are Paying Attention</h2>
        <p class="section-subtitle">
          Forward-thinking users are drawn to systems that reduce stress, improve efficiency,
          and create a cleaner trading experience through automation.
        </p>
      </div>

      <div class="testimonials-grid">
        <div class="testimonial-card reveal">
          <div class="testimonial-top">
            <div class="testimonial-avatar">AO</div>
            <div>
              <h3>Alex O.</h3>
              <span>Early Waitlist Member</span>
            </div>
          </div>
          <p>
            “What stood out to me was the automation angle. The platform feels positioned for people
            who want smarter execution without sitting on charts all day.”
          </p>
          <div class="stars">★★★★★</div>
        </div>

        <div class="testimonial-card reveal">
          <div class="testimonial-top">
            <div class="testimonial-avatar">MJ</div>
            <div>
              <h3>Mary J.</h3>
              <span>Crypto & Forex Enthusiast</span>
            </div>
          </div>
          <p>
            “I like how the concept focuses on structure, AI support, and reduced emotional trading.
            That combination is what many traders have been missing.”
          </p>
          <div class="stars">★★★★★</div>
        </div>

        <div class="testimonial-card reveal">
          <div class="testimonial-top">
            <div class="testimonial-avatar">TK</div>
            <div>
              <h3>Tunde K.</h3>
              <span>Pre-Launch Subscriber</span>
            </div>
          </div>
          <p>
            “The onboarding message is clear, the offer is simple, and the system looks like something
            built for long-term scalability rather than hype.”
          </p>
          <div class="stars">★★★★★</div>
        </div>
      </div>

      <div class="testimonial-highlight reveal">
        <div class="highlight-pill">Premium Insight</div>
        <h3>The strongest opportunities usually get attention before they get crowded.</h3>
        <p>
          Early adopters often position faster, learn earlier, and benefit from first access
          before broader public attention arrives.
        </p>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container">
      <div class="reveal">
        <div class="badge">❓ Frequently Asked Questions</div>
        <h2 class="section-title">Everything You May Want to Know</h2>
        <p class="section-subtitle">
          Clear answers to common questions about the GAL TRHAYDERS AI pre-launch experience.
        </p>
      </div>

      <div class="faq-wrap reveal">
        <div class="faq-item active">
          <button class="faq-question" type="button">
            <span>What is GAL TRHAYDERS AI?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>
              GAL TRHAYDERS AI is a technology-driven trading system designed to analyze markets,
              identify opportunities, and support automated execution with a more efficient workflow.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            <span>Do I need trading experience to get started?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>
              No. The platform is positioned to be accessible for beginners while still offering
              value to more experienced users who want a smarter and more automated system.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            <span>Is the system fully automated?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>
              The platform is presented as an AI-powered automation system built to reduce manual effort,
              emotional trading pressure, and the need to monitor markets constantly.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            <span>Is pre-launch access limited?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>
              Yes. The pre-launch phase is framed as a limited onboarding window, which means early users
              may receive priority access and early positioning benefits.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            <span>Does GAL TRHAYDERS AI guarantee profits?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>
              No. Trading involves risk and may result in loss of capital. The platform is a technology
              system and does not guarantee profits or future performance.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" type="button">
            <span>How do I join the pre-launch?</span>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer">
            <p>
              You can join by clicking any of the pre-launch or VIP access buttons on the page,
              or by contacting the team through the listed phone or WhatsApp number.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <div class="card reveal">
        <h2 class="card-title">Why GAL TRHAYDERS AI Stands Out</h2>
        <p class="card-text">
          This is not just another trading platform. It is a future-driven financial technology system powered by AI.
        </p>

        <ul class="list">
          <li><span class="list-icon">🏢</span> Built by Great Adetula Limited (GAL)</li>
          <li><span class="list-icon">📘</span> Linked to Mr. Blockchain</li>
          <li><span class="list-icon">🌐</span> Designed for global scalability</li>
          <li><span class="list-icon">⚙️</span> Focused on automation and efficiency</li>
          <li><span class="list-icon">🚀</span> Early adopters gain strategic advantage</li>
        </ul>
      </div>

      <div class="highlight-box reveal">
        <h3>Position Yourself Ahead of the Crowd</h3>
        <p>
          Millions may hear about this later. Only a few will enter early. The strongest advantages usually go to early movers.
        </p>
      </div>
    </div>
  </section>

  <section class="section" id="offer">
    <div class="container">
      <div class="highlight-box reveal">
        <div class="badge" style="margin-bottom:14px;">🔥 Limited Onboarding Window</div>
        <h2 class="section-title" style="margin-bottom:12px;">Exclusive Pre-Launch Access</h2>
        <p class="section-subtitle" style="margin-bottom:18px;">
          We are currently onboarding a limited number of users for our pre-launch phase.
        </p>

        <div class="grid-2">
          <div class="card reveal">
            <h3 class="card-title" style="font-size:21px;">Benefits Include</h3>
            <ul class="list">
              <li><span class="list-icon">✅</span> Early access privileges</li>
              <li><span class="list-icon">⭐</span> Priority onboarding</li>
              <li><span class="list-icon">📩</span> Exclusive updates</li>
              <li><span class="list-icon">🏁</span> First-mover advantage</li>
            </ul>
          </div>

          <div class="card reveal">
            <h3 class="card-title" style="font-size:21px;">Secure Your Position</h3>
            <p class="card-text">
              Gain access before mainstream awareness expands and competition increases.
            </p>

            <div class="cta-actions" style="margin-top:14px;">
              <a href="https://trhayders.com/" target="_blank" class="btn btn-primary">Join Pre-Launch Now</a>
              <a href="https://trhayders.com/" target="_blank" class="btn btn-dark">Get VIP Access</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="contact">
    <div class="container">
      <div class="cta reveal">
        <div class="badge" style="margin-bottom:14px;">🎯 Action Required</div>
        <h2>Ready to Get Started?</h2>
        <p>
          Don’t wait until it becomes mainstream. Enter early and secure your position in AI-powered trading automation.
        </p>

        <div class="contact-line">📞 Call / WhatsApp: 07080069456</div>

        <div class="cta-actions">
          <a href="https://trhayders.com/" target="_blank" class="btn btn-primary">Join Pre-Launch Now</a>
          <a href="https://trhayders.com/" target="_blank" class="btn btn-secondary">Get VIP Access</a>
        </div>

        <div class="contact-links">
          <div class="contact-item">
            <div class="contact-icon">📞</div>
            <div>
              <strong>Nigeria Number</strong>
              <a href="tel:07080069456">07080069456</a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">🌍</div>
            <div>
              <strong>Foreign Number</strong>
              <a href="tel:+15599989794">+1 559 998 9794</a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">✉️</div>
            <div>
              <strong>Email</strong>
              <a href="mailto:trhyders247@gmail.com">trhyders247@gmail.com</a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">🟢</div>
            <div>
              <strong>WhatsApp</strong>
              <div class="whatsapp-action">
                <a href="https://wa.me/15599989794" target="_blank" class="btn btn-whatsapp">Chat Foreign Number</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:8px;">
    <div class="container">
      <div class="disclaimer reveal">
        <h3>Important Notice</h3>
        <p>
          Trading involves risk and may result in loss of capital. GAL TRHAYDERS AI is a technology platform and does not guarantee profits. Past performance is not indicative of future results.
        </p>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer-grid reveal">
        <div>
          <h3>GAL TRHAYDERS</h3>
          <p>
            GAL TRHAYDERS is a product of Great Adetula Limited (GAL), built as a future-facing AI trading technology platform.
          </p>
        </div>

        <div>
          <h4>Contact</h4>
          <a href="mailto:customer247@trhayders.com">customer247@trhayders.com</a>
          <a href="mailto:trhyders247@gmail.com">trhyders247@gmail.com</a>
          <a href="tel:07080069456">07080069456</a>
          <a href="tel:+15599989794">+1 559 998 9794</a>
          <a href="https://wa.me/15599989794" target="_blank">WhatsApp Foreign Number</a>
          <a href="https://trhayders.com/" target="_blank">www.trhayders.com</a>
        </div>

        <div>
          <h4>Legal</h4>
          <a href="terms.html">Terms & Conditions</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Risk Disclosure</a>
          <a href="#">AML/KYC Policy</a>
        </div>
      </div>

      <div class="footer-bottom">
        © 2026 GAL TRHAYDERS AI. All rights reserved.
      </div>
    </div>
  </footer>

  <div class="sticky-cta">
    <div class="sticky-cta-inner">
      <div class="sticky-cta-text">
        <small>Pre-Launch Access</small>
        <strong>Secure your spot now</strong>
      </div>
      <a href="https://trhayders.com/register" target="_blank" class="btn btn-primary">Join Now</a>
    </div>
  </div>

  <script>
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuToggle && mobileMenu) {
      menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('show');
      });

      document.querySelectorAll('.mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.remove('show');
        });
      });
    }

    const reveals = document.querySelectorAll('.reveal');

    function revealOnScroll() {
      reveals.forEach((el) => {
        const windowHeight = window.innerHeight;
        const top = el.getBoundingClientRect().top;
        if (top < windowHeight - 60) {
          el.classList.add('active');
        }
      });
    }

    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);

    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach((item) => {
      const question = item.querySelector('.faq-question');

      question.addEventListener('click', () => {
        const isActive = item.classList.contains('active');

        faqItems.forEach((faq) => faq.classList.remove('active'));

        if (!isActive) {
          item.classList.add('active');
        }
      });
    });
  </script>
</body>
</html>
