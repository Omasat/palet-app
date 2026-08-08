<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Palet Framework</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-200 antialiased selection:bg-blue-500/30">

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900/50 border-r border-slate-800 flex flex-col transition-all duration-300">
            <div class="h-16 flex items-center px-6 border-b border-slate-800">
                <div class="flex items-center gap-3 text-white font-bold text-xl tracking-tight">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-blue-500/20">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    Palet<span class="text-blue-500">.</span>
                </div>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-blue-500/10 text-blue-400 rounded-xl font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    Genel Bakış
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/50 rounded-xl font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Kullanıcılar
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/50 rounded-xl font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Sistem Ayarları
                </a>
            </nav>
            
            <div class="p-4 border-t border-slate-800">
                <form action="/logout" method="POST">
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-2.5 bg-slate-800 hover:bg-red-500/10 text-slate-300 hover:text-red-400 rounded-lg text-sm font-medium transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Çıkış Yap
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <!-- Header -->
            <header class="h-16 flex items-center justify-between px-8 border-b border-slate-800 bg-slate-900/20 backdrop-blur-md">
                <h2 class="text-lg font-medium text-white">Yönetim Paneli</h2>
                
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-3">
                        <div class="text-right">
                            <div class="text-sm font-medium text-white"><?= htmlspecialchars($user->name ?? 'Kullanıcı') ?></div>
                            <div class="text-xs text-slate-400"><?= htmlspecialchars($user->email ?? '') ?></div>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-500 flex items-center justify-center text-white font-bold shadow-lg">
                            <?= strtoupper(substr($user->name ?? 'U', 0, 1)) ?>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="flex-1 overflow-auto p-8">
                <div class="max-w-6xl mx-auto space-y-8">
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-2xl font-bold text-white tracking-tight">Hoş Geldiniz, <?= htmlspecialchars(explode(' ', $user->name ?? 'Kullanıcı')[0]) ?>! 👋</h1>
                            <p class="text-slate-400 mt-1">Sistem durumu ve son aktivitelerin özetini aşağıda bulabilirsiniz.</p>
                        </div>
                        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg text-sm font-medium shadow-lg shadow-blue-500/20 transition-all active:scale-95">
                            Rapor Oluştur
                        </button>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-colors">
                            <div class="w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-slate-400 text-sm font-medium">Aktif İstekler</h3>
                            <div class="text-3xl font-bold text-white mt-1">1,482</div>
                            <div class="flex items-center gap-1 mt-2 text-emerald-400 text-sm font-medium">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                                <span>+12.5%</span>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-colors">
                            <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-slate-400 text-sm font-medium">Toplam Kullanıcı</h3>
                            <div class="text-3xl font-bold text-white mt-1">324</div>
                            <div class="flex items-center gap-1 mt-2 text-emerald-400 text-sm font-medium">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                                <span>+4.2%</span>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition-colors">
                            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-slate-400 text-sm font-medium">Sistem Sağlığı</h3>
                            <div class="text-3xl font-bold text-white mt-1">%99.9</div>
                            <div class="flex items-center gap-1 mt-2 text-slate-400 text-sm font-medium">
                                <span>Son 30 gün kesintisiz</span>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-slate-900/50 border border-slate-800 rounded-2xl overflow-hidden">
                        <div class="px-6 py-5 border-b border-slate-800">
                            <h3 class="text-lg font-medium text-white">Sistem Durumu</h3>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-center h-48 text-slate-500">
                                <div class="text-center">
                                    <svg class="w-12 h-12 mx-auto mb-3 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    <p>Sistem logları temiz, hiçbir uyarı bulunamadı.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
    </div>

</body>
</html>
