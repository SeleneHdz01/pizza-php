<?php
/* if (isset($_GET['submit'])) {
    echo $_GET['email'];
    echo $_GET['title'];
    echo $_GET['ingredients'];
} */

$email = '';
$title = '';
$ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {
    /* echo htmlspecialchars($_POST['email']);
    echo htmlspecialchars($_POST['title']);
    echo htmlspecialchars($_POST['ingredients']); */

    /**CHEK email, empty determina si una variable esta vacia*/
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be a valid email adress';
        }
    }
    /**CHEK title */
    if (empty($_POST['title'])) {
        $title = '';
        $errors['title'] = 'Title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }
    /**CHEK ingredients */
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredients is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma separated list <br />';
        }
            
    }
    if(array_filter($errors)){
        echo 'Errors in the form';
    }else {
        //echo 'form is valid';
        header('Location: index.php');
    }

} //end POST check
?>
<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">

        <label>Your Email: </label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Pizza Title: </label>
        <input type="text" name="title" value="<?php  echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-deph-0">
        </div>
    </form>
</section>
<?php include('templates/footer.php'); ?>

</html>