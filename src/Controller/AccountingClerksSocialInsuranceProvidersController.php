<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AccountingClerksSocialInsuranceProviders Controller
 *
 * @property \App\Model\Table\AccountingClerksSocialInsuranceProvidersTable $AccountingClerksSocialInsuranceProviders
 */
class AccountingClerksSocialInsuranceProvidersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AccountingClerksSocialInsuranceProviders->find()
            ->contain(['SocialInsuranceProviders']);
        $accountingClerksSocialInsuranceProviders = $this->paginate($query);

        $this->set(compact('accountingClerksSocialInsuranceProviders'));
    }

    /**
     * View method
     *
     * @param string|null $id Accounting Clerks Social Insurance Provider id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountingClerksSocialInsuranceProvider = $this->AccountingClerksSocialInsuranceProviders->get($id, contain: ['SocialInsuranceProviders']);
        $this->set(compact('accountingClerksSocialInsuranceProvider'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountingClerksSocialInsuranceProvider = $this->AccountingClerksSocialInsuranceProviders->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountingClerksSocialInsuranceProvider = $this->AccountingClerksSocialInsuranceProviders->patchEntity($accountingClerksSocialInsuranceProvider, $this->request->getData());
            if ($this->AccountingClerksSocialInsuranceProviders->save($accountingClerksSocialInsuranceProvider)) {
                $this->Flash->success(__('The accounting clerks social insurance provider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting clerks social insurance provider could not be saved. Please, try again.'));
        }
        $socialInsuranceProviders = $this->AccountingClerksSocialInsuranceProviders->SocialInsuranceProviders->find('list', limit: 200)->all();
        $this->set(compact('accountingClerksSocialInsuranceProvider', 'socialInsuranceProviders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accounting Clerks Social Insurance Provider id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountingClerksSocialInsuranceProvider = $this->AccountingClerksSocialInsuranceProviders->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountingClerksSocialInsuranceProvider = $this->AccountingClerksSocialInsuranceProviders->patchEntity($accountingClerksSocialInsuranceProvider, $this->request->getData());
            if ($this->AccountingClerksSocialInsuranceProviders->save($accountingClerksSocialInsuranceProvider)) {
                $this->Flash->success(__('The accounting clerks social insurance provider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting clerks social insurance provider could not be saved. Please, try again.'));
        }
        $socialInsuranceProviders = $this->AccountingClerksSocialInsuranceProviders->SocialInsuranceProviders->find('list', limit: 200)->all();
        $this->set(compact('accountingClerksSocialInsuranceProvider', 'socialInsuranceProviders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accounting Clerks Social Insurance Provider id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountingClerksSocialInsuranceProvider = $this->AccountingClerksSocialInsuranceProviders->get($id);
        if ($this->AccountingClerksSocialInsuranceProviders->delete($accountingClerksSocialInsuranceProvider)) {
            $this->Flash->success(__('The accounting clerks social insurance provider has been deleted.'));
        } else {
            $this->Flash->error(__('The accounting clerks social insurance provider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
