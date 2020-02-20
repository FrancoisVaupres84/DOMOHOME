<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModeChauffageController extends Controller
{

    /**
     * @Route("/mode_liste", name="mode.liste")
     */
    public function listeModeAction(Request $request, ObjectManager $manager)
    {
        /*On récupère tous les modes de clim/chauffage en base pour les afficher */

        $repoMode = $manager->getRepository(\AppBundle\Entity\Mode_clim_chauffage::class);
        $modes = $repoMode->findAll();
        return $this->render("mode/listeMode.html.twig", array(
            "modes" => $modes,
        ));
    }
    /**
     * @Route("/mode_create", name="mode.create")
     */
    public function createModeAction(Request $request, ObjectManager $manager)
    {

        /*On crée un mode de clim/chauffage et on le stock en base*/


        $mode = new \AppBundle\Entity\Mode_clim_chauffage();

        $form = $this->createForm(\AppBundle\Form\ModeType::class, $mode);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $mode = $form->getData();
            $manager->persist($mode);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }
        return $this->render("mode/createMode.html.twig", array(
            "form" => $form->createView(),
        ));
    }
    /**
     * @Route("/mode_edit{id}", name="mode.edit")
     */
    public function editModeAction(Request $request, ObjectManager $manager)
    {
        /*On récupère le mode de clim/chauffage que l'on veut editer depuis la base*/

        $id = $request->get('id');
        $repoMode = $manager->getRepository(\AppBundle\Entity\Mode_clim_chauffage::class);
        $mode = $repoMode->find($id);

        /*On édite le mode de clim/chauffage et on le stock en base*/


        $form = $this->createForm(\AppBundle\Form\ModeType::class, $mode);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $mode = $form->getData();
            $manager->persist($mode);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }
        return $this->render("mode/editMode.html.twig", array(
            "form" => $form->createView(),
        ));
    }
    /**
     * @Route("/mode_delete{id}", name="mode.delete")
     */
    public function deleteModeAction(Request $request, ObjectManager $manager)
    {
        /*On récupère le mode de clim/chauffage que l'on veut supprimer depuis la base*/

        $id = $request->get('id');
        $repoMode = $manager->getRepository(\AppBundle\Entity\Mode_clim_chauffage::class);
        $repoClim = $manager->getRepository(\AppBundle\Entity\Clim_chauffage::class);
        $repoScenario  = $manager->getRepository(\AppBundle\Entity\Scenario::class);
        $scenarios = $repoScenario->findBy(array("mode" => $id));
        $clim = $repoClim->findOneBy(array("mode" => $id));
        $mode = $repoMode->find($id);


        $form = $this->createForm(\AppBundle\Form\ModeDeleteType::class, $mode);
        $form->handleRequest($request);

        /*On édite les entités liées à ce mode de clim/chauffage si il y en a et on supprime le mode de la base*/


        if ($form->isSubmitted() && $form->isValid()) {
            if (!is_null($clim)) {
                $clim->setMode(null);
                $manager->persist($clim);
            }
            foreach ($scenarios as $scenario) {
                $scenario->setMode(null);
                $manager->persist($scenario);
            }
            $manager->remove($mode);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }
        return $this->render("mode/deleteMode.html.twig", array(
            "form" => $form->createView(),
            "mode" => $mode,
        ));
    }
}
