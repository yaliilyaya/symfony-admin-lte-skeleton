<?php
namespace App\Controller;

use App\Repository\ProcedureRepository;
use App\Repository\QueryBuilder\EditProposalQueryBuilder;
use App\Repository\QueryBuilder\IpFirmsQueryBuilder;
use App\Repository\QueryBuilder\OpenPersonalQueryBuilder;
use App\Repository\QueryBuilder\SendProposalQueryBuilder;
use App\Service\UnionQueryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('index/list.html.twig', [
        ]);
    }
}