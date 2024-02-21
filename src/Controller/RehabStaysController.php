<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RehabStays Controller
 *
 * @property \App\Model\Table\RehabStaysTable $RehabStays
 */
class RehabStaysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RehabStays->find()
            ->contain(['Recipients', 'SocialInsuranceProviders', 'RehabFacilities']);
        $rehabStays = $this->paginate($query);

        $this->set(compact('rehabStays'));
    }

    /**
     * View method
     *
     * @param string|null $id Rehab Stay id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rehabStay = $this->RehabStays->get($id, contain: ['Recipients', 'SocialInsuranceProviders', 'RehabFacilities']);
        $this->set(compact('rehabStay'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rehabStay = $this->RehabStays->newEmptyEntity();
        if ($this->request->is('post')) {
            $rehabStay = $this->RehabStays->patchEntity($rehabStay, $this->request->getData());
            if ($this->RehabStays->save($rehabStay)) {
                $this->Flash->success(__('The rehab stay has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab stay could not be saved. Please, try again.'));
        }
        $recipients = $this->RehabStays->Recipients->find('list', limit: 200)->all();
        $socialInsuranceProviders = $this->RehabStays->SocialInsuranceProviders->find('list', limit: 200)->all();
        $rehabFacilities = $this->RehabStays->RehabFacilities->find('list', limit: 200)->all();
        $this->set(compact('rehabStay', 'recipients', 'socialInsuranceProviders', 'rehabFacilities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rehab Stay id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rehabStay = $this->RehabStays->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rehabStay = $this->RehabStays->patchEntity($rehabStay, $this->request->getData());
            if ($this->RehabStays->save($rehabStay)) {
                $this->Flash->success(__('The rehab stay has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab stay could not be saved. Please, try again.'));
        }
        $recipients = $this->RehabStays->Recipients->find('list', limit: 200)->all();
        $socialInsuranceProviders = $this->RehabStays->SocialInsuranceProviders->find('list', limit: 200)->all();
        $rehabFacilities = $this->RehabStays->RehabFacilities->find('list', limit: 200)->all();
        $this->set(compact('rehabStay', 'recipients', 'socialInsuranceProviders', 'rehabFacilities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rehab Stay id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rehabStay = $this->RehabStays->get($id);
        if ($this->RehabStays->delete($rehabStay)) {
            $this->Flash->success(__('The rehab stay has been deleted.'));
        } else {
            $this->Flash->error(__('The rehab stay could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
