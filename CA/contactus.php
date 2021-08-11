    <?php include('header.php'); ?>
    <style>

        .format{
            background-color:rgb(24, 24, 53);
            color:cornsilk;
            font-size:medium;
            text-transform: capitalize;
            font-variant: small-caps;
            border-radius:3%;
        } 
        h5{
          text-transform: capitalize;
          font-variant: small-caps;
          font-family:'Segoe UI';
          font-weight:bold;
          color:yellow;
          font-size:24px;;
        }
        input,textarea{
          color:yellow;
          border:transparent;
          border-bottom:1px solid yellow;
          padding:5px;
          background-color:rgb(24,24,53);
        }
        input[type='submit']{
          color:rgb(24,24,53);
          background-color:yellow;
          font-weight:bold;
          text-transform: capitalize;
          font-variant: small-caps;
          text-align:center;
          padding:5px;
          margin:15px;
          border-radius: 3%;
        }
        #p1,#p2,#p3{
          color:red;
          font-size:12px;

        }
        h3
        {
            font-weight:bolder;
            display:inline;
            color:rgb(81,199,81);
           text-transform:capitalize;
           font-variant: small-caps;
        }
        h5{
            display: inline;
            font-size:larger;
            
        }
      
</style>
    <div id="banner_image" style="margin-top:-100px;width:100%" >
      <img src="appointment.jpg" alt="" width="100%">
    </div>
    <br><br>
    <div class="container format">
        <h1 class="head"><strong>&nbsp;APPOINTMENT</strong></h1>
       <br><br><br>
       <br>
       <center>
        <form action="connect.php" method="post" id="f" onsubmit="return validate()">
          <label for="name"><h5><span class="glyphicon glyphicon-user"></span></h5></label>&nbsp;
          <input type="text"  placeholder="Name" id="name" name="name" >
          <p id="p1"></p>
          <br>
          <label for="email"><h5><span class="glyphicon glyphicon-envelope" ></span></h5></label>&nbsp;
          <input type="email" placeholder="Email" id="email" name="email">
          <p id="p2"></p>
          <br>
          <label for="message"><h5><span class="glyphicon glyphicon-comment"></span></h5></label>&nbsp;
          <textarea name="message" id="message" cols="30" rows="3" placeholder="Add Your Comments"></textarea>
          <p id="p3"></p>
          <br>
          <input type="submit" id="submit" name='submit' value="Take an appointment">
        </form>
        </center>
    </div>
    <br><br>
    <br>
    <div class="loader-container">
      <img src="loader.gif" alt="">
      </div>
</body>
<footer>
  <footer>
    <div>
      <div class="footer-cols">
          <ul>
              <li>Services</li>
              
              <li><a href="accounts.php">Accounting</a></li>
              <li><a href="appeal.php">Appeals</a></li>
              <li><a href="return.php">Returns</a></li>
          </ul>
          <ul>
              <li>Contact Information</li>
              
              <li>phone:98765 43210</li>
              <li>Telephone:1234-5678</li>
              <li>Email: <a href="mailto:ssr@yahoo.com">ssr@yahoo.com</a></li>
              
          </ul>
          <ul>
              <li>Locations</li>
              
              <li>Hyderabad</li>
              <li>Tirupathi</li>
              <li>Vizag</li>
          </ul>
      <ul>
          <li>Get Social</li>
          <li><a href="tel:98765 43210" class="social"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="mailto:ssr@yahoo.com"><span class="glyphicon glyphicon-envelope social"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="tel:1234-5678"><span class="glyphicon glyphicon-phone-alt social"></span></a></li>
  
      </ul>
      </div>
  </div>
  <div class="container-fluid">
    <h6 style="font-weight:bold;color:yellow;float:right;">Get to know us &nbsp;
    <a href="mailto:ssr@yahoo.com" style="color:yellow">ssr@yahoo.com</a>
     &nbsp; |&nbsp; &nbsp;
     <a href="aboutus.php" style="color:yellow">About us</a>
     &nbsp; |&nbsp;&nbsp;
     <a href="contactus.php" style="color:yellow">Take an Appointment</a>
    </h6>
  </div>
    <div class="container-fluid nav">
      <center>
        <p style="color:white">
          <strong style="font-size:large">
                 Copyright &copy; 2021 <a href="ca.php">S.S.R & ASSOCIATES.</a> All rights reserved. 
          </strong>
        </p>
      </center>
    </div>
  </footer>
  <a href="#" class="goup"><span class="glyphicon glyphicon-upload"></span></a>
  </footer>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
console.log("hello");

function validate()
{
  var name=document.getElementById("name");
  var mail1=document.getElementById("email");
  var mess=document.getElementById("message");
  if(name.value=="")
  {
    document.getElementById("p1").innerHTML="This field should not be empty";
    name.focus();
    name.style.borderBottom="5px solid red";
    return false;
  }
  if(mail1.value=="")
  {
    document.getElementById("p2").innerHTML="This field should not be empty";
    mail1.focus();
    mail1.style.borderBottom="5px solid red";
    return false;
  }
   if(mess.value=="")
  {
    document.getElementById("p3").innerHTML="This field should not be empty";
    mess.focus();
    mess.style.borderBottom="5px solid red";
    return false;
  }
}
setTimeout(function()
{
  $('.loader-container').fadeToggle();
},3000)
</script>