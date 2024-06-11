<?php

namespace App\Repository;

use App\Entity\Joke;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Joke>
 *
 * @method Joke|null find($id, $lockMode = null, $lockVersion = null)
 * @method Joke|null findOneBy(array $criteria, array $orderBy = null)
 * @method Joke[]    findAll()
 * @method Joke[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JokeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Joke::class);
    }

    public function findRandomJoke(): ?Joke
{
    // Crée un QueryBuilder pour l'entité Joke avec l'alias 'j'
    $count = $this->createQueryBuilder('j')
        ->select('COUNT(j.id)') // Compte le nombre total de blagues dans la table Joke
        ->getQuery() // Crée la requête
        ->getSingleScalarResult(); // Exécute la requête et retourne le résultat comme un nombre entier

    // Vérifie si le nombre de blagues est de zéro
    if ($count == 0) {
        return null; // Retourne null s'il n'y a pas de blagues
    }

    // Génère un index aléatoire entre 0 et le nombre total de blagues moins un
    $randomIndex = rand(0, $count - 1);

    // Crée un nouveau QueryBuilder pour sélectionner une blague à l'index aléatoire
    return $this->createQueryBuilder('j')
        ->setMaxResults(1) // Limite le résultat à une seule blague
        ->setFirstResult($randomIndex) // Définit l'index de départ pour les résultats
        ->getQuery() // Crée la requête
        ->getOneOrNullResult(); // Exécute la requête et retourne une blague ou null si aucun résultat
}


//    /**
//     * @return Joke[] Returns an array of Joke objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('j.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Joke
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
