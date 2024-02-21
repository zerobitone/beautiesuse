<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SocialInsuranceProvidersContactDetails Controller
 *
 * @property \App\Model\Table\SocialInsuranceProvidersContactDetailsTable $SocialInsuranceProvidersContactDetails
 */
class SocialInsuranceProvidersContactDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SocialInsuranceProvidersContactDetails->find();
        $socialInsuranceProvidersContactDetails = $this->paginate($query);

        $this->set(compact('socialInsuranceProvidersContactDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Social Insurance Providers Contact Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialInsuranceProvidersContactDetail = $this->SocialInsuranceProvidersContactDetails->get($id, contain: []);
        $this->set(compact('socialInsuranceProvidersContactDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialInsuranceProvidersContactDetail = $this->SocialInsuranceProvidersContactDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $socialInsuranceProvidersContactDetail = $this->SocialInsuranceProvidersContactDetails->patchEntity($socialInsuranceProvidersContactDetail, $this->request->getData());
            if ($this->SocialInsuranceProvidersContactDetails->save($socialInsuranceProvidersContactDetail)) {
                $this->Flash->success(__('The social insurance providers contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social insurance providers contact detail could not be saved. Please, try again.'));
        }
        $this->set(compact('socialInsuranceProvidersContactDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Social Insurance Providers Contact Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialInsuranceProvidersContactDetail = $this->SocialInsuranceProvidersContactDetails->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialInsuranceProvidersContactDetail = $this->SocialInsuranceProvidersContactDetails->patchEntity($socialInsuranceProvidersContactDetail, $this->request->getData());
            if ($this->SocialInsuranceProvidersContactDetails->save($socialInsuranceProvidersContactDetail)) {
                $this->Flash->success(__('The social insurance providers contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social insurance providers contact detail could not be saved. Please, try again.'));
        }
        $this->set(compact('socialInsuranceProvidersContactDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Insurance Providers Contact Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialInsuranceProvidersContactDetail = $this->SocialInsuranceProvidersContactDetails->get($id);
        if ($this->SocialInsuranceProvidersContactDetails->delete($socialInsuranceProvidersContactDetail)) {
            $this->Flash->success(__('The social insurance providers contact detail has been deleted.'));
        } else {
            $this->Flash->error(__('The social insurance providers contact detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
