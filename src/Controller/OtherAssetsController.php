<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OtherAssets Controller
 *
 * @property \App\Model\Table\OtherAssetsTable $OtherAssets
 */
class OtherAssetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $otherAssets = $this->paginate($this->OtherAssets);

        $this->set(compact('otherAssets'));
        $this->set('_serialize', ['otherAssets']);
    }

    /**
     * View method
     *
     * @param string|null $id Other Asset id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $otherAsset = $this->OtherAssets->get($id, [
            'contain' => []
        ]);

        $this->set('otherAsset', $otherAsset);
        $this->set('_serialize', ['otherAsset']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $otherAsset = $this->OtherAssets->newEntity();
        if ($this->request->is('post')) {
            $otherAsset = $this->OtherAssets->patchEntity($otherAsset, $this->request->data);
            if ($this->OtherAssets->save($otherAsset)) {
                $this->Flash->success(__('The other asset has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The other asset could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('otherAsset'));
        $this->set('_serialize', ['otherAsset']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Other Asset id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $otherAsset = $this->OtherAssets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $otherAsset = $this->OtherAssets->patchEntity($otherAsset, $this->request->data);
            if ($this->OtherAssets->save($otherAsset)) {
                $this->Flash->success(__('The other asset has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The other asset could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('otherAsset'));
        $this->set('_serialize', ['otherAsset']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Other Asset id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $otherAsset = $this->OtherAssets->get($id);
        if ($this->OtherAssets->delete($otherAsset)) {
            $this->Flash->success(__('The other asset has been deleted.'));
        } else {
            $this->Flash->error(__('The other asset could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
