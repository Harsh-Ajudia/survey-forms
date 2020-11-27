<?php

require_once(__DIR__ . '/../_generic/db.php');
if (isset($_POST['academicYear']) && $_POST['academicYear']) {
    $formValues = $_POST;
    $messages['danger'] = [];
    $messages['success'] = [];
    if ($_POST['academicYear'] == '') {
        $messages['danger'][] = "Please enter Academic year";
    }
    if ($_POST['course'] == '') {
        $messages['danger'][] = "Please enter Course";
    }
    if ($_POST['nameOfFaculty'] == '') {
        $messages['nameOfFaculty'][] = "Please enter the name Of Faculty";
    }
    if ($_POST['subjectName'] == '') {
        $messages['subjectName'][] = "Please enter Subject Name";
    }
    if ($_POST['subjectCode'] == '') {
        $messages['subjectCode'][] = "Please enter Subject Code";
    }
    if (!isset($_POST['semester']) || $_POST['semester'] == '') {
        $messages['danger'][] = "Please enter the Semester";
    }
    if (!isset($_POST['checkbox']) || ($_POST['checkbox'] && count($_POST['checkbox']) != 12)) {
        $messages['danger'][] = "Please answer all the questions";
    }
    if (count($messages['danger']) == 0) {
        // submit
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO student (academicYear, course,subjectCode,subjectName, nameOfFaculty,semester, ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10,ans11,ans12)
            VALUES ('" . $_POST['academicYear'] . "', '" . $_POST['course'] . "','" . $_POST['subjectCode'] . "','" . $_POST['subjectName'] . "','" . $_POST['nameOfFaculty'] . "','" . $_POST['semester'] . "','" . $_POST['checkbox']['ans1'] . "','" . $_POST['checkbox']['ans2'] . "','" . $_POST['checkbox']['ans3'] . "','" . $_POST['checkbox']['ans4'] . "','" . $_POST['checkbox']['ans5'] . "','" . $_POST['checkbox']['ans6'] . "','" . $_POST['checkbox']['ans7'] . "','" . $_POST['checkbox']['ans8'] . "','" . $_POST['checkbox']['ans9'] . "','" . $_POST['checkbox']['ans10'] . "','" . $_POST['checkbox']['ans11'] . "','" . $_POST['checkbox']['ans12'] . "')";
            $conn->exec($sql);
            $messages['success'][] = "Your form has been submitted successfully.";
            $formValues = $_POST =[];
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
    'Has the Faculty covered entire syllabus as prescribed by University',
    'Has the Faculty covered relevant topics beyond the syllabus',
    'Effectiveness of Faculty in terms of: (a) Technical Content/Course Conten',
    'Effectiveness of Faculty in terms of: (b) Communication skills',
    'Effectiveness of Faculty in terms of: (c) Use of ICT tools',
    'Pace on which contents were covered',
    'Motivation and inspiration for students to learn',
    'Support for the development of students’ skill: (i) Practical Demonstration',
    'Support for the development of students’ skill: (ii) Hands on training',
    'Clarity of expectation of students',
    'Feedback provided on Students’ progress',
    'Willingness to offer help and advice to students',
];
