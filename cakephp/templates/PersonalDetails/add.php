<h3 class="text-center mb-5">Personal Details Form</h3>
<hr>
<div class="container">
    <?php echo $this->Form->create($personalDetails, ["autocomplete" => "off", 'id' => 'personalDetailsForm', 'method' => 'POST']); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?= $this->Form->control('firstName', ['type' => 'text', 'class' => 'form-control', 'id' => 'firstName', 'placeholder' => 'Enter Fist Name', 'label' => 'First Name']); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= $this->Form->control('lastName', ['type' => 'text', 'class' => 'form-control', 'id' => 'lastName', 'placeholder' => 'Enter Last Name', 'label' => 'Last Name']); ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter Email', 'label' => 'Email address']); ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <?= $this->Form->control(
                    'country',
                    ['type' => 'select', 'options' => $countriesList, 'empty' => '(choose country)', 'class' => 'form-control', 'id' => 'country', 'label' => 'Country']
                ); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= $this->Form->control('mobileNumber', ['type' => 'text', 'class' => 'form-control', 'id' => 'mobileNumber', 'placeholder' => 'Enter Mobile Number', 'label' => 'Mobile Number']); ?>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <?= $this->Form->end(); ?>
</div>

<script>
    $().ready(function() {
        $("#personalDetailsForm").validate({
            rules: {
                firstName: {
                    required: true,
                    minlength: 3,
                    maxlength: 30,
                },
                lastName: {
                    required: true,
                    minlength: 3,
                    maxlength: 30,
                },
                email: {
                    required: true,
                    minlength: 5,
                    maxlength: 128,
                },
                mobileNumber: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },

            },
            messages: {
                firstName: {
                    required: "Please enter a First Name",
                    minlength: "Your First Name must consist of at least 3 characters",
                    maxlength: "Your First Name must consist of at most 30 characters"
                },
                lastName: {
                    required: "Please enter a Last Name",
                    minlength: "Your Last Name must consist of at least 3 characters",
                    maxlength: "Your Last Name must consist of at most 30 characters"
                },
                email: {
                    required: "Please enter an email",
                    minlength: "Your email must consist of at least 5 characters",
                    maxlength: "Your email must consist of at most 128 characters"
                },
                mobileNumber: {
                    required: "Please enter mobile number",
                    minlength: "Your mobile number must consist of at least 10 characters",
                    maxlength: "Your mobile number must consist of at most 10 characters",
                    number: "Please enter only numbers"
                },
            }
        });
    })
</script>
