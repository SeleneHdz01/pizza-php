<?php
//include('ninjas.php');
//require('ninjas.php');
//echo 'end of php';
/**MySQLi connect to DB */
$conn = mysqli_connect('localhost', 'selene', 'SelHdz_15', 'sel_bd');

/**Check connection */
if(!$conn){
   echo 'connection error: ' . mysqli_connect();
}

/**Write query from all pizza */
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make query & get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
//sqlite_fetch_all() devuelve un array del conjunto de resultados completo desde el recurso result.
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free result from memory
mysqli_free_result($result);

//Close connection
mysqli_close($conn);

//print_r(explode(',', $pizzas[0]['ingredients']));

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('templates/header.php');?> 

   <h4 class="center grey-text">Pizzas!</h4>

   <div class="container">
      <div class="row">
         <?php foreach ($pizzas as $pizza): ?>
            <div class="col s6 md3">
               <div class="card z-depth-0">
                  <div class="card-content center">
                     <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                     <ul>
                        <?php foreach (explode(',',$pizza['ingredients']) as $ingre):?>
                           <li><?php echo htmlspecialchars($ingre);?></li>
                        <?php endforeach;?>
                     </ul>
                     <div><?php //echo htmlspecialchars($pizza['ingredients']); ?></div>
                  </div>
                  <div class="card-action right-align">
                     <a class="grand-text" href="#">more info</a>
                  </div>
               </div>
            </div>
         <?php endforeach;?>
         <?php if(count($pizza) > 1):?>
               <p>There are 3 or more pizzas</p>
            <?php else:?>
               <p>there are less than 3 pizzas</p>
            <?php endif?>
      </div>

   </div>


   <?php include('templates/footer.php');?> 
</html>