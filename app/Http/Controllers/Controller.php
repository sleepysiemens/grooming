<?php

namespace App\Http\Controllers;

use App\Services\ApplicationService;
use App\Services\ProductService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $productService;
    public $applicationService;

    public function __construct(ProductService $productService, ApplicationService $applicationService)
    {
        $this->productService = $productService;
        $this->applicationService = $applicationService;
    }
}
