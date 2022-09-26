<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class alreadyloggedIn implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session()->has('log_In'))
        {
            return redirect()->back()->with('fail','First to Logout');
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}