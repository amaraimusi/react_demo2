<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @viteReactRefresh
        @vite('resources/ts/index.tsx')


    </head>
    <body>
    	<div id="react_app"></div><!-- Reactの埋め込み部分 -->
  
    </body>
</html>
