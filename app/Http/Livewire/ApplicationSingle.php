<?php

namespace App\Http\Livewire;

use App\Actions\Rico\ApplicationAction;
use App\Models\Application;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ApplicationSingle extends Component
{
    public Application $app;

    /**
     * Mount method
     *
     * @param Application $app
     */
    public function mount(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Set status.
     *
     * @param string $status
     * @throws AuthorizationException
     */
    public function setStatus(string $status)
    {
        $this->resetErrorBag();

        if ($status === 'online') {
            (new ApplicationAction())
                ->online($this->app, request()->user());
        } else {
            (new ApplicationAction())
                ->paused($this->app, request()->user());
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function pinned()
    {
        $this->resetErrorBag();

        if ($this->app->isPinned()) {
            (new ApplicationAction())->unpinned($this->app, request()->user());
        } else {
            (new ApplicationAction())->pinned($this->app, request()->user());
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function archived()
    {
        $this->resetErrorBag();

        if ($this->app->isArchived()) {
            (new ApplicationAction())->unarchived($this->app, request()->user());
        } else {
            (new ApplicationAction())->archived($this->app, request()->user());
        }
    }

    /**
     * Render view.
     *
     * @return View
     */
    public function render(): View
    {
        return view('applications.livewire.app-single');
    }
}
