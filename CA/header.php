<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="ca.css">-->
    <link rel="icon" href="Picture1618221949934.png" type="image/png" sizes="16*16">
    
    <title>S.S.R & ASSOCIATES</title>
    <style>
      *::selection{
    background-color:gold;
    color:rgb(24,24,53);
}

body{
    width: 100%;
    height:100%;
    margin:0;
    scroll-behavior:smooth;
    font-family:Helvetica,'Segoe UI';
}
a{
    text-decoration:none;
    background-color: transparent;
    color:#ededed;
    
}
.logo{
    text-transform: capitalize;
    font-variant:small-caps;
    font-weight:bold;

}
.logo a{
  color:yellow;
}
a:hover{
    color:yellow;
}
#banner_image{
    background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url(whats-the-difference-between-accountant-chartered-accountant.jpg);
    background-repeat:no-repeat;
    background-size:cover;
    background-position: center;
    overflow-y:hidden;
    margin-top:-20px;
    overflow-x: hidden;
}
#inner_banner_image{
    padding:50px 80px;
    color:white;
    margin-top: 10%;
    font-family: 'imapct';
    text-align:center;
    width:fit-content;
    height:fit-content;
    text-transform:capitalize;
    font-variant: small-caps;
    font-weight:900;
    border-radius:3%;

}
#inner_banner_image  a button
{
  color:rgb(24,24,53);
  background-color:yellow;
  margin:50px;
  font-size:large;
  padding:5px 10px;
  border-radius: 3%;
  opacity:1.5;
  font-weight:bold;
  
}
#inner_banner_image h1{
   font-size: 40px;
  text-decoration: underline;
  opacity:1.5;
  font-weight:bold;

}
#inner_banner_image h2{
  font-family:'segoe ui';
}
.inner-header{
    width: 80%;
    margin:auto;
}
.logo{
    float:left;
    font-size:30px;
    font-weight:bold;
}
.signup{
    float:right;
    font-size:25px;
    height:50px;
    padding:15px 15px;
}
.signup_button .dropdown{
    padding-bottom:20px;
}
.box
{
    position: relative;
    width:90%;
    height:250px;
    background-color:#FCF3CF;
    
    margin:20px;
    box-sizing: border-box;
    font-size:50px;
    border:1px solid bold;
    text-align: center;
    border-radius: 3%;
}
.box h1
{
    color:white;
    font-family: sans-serif;
    font-weight: bolder;
}

.allign{
    text-align:center;
    text-transform: capitalize;
    font-weight:bold;
    font-variant: small-caps;
    
}
.animate{
    animation-name:animat;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-delay: 3s;
    animation-play-state: running;
}
@keyframes animat{
    from{
        transform:scale(0.8);
    }
    to{
        transform:scale(1.2);
    }
}
.allign1{
    -webkit-box-reflect: below -12px linear-gradient(transparent,rgba(0,0,0,0.3));
}
.service{
  background-color:#FCF3CF;
}
.img3
{
  background-color:#FCF3CF;
    border:1px solid bolder;
    width:95%;
    height:400px;
    margin:15px;

}
.img4
{   margin-left:23%;
  background-color:#FCF3CF;
    border:1px solid bolder;
    width:60%;
    height:400px;

}
li a h4{
    text-align:center;
    font-size:small;
    font-weight:bold;
    font-variant: small-caps;
    text-transform: capitalize;
    color:darkblue;
    
}
.h{
    color:white;
}
.signup_button{
    padding:10px 30px 20px 5px;
    height:50px;
    float:right;
    font-size:25px;
    
}
.color1{
    font-weight:bold;
    text-transform: capitalize;
    text-decoration: none;
    font-variant: small-caps;
    background-color:yellow;
    border:1px solid rgb(24,24,53);
    
}
.color1 a{
  color:rgb(24,24,53);
}
.color{
        animation-name:ani;
        animation-duration: 3s;
        animation-iteration-count: infinite;
        animation-delay: 3s;
        animation-play-state: running;
        font-size:bolder;
      }
      @keyframes ani{
        0%{
          transform:rotateX(90deg);
        }
        10%{
           transform:rotateX(0deg);
        }
      }  
.content{
    color:white;
    font-size:24px;
    font-weight:bold;
    text-align:justify;
    padding:5% 10%;
    text-indent:3%;
    line-height:1.6;
}
.logobtn{
    font-weight: bold;
    font-variant: small-caps;
    text-align: center;
    text-transform: capitalize;
}

.footer-cols{
    display:grid;
    grid-gap:20px;
    grid-template-columns:repeat(4,1fr);
    color:#F7F9F9;
    text-align:left;
    padding:4rem;
    font-size:18px;
    
}
.footer-cols ul{
    list-style-type:none;
}
.footer-cols ul li a:hover{
    color:blue;
}
.footer-cols ul li:first-child{
       font-size:1.8rem;
       padding-bottom:0.5rem;
       color:yellow;
       margin-bottom:15px;
       text-transform: capitalize;
       font-variant: small-caps;
       margin-left:10%;
       text-decoration:underline;
}
footer{
  background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('footerimg.jpg');
  background-repeat:no-repeat;
    background-size:cover;
    background-position: center;
}
.goup{
    position:fixed;
    width:50px;
    height:50px;
    bottom:20px;
    left:20px;
    text-decoration:none;
    text-align:center;
    line-height:20px;
    color:yellow;
    font-size:40px;
}
.goup:active{
    color:yellow;
}
.loader-container{
    position:fixed;
    top:0;
    left:0;
    z-index:10000;
    background: #fff;
    display:flex;
    align-items:center;
    justify-content: center;
    height:100%;
    width:100%;
}
.loader-container .fade-out{
    top:-120%;
}
        footer ul li
        {
            line-height:1.6;
            font-weight:bold;
            font-family:'segoe ui'   
               }
      .head
      {
        text-align:left;
        color:yellow;
        border-bottom: 1px solid yellow;
        animation-name:animate;
        animation-duration: 3s;
        animation-iteration-count: infinite;
        animation-delay: 3s;
        animation-play-state: running;
        font-size:bolder;
      }
      @keyframes animate{
        0%{
          transform:rotateX(90deg);
        }
        10%{
           transform:rotateX(0deg);
        }
      }
      .drop{
        background-color:black;
        border:1px solid black;
        color:yellow;
        font-weight:bolder;
      }
      .social{
      
        font-weight:bolder;
      }
      #close{
    background-color:yellow;
    color:rgb(24,24,53);
    float:right;
    padding:10px;
    border-radius:5%;
    margin:20px;
    margin-top:0;
    border:1px solid rgb(24,24,53);
    border-radius:75%;
    
      }
      .popup{
        
        position:fixed;
    top:0;
    left:0;
    z-index:10000;
    background: #fff;
    display:flex;
    align-items:center;
    justify-content: center;
    height:100%;
    width:100%;
    display:none;
      }
    </style>
    <!--C:\xampp\htdocs\CA PHP-->
</head>
<body>
    <div class="navbar navbar-inverse"style="padding-bottom:10px;background-color:black">
      <div class="logo" >
          <a href="ca.php" class="logo" style="font-family:'Segoe UI';"><img src="LOGO.jpg" alt="CA LOGO" width="50px" height="35px" class="color">
            <strong>&nbsp; S.S.R & Associates
          </strong></a>
      </div>
    <div class="signup_button">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle drop" type="button" data-toggle="dropdown">
            <h6 class="glyphicon glyphicon-wrench logobtn ">&nbsp;Services</h6></button>
          <ul class="dropdown-menu">
            <li><a href="accounts.php"><h4>accounting</h4></a></li>
            <li class="divider"></li>
            <li><a href="return.php"><h4>returns</h4></a></li>
            <li class="divider"></li>
            <li><a href="appeal.php"><h4>appeal</h4></a></li>
          </ul>
        </div>
    </div>
    <div class="signup_button">
         <div class="dropdown">
           <button class="btn btn-primary dropdown-toggle drop" type="button" data-toggle="dropdown">
             <h6 class="glyphicon glyphicon-chevron-down logobtn ">&nbsp;Menu</h6>
           </button>
           <ul class="dropdown-menu">
             <li><a href="ca.php"><h4>Home</h4></span></a></li>
             <li class="divider"></li>
             <li><a href="aboutus.php"><h4>About Us</h4></a></li>
             <li class="divider"></li>
             <li><a href="contactus.php"><h4>Appointment</h4></span></a></li>
           </ul>
           
         </div>
    </div>
</div>
    