<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palet Framework</title>
    <!-- Use Tailwind CSS output -->
    <link href="/css/app.css" rel="stylesheet">
    <style>
        body {
            background: radial-gradient(circle at top left, rgba(59, 130, 246, 0.18), transparent 30%),
                        radial-gradient(circle at bottom right, rgba(236, 72, 153, 0.18), transparent 28%),
                        #0b1120;
        }
    </style>
</head>
<body class="min-h-screen grid place-items-center text-paletText font-sans relative overflow-x-hidden">
    
    <!-- Background glowing orbs for extra depth -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <section class="glass-panel w-full max-w-[1100px] mx-4 rounded-[28px] p-8 md:p-12 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-[1.5fr_1fr] gap-10 items-center">
            
            <!-- Left Content -->
            <div>
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-sky-400/10 text-sky-300 text-sm font-medium border border-blue-500/20 mb-6">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
                    </span>
                    Palet Application Skeleton
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-[4.4rem] font-bold text-white leading-[1.05] tracking-tight">
                    Modern, kurumsal ve üretime hazır <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">PHP iskeleti.</span>
                </h1>
                
                <p class="mt-6 text-slate-300 text-lg leading-relaxed max-w-2xl">
                    Palet Framework ile hızlıca başlatılmış bu proje; güvenlik, performans ve modüler yapı için temel bir platform sunar. Yönetilebilir servis sağlayıcılar, yapılandırılabilir middleware zinciri ve modern web uygulamalarına hazır altyapı içerir.
                </p>

                <div class="flex flex-wrap gap-4 mt-10">
                    <div class="flex flex-col gap-1 px-5 py-3 rounded-2xl bg-slate-400/10 border border-slate-400/20 min-w-[160px]">
                        <small class="text-slate-400 text-sm">Framework</small>
                        <span class="text-white font-bold text-xl">Palet 1.0.0-RC1</span>
                    </div>
                    <div class="flex flex-col gap-1 px-5 py-3 rounded-2xl bg-slate-400/10 border border-slate-400/20 min-w-[160px]">
                        <small class="text-slate-400 text-sm">PHP Sürümü</small>
                        <span class="text-white font-bold text-xl">8.2+</span>
                    </div>
                    <div class="flex flex-col gap-1 px-5 py-3 rounded-2xl bg-slate-400/10 border border-slate-400/20 min-w-[160px]">
                        <small class="text-slate-400 text-sm">Şablon</small>
                        <span class="text-white font-bold text-xl">Minimal MVC</span>
                    </div>
                </div>
            </div>

            <!-- Right Content (Cards) -->
            <div class="flex flex-col gap-4">
                <div class="glass-card p-6 rounded-3xl">
                    <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center mb-4 text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-white text-lg font-semibold mb-2">Hızlı Başlangıç</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Değiştirilebilir rota şablonları, HTTP kernel ve tek bir CLI komutuyla projeyi ayağa kaldırın.</p>
                </div>
                
                <div class="glass-card p-6 rounded-3xl">
                    <div class="w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center mb-4 text-purple-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-white text-lg font-semibold mb-2">Kurumsal Görünüm</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Modern UI tasarımına uygun, profesyonel bir açılış sayfası ve tutarlı tipografi ile sunulur.</p>
                </div>

                <div class="glass-card p-6 rounded-3xl">
                    <div class="w-10 h-10 rounded-full bg-emerald-500/20 flex items-center justify-center mb-4 text-emerald-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-white text-lg font-semibold mb-2">Genişletilebilir Mimari</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Servis sağlayıcılar, middleware katmanları ve modüler yapı, proje büyüdükçe entegrasyonu kolaylaştırır.</p>
                </div>
            </div>
            
        </div>
    </section>
    
    <div class="fixed bottom-4 text-center w-full text-slate-500 text-sm font-medium z-0">
        Merhaba, <?php echo $name ?? 'Kullanıcı'; ?>! Palet Framework v1.0
    </div>

</body>
</html>
