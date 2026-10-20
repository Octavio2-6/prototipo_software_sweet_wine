<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio</title>

    @vite(['../resources/css/app.css'], ['../resources/js/app.js'])

</head>

<body class="text-white" style="background-color: #4b042d">

    <div class="container-conteudo">

        @yield('categorias')

        <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

    </div>
    
</body>
</html>