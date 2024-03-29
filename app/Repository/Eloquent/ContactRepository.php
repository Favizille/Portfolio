<?php
namespace App\Repository\Eloquent;

use App\Models\Contact;

class ContactRepository
{
    public function __construct(protected Contact $contact) {}

    public function sendMessage(array $data):Array{
        return [];
    }
}
