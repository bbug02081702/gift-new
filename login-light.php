
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         @import url('https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700,800,900&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #ebf5fc;
        }
        .form{
            position: relative;
            width: 350px;
            padding: 40px 40px 60px;
            background: #ebf5fc;
            border-radius: 10px;
            text-align: center;
            box-shadow: -5px -5px 15px rgba(255, 255, 255, 0.8),
            5px 5px 10px rgba(0, 0, 0, 0.1);
        }
        .form h2{
            color: #32a3b1;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 4px;
        }
        .form .input{
            text-align: left;
            margin-top: 40px;
        }
        .form .input .inputBox{
            margin-top: 20px;
        }
        .form .input .inputBox label{
            display: block;
            color: #868686;
            margin-bottom: 5px;
            font-size: 18px;
        }
        .form .input .inputBox input{
            width: 100%;
            height: 50px;
            background: #ebf5fc;
            border: none;
            outline: none;
            border-radius: 40px;
            padding: 5px 15px;
            color: #fff;
            font-size: 18px;
            color: #32a3b1;
            box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 1),
            inset 2px 2px 6px rgba(0, 0, 0, 0.1);
        }
        .form .input .inputBox input[type="submit"]{
            margin-top: 20px;
            box-shadow: -2px -2px 6px rgba(255, 255, 255, 1),
            2px 2px 6px rgba(0, 0, 0, 0.1);
        }
        .form .input .inputBox input[type="submit"]:active{
            color: #006c9c;
            margin-top: 20px;
            box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 1),
            inset 2px 2px 6px rgba(0, 0, 0, 0.1);
        }
        .form .input .inputBox input::placeholder{
            color: #dbcada;
            font-size: 18px;
        }
        .forget{
            margin-top: 30px;
            color: #555;
        }
        .forget a{
            text-decoration: none;
            color: #ff0047;
        }

    </style>
</head>
<body>
    <div class="form" action="/xuly.php" method="POST">
        <h2>Th??ng tin</h2>
        <div class="input">
            <div class="inputBox">
                <label for="fullname">H??? v?? t??n</label>
                <input type="text" name="fullname" placeholder="Nh???p h??? v?? t??n">
            </div>
            <div class="inputBox">
                <label for="date">Ng??y sinh</label>
                <input type="date" name="date" placeholder="Nh???p ng??y sinh">
            </div>
            <div class="inputBox">
                <label for="year">Sinh vi??n n??m</label>
                <input type="number" name="year" placeholder="Sinh vi??n n??m m???y?">
            </div>
            <div class="inputBox">
                <label for="majors">Ng??nh h???c</label>
                <input type="text" name="majors" placeholder="Nh???p ng??nh h???c">
            </div>
            <div class="inputBox">
                <label for="phone">S??? ??i???n tho???i</label>
                <input type="text" name="phone" placeholder="Nh???p s??? ??i???n tho???i">
            </div>
            <div class="inputBox">
                <input type="submit" name="ok" value="?????ng ??" id="okrainy" onclick="rainy0709()">
            </div>
        </div>
        <p class="forget">Kh??ng ?????ng ??? <a href="#" id="why" onclick="whyNotRainy0709()">L?? do</a></p>
    </div>

    <!-- <script>
        function rainy0709(){
            document.getElementById('okrainy').innerHTML = confirm("C???m ??n b???n ???? ?????ng ?? nh??!!!");
        }
        function whyNotRainy0709(){
            document.getElementById('why').innerHTML = alert("H??y cho t??i bi???t l?? b???n kh??ng ?????ng ?? nh?????");
        }
    </script> -->
</body>
</html>