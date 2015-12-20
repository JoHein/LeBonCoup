<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\EntityInterface;
use Cake\Network\Exception\NotFoundException;

class AnnoncesController extends AppController
{

 	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Charge le FlashComponent
    }


    public function index()
    {
         $this->set('annonces', $this->Annonces->find('all'));

    }

    public function onlymine()
    {
         $id=$this->request->session()->read('Auth.User.id');
         $this->set('annonces', $this->Annonces->find('all', [
            'conditions' => ['Annonces.iduser' => $id]
            ]));
    }

    public function view($id = null)
    {
        $annonce = $this->Annonces->get($id);
        $this->set(compact('annonce'));
    }


    public function add()
    {
        $annonce = $this->Annonces->newEntity();

    
        if ($this->request->is('post')) {


            $annonce = $this->Annonces->patchEntity($annonce, $this->request->data);   

          
            if ($this->Annonces->save($annonce)) {
                $this->Flash->success(__('Votre annonce a été sauvegardé.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible d\'ajouter votre annonce.'));
        }
        $this->set('annonce', $annonce);
    }

    public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $annonce = $this->Annonces->get($id);
    if ($this->Annonces->delete($annonce)) {
        $this->Flash->success(__("L'annonce avec l'id: {0} a été supprimé.", h($id)));
        return $this->redirect(['action' => 'index']);
    }
}

    public function searchcat() {

 if ($this->request->is('post')) {

                if (($this->request->data['cat'])=='empty'){
                    $annoncesearch = $this->Annonces->find('all');
                } 
                else{   
                    $annoncesearch = $this->Annonces->find('all',['conditions' => ['cat =' => $this->request->data['cat']]]);
                }

        $this->set('annoncesearch',$annoncesearch);   
        }  
      } 
}