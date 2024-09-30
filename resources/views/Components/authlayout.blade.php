@props(['title'])
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body class="bg-background">
<div class="h-full">
{{--    @if(session('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            {{ session('success') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    @if(session('error'))--}}
{{--        <div class="alert alert-success">--}}
{{--            {{ session('error') }}--}}
{{--        </div>--}}
{{--    @endif--}}
    <div class="container bg-white h-1/2 rounded-b-3xl  relative">
        <div class="flex items-center justify-center">
            <img src="{{Vite::asset('resources/images/logov1.png')}}" alt="logo"/>
        </div>

        <div class="flex items-center justify-between">
            <a href="/login"
               class="text-lg font-semibold py-2 px-4 border border-x-0 border-t-0 border-b-text-error"> Login </a>
            <a href="/register"
               class="text-lg font-semibold py-2 px-4 border border-x-0 border-t-0 border-b-text-error ">
                Register </a>
        </div>
    </div>
    {{$slot}}
</div>
</body>
</html>
