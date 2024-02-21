<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DoctorsRegistration Controller
 *
 * @property \App\Model\Table\DoctorsRegistrationTable $DoctorsRegistration
 */
class DoctorsRegistrationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DoctorsRegistration->find();
        $doctorsRegistration = $this->paginate($query);

        $this->set(compact('doctorsRegistration'));
    }

    /**
     * View method
     *
     * @param string|null $id Doctors Registration id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doctorsRegistration = $this->DoctorsRegistration->get($id, contain: []);
        $this->set(compact('doctorsRegistration'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doctorsRegistration = $this->DoctorsRegistration->newEmptyEntity();
        if ($this->request->is('post')) {
            $doctorsRegistration = $this->DoctorsRegistration->patchEntity($doctorsRegistration, $this->request->getData());
            if ($this->DoctorsRegistration->save($doctorsRegistration)) {
                $this->Flash->success(__('The doctors registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doctors registration could not be saved. Please, try again.'));
        }
        $this->set(compact('doctorsRegistration'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Doctors Registration id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doctorsRegistration = $this->DoctorsRegistration->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doctorsRegistration = $this->DoctorsRegistration->patchEntity($doctorsRegistration, $this->request->getData());
            if ($this->DoctorsRegistration->save($doctorsRegistration)) {
                $this->Flash->success(__('The doctors registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doctors registration could not be saved. Please, try again.'));
        }
        $this->set(compact('doctorsRegistration'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Doctors Registration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doctorsRegistration = $this->DoctorsRegistration->get($id);
        if ($this->DoctorsRegistration->delete($doctorsRegistration)) {
            $this->Flash->success(__('The doctors registration has been deleted.'));
        } else {
            $this->Flash->error(__('The doctors registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
