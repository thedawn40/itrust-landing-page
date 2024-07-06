<html>
    <head>
        <style>
            
        #slider-container {
            position: absolute;
            height: 150px;
            width: 100%;
            max-width: 1000px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            overflow: hidden;
            box-shadow: 0 0 15px #888;
          }
          
          #slider-scroller {
            position: absolute;
            top: 0;
            left: 0;
            width: calc(260px * 6);
            transition: all 1s ease;
          }
          
          .slider-item {
            width: 220px;
            height: 110px;
            display: inline-block;
            margin: 20px;
            position: relative;
          }
          
          .slider-item img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 200px;
            max-height: 100px;
          }
        </style>
    </head>
    <body>
        <div id="slider-container">
            <div id="slider-scroller">
              <div class="slider-item"><img src="https://via.placeholder.com/250x150/0000ff/fff?text=Image+1" /></div>
              <div class="slider-item"><img src="https://via.placeholder.com/200x100/ff0000/fff?text=Image+2" /></div>
              <div class="slider-item"><img src="https://via.placeholder.com/200x150/acff7f/000?text=Image+3" /></div>
              <div class="slider-item"><img src="https://via.placeholder.com/300x150/fff000/000?text=Image+4+is+long" /></div>
              <div class="slider-item"><img src="https://via.placeholder.com/350x250/6a0dad/000?text=Image+5+is+big" /></div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script>
                function slideSlider(){
        $("#slider-scroller").css({"left":"0%","transition":"all 0s linear"});
        $("#slider-scroller").css({"left": String(parseInt($("#slider-scroller").css("left")) - 500) + "px","transition":"all 5s linear"});
        setTimeout(function(){moveSliderItem()}, 2635);
        }
        
        function moveSliderItem(){
        $("#slider-scroller div").first().detach().appendTo($("#slider-scroller"));
        slideSlider();
        }
        
        slideSlider();
            </script>
        
    </body>

</html>