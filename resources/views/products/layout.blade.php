<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Products')</title>
    <style>
        body {
            margin: 0;
            background: #f5f7fb;
            color: #172033;
            font-family: Arial, Helvetica, sans-serif;
        }

        .page {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .header,
        .panel {
            background: #ffffff;
            border: 1px solid #dfe5ef;
            border-radius: 8px;
            box-shadow: 0 8px 24px rgba(24, 40, 72, 0.06);
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 20px;
            padding: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .panel {
            padding: 20px;
        }

        .button,
        button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 38px;
            padding: 0 14px;
            border: 0;
            border-radius: 6px;
            background: #2563eb;
            color: #ffffff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
        }

        .button.secondary {
            background: #64748b;
        }

        .button.danger,
        button.danger {
            background: #dc2626;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #e5eaf2;
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #f8fafc;
            color: #475569;
            font-size: 13px;
            text-transform: uppercase;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 700;
        }

        input,
        textarea {
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 14px;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font: inherit;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .alert {
            margin-bottom: 16px;
            padding: 12px 14px;
            border-radius: 6px;
            background: #dcfce7;
            color: #166534;
            font-weight: 700;
        }

        .errors {
            margin-bottom: 16px;
            padding: 12px 14px;
            border-radius: 6px;
            background: #fee2e2;
            color: #991b1b;
        }

        .muted {
            color: #64748b;
        }

        .pagination {
            margin-top: 16px;
        }

        @media (max-width: 720px) {
            .header {
                align-items: flex-start;
                flex-direction: column;
            }

            table,
            thead,
            tbody,
            tr,
            th,
            td {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                border-bottom: 1px solid #e5eaf2;
                padding: 10px 0;
            }

            td {
                border: 0;
                padding: 8px 0;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="header">
            <h1>@yield('heading', 'Products')</h1>
            @yield('header_action')
        </section>

        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="errors">
                <strong>Please fix these errors:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="panel">
            @yield('content')
        </section>
    </main>
</body>
</html>
