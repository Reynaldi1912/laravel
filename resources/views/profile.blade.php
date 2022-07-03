<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styleprofile.css">
            <title>Data Pribadi</title>
    </head>

    <body>
        <header>
            <a href="http://www.umm.ac.id/"><img src="{{asset('asset/LogoUmm.png')}}" class="logo" alt="logo"></a>
            <h1 class="judul">V Book Store's admin</h1>
            <nav>
                <div class="navbar">
                    <a href="{{url('home')}}">Home</a>
                  </div>
            </nav>
        </header>

        <section>
            <div class="tengah"> 
                <h2>ADMIN</h2>
                <img class="gambarTengah" src="{{asset('asset/aku.jpeg')}}">
                <h3>Vallent Austin Theasar K</h3>
                <h3>Lahir di Malang</h3>
                <h3>Pada Tanggal 25 Agustus 2002</h3>
            </div>

        <footer>
            <h4 style="color: white">About Me</h4>
            <h4 style="color: white">Vallent Austin Theasar K</h4>
            <h4 style="color: white">Pekanbaru</h4>
        </footer>
    </body>
</html>

<style>
  header{
    background-color: #C84B31;
    position: relative;
    height: 70px;
    border-radius: 25px;
}

.logo{
    width: 150px;
    height: 50px;
    position:relative;
    top: 10px;
    left: 10px;
}

.judul{
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: absolute;
    top: -5px;
    left: 76%;
}

nav{
    height: 20px;
    position:relative;
    top: 23px;
  }
  
.navbar {
  overflow: hidden;
  background-color: #2D4263;
  top: 23px;
  text-align: center;
  font-family:Arial, Helvetica, sans-serif;
  border-radius: 25px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover{
  background-color: red;
}

.tengah{
    width: 100%;
    height: 600px;
    background-color: #191919;
    color: #ddd;
    position:relative;
    vertical-align: center;
    left: 0%;
    top: 40px;
    border-radius: 25px;
    text-align: center;
}

.gambarTengah{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 15%;
    height: width;
}

footer{
    background-color: #C84B31;
    position: relative;
    top: 30px;
    text-align:Center;
    text-size-adjust:inherit;
    line-height: 12px;
    line-break: loose;
    word-spacing: 5px;
    border-radius: 25px;
}
</style>