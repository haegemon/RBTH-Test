<?php

namespace RBTH\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use RBTH\TestBundle\Entity\User;
use RBTH\TestBundle\Form\UserType;


class PublicController extends Controller
{

    /**
     * @Route("list", name="public_list")
     * @Template
     */
    public function listAction()
    {
        return array('name' => "test");
    }

    /**
     * @Route("add", name="public_new")
     * @Template
     */
    public function addAction()
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        if ($this->getRequest()->getMethod() == 'POST') {
            $form->bind($this->getRequest());

            if ($form->isValid()) {
                $this->getDoctrine()->getManager()->persist($user);
                $this->getDoctrine()->getManager()->flush();

                return $this->redirect($this->generateUrl('public_success'));
            }
        }
        return array(
            'form' => $form->createView()
        );
    }

    /**
     * @Route("success", name="public_success")
     * @Template
     */
    public function successAction()
    {
        return array();
    }
}
