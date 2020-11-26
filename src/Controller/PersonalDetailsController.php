<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Utility\Hash;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PersonalDetailsController extends AppController
{
    public function add()
    {
        $personalDetails = $this->PersonalDetails->newEmptyEntity();
        $error = [];
        if ($this->request->is(['post', 'put', 'patch'])) {
            $record = $this->PersonalDetails->patchEntity($personalDetails, $this->request->getData());
            if ($this->PersonalDetails->save($record)) {
                $this->Flash->success(__('Your form has been submitted.'));
                return $this->redirect(['action' => 'add']);
            } else {
                foreach (Hash::flatten($record->getErrors()) as $eKey => $eVal) {
                    $error[] = $eVal;
                }
                $this->Flash->error(implode("<br />", $error), ["escape" => false]);
            }
            $this->Flash->error(__('Unable to add your response.'));
        }

        $this->loadModel('Country');
        $countriesList = $this->Country->find('list')->where(['status' => true])->order(['name' => 'ASC'])->enableHydration(false)->toArray();

        $this->set(compact('countriesList', 'personalDetails'));
    }
}
