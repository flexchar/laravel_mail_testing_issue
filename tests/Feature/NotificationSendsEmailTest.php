<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Mail\FakeMailable;
use Illuminate\Support\Facades\Mail;
use App\Notifications\SendEmailNotification;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotificationSendsEmailTest extends TestCase
{
    /** @test */
    public function notification_should_send_email()
    {
        Mail::fake();
        Mail::assertNothingSent();

        /**
         * Inbox URL
         * https://www.mailinator.com/v3/index.jsp?zone=public&query=laravelmailtesting#/#inboxpane
         */
        Notification::route('mail', 'laravelMailTesting@mailinator.com')
            ->notify(new SendEmailNotification());

        Mail::assertSent(FakeMailable::class);
    }
}
