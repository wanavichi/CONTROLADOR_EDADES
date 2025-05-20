<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación de Edad</title>
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 2rem 3rem;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.25);
            text-align: center;
            width: 300px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        input[type="number"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            background-color: #ffffff;
            color: #2575fc;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e0e0e0;
        }

        .error {
            background-color: #ff4d4d;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verifica tu edad</h1>

        @if(session('error'))
            <div class="error">
                {{ session('error') }}
            </div>
        @endif

        <form action="/edad" method="POST">
            @csrf
            <input type="number" name="edad" placeholder="Tu edad" required min="0" max="120">
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
