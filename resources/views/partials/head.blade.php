<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AusExile</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="/js/style.css" rel="stylesheet">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
