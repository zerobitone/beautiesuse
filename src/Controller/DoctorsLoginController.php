<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DoctorsLogin Controller
 *
 * @property \App\Model\Table\DoctorsLoginTable $DoctorsLogin
 */
class DoctorsLoginController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DoctorsLogin->find();
        $doctorsLogin = $this->paginate($query);

        $this->set(compact('doctorsLogin'));
    }

    /**
     * View method
     *
     * @param string|null $id Doctors Login id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doctorsLogin = $this->DoctorsLogin->get($id, contain: []);
        $this->set(compact('doctorsLogin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doctorsLogin = $this->DoctorsLogin->newEmptyEntity();
        if ($this->request->is('post')) {
            $doctorsLogin = $this->DoctorsLogin->patchEntity($doctorsLogin, $this->request->getData());
            if ($this->DoctorsLogin->save($doctorsLogin)) {
                $this->Flash->success(__('The doctors login has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doctors login could not be saved. Please, try again.'));
        }
        $this->set(compact('doctorsLogin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Doctors Login id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doctorsLogin = $this->DoctorsLogin->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doctorsLogin = $this->DoctorsLogin->patchEntity($doctorsLogin, $this->request->getData());
            if ($this->DoctorsLogin->save($doctorsLogin)) {
                $this->Flash->success(__('The doctors login has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doctors login could not be saved. Please, try again.'));
        }
        $this->set(compact('doctorsLogin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Doctors Login id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doctorsLogin = $this->DoctorsLogin->get($id);
        if ($this->DoctorsLogin->delete($doctorsLogin)) {
            $this->Flash->success(__('The doctors login has been deleted.'));
        } else {
            $this->Flash->error(__('The doctors login could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
