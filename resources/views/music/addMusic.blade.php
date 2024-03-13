<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
  <style>
    body {
        overflow: scroll;
      }
      .box {
        width: 1085px;
      }
      
      .box .group {
        /*position: fixed;*/
        width: 1085px;
        top: 0;
        left: 0;
      }
      
      .box .overlap {
        position: relative;
      }
      
      .box .group-wrapper {
        position: absolute;
        width: 1085px;
        top: 0;
        left: 0;
        background-color: #000000;
      }
      
      .box .div {
        position: relative;
        width: 622px;
        height: 80px;
        left: 232px;
      }
      
      .box .overlap-group-wrapper {
        position: absolute;
        width: 127px;
        height: 30px;
        top: 10px;
        left: 495px;
      }
      
      .box .overlap-group {
        position: relative;
        width: 125px;
        height: 30px;
        background-color: #00844d;
        border-radius: 30px;
      }
      
      .box .input-song-number {
        position: absolute;
        width: 95px;
        height: 25px;
        top: 0;
        left: 12px;
        font-family: "Inter-BoldItalic", Helvetica;
        font-weight: 700;
        font-style: italic;
        color: #000000;
        font-size: 12px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
        border: none;
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
      
      .box .overlap-wrapper {
        position: absolute;
        width: 320px;
        height: 30px;
        top: 130px;
        left: 232px;
      }
      
      .box .div-wrapper {
        position: relative;
        width: 320px;
        height: 30px;
        background-color: #00844d;
        border-radius: 30px;
      }
      
      .box .text-wrapper {
        position: absolute;
        width: 320px;
        top: 0;
        left: 0;
        font-family: "Inter-BoldItalic", Helvetica;
        font-weight: 700;
        font-style: italic;
        color: #000000;
        font-size: 12px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
      }
    </style>
  </head>
  <body style="background-color: #000000; overflow: scroll;">
    <div class="box">
      <div class="group">
        <div class="overlap">
          <div class="group-wrapper">
            <div class="div">
              <form action="/addMusic" class="overlap-group-wrapper">
                <div class="overlap-group"><input class="input-song-number" type="number" style="background-color: #00844d; border-color: #00844d" name="songsNum"></div>
                <div class="overlap-group"><input class="input-song-number" type="submit" value="send"></div>  
              </form>
              <div class="i-g-o-r-e-f-y">
                I&nbsp;&nbsp;g&nbsp;&nbsp;o&nbsp;&nbsp;r&nbsp;&nbsp;e&nbsp;&nbsp;F&nbsp;&nbsp;y
              </div>
              <a href="/main"><img class="rectangle" src="images/result.png" /></a>
              <a href="">{{$res}}</a>
            </div>
          </div>
          <form action="/main" method="post" enctype="multipart/form-data">   
          @csrf 
            <div class="overlap-wrapper" style="width: 320px">
              <div class="div-wrapper" style="width: 320px; margin: 2px">--Cover--<input class="text-wrapper" name="albumCover" type="file" style="width: 320px; left: 20%; top: 20%"></div>
              <div class="div-wrapper" style="width: 320px; margin: 2px">--Name--<input class="text-wrapper" name="albumName" type="text" style="width: 220px; left: 20%; top: 20%"></div>
              <div class="div-wrapper" style="width: 320px; margin: 2px">--Artist--<input class="text-wrapper" name="albumArtist" type="text" style="width: 220px; left: 20%; top: 20%"></div>
              <div class="div-wrapper" style="width: 320px; margin: 2px">--Year--<input class="text-wrapper" name="albumYear" type="text" style="width: 220px; left: 20%; top: 20%"></div>
              @for ($i = 0; $i < $res; $i++)
                <div class="div-wrapper" style="width: 320px; margin: 2px">---{{$i+1}}---<input class="text-wrapper" type="file" style="width: 320px; left: 20%; top: 20%" name="song-{{$i}}"></div>
              @endfor
              <input type="hidden" name="amountOfSongs" value="{{$res}}">
              <div class="div-wrapper" style="width: 320px; margin: 2px"><input class="text-wrapper" type="submit" style="width: 250px; left: 10%; top: 20%"></div>
            </div>
          </form>   
        </div>
      </div>
    </div>
  </body>
</html>