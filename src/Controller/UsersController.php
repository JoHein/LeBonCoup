<?php
/**
 * Created by PhpStorm.
 * User: Fox
 * Date: 24/10/2015
 * Time: 17:09
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\EntityInterface;
use Cake\Network\Exception\NotFoundException;
use Cake\Mailer\Email;
use Cake\Datasource\ConnectionManager;

class UsersController extends AppController
{


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user && ($this->Auth->identify()['actif']==true)) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__("Nom d'utilisateur, mot de passe incorrect ou compte non validé, essayez à nouveau. "));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }


    public function contact()
    {
       
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a été sauvegardé."));
                $email = new Email('gmail');
                    $email->from(['johei1337@gmail.com' => 'LeBonCoup'])
                        ->emailFormat('html')
                        ->to($user->email)
                        ->subject('Welcome '.$user->prenom)
                        ->send('Bienvenu sur le site LeBonCoup,
                            </br>
                            Vous avez bien été enregistré sur le site.php
                            </br>
                            Votre nom utilisateur est: '.$user->username .' 
                            </br>
                            Cliquez sur ce lien pour valider votre compte <a href="localhost/leboncoup/users/validatemail/'.$user->email.'">validation</a>
                            </br>
                            Cordialement,'
 );

                return $this->redirect(['controller'=>'Pages', 'action' => 'home']);
            }
            $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
        }
        $this->set('user', $user);
    }

  public function compte($id = null) {

    $id=$this->request->session()->read('Auth.User.id');

    if (!$id) {
        throw new NotFoundException(__('Invalid post ID'));
    }

    $userID = $this->Users->get($id);

    if (!$userID) {
        throw new NotFoundException(__('Invalid post FIND'));
    }

    if ($this->request->is(array('post', 'put')))
     {
           $user = $this->Users->patchEntity($userID, $this->request->data);
        if ($this->Users->save($user)) 
        {
            $this->Flash->success(__('Your account has been updated.'));
              $this->redirect($this->Auth->logout());
        }
        else
        {
        $this->Flash->error(__('Unable to update your account.'));
        }
    }

    if (!$this->request->data) {
        $this->request->data = $userID;
    }
}
    public function validatemail($email){
        
            $users = TableRegistry::get('Users');
            $query = $users->query();
            $query->update()
                ->set(['actif' => true])
                ->where(['email' => $email])
                ->execute();
       }


}

