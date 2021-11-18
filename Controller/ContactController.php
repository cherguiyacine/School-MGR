<?php

require_once('Model/ContactModel.php');
require_once('Vue/ContactVue.php');

class ContactController {

    public function showaddContactVueController()
    {
        $ContactModel = new ContactModel();
        $contact= $ContactModel->getContact();

        if(!$contact){   $contact["address"]="vide";
            $contact["numtlp"]="vide";
            $contact["fax"]="vide";}
          
     

        $ContactVue = new ContactVue();
        $ContactVue->show_Contact_view($contact);      
    }

    function addContactController()
    {
        $ContactModel = new ContactModel();
        $ContactModel->addContactModel();
        header('location: admin');

        
    }  
    
    public function showContactDetailsVueController()
    {
        
        $ContactModel = new ContactModel();
        $contact= $ContactModel->getContact();

        if(!$contact){   $contact["address"]="vide";
            $contact["numtlp"]="vide";
            $contact["fax"]="vide";}
          
     

        $ContactVue = new ContactVue();
        $ContactVue->show_ContactDetails_view($contact);      
    }
    
}

?>