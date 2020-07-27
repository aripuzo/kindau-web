<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use AfricasTalking\SDK\AfricasTalking;

class SendSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $phone;
    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(String $phone, String $message)
    {
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $username = getenv('AT_USERNAME');
        $apiKey = getenv('AT_API_KEY');
        $AT = new AfricasTalking($username, $apiKey);

        $sms = $AT->sms();

        $result = $sms->send([
            'to'      => $this->phone,
            'message' => $this->message
        ]);
    }
}
