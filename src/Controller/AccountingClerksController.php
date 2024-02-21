<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AccountingClerks Controller
 *
 * @property \App\Model\Table\AccountingClerksTable $AccountingClerks
 */
class AccountingClerksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AccountingClerks->find();
        $accountingClerks = $this->paginate($query);

        $this->set(compact('accountingClerks'));
    }

    /**
     * View method
     *
     * @param string|null $id Accounting Clerk id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountingClerk = $this->AccountingClerks->get($id, contain: ['Recipients', 'SocialInsuranceProviders']);
        $this->set(compact('accountingClerk'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountingClerk = $this->AccountingClerks->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountingClerk = $this->AccountingClerks->patchEntity($accountingClerk, $this->request->getData());
            if ($this->AccountingClerks->save($accountingClerk)) {
                $this->Flash->success(__('The accounting clerk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting clerk could not be saved. Please, try again.'));
        }
        $recipients = $this->AccountingClerks->Recipients->find('list', limit: 200)->all();
        $socialInsuranceProviders = $this->AccountingClerks->SocialInsuranceProviders->find('list', limit: 200)->all();
        $this->set(compact('accountingClerk', 'recipients', 'socialInsuranceProviders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accounting Clerk id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountingClerk = $this->AccountingClerks->get($id, contain: ['Recipients', 'SocialInsuranceProviders']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountingClerk = $this->AccountingClerks->patchEntity($accountingClerk, $this->request->getData());
            if ($this->AccountingClerks->save($accountingClerk)) {
                $this->Flash->success(__('The accounting clerk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting clerk could not be saved. Please, try again.'));
        }
        $recipients = $this->AccountingClerks->Recipients->find('list', limit: 200)->all();
        $socialInsuranceProviders = $this->AccountingClerks->SocialInsuranceProviders->find('list', limit: 200)->all();
        $this->set(compact('accountingClerk', 'recipients', 'socialInsuranceProviders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accounting Clerk id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountingClerk = $this->AccountingClerks->get($id);
        if ($this->AccountingClerks->delete($accountingClerk)) {
            $this->Flash->success(__('The accounting clerk has been deleted.'));
        } else {
            $this->Flash->error(__('The accounting clerk could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
