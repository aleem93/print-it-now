<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PrintItNow</title>
    <?php include'includes/head.php'; ?>
    
 
</head>
  <body>
      <?php include'includes/header.php'; ?>
      <!-- Fixed navbar -->
       
                
  
        
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 print-now-txt  m-b-20">
                       <img src="images/print-now.jpg" class="img-responsive">
                       <h5>Simply Upload your file <br>& <br>order hassle free</h5>
                       <a href="print-now.php" class="btn btn-default btn2" data-toggle="tooltip" title="Click Me">
                           <img src="images/cart-icon.png" alt="cart" width=" " height=" "/>  Print Now</a>
                    </div>
                    <div class="col-md-4  m-b-20 pad">
                        <div class="row">
                            <div class="col-md-12 m-b-20 track-order-txt pad">
                               <img src="images/track-order.jpg" class="img-responsive">
                                <div class="overlay-txt">
                                    <h2 class="text-center">Track Your Order</h2>
                                   <form>
                                          <div class="col-sm-8 col-md-offset-2">
                                          	<div class="form-group">
                                            <input class="form-control input-xs" id="inputsm" type="text" placeholder="Your Reference No.">
                                          </div>
                                          </div>
                                          
                                          <div class="center-align-txt">
                                          		<a href="javascript:void(0);" class="btn btn-default blue-bttn pull-right" id="myBtn">Track </a>
                                          </div>
                                    </form>
                                    
                                    <!-- Trigger/Open The Modal -->
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">

                                      <!-- Modal content -->
                                      <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <p>Order Received : We have received your order with order id ABCD804354566 . You can expect delivery  by Friday ,Apr 22 2017. We will send you an update when your order is packed.</p>
                                      </div>

                                    </div>
                               </div>
                            </div>
                            <div class="col-md-12  no-registration pad">
                                <img src="images/order-img.jpg" class="img-responsive">
                                <div class="overlay-txt2">
                                    <p  class="text-center">For bulk / corporate order</p>
                                    <p   class="text-center"><a href="#">Contact Us</a></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            
            
                </div>
            </div>
        </section>
        
        <section class="printing-box-information">
            <div class="container">
               <div class="row">
                   <div class="col-md-4 col-sm-4 col-xs-12  m-b-30 pad">
                       <div class="blue-circle">
                          <img src="images/convient-icn.png" alt="convenient" width=" " height=" "/>
                          <h4>Convenient</h4>
                       </div>
                  </div>
                  
                   <div class="col-md-4 col-sm-4 col-xs-12  m-b-30 pad">
                       <div class="pink-circle">
                           <img src="images/compitetive-rate.png" alt="convenient" width=" " height=" "/>
                           <h4>Competitive rates </h4>
                       </div>
                   </div>
                   
                    <div class="col-md-4 col-sm-4 col-xs-12  m-b-30 pad">
                      <div class="yellow-circle">
                           <img src="images/hight-quality.png" alt="convenient" width=" " height=" "/>
                           <h4>High quality</h4>
                       </div>
                   </div>
               </div>     
           </div>
        </section>
        
      
        
    <?php include 'includes/footer.php'; ?>
    
    <?php include 'includes/foot.php'; ?>
     
  </body>
  
  <script>
    // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btttn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btttn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}  
  </script>
 
</html>