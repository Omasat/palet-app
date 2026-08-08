<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palet Framework</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Inter, 'Segoe UI', sans-serif;
            background: #0b1120;
            color: #e2e8f0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: radial-gradient(circle at top left, rgba(59, 130, 246, 0.18), transparent 30%),
                        radial-gradient(circle at bottom right, rgba(236, 72, 153, 0.18), transparent 28%),
                        #0b1120;
        }

        .panel {
            width: min(1100px, calc(100vw - 32px));
            border-radius: 28px;
            padding: 2.5rem;
            background: rgba(15, 23, 42, 0.92);
            border: 1px solid rgba(148, 163, 184, 0.12);
            box-shadow: 0 32px 80px rgba(15, 23, 42, 0.35);
            overflow: hidden;
        }

        .hero {
            display: grid;
            gap: 1.75rem;
            grid-template-columns: 1.5fr 1fr;
            align-items: center;
        }

        .hero h1 {
            margin: 0;
            font-size: clamp(2.8rem, 4vw, 4.4rem);
            line-height: 1.02;
            letter-spacing: -0.04em;
            color: #fff;
        }

        .hero p {
            margin: 1.5rem 0 0;
            max-width: 42rem;
            color: #cbd5e1;
            line-height: 1.8;
            font-size: 1rem;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.7rem 1rem;
            border-radius: 999px;
            background: rgba(56, 189, 248, 0.14);
            color: #7dd3fc;
            font-size: 0.95rem;
            border: 1px solid rgba(59, 130, 246, 0.22);
            width: fit-content;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .feature-card {
            padding: 1.5rem;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(148, 163, 184, 0.08);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            background: rgba(148, 163, 184, 0.08);
        }

        .feature-card h3 {
            margin: 0 0 0.75rem;
            font-size: 1.05rem;
            color: #fff;
        }

        .feature-card p {
            margin: 0;
            color: #94a3b8;
            line-height: 1.75;
            font-size: 0.98rem;
        }

        .meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1.75rem;
        }

        .meta-item {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding: 1rem 1.25rem;
            border-radius: 1.25rem;
            background: rgba(148, 163, 184, 0.08);
            border: 1px solid rgba(148, 163, 184, 0.14);
            min-width: 160px;
        }

        .meta-item span {
            color: #fff;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .meta-item small {
            color: #94a3b8;
            line-height: 1.5;
        }

        @media (max-width: 860px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <section class="panel">
        <div class="hero">
            <div>
                <div class="badge">Palet Application Skeleton</div>
                <h1>Modern, kurumsal ve üretime hazır PHP uygulama iskeleti.</h1>
                <p>Palet Framework ile hızlıca başlatılmış bu proje, güvenlik, performans ve modüler yapı için temel bir platform sunar. Yönetilebilir servis sağlayıcılar, yapılandırılabilir middleware zinciri ve modern web uygulamalarına hazır altyapı içerir.</p>

                <div class="meta">
                    <div class="meta-item">
                        <small>Framework</small>
                        <span>Palet 1.0.0-RC1</span>
                    </div>
                    <div class="meta-item">
                        <small>PHP Sürümü</small>
                        <span>8.2+</span>
                    </div>
                    <div class="meta-item">
                        <small>Şablon</small>
                        <span>Minimal MVC</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="feature-card">
                    <h3>Hızlı Başlangıç</h3>
                    <p>Değiştirilebilir rota şablonları, HTTP kernel ve tek bir CLI komutuyla projeyi ayağa kaldırın.</p>
                </div>
                <div class="feature-card">
                    <h3>Kurumsal Görünüm</h3>
                    <p>Modern UI tasarımına uygun, profesyonel bir açılış sayfası ve tutarlı tipografi ile sunulur.</p>
                </div>
                <div class="feature-card">
                    <h3>Genişletilebilir Mimari</h3>
                    <p>Servis sağlayıcılar, middleware katmanları ve modüler yapı, proje büyüdükçe kolay entegrasyon sağlar.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
