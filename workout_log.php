<fieldset class="col-md-6">
    <legend class="text-center">Workout Log</legend>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="mb-3">
            <label for="exercise" class="form-label">Which Exercise?</label>
            <select name="exercise" id="exercise" class="form-control">
                <option value="select" selected disabled hidden>Select</option>
                <option value="push-ups">Push-Ups</option>
                <option value="squats">Squats</option>
                <option value="leg-raises">Leg Raises</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="reps" class="form-label">How many Reps?</label>
            <input type="number" name="reps" class="form-control">
        </div>

        <div class="mb-3">
            <label for="sets" class="form-label">How many Sets?</label>
            <input type="number" name="sets" class="form-control">
        </div>

        <div>
            <input type="submit" name="submit" value="log" class="btn btn-dark w-100">
        </div>
    </form>
</fieldset>
