<?php require_once('app/controllers/teachingController.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Forms</title>

    <!-- CSS Files -->
    <link href="css/material-kit.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />

    <script src="js/core/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <?php require_once('app/_generic/header.php'); ?>
    <div class="container">
        <?php require_once('app/_generic/flashMessages.php'); ?>
        <h3 class="text-center mb-5">STUDENT'S FEEDBACK FORM</h3>
        <hr>

        <h4>
            <strong>Dear Student</strong>, This questionnaire seeks a feedback from you to strengthen the quality of teaching – learning Process and to look for newer ways to improve performance and to bring excellence in teaching and learning process.
        </h4>
        <h4>
            Kindly respond to each and every statement. Your independent and well considered response will contribute to college’s ongoing efforts for achieving academic excellence. Your response will remain strictly confidential.
        </h4>
        <div class="container">
            <form method="POST" id="personalDetailsForm">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="<?php echo isset($formValues['passingYear']) ? $formValues['passingYear'] : ''; ?>" name="passingYear" class="form-control" id="passingYear" placeholder="Enter Passing Year">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <input type="text" value="<?php echo isset($formValues['course']) ? $formValues['course'] : ''; ?>" name="course" class="form-control" id="course" placeholder="Course">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Poor</th>
                                        <th scope="col">Good</th>
                                        <th scope="col">Very Good</th>
                                        <th scope="col">Excellent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($questions) && !empty($questions)) { ?>
                                        <?php foreach ($questions as $key => $value) { ?>
                                            <?php $answer = "ans" . ($key + 1); ?>
                                            <tr>
                                                <th><?= $key + 1; ?></th>
                                                <td scope="row">
                                                    <?= $value; ?>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-radio form-check-inline">


                                                        <label class="form-check-label">

                                                            <input class="form-check-input" type="radio" name="checkbox[<?= $answer ?>]" id="inlineRadio<?= $answer ?>1" value="Poor" <?php echo isset($formValues['checkbox'][$answer]) && $formValues['checkbox'][$answer] == "Poor" ? 'checked' : ''; ?>> 1
                                                            <span class="circle">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-radio form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="checkbox[<?= $answer ?>]" id="inlineRadio<?= $answer ?>2" value="Good" <?php echo isset($formValues['checkbox'][$answer]) && $formValues['checkbox'][$answer] == "Good" ? 'checked' : ''; ?>> 2
                                                            <span class="circle">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-radio form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="checkbox[<?= $answer ?>]" id="inlineRadio<?= $answer ?>3" value="Very Good" <?php echo isset($formValues['checkbox'][$answer]) && $formValues['checkbox'][$answer] == "Very Good" ? 'checked' : ''; ?>> 3
                                                            <span class="circle">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-radio form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="checkbox[<?= $answer ?>]" id="inlineRadio<?= $key + 1 ?>3" value="Excellent" <?php echo isset($formValues['checkbox'][$answer]) && $formValues['checkbox'][$answer] == "Excellent" ? 'checked' : ''; ?>> 4
                                                            <span class="circle">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>

                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>

        <script>
            $().ready(function() {
                $("#personalDetailsForm").validate({
                    rules: {
                        passingYear: {
                            required: true,
                            minlength: 4,
                            maxlength: 4,
                            number: true,
                        },
                        course: {
                            required: true,
                            maxlength: 256,
                        },
                    },
                    messages: {
                        passingYear: {
                            required: "Please enter a Year",
                            minlength: "Please enter a 4 number year",
                            maxlength: "Please enter a 4 number year"
                        },
                        course: {
                            required: "Please enter a value",
                            maxlength: "Only 256 characters are allowed"
                        },
                    }
                });
            })
        </script>

    </div>
    <?php require_once('app/_generic/footer.php'); ?>
</body>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="js/material-kit.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>

</html>