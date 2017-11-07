<?php

namespace Talandis\LaravelNativeSession;

use Illuminate\Session\SessionManager;

class NativeSessionManager extends SessionManager
{

    /**
     * Create an instance of the file session driver.
     *
     * @return \Illuminate\Session\Store
     */
    protected function createNativeDriver()
    {
        $path = $this->app['config']['session.files'];
        $cookieName = $this->app['config']['session.cookie'];

        return $this->buildSession(new NativeSessionHandler($path, $cookieName));
    }
}
