<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CashFlows Controller
 *
 * @property \App\Model\Table\CashFlowsTable $CashFlows
 */
class CashFlowsController extends AppController
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
        $cashFlows = $this->paginate($this->CashFlows);

        $this->set(compact('cashFlows'));
        $this->set('_serialize', ['cashFlows']);
    }

    /**
     * View method
     *
     * @param string|null $id Cash Flow id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cashFlow = $this->CashFlows->get($id, [
            'contain' => ['Users', 'Drivers']
        ]);

        $this->set('cashFlow', $cashFlow);
        $this->set('_serialize', ['cashFlow']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cashFlow = $this->CashFlows->newEntity();
        if ($this->request->is('post')) {
            $cashFlow = $this->CashFlows->patchEntity($cashFlow, $this->request->data);
            if ($this->CashFlows->save($cashFlow)) {
                $this->Flash->success(__('The cash flow has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cash flow could not be saved. Please, try again.'));
            }
        }
        $users = $this->CashFlows->Users->find('list', ['limit' => 200]);
        $this->set(compact('cashFlow', 'users'));
        $this->set('_serialize', ['cashFlow']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cash Flow id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cashFlow = $this->CashFlows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cashFlow = $this->CashFlows->patchEntity($cashFlow, $this->request->data);
            if ($this->CashFlows->save($cashFlow)) {
                $this->Flash->success(__('The cash flow has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cash flow could not be saved. Please, try again.'));
            }
        }
        $users = $this->CashFlows->Users->find('list', ['limit' => 200]);
        $this->set(compact('cashFlow', 'users'));
        $this->set('_serialize', ['cashFlow']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cash Flow id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cashFlow = $this->CashFlows->get($id);
        if ($this->CashFlows->delete($cashFlow)) {
            $this->Flash->success(__('The cash flow has been deleted.'));
        } else {
            $this->Flash->error(__('The cash flow could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
