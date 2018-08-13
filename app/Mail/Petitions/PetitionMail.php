<?php

namespace App\Mail\Petitions;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class PetitionMail
 *
 * @package App\Mail\Petitions
 */
class PetitionMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $input;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($input)
    {
        $this->input = $input;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('signature.email', ['data' => $this->input])
            ->from($this->input['email'], $this->input['name'])
            ->subject('Ik hoor het nieuws dat u opnieuws zinnes bent om kinderen op te sluiten.');
    }
}
