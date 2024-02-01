<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GDCR || Govt. DIGVIJAY COLLAGE RAJ</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
     <link rel="stylesheet" href="css/style1.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/sweetalert.js"></script>
</head>
<style type="text/css">
    .header-section
    {
        margin-top: -15px;

    }
@media only screen and (min-width: 1200px) and (max-width: 1920px) {
   
    .nav-item .nav-menu li a {
        padding: 16px 35px 15px;
    }
}
 .date {
    font-size: 20px;
    font-weight: 500;
    font-family: Times New Roman;
    color:black;
  }
    &#printDate {
      color: #e74c3c;
    }
    &#printDay {
      margin: 0 20px;
      color: #2ecc71;
    }
    &#printTime {
      color: #9b59b6;
    }
    .con{
      
        display: flex;
  justify-content: center;
  align-items: center;
  font-family: Times New Roman;

    }

</style>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section" style="background-color: #f4ff9559;">
        
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                           <h2><img src="img/logomain.png" style="height: 100px;width: 400px;"></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                     
                        <div style="text-align: center; color: green;"><h3 style="font-family: TIMES; color: black;text-shadow: #fbff0085 1px 1px ; "><b>STUDENT MANAGEMENT SYSTEM</b></h3><hr>
                                <marquee>Welcome to online STUDENT MANAGEMENT system.</marquee>
                                <div class="con">
                                    <div class="date" id="output"></div>--
                                    <div class="date" id="printDate"></div>
                                   <div class="date" id="printDay"></div>--
                                   <div class="date" id="printTime"></div>
                               </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                           
                            <li class="cart-price"><img src="img/logo2.jpg" style="height: 100px;width: 100px;"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<script type="text/javascript">
  var date = new Date();
const elementDate = document.getElementById("printDate");
const elementDay = document.getElementById("printDay");
const elementTime = document.getElementById("printTime");
const listOfDays = [ 
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday"
];

function printDate() {
  date = new Date();
  var day = date.getDate();
  var month = date.getMonth();
  var year = date.getFullYear();

 
}

function printDay() {
  date = new Date();
  var numberOfDay = date.getDay();
  var day = listOfDays[numberOfDay];
  elementDay.innerHTML = day;
}

function printTime() {
  date = new Date();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  if (minutes < 10) {
    minutes = "0" + minutes;
  }
  if (hours > 12) {
    hours = hours - 12;
    elementTime.innerHTML = hours + " : " + minutes + " : " + seconds + "  PM ";
  } else if (hours < 12) {
    elementTime.innerHTML = hours + " : " + minutes + " : " + seconds + "  AM ";
  } else if (hours = 12) {
    elementTime.innerHTML = hours + " : " + minutes + " : " + seconds + "  PM ";
  }
}

setInterval(function() {
  printTime();
  printDate();
  printDay();
}, 1000);
           

            var today = new Date();

var day = today.getDate();
var month = today.getMonth() + 1;
var year = today.getFullYear();

if (day < 10) {
  day = '0' + day
}
if (month < 10) {
  month = '0' + month
}

var out = document.getElementById("output");

out.innerHTML = day + "/" + month + "/" + year;

</script>
  

