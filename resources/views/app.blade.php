<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="/favicon.ico?=v2" type="image/vnd.microsoft.icon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Binod Bhandary,FrontEnd, WEb Development, fullstack, developer,HTML, CSS, JavaScript">
        <meta name="author" content="Binod Bhandary">
        <meta name="description" content="Binod Bhandary is a full-stack developer specializing in building exceptional digital experiences. Currently, I’m focused on building responsive full-stack web applications."/>
        <title>BhandaryBinod</title>
        @viteReactRefresh
        {{-- @vite(['resources/css/app.css', 'resources/js/app.jsx']) --}}
        @vite('resources/js/app.jsx')
    </head>
    <body>
        <div id="app"></div>  
    </body>
</html>  