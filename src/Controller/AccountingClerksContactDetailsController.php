<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AccountingClerksContactDetails Controller
 *
 * @property \App\Model\Table\AccountingClerksContactDetailsTable $AccountingClerksContactDetails
 */
class AccountingClerksContactDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AccountingClerksContactDetails->find();
        $accountingClerksContactDetails = $this->paginate($query);

        $this->set(compact('accountingClerksContactDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Accounting Clerks Contact Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountingClerksContactDetail = $this->AccountingClerksContactDetails->get($id, contain: []);
        $this->set(compact('accountingClerksContactDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountingClerksContactDetail = $this->AccountingClerksContactDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountingClerksContactDetail = $this->AccountingClerksContactDetails->patchEntity($accountingClerksContactDetail, $this->request->getData());
            if ($this->AccountingClerksContactDetails->save($accountingClerksContactDetail)) {
                $this->Flash->success(__('The accounting clerks contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting clerks contact detail could not be saved. Please, try again.'));
        }
        $this->set(compact('accountingClerksContactDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accounting Clerks Contact Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountingClerksContactDetail = $this->AccountingClerksContactDetails->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountingClerksContactDetail = $this->AccountingClerksContactDetails->patchEntity($accountingClerksContactDetail, $this->request->getData());
            if ($this->AccountingClerksContactDetails->save($accountingClerksContactDetail)) {
                $this->Flash->success(__('The accounting clerks contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting clerks contact detail could not be saved. Please, try again.'));
        }
        $this->set(compact('accountingClerksContactDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accounting Clerks Contact Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountingClerksContactDetail = $this->AccountingClerksContactDetails->get($id);
        if ($this->AccountingClerksContactDetails->delete($accountingClerksContactDetail)) {
            $this->Flash->success(__('The accounting clerks contact detail has been deleted.'));
        } else {
            $this->Flash->error(__('The accounting clerks contact detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
