<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Playlist Musik - Buatan Haiqal</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f6fc;
            margin: 0;
            padding: 40px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .playlist {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .artist {
            font-weight: bold;
            font-size: 1.2em;
            color: #2980b9;
        }

        .musik {
            font-style: italic;
            color: #7f8c8d;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 0.9em;
            color: #aaa;
        }
    </style>
</head>
<body>

    <h1>🎵 Playlist Musik Haiqal</h1>

    <div class="playlist">
        @foreach ($blogs as $blog)
            <div class="card">
                <div class="artist">{{ $blog->Artist }}</div>
                <div class="musik">Lagu: {{ $blog->Musik }}</div>
            </div>
        @endforeach
    </div>

    <footer>
        Buatan Haiqal &copy; {{ date('Y') }}
    </footer>

</body>
</html>
