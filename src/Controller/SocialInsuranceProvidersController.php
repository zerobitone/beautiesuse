<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SocialInsuranceProviders Controller
 *
 * @property \App\Model\Table\SocialInsuranceProvidersTable $SocialInsuranceProviders
 */
class SocialInsuranceProvidersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SocialInsuranceProviders->find();
        $socialInsuranceProviders = $this->paginate($query);

        $this->set(compact('socialInsuranceProviders'));
    }

    /**
     * View method
     *
     * @param string|null $id Social Insurance Provider id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialInsuranceProvider = $this->SocialInsuranceProviders->get($id, contain: ['AccountingClerks', 'Recipients']);
        $this->set(compact('socialInsuranceProvider'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialInsuranceProvider = $this->SocialInsuranceProviders->newEmptyEntity();
        if ($this->request->is('post')) {
            $socialInsuranceProvider = $this->SocialInsuranceProviders->patchEntity($socialInsuranceProvider, $this->request->getData());
            if ($this->SocialInsuranceProviders->save($socialInsuranceProvider)) {
                $this->Flash->success(__('The social insurance provider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social insurance provider could not be saved. Please, try again.'));
        }
        $accountingClerks = $this->SocialInsuranceProviders->AccountingClerks->find('list', limit: 200)->all();
        $recipients = $this->SocialInsuranceProviders->Recipients->find('list', limit: 200)->all();
        $this->set(compact('socialInsuranceProvider', 'accountingClerks', 'recipients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Social Insurance Provider id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialInsuranceProvider = $this->SocialInsuranceProviders->get($id, contain: ['AccountingClerks', 'Recipients']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialInsuranceProvider = $this->SocialInsuranceProviders->patchEntity($socialInsuranceProvider, $this->request->getData());
            if ($this->SocialInsuranceProviders->save($socialInsuranceProvider)) {
                $this->Flash->success(__('The social insurance provider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social insurance provider could not be saved. Please, try again.'));
        }
        $accountingClerks = $this->SocialInsuranceProviders->AccountingClerks->find('list', limit: 200)->all();
        $recipients = $this->SocialInsuranceProviders->Recipients->find('list', limit: 200)->all();
        $this->set(compact('socialInsuranceProvider', 'accountingClerks', 'recipients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Insurance Provider id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialInsuranceProvider = $this->SocialInsuranceProviders->get($id);
        if ($this->SocialInsuranceProviders->delete($socialInsuranceProvider)) {
            $this->Flash->success(__('The social insurance provider has been deleted.'));
        } else {
            $this->Flash->error(__('The social insurance provider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
