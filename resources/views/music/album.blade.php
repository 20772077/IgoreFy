<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="{{asset("style.css")}}" />
    <style>
        body{
            background-color: #000000;
            overflow: scroll;
        }
        .box {
        width: 1085px;
        }
        p{
        font-family: "Inter-BoldItalic", Helvetica;
        font-weight: 700;
        font-style: italic;
        color: #00844d;            
        }
        .box .group {
        /*position: fixed;*/
        width: 1085px;
        height: 398px;
        top: 0;
        left: 0;
        }

        .box .overlap {
        position: relative;
        height: 398px;
        }

        .box .group-wrapper {
        position: absolute;
        width: 1085px;
        height: 398px;
        top: 0;
        left: 0;
        background-color: #000000;
        }

        .box .div {
        position: relative;
        width: 497px;
        height: 80px;
        left: 232px;
        }

        .box .i-g-o-r-e-f-y {
        position: absolute;
        width: 415px;
        top: 10px;
        left: 80px;
        font-family: "Inter-BoldItalic", Helvetica;
        font-weight: 700;
        font-style: italic;
        color: #00844d;
        font-size: 24px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
        }

        .box .rectangle {
        position: absolute;
        width: 80px;
        height: 80px;
        top: 0;
        left: 0;
        object-fit: cover;
        }

        .box .overlap-group-wrapper {
        position: absolute;
        width: 450px;
        height: 30px;
        top: 130px;
        left: 232px;
        }

        .box .overlap-group {
        position: relative;
        width: 450px;
        height: 30px;
        background-color: #00844d;
        border-radius: 30px;
        }
    </style>
  </head>
  <body>
    <div class="box">
      <div class="group">
        <div class="overlap">
          <div class="group-wrapper">
            <div class="div">
              <div class="i-g-o-r-e-f-y">
                I&nbsp;&nbsp;g&nbsp;&nbsp;o&nbsp;&nbsp;r&nbsp;&nbsp;e&nbsp;&nbsp;F&nbsp;&nbsp;y
              </div>
              <a href="/main"><img class="rectangle" src="images/result.png" /></a>
            </div>
          </div>
          <div class="overlap-group-wrapper">
          @while($index < count($album))  
          <p>{{$album[$index]->title}} - {{$album[$index]->artist}}</p>
                <audio class="text-wrapper" controls>
                    <source src="{{asset($album[$index]->src)}}" type="audio/mpeg">
                </audio>
                
                {{$index = $index+1}}
            @endwhile
          </div>
        </div>
      </div>
    </div>
  </body>
</html>