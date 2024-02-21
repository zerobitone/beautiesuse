<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Recipients Controller
 *
 * @property \App\Model\Table\RecipientsTable $Recipients
 */
class RecipientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Recipients->find();
        $recipients = $this->paginate($query);

        $this->set(compact('recipients'));
    }

    /**
     * View method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipient = $this->Recipients->get($id, contain: ['AccountingClerks', 'SocialInsuranceProviders', 'Doctors', 'RehabTypes', 'RecipientAddresses', 'RecipientsContactDetails', 'RehabStays']);
        $this->set(compact('recipient'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipient = $this->Recipients->newEmptyEntity();
        if ($this->request->is('post')) {
            $recipient = $this->Recipients->patchEntity($recipient, $this->request->getData());
            if ($this->Recipients->save($recipient)) {
                $this->Flash->success(__('The recipient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipient could not be saved. Please, try again.'));
        }
        $accountingClerks = $this->Recipients->AccountingClerks->find('list', limit: 200)->all();
        $socialInsuranceProviders = $this->Recipients->SocialInsuranceProviders->find('list', limit: 200)->all();
        $doctors = $this->Recipients->Doctors->find('list', limit: 200)->all();
        $rehabTypes = $this->Recipients->RehabTypes->find('list', limit: 200)->all();
        $this->set(compact('recipient', 'accountingClerks', 'socialInsuranceProviders', 'doctors', 'rehabTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipient = $this->Recipients->get($id, contain: ['AccountingClerks', 'SocialInsuranceProviders', 'Doctors', 'RehabTypes']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipient = $this->Recipients->patchEntity($recipient, $this->request->getData());
            if ($this->Recipients->save($recipient)) {
                $this->Flash->success(__('The recipient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipient could not be saved. Please, try again.'));
        }
        $accountingClerks = $this->Recipients->AccountingClerks->find('list', limit: 200)->all();
        $socialInsuranceProviders = $this->Recipients->SocialInsuranceProviders->find('list', limit: 200)->all();
        $doctors = $this->Recipients->Doctors->find('list', limit: 200)->all();
        $rehabTypes = $this->Recipients->RehabTypes->find('list', limit: 200)->all();
        $this->set(compact('recipient', 'accountingClerks', 'socialInsuranceProviders', 'doctors', 'rehabTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipient = $this->Recipients->get($id);
        if ($this->Recipients->delete($recipient)) {
            $this->Flash->success(__('The recipient has been deleted.'));
        } else {
            $this->Flash->error(__('The recipient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
