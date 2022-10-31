<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reply Controller
 *
 * @property \App\Model\Table\ReplyTable $Reply
 * @method \App\Model\Entity\Reply[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReplyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tickets'],
        ];
        $reply = $this->paginate($this->Reply);

        $this->set(compact('reply'));
    }

    /**
     * View method
     *
     * @param string|null $id Reply id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reply = $this->Reply->get($id, [
            'contain' => ['Tickets', 'Reply'],
        ]);

        $this->set(compact('reply'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reply = $this->Reply->newEmptyEntity();
        if ($this->request->is('post')) {
            $reply = $this->Reply->patchEntity($reply, $this->request->getData());
            if ($this->Reply->save($reply)) {
                $this->Flash->success(__('The reply has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reply could not be saved. Please, try again.'));
        }
        $tickets = $this->Reply->Tickets->find('list', ['limit' => 200])->all();
        $this->set(compact('reply', 'tickets'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reply id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reply = $this->Reply->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reply = $this->Reply->patchEntity($reply, $this->request->getData());
            if ($this->Reply->save($reply)) {
                $this->Flash->success(__('The reply has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reply could not be saved. Please, try again.'));
        }
        $tickets = $this->Reply->Tickets->find('list', ['limit' => 200])->all();
        $this->set(compact('reply', 'tickets'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reply id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reply = $this->Reply->get($id);
        if ($this->Reply->delete($reply)) {
            $this->Flash->success(__('The reply has been deleted.'));
        } else {
            $this->Flash->error(__('The reply could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
