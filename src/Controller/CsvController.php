<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Encoder\EncoderInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class CsvController extends AbstractController
{
    /**
     * @Route("/csv", name="csv")
     * @param EntityManager $entityManager
     * @param SerializerInterface $serializer
     * @param EncoderInterface $csvEncoder
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function index()
    {
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $collection = $productRepository->findAll();
        $encoders = [];
        $normalizers = [new ObjectNormalizer()];
        $csvEncoder = new CsvEncoder();
        $serializer = new Serializer($normalizers, $encoders);
        $collection2 = [];
        foreach ($collection as $entity) {
            $collection2[] = $serializer->normalize($entity, 'array');
        }
        $csvEncoded = $csvEncoder->encode($serializer->normalize($collection2, 'array'), 'csv', ['csv_delimiter' => ';']);
        return new Response($csvEncoded, 200, [
            'Content-Type' => 'text/csv'
        ]);
    }
}
