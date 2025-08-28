<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titulo ?? "" }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("assets/img/icon.svg") }}">

    <!-- Css files -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Element Plus -->
    <link href="https://cdn.jsdelivr.net/npm/element-plus@2.8.3/dist/index.min.css" rel="stylesheet">
    <!-- SweetAlert-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css">

</head>
<body>