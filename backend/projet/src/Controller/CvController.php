<?php

namespace App\Controller;

use App\Entity\Cv2;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class CvController extends AbstractController
{
    /**
     * @Route("api/cvPersisit", name="cv")
     */
    public function Cvpersist(Request $request,SerializerInterface $serializer, EntityManagerInterface $em)

    {
        $jsonrec=$request->getContent();
        $cv=$serializer->deserialize($jsonrec,Cv2::class ,'json');
        $em->persist($cv);
        $em->flush();
        



    }
    public function Cvsend()

    {





    }
}
