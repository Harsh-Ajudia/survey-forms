<?php

require_once(__DIR__ . '/../_generic/db.php');
if (isset($_POST['admissionYear']) && $_POST['admissionYear']) {
    $formValues = $_POST;
    echo '<pre>';
    print_r($formValues);
    $messages['danger'] = [];
    $messages['success'] = [];
    if ($_POST['admissionYear'] == '') {
        $messages['danger'][] = "Please enter Academic year";
    }
    if ($_POST['name'] == '') {
        $messages['danger'][] = "Please enter name";
    }
    if ($_POST['branch'] == '') {
        $messages['branch'][] = "Please enter the branch";
    }
    if ($_POST['department'] == '') {
        $messages['department'][] = "Please enter department";
    }
    if ($_POST['enrollmentNo'] == '') {
        $messages['enrollmentNo'][] = "Please enter Enrollment No";
    }
    if (!isset($_POST['semester']) || $_POST['semester'] == '') {
        $messages['danger'][] = "Please enter the Semester";
    }
    if (!isset($_POST['checkbox']) || ($_POST['checkbox'] && count($_POST['checkbox']) != 18)) {
        $messages['danger'][] = "Please answer all the questions";
    }
    if (count($messages['danger']) == 0) {
        // submit
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO institute_facility (admissionYear, name,branch, department,semester,enrollmentNo, ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10,ans11,ans12,ans13,ans14,ans15,ans16,ans17,ans18, comments)
            VALUES (" . $_POST['admissionYear'] . ", '" . $_POST['name'] . "','" . $_POST['branch'] . "','" . $_POST['department'] . "','" . $_POST['semester'] . "','" . $_POST['enrollmentNo'] . "','" . $_POST['checkbox']['ans1'] . "','" . $_POST['checkbox']['ans2'] . "','" . $_POST['checkbox']['ans3'] . "','" . $_POST['checkbox']['ans4'] . "','" . $_POST['checkbox']['ans5'] . "','" . $_POST['checkbox']['ans6'] . "','" . $_POST['checkbox']['ans7'] . "','" . $_POST['checkbox']['ans8'] . "','" . $_POST['checkbox']['ans9'] . "','" . $_POST['checkbox']['ans10'] . "','" . $_POST['checkbox']['ans11'] . "','" . $_POST['checkbox']['ans12'] . "','" . $_POST['checkbox']['ans13'] . "','" . $_POST['checkbox']['ans14'] . "','" . $_POST['checkbox']['ans15'] . "','" . $_POST['checkbox']['ans16'] . "','" . $_POST['checkbox']['ans17'] . "','" . $_POST['checkbox']['ans18'] . "','" . $_POST['comments'] . "')";
            $conn->exec($sql);
            $messages['success'][] = "Your form has been submitted successfully.";
            $formValues = $_POST =[];
            unset($_POST);
            header("Location: thank-you.php");
            
        } catch (PDOException $e) {
            $messages['danger'][] = $sql . "<br>" . $e->getMessage();
            $messages['danger'][] = "Unable to submit your response";

        }

        $conn = null;
    }
}

$questions = [
    'The Prescribed book and reading materials are available in  the Library',
    'Reading room and common room are available in the  College building',
    'Available reading space in Library is satisfactory',
    'The Library staffs are cooperative and helpful',
    'Photocopy facility in the campus is available and satisfactory',
    'Internet facilities are available in the department',
    'Online educational resources are available and accessible',
    'The office staff of Student Section/Exam Section in the  institute are helpful',
    'Result and attendance record display on time',
    'Toilet/Washrooms are hygienic and properly maintained',
    'Clean drinking water is available in the department and on  the campus',
    'Grievances/Problems are Redressed/Solved well in time',
    'The functioning of the placement cell(s) in the College/Department is satisfactory',
    'Equipment in the labs is in working condition',
    'The campus is green and Eco-friendly',
    'The Buildings/Classrooms are accessible to differently abled  persons',
    'The classrooms are clean and well maintained',
    'The campus has adequate power supply',
];
