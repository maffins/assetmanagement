<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Stolen Controller
 *
 * @property \App\Model\Table\StolenTable $Stolen
 */
class StolenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Assets', 'Users']
        ];
        $stolen = $this->paginate($this->Stolen);

        $this->set(compact('stolen'));
        $this->set('_serialize', ['stolen']);
    }

    /**
     * View method
     *
     * @param string|null $id Stolen id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stolen = $this->Stolen->get($id, [
            'contain' => ['Assets', 'Users']
        ]);

        $this->set('stolen', $stolen);
        $this->set('_serialize', ['stolen']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stolen = $this->Stolen->newEntity();
        if ($this->request->is('post')) {
            $stolen = $this->Stolen->patchEntity($stolen, $this->request->data);
            if ($this->Stolen->save($stolen)) {
                $this->Flash->success(__('The stolen has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The stolen could not be saved. Please, try again.'));
            }
        }
        $assets = $this->Stolen->Assets->find('list', ['limit' => 200]);
        $users = $this->Stolen->Users->find('list', ['limit' => 200]);
        $this->set(compact('stolen', 'assets', 'users'));
        $this->set('_serialize', ['stolen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stolen id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stolen = $this->Stolen->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stolen = $this->Stolen->patchEntity($stolen, $this->request->data);
            if ($this->Stolen->save($stolen)) {
                $this->Flash->success(__('The stolen has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The stolen could not be saved. Please, try again.'));
            }
        }
        $assets = $this->Stolen->Assets->find('list', ['limit' => 200]);
        $users = $this->Stolen->Users->find('list', ['limit' => 200]);
        $this->set(compact('stolen', 'assets', 'users'));
        $this->set('_serialize', ['stolen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stolen id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stolen = $this->Stolen->get($id);
        if ($this->Stolen->delete($stolen)) {
            $this->Flash->success(__('The stolen has been deleted.'));
        } else {
            $this->Flash->error(__('The stolen could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
