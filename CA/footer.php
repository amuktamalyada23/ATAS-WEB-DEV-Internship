<br>
     <div class="loader-container">
       <img src="loader.gif" alt="">
       </div>
</body>
<footer>
  <div>
    <div class="footer-cols">
        <ul>
            <li>Services</li>
            <!--<li><a href="#serviceofferings"> Our Services</a></li>-->
            <li><a href="accounts.php">Accounting</a></li>
            <li><a href="appeal.php">Appeals</a></li>
            <li><a href="return.php">Returns</a></li>
        </ul>
        <ul>
            <li>Contact Information</li>
            <!--<li>Room no. 2 , 2<sup>nd</sup> Floor , Unity building , Kothapet , Hyderabad-500001.</li>-->
            <li>Phone:98765 43210</li>
            <li>Telephone:1234-5678</li>
            <li>Email: <a href="mailto:ssr@yahoo.com">ssr@yahoo.com</a></li>
            
        </ul>
        <ul>
            <li>Locations</li>
            <!--<li><a href="#loc">Our locations</a></li>-->
            <li>Hyderabad</li>
            <li>Tirupathi</li>
            <li>Vizag</li>
        </ul>
    <ul>
        <li>Get Social</li>
        <li><a href="tel:98765 43210" class="social">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
      </svg></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="mailto:ssr@yahoo.com"><span class="glyphicon glyphicon-envelope social" width="15" height="15"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="tel:1234-5678"><span class="glyphicon glyphicon-phone-alt social" width="15" height="15"></span></a></li>

    </ul>
    </div>
</div>
<div class="container-fluid">
  <h6 style="font-weight:bold;color:yellow;float:right;">Get to know us &nbsp;
  <a href="mailto:ssr@yahoo.com" style="color:yellow">ssr@yahoo.com</a>
   &nbsp; |&nbsp; &nbsp;
   <a href="aboutus.php" style="color:yellow">About us</a>
   &nbsp; |&nbsp;&nbsp;
   <a href="contactus.php" style="color:yellow;">Take an Appointment</a>
  </h6>
</div>
  <div class="container-fluid nav ">
    <center>
      <p style="color:white">
        <strong style="font-size:large">
               Copyright &copy; 2021 <a href="ca.php">S.S.R & ASSOCIATES.</a> All rights reserved. 
        </strong>
      </p>
    </center>
  </div>
  
</footer>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
 
console.log("hello");
setTimeout(function()
{
  $('.loader-container').fadeToggle();
},3000)
const popup=document.querySelector('.popup');
 const close=document.querySelector('#close');
 setTimeout(function()
{ 
  popup.style.display="block";
},10000) 
close.addEventListener('click',()=>
{
  popup.style.display="none";
})
</script>