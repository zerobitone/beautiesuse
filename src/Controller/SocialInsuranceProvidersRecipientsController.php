<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SocialInsuranceProvidersRecipients Controller
 *
 * @property \App\Model\Table\SocialInsuranceProvidersRecipientsTable $SocialInsuranceProvidersRecipients
 */
class SocialInsuranceProvidersRecipientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SocialInsuranceProvidersRecipients->find()
            ->contain(['SocialInsuranceProviders', 'Recipients']);
        $socialInsuranceProvidersRecipients = $this->paginate($query);

        $this->set(compact('socialInsuranceProvidersRecipients'));
    }

    /**
     * View method
     *
     * @param string|null $id Social Insurance Providers Recipient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialInsuranceProvidersRecipient = $this->SocialInsuranceProvidersRecipients->get($id, contain: ['SocialInsuranceProviders', 'Recipients']);
        $this->set(compact('socialInsuranceProvidersRecipient'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialInsuranceProvidersRecipient = $this->SocialInsuranceProvidersRecipients->newEmptyEntity();
        if ($this->request->is('post')) {
            $socialInsuranceProvidersRecipient = $this->SocialInsuranceProvidersRecipients->patchEntity($socialInsuranceProvidersRecipient, $this->request->getData());
            if ($this->SocialInsuranceProvidersRecipients->save($socialInsuranceProvidersRecipient)) {
                $this->Flash->success(__('The social insurance providers recipient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social insurance providers recipient could not be saved. Please, try again.'));
        }
        $socialInsuranceProviders = $this->SocialInsuranceProvidersRecipients->SocialInsuranceProviders->find('list', limit: 200)->all();
        $recipients = $this->SocialInsuranceProvidersRecipients->Recipients->find('list', limit: 200)->all();
        $this->set(compact('socialInsuranceProvidersRecipient', 'socialInsuranceProviders', 'recipients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Social Insurance Providers Recipient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialInsuranceProvidersRecipient = $this->SocialInsuranceProvidersRecipients->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialInsuranceProvidersRecipient = $this->SocialInsuranceProvidersRecipients->patchEntity($socialInsuranceProvidersRecipient, $this->request->getData());
            if ($this->SocialInsuranceProvidersRecipients->save($socialInsuranceProvidersRecipient)) {
                $this->Flash->success(__('The social insurance providers recipient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social insurance providers recipient could not be saved. Please, try again.'));
        }
        $socialInsuranceProviders = $this->SocialInsuranceProvidersRecipients->SocialInsuranceProviders->find('list', limit: 200)->all();
        $recipients = $this->SocialInsuranceProvidersRecipients->Recipients->find('list', limit: 200)->all();
        $this->set(compact('socialInsuranceProvidersRecipient', 'socialInsuranceProviders', 'recipients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Insurance Providers Recipient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialInsuranceProvidersRecipient = $this->SocialInsuranceProvidersRecipients->get($id);
        if ($this->SocialInsuranceProvidersRecipients->delete($socialInsuranceProvidersRecipient)) {
            $this->Flash->success(__('The social insurance providers recipient has been deleted.'));
        } else {
            $this->Flash->error(__('The social insurance providers recipient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
