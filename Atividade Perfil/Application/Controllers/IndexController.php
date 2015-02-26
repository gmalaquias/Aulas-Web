<?php
namespace Controllers;

use Entities\Anotacao;
use Entities\Pessoa;
use Helpers\ClassGenerator\ClassGenerator;
use Helpers\Cookie;
use Helpers\DateTime;
use Helpers\EmailHelper;
use Helpers\ModelState;
use Mvc\Controller;
use Mvc\MvcException;
use Mvc\Url;
use UnitOfWork\UnitOfWork;
use UnitOfWork\UnitOfWorkException;

class IndexController extends Controller
{
    public function Index()
    {
        $this->View();
    }
}