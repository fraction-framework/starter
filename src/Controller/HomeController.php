<?php

namespace App\Controller;

use Fraction\Component\Controller;
use Fraction\Http\Attribute\Route;
use Fraction\Http\Attribute\View;
use Fraction\Http\Enum\RequestMethod;
use Fraction\Http\Enum\ResponseType;

class HomeController extends Controller {
  #[Route(RequestMethod::GET, '/')]
  #[View(response: ResponseType::PLAIN)]
  public function index(): string {
    return 'Hello World';
  }
}
