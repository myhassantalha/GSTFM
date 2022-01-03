<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Models\Contact as ModelsContact;

class ContactController extends Controller
{
  public function newContact(){
      $newContact = new Contact();
      $newContact->name="TALHA Hassan";
      $newContact->email="myhassantalha@uca.ac.ma";
      $newContact->message="application de gestion de soutenance de thèse ";
      $newContact->save();
  }
}
