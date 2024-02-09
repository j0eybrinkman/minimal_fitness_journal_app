<?php
    $exercise = $reps = $sets = '';
    $exerciseErr = $repsErr = $setsErr = '';

    if(isset($_POST['workout_submit'])) {
        if (empty($_POST['exercise'])) {
            $exerciseErr = 'Exercise is required';
        } else {
            $exercise = filter_input(
                INPUT_POST,
                'exercise',
                FILTER_SANITIZE_FULL_SPECIAL_CHARS
            );
        }

        if (empty($_POST['reps'])) {
            $repsErr = 'Reps is required';
        } else {
            $reps = filter_input(
                INPUT_POST,
                'reps',
                FILTER_SANITIZE_FULL_SPECIAL_CHARS
            );
        }

        if (empty($_POST['sets'])) {
            $setsErr = 'Sets is required';
        } else {
            $sets = filter_input(
                INPUT_POST,
                'sets',
                FILTER_SANITIZE_FULL_SPECIAL_CHARS
            );
        }

        if (empty($exerciseErr) && empty($repsErr) && empty($setsErr)) {
            $sql = "INSERT INTO `workout_log` (exercise, reps, sets) VALUES ('$exercise', '$reps', '$sets')";

            if (!mysqli_query($conn, $sql)) {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    }
?>
<fieldset class="col-md-6">
    <legend class="text-center mb-3">Workout Log</legend>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="mb-3">
            <label for="exercise" class="form-label">Which Exercise?</label>
            <select name="exercise" id="exercise" class="form-control <?php echo !$exerciseErr ?: 'is-invalid'; ?>">
                <option value="select" selected disabled hidden>Select</option>
                <option value="push-ups">Push-Ups</option>
                <option value="squats">Squats</option>
                <option value="leg-raises">Leg Raises</option>
            </select>
            <div class="invalid-feedback">
                <?php echo $exerciseErr; ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="reps" class="form-label">How many Reps?</label>
            <input type="number" name="reps" class="form-control <?php echo !$repsErr ?: 'is-invalid'; ?>">
            <div class="invalid-feedback">
                <?php echo $repsErr; ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="sets" class="form-label">How many Sets?</label>
            <input type="number" name="sets" class="form-control  <?php echo !$setsErr ?: 'is-invalid'; ?>">
            <div class="invalid-feedback">
                <?php echo $setsErr; ?>
            </div>
        </div>

        <div>
            <input type="submit" name="workout_submit" id="workout_submit" value="log" class="btn btn-dark w-100">
        </div>
    </form>
</fieldset>