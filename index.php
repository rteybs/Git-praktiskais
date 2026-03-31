<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-image: url(fons.png) ;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 60px;
            background-size: cover;

            background-position: center;
            height: 100vh;


        }
        h1{
            color:rgb(49, 74, 85);
            font-size: 40px;
            padding: 10px;
        }
        input{
            display: block;
            margin: 10px;
            padding: 10px 15px;
            border-radius: 10px;
            width: 280px;
            font-size: 20px;

        }
        button{
            padding: 10px;
            background-color:rgb(49, 74, 85);
            color: white;
            font-weight: bold;
            width: 300px;
            margin-top: 15px;
            border-radius: 14px;
            cursor: pointer;
            margin-left: 15px;
            font-size: 15px;
        }
        .form-box{
            background: rgb(240, 240, 240);
            height:400px;
            width: 700px;
            border-radius: 30px;
        }
        img{
            height: 300px;
            width: 420px;
            position: absolute;
            top: 120px;
            right: 280px;
        }
    </style>
<div class="form-box">
    <h1>Reģistrācijas Forma</h1>
    <input placeholder="Username" id="UserNameField" type="text">
    <input placeholder="Password" id="PassWordField" type="password">
    <input placeholder="Email" id="EmailField" type="email">
    <button onclick="submit()" id="SubmitButton" type="submit">Submit</button>
<img src="logo.png">
</div>


    <script>
        function submit(){
            alert("Reģistrēšanās veiksmīga!");
        }
    </script>
</body>
</html>