<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RehabTypes Controller
 *
 * @property \App\Model\Table\RehabTypesTable $RehabTypes
 */
class RehabTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RehabTypes->find();
        $rehabTypes = $this->paginate($query);

        $this->set(compact('rehabTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Rehab Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rehabType = $this->RehabTypes->get($id, contain: ['Recipients']);
        $this->set(compact('rehabType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rehabType = $this->RehabTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $rehabType = $this->RehabTypes->patchEntity($rehabType, $this->request->getData());
            if ($this->RehabTypes->save($rehabType)) {
                $this->Flash->success(__('The rehab type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab type could not be saved. Please, try again.'));
        }
        $recipients = $this->RehabTypes->Recipients->find('list', limit: 200)->all();
        $this->set(compact('rehabType', 'recipients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rehab Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rehabType = $this->RehabTypes->get($id, contain: ['Recipients']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rehabType = $this->RehabTypes->patchEntity($rehabType, $this->request->getData());
            if ($this->RehabTypes->save($rehabType)) {
                $this->Flash->success(__('The rehab type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rehab type could not be saved. Please, try again.'));
        }
        $recipients = $this->RehabTypes->Recipients->find('list', limit: 200)->all();
        $this->set(compact('rehabType', 'recipients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rehab Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rehabType = $this->RehabTypes->get($id);
        if ($this->RehabTypes->delete($rehabType)) {
            $this->Flash->success(__('The rehab type has been deleted.'));
        } else {
            $this->Flash->error(__('The rehab type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
