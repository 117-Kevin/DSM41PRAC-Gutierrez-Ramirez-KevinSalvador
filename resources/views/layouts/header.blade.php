<!DOCTYPE html>
@yield('header')
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Practicas</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://kit.fontawesome.com/3aafa2d207.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <style>
        .tarjeta{
            width: 300px;
            min-height: 350px;
            background-color:#e7e7ea;
            margin:0 auto; 
            margin-top: 10px;
            border-radius: 10px;
            box-shadow: 6px 6px 20px rgba(0, 0, 0 ,0.24);
            background: linear-gradient(-180deg, #BCC5CE 0%, #929EAD 98%), radial-gradient(at top left, rgba(255,255,255,0.30) 0%, rgba(0,0,0,0.30) 100%);
            background-blend-mode: screen;
            background-size: 100% 150px;
            background-repeat: no-repeat;
            text-align: center;
            padding: .1px;
        }
        .back{
            background-color: #929EAD;
            width: 20px;
            height: 20px;
        }
        .card__person{
            background-image: url('/scr/profile.svg');
            background-size: cover;
            background-position: center;
            width: 110px;
            height: 110px;
            margin: 0 auto;
            margin-top: 105px;
            border-radius: 50%;
            border:7px solid #fff;
        }
        .card__name{
            margin-top: 20px;
            margin-bottom: 10px;
        }
        
    </style>

</head>
<body id="page-top">
 