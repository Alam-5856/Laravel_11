<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Developer Workspace</title>

        <style>
            :root {
                color-scheme: dark;
                --bg: #0b0f14;
                --panel: #101820;
                --panel-soft: #14202a;
                --line: #253240;
                --line-strong: #334558;
                --text: #eef5f8;
                --muted: #91a4b3;
                --green: #48d597;
                --cyan: #4eb7d8;
                --amber: #f4b74a;
                --red: #ff6d6d;
                --shadow: 0 24px 80px rgba(0, 0, 0, .38);
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                min-height: 100vh;
                background:
                    radial-gradient(circle at top left, rgba(78, 183, 216, .16), transparent 34rem),
                    linear-gradient(135deg, #071017 0%, #0b0f14 48%, #10140f 100%);
                color: var(--text);
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            }

            a {
                color: inherit;
                text-decoration: none;
            }

            .page {
                width: min(1180px, calc(100% - 32px));
                min-height: 100vh;
                margin: 0 auto;
                padding: 28px 0;
                display: flex;
                flex-direction: column;
                gap: 26px;
            }

            .topbar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 18px;
            }

            .brand {
                display: flex;
                align-items: center;
                gap: 12px;
                min-width: 0;
            }

            .mark {
                width: 42px;
                height: 42px;
                display: grid;
                place-items: center;
                border: 1px solid var(--line-strong);
                border-radius: 8px;
                background: linear-gradient(145deg, #17242e, #0e151c);
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, .06);
                color: var(--green);
                font: 700 18px/1 ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
            }

            .brand strong {
                display: block;
                font-size: 15px;
                letter-spacing: 0;
            }

            .brand span {
                display: block;
                color: var(--muted);
                font-size: 13px;
                margin-top: 2px;
            }

            .nav {
                display: flex;
                align-items: center;
                gap: 10px;
                flex-wrap: wrap;
                justify-content: flex-end;
            }

            .nav a,
            .status-pill {
                min-height: 38px;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                border: 1px solid var(--line);
                border-radius: 8px;
                padding: 0 14px;
                color: var(--muted);
                background: rgba(16, 24, 32, .72);
                font-size: 13px;
            }

            .nav a:hover {
                border-color: var(--cyan);
                color: var(--text);
            }

            .status-dot {
                width: 8px;
                height: 8px;
                border-radius: 99px;
                background: var(--green);
                box-shadow: 0 0 18px rgba(72, 213, 151, .8);
            }

            .hero {
                display: grid;
                grid-template-columns: minmax(0, 1fr) minmax(340px, 470px);
                gap: 24px;
                align-items: stretch;
            }

            .intro {
                border: 1px solid var(--line);
                border-radius: 8px;
                padding: clamp(28px, 5vw, 54px);
                background: rgba(16, 24, 32, .76);
                box-shadow: var(--shadow);
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                min-height: 520px;
            }

            .eyebrow {
                display: inline-flex;
                width: fit-content;
                align-items: center;
                gap: 10px;
                color: var(--green);
                border: 1px solid rgba(72, 213, 151, .28);
                border-radius: 8px;
                background: rgba(72, 213, 151, .08);
                padding: 8px 12px;
                font: 700 12px/1 ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
            }

            h1 {
                max-width: 820px;
                margin: 28px 0 18px;
                font-size: clamp(42px, 8vw, 82px);
                line-height: .95;
                letter-spacing: 0;
            }

            .lead {
                max-width: 680px;
                margin: 0;
                color: #b8c8d3;
                font-size: clamp(17px, 2vw, 21px);
                line-height: 1.65;
            }

            .actions {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                margin-top: 36px;
            }

            .button {
                min-height: 46px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                border-radius: 8px;
                padding: 0 18px;
                border: 1px solid var(--line-strong);
                background: var(--panel-soft);
                color: var(--text);
                font-weight: 700;
                font-size: 14px;
            }

            .button.primary {
                border-color: rgba(72, 213, 151, .52);
                background: var(--green);
                color: #071017;
            }

            .terminal {
                border: 1px solid var(--line);
                border-radius: 8px;
                background: #071017;
                box-shadow: var(--shadow);
                overflow: hidden;
                min-height: 520px;
            }

            .terminal-bar {
                height: 44px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                padding: 0 16px;
                border-bottom: 1px solid var(--line);
                background: #0d151d;
                color: var(--muted);
                font-size: 13px;
            }

            .window-dots {
                display: flex;
                gap: 7px;
            }

            .window-dots i {
                width: 10px;
                height: 10px;
                border-radius: 99px;
                display: block;
            }

            .window-dots i:nth-child(1) { background: var(--red); }
            .window-dots i:nth-child(2) { background: var(--amber); }
            .window-dots i:nth-child(3) { background: var(--green); }

            .code {
                margin: 0;
                padding: 24px;
                overflow-x: auto;
                color: #d8e5eb;
                font: 14px/1.8 ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
            }

            .code .muted { color: #6f8594; }
            .code .green { color: var(--green); }
            .code .cyan { color: var(--cyan); }
            .code .amber { color: var(--amber); }
            .code .red { color: var(--red); }

            .metrics {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 14px;
            }

            .metric,
            .module {
                border: 1px solid var(--line);
                border-radius: 8px;
                background: rgba(16, 24, 32, .78);
                padding: 18px;
            }

            .metric span,
            .module span {
                color: var(--muted);
                font-size: 13px;
            }

            .metric strong {
                display: block;
                margin-top: 8px;
                font-size: 26px;
                line-height: 1;
            }

            .modules {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 14px;
            }

            .module {
                min-height: 164px;
            }

            .module-icon {
                width: 38px;
                height: 38px;
                display: grid;
                place-items: center;
                border-radius: 8px;
                border: 1px solid var(--line-strong);
                background: #0c141b;
                color: var(--cyan);
                margin-bottom: 18px;
                font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
                font-weight: 800;
            }

            .module h2 {
                margin: 0 0 10px;
                font-size: 18px;
                letter-spacing: 0;
            }

            .module p {
                margin: 0;
                color: #aab9c4;
                font-size: 14px;
                line-height: 1.6;
            }

            .footer {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 14px;
                color: var(--muted);
                font-size: 13px;
                padding-bottom: 10px;
            }

            @media (max-width: 900px) {
                .hero,
                .metrics,
                .modules {
                    grid-template-columns: 1fr;
                }

                .intro,
                .terminal {
                    min-height: auto;
                }
            }

            @media (max-width: 640px) {
                .page {
                    width: min(100% - 22px, 1180px);
                    padding-top: 18px;
                }

                .topbar,
                .footer {
                    align-items: flex-start;
                    flex-direction: column;
                }

                .nav {
                    justify-content: flex-start;
                }

                .intro {
                    padding: 24px;
                }

                .code {
                    padding: 18px;
                    font-size: 13px;
                }
            }
        </style>
    </head>
    <body>
        <main class="page">
            <header class="topbar">
                <a class="brand" href="{{ url('/') }}" aria-label="Developer Workspace">
                    <span class="mark">&lt;/&gt;</span>
                    <span>
                        <strong>Developer Workspace</strong>
                        <span>Laravel application shell</span>
                    </span>
                </a>

                <nav class="nav" aria-label="Main navigation">
                    <span class="status-pill"><span class="status-dot"></span> Online</span>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('/products.index') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </header>

            <section class="hero" aria-label="Developer hero">
                <div class="intro">
                    <div>
                        <span class="eyebrow">APP_READY / BUILD_FAST</span>
                        <h1>Build clean code, ship useful products.</h1>
                        <p class="lead">
                            A sharp starter screen for developers: focused layout, readable code panels,
                            clear project status, and quick paths into the app.
                        </p>
                    </div>

                    <div class="actions">
                        <a class="button primary" href="{{ url('/home') }}">Open Workspace</a>
                        <a class="button" href="https://laravel.com/docs" target="_blank" rel="noreferrer">Laravel Docs</a>
                    </div>
                </div>

                <aside class="terminal" aria-label="Code preview">
                    <div class="terminal-bar">
                        <span class="window-dots" aria-hidden="true"><i></i><i></i><i></i></span>
                        <span>routes/web.php</span>
                    </div>
                    <pre class="code"><code><span class="muted">01</span> <span class="red">&lt;?php</span>
<span class="muted">02</span>
<span class="muted">03</span> <span class="cyan">use</span> Illuminate\Support\Facades\Route;
<span class="muted">04</span>
<span class="muted">05</span> Route::<span class="green">get</span>(<span class="amber">'/'</span>, function () {
<span class="muted">06</span>     <span class="cyan">return</span> view(<span class="amber">'welcome'</span>);
<span class="muted">07</span> });
<span class="muted">08</span>
<span class="muted">09</span> <span class="muted">// Laravel {{ Illuminate\Foundation\Application::VERSION }}</span>
<span class="muted">10</span> <span class="muted">// PHP {{ PHP_VERSION }}</span>
<span class="muted">11</span>
<span class="muted">12</span> <span class="green">artisan</span> serve
<span class="muted">13</span> <span class="green">npm</span> run dev
<span class="muted">14</span> <span class="green">phpunit</span></code></pre>
                </aside>
            </section>

            <section class="metrics" aria-label="Project metrics">
                <div class="metric">
                    <span>Framework</span>
                    <strong>Laravel</strong>
                </div>
                <div class="metric">
                    <span>Version</span>
                    <strong>{{ Illuminate\Foundation\Application::VERSION }}</strong>
                </div>
                <div class="metric">
                    <span>Runtime</span>
                    <strong>PHP {{ PHP_MAJOR_VERSION }}.{{ PHP_MINOR_VERSION }}</strong>
                </div>
                <div class="metric">
                    <span>Status</span>
                    <strong>Ready</strong>
                </div>
            </section>

            <section class="modules" aria-label="Developer features">
                <article class="module">
                    <div class="module-icon">{ }</div>
                    <h2>Readable Structure</h2>
                    <p>Organized sections make the page feel like a real product workspace, not a generic splash screen.</p>
                </article>

                <article class="module">
                    <div class="module-icon">DB</div>
                    <h2>Backend Mindset</h2>
                    <p>Designed around routes, runtime details, and build commands that developers recognize immediately.</p>
                </article>

                <article class="module">
                    <div class="module-icon">UI</div>
                    <h2>Clean Interface</h2>
                    <p>Dark editor-inspired styling, strong spacing, compact cards, and responsive behavior for every screen.</p>
                </article>
            </section>

            <footer class="footer">
                <span>Laravel v{{ Illuminate\Foundation\Application::VERSION }} / PHP v{{ PHP_VERSION }}</span>
                <span>{{ config('app.name', 'Laravel') }}</span>
            </footer>
        </main>
    </body>
</html>
