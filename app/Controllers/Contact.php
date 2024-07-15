<?php

namespace App\Controllers;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        $contactModel = new ContactModel();
        $data['contacts'] = $contactModel->findAll();
        $data['title'] = 'ItCrush | Contact Page';
        return view('contact', $data);
    }

    public function create()
    {
        // Get form data
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $message = $this->request->getPost('message');

        // Validate form data (you can add validation logic here)

        // Create a new contact
        $contactModel = new ContactModel();
        $contactModel->save([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        ]);

        // Redirect to a success page or show a success message
        return redirect()->to('Contact') ;
    
    }
    public function createContact()
    {
        // Get form data
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $message = $this->request->getPost('message');

        // Validate form data (you can add validation logic here)

        // Create a new contact
        $contactModel = new ContactModel();
        $contactModel->save([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        ]);

        // Redirect to a success page or show a success message
        return redirect()->to('')->with('success', 'Contact created successfully.');
    
    }
}
