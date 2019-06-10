<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student management Web app</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
  a.btnchart
{
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 200px;
	height: 60px;
	text-align: center;
	transform-style: preserve-3d;
	perspective: 1000px;
	transform-origin: center center;
  margin-top: 30px;
  margin-bottom: 30px;
}
 .btnchart span
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	display: block;
	text-align: center;
	line-height: 60px;
	font-size: 24px;
	background: rgba(255,255,255,.05);
	transform-style: preserve-3d;
	backface-visibility: hidden;
	border-radius: 30px;
	text-transform: uppercase;
	color: #fff;
	transition: 1s;
}
.btnchart span.front
{
	transform: rotateX(0deg) translateZ(20px);
}
a.btnchart:hover span.front
{
	transform: rotateX(-180deg) translateZ(20px);
}
.btnchart span.back
{
	transform: rotateX(180deg) translateZ(20px);
}
a.btnchart:hover span.back
{
	transform: rotateX(0deg) translateZ(20px);
}
.btnchart span.center
{
	background: linear-gradient(to left, #c31a5b, #7129bd);
}
.btnchart span.center:before
{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(to left, #ffdd1f, #c31a5b);
	border-radius: 30px;
	transform: translateZ(-1px);
}
a.btnchart:hover span.center
{
	transform: rotateX(-180deg);
}
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h1{
              text-align: center;
              padding-top: 300px;
              font-size: 50px;
            }
        </style>
    </head>
    <body>
      <h1>Student management Web app</h1>
      <a href="/crud" class="btnchart">
        <span class="front">Start</span>
      	<span class="center"></span>
      	<span class="back">Now</span>
  </a>
          </body>
</html>

<?php /* C:\xampp\htdocs\laravelapps\Laravel-5.8-Crud-Tutorial-master\resources\views/welcome.blade.php */ ?>