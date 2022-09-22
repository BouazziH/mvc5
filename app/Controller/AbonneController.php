<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\AbonneModel;



class AbonneController extends Controller
{   
    public function listing()
    {
       
        $abonnes = AbonneModel::all();
        $count  = AbonneModel::count();
        $this->render('app.abonne.listing',
        ['abonnes'=>$abonnes
        ,'count'=>$count]);
    }
    public function show($id)
    {
        $abonne = $this->isAbonneExistor404($id);
        $this->render('app.abonne.show',
        ['abonne' => $abonne
    ]);
    }
    
 private function isAbonneExistor404($id)
 {
    $abonne = AbonneModel::findById($id);
    if(empty($abonne))
    {
           $this->Abort404();
    }
 return $abonne;
 }

 public function delete($id)
 {
    $abonne = $this->isAbonneExistor404($id);
    AbonneModel::delete($id);
    $this->redirect(('liste'));
    
 }
}