<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ContentController extends FrontendController
{
    public function defaultAction(Request $request)
    {
        return $this->render('content/default.html.twig');
    }

    #[Route("/footer", name: "footer-action")]

    public function footerAction(Request $request): Response
    {
        // Beispiel: dynamische Daten, die das Snippet braucht, z.B. Links oder Texte
        // Du kannst auch Content-Objekte, Dokumente oder Einstellungen aus Pimcore laden

        $footerData = [
            'year' => date('Y'),
            'company' => 'Deine Firma', // Beispiel, könnte aus Pimcore Input kommen
            // weitere Daten...
        ];

        // Render das Footer-Template mit den Daten
        return $this->render('content/footer.html.twig', $footerData);
    }
   
}