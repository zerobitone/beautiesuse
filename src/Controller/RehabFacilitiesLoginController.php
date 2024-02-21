<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RehabFacilitiesLogin Controller
 *
 * @property \App\Model\Table\RehabFacilitiesLoginTable $RehabFacilitiesLogin
 */
class RehabFacilitiesLoginController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RehabFacilitiesLogin->find();
        $rehabFacilitiesLogin = $this->paginate($query);

        $this->set(compact('rehabFacilitiesLogin'));
    }

    /**
     * View method
     *
     * @param string|null $id Rehab Facilities Login id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rehabFacilitiesLogin = $this->RehabFacilitiesLogin->get($id, contain: []);
        $this->set(compact('rehabFacilitiesLogin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rehabFacilitiesLogin = $this->RehabFacilitiesLogin->newEmptyEntity();
        if ($this->request->is('post')) {
            $rehabFacilitiesLogin = $this->RehabFacilitiesLogin->patchEntity($rehabFacilitiesLogin, $this->request->getData());
            if ($this->RehabFacilitiesLogin->save($rehabFacilitiesLogin)) {
                $this->Flash->success(__('The rehab facilities login has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab facilities login could not be saved. Please, try again.'));
        }
        $this->set(compact('rehabFacilitiesLogin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rehab Facilities Login id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rehabFacilitiesLogin = $this->RehabFacilitiesLogin->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rehabFacilitiesLogin = $this->RehabFacilitiesLogin->patchEntity($rehabFacilitiesLogin, $this->request->getData());
            if ($this->RehabFacilitiesLogin->save($rehabFacilitiesLogin)) {
                $this->Flash->success(__('The rehab facilities login has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab facilities login could not be saved. Please, try again.'));
        }
        $this->set(compact('rehabFacilitiesLogin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rehab Facilities Login id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rehabFacilitiesLogin = $this->RehabFacilitiesLogin->get($id);
        if ($this->RehabFacilitiesLogin->delete($rehabFacilitiesLogin)) {
            $this->Flash->success(__('The rehab facilities login has been deleted.'));
        } else {
            $this->Flash->error(__('The rehab facilities login could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
