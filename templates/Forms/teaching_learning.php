<h3 class="text-center mb-5">STUDENT'S FEEDBACK FORM</h3>
<hr>

<h4>
    <strong>Dear Student</strong>, This questionnaire seeks a feedback from you to strengthen the quality of teaching – learning Process and to look for newer ways to improve performance and to bring excellence in teaching and learning process.
</h4>
<h4>
    Kindly respond to each and every statement. Your independent and well considered response will contribute to college’s ongoing efforts for achieving academic excellence. Your response will remain strictly confidential.
</h4>
<div class="container">
    <?php echo $this->Form->create($teachingLearning, ["autocomplete" => "off", 'id' => 'personalDetailsForm', 'method' => 'POST']); ?>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?= $this->Form->control('passingYear', ['type' => 'text', 'class' => 'form-control', 'id' => 'passingYear', 'placeholder' => 'Enter Passing Year', 'label' => false]); ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <?= $this->Form->control('course', ['type' => 'text', 'class' => 'form-control', 'id' => 'course', 'placeholder' => 'Course', 'label' => false]); ?>
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
