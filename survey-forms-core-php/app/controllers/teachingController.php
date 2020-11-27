<?php

require_once(__DIR__ . '/../_generic/db.php');
if (isset($_POST['passingYear']) && $_POST['passingYear']) {
    $formValues = $_POST;
    $messages = [];
    $messages['danger'] = [];
    $messages['success'] = [];
    if ($_POST['passingYear'] == '') {
        $messages['danger'][] = "Please enter Passing year";
    }
    if ($_POST['course'] == '') {
        $messages['danger'][] = "Please enter Course";
    }
    if (!isset($_POST['checkbox']) || ($_POST['checkbox'] && count($_POST['checkbox']) != 17)) {
        $messages['danger'][] = "Please answer all the questions";
    }
    if (isset($messages['danger']) && count($messages['danger']) == 0) {
        // submit
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO teaching_learning (passingYear, course, ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10,ans11,ans12,ans13,ans14,ans15,ans16,ans17)
            VALUES (" . $_POST['passingYear'] . ", '" . $_POST['course'] . "','" . $_POST['checkbox']['ans1'] . "','" . $_POST['checkbox']['ans2'] . "','" . $_POST['checkbox']['ans3'] . "','" . $_POST['checkbox']['ans4'] . "','" . $_POST['checkbox']['ans5'] . "','" . $_POST['checkbox']['ans6'] . "','" . $_POST['checkbox']['ans7'] . "','" . $_POST['checkbox']['ans8'] . "','" . $_POST['checkbox']['ans9'] . "','" . $_POST['checkbox']['ans10'] . "','" . $_POST['checkbox']['ans11'] . "','" . $_POST['checkbox']['ans12'] . "','" . $_POST['checkbox']['ans13'] . "','" . $_POST['checkbox']['ans14'] . "','" . $_POST['checkbox']['ans15'] . "','" . $_POST['checkbox']['ans16'] . "','" . $_POST['checkbox']['ans17'] . "')";
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
    'Do you feel you obtained sufficient technical knowledge (in theory) at department level?',
    'Do you feel you obtained sufficient technical knowledge (in practical) at department level?',
    'How many percentage of teachers use ICT tools such as LCD projector, Multimedia, etc. while teaching? 5(Above 70%) 4(50 – 69%)  3(40 – 49%) 2(30 – 39%)',
    'Teachers inform you about your expected competencies, course outcomes and program outcomes',
    'The Faculties illustrate the concepts through examples and applications.',
    'Faculties are able to identify your strength/ weaknesses and appreciate/help you to overcome them.',
    'Feedback provided on Students’ progress by department',
    'Willingness to offer help and advice to students by faculty',
    'The teaching and mentoring process in your institution facilitates you in cognitive, social and emotional growth.',
    'Fairness of the internal evaluation process by the Department.',
    'Was your performance in assignments discussed with you?',
    'Do you find number of workshops/seminar/industrial visits Programs organized by the department were sufficient?',
    'Do you find Quality of workshops/seminar/industrial visits  organized by the department were satisfactory?',
    'The institution provides multiple opportunities to learn and grow.',
    'The institute takes active interest in promoting field visit opportunities for students.',
    'How do you rate the overall quality of teaching-learning process in your institute  ?',
    'Your satisfaction level after passing from Electronics & Communication department in Government Polytechnic Ahmedabad',
];
