<?php require_once('app/controllers/instituteFacilityController.php'); ?>
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
        <h3 class="text-center mb-5">INSTITUTE FACILITY FEEDBACK FORM</h3>
        <hr>
        <div class="container">
            <form method="POST" id="personalDetailsForm">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="<?php echo isset($formValues['name']) ? $formValues['name'] : ''; ?>" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="<?php echo isset($formValues['admissionYear']) ? $formValues['admissionYear'] : ''; ?>" name="admissionYear" class="form-control" id="admissionYear" placeholder="Enter Admission Year">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="<?php echo isset($formValues['branch']) ? $formValues['branch'] : ''; ?>" name="branch" class="form-control" id="branch" placeholder="Branch">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="<?php echo isset($formValues['department']) ? $formValues['department'] : ''; ?>" name="department" class="form-control" id="department" placeholder="Enter Department">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" value="<?php echo isset($formValues['enrollmentNo']) ? $formValues['enrollmentNo'] : ''; ?>" name="enrollmentNo" class="form-control" id="enrollmentNo" placeholder="Enter Enrollment No.">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="">Semester</label><br>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="semester" id="oddSemester" value="odd" <?php echo isset($formValues['semester']) && $formValues['semester'] == "odd" ? 'checked' : ''; ?>> Odd
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="semester" id="evenSemester" value="even" <?php echo isset($formValues['semester']) && $formValues['semester'] == "even" ? 'checked' : ''; ?>> Even
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Satisfactory</th>
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

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="comments">Other Comments</label>
                            <textarea name="comments" id="comments" cols="20" rows="5" class="form-control"><?php echo isset($formValues['comments']) ? $formValues['comments'] : ''; ?></textarea>
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
                        admissionYear: {
                            required: true,
                            minlength: 4,
                            maxlength: 4,
                            number: true,
                        },
                        branch: {
                            required: true
                        },
                        department: {
                            required: true
                        },
                    },
                    messages: {
                        admissionYear: {
                            required: "Please enter a Year",
                            minlength: "Please enter a 4 number year",
                            maxlength: "Please enter a 4 number year"
                        },
                        branch: {
                            required: "Please enter branch"
                        },
                        department: {
                            required: "Please enter department"
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