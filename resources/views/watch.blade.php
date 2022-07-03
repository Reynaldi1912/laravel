@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch List</title>
    <script src="jquery-3.6.0.min.js"></script>

    <style>
   @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
header{
    background-color: #C84B31;
    position: relative;
    height: 70px;
    border-radius: 25px;
    padding: 8px;
}

.logo{
    width: 150px;
    height: 50px;
    position:relative;
    top: 10px;
    left: 20px;
}

.judul{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    position: absolute;
    top: -5px;
    left: 78%;
}

body{
}

form{
    padding: 8px;
    margin: 1%;
    border-radius: 10px;
    background-color: #ECDBBA;
}

.back[type="submit"]{
    width: 100px;
    height: width;
    background-color: #f73737;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    float: right;
    margin: 3%;
    border-radius: 10px;
}

.formTitle{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 30px;
    width: 50%;
    margin: 2%;
}

.formRating{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 30px;
    width: 20%;
    margin: 2%;
}

.addButton[type="submit"]{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width: 100px;
    height: width;
    background-color: #37f7e1;
    float: right;
    margin: 2%;
    border-radius: 10px;
}

.search{
    float: left;
    font-size: 30px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width: 20%;
    margin: 2%;
}

input{
    width: 10%;

}

.btn-delete{
    text-align: center;
    width: 40%;
    background-color: #ee3000;
    color: rgb(255, 255, 255);
    padding: 2%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

tr{
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select:none;
    user-select:none;
    -o-user-select:none;
            
}

th{
    background-color: #2D4263;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: white;
    cursor: pointer;
}

td{
    background-color: #ECDBBA;
    border: solid #2D4263 3px;
}

td, th {
    padding: 5px;
    border-radius: 100px;
}

.tabelMovie{
    padding: 50px;
}

.data-table{
    width: 100%;
}

.data-table tbody td, thead th{
    text-align: center;
}

button[type=submit]{
    width: 100%;
    background-color: #ddd;
    color: #000;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=text], input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    </style>
</head>

    <div class="watchlist">
        <div>
            <a href="home.html"><button type="submit" class="back">Back</button></a>
        </div>
        <form>
            <div class="formTitle">
                <label>Movie Title:</label>
                <input type="text" class="form" name="title" required="">
            </div>

            <div class="formRating">
                <label>Rating:</label>
                <input type="number" class="form" name="rating" required="">
            </div>

            <button type="submit" class="addButton">Add Movie</button>

            <div class="search">
                <input type="text" class="input" id="myInput" onkeyup="myFunction()" placeholder="Search">
            </div>
        </form>

        <br>

        <div class="tabelMovie">
        <table id="tabelData" class="data-table">
            <thead>
                <tr>
                    <th>Movie Title</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="../assets/javascript/movielist.js"></script>
</body>

@endsection