<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        'grade.created' => [
            'App\Events\GradeEvent@gradeCreated',
        ],
        'grade.updated' => [
            'App\Events\GradeEvent@gradeUpdated',
        ],
        'exam.created' => [
            'App\Events\ExamEvent@examCreated',
        ],
        'exam.updated' => [
            'App\Events\ExamEvent@examUpdated',
        ],
        'news.created' => [
            'App\Events\NewsEvent@newsCreated',
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
