<?php include_once"function.php";

top(); ?>

<script>

$(document).ready(function(){
$( "#datepicker" ).datepicker();

});
</script>



<!-- **Content Main** -->
<section class="padding-y-100 border-bottom border-light">
<div class="container">
<div class="row" id="primary">';
<div class="col-sm-8">

<?php basic_form() ;
//registration_form();
?>
</div>
</div>
</div>
</section>
       <?php foot();?>
