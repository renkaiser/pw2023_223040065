<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c</title>
</head>
<style type="text/css">
    .kotak {
        display : flex;
        width : 100px;
        height : 100px;
        border : 1px solid #000;
        text-align : center;
        max-width : 100px;
    }

    .kolom1 {
        display : flex;
        align-items : center;
        flex-wrap : wrap;
        background-color : #F6F7C1;
        max-width : 100px;
    }

    .kolom2 {
        display : flex;
        align-items : center;
        flex-wrap : wrap;
        background-color : #BEF0CB;
        max-width : 205px;
    }

    .kolom3 {
        display : flex;
        align-items : center;
        flex-wrap : wrap;
        background-color : #C1AEFC;
        max-width : 307px;
    }

    .container .kotak {
        position : flex;
        justify-content : center;
        align-items : center;
        text-align : center;
        flex-wrap : wrap;
    }
</style>
<body>
    <div class ="container">
        <div class ="kolom1">
            <div class ="kotak"><h1>1</h1></div>
        </div>
        <div class ="kolom2">
            <div class ="kotak"><h1>2</h1></div>
            <div class ="kotak"><h1>2</h1></div>
        </div>
        <div class ="kolom3">
            <div class ="kotak"><h1>3</h1></div>
            <div class ="kotak"><h1>3</h1></div>
            <div class ="kotak"><h1>3</h1></div>
        </div>
    </div>
</body>
</html>

