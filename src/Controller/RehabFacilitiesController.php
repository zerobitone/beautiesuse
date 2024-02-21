<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RehabFacilities Controller
 *
 * @property \App\Model\Table\RehabFacilitiesTable $RehabFacilities
 */
class RehabFacilitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RehabFacilities->find();
        $rehabFacilities = $this->paginate($query);

        $this->set(compact('rehabFacilities'));
    }

    /**
     * View method
     *
     * @param string|null $id Rehab Facility id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rehabFacility = $this->RehabFacilities->get($id, contain: []);
        $this->set(compact('rehabFacility'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rehabFacility = $this->RehabFacilities->newEmptyEntity();
        if ($this->request->is('post')) {
            $rehabFacility = $this->RehabFacilities->patchEntity($rehabFacility, $this->request->getData());
            if ($this->RehabFacilities->save($rehabFacility)) {
                $this->Flash->success(__('The rehab facility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab facility could not be saved. Please, try again.'));
        }
        $this->set(compact('rehabFacility'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rehab Facility id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rehabFacility = $this->RehabFacilities->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rehabFacility = $this->RehabFacilities->patchEntity($rehabFacility, $this->request->getData());
            if ($this->RehabFacilities->save($rehabFacility)) {
                $this->Flash->success(__('The rehab facility has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab facility could not be saved. Please, try again.'));
        }
        $this->set(compact('rehabFacility'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rehab Facility id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rehabFacility = $this->RehabFacilities->get($id);
        if ($this->RehabFacilities->delete($rehabFacility)) {
            $this->Flash->success(__('The rehab facility has been deleted.'));
        } else {
            $this->Flash->error(__('The rehab facility could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
