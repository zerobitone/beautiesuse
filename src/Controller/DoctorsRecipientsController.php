<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DoctorsRecipients Controller
 *
 * @property \App\Model\Table\DoctorsRecipientsTable $DoctorsRecipients
 */
class DoctorsRecipientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DoctorsRecipients->find()
            ->contain(['Doctors', 'Recipients']);
        $doctorsRecipients = $this->paginate($query);

        $this->set(compact('doctorsRecipients'));
    }

    /**
     * View method
     *
     * @param string|null $id Doctors Recipient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doctorsRecipient = $this->DoctorsRecipients->get($id, contain: ['Doctors', 'Recipients']);
        $this->set(compact('doctorsRecipient'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doctorsRecipient = $this->DoctorsRecipients->newEmptyEntity();
        if ($this->request->is('post')) {
            $doctorsRecipient = $this->DoctorsRecipients->patchEntity($doctorsRecipient, $this->request->getData());
            if ($this->DoctorsRecipients->save($doctorsRecipient)) {
                $this->Flash->success(__('The doctors recipient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doctors recipient could not be saved. Please, try again.'));
        }
        $doctors = $this->DoctorsRecipients->Doctors->find('list', limit: 200)->all();
        $recipients = $this->DoctorsRecipients->Recipients->find('list', limit: 200)->all();
        $this->set(compact('doctorsRecipient', 'doctors', 'recipients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Doctors Recipient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doctorsRecipient = $this->DoctorsRecipients->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doctorsRecipient = $this->DoctorsRecipients->patchEntity($doctorsRecipient, $this->request->getData());
            if ($this->DoctorsRecipients->save($doctorsRecipient)) {
                $this->Flash->success(__('The doctors recipient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doctors recipient could not be saved. Please, try again.'));
        }
        $doctors = $this->DoctorsRecipients->Doctors->find('list', limit: 200)->all();
        $recipients = $this->DoctorsRecipients->Recipients->find('list', limit: 200)->all();
        $this->set(compact('doctorsRecipient', 'doctors', 'recipients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Doctors Recipient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doctorsRecipient = $this->DoctorsRecipients->get($id);
        if ($this->DoctorsRecipients->delete($doctorsRecipient)) {
            $this->Flash->success(__('The doctors recipient has been deleted.'));
        } else {
            $this->Flash->error(__('The doctors recipient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
