<?php

namespace App\Livewire;

use Livewire\Component;

class Mail extends Component
{   
    public $scriptUrl;
    public function index()
    {
        $scriptUrl = "https://script.google.com/macros/s/AKfycbyJ2hNQRnG69NywwCwljqB6JVGy7V7NCMgi30EvyK4NvMUXd3ljSwKU_6RKHmTrhrm8/exec";
        $limit  = 5; //data show per page
        $offset = 0; //start from
        $data = array(
           "action" => "inboxList",
           "limit"  => $limit,
           "offset" => $offset
        );
        
        
       $ch = curl_init($scriptUrl);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
       $result = curl_exec($ch);
       $result = json_decode($result, true);

        return view('livewire.mail', compact('result'));
    }

    public function read(){

        $id = isset($_GET['id']) ? $_GET['id'] : "";
        $scriptUrl = "https://script.google.com/macros/s/AKfycbyJ2hNQRnG69NywwCwljqB6JVGy7V7NCMgi30EvyK4NvMUXd3ljSwKU_6RKHmTrhrm8/exec";
        
        $data = array(
           "action" => "inboxRead",
           "id"  => $id,
        );
  
        $ch = curl_init($scriptUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        $result = json_decode($result, true);
  
        $from = $result['data']['from'];
        $subject = $result['data']['subject'];
        $body = $result['data']['body'];
        $plainBody = $result['data']['plainBody'];


        return view('livewire.mail', compact('from', 'subject', 'body', 'plainBody'));
    }

}
