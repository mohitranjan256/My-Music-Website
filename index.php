<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music Website</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section>
            <div id="header">
                <img src="image/logo.jpg" alt="">
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Recent Played</a></li>
                        <li><a href="">PlayList</a></li>
                        <li><a href="">Liked Songs</a></li>
                        <li><a href="">Favourites</a></li>
                    </ul>
                </nav>
            </div>


<!-- 1 -->
            <div id="Musics1">

            <div id="headCenter">
                <img src="image/play.png" alt="No image" id="photo1" >
                <p >
                    Jannat Ve
                </p>
            </div>

            <audio id="music1">
                <source src="musics/Jannat Ve(PagalWorld.com.se).mp3" type="audio/mp3">  
            </audio>
            <div id="headCenter">
                <img src="image/play.png" alt="No image" id="photo2" >
                <p>
                    Mann Bharryaa
                </p>
            </div>

            <audio id="music2">
                <source src="musics/Mann Bharryaa 2.0 - Shershaah 128 Kbps.mp3" type="audio/mp3">  
            </audio>

            <div id="headCenter">
                <img src="image/play.png" alt="No image" id="photo3" >
                <p>
                    Yalgaar
                </p>
            </div>

            <audio id="music3">
                <source src="musics/Yalgaar - CarryMinati.mp3" type="audio/mp3">  
            </audio>

        </div>

 <!-- 2 -->
 <div id="Musics2">

    <div id="headCenter">
        <img src="image/play.png" alt="No image" id="photo4" >
        <p>
            Bewafa Tera Muskurana
        </p>
    </div>

    <audio id="music4">
        <source src="musics/Bewafa Tera Muskurana - Jubin Nautiyal.mp3" type="audio/mp3">  
    </audio>
    <div id="headCenter">
        <img src="image/play.png" alt="No image" id="photo5" >
        <p>
            Vardaan
        </p>
    </div>

    <audio id="music5">
        <source src="musics/Vardaan - CarryMinati.mp3" type="audio/mp3">  
    </audio>

    <div id="headCenter">
        <img src="image/play.png" alt="No image" id="photo6" >
        <p>
            Baarish Ki Jaaye
        </p>
    </div>

    <audio id="music6">
        <source src="musics/Baarish Ki Jaaye - B Praak.mp3" type="audio/mp3">  
    </audio>

</div>

<!-- 3 -->

<div id="Musics3">

    <div id="headCenter">
        <img src="image/play.png" alt="No image" id="photo7" >
        <p>
            Teri Aankhon Mein
        </p>
    </div>

    <audio id="music7">
        <source src="musics/Teri Aankhon Mein - Darshan Raval.mp3" type="audio/mp3">  
    </audio>

    <div id="headCenter">
        <img src="image/play.png" alt="No image" id="photo8" >
        <p>
            Qott Ghusian Da
        </p>
    </div>

    <audio id="music8">
        <source src="musics/15 Qott Ghusian Da (Imran Khan).mp3" type="audio/mp3">  
    </audio>

    <div id="headCenter">
        <img src="image/play.png" alt="No image" id="photo9" >
        <p>
            Amplifier
        </p>
    </div>

    <audio id="music9">
        <source src="musics/01 Amplifier (Imran Khan).mp3" type="audio/mp3">  
    </audio>

</div>



        </section>
        <!-- Start Scripting -->
        <script>
            var pic1 = document.getElementById("photo1");
            var music1 = document.getElementById("music1");

            var pic2 = document.getElementById("photo2");
            var music2 = document.getElementById("music2");

            var pic3 = document.getElementById("photo3");
            var music3 = document.getElementById("music3");


            var pic4 = document.getElementById("photo4");
            var music4 = document.getElementById("music4");

            var pic5 = document.getElementById("photo5");
            var music5 = document.getElementById("music5");

            var pic6 = document.getElementById("photo6");
            var music6 = document.getElementById("music6");

            var pic7 = document.getElementById("photo7");
            var music7 = document.getElementById("music7");

            var pic8 = document.getElementById("photo8");
            var music8 = document.getElementById("music8");

            var pic9 = document.getElementById("photo9");
            var music9 = document.getElementById("music9");



            pic1.onclick= function (){
                if(music1.paused)
                {
                    
                    music1.play();
                    pic1.src = "image/pause.png";
                }
                
                else
                {
                    music1.pause();
                    pic1.src = "image/play.png";
                }
            };
            pic2.onclick= function (){
                if(music2.paused)
                {
                    music2.play();
                    pic2.src = "image/pause.png";
                }
                
                else
                {
                    music2.pause();
                    pic2.src = "image/play.png";
                }
            };
            pic3.onclick= function (){
                if(music1.paused)
                {
                    music3.play();
                    pic3.src = "image/pause.png";
                }
                
                else
                {
                    music3.pause();
                    pic3.src = "image/play.png";
                }
            };

            pic4.onclick= function (){
                if(music4.paused)
                {
                    
                    music4.play();
                    pic4.src = "image/pause.png";
                }
                
                else
                {
                    music4.pause();
                    pic4.src = "image/play.png";
                }
            };
            pic5.onclick= function (){
                if(music5.paused)
                {
                    music5.play();
                    pic5.src = "image/pause.png";
                }
                
                else
                {
                    music5.pause();
                    pic5.src = "image/play.png";
                }
            };
            pic6.onclick= function (){
                if(music6.paused)
                {
                    music6.play();
                    pic6.src = "image/pause.png";
                }
                
                else
                {
                    music6.pause();
                    pic6.src = "image/play.png";
                }
            };
            pic7.onclick= function (){
                if(music7.paused)
                {
                    
                    music7.play();
                    pic7.src = "image/pause.png";
                }
                
                else
                {
                    music7.pause();
                    pic7.src = "image/play.png";
                }
            };
            pic8.onclick= function (){
                if(music8.paused)
                {
                    music8.play();
                    pic8.src = "image/pause.png";
                }
                
                else
                {
                    music8.pause();
                    pic8.src = "image/play.png";
                }
            };
            pic9.onclick= function (){
                if(music9.paused)
                {
                    music9.play();
                    pic9.src = "image/pause.png";
                }
                
                else
                {
                    music9.pause();
                    pic9.src = "image/play.png";
                }
            };
        </script>


    </body>
</html>
