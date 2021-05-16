<?php include_once"function.php";

top(); ?>
<div class="py-4 bg-dark">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 text-white">
         <h2>Contact</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li> 
          
          <li class="breadcrumb-item">
          Contact
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>
  <section class="padding-y-100 border-bottom border-light">
  <div class="container">
  <div class="tab-pane fade show active" id="form-basic" role="tabpanel">
      <div class="padding-y-80">
        <div class="container">
          <div class="row">
          <div class="col-md-6 my-2">                                                        
                            <h2 class="hr-border-title"><span>Leave us a Message</span></h2>
                            <div id="ajax_contact_msg"></div>
                            <form method="post"  action="mail.php" >
                                <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Your Name (required)" required>
                                 </div>
                                <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Your Email (required)" required>
                                </div>
                             
                                <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message (required)" required>
                                </textarea>
                                </div>
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </form>
                        </div> 
                           
                                                    
                        <div class="col-md-6 my-2">
                            <h2 class="hr-border-title"><span>Contact Info</span></h2>
                            <div class="contact-info">
                                <div class="textwidget"><h4 style="font-weight:bold;">Ajibay Nur, Pry & Academy School</h4>
                                <p>Ayetoro Road, Ayobo,Lagos.<br/>P.O.BOX 2455,Ipaja Lagos</p></div>
                                <div class="textwidget"><h4 style="font-weight:bold;">Ajbay Garden School</h4>
                                <p>Ajibay Estate, Ajibay Avenue Ayetoro.<br/>Itele,Ogun State.</p></div>
                                
                                <p> <i class="fa fa-phone"> </i> <span>Phone</span> :08023785283</p>
                                <p>  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;: 08033030117 </p>
                                <p> <i class="fa fa-envelope"> </i> <span>Email</span> : <a href="">info@ajibayschools.com.ng</a> </p>
                               
                            </div>
                        </div>    
                                            
                    </div> <!-- **Primary Ends** -->
                   
                   </div>
             
   </section>



<?php foot();?>