<html>
    <head>
        <title>BLounge</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <style>
            #file-input{
            display:none;
            
            }
            #upload{
                margin-top:20px;
                cursor: pointer;
            }
            #upload-btn{
                margin-top:20px;
                cursor: pointer;
            }
        </style>
        <header class="head">       
            <p>BLOUNGE</p>
            <div class="header_nav">
                <nav>
                    <a href="#">HOME &nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="/reg">SIGN UP &nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="/login">SIGN IN</a>
                </nav>
            </div>
        </header>
        <div id="mainscreen">
            
            <div class="child" id="slider" style="width:60%;">
            <br><br>
            <p style="font-size: 26px;">WHAT WILL YOU DISCOVER</p>
                <div class="images">
                    <input type="radio" name="slide" id="img1" checked>
                    <input type="radio" name="slide" id="img2">
                    <input type="radio" name="slide" id="img3">

                    <img src="images/1.png" class="m1" alt="img1">
                    <img src="images/2.png" class="m2" alt="img2">
                    <img src="images/3.png" class="m3" alt="img3">
                </div>
                <div class="dots">
                    <label for="img1"></label>
                    <label for="img2"></label>
                    <label for="img3"></label>
                </div>
            </div>
            <div class="child" id="about" style="margin-left:70px;margin-top:50px;">
                <p style="font-size: 26px;font-weigth:bolder;color:darkgreen;"> SCAN YOUR BOOK COVER</p>
                <center>
                <form action="scan" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    @if(Session::has('noscan'))
                    <div class="alert alert-danger" role="alert">{{Session::get('noscan')}}</div>
                    @endif
                    <label for="file-input">
                    <span id="errcp"></span><br><img src="images/scan3.jpg" width="200px" heigth="200px" style="margin-top:50px;"  name="upload-icon" id="upload">
                    <input type="file" id="file-input" name="postimage" onchange="fileValidation()">
                    </label><br><br>
                    <button type="submit" class="btn btn-success" id="upload-btn">UPLOAD</button>
                </form>
                </center>
                <!-- <p>BLounge is place where all book lovers can come together, network and meet each other. Here you can share your ideas and thoughts about the books that you have read or any storylines you have in mind. </p>
                <p>BLounge also provides variety of options to buy books on your TBR.You can sell your books on BLounge to your friends and even buy from them on negotiable rate. </p>  -->
              
            </div>
        </div>
    </body>
</html>