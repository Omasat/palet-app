<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palet App - Zaten Yüklü</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: #f8fafc; color: #1e293b; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .container { background-color: white; padding: 3rem 2rem; border-radius: 1rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); width: 100%; max-width: 500px; text-align: center; }
        .icon { background-color: #dbeafe; color: #3b82f6; width: 64px; height: 64px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem auto; }
        .icon svg { width: 32px; height: 32px; }
        h1 { margin-top: 0; color: #0f172a; font-size: 1.5rem; }
        p { color: #64748b; margin-bottom: 2rem; line-height: 1.6; }
        .btn { display: inline-block; background-color: #3b82f6; color: white; padding: 0.75rem 1.5rem; border-radius: 0.375rem; text-decoration: none; font-weight: 600; transition: background-color 0.2s; }
        .btn:hover { background-color: #2563eb; }
        .note { margin-top: 2rem; font-size: 0.875rem; color: #94a3b8; background: #f1f5f9; padding: 1rem; border-radius: 0.5rem; text-align: left; }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <h1>Sistem Zaten Kurulu!</h1>
        <p>Palet App başarılı bir şekilde kurulmuş durumda ve çalışmaya hazır. Bu sayfaya tekrar erişmenize gerek yok.</p>
        
        <a href="/" class="btn">Ana Sayfaya Git</a>

        <div class="note">
            <strong>Geliştirici Notu:</strong> Eğer uygulamayı sıfırlamak veya yeniden kurmak istiyorsanız, proje kök dizinindeki <code>install.lock</code> dosyasını silebilirsiniz.
        </div>
    </div>
</body>
</html>
