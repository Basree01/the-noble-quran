<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css " rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <!--quran section-->
    <section class="quran">
        <div id="main">
            <div id="content  ">
                <div style="text-align: center">
                    <img src="https://www.al-quran.cc/images/system/al-quran.png" width="200" />
                </div>
                <h1 class="content-title" style="text-align: center;">Surah / Chapter</h1>
            </div>
        </div>
    
        <div class="container">
            <div class="surahasContainer">
                <!-- Where Ayat are viewed-->
            </div>
            
        </div>
    </section>
    <!--End of Quran sectionn -->
    <!-- Pop UP-->
    <div class="surah-popup">
        <div class="close-popup">
            <i class="fas fa-times">X</i>
        </div>
        <div class="ayat">
            <p>بسم الله الرحمن الرحيم</p>
            <!-- Where Ayat is viewed-->
        </div>
    </div>
    <!-- Js File-->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>