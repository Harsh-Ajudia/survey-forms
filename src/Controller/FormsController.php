<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Utility\Hash;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class FormsController extends AppController
{
    public function teachingLearning()
    {
        $this->loadModel('TeachingLearning');
        $teachingLearning = $this->TeachingLearning->newEmptyEntity();
        $error = [];
        if ($this->request->is(['post', 'put', 'patch'])) {
            $record = $this->TeachingLearning->patchEntity($teachingLearning, $this->request->getData());
            if ($this->TeachingLearning->save($record)) {
                $this->Flash->success(__('Your form has been submitted.'));
                return $this->redirect(['action' => 'teachingLearning']);
            } else {
                foreach (Hash::flatten($record->getErrors()) as $eKey => $eVal) {
                    $error[] = $eVal;
                }
                $this->Flash->error(implode("<br />", $error), ["escape" => false]);
            }
            pr($record);
            $this->Flash->error(__('Unable to add your response.'));
        }
        $questions = [
            'Do you feel you obtained sufficient technical knowledge (in theory) at department level?',
            'Do you feel you obtained sufficient technical knowledge (in practical) at department level?',
            'How many percentage of teachers use ICT tools such as LCD projector, Multimedia, etc. while teaching? 5(Above 70%) 4(50 – 69%)  3(40 – 49%) 2(30 – 39%)',
            'Teachers inform you about your expected competencies, course outcomes and program outcomes',
            'The Faculties illustrate the concepts through examples and applications.',
            'Faculties are able to identify your strength/ weaknesses and appreciate /help you to overcome them.',
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
        $this->set(compact('teachingLearning', 'questions'));
    }

    public function laboratory()
    {
        $this->loadModel('Laboratory');
        $laboratoryEntity = $this->Laboratory->newEmptyEntity();
        $error = [];
        if ($this->request->is(['post', 'put', 'patch'])) {
            $record = $this->Laboratory->patchEntity($laboratoryEntity, $this->request->getData());
            if ($this->Laboratory->save($record)) {
                $this->Flash->success(__('Your form has been submitted.'));
                return $this->redirect(['action' => 'laboratory']);
            } else {
                foreach (Hash::flatten($record->getErrors()) as $eKey => $eVal) {
                    $error[] = $eVal;
                }
                $this->Flash->error(implode("<br />", $error), ["escape" => false]);
            }
            pr($record);
            $this->Flash->error(__('Unable to add your response.'));
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
        $this->set(compact('laboratoryEntity', 'questions'));
    }

    public function student()
    {
        $this->loadModel('Student');
        $studentEntity = $this->Student->newEmptyEntity();
        $error = [];
        if ($this->request->is(['post', 'put', 'patch'])) {
            $record = $this->Student->patchEntity($studentEntity, $this->request->getData());
            if ($this->Student->save($record)) {
                $this->Flash->success(__('Your form has been submitted.'));
                return $this->redirect(['action' => 'student']);
            } else {
                foreach (Hash::flatten($record->getErrors()) as $eKey => $eVal) {
                    $error[] = $eVal;
                }
                $this->Flash->error(implode("<br />", $error), ["escape" => false]);
            }
            pr($record);
            $this->Flash->error(__('Unable to add your response.'));
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
        $this->set(compact('studentEntity', 'questions'));
    }
}
