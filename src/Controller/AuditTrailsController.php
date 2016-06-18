<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AuditTrails Controller
 *
 * @property \App\Model\Table\AuditTrailsTable $AuditTrails
 */
class AuditTrailsController extends AppController
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
        $auditTrails = $this->paginate($this->AuditTrails);

        $this->set(compact('auditTrails'));
        $this->set('_serialize', ['auditTrails']);
    }

    /**
     * View method
     *
     * @param string|null $id Audit Trail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $auditTrail = $this->AuditTrails->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('auditTrail', $auditTrail);
        $this->set('_serialize', ['auditTrail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $auditTrail = $this->AuditTrails->newEntity();
        if ($this->request->is('post')) {
            $auditTrail = $this->AuditTrails->patchEntity($auditTrail, $this->request->data);
            if ($this->AuditTrails->save($auditTrail)) {
                $this->Flash->success(__('The audit trail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The audit trail could not be saved. Please, try again.'));
            }
        }
        $users = $this->AuditTrails->Users->find('list', ['limit' => 200]);
        $this->set(compact('auditTrail', 'users'));
        $this->set('_serialize', ['auditTrail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Audit Trail id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $auditTrail = $this->AuditTrails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $auditTrail = $this->AuditTrails->patchEntity($auditTrail, $this->request->data);
            if ($this->AuditTrails->save($auditTrail)) {
                $this->Flash->success(__('The audit trail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The audit trail could not be saved. Please, try again.'));
            }
        }
        $users = $this->AuditTrails->Users->find('list', ['limit' => 200]);
        $this->set(compact('auditTrail', 'users'));
        $this->set('_serialize', ['auditTrail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Audit Trail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $auditTrail = $this->AuditTrails->get($id);
        if ($this->AuditTrails->delete($auditTrail)) {
            $this->Flash->success(__('The audit trail has been deleted.'));
        } else {
            $this->Flash->error(__('The audit trail could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
