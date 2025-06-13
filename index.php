<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniOS</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="manifest" href="manifest.json">
</head>
<body>
    <header class="header">
        <h1 class="header__title">MiniOS.</h1>
        <p class="header__subtitle">Sistema Operativo Web sin JavaScript.</p>
    </header>
    
    <main class="main">
        <section class="menu">
            <input type="radio" name="app" id="app-note" class="menu__radio" checked>
            <input type="radio" name="app" id="app-homeworks" class="menu__radio">
            <input type="radio" name="app" id="app-weather" class="menu__radio">

            <div class="menu__options">
                <label for="app-note" class="menu__label">Notas.</label>
                <label for="app-homeworks" class="menu__label">Tareas.</label>
                <label for="app-weather" class="menu__label">Clima.</label>
            </div>

            <div class="window">
                <iframe src="apps/note.html" class="window__iframe" title="Notas"></iframe>
                <iframe src="apps/homeworks.html" class="window__iframe" title="Tareas"></iframe>
                <iframe src="apps/weather.html" class="window__iframe" title="Clima"></iframe>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="footer__text">&COPY; MiniOS | Sistema Operativo Web Ficticio.</p>
    </footer>
</body>
</html>