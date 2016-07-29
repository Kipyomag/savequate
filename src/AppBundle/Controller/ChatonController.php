<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Chaton;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ChatonController extends Controller
{
    /**
     * Cette fonction retourne la liste de tous les chatons
     *
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Récupérer la liste des chatons"
     * )
     *
     * @return array
     */
    public function getChatonsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $chatons = $em->getRepository('AppBundle:Chaton')->findAll();

        return array('chatons' => $chatons);
    }

    /**
 * Cette fonction retourne l'info d'un chaton
 *
 *
 * @ApiDoc(
 *  description="Retourne l'info d'un chaton",
 *  parameters={
 *      {"name"="id", "dataType"="integer", "required"=true, "description"="identifiant du chaton"}
 *  }
 * )
 *
 * @param Chaton $chaton
 * @return array
 */
    public function getChatonAction(Chaton $chaton)
    {
        return array('chaton' => $chaton);
    }



    public function postChatonAction()
    {

    }

    public function putChatonAction()
    {

    }

    public function deleteChatonAction()
    {

    }






}
