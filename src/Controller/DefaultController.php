<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/{locale}", name="locale")
     * @param Request $request
     * @param $locale
     * @return RedirectResponse
     */
    public function locale(Request $request, $locale)
    {
        $request->setLocale($locale);
        return $this->redirectToRoute('product_index', ['_locale' => $request->getLocale()]);
    }
}
