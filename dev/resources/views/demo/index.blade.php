<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @viteReactRefresh
        @vite(['resources/sass/app.scss', 'resources/ts/index.tsx'])


    </head>
    <body>
    	<div id="react_app"></div><!-- Reactの埋め込み部分 -->
  		<button class='btn btn-success'>ABC</button>
  		
  		
  		<div class="mt-3"">
  			<p>コンテンツ表示切替テスト</p>
  		    <div id="toggle-button"></div> <!-- ボタンをこの要素に埋め込みます -->

   			 <div id="cat_contents" style="display:none;">
				秋の初めごろはバッタやコオロギなどの虫たちが活発に活動します。<br>
				キュウリの苗のほとんどは、それらの虫たちに食べつくされてしまいます。<br>
				しかし、雑草の側で育つキュウリは、虫の被害が半分で済みます。<br>
				#自然 #農業
   			 </div>
    
  		</div>
    </body>
</html>