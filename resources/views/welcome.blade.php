<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">

    <style>
        html,
        body {
            height: 100vh;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <title>Laravel</title>

</head>

<body>
    <div id="app">
        <p>Hello, there, <span data-tooltip="I am a tooltip">hover over me</span></p>
        <div id="tooltip" role="tooltip"> I'm a tooltip </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>