<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssetsTypes Controller
 *
 * @property \App\Model\Table\AssetsTypesTable $AssetsTypes
 */
class AssetsTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $assetsTypes = $this->paginate($this->AssetsTypes);

        $this->set(compact('assetsTypes'));
        $this->set('_serialize', ['assetsTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Assets Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetsType = $this->AssetsTypes->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('assetsType', $assetsType);
        $this->set('_serialize', ['assetsType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetsType = $this->AssetsTypes->newEntity();
        if ($this->request->is('post')) {
            $assetsType = $this->AssetsTypes->patchEntity($assetsType, $this->request->data);
            if ($this->AssetsTypes->save($assetsType)) {
                $this->Flash->success(__('The assets type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assets type could not be saved. Please, try again.'));
            }
        }
        $users = $this->AssetsTypes->Users->find('list', ['limit' => 200]);
        $this->set(compact('assetsType', 'users'));
        $this->set('_serialize', ['assetsType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Assets Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetsType = $this->AssetsTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetsType = $this->AssetsTypes->patchEntity($assetsType, $this->request->data);
            if ($this->AssetsTypes->save($assetsType)) {
                $this->Flash->success(__('The assets type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assets type could not be saved. Please, try again.'));
            }
        }
        $users = $this->AssetsTypes->Users->find('list', ['limit' => 200]);
        $this->set(compact('assetsType', 'users'));
        $this->set('_serialize', ['assetsType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Assets Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetsType = $this->AssetsTypes->get($id);
        if ($this->AssetsTypes->delete($assetsType)) {
            $this->Flash->success(__('The assets type has been deleted.'));
        } else {
            $this->Flash->error(__('The assets type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
