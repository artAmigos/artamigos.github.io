<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AppArtA IT — разработка сайтов, SEO, реклама, аналитика, автоматизация. Заработок для IT-специалистов.">
    <title>AppArtA IT — Digital-агентство + Заработок</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #4a2bb7;
            --primary-light: #6b4fd9;
            --primary-dark: #351f8a;
            --accent: #2b7be4;
            --gradient: linear-gradient(135deg, #4a2bb7 0%, #2b7be4 100%);
            --text-dark: #0f111a;
            --text-muted: #5a6278;
            --text-light: #8e96ab;
            --bg-body: #eef1f7;
            --bg-white: #ffffff;
            --border: #e2e6ef;
            --shadow-card: 0 4px 24px rgba(0,0,0,0.04);
            --shadow-card-hover: 0 12px 48px rgba(74,43,183,0.08);
            --radius: 16px;
            --radius-sm: 10px;
            --success: #10b981;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: var(--bg-body);
            color: var(--text-dark);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ===== HEADER ===== */
        .navbar-custom {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 14px 0;
            background: rgba(255,255,255,0.90);
            backdrop-filter: blur(16px) saturate(180%);
            border-bottom: 1px solid rgba(0,0,0,0.04);
            transition: 0.3s;
        }

        .navbar-custom.scrolled {
            box-shadow: 0 2px 20px rgba(0,0,0,0.04);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            font-size: 20px;
            letter-spacing: -0.3px;
            color: var(--text-dark);
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: var(--gradient);
            display: grid;
            place-items: center;
            font-size: 18px;
            font-weight: 900;
            color: #fff;
            box-shadow: 0 4px 14px rgba(74,43,183,0.25);
        }

        .brand span {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .nav-link-custom {
            color: var(--text-muted) !important;
            font-weight: 500;
            font-size: 14px;
            transition: 0.2s;
            padding: 6px 0 !important;
            position: relative;
        }

        .nav-link-custom::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient);
            transition: 0.3s;
            border-radius: 4px;
        }

        .nav-link-custom:hover {
            color: var(--text-dark) !important;
        }
        .nav-link-custom:hover::after { width: 100%; }

        .btn-primary-custom {
            background: var(--gradient);
            border: none;
            padding: 10px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            color: #fff;
            transition: 0.3s;
            box-shadow: 0 4px 20px rgba(74,43,183,0.20);
            font-family: inherit;
            cursor: pointer;
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(74,43,183,0.30);
            color: #fff;
        }

        .btn-outline-custom {
            background: transparent;
            border: 1.5px solid var(--border);
            padding: 10px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            color: var(--text-dark);
            transition: 0.3s;
            font-family: inherit;
            cursor: pointer;
        }

        .btn-outline-custom:hover {
            border-color: var(--primary);
            background: rgba(74,43,183,0.04);
            transform: translateY(-2px);
        }

        .btn-success-custom {
            background: var(--success);
            border: none;
            padding: 10px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            color: #fff;
            transition: 0.3s;
            font-family: inherit;
            cursor: pointer;
        }

        .btn-success-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(16,185,129,0.30);
            color: #fff;
        }

        .btn-auth {
            background: transparent;
            border: 1.5px solid var(--primary);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 13px;
            color: var(--primary);
            transition: 0.3s;
            font-family: inherit;
            cursor: pointer;
        }

        .btn-auth:hover {
            background: var(--gradient);
            color: #fff;
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(74,43,183,0.20);
        }

        .mobile-toggle {
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text-dark);
            padding: 4px 8px;
        }

        /* ===== LANGUAGE SWITCHER ===== */
        .lang-switcher {
            display: flex;
            gap: 2px;
            background: var(--bg-body);
            border-radius: 50px;
            padding: 3px;
            border: 1px solid var(--border);
        }

        .lang-btn {
            background: transparent;
            border: none;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            transition: 0.3s;
            cursor: pointer;
            font-family: inherit;
        }

        .lang-btn:hover {
            color: var(--text-dark);
        }

        .lang-btn.active {
            background: var(--bg-white);
            color: var(--primary);
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        /* ===== HERO ===== */
        .hero-section {
            padding: 140px 0 80px;
            background: linear-gradient(165deg, #e8ecf6 0%, #ffffff 50%, #f4f2fa 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(74,43,183,0.04), transparent 70%);
            top: -150px;
            right: -100px;
            pointer-events: none;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 4px 14px 4px 10px;
            border-radius: 50px;
            background: rgba(74,43,183,0.06);
            border: 1px solid rgba(74,43,183,0.08);
            font-size: 12px;
            font-weight: 500;
            color: var(--primary);
        }

        .hero-badge .dot-pulse {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--primary);
            display: inline-block;
            animation: pulse-dot 2s infinite;
        }

        @keyframes pulse-dot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.3; transform: scale(0.7); }
        }

        .hero-title {
            font-size: clamp(40px, 6vw, 68px);
            line-height: 1.0;
            letter-spacing: -2.5px;
            font-weight: 900;
            color: var(--text-dark);
        }

        .hero-title .highlight {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-desc {
            font-size: 18px;
            color: var(--text-muted);
            line-height: 1.8;
            max-width: 480px;
        }

        /* ===== STATS ===== */
        .stat-card {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 16px 20px;
            transition: 0.3s;
            box-shadow: var(--shadow-card);
        }

        .stat-card:hover {
            border-color: var(--primary-light);
            box-shadow: var(--shadow-card-hover);
            transform: translateY(-2px);
        }

        .stat-card .num {
            font-size: 26px;
            font-weight: 800;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .stat-card .label {
            color: var(--text-light);
            font-size: 13px;
            font-weight: 500;
        }

        /* ===== TERMINAL ===== */
        .terminal-wrapper {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 14px;
            box-shadow: 0 20px 60px rgba(74,43,183,0.06);
            transition: 0.3s;
        }

        .terminal-wrapper:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 72px rgba(74,43,183,0.10);
        }

        .terminal {
            background: #0b0d17;
            border-radius: var(--radius-sm);
            overflow: hidden;
        }

        .terminal-head {
            display: flex;
            gap: 8px;
            padding: 12px 16px;
            background: #141824;
            border-bottom: 1px solid rgba(255,255,255,0.03);
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
        .dot:nth-child(1) { background: #ff5f56; }
        .dot:nth-child(2) { background: #ffbd2e; }
        .dot:nth-child(3) { background: #27c93f; }

        .terminal-body {
            padding: 24px 22px;
            font-family: 'Fira Code', 'JetBrains Mono', monospace;
            font-size: 12px;
            color: #b8c4dd;
            line-height: 2.2;
        }

        .terminal-body .tk { color: #c084fc; }
        .terminal-body .str { color: #6ee7b7; }
        .terminal-body .fn { color: #60a5fa; }
        .terminal-body .val { color: #fcd34d; }

        .terminal-body .cursor-line {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }

        .terminal-body .cursor-line span {
            display: inline-block;
            width: 8px;
            height: 16px;
            background: #60a5fa;
            animation: blink 1s step-end infinite;
            border-radius: 2px;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        /* ===== SECTION HEADERS ===== */
        .section-label {
            display: inline-block;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--primary);
            background: rgba(74,43,183,0.06);
            padding: 4px 14px;
            border-radius: 50px;
            border: 1px solid rgba(74,43,183,0.06);
        }

        .section-title {
            font-size: clamp(30px, 4vw, 44px);
            font-weight: 800;
            letter-spacing: -1.5px;
            line-height: 1.05;
            margin-top: 6px;
        }

        .section-sub {
            color: var(--text-muted);
            font-size: 17px;
            max-width: 480px;
        }

        /* ===== SERVICE CARDS ===== */
        .service-card {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 28px 24px;
            cursor: pointer;
            transition: 0.3s;
            height: 100%;
            position: relative;
            min-height: 200px;
            box-shadow: var(--shadow-card);
        }

        .service-card:hover {
            transform: translateY(-6px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow-card-hover);
        }

        .service-card .icon {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 10px;
            opacity: 0.7;
        }

        .service-card .num {
            font-size: 12px;
            font-weight: 600;
            color: var(--primary);
            opacity: 0.3;
        }

        .service-card h5 {
            font-size: 18px;
            font-weight: 700;
            margin: 8px 0 4px;
        }

        .service-card p {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .service-card .arrow {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 16px;
            color: var(--primary);
            opacity: 0.2;
            transition: 0.3s;
        }

        .service-card:hover .arrow {
            opacity: 1;
            transform: translateX(4px);
        }

        /* ===== EARN CARDS ===== */
        .earn-card {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 32px 28px;
            transition: 0.3s;
            height: 100%;
            text-align: center;
            box-shadow: var(--shadow-card);
        }

        .earn-card:hover {
            transform: translateY(-6px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow-card-hover);
        }

        .earn-card .icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 16px;
            opacity: 0.7;
        }

        .earn-card h4 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .earn-card p {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .earn-card .free-badge {
            display: inline-block;
            background: var(--success);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 2px 14px;
            border-radius: 50px;
            margin-top: 8px;
            text-transform: uppercase;
        }

        /* ===== TASK CATEGORY ===== */
        .task-category {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 28px 24px;
            transition: 0.3s;
            height: 100%;
            box-shadow: var(--shadow-card);
        }

        .task-category:hover {
            transform: translateY(-4px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow-card-hover);
        }

        .task-category .icon {
            font-size: 32px;
            color: var(--primary);
            margin-bottom: 10px;
            opacity: 0.7;
        }

        .task-category h5 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .task-category p {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .task-category .examples {
            margin-top: 10px;
            font-size: 12px;
            color: var(--text-light);
        }

        /* ===== PROCESS ===== */
        .process-step {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 28px 24px;
            transition: 0.3s;
            height: 100%;
            box-shadow: var(--shadow-card);
        }

        .process-step:hover {
            border-color: var(--primary-light);
            box-shadow: var(--shadow-card-hover);
            transform: translateY(-4px);
        }

        .process-step .num {
            font-size: 36px;
            font-weight: 900;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            opacity: 0.12;
        }

        .process-step h5 {
            font-size: 18px;
            font-weight: 700;
            margin: 4px 0 2px;
        }

        .process-step p {
            color: var(--text-muted);
            font-size: 14px;
            margin-bottom: 0;
        }

        /* ===== FEATURE ===== */
        .feature-panel {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 36px 32px;
            transition: 0.3s;
            height: 100%;
            box-shadow: var(--shadow-card);
        }

        .feature-panel:hover {
            box-shadow: var(--shadow-card-hover);
        }

        .feature-panel h4 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .checklist {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .checklist li {
            padding: 12px 0;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-muted);
            font-size: 14px;
        }

        .checklist li:last-child { border-bottom: none; }
        .checklist li::before {
            content: "◆";
            color: var(--primary);
            font-size: 12px;
            font-weight: 900;
        }

        /* ===== CTA ===== */
        .cta-block {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 40px 44px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            transition: 0.3s;
            box-shadow: var(--shadow-card);
            background: linear-gradient(135deg, #ffffff 0%, #f8f7fc 100%);
        }

        .cta-block:hover {
            box-shadow: var(--shadow-card-hover);
        }

        .cta-block h3 {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .cta-block p {
            color: var(--text-muted);
            font-size: 16px;
            margin-bottom: 0;
        }

        /* ===== FORM ===== */
        .form-card {
            background: var(--bg-white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 32px 28px;
            transition: 0.3s;
            box-shadow: var(--shadow-card);
            height: 100%;
        }

        .form-card:hover {
            box-shadow: var(--shadow-card-hover);
        }

        .form-control-custom {
            background: var(--bg-body);
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 12px 16px;
            font-size: 14px;
            color: var(--text-dark);
            transition: 0.3s;
            font-family: inherit;
        }

        .form-control-custom:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(74,43,183,0.06);
            background: var(--bg-white);
        }

        .form-control-custom::placeholder {
            color: var(--text-light);
        }

        .form-label-custom {
            font-size: 13px;
            font-weight: 500;
            color: var(--text-muted);
            margin-bottom: 4px;
        }

        /* ===== FOOTER ===== */
        .footer {
            border-top: 1px solid var(--border);
            padding: 56px 0 32px;
            background: var(--bg-white);
            margin-top: 20px;
            box-shadow: 0 -2px 20px rgba(0,0,0,0.02);
        }

        .footer .brand {
            font-size: 18px;
            display: inline-flex;
        }

        .footer .brand-icon {
            width: 36px;
            height: 36px;
            font-size: 16px;
        }

        .footer strong {
            font-weight: 600;
            color: var(--text-dark);
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer p {
            color: var(--text-muted);
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 6px;
        }

        .footer a {
            color: var(--text-muted);
            transition: 0.2s;
        }
        .footer a:hover { color: var(--primary); }

        .footer-links-grid {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .footer-links-grid a {
            font-size: 14px;
            padding: 2px 0;
        }

        .footer-contact-line {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-muted);
            font-size: 14px;
            margin-bottom: 4px;
        }

        .footer-contact-line i {
            width: 18px;
            color: var(--primary);
            font-size: 14px;
            flex-shrink: 0;
        }

        .footer-contact-line a {
            color: var(--text-muted);
        }
        .footer-contact-line a:hover {
            color: var(--primary);
        }

        .footer-social {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 4px;
        }

        .footer-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--bg-body);
            color: var(--text-muted);
            transition: 0.3s;
            font-size: 15px;
            flex-shrink: 0;
        }

        .footer-social a:hover {
            background: var(--gradient);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(74,43,183,0.20);
        }

        .footer-bottom {
            padding-top: 24px;
            margin-top: 32px;
            border-top: 1px solid var(--border);
            color: var(--text-light);
            font-size: 13px;
        }

        .footer-bottom a {
            color: var(--primary);
            font-weight: 500;
        }
        .footer-bottom a:hover {
            text-decoration: underline;
            color: var(--primary-dark);
        }

        /* ===== MODAL ===== */
        .modal-custom {
            position: fixed;
            inset: 0;
            z-index: 2000;
            background: rgba(0,0,0,0.35);
            backdrop-filter: blur(6px);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .modal-custom.active { display: flex; }

        .modal-box {
            background: var(--bg-white);
            border-radius: var(--radius);
            max-width: 550px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            padding: 32px;
            box-shadow: 0 30px 80px rgba(0,0,0,0.08);
            border: 1px solid var(--border);
        }

        .modal-header-custom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .modal-header-custom h2 {
            font-size: 22px;
            font-weight: 700;
        }

        .modal-close {
            background: var(--bg-body);
            border: 1px solid var(--border);
            color: var(--text-dark);
            width: 38px;
            height: 38px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .modal-close:hover {
            border-color: var(--primary);
            background: rgba(74,43,183,0.04);
        }

        .modal-services {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            margin: 12px 0 20px;
        }

        .modal-service {
            background: var(--bg-body);
            padding: 10px 14px;
            border-radius: var(--radius-sm);
            color: var(--text-muted);
            font-size: 13px;
            border: 1px solid var(--border);
            transition: 0.3s;
        }

        .modal-service:hover {
            border-color: var(--primary-light);
            background: rgba(74,43,183,0.02);
        }

        .modal-tabs {
            display: flex;
            gap: 4px;
            background: var(--bg-body);
            border-radius: var(--radius-sm);
            padding: 4px;
            margin-bottom: 20px;
        }

        .modal-tab {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: var(--radius-sm);
            background: transparent;
            font-weight: 600;
            font-size: 13px;
            color: var(--text-muted);
            cursor: pointer;
            transition: 0.3s;
            font-family: inherit;
        }

        .modal-tab.active {
            background: var(--bg-white);
            color: var(--primary);
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .modal-tab:hover:not(.active) {
            color: var(--text-dark);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 991px) {
            .hero-section { padding: 120px 0 60px; }
            .hero-title { font-size: 40px; letter-spacing: -1.5px; }
        }

        @media (max-width: 768px) {
            .hero-section { padding: 100px 0 40px; }
            .hero-title { font-size: 32px; letter-spacing: -1px; }
            .hero-desc { font-size: 16px; }
            .stat-card .num { font-size: 22px; }
            .service-card { min-height: 160px; padding: 20px; }
            .cta-block { padding: 28px 24px; text-align: center; flex-direction: column; }
            .cta-block h3 { font-size: 22px; }
            .modal-services { grid-template-columns: 1fr; }
            .form-card { padding: 20px; }
            .footer { padding: 40px 0 24px; }
            .footer .row > div { margin-bottom: 24px; }
            .footer .row > div:last-child { margin-bottom: 0; }
            .footer-social { justify-content: flex-start; }
        }

        @media (max-width: 576px) {
            .footer .row > div {
                text-align: center;
            }
            .footer-social {
                justify-content: center;
            }
            .footer-contact-line {
                justify-content: center;
            }
            .footer-links-grid {
                align-items: center;
            }
            .brand {
                justify-content: center;
            }
            .lang-switcher {
                margin: 0 auto;
            }
            .modal-box { padding: 20px; }
        }
    </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar-custom" id="navbar">
    <div class="container-custom">
        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="brand">
                <span class="brand-icon">A</span>
                <span>AppArtA IT</span>
            </a>

            <button class="mobile-toggle d-md-none" id="mobileToggle">
                <i class="fas fa-bars"></i>
            </button>

            <div class="d-none d-md-flex align-items-center gap-3" id="navLinks">
                <a href="#services" class="nav-link-custom">Услуги</a>
                <a href="#earn" class="nav-link-custom" style="color: var(--primary) !important; font-weight: 700;">💰 Заработок</a>
                <a href="#process" class="nav-link-custom">Процесс</a>
                <a href="#contact" class="nav-link-custom">Контакты</a>

                <div class="lang-switcher">
                    <button class="lang-btn active" data-lang="ru">RU</button>
                    <button class="lang-btn" data-lang="et">ET</button>
                    <button class="lang-btn" data-lang="en">EN</button>
                </div>

                <button class="btn-auth" onclick="openAuthModal()">
                    <i class="fas fa-user me-1"></i> Войти
                </button>

                <button class="btn-success-custom" onclick="openAuthModal()">
                    <i class="fas fa-rocket me-1"></i> Начать зарабатывать
                </button>
            </div>
        </div>

        <div class="d-md-none mt-3" id="mobileMenu" style="display:none;">
            <div class="d-flex flex-column gap-3 pb-2">
                <a href="#services" class="nav-link-custom">Услуги</a>
                <a href="#earn" class="nav-link-custom" style="color: var(--primary) !important; font-weight: 700;">💰 Заработок</a>
                <a href="#process" class="nav-link-custom">Процесс</a>
                <a href="#contact" class="nav-link-custom">Контакты</a>

                <div class="lang-switcher" style="width: fit-content;">
                    <button class="lang-btn active" data-lang="ru">RU</button>
                    <button class="lang-btn" data-lang="et">ET</button>
                    <button class="lang-btn" data-lang="en">EN</button>
                </div>

                <button class="btn-auth" onclick="openAuthModal()">
                    <i class="fas fa-user me-1"></i> Войти
                </button>

                <button class="btn-success-custom w-100" onclick="openAuthModal()">
                    <i class="fas fa-rocket me-1"></i> Начать зарабатывать
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- ===== HERO ===== -->
<section class="hero-section">
    <div class="container-custom">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badge mb-3">
                    <span class="dot-pulse"></span>
                    Tallinn · Estonia · Baltics · Europe
                </div>
                <h1 class="hero-title">
                    Мы делаем <br>
                    <span class="highlight">бизнес видимым</span>
                </h1>
                <p class="hero-desc mb-4">
                    Сайты, SEO, Google Ads, Meta Ads, аналитика и автоматизация — всё в одном месте.
                    Работаем по всей Европе, базируемся в Таллинне.
                </p>
                <div class="d-flex gap-3 flex-wrap mb-4">
                    <button class="btn-primary-custom" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">
                        Получить предложение
                    </button>
                    <button class="btn-outline-custom" onclick="document.getElementById('earn').scrollIntoView({behavior:'smooth'})">
                        Начать зарабатывать
                    </button>
                </div>
                <div class="row g-3">
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="num">8</div>
                            <div class="label">направлений</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="num">360°</div>
                            <div class="label">полный цикл</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card">
                            <div class="num">EE/RU/EN</div>
                            <div class="label">многоязычность</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="terminal-wrapper">
                    <div class="terminal">
                        <div class="terminal-head">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                        <div class="terminal-body">
                            <div><span class="tk">&lt;AppArtA_IT&gt;</span></div>
                            <div>&nbsp;&nbsp;<span class="val">website</span> = <span class="str">"high-conversion"</span>;</div>
                            <div>&nbsp;&nbsp;<span class="val">seo</span> = <span class="str">"top-rank"</span>;</div>
                            <div>&nbsp;&nbsp;<span class="val">ads</span> = <span class="str">"qualified-leads"</span>;</div>
                            <div>&nbsp;&nbsp;<span class="val">analytics</span> = <span class="str">"data-driven"</span>;</div>
                            <div>&nbsp;&nbsp;<span class="val">automation</span> = <span class="str">"scalable"</span>;</div>
                            <div><span class="tk">&lt;/AppArtA_IT&gt;</span></div>
                            <div class="cursor-line">
                                <span style="color: #60a5fa;">➜</span> system ready
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="py-5" id="services">
    <div class="container-custom">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
            <div>
                <span class="section-label">Services</span>
                <h2 class="section-title">Всё, что нужно<br>для digital-лидерства</h2>
            </div>
            <p class="section-sub">Нажмите на карточку — полный список работ внутри направления.</p>
        </div>

        <div class="row g-4" id="servicesGrid">
            <div class="col-md-6 col-lg-3">
                <div class="service-card" data-service="web">
                    <div class="icon"><i class="fas fa-code"></i></div>
                    <span class="num">01</span>
                    <h5>Web Development</h5>
                    <p>Сайты, магазины, кабинеты, API</p>
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card" data-service="seo">
                    <div class="icon"><i class="fas fa-chart-line"></i></div>
                    <span class="num">02</span>
                    <h5>SEO</h5>
                    <p>Google, локальный рост, трафик</p>
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card" data-service="google">
                    <div class="icon"><i class="fab fa-google"></i></div>
                    <span class="num">03</span>
                    <h5>Google Ads</h5>
                    <p>Поиск, Performance Max, лиды</p>
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card" data-service="social">
                    <div class="icon"><i class="fas fa-share-alt"></i></div>
                    <span class="num">04</span>
                    <h5>Meta & Social</h5>
                    <p>Facebook, Instagram, TikTok</p>
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card" data-service="analytics">
                    <div class="icon"><i class="fas fa-database"></i></div>
                    <span class="num">05</span>
                    <h5>Analytics</h5>
                    <p>GA4, GTM, конверсии, воронки</p>
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card" data-service="automation">
                    <div class="icon"><i class="fas fa-robot"></i></div>
                    <span class="num">06</span>
                    <h5>Automation</h5>
                    <p>CRM, боты, API, интеграции</p>
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card" data-service="support">
                    <div class="icon"><i class="fas fa-headset"></i></div>
                    <span class="num">07</span>
                    <h5>Support</h5>
                    <p>Поддержка, хостинг, доработки</p>
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card" data-service="full">
                    <div class="icon"><i class="fas fa-rocket"></i></div>
                    <span class="num">08</span>
                    <h5>Full Solution</h5>
                    <p>Всё включено: сайт + трафик + рост</p>
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== EARN (ЗАРАБОТОК) ===== -->
<section class="py-5 bg-white" id="earn">
    <div class="container-custom">
        <div class="text-center mb-5">
            <span class="section-label">💰 Заработок</span>
            <h2 class="section-title">Зарабатывай с AppArtA IT</h2>
            <p class="section-sub" style="max-width: 600px; margin: 0 auto;">Регистрируйся бесплатно, выполняй задания и получай деньги. Вывод от 100 €.</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="earn-card">
                    <div class="icon"><i class="fas fa-user-plus"></i></div>
                    <h4>Регистрация</h4>
                    <p>Создай аккаунт бесплатно</p>
                    <span class="free-badge">Бесплатно</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="earn-card">
                    <div class="icon"><i class="fas fa-tasks"></i></div>
                    <h4>Выполняй задания</h4>
                    <p>Получай доступ к задачам от AppArtA IT</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="earn-card">
                    <div class="icon"><i class="fas fa-money-bill-wave"></i></div>
                    <h4>Зарабатывай</h4>
                    <p>Копи деньги на своём счету</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="earn-card">
                    <div class="icon"><i class="fas fa-credit-card"></i></div>
                    <h4>Выводи</h4>
                    <p>Вывод на карту от 100 €</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <h3 class="text-center mb-4" style="font-weight: 700;">Какие задания мы даём?</h3>
            </div>
            <div class="col-md-4">
                <div class="task-category">
                    <div class="icon"><i class="fas fa-code"></i></div>
                    <h5>Разработка</h5>
                    <p>Написание кода, доработка сайтов, создание небольших модулей</p>
                    <div class="examples">Примеры: правки CSS, установка плагинов, мелкий фикс багов</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="task-category">
                    <div class="icon"><i class="fas fa-pen-fancy"></i></div>
                    <h5>Контент</h5>
                    <p>Написание статей, переводы, создание описаний товаров</p>
                    <div class="examples">Примеры: SEO-статьи, описания на EE/RU/EN, посты для соцсетей</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="task-category">
                    <div class="icon"><i class="fas fa-bullhorn"></i></div>
                    <h5>Продвижение</h5>
                    <p>Подписки, лайки, комментарии, участие в группах</p>
                    <div class="examples">Примеры: вступление в группы, лайки постов, подписки на каналы</div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-md-6">
                <div class="task-category">
                    <div class="icon"><i class="fas fa-search"></i></div>
                    <h5>Аналитика</h5>
                    <p>Сбор данных, анализ конкурентов, исследования</p>
                    <div class="examples">Примеры: сбор ключевых слов, анализ сайтов конкурентов</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="task-category">
                    <div class="icon"><i class="fas fa-robot"></i></div>
                    <h5>Автоматизация</h5>
                    <p>Простые скрипты, настройка ботов, интеграции</p>
                    <div class="examples">Примеры: настройка Telegram-бота, создание простого парсера</div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted">* Доступ к заданиям открывается сразу после регистрации. Вывод средств от 100 €.</p>
            <button class="btn-success-custom mt-2" onclick="openAuthModal()">
                <i class="fas fa-rocket me-2"></i> Зарегистрироваться и начать
            </button>
        </div>
    </div>
</section>

<!-- ===== PROCESS ===== -->
<section class="py-5" id="process">
    <div class="container-custom">
        <div class="mb-4">
            <span class="section-label">Process</span>
            <h2 class="section-title">От идеи<br>до результата</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="num">01</div>
                    <h5>Заявка</h5>
                    <p>Вы описываете задачу и цели</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="num">02</div>
                    <h5>Обсуждение</h5>
                    <p>Детали, сроки, приоритеты</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="num">03</div>
                    <h5>Предложение</h5>
                    <p>Объём работ и индивидуальная цена</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="num">04</div>
                    <h5>Реализация</h5>
                    <p>Разработка, запуск, продвижение</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="py-5 bg-white">
    <div class="container-custom">
        <div class="cta-block">
            <div>
                <h3>Kirjelda oma projekti</h3>
                <p>Опишите проект → получите индивидуальное предложение</p>
            </div>
            <button class="btn-primary-custom" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">
                Оставить заявку
            </button>
        </div>
    </div>
</section>

<!-- ===== CONTACT ===== -->
<section class="py-5" id="contact">
    <div class="container-custom">
        <div class="row g-5 align-items-stretch">
            <!-- Левая колонка -->
            <div class="col-lg-5 d-flex flex-column">
                <span class="section-label">Start a project</span>
                <h2 class="section-title">Расскажите<br>о своём проекте</h2>
                <p class="text-muted fs-5">Заполните форму и получите индивидуальное предложение от нашей команды.</p>
                <div class="feature-panel mt-auto">
                    <ul class="checklist">
                        <li>Опишите проект</li>
                        <li>Выберите направление</li>
                        <li>Укажите контакт</li>
                        <li>Получите предложение</li>
                    </ul>
                </div>
            </div>

            <!-- Правая колонка - форма -->
            <div class="col-lg-7 d-flex">
                <div class="form-card w-100">
                    <form id="contactForm" action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label-custom">Ваше имя *</label>
                                <input type="text" class="form-control form-control-custom" placeholder="Иван Иванов" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">Компания</label>
                                <input type="text" class="form-control form-control-custom" placeholder="Название компании">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">Email *</label>
                                <input type="email" class="form-control form-control-custom" placeholder="ivan@company.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">Телефон *</label>
                                <input type="tel" class="form-control form-control-custom" placeholder="+372 5555 5555" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">Направление</label>
                                <select class="form-control form-control-custom">
                                    <option value="">Выберите услугу</option>
                                    <option>Web Development</option>
                                    <option>SEO</option>
                                    <option>Google Ads</option>
                                    <option>Meta & Social</option>
                                    <option>Analytics</option>
                                    <option>Automation</option>
                                    <option>Support</option>
                                    <option>Full Solution</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">Бюджет проекта, €</label>
                                <select class="form-control form-control-custom">
                                    <option value="">Не указывать</option>
                                    <option>до 500 €</option>
                                    <option>500–1 000 €</option>
                                    <option>1 000–2 500 €</option>
                                    <option>2 500–5 000 €</option>
                                    <option>5 000–10 000 €</option>
                                    <option>10 000 €+</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom">Описание проекта *</label>
                                <textarea class="form-control form-control-custom" rows="4" placeholder="Что нужно сделать? Какие цели и пожелания?" required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom">Ссылка на сайт (если есть)</label>
                                <input type="url" class="form-control form-control-custom" placeholder="https://ваш-сайт.ee">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                    <label class="form-check-label" for="agreeTerms" style="font-size: 13px; color: var(--text-muted);">
                                        Я согласен(на) с <a href="#" style="color: var(--primary);">политикой конфиденциальности</a> и даю согласие на обработку данных
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-primary-custom w-100 py-3">
                                    <i class="fas fa-paper-plane me-2"></i> Отправить заявку
                                </button>
                                <div class="text-muted mt-2 small text-center">* Мы свяжемся с вами в течение 24 часов</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="container-custom">
        <div class="row g-4">
            <div class="col-12 col-md-4 col-lg-4">
                <a href="#" class="brand">
                    <span class="brand-icon">A</span>
                    <span>AppArtA IT</span>
                </a>
                <p class="mt-2" style="max-width: 280px;">
                    Web Development · SEO · Google Ads · Meta Ads · Analytics · Automation · Заработок
                </p>
                <div class="footer-social">
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <strong>Услуги</strong>
                <div class="footer-links-grid">
                    <a href="#services">Web Development</a>
                    <a href="#services">SEO</a>
                    <a href="#services">Google Ads</a>
                    <a href="#services">Meta & Social</a>
                    <a href="#services">Analytics</a>
                    <a href="#services">Automation</a>
                </div>
            </div>

            <div class="col-6 col-md-5 col-lg-3">
                <strong>Контакты</strong>
                <div class="footer-contact-line">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:hello@apparta.ee">hello@apparta.ee</a>
                </div>
                <div class="footer-contact-line">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+3725555555">+372 5555 5555</a>
                </div>
                <div class="footer-contact-line">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Tallinn, Estonia</span>
                </div>
                <div class="footer-contact-line">
                    <i class="fas fa-user"></i>
                    <span>Артём Артюхин</span>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-3">
                <strong>Навигация</strong>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-12">
                        <div class="footer-links-grid">
                            <a href="#services">Услуги</a>
                            <a href="#earn" style="color: var(--primary); font-weight: 600;">💰 Заработок</a>
                            <a href="#process">Процесс</a>
                            <a href="#contact">Контакты</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-12 mt-2 mt-md-0">
                        <div class="footer-links-grid">
                            <a href="#" onclick="openAuthModal(); return false;">Войти</a>
                            <a href="#" onclick="openAuthModal(); return false;">Регистрация</a>
                            <a href="#">Политика конфиденциальности</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center">
            <span>© 2025 AppArtA IT. Все права защищены.</span>
            <span>Сделано в Таллинне <i class="fas fa-heart" style="color: var(--primary);"></i></span>
        </div>
    </div>
</footer>

<!-- ===== MODAL АВТОРИЗАЦИЯ ===== -->
<div class="modal-custom" id="authModal">
    <div class="modal-box">
        <div class="modal-header-custom">
            <h2>Вход / Регистрация</h2>
            <button class="modal-close" onclick="closeAuthModal()">✕</button>
        </div>

        <div class="modal-tabs">
            <button class="modal-tab active" onclick="switchAuthTab('login', this)">Вход</button>
            <button class="modal-tab" onclick="switchAuthTab('register', this)">Регистрация</button>
        </div>

        <div id="loginForm">
            <form onsubmit="handleLogin(event)">
                <div class="mb-3">
                    <label class="form-label-custom">Email</label>
                    <input type="email" class="form-control form-control-custom" placeholder="ivan@company.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label-custom">Пароль</label>
                    <input type="password" class="form-control form-control-custom" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn-primary-custom w-100 py-2">Войти</button>
                <div class="text-center mt-3">
                    <a href="#" style="color: var(--primary); font-size: 13px;">Забыли пароль?</a>
                </div>
            </form>
        </div>

        <div id="registerForm" style="display:none;">
            <form onsubmit="handleRegister(event)">
                <div class="mb-3">
                    <label class="form-label-custom">Имя и фамилия</label>
                    <input type="text" class="form-control form-control-custom" placeholder="Иван Иванов" required>
                </div>
                <div class="mb-3">
                    <label class="form-label-custom">Email</label>
                    <input type="email" class="form-control form-control-custom" placeholder="ivan@company.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label-custom">Пароль</label>
                    <input type="password" class="form-control form-control-custom" placeholder="Минимум 6 символов" required>
                </div>
                <div class="mb-3">
                    <label class="form-label-custom">Кто вы?</label>
                    <select class="form-control form-control-custom">
                        <option value="client">Заказчик (хочу заказать услугу)</option>
                        <option value="worker" selected>Работник (хочу зарабатывать)</option>
                        <option value="both">И то, и другое</option>
                    </select>
                </div>
                <button type="submit" class="btn-success-custom w-100 py-2">
                    <i class="fas fa-user-plus me-2"></i> Зарегистрироваться
                </button>
                <div class="text-center mt-3">
                    <span style="color: var(--text-muted); font-size: 13px;">Регистрируясь, вы соглашаетесь с <a href="#" style="color: var(--primary);">условиями</a></span>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // ===== NAVBAR SCROLL =====
    window.addEventListener('scroll', () => {
        document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 20);
    });

    // ===== MOBILE TOGGLE =====
    const mobileToggle = document.getElementById('mobileToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    mobileToggle.addEventListener('click', () => {
        mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
    });
    document.querySelectorAll('#mobileMenu a').forEach(link => {
        link.addEventListener('click', () => { mobileMenu.style.display = 'none'; });
    });

    // ===== LANGUAGE SWITCHER =====
    const langBtns = document.querySelectorAll('.lang-btn');
    langBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            langBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            console.log('Language switched to:', this.dataset.lang);
        });
    });

    // ===== AUTH MODAL =====
    function openAuthModal() {
        document.getElementById('authModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeAuthModal() {
        document.getElementById('authModal').classList.remove('active');
        document.body.style.overflow = '';
    }

    function switchAuthTab(tab, btn) {
        document.querySelectorAll('.modal-tab').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById('loginForm').style.display = tab === 'login' ? 'block' : 'none';
        document.getElementById('registerForm').style.display = tab === 'register' ? 'block' : 'none';
    }

    function handleLogin(e) {
        e.preventDefault();
        alert('✅ Вход выполнен! Добро пожаловать в AppArtA IT.');
        closeAuthModal();
    }

    function handleRegister(e) {
        e.preventDefault();
        alert('✅ Регистрация успешна! Доступ к заданиям открыт. Ждите новые задачи!');
        closeAuthModal();
    }

    // ===== SERVICES DATA =====
    const servicesData = {
        web: { title: "Web Development", description: "Разработка сайтов и веб-систем под ключ.",
            items: ["Сайты под ключ", "Landing Page", "Корпоративные сайты", "Интернет-магазины", "Каталоги", "Мультиязычные сайты", "Custom PHP", "Личные кабинеты", "Админ-панели", "CRM", "Онлайн-запись", "Калькуляторы", "API-интеграции", "Платёжные системы", "Редизайн", "Оптимизация скорости", "Мобильная адаптация"] },
        seo: { title: "SEO", description: "Увеличение видимости и органического трафика.",
            items: ["SEO-аудит", "Техническое SEO", "Local SEO", "SEO для Эстонии", "SEO для Балтии", "Анализ конкурентов", "Сбор ключевых слов", "On-page SEO", "Title/Description", "H1-H6", "Внутренняя перелинковка", "Индексация", "Google Search Console", "Core Web Vitals", "Multilingual SEO", "Hreflang", "Мониторинг позиций"] },
        google: { title: "Google Ads", description: "Настройка рекламы с упором на заявки и продажи.",
            items: ["Google Search Ads", "Performance Max", "Display Ads", "Remarketing", "Google Maps Ads", "Local Business Ads", "E-commerce Ads", "Подбор ключевых слов", "Минус-слова", "Создание объявлений", "Геотаргетинг", "Conversion Tracking", "Оптимизация бюджета", "Оптимизация стоимости лида", "Ежемесячное ведение"] },
        social: { title: "Meta & Social", description: "Продвижение в социальных сетях и Meta Ads.",
            items: ["Facebook Ads", "Instagram Ads", "Meta Ads", "Lead Ads", "Stories Ads", "Reels Ads", "Реклама на сообщения", "Retargeting", "Meta Pixel", "Настройка аудиторий", "Lookalike Audiences", "Instagram Growth", "Facebook Growth", "TikTok Promotion", "YouTube Promotion", "Контент-стратегия", "Social Analytics"] },
        analytics: { title: "Analytics", description: "Настройка измерения трафика, конверсий и эффективности.",
            items: ["Google Analytics 4", "Google Tag Manager", "Google Search Console", "Meta Pixel", "Google Ads Conversion Tracking", "Meta Conversion Tracking", "Events", "Goals", "Lead Tracking", "Purchase Tracking", "Click Tracking", "Traffic Analysis", "Ad Performance Reports", "Marketing Dashboards"] },
        automation: { title: "Automation", description: "Автоматизация процессов и коммуникаций.",
            items: ["CRM-интеграции", "Telegram-боты", "Боты для бизнеса", "Автоматизация заявок", "Email automation", "Уведомления", "Системы бронирования", "Order automation", "Internal dashboards", "API integrations", "Интеграция мессенджеров"] },
        support: { title: "Support", description: "Поддержка, обслуживание и развитие проектов.",
            items: ["Техническая поддержка", "Исправление ошибок", "Добавление функций", "Добавление страниц", "Перенос сайтов", "Настройка домена", "DNS", "Хостинг", "SSL", "Backups", "Monitoring", "Performance Optimization", "Обновление контента"] },
        full: { title: "Full Solution", description: "Комплексное решение: сайт + трафик + рост.",
            items: ["Сайт + SEO", "Сайт + Google Ads", "Сайт + Meta Ads", "Сайт + SEO + Ads", "Сайт + Analytics", "Сайт + Automation", "Development + Promotion", "Full Online Launch", "Digital Strategy", "Traffic Acquisition", "Conversion Tracking", "Monthly Growth Support"] }
    };

    // ===== MODAL =====
    const modal = document.getElementById('serviceModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDescription');
    const modalServices = document.getElementById('modalServices');
    const modalClose = document.getElementById('modalClose');
    const modalCta = document.getElementById('modalCta');

    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('click', () => {
            const key = card.dataset.service;
            const data = servicesData[key];
            if (!data) return;
            modalTitle.textContent = data.title;
            modalDesc.textContent = data.description;
            modalServices.innerHTML = data.items.map(item => `<div class="modal-service">${item}</div>`).join('');
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    const closeModal = () => {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    };
    modalClose.addEventListener('click', closeModal);
    modal.addEventListener('click', e => { if (e.target === modal) closeModal(); });
    modalCta.addEventListener('click', () => { closeModal(); document.getElementById('contact').scrollIntoView({behavior:'smooth'}); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

    // ===== FORM CONTACT =====
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('✅ Заявка отправлена! Мы свяжемся с вами в ближайшее время.');
        this.reset();
    });

    // Закрытие модалок по клику вне окна
    document.querySelectorAll('.modal-custom').forEach(m => {
        m.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });
</script>
</body>
</html>