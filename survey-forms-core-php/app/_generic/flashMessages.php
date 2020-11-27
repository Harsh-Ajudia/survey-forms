<?php
if (isset($messages) && !empty($messages) && count($messages) > 0) {
    foreach ($messages as $type => $array) {
        if (count($array) > 0) {
            foreach ($array as $mKey => $mVal) {
?>
                <div class="alert alert-<?php echo $type; ?> alert-dismissible fade show" role="alert">
                    <?php echo $mVal?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
<?php
            }
        }
    }
}
