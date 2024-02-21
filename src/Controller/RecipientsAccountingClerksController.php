<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RecipientsAccountingClerks Controller
 *
 * @property \App\Model\Table\RecipientsAccountingClerksTable $RecipientsAccountingClerks
 */
class RecipientsAccountingClerksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RecipientsAccountingClerks->find()
            ->contain(['AccountingClerks']);
        $recipientsAccountingClerks = $this->paginate($query);

        $this->set(compact('recipientsAccountingClerks'));
    }

    /**
     * View method
     *
     * @param string|null $id Recipients Accounting Clerk id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipientsAccountingClerk = $this->RecipientsAccountingClerks->get($id, contain: ['AccountingClerks']);
        $this->set(compact('recipientsAccountingClerk'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipientsAccountingClerk = $this->RecipientsAccountingClerks->newEmptyEntity();
        if ($this->request->is('post')) {
            $recipientsAccountingClerk = $this->RecipientsAccountingClerks->patchEntity($recipientsAccountingClerk, $this->request->getData());
            if ($this->RecipientsAccountingClerks->save($recipientsAccountingClerk)) {
                $this->Flash->success(__('The recipients accounting clerk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipients accounting clerk could not be saved. Please, try again.'));
        }
        $accountingClerks = $this->RecipientsAccountingClerks->AccountingClerks->find('list', limit: 200)->all();
        $this->set(compact('recipientsAccountingClerk', 'accountingClerks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipients Accounting Clerk id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipientsAccountingClerk = $this->RecipientsAccountingClerks->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipientsAccountingClerk = $this->RecipientsAccountingClerks->patchEntity($recipientsAccountingClerk, $this->request->getData());
            if ($this->RecipientsAccountingClerks->save($recipientsAccountingClerk)) {
                $this->Flash->success(__('The recipients accounting clerk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipients accounting clerk could not be saved. Please, try again.'));
        }
        $accountingClerks = $this->RecipientsAccountingClerks->AccountingClerks->find('list', limit: 200)->all();
        $this->set(compact('recipientsAccountingClerk', 'accountingClerks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipients Accounting Clerk id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipientsAccountingClerk = $this->RecipientsAccountingClerks->get($id);
        if ($this->RecipientsAccountingClerks->delete($recipientsAccountingClerk)) {
            $this->Flash->success(__('The recipients accounting clerk has been deleted.'));
        } else {
            $this->Flash->error(__('The recipients accounting clerk could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
