<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Annotation\Groups;


class ArticlesController extends FOSRestController
{

	private $articleRepository;

	public function __construct(ArticleRepository $articleRepository, EntityManagerInterface $em)
    {
		$this->articleRepository = $articleRepository;
		$this->em = $em;
    }

    /**
	 * @Rest\View(serializerGroups={"articles"})
	 * @return \FOS\RestBundle\View\View
	 */
    public function getArticlesAction()
    {
		$articles = $this->articleRepository->findAll();
		return $this->view($articles);
	}
	// "get_articles"            [GET] /articles

	/**
	 * @Rest\View(serializerGroups={"articles"})
	 */
	public function	getArticleAction($id)
	{
	   	$article = $this->articleRepository->find($id);
		return $this->view($article);
	} 
	// "get_article"             [GET] /articles/{id}

	/**
	 * @Rest\View(serializerGroups={"articles"})
	 * @Rest\Post("/articles")
	 * @ParamConverter("article", converter="fos_rest.request_body")
	 */
	public function postArticlesAction(Article $article)
	{
	   	$this->em->persist($article);
	   	$this->em->flush();
	   	return $this->view($article);
	}

	/**
     * @Route("/api/articles/{id}", methods={"DELETE"})
	 * @Rest\View(serializerGroups={"articles"})
	 */
    public function	deleteArtcticleAction($id)
	{
        $article = $this->articleRepository->find($id);

        if($this->getUser() ===  $article->getUser())
        {
            $article->setUser(null);
            $this->em->remove($article);
            $this->em->flush();
             return $this->view($articles);
        }
        else {
            return $this->view("FORBIDDEN");
        }
	} 
	
}
