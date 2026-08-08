<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Palet Framework</title>
    <link href="/css/app.css" rel="stylesheet">
    <style>
        body {
            background: radial-gradient(circle at top left, rgba(59, 130, 246, 0.15), transparent 30%),
                        radial-gradient(circle at bottom right, rgba(168, 85, 247, 0.15), transparent 30%),
                        #0b1120;
        }
    </style>
</head>
<body class="min-h-screen grid place-items-center text-palet-text font-sans relative overflow-x-hidden">
    
    <!-- Background glowing orbs -->
    <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-purple-600/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="glass-panel w-full max-w-md mx-4 rounded-3xl p-8 relative z-10 shadow-2xl border border-slate-700/50">
        
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white mb-2 tracking-tight">Oturum Aç</h1>
            <p class="text-slate-400 text-sm">Uygulamaya erişmek için giriş yapın.</p>
        </div>

        <form action="/login" method="POST" class="flex flex-col gap-5">
            <div>
                <label for="email" class="block text-sm font-medium text-slate-300 mb-1.5">E-posta Adresi</label>
                <div class="relative">
                    <input type="email" id="email" name="email" required placeholder="admin@palet.test"
                        class="w-full bg-slate-900/50 border border-slate-700/60 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-300 mb-1.5">Şifre</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required placeholder="••••••••"
                        class="w-full bg-slate-900/50 border border-slate-700/60 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                </div>
            </div>

            <div class="flex items-center justify-between mt-1">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" class="w-4 h-4 rounded border-slate-700 bg-slate-900/50 text-blue-500 focus:ring-blue-500 focus:ring-offset-slate-900">
                    <span class="text-sm text-slate-400 select-none">Beni hatırla</span>
                </label>
                <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition-colors">Şifremi unuttum</a>
            </div>

            <button type="submit" 
                class="w-full bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg hover:shadow-blue-500/25 transition-all active:scale-[0.98] mt-2">
                Giriş Yap
            </button>
        </form>
        
        <p class="text-center text-sm text-slate-400 mt-6">
            Hesabınız yok mu? <a href="#" class="text-white hover:text-blue-400 transition-colors">Kayıt ol</a>
        </form>

    </div>

</body>
</html>
