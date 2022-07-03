@extends('layouts.app')
@section('content')

<h1>CALCULATOR APP</h1>
            <table class = "calculator" >
                <tr>
                    <td colspan = "3" class="result">
                        <input class = "display-box" type = "text" id = "result" disabled />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class = "button" type = "button" value = "%" onclick = "display('%')"/>
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "^2" onclick = "result.value = result.value*result.value"/>
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "/" onclick = "display('/')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "C/CE" onclick = "clearScreen()" style = "background-color: #2D4263; color:#dcdbe1"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class = "button" type = "button" value = "1" onclick = "display('1')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "2" onclick = "display('2')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "3" onclick = "display('3')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "X" onclick = "display('*')" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class = "button" type = "button" value = "4" onclick = "display('4')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "5" onclick = "display('5')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "6" onclick = "display('6')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "-" onclick = "display('-')" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class = "button" type = "button" value = "7" onclick = "display('7')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "8" onclick = "display('8')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "9" onclick = "display('9')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "+" onclick = "display('+')" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class = "back" type="button" value = "<-" onclick="back()" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "0" onclick = "display('0')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "." onclick = "display('.')" />
                    </td>
                    <td>
                        <input class = "button" type = "button" value = "=" onclick = "calculate()" style = "background-color: #2D4263; color:#dcdbe1" />
                    </td>
                </tr>
            </table>
            <script type="text/javascript" src="/assets/javascript/calculator.js"></script>
<style>
    
@import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
body{
    background-color: #C84B31;
}

.calculator {
    padding: 10px;
    border-radius: 1em;
    height: 480px;
    width: 400px;
    margin: auto;
    margin-top: 100px;
    background-color: #191919;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}
.display-box {
    font-family: 'Orbitron', sans-serif;
    background-color: #dcdbe1;
    border: solid black 0.5px;
    color: #191919;
    border-radius: 5px;
    width: 90%;
    height: 100%;
    text-align: center;
}

.result{
    align-items: center;
    justify-content: center;
    text-align: center;
}

.button {
    font-family: 'Orbitron', sans-serif;
    background-color: #ECDBBA;
    color: #191919;
    border: solid black 0.5px;
    width: 100%;
    border-radius: 5px;
    height: 70%;
    outline: none;
}

.button:active {
    background: #e5e5e5;
    -webkit-box-shadow: inset 0px 0px 5px #c1c1c1;
    -moz-box-shadow: inset 0px 0px 5px #c1c1c1;
    box-shadow: inset 0px 0px 5px #c1c1c1;
}

.back{
    font-family: 'Orbitron', sans-serif;
    background-color: #ff0000;
    color: white;
    border: solid black 0.5px;
    width: 100%;
    border-radius: 5px;
    height: 70%;
    outline: none;
}

.back:active{
    background: #e5e5e5;
    -webkit-box-shadow: inset 0px 0px 5px #c1c1c1;
    -moz-box-shadow: inset 0px 0px 5px #c1c1c1;
    box-shadow: inset 0px 0px 5px #c1c1c1;
}

h1{
    font-family: 'Orbitron', sans-serif;
    text-align: center;
    margin-bottom: 1.5%;
    color: rgb(255, 255, 255);
}
</style>

@endsection