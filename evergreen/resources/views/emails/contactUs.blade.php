<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Evergreen 50</title>
    <style>
        html,body{
            height: 100%;
            margin: 0;
        }
        body{
            font-size: 1em;
            text-align: center;
        }
        header{
            background: #f7f7f7;
            text-align: center;
            padding: 20px;
        }
        .content{
            min-height: 100%;
            width: 85%;
            margin: 20px auto 0 auto;
        }
        .intro{
            margin-top: 20px;
        }
        span{
            color: #f55cb6;
            font-size: 1.15em;
            font-weight: 900;
        }
        h4{
            text-transform: uppercase;
        }
        a{
            text-decoration: none;
        }
        .linkButton{
            background: #EC0000;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer
        }
        .linkButton:hover{
            background: #484848;
        }
        footer{
            margin-top: 40px;
            background: #f7f7f7;
            padding: 20px;
            text-align: center;
            color: #484848;
        }
    </style>
</head>
<body>
<header>
    <a href="{{url('/')}}">
        <img src="{{url('/evergreen/images/logo.jpg')}}" style="height:100px; width:300px" alt="Ever Green"/>
    </a>
</header>
<div class="content">
    <b class="intro">You have an enquiry from {{ $Name }} :</b><br/><br/>

    <h3>Subject: </h3>
    <p>
        {{$Subject}}
    </p>
    <br>
    <h3>Message:</h3>
    <p>
        {{$Message}}
    </p>


</div>
<footer>
    Ever Green 50 &copy; {{ date("Y") }}
</footer>
</body>
</html>
