<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RehabFacilitiesRegistration Controller
 *
 * @property \App\Model\Table\RehabFacilitiesRegistrationTable $RehabFacilitiesRegistration
 */
class RehabFacilitiesRegistrationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RehabFacilitiesRegistration->find();
        $rehabFacilitiesRegistration = $this->paginate($query);

        $this->set(compact('rehabFacilitiesRegistration'));
    }

    /**
     * View method
     *
     * @param string|null $id Rehab Facilities Registration id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rehabFacilitiesRegistration = $this->RehabFacilitiesRegistration->get($id, contain: []);
        $this->set(compact('rehabFacilitiesRegistration'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rehabFacilitiesRegistration = $this->RehabFacilitiesRegistration->newEmptyEntity();
        if ($this->request->is('post')) {
            $rehabFacilitiesRegistration = $this->RehabFacilitiesRegistration->patchEntity($rehabFacilitiesRegistration, $this->request->getData());
            if ($this->RehabFacilitiesRegistration->save($rehabFacilitiesRegistration)) {
                $this->Flash->success(__('The rehab facilities registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab facilities registration could not be saved. Please, try again.'));
        }
        $this->set(compact('rehabFacilitiesRegistration'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rehab Facilities Registration id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rehabFacilitiesRegistration = $this->RehabFacilitiesRegistration->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rehabFacilitiesRegistration = $this->RehabFacilitiesRegistration->patchEntity($rehabFacilitiesRegistration, $this->request->getData());
            if ($this->RehabFacilitiesRegistration->save($rehabFacilitiesRegistration)) {
                $this->Flash->success(__('The rehab facilities registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab facilities registration could not be saved. Please, try again.'));
        }
        $this->set(compact('rehabFacilitiesRegistration'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rehab Facilities Registration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rehabFacilitiesRegistration = $this->RehabFacilitiesRegistration->get($id);
        if ($this->RehabFacilitiesRegistration->delete($rehabFacilitiesRegistration)) {
            $this->Flash->success(__('The rehab facilities registration has been deleted.'));
        } else {
            $this->Flash->error(__('The rehab facilities registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
