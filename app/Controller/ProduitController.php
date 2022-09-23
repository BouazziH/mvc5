<?php

namespace App\Controller;

use App\Model\ProduitModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;

class ProduitController extends Controller
{

    public function listingP()
    {
       
        $produits = ProduitModel::all();
        $count  = ProduitModel::count();
        $this->render('app.produit.listingP',
        ['produits'=>$produits
        ,'count'=>$count]);
    }
    public function showP($id)
    {
        $produit = $this->isProduitExistor404($id);
        $this->render('app.produit.showP',
        ['produit' => $produit
    ]);
    }
    public function addP()
    {
        $errors = [];
        if(!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $valider = new Validation();
            $errors = $this->validProduit($errors,$valider,$post);
            if($valider->IsValid($errors)) {
                ProduitModel::insert($post);
                $this->redirect('listeProduit');
            }
        }
        $form = new Form($errors);
        $this->render('app.produit.addP',['form' => $form]);
    }
    public function deleteP($id)
    {
       $produit = $this->isProduitExistor404($id);
       ProduitModel::delete($id);
       $this->redirect(('listeProduit'));
       
    }
    private function validProduit($errors,$valider,$post)
    {
        $errors['titre'] = $valider->textValid($post['titre'], 'titre', 3, 100);
        $errors['reference'] = $valider->textValid($post['reference'], 'reference', 3, 100);
        $errors['description'] = $valider->textValid($post['description'],'description',3,100);
        
        return $errors;
    }
    public function editP($id)
 {
     $produit = $this->isProduitExistor404($id);
     $errors = [];
     if(!empty($_POST['submitted'])) {
         $post = $this->cleanXss($_POST);
         $v = new Validation();
         $errors = $this->validProduit($errors,$v,$post);
         if($v->IsValid($errors)) {
             ProduitModel::update($post,$id);
             $this->redirect('listeProduit');
         }
     }
     $form = new Form($errors);
     $this->render('app.produit.editP',[
         'produit'  => $produit,
         'form' => $form
     ]);
 }
    private function isProduitExistor404($id)
 {
    $produit = ProduitModel::findById($id);
    if(empty($produit))
    {
           $this->Abort404();
    }
    return $produit;
}

}