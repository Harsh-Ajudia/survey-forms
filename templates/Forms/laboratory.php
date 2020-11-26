<h3 class="text-center mb-5">STUDENT’S FEEDBACK FORM (For Laboratory)</h3>
<hr>

<h4>
    <strong>Dear Student:</strong> This questionnaire seeks a feedback from you to strengthen the quality of teaching-learning environment and to look for newer ways to improve Faculty’s’ performance in classroom engagement with students so as to bring excellence in teaching and learning. Kindly respond to each and every statement. Your independent and well considered response will contribute to College’s ongoing efforts for achieving academic excellence. Your response will remain strictly confidential.
</h4>
<div class="container">
    <?php echo $this->Form->create($laboratoryEntity, ["autocomplete" => "off", 'id' => 'personalDetailsForm', 'method' => 'POST']); ?>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?= $this->Form->control('nameOfFaculty', ['type' => 'text', 'class' => 'form-control', 'id' => 'nameOfFaculty', 'placeholder' => 'Name of Faculty', 'label' => false]); ?>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <?= $this->Form->control('course', ['type' => 'text', 'class' => 'form-control', 'id' => 'course', 'placeholder' => 'Course', 'label' => false]); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?= $this->Form->control('laboratoryName', ['type' => 'text', 'class' => 'form-control', 'id' => 'laboratoryName', 'placeholder' => 'Laboratory Name', 'label' => false]); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?= $this->Form->control('laboratoryCode', ['type' => 'text', 'class' => 'form-control', 'id' => 'laboratoryCode', 'placeholder' => 'Laboratory Code', 'label' => false]); ?>
            </div>
        </div>
        <div class="col-md-4">
            <label for="">Semester</label><br>
            <div class="form-check form-check-radio form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="semester" id="oddSemester" value="odd" checked> Odd
                    <span class="circle">
                        <span class="check"></span>
                    </span>
                </label>
            </div>
            <div class="form-check form-check-radio form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="semester" id="evenSemester" value="even"> Even
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
                            <th scope="col">Poor</th>
                            <th scope="col">Good</th>
                            <th scope="col">Very Good</th>
                            <th scope="col">Excellent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($questions) && !empty($questions)) { ?>
                            <?php foreach ($questions as $key => $value) { ?>
                                <tr>
                                    <th><?= $key + 1; ?></th>
                                    <td scope="row">
                                        <?= $value; ?>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="ans<?= $key + 1 ?>" id="inlineRadio<?= $key + 1 ?>1" value="Poor"> 1
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="ans<?= $key + 1 ?>" id="inlineRadio<?= $key + 1 ?>2" value="Good"> 2
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="ans<?= $key + 1 ?>" id="inlineRadio<?= $key + 1 ?>3" value="Very Good" checked> 3
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="ans<?= $key + 1 ?>" id="inlineRadio<?= $key + 1 ?>3" value="Excellent"> 4
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
    <?= $this->Form->end(); ?>
</div>

<script>
    $().ready(function() {
        $("#personalDetailsForm").validate({
            rules: {
                nameOfFaculty: {
                    required: true,
                    maxlength: 256,
                },
                course: {
                    required: true,
                    maxlength: 256,
                },
                laboratoryName: {
                    required: true,
                    maxlength: 256,
                },
                laboratoryCode: {
                    required: true,
                    maxlength: 256,
                },
            },
            messages: {
                nameOfFaculty: {
                    required: "Please enter a value",
                    maxlength: "Only 256 characters are allowed"
                },
                course: {
                    required: "Please enter a value",
                    maxlength: "Only 256 characters are allowed"
                },
                laboratoryName: {
                    required: "Please enter a value",
                    maxlength: "Only 256 characters are allowed"
                },
                laboratoryCode: {
                    required: "Please enter a value",
                    maxlength: "Only 256 characters are allowed"
                },
            }
        });
    })
</script>
