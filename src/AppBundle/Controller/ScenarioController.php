<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScenarioController extends Controller
{

    /**
     * @Route("/scenario_liste", name="scenario.liste")
     */
    public function listeScenarioAction(Request $request, ObjectManager $manager)
    {
        /*On récupère tous les scénarios en base pour les afficher */


        $repoScenario = $manager->getRepository(\AppBundle\Entity\Scenario::class);
        $scenarios = $repoScenario->findAll();
        return $this->render("scenario/listeScenario.html.twig", array(
            "scenarios" => $scenarios,
        ));
    }
    /**
     * @Route("/scenario_create", name="scenario.create")
     */
    public function createScenarioAction(Request $request, ObjectManager $manager)
    {
        /*On crée un scénario et on le stock en base*/


        $scenario = new \AppBundle\Entity\Scenario();

        $form = $this->createForm(\AppBundle\Form\ScenarioType::class, $scenario);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $scenario = $form->getData();
            $manager->persist($scenario);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }
        return $this->render("scenario/createScenario.html.twig", array(
            "form" => $form->createView(),
        ));
    }
    /**
     * @Route("/scenario_edit{id}", name="scenario.edit")
     */
    public function editScenarioAction(Request $request, ObjectManager $manager)
    {
        /*On récupère le scénario que l'on veut editer depuis la base*/

        $id = $request->get('id');
        $repoScenario = $manager->getRepository(\AppBundle\Entity\Scenario::class);
        $scenario = $repoScenario->find($id);

        /*On édite scénario et on le stock en base*/

        $form = $this->createForm(\AppBundle\Form\ScenarioType::class, $scenario);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $scenario = $form->getData();
            $manager->persist($scenario);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }
        return $this->render("scenario/editScenario.html.twig", array(
            "form" => $form->createView(),
            "scenario" => $scenario,
        ));
    }
    /**
     * @Route("/scenario_delete{id}", name="scenario.delete")
     */
    public function deleteScenarioAction(Request $request, ObjectManager $manager)
    {
        /*On récupère lescénario que l'on veut supprimer depuis la base*/


        $id = $request->get('id');
        $repoScenario = $manager->getRepository(\AppBundle\Entity\Scenario::class);
        $scenario = $repoScenario->find($id);


        $form = $this->createForm(\AppBundle\Form\ScenarioDeleteType::class, $scenario);

        $form->handleRequest($request);

        /*On supprime le scénario de la base*/

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->remove($scenario);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }
        return $this->render("scenario/deleteScenario.html.twig", array(
            "form" => $form->createView(),
            "scenario" => $scenario,
        ));
    }
}
