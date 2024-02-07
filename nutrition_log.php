<fieldset class="col-md-6">
    <legend class="text-center mb-3">Nutrition Log</legend>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="mb-3">
            <label for="meal-time" class="form-label">When did you eat?</label>
            <select name="meal-time" id="meal-time" class="form-control">
                <option value="select" selected disabled hidden>Select</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
                <option value="dinner">Snack</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="meal-type" class="form-label">What did you eat?</label>
            <div>
                <textarea name="meal-type" id="meal-type" class="form-control"></textarea>
            </div>
        </div>

        <div class="mb-3">
            <label for="calories" class="form-label">Total Calories:</label>
            <input type="text" name="calories" id="calories" class="form-control">
        </div>

        <div class="mb-3">
            <label for="total-fat" class="form-label">Total Fat:</label>
            <input type="text" name="total-fat" id="total-fat" class="form-control">
        </div>

        <div class="mb-3">
            <label for="total-carbohydrate" class="form-label">Total Carbs:</label>
            <input type="text" name="total-carbohydrate" id="total-carbohydrate" class="form-control">
        </div>

        <div class="mb-3">
            <label for="protein" class="form-label">Total Protein:</label>
            <input type="text" name="protein" id="protein" class="form-control">
        </div>

        <div>
            <input type="submit" name="submit" value="log" class="btn btn-dark w-100">
        </div>
    </form>
</fieldset>
