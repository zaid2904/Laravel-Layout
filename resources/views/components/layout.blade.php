<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
        .footer p{
            position: absolute;
            bottom: 0;
            background-color: skyblue;
            width: 100%;
            margin: 0;
            padding: 10px;
            text-align: center;
        }
        li{
            display: inline
        }
        ul a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li> 
                <a href="">Home</a>
            </li>
            <li>
                <a href="">About</a>
            </li>
            <li>
                <a href="">Login</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ul>
        <div> {{ $main }} </div>
    <div class="footer">
        <p>Footer page</p>
    </div>
    </div>
</body>
</html>