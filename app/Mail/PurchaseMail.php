<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PurchaseMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->orderID = $data['orderID'];
        $this->orderLink = $data['orderLink'];
        $this->clientName = $data['clientName'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('marionikolov@gmail.com')->subject('Your purchase details')->view('receipt')->with([
            'clientName' => $this->clientName,
            'orderID' => $this->orderID,
            'orderLink' => $this->orderLink
        ]);
    }
}
