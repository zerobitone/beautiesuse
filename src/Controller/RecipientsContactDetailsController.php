<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RecipientsContactDetails Controller
 *
 * @property \App\Model\Table\RecipientsContactDetailsTable $RecipientsContactDetails
 */
class RecipientsContactDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RecipientsContactDetails->find();
        $recipientsContactDetails = $this->paginate($query);

        $this->set(compact('recipientsContactDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Recipients Contact Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipientsContactDetail = $this->RecipientsContactDetails->get($id, contain: []);
        $this->set(compact('recipientsContactDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipientsContactDetail = $this->RecipientsContactDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $recipientsContactDetail = $this->RecipientsContactDetails->patchEntity($recipientsContactDetail, $this->request->getData());
            if ($this->RecipientsContactDetails->save($recipientsContactDetail)) {
                $this->Flash->success(__('The recipients contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipients contact detail could not be saved. Please, try again.'));
        }
        $this->set(compact('recipientsContactDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipients Contact Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipientsContactDetail = $this->RecipientsContactDetails->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipientsContactDetail = $this->RecipientsContactDetails->patchEntity($recipientsContactDetail, $this->request->getData());
            if ($this->RecipientsContactDetails->save($recipientsContactDetail)) {
                $this->Flash->success(__('The recipients contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipients contact detail could not be saved. Please, try again.'));
        }
        $this->set(compact('recipientsContactDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipients Contact Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipientsContactDetail = $this->RecipientsContactDetails->get($id);
        if ($this->RecipientsContactDetails->delete($recipientsContactDetail)) {
            $this->Flash->success(__('The recipients contact detail has been deleted.'));
        } else {
            $this->Flash->error(__('The recipients contact detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
