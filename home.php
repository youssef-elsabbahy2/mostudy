<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:home.php');
}

?>
<html>

<head>

    <title></title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
		<title>Home Page</title>
		<link href="home.css" rel="stylesheet" type="text/css">
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>		</head>
   
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


 <style>





    body
{
    margin: 0;
    padding: 0;
    background:whitesmoke;
    
}
.head
{
    background-color:    #17253e;
    width: 100%;
    height: 100px;
    display: inline-block;
}
h1
{
    color: white;
    font-family: sans-serif;
    font-size: 20px;
    margin-top: 65px;
    margin-left: 1200px;
    

}
.img-head
{
    position: absolute;
    width: 50px;
    margin-left: 1215px;
   margin-top: -92px;
}
h2
{
    position: absolute;
    font-family: sans-serif;
    color: whitesmoke;
    margin-top: -75px;
    border: 3px solid  rgb(166, 89, 255);
    padding: 10px;
    padding-right: 28px;
    background-color:  rgb(166, 89, 255);
    border-radius: 10px;
    margin-left: 10px;
    
}
.main
{
   
    width: 100%;
    height: 83.5%;
position: absolute;
}

.h2
{
    position: absolute;
    font-family: sans-serif;
    color: whitesmoke;
    font-size:19px;
    border: 3px solid orange;
    padding: 22px;
    padding-right: 28px;
    background-color:  orange;
    box-shadow: #17253e;
   
   
    
}
.div1:hover
{
    border: 5px solid #17253e;
    opacity: .8;
}
.div2:hover
{
    border: 5px solid #17253e;
    opacity: .8;
}
.div3:hover
{
    border: 5px solid #17253e;
    opacity: .8;
}

.div4:hover
{
    border: 5px solid #17253e;
    opacity: .8;
}
.div5:hover
{
    border: 5px solid #17253e;
    opacity: .8;
}
.div6:hover
{
    border: 5px solid #17253e;
    opacity: .8;
}
.div7:hover
{
    border: 5px solid #17253e;
    opacity: .8;
}
.div8:hover
{
    border: 5px solid #17253e;
    opacity: .8;
}

.div1
{
    width: 330px;
    height: 48%;
    margin-left: 120px;
    margin-top: 85px;
    background-color:#102c58;
    position: absolute;
    border-radius: 10px;
}
.img-d1
{
    width: 110px;
    margin-left: 107px;
    margin-top: 20px;
    position: absolute;
    display: block;
}


h3
{

    font-size: 30px;
    margin-top: 185px;
    color: white;
    text-decoration: none;
    margin-left: 84px;
    position: absolute;

}

.div2
{
    width: 230px;
    height: 48%;
    margin-left:430px;
    margin-top: 105px;
    background-color: #102c58;
    position: absolute;
    border-radius: 10px;
}
.div3
{
    width: 330px;
    height: 48%;
    margin-left:540px;
    margin-top: 87px;
    background-color:#102c58;
    position: absolute;
    border-radius: 10px;
}
.div4
{
    width: 330px;
    height: 48%;
    margin-left: 943px;
    margin-top: 87px;
    background-color:#102c58;
    position: absolute;
    border-radius: 10px;
}
.div5
{
    width: 330px;
    height: 45.6%;
    margin-left: 943px;
    margin-top: 360px;
    background-color:#102c58;
    position: absolute;
    border-radius: 10px;
}
.div6
{
    width: 330px;
    height: 45.6%;
    margin-left: 543px;
    margin-top: 357px;
    background-color: #102c58;
    position: absolute;
    border-radius: 10px;
}

.div7
{
    width: 330px;
    height: 45.6%;
    margin-left: 120px;
    margin-top: 357px;
    background-color: #102c58;
    position: absolute;
    border-radius: 10px;
}
.div8
{
    width: 226px;
    height: 45.6%;
    margin-left: 124px;
    margin-top: 357px;
    background-color: #102c58;
    position: absolute;
    border-radius: 10px;
}
.img-d1
{
    width: 110px;
    margin-left: 104px;
    margin-top: 23px;
    position: absolute;
    display: block;
}


h3
{

font-size: 30px;
margin-top: 169px;
color: white;
text-decoration: none;
margin-left: 74px;

}
a
{
   text-decoration: none;
 


}
.img-d2
{
    width: 120px;
    margin-left: 53px;
    margin-top: 10px;

    
}
h4
{

font-size: 30px;
color: white;
margin-left: 47px;
margin-top: 28px;
}
.img-d3
{
    width: 120px;
    margin-left: 104px;
    margin-top: 20px;
}
h5
{

font-size: 30px;
color: white;
margin-left: 110px;
margin-top: 33px;
}
.img-d4
{
    width: 115px;
    margin-left: 115px;
    margin-top: 15px;
}
h6
{

font-size: 30px;
color: white;
margin-left: 105px;
margin-top: 25px;

}
.img-d5
{
    width: 120px;
    margin-left: 102px;
    margin-top: 10px;
}
.h6
{

font-size: 27px;
color: white;
margin-left: 97px;
margin-top: 40px;

}
.h7
{
    margin-left:47px;
}

.h8
{
    margin-left:85px;
}
.h9
{
    
    margin-left:85px;
}













@media screen and (max-width:480px){

    body
    {
        overflow: scroll;
    }
.div1
{
width:57%;

}
.div7
{
width:57%;

}
.div3
{
width:57%;
margin-left: 112px;
}   
.div4
{
    width: 57%;
    margin-left: 120px;
    margin-top: 319px;
}   
.div5
{
    width: 57%;
    margin-left: 120px;
    margin-top: 596px;
}   
.div6
{
width:57%;
margin-left: 112px;
}
.img-d3
{
    margin-left:68px;
}
.img-d4
{
    margin-left:75px;
}
h5
{
    font-size: 31px;
    margin-left: 76px;
}
h6
{
    font-size: 31px;
    margin-left: 60px;
}
.img-d5
{
    margin-left:66px;
}
.med
{
    margin-top:535px;
  display:inline-block;
}
.med2
{
    margin-top:-536px;
    margin-left: 8px;
  
}
.med3
{
    margin-top:836px;
  
}
.h9
{
    font-size: 31px;
    margin-left: 51px;
}

.h8
{
    font-size: 31px;
    margin-left: 43px;
}
.h2
{
    display:none;
}
.img-d1
{
    margin-left:78px;
}

h3
{
    font-size: 31px;
    margin-left: 43px;
}
.l-sidebar
{
    position: fixed;
}
}
























@media screen and (min-width:481px) and (max-width:767px){

body
{
    overflow: scroll;
}
.div1
{
width:57%;

}
.div7
{
width:57%;

}
.div3
{
width:57%;
margin-left: 112px;
}   
.div4
{
width: 57%;
margin-left: 120px;
margin-top: 319px;
}   
.div5
{
width: 57%;
margin-left: 120px;
margin-top: 596px;
}   
.div6
{
width:57%;
margin-left: 112px;
}
.img-d3
{
margin-left:120px;
}
.img-d4
{
margin-left:75px;
}
h5
{
    font-size: 38px;
    margin-left: 120px;

}
h6
{
font-size: 31px;
margin-left: 60px;
}
.img-d5
{
    width: 39%;
    margin-left: 109px;
    margin-top: -5px;
}
.med
{
margin-top:535px;
display:inline-block;
}
.med2
{
margin-top:-536px;
margin-left: 8px;

}
.med3
{
margin-top:836px;

}
.h9
{
    font-size: 33px;
    margin-left: 114px;
    margin-top: 3px;

}

.h8
{
font-size: 31px;
margin-left: 43px;
}
.h2
{
display:none;
}
.img-d1
{
margin-left:78px;
}

h3
{
font-size: 31px;
margin-left: 43px;
}
.l-sidebar
{
position: fixed;
}
}

    </style>
</head>
<body class="sidebar-is-reduced">
    <header class="l-header">
      <div class="l-header__inner clearfix">
       
       <p class="h2">Dr: Ahmed Ali Zaher</p>
        <div class="header-icons-group">
        
        <a href="logout.php">

 <div class="c-header-icon logout"><i class="fa fa-power-off"></i></div></a>
        </div>

      </div>
    </header>
    <div class="l-sidebar">
      <div class="logo">
        <div class="logo__txt">D</div>
      </div>
      <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
          <ul class="u-list">
            <li class="c-menu__item is-active" data-toggle="tooltip" title="Flights">
              <div class="c-menu__item__inner"><i class="fa fa-plane"></i>
                <div class="c-menu-item__title"><span>Flights</span></div>
              </div>
            </li>
           
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
              <div class="c-menu__item__inner"><i class="far fa-chart-bar"></i>
                <div class="c-menu-item__title"><span>Statistics</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Gifts">
              <div class="c-menu__item__inner"><i class="fa fa-gift"></i>
                <div class="c-menu-item__title"><span>Gifts</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
              <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
                <div class="c-menu-item__title"><span>Settings</span></div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  
   
    <div class="main">
        <div class="med">
        <a href="http://localhost/projecttt/mgmo3a.php">
            <div class=" div1 animate__animated animate__slideInUp animate__slow	2s">
                <img class="img-d1" src="people.png">
                <h3>مجموعات الطلاب </h3>
        </a>
    </div>
    <a href="http://localhost/projecttt/scheduling/index.php">
        <div class="div7 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d5" src="speech-bubble.png">
            <h6 class="h8">مواعيد الصفوف</h6>
    </a>
    </div>

</div>

<div class="med2">
    <a href="http://localhost/projecttt/mgmo3a_masrofat.php">
        <div class="div3 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d3" src="receipt.png">
            <h5> مصروفات</h5>
    </a>
    </div>
    <a href="http://localhost/projecttt/att.php">
        <div class="div6 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d5" src="frequency.png">
            <h6 class="h9">غياب و حضور</h6>
    </a>
    </div>
</div>
    
<div class="med3">

    <a href="http://localhost/projecttt/study/login.php">
        <div class="div4 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d4" src="team.png">
            <h6> بيانات الطلاب</h6>
    </a>
    </div>


    <a href="http://localhost/projecttt/mgmo3a_natiga.php">
        <div class="div5 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d4" src="pass.png">
            <h6 class="h6"> نتائج الامتحانات</h6>
    </a>
    </div>

</div>

  


    

    </div>
</body>

</html>