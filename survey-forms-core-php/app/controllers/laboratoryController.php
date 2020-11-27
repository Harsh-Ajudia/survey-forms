<?php

require_once(__DIR__ . '/../_generic/db.php');
if (isset($_POST['course']) && $_POST['course']) {
    $formValues = $_POST;
    $messages = [];
    $messages['danger'] = [];
    $messages['success'] = [];
    if ($_POST['course'] == '') {
        $messages['danger'][] = "Please enter Course";
    }
    if ($_POST['nameOfFaculty'] == '') {
        $messages['nameOfFaculty'][] = "Please enter the name Of Faculty";
    }
    if ($_POST['laboratoryCode'] == '') {
        $messages['laboratoryCode'][] = "Please enter the Laboratory code";
    }
    if ($_POST['laboratoryName'] == '') {
        $messages['laboratoryName'][] = "Please enter the name Of Laboratory";
    }
    if (!isset($_POST['semester']) || $_POST['semester'] == '') {
        $messages['danger'][] = "Please enter semester";
    }
    if (!isset($_POST['checkbox']) || ($_POST['checkbox'] && count($_POST['checkbox']) != 11)) {
        $messages['danger'][] = "Please answer all the questions";
    }
    if (count($messages['danger']) == 0) {
        // submit
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO laboratory (laboratoryCode, laboratoryName,nameOfFaculty,semester,course, ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10,ans11)
            VALUES ('" . $_POST['laboratoryCode'] . "','" . $_POST['laboratoryName'] . "','" . $_POST['nameOfFaculty'] . "','" . $_POST['semester'] . "', '" . $_POST['course'] . "','" . $_POST['checkbox']['ans1'] . "','" . $_POST['checkbox']['ans2'] . "','" . $_POST['checkbox']['ans3'] . "','" . $_POST['checkbox']['ans4'] . "','" . $_POST['checkbox']['ans5'] . "','" . $_POST['checkbox']['ans6'] . "','" . $_POST['checkbox']['ans7'] . "','" . $_POST['checkbox']['ans8'] . "','" . $_POST['checkbox']['ans9'] . "','" . $_POST['checkbox']['ans10'] . "','" . $_POST['checkbox']['ans11'] . "')";
            $conn->exec($sql);
            $messages['success'][] = "Your form has been submitted successfully.";
            $formValues = [];
            unset($_POST);
            header("Location: thank-you.php");
        } catch (PDOException $e) {
            // $messages['danger'][] = $sql . "<br>" . $e->getMessage();
            $messages['danger'][] = "Unable to submit your response";
        }

        $conn = null;
    }
}

$questions = [
    'All equipment were in working condition.',
    'The lab manuals were available.',
    'The labs were neat and clean with proper labeling and marking of equipment.',
    'Each student gets a chance to perform the experiment by his/her own hands.',
    'The lab hours were mostly spent on performing experiments.',
    'The lab Faculty was cooperative.',
    'The lab Faculty ensured the smooth conduct of the experiments.',
    'The lab Faculty had full knowledge of the experiments.',
    'The lab Faculty had full knowledge of the experiments.',
    'Practical sessional exams were held in time.',
    'Experiments helped in better understanding of the subject.',
];
