<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RecipientsRehabTypes Controller
 *
 * @property \App\Model\Table\RecipientsRehabTypesTable $RecipientsRehabTypes
 */
class RecipientsRehabTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RecipientsRehabTypes->find()
            ->contain(['Recipients', 'RehabTypes']);
        $recipientsRehabTypes = $this->paginate($query);

        $this->set(compact('recipientsRehabTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Recipients Rehab Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipientsRehabType = $this->RecipientsRehabTypes->get($id, contain: ['Recipients', 'RehabTypes']);
        $this->set(compact('recipientsRehabType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipientsRehabType = $this->RecipientsRehabTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $recipientsRehabType = $this->RecipientsRehabTypes->patchEntity($recipientsRehabType, $this->request->getData());
            if ($this->RecipientsRehabTypes->save($recipientsRehabType)) {
                $this->Flash->success(__('The recipients rehab type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipients rehab type could not be saved. Please, try again.'));
        }
        $recipients = $this->RecipientsRehabTypes->Recipients->find('list', limit: 200)->all();
        $rehabTypes = $this->RecipientsRehabTypes->RehabTypes->find('list', limit: 200)->all();
        $this->set(compact('recipientsRehabType', 'recipients', 'rehabTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipients Rehab Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipientsRehabType = $this->RecipientsRehabTypes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipientsRehabType = $this->RecipientsRehabTypes->patchEntity($recipientsRehabType, $this->request->getData());
            if ($this->RecipientsRehabTypes->save($recipientsRehabType)) {
                $this->Flash->success(__('The recipients rehab type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipients rehab type could not be saved. Please, try again.'));
        }
        $recipients = $this->RecipientsRehabTypes->Recipients->find('list', limit: 200)->all();
        $rehabTypes = $this->RecipientsRehabTypes->RehabTypes->find('list', limit: 200)->all();
        $this->set(compact('recipientsRehabType', 'recipients', 'rehabTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipients Rehab Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipientsRehabType = $this->RecipientsRehabTypes->get($id);
        if ($this->RecipientsRehabTypes->delete($recipientsRehabType)) {
            $this->Flash->success(__('The recipients rehab type has been deleted.'));
        } else {
            $this->Flash->error(__('The recipients rehab type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
