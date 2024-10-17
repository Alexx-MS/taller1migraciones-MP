<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcular Fomula Cuadratica</title>
    <Style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            border-bottom: 1px solid #66afe9;
            width: 450px;
        }
        h2 {
            border-bottom:  1px solid #66afe9;
            width: 100px; 
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #66afe9; 
            outline: none; 
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c; 
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #4cae4c; 
        }

        button:active {
            background-color: #398439; 
        }
        .imagen-ecu {
            border: 4px solid black; 
            border-radius: 10px;
        }
        p {
            background-color: lightgray;
            border: 2px solid black;
            border-radius: 10px;
            padding: 5px; 
        }
        </style>
    </Style>
</head>
<body>
    <h1>Resolver la Formula Cuadratica</h1>
    <p>La fórmula cuadrática nos ayuda a resolver cualquier ecuación cuadrática. Primero ponemos la ecuación en la forma ax²+bx+c=0, donde a, b y c son coeficientes. Luego sustituimos estos coeficientes en la fórmula: (-b±√(b²-4ac))/(2a) .</p>
    <h2>Formula:</h2>
    <img src="https://assets.serlo.org/61a7aa5178e67_220d627ee6c1989e56b15e7d012a3026c0a92d61.jpg" class="imagen-ecu" alt="imagen-ecuacion">
    <form action="{{ url('/quadratic') }}" method="POST">
        @csrf
        <label for="">a:</label>
        <input type="text" name="a" required>
        <br> <br>
        <label for="b">b:</label>
        <input type="text" name="b" required>
        <br> <br>
        <label for="c">c:</label>
        <input type="text" name="c" required>
        <br> <br>
        <button type="submit">Calcular</button>
    </form> 
</body>     