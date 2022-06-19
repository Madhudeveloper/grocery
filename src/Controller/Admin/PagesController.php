<?php
namespace App\Controller\Admin;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{
  // public function dashboard()
  //   {
  //     $this->viewBuilder()->setLayout('backend_dashboard');
  //   }

   public function users()
    {
      $this->viewBuilder()->setLayout('backend_dashboard');
    }
   

   public function products()
   {
      $this->viewBuilder()->setLayout('backend_dashboard');
   }

   public function productSubCategories()
    {
      $this->viewBuilder()->setLayout('backend_dashboard');
    }

    public function productCategories()
    {
      $this->viewBuilder()->setLayout('backend_dashboard');
    }
}
