<?php

namespace App\Jobs;

use SendGrid\Mail\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use SendGrid;

use Exception;

class SendEmailViaSendGrid implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $to;
    protected $subject;
    protected $body;
    protected $name;

    /**
     * Create a new job instance.
     */
    public function __construct($to, $subject, $body, $name = 'User')
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
        $this->name = $name;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $email = new Mail();
        $email->setFrom("your_verified_sender@example.com", "Your App Name");
        $email->setSubject($this->subject);
        $email->addTo($this->to, $this->name);
        $email->addContent("text/plain", $this->body);
        $email->addContent("text/html", "<strong>{$this->body}</strong>");

        $sendgrid = new \SendGrid(env('SENDGRID_API_KEY'), [
            'verify_peer' => false,
            'verify_peer_name' => false,
        ]);

        try {
            $response = $sendgrid->send($email);
            \Log::info("SendGrid Email sent", [
                'status' => $response->statusCode(),
                'body' => $response->body(),
                'headers' => $response->headers(),
            ]);
        } catch (Exception $e) {
            \Log::error("SendGrid Error: " . $e->getMessage());
        }
    }
}
