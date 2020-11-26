<h3 class="text-center mb-5">STUDENT’S FEEDBACK FORM (Theory)</h3>

<hr>
<div class="container">
    <?php echo $this->Form->create($studentEntity, ["autocomplete" => "off", 'id' => 'personalDetailsForm', 'method' => 'POST']); ?>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?= $this->Form->control('academicYear', ['type' => 'text', 'class' => 'form-control', 'id' => 'academicYear', 'placeholder' => 'Enter Academic Year', 'label' => false]); ?>
            </div>
        </div>
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
                <?= $this->Form->control('subjectName', ['type' => 'text', 'class' => 'form-control', 'id' => 'subjectName', 'placeholder' => 'Subject Name', 'label' => false]); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?= $this->Form->control('sujectCode', ['type' => 'text', 'class' => 'form-control', 'id' => 'sujectCode', 'placeholder' => 'Subject Code', 'label' => false]); ?>
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
                subjectName: {
                    required: true,
                    maxlength: 256,
                },
                sujectCode: {
                    required: true,
                    maxlength: 256,
                },
                academicYear: {
                    required: true,
                    minlength: 4,
                    maxlength: 4,
                    number: true,
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
                subjectName: {
                    required: "Please enter a value",
                    maxlength: "Only 256 characters are allowed"
                },
                sujectCode: {
                    required: "Please enter a value",
                    maxlength: "Only 256 characters are allowed"
                },
                academicYear: {
                    required: "Please enter a Year",
                    minlength: "Please enter a 4 number year",
                    maxlength: "Please enter a 4 number year"
                },
            }
        });
    })
</script>
