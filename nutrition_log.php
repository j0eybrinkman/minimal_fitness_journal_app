
<?php
$meal_time = $meal_type = $calories = $total_fat = $total_carbohydrate = $protein = '';
$meal_timeErr = $meal_typeErr = $caloriesErr = $total_fatErr = $total_carbohydrateErr = $proteinErr = '';


if(isset($_POST['nutrition_submit'])) {

    if(empty($_POST['meal_time'])) {
        $meal_timeErr = 'Meal is required';
    } else {
        $meal_time = filter_input(INPUT_POST, 'meal_time', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($_POST['meal_type'])) {
        $meal_typeErr = 'Meal is required';
    } else {
        $meal_type = filter_input(INPUT_POST, 'meal_type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($_POST['calories'])) {
        $caloriesErr = 'Calories is required';
    } else {
        $calories = filter_input(INPUT_POST, 'calories', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($_POST['total_fat'])) {
        $total_fatErr = 'Fat is required';
    } else {
        $total_fat = filter_input(INPUT_POST, 'total_fat', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($_POST['total_carbohydrate'])) {
        $total_carbohydrateErr = 'Carbs is required';
    } else {
        $total_carbohydrate = filter_input(INPUT_POST, 'total_carbohydrate', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($_POST['protein'])) {
        $proteinErr = 'Protein is required';
    } else {
        $protein = filter_input(INPUT_POST, 'protein', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    if(empty($meal_timeErr) && empty($meal_typeErr) && empty($caloriesErr)  && empty($total_fatErr)  && empty($total_carbohydrateErr)  && empty($proteinErr)) {
        $sql = "INSERT INTO `nutrition_log` (meal_time, meal_type, calories, total_fat, total_carbohydrate,  protein) VALUES ('$meal_time', '$meal_type', '$calories', '$total_carbohydrate', '$total_fat', '$protein')";

        if(!mysqli_query($conn, $sql)) {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}

?>
<fieldset class="col-md-6">
    <legend class="text-center mb-3">Nutrition Log</legend>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="mb-3">
            <label for="meal_time" class="form-label">When did you eat?</label>
            <select name="meal_time" id="meal_time" class="form-control <?php echo !$meal_timeErr ?: 'is-invalid'; ?>">
                <option value="select" selected disabled hidden>Select</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
                <option value="snack">Snack</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="meal_type" class="form-label">What did you eat?</label>
            <div>
                <textarea name="meal_type" id="meal_type" class="form-control <?php echo !$meal_typeErr ?: 'is-invalid'; ?>"></textarea>
                <div class="invalid-feedback">
                    <?php echo $meal_typeErr; ?>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="calories" class="form-label">Total Calories:</label>
            <input type="text" name="calories" id="calories" class="form-control <?php echo !$caloriesErr ?: 'is-invalid'; ?>">
            <div class="invalid-feedback">
                <?php echo $caloriesErr; ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="total_fat" class="form-label">Total Fat:</label>
            <input type="text" name="total_fat" id="total_fat" class="form-control <?php echo !$total_fatErr ?: 'is-invalid'; ?>">
            <div class="invalid-feedback">
                <?php echo $total_fatErr; ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="total_carbohydrate" class="form-label">Total Carbs:</label>
            <input type="text" name="total_carbohydrate" id="total_carbohydrate" class="form-control <?php echo !$total_carbohydrateErr ?: 'is-invalid'; ?>">
            <div class="invalid-feedback">
                <?php echo $total_carbohydrateErr; ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="protein" class="form-label">Total Protein:</label>
            <input type="text" name="protein" id="protein" class="form-control <?php echo !$proteinErr ?: 'is-invalid'; ?>">
            <div class="invalid-feedback">
                <?php echo $proteinErr; ?>
            </div>
        </div>

        <div>
            <input type="submit" name="nutrition_submit" id="nutrition_submit" value="log" class="btn btn-dark w-100">
        </div>
    </form>
</fieldset>
