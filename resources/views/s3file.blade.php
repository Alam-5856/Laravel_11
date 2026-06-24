<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S3 File Upload</title>

    <style>
        :root {
            --bg: #f4f7fb;
            --panel: #ffffff;
            --ink: #172033;
            --muted: #64748b;
            --line: #dbe4ef;
            --blue: #2563eb;
            --blue-dark: #1d4ed8;
            --green: #16a34a;
            --red: #dc2626;
            --shadow: 0 18px 48px rgba(24, 40, 72, .1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(circle at top left, rgba(37, 99, 235, .12), transparent 32rem),
                linear-gradient(135deg, #f8fbff 0%, var(--bg) 55%, #eef6f2 100%);
            color: var(--ink);
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .page {
            width: min(1040px, calc(100% - 32px));
            margin: 0 auto;
            padding: 40px 0;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-mark {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            border-radius: 8px;
            background: var(--blue);
            color: #ffffff;
            font-weight: 800;
            box-shadow: 0 12px 26px rgba(37, 99, 235, .22);
        }

        .brand strong {
            display: block;
            font-size: 18px;
        }

        .brand span {
            display: block;
            margin-top: 2px;
            color: var(--muted);
            font-size: 13px;
        }

        .button-link,
        button {
            min-height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border: 0;
            border-radius: 8px;
            padding: 0 16px;
            background: var(--blue);
            color: #ffffff;
            cursor: pointer;
            font: 700 14px/1 Arial, Helvetica, sans-serif;
            transition: background .2s ease, transform .2s ease, box-shadow .2s ease;
        }

        .button-link {
            background: #ffffff;
            color: var(--ink);
            border: 1px solid var(--line);
        }

        button:hover,
        .button-link:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 24px rgba(24, 40, 72, .12);
        }

        button:hover {
            background: var(--blue-dark);
        }

        .hero {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 380px;
            gap: 24px;
            align-items: stretch;
        }

        .panel,
        .side-card {
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 255, 255, .88);
            box-shadow: var(--shadow);
        }

        .panel {
            padding: clamp(24px, 5vw, 44px);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            width: fit-content;
            min-height: 30px;
            border-radius: 8px;
            padding: 0 12px;
            background: #eaf2ff;
            color: var(--blue-dark);
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
        }

        h1 {
            max-width: 640px;
            margin: 20px 0 12px;
            font-size: clamp(34px, 6vw, 58px);
            line-height: 1;
            letter-spacing: 0;
        }

        .lead {
            max-width: 640px;
            margin: 0 0 28px;
            color: var(--muted);
            font-size: 17px;
            line-height: 1.65;
        }

        .alert {
            margin-bottom: 18px;
            padding: 13px 14px;
            border-radius: 8px;
            font-weight: 700;
        }

        .alert.success {
            background: #dcfce7;
            color: #166534;
        }

        .alert.error {
            background: #fee2e2;
            color: #991b1b;
        }

        .alert ul {
            margin: 8px 0 0;
            padding-left: 20px;
        }

        .upload-box {
            position: relative;
            border: 2px dashed #b7c6d8;
            border-radius: 8px;
            background: #f8fbff;
            padding: 34px 24px;
            text-align: center;
            transition: border-color .2s ease, background .2s ease;
        }

        .upload-box:hover {
            border-color: var(--blue);
            background: #f3f8ff;
        }

        .upload-icon {
            width: 58px;
            height: 58px;
            display: grid;
            place-items: center;
            margin: 0 auto 16px;
            border-radius: 8px;
            background: #eaf2ff;
            color: var(--blue);
            font-size: 28px;
            font-weight: 800;
        }

        .upload-box label {
            display: block;
            margin-bottom: 8px;
            font-size: 20px;
            font-weight: 800;
        }

        .upload-box p {
            margin: 0 0 18px;
            color: var(--muted);
            line-height: 1.5;
        }

        input[type="file"] {
            width: min(100%, 420px);
            padding: 12px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
            color: var(--ink);
            font: inherit;
        }

        input[type="file"]::file-selector-button {
            margin-right: 12px;
            border: 0;
            border-radius: 6px;
            background: #eaf2ff;
            color: var(--blue-dark);
            cursor: pointer;
            font-weight: 800;
            padding: 9px 12px;
        }

        .form-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .hint {
            color: var(--muted);
            font-size: 13px;
        }

        .side-card {
            padding: 22px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 20px;
        }

        .side-card h2 {
            margin: 0 0 10px;
            font-size: 22px;
        }

        .side-card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.6;
        }

        .steps {
            display: grid;
            gap: 12px;
            margin-top: 20px;
        }

        .step {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            padding: 14px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #fbfdff;
        }

        .step-number {
            width: 28px;
            height: 28px;
            flex: 0 0 28px;
            display: grid;
            place-items: center;
            border-radius: 8px;
            background: #eaf2ff;
            color: var(--blue-dark);
            font-size: 13px;
            font-weight: 800;
        }

        .step strong {
            display: block;
            margin-bottom: 3px;
        }

        .step span {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.45;
        }

        .status-row {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin-top: 24px;
        }

        .status-card {
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #ffffff;
            padding: 16px;
        }

        .status-card span {
            display: block;
            color: var(--muted);
            font-size: 13px;
        }

        .status-card strong {
            display: block;
            margin-top: 6px;
            font-size: 18px;
        }

        @media (max-width: 880px) {
            .hero,
            .status-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .page {
                width: min(100% - 22px, 1040px);
                padding: 22px 0;
            }

            .topbar,
            .form-actions {
                align-items: flex-start;
                flex-direction: column;
            }

            .button-link,
            button {
                width: 100%;
            }

            .panel,
            .side-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <header class="topbar">
            <a class="brand" href="{{ url('/') }}" aria-label="Home">
                <span class="brand-mark">S3</span>
                <span>
                    <strong>Cloud File Upload</strong>
                    <span>Send files directly to Amazon S3</span>
                </span>
            </a>

            <a class="button-link" href="{{ url('/') }}">Back Home</a>
        </header>

        <section class="hero">
            <div class="panel">
                <span class="eyebrow">Secure Upload</span>
                <h1>Upload your file to S3.</h1>
                <p class="lead">
                    Choose a document from your device and Laravel will store it in the configured S3 bucket.
                </p>

                @if (session('success'))
                    <div class="alert success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert error">
                        <strong>Please fix these errors:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="upload-box">
                        <div class="upload-icon">+</div>
                        <label for="file">Select file</label>
                        <p>Pick the file you want to store in your S3 documents folder.</p>
                        <input id="file" type="file" name="file" required>
                    </div>

                    <div class="form-actions">
                        <span class="hint">The upload result will return the public S3 URL after completion.</span>
                        <button type="submit">Upload File</button>
                    </div>
                </form>

                <div class="status-row" aria-label="Upload details">
                    <div class="status-card">
                        <span>Storage</span>
                        <strong>S3 Disk</strong>
                    </div>
                    <div class="status-card">
                        <span>Folder</span>
                        <strong>documents</strong>
                    </div>
                    <div class="status-card">
                        <span>Method</span>
                        <strong>POST</strong>
                    </div>
                </div>
            </div>

            <aside class="side-card">
                <div>
                    <h2>Upload Flow</h2>
                    <p>The form keeps the existing Laravel route and controller behavior, with a cleaner interface around it.</p>

                    <div class="steps">
                        <div class="step">
                            <span class="step-number">1</span>
                            <span><strong>Choose file</strong>Select a local file from your device.</span>
                        </div>
                        <div class="step">
                            <span class="step-number">2</span>
                            <span><strong>Submit form</strong>Laravel validates the request before upload.</span>
                        </div>
                        <div class="step">
                            <span class="step-number">3</span>
                            <span><strong>Get URL</strong>S3 returns the uploaded file path as a URL.</span>
                        </div>
                    </div>
                </div>
            </aside>
        </section>
    </main>
</body>
</html>
