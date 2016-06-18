<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Maintenances Controller
 *
 * @property \App\Model\Table\MaintenancesTable $Maintenances
 */
class MaintenancesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Vehicles', 'Dealers', 'Reciepts']
        ];
        $maintenances = $this->paginate($this->Maintenances);

        $this->set(compact('maintenances'));
        $this->set('_serialize', ['maintenances']);
    }

    /**
     * View method
     *
     * @param string|null $id Maintenance id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maintenance = $this->Maintenances->get($id, [
            'contain' => ['Users', 'Vehicles', 'Dealers', 'Reciepts']
        ]);

        $this->set('maintenance', $maintenance);
        $this->set('_serialize', ['maintenance']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maintenance = $this->Maintenances->newEntity();
        if ($this->request->is('post')) {
            $maintenance = $this->Maintenances->patchEntity($maintenance, $this->request->data);
            if ($this->Maintenances->save($maintenance)) {
                $this->Flash->success(__('The maintenance has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The maintenance could not be saved. Please, try again.'));
            }
        }
        $users = $this->Maintenances->Users->find('list', ['limit' => 200]);
        $vehicles = $this->Maintenances->Vehicles->find('list', ['limit' => 200]);
        $dealers = $this->Maintenances->Dealers->find('list', ['limit' => 200]);
        $reciepts = $this->Maintenances->Reciepts->find('list', ['limit' => 200]);
        $this->set(compact('maintenance', 'users', 'vehicles', 'dealers', 'reciepts'));
        $this->set('_serialize', ['maintenance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Maintenance id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maintenance = $this->Maintenances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maintenance = $this->Maintenances->patchEntity($maintenance, $this->request->data);
            if ($this->Maintenances->save($maintenance)) {
                $this->Flash->success(__('The maintenance has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The maintenance could not be saved. Please, try again.'));
            }
        }
        $users = $this->Maintenances->Users->find('list', ['limit' => 200]);
        $vehicles = $this->Maintenances->Vehicles->find('list', ['limit' => 200]);
        $dealers = $this->Maintenances->Dealers->find('list', ['limit' => 200]);
        $reciepts = $this->Maintenances->Reciepts->find('list', ['limit' => 200]);
        $this->set(compact('maintenance', 'users', 'vehicles', 'dealers', 'reciepts'));
        $this->set('_serialize', ['maintenance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Maintenance id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maintenance = $this->Maintenances->get($id);
        if ($this->Maintenances->delete($maintenance)) {
            $this->Flash->success(__('The maintenance has been deleted.'));
        } else {
            $this->Flash->error(__('The maintenance could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
