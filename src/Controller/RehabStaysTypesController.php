<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RehabStaysTypes Controller
 *
 * @property \App\Model\Table\RehabStaysTypesTable $RehabStaysTypes
 */
class RehabStaysTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RehabStaysTypes->find()
            ->contain(['RehabStays', 'RehabTypes']);
        $rehabStaysTypes = $this->paginate($query);

        $this->set(compact('rehabStaysTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Rehab Stays Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rehabStaysType = $this->RehabStaysTypes->get($id, contain: ['RehabStays', 'RehabTypes']);
        $this->set(compact('rehabStaysType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rehabStaysType = $this->RehabStaysTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $rehabStaysType = $this->RehabStaysTypes->patchEntity($rehabStaysType, $this->request->getData());
            if ($this->RehabStaysTypes->save($rehabStaysType)) {
                $this->Flash->success(__('The rehab stays type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab stays type could not be saved. Please, try again.'));
        }
        $rehabStays = $this->RehabStaysTypes->RehabStays->find('list', limit: 200)->all();
        $rehabTypes = $this->RehabStaysTypes->RehabTypes->find('list', limit: 200)->all();
        $this->set(compact('rehabStaysType', 'rehabStays', 'rehabTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rehab Stays Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rehabStaysType = $this->RehabStaysTypes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rehabStaysType = $this->RehabStaysTypes->patchEntity($rehabStaysType, $this->request->getData());
            if ($this->RehabStaysTypes->save($rehabStaysType)) {
                $this->Flash->success(__('The rehab stays type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab stays type could not be saved. Please, try again.'));
        }
        $rehabStays = $this->RehabStaysTypes->RehabStays->find('list', limit: 200)->all();
        $rehabTypes = $this->RehabStaysTypes->RehabTypes->find('list', limit: 200)->all();
        $this->set(compact('rehabStaysType', 'rehabStays', 'rehabTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rehab Stays Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rehabStaysType = $this->RehabStaysTypes->get($id);
        if ($this->RehabStaysTypes->delete($rehabStaysType)) {
            $this->Flash->success(__('The rehab stays type has been deleted.'));
        } else {
            $this->Flash->error(__('The rehab stays type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
