<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RecipientAddresses Controller
 *
 * @property \App\Model\Table\RecipientAddressesTable $RecipientAddresses
 */
class RecipientAddressesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RecipientAddresses->find();
        $recipientAddresses = $this->paginate($query);

        $this->set(compact('recipientAddresses'));
    }

    /**
     * View method
     *
     * @param string|null $id Recipient Address id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipientAddress = $this->RecipientAddresses->get($id, contain: []);
        $this->set(compact('recipientAddress'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipientAddress = $this->RecipientAddresses->newEmptyEntity();
        if ($this->request->is('post')) {
            $recipientAddress = $this->RecipientAddresses->patchEntity($recipientAddress, $this->request->getData());
            if ($this->RecipientAddresses->save($recipientAddress)) {
                $this->Flash->success(__('The recipient address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipient address could not be saved. Please, try again.'));
        }
        $this->set(compact('recipientAddress'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipient Address id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipientAddress = $this->RecipientAddresses->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipientAddress = $this->RecipientAddresses->patchEntity($recipientAddress, $this->request->getData());
            if ($this->RecipientAddresses->save($recipientAddress)) {
                $this->Flash->success(__('The recipient address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipient address could not be saved. Please, try again.'));
        }
        $this->set(compact('recipientAddress'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipient Address id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipientAddress = $this->RecipientAddresses->get($id);
        if ($this->RecipientAddresses->delete($recipientAddress)) {
            $this->Flash->success(__('The recipient address has been deleted.'));
        } else {
            $this->Flash->error(__('The recipient address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
