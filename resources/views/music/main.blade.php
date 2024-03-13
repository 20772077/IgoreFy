<!DOCTYPE html>
<html style="background-color: #000000;">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <div class="box">
        <div class="group-5">
                <div class="overlap-group-wrapper">
                    <a href="/addMusic"><div class="overlap-group"><div class="text-wrapper-2">Добавить альбом</div></div></a>
                </div>
                <div class="i-g-o-r-e-f-y">
                    I&nbsp;&nbsp;g&nbsp;&nbsp;o&nbsp;&nbsp;r&nbsp;&nbsp;e&nbsp;&nbsp;F&nbsp;&nbsp;y
                </div>
                <a href="/main"><img class="img" src="images/result.png" /></a>
        </div>
    </div>
    <div class="box">

            @while($index < count($albums))
              <div class="div">
                <div class="group-3">
                  <a href="/album?album={{$albums[$index]->album_id}}">
                  <img class="rectangle" src="{{asset($albums[$index]->src)}}" alt="AAA"/></a>
                  <div class="avoiding-reality-by">{{$albums[$index]->album_title}}<br />
                  by {{$albums[$index]->artist}}<br />{{$albums[$index]->year_of_release}}</div>
                </div>
              </div>
              {{$index = $index+1}}
            @endwhile

            <div class="div-wrapper"><p class="text-wrapper">IgoreFy inc. All rights reserved</p></div>
        
    </div>
  </body>
</html>
