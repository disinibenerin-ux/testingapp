<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lux88 Premium RentCar</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --gold: #C9A84C;
      --gold-light: #E8C96A;
      --dark: #0A0A0A;
      --dark2: #111111;
      --dark3: #1A1A1A;
      --dark4: #222222;
      --white: #FFFFFF;
      --gray: #888888;
      --gray-light: #CCCCCC;
    }

    html { scroll-behavior: smooth; }

    body {
      background: var(--dark);
      color: var(--white);
      font-family: 'Montserrat', sans-serif;
      overflow-x: hidden;
    }

    /* Ã¢â€â‚¬Ã¢â€â‚¬ NAVBAR Ã¢â€â‚¬Ã¢â€â‚¬ */
    nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 999;
      background: rgba(10,10,10,0.92);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(201,168,76,0.2);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 32px;
      height: 64px;
    }

    .nav-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .nav-logo-icon {
      width: 36px; height: 36px;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      border-radius: 6px;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Playfair Display', serif;
      font-weight: 900;
      font-size: 18px;
      color: var(--dark);
    }

    .nav-logo-text {
      font-family: 'Playfair Display', serif;
      font-size: 18px;
      font-weight: 700;
      color: var(--gold);
      letter-spacing: 1px;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 36px;
    }

    .nav-links svg {
      display: none;
    }

    .nav-links a {
      color: var(--gray-light);
      text-decoration: none;
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      transition: color 0.3s;
      position: relative;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -4px; left: 0;
      width: 0; height: 1px;
      background: var(--gold);
      transition: width 0.3s;
    }

    .nav-links a:hover { color: var(--gold); }
    .nav-links a:hover::after { width: 100%; }

    .nav-wa {
      background: linear-gradient(135deg, #25D366, #128C7E);
      color: white;
      text-decoration: none;
      padding: 8px 18px;
      border-radius: 24px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 0.5px;
      display: flex; align-items: center; gap: 6px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .nav-wa:hover {
      transform: translateY(-1px);
      box-shadow: 0 4px 16px rgba(37,211,102,0.35);
    }

    /* HERO */
    .btn-booking {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      color: var(--dark);
      font-family: 'Montserrat', sans-serif;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      padding: 16px 36px;
      border-radius: 4px;
      text-decoration: none;
      transition: transform 0.25s, box-shadow 0.25s;
      box-shadow: 0 4px 24px rgba(201,168,76,0.3);
    }

    .btn-booking:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 36px rgba(201,168,76,0.5);
    }

    .btn-booking svg { width: 20px; height: 20px; }

    #home.hero {
      min-height: min(760px, 100vh);
      position: relative;
      display: flex;
      align-items: stretch;
      overflow: hidden;
      padding-top: 64px;
      isolation: isolate;
    }

    #home .hero-bg {
      position: absolute;
      inset: 0;
      background:
        linear-gradient(90deg, rgba(5,5,5,0.94) 0%, rgba(8,8,8,0.78) 42%, rgba(8,8,8,0.28) 100%),
        linear-gradient(180deg, rgba(10,10,10,0) 0%, rgba(10,10,10,0.95) 100%),
        url('assets/img/1rev.png') right 8% center / min(58vw, 720px) auto no-repeat,
        radial-gradient(circle at 74% 34%, rgba(201,168,76,0.24), transparent 26%),
        linear-gradient(135deg, #070707 0%, #141414 52%, #080808 100%);
      filter: saturate(1.08);
    }

    #home .hero-bg-lines {
      position: absolute;
      inset: 0;
      opacity: 0.42;
      mask-image: linear-gradient(90deg, #000 0%, transparent 82%);
      background-image:
        repeating-linear-gradient(90deg, transparent, transparent 80px, rgba(201,168,76,0.03) 80px, rgba(201,168,76,0.03) 81px),
        repeating-linear-gradient(0deg, transparent, transparent 80px, rgba(201,168,76,0.03) 80px, rgba(201,168,76,0.03) 81px);
    }

    #home .hero-content {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 1180px;
      margin: 0 auto;
      padding: 72px 28px 54px;
      display: grid;
      grid-template-columns: minmax(0, 0.88fr) minmax(320px, 1.12fr);
      gap: 32px;
      align-items: center;
    }

    #home .hero-left {
      max-width: 560px;
      animation: fadeInLeft 0.9s ease both;
    }

    #home .hero-badge {
      display: inline-block;
      width: max-content;
      background: rgba(201,168,76,0.12);
      border: 1px solid rgba(201,168,76,0.36);
      color: var(--gold-light);
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 2.5px;
      text-transform: uppercase;
      padding: 6px 16px;
      border-radius: 24px;
      margin-bottom: 18px;
    }

    #home .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(38px, 6vw, 76px);
      font-weight: 900;
      line-height: 0.94;
      margin-bottom: 22px;
      text-wrap: balance;
    }

    #home .hero-title span {
      color: var(--white);
      text-shadow: 0 0 34px rgba(201,168,76,0.14);
    }

    #home .hero-price-label {
      color: var(--gold-light);
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 2.4px;
      text-transform: uppercase;
      margin-bottom: 5px;
    }

    #home .hero-price {
      color: var(--white);
      font-family: 'Playfair Display', serif;
      font-size: clamp(30px, 4.2vw, 48px);
      font-weight: 700;
      line-height: 1;
      margin-bottom: 12px;
    }

    #home .hero-note {
      max-width: 460px;
      color: rgba(255,255,255,0.72);
      font-size: 12px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    #home .btn-booking {
      border-radius: 999px;
      padding: 14px 28px;
      box-shadow: 0 12px 34px rgba(201,168,76,0.25);
    }

    #home .hero-right {
      min-height: 430px;
      display: flex;
      align-items: end;
      justify-content: center;
      position: relative;
      animation: fadeInRight 0.9s ease both;
    }

    #home .hero-right::before {
      content: '';
      position: absolute;
      inset: 9% 2% 8% 12%;
      border: 1px solid rgba(201,168,76,0.22);
      background:
        linear-gradient(180deg, rgba(255,255,255,0.05), transparent),
        radial-gradient(circle at 55% 65%, rgba(201,168,76,0.18), transparent 36%);
      transform: skewX(-8deg);
    }

    #home .hero-car-wrap {
      width: min(100%, 650px);
      position: relative;
      z-index: 2;
    }

    #home .hero-car-wrap img {
      width: 100%;
      display: block;
      filter: drop-shadow(0 24px 54px rgba(0,0,0,0.72));
      transform: translateX(-2%);
    }

    #home .hero-car-glow {
      position: absolute;
      bottom: 4%;
      left: 50%;
      transform: translateX(-50%);
      width: 74%;
      height: 42px;
      background: radial-gradient(ellipse, rgba(201,168,76,0.28), transparent 70%);
      filter: blur(16px);
      pointer-events: none;
    }

    @keyframes fadeInLeft {
      from { opacity: 0; transform: translateX(-40px); }
      to { opacity: 1; transform: translateX(0); }
    }

    @keyframes fadeInRight {
      from { opacity: 0; transform: translateX(40px); }
      to { opacity: 1; transform: translateX(0); }
    }

    @media (max-width: 900px) {
      #home.hero { min-height: auto; }
      #home .hero-bg {
        background:
          linear-gradient(180deg, rgba(5,5,5,0.82) 0%, rgba(5,5,5,0.96) 100%),
          radial-gradient(circle at 50% 38%, rgba(201,168,76,0.2), transparent 34%),
          linear-gradient(135deg, #070707 0%, #141414 52%, #080808 100%);
      }
      #home .hero-content {
        grid-template-columns: 1fr;
        gap: 14px;
        text-align: center;
        padding: 48px 20px 40px;
      }
      #home .hero-left { max-width: none; }
      #home .hero-badge { margin-left: auto; margin-right: auto; }
      #home .hero-note { margin-left: auto; margin-right: auto; }
      #home .hero-right { order: -1; min-height: 260px; }
      #home .hero-right::before { inset: 8% 8% 4%; }
      #home .hero-car-wrap { width: min(92%, 520px); }
    }

    @media (max-width: 520px) {
      #home .hero-content { padding: 34px 16px 34px; }
      #home .hero-title { font-size: clamp(32px, 12vw, 48px); }
      #home .hero-right { min-height: 205px; }
      #home .btn-booking { padding: 12px 22px; }
    }
    /* Ã¢â€â‚¬Ã¢â€â‚¬ SECTION COMMON Ã¢â€â‚¬Ã¢â€â‚¬ */
    section { padding: 80px 32px; }

    .section-inner {
      max-width: 1200px;
      margin: 0 auto;
    }

    .section-header {
      text-align: center;
      margin-bottom: 56px;
    }

    .section-label {
      display: inline-block;
      background: rgba(201,168,76,0.1);
      border: 1px solid rgba(201,168,76,0.3);
      color: var(--gold);
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 4px;
      text-transform: uppercase;
      padding: 5px 14px;
      border-radius: 24px;
      margin-bottom: 14px;
    }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(24px, 4vw, 40px);
      font-weight: 700;
      line-height: 1.2;
    }

    .section-title span { color: var(--gold); }

    .section-divider {
      width: 60px;
      height: 2px;
      background: linear-gradient(90deg, var(--gold), transparent);
      margin: 16px auto 0;
    }

    /* Ã¢â€â‚¬Ã¢â€â‚¬ UNIT GRID Ã¢â€â‚¬Ã¢â€â‚¬ */
    .units-section { background: var(--dark2); }

    .units-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .unit-card {
      background: var(--dark3);
      border: 1px solid rgba(201,168,76,0.1);
      border-radius: 12px;
      overflow: hidden;
      position: relative;
      transition: transform 0.3s, border-color 0.3s, box-shadow 0.3s;
      text-decoration: none;
      display: block;
    }

    .unit-card:hover {
      transform: translateY(-6px);
      border-color: rgba(201,168,76,0.4);
      box-shadow: 0 16px 48px rgba(0,0,0,0.5);
    }

    .unit-card-img {
      width: 100%;
      aspect-ratio: 4/3;
      object-fit: cover;
      display: block;
      background: var(--dark4);
      transition: transform 0.4s;
    }

    .unit-card-media {
      position: relative;
      display: block;
      overflow: hidden;
    }

    .unit-card-img-fit {
      object-fit: contain;
      padding: 10px;
    }

    .unit-gallery-link { display: none; }

    .unit-card:hover .unit-card-img { transform: scale(1.05); }

    .unit-card-price {
      position: absolute;
      left: 18px;
      right: 18px;
      bottom: 12px;
      z-index: 2;
      padding: 0;
      background: transparent;
      pointer-events: none;
    }

    .unit-card-price-label {
      display: block;
      color: var(--white);
      font-size: 12px;
      font-weight: 600;
      line-height: 1;
      margin-bottom: 4px;
    }

    .unit-card-price-value {
      display: block;
      color: var(--white);
      font-size: clamp(24px, 2.4vw, 30px);
      font-weight: 800;
      line-height: 1;
      letter-spacing: 0;
    }

    .unit-card-body {
      padding: 16px 18px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .unit-card-name {
      font-size: 13px;
      font-weight: 600;
      color: var(--white);
    }

    .unit-card-wa {
      display: flex;
      align-items: center;
      gap: 6px;
      background: linear-gradient(135deg, #25D366, #128C7E);
      color: white;
      text-decoration: none;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 600;
      transition: transform 0.2s;
      white-space: nowrap;
    }

    .unit-card-wa:hover { transform: scale(1.05); }

    /* Car names for placeholders */
    .car-names {
      position: absolute;
      bottom: 52px; left: 0; right: 0;
      text-align: center;
      font-size: 11px;
      font-weight: 600;
      color: rgba(255,255,255,0.7);
      padding: 4px 8px;
    }

    /* Ã¢â€â‚¬Ã¢â€â‚¬ GALLERY Ã¢â€â‚¬Ã¢â€â‚¬ */
    .gallery-section { background: var(--dark); }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      aspect-ratio: 4/3;
      background: var(--dark3);
      cursor: pointer;
    }

    .gallery-item a {
      display: block;
      width: 100%;
      height: 100%;
    }

    .gallery-item img {
      width: 100%; height: 100%;
      object-fit: cover;
      transition: transform 0.4s;
    }

    .gallery-item:hover img { transform: scale(1.08); }

    .gallery-item-overlay {
      position: absolute;
      inset: 0;
      background: rgba(201,168,76,0);
      display: flex; align-items: center; justify-content: center;
      transition: background 0.3s;
      pointer-events: none;
    }

    .gallery-item:hover .gallery-item-overlay { background: rgba(201,168,76,0.15); }

    /* Ã¢â€â‚¬Ã¢â€â‚¬ CTA / CONTACT Ã¢â€â‚¬Ã¢â€â‚¬ */
    .cta-section {
      background: linear-gradient(135deg, var(--dark2), var(--dark3));
      position: relative;
      overflow: hidden;
    }

    .cta-section::before {
      content: '';
      position: absolute;
      top: -100px; right: -100px;
      width: 400px; height: 400px;
      background: radial-gradient(circle, rgba(201,168,76,0.08), transparent 70%);
      pointer-events: none;
    }

    .cta-inner {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
      position: relative;
      z-index: 2;
    }

    .cta-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(22px, 3.5vw, 36px);
      font-weight: 700;
      line-height: 1.3;
      margin-bottom: 14px;
    }

    .cta-title span { color: var(--gold); }

    .cta-sub {
      font-size: 14px;
      color: var(--gray);
      margin-bottom: 36px;
      letter-spacing: 0.5px;
    }

    .cta-car-img {
      width: 100%;
      max-width: 500px;
      display: block;
      margin: 0 auto 36px;
      filter: drop-shadow(0 10px 40px rgba(0,0,0,0.5));
    }

    /* Ã¢â€â‚¬Ã¢â€â‚¬ FOOTER Ã¢â€â‚¬Ã¢â€â‚¬ */
    footer {
      background: #050505;
      border-top: 1px solid rgba(201,168,76,0.15);
      padding: 56px 32px 24px;
    }

    .footer-inner {
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-top {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 48px;
      margin-bottom: 48px;
    }

    .footer-brand-name {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 700;
      color: var(--gold);
      margin-bottom: 8px;
    }

    .footer-brand-desc {
      font-size: 12px;
      color: var(--gray);
      line-height: 1.7;
    }

    .footer-col-title {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 2.5px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 16px;
    }

    .footer-address {
      font-size: 12px;
      color: var(--gray);
      line-height: 1.7;
      margin-bottom: 16px;
    }

    .footer-contact-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: var(--gray-light);
      margin-bottom: 8px;
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-contact-item:hover { color: var(--gold); }

    .footer-contact-item svg {
      color: var(--gold);
      flex-shrink: 0;
    }

    .footer-social {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .footer-social-link {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: var(--gray-light);
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-social-link:hover { color: var(--gold); }

    .footer-social-icon {
      width: 34px; height: 34px;
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      font-size: 16px;
    }

    .footer-divider {
      border: none;
      border-top: 1px solid rgba(255,255,255,0.06);
      margin-bottom: 20px;
    }

    .footer-bottom {
      text-align: center;
      font-size: 11px;
      color: var(--gray);
      letter-spacing: 0.5px;
    }

    .footer-bottom span { color: var(--gold); }

    /* Ã¢â€â‚¬Ã¢â€â‚¬ LIGHTBOX Ã¢â€â‚¬Ã¢â€â‚¬ */
    /* Ã¢â€â‚¬Ã¢â€â‚¬ RESPONSIVE Ã¢â€â‚¬Ã¢â€â‚¬ */
    @media (max-width: 1000px) {
      .units-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
      .gallery-grid { grid-template-columns: repeat(2, 1fr); }
      .footer-top { grid-template-columns: 1fr; gap: 32px; }
      .nav-links { display: none; }
      section { padding: 56px 20px; }  
      .unit-card {
        border-radius: 10px;
      }

      .unit-card-img {
        aspect-ratio: 1.55 / 1;
      }

      .unit-card-img-fit {
        padding: 8px 10px;
      }

      .unit-card-price {
        left: 9px;
        right: 9px;
        bottom: 8px;
        padding: 0;
      }

      .unit-card-price-label {
        font-size: 10px;
        margin-bottom: 2px;
      }

      .unit-card-price-value {
        font-size: clamp(17px, 4.6vw, 22px);
      }

      .unit-card-body {
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        gap: 5px;
        padding: 2px 8px 6px;
        align-items: center;
        min-height: 0;
      }

      .unit-card-name {
        font-size: 9px;
        line-height: 1.05;
        overflow-wrap: anywhere;
      }

      .unit-card-wa {
        gap: 4px;
        padding: 4px 7px;
        border-radius: 18px;
        font-size: 8px;
      }

      .unit-card-wa svg {
        width: 10px;
        height: 10px;
        flex-shrink: 0;
      }
    }

    @media (max-width: 700px) {
      nav {
        height: 58px;
        padding: 0 18px;
      }
      .nav-logo-icon {
        width: 32px;
        height: 32px;
        font-size: 16px;
      }

      .nav-logo-text {
        font-size: 16px;
      }

      .nav-wa {
        padding: 7px 14px;
        font-size: 11px;
      }

      section { padding: 48px 18px; }
      .units-grid { gap: 12px; }

      .unit-card-img {
        aspect-ratio: 1.5 / 1;
      }

      .unit-card-img-fit {
        padding: 7px 8px;
      }

      .unit-card-price {
        left: 8px;
        right: 8px;
        bottom: 7px;
        padding: 0;
      }

      .unit-card-price-label {
        font-size: 9px;
      }

      .unit-card-price-value {
        font-size: clamp(16px, 5vw, 21px);
      }

      .unit-card-body {
        padding: 4px 8px 8px;
        gap: 5px;
      }
    }

    @media (max-width: 500px) {
      nav {
        padding: 0 14px;
      }

      .nav-wa {
        padding: 7px 12px;
        font-size: 10px;
      }

      section { padding: 44px 14px; }
      .units-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }

      .unit-card-img {
        aspect-ratio: 1.42 / 1;
      }

      .unit-card-img-fit {
        padding: 6px 7px;
      }

      .unit-card-price {
        left: 7px;
        right: 7px;
        bottom: 6px;
        padding: 0;
      }

      .unit-card-price-label {
        font-size: 8px;
      }

      .unit-card-price-value {
        font-size: clamp(15px, 5.2vw, 20px);
      }

      .unit-card-body {
        padding: 4px 7px 8px;
        gap: 4px;
      }

      .unit-card-name {
        font-size: 8px;
        line-height: 1.05;
      }

      .unit-card-wa {
        padding: 4px 6px;
        font-size: 7px;
      }

      .unit-card-wa svg {
        width: 9px;
        height: 9px;
      }
    }

    @media (max-width: 900px) {
      body {
        padding-bottom: 94px;
      }

      nav {
        top: auto;
        left: 14px;
        right: 14px;
        bottom: 14px;
        width: auto;
        max-width: 560px;
        height: 68px;
        margin: 0 auto;
        padding: 0 10px;
        border: 1px solid rgba(201,168,76,0.2);
        border-radius: 8px;
        background: rgba(12,12,18,0.96);
        box-shadow: 0 12px 34px rgba(0,0,0,0.42);
      }

      .nav-logo,
      .nav-wa {
        display: none;
      }

      .nav-links {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 0;
        width: 100%;
        height: 100%;
      }

      .nav-links li {
        min-width: 0;
      }

      .nav-links a {
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 5px;
        color: rgba(255,255,255,0.68);
        font-size: 10px;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 1;
        text-transform: none;
        white-space: nowrap;
      }

      .nav-links a::after {
        display: none;
      }

      .nav-links svg {
        display: block;
        width: 20px;
        height: 20px;
        fill: currentColor;
      }

      .nav-links a:hover,
      .nav-links li:first-child a {
        color: var(--gold-light);
      }

      #home.hero {
        padding-top: 0;
      }
    }

    @media (max-width: 600px) {
      nav {
        left: 10px;
        right: 10px;
        bottom: 10px;
        height: 64px;
        padding: 0 6px;
      }

      .nav-links a {
        font-size: 9px;
      }

      .nav-links svg {
        width: 19px;
        height: 19px;
      }
    }

    /* Ã¢â€â‚¬Ã¢â€â‚¬ SCROLL REVEAL Ã¢â€â‚¬Ã¢â€â‚¬ */
    .reveal {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal.visible { opacity: 1; transform: none; }
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }

    /* Image placeholder with gradient */
    .img-placeholder {
      background: linear-gradient(135deg, #1a1a1a, #2a2a2a);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gray);
      font-size: 12px;
    }
  </style>
</head>
<body>


