<?php
wp_head(); 
?>

<?php
session_start();
?>
   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <title>Registraion Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>


  <?php 
  
  global $wpdb;
  $table_name = $wpdb->prefix . 'five_fields';
  $results = $wpdb->get_results("SELECT * FROM $table_name");

foreach ($results as $result) {
  echo $result->field_one;
  echo $result->field_two;
  
}

if(!empty($results[0])){    


  print_r('maal ache'); 
  
        }else{
          print_r('maal nai'); 
  
        }
  
  
  ?>

    <form action="#" class="form" id="store_coupon_name">
      <h1 class="text-center"> Store Coupons </h1>
     
      <div class="form-step form-step-active">


  <div class="form-group">
    <label for="exampleInputEmail1"> Coupon 1 </label>
    <input type="text" class="form-control" id="field_one" name="field_one" value="<?php echo $results[0]->field_one ; ?>" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Coupon 2</label>
    <input type="text" class="form-control" id="field_two" name="field_two" value="<?php echo $results[0]->field_two ;?>"  >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Coupon 3</label>
    <input type="text" class="form-control" id="field_three" name="field_three"  value="<?php echo $results[0]->field_three ;?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Coupon 4</label>
    <input type="text" class="form-control" id="field_four" name="field_four" value="<?php echo $results[0]->field_four ;?>" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Coupon 5</label>
    <input type="text" class="form-control" id="field_five" name="field_five" value="<?php echo $results[0]->field_five ;?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

  </div>


    </form>
  </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.angularjs.org/1.2.21/angular.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>
 
</html>



<?php
wp_footer();