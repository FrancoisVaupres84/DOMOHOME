<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DomoHomeController extends Controller
{
    /**
     * @Route("/controleur", name="controleur")
     */
    public function indexAction(Request $request, ObjectManager $manager)
    {
        /*On ajoute les noms des images du dossier au tableau images */
        $images = [];

        if ($dossier = opendir('../web/img/')) {
            while (($fichier = readdir($dossier))) {
                array_push(
                    $images,
                    $fichier
                );
            }
        }
        /*On créé une lumiere ou on la recupère en base si elle existe */

        $repoLumiere = $manager->getRepository(\AppBundle\Entity\Lumiere::class);
        $lumieres = $repoLumiere->findAll();
        if (empty($lumieres)) {
            $lumiere = new \AppBundle\Entity\Lumiere();
            $lumiere->setEtat(0);
            $manager->persist($lumiere);
            $manager->flush();

        } else {
            $lumiere = $lumieres[0];
        }

        /*On récupère les données de la lumière du formulaire */

        $etatLight = $request->get('etatLight');
        $onLight = $request->get('OnLight');
        $offLight = $request->get('OffLight');

        /*On hydrate l'objet lumière et on le stock en base */

        if (!is_null($offLight)) {
            $lumiere->setEtat(0);
            $manager->persist($lumiere);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        } elseif (!is_null($onLight)) {
            $lumiere->setEtat(100);
            $manager->persist($lumiere);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        } elseif (!is_null($etatLight)) {
            $lumiere->setEtat($etatLight);
            $manager->persist($lumiere);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }

        /*On créé un volet ou on le recupère en base si il existe */

        $repoVolet = $manager->getRepository(\AppBundle\Entity\Volet::class);
        $volets = $repoVolet->findAll();
        if (empty($volets)) {
            $volet = new \AppBundle\Entity\Volet();
            $volet->setEtat(0);
            $manager->persist($volet);
            $manager->flush();
        } else {
            $volet = $volets[0];
        }

        /*On récupère les données du volet du formulaire */


        $etatVolet = $request->get('etatVolet');
        $onVolet = $request->get('OnVolet');
        $offVolet = $request->get('OffVolet');

        /*On hydrate l'objet volet et on le stock en base */


        if (!is_null($offVolet)) {
            $manager->persist($volet);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        } elseif (!is_null($onVolet)) {
            $volet->setEtat(100);
            $manager->persist($volet);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        } elseif (!is_null($etatVolet)) {
            $volet->setEtat($etatVolet);
            $manager->persist($volet);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }

        /*On créé une clim/chauffage ou on la recupère en base si elle existe */

        $repoClim = $manager->getRepository(\AppBundle\Entity\Clim_chauffage::class);
        $clims = $repoClim->findAll();
        if (empty($clims)) {
            $clim = new \AppBundle\Entity\Clim_chauffage();
            $manager->persist($clim);
            $manager->flush();

        } else {
            $clim = $clims[0];
        }
        /*On recupère le mode de chauffage du formulaire */

        $repoMode = $manager->getRepository(\AppBundle\Entity\Mode_clim_chauffage::class);
        $modes = $repoMode->findAll();
        $mode = $request->get('mode');
        $modeSelectionne = $repoMode->findOneBy(array("nom" => $mode));

        /*On hydrate l'objet clim/chauffage et on le stock en base */


        if (!is_null($mode)) {
            $clim->setMode($modeSelectionne);
            $manager->persist($clim);
            $manager->flush();
            return $this->redirectToRoute("controleur");
        }

        /*On recupère scénario du formulaire */

        $scenarioParam = $request->get('scenario');
        $repoScenario = $manager->getRepository(\AppBundle\Entity\Scenario::class);
        $scenarios = $repoScenario->findAll();

        /*On hydrate les objets clim/chauffage, volet et lumière avec les données du scénario et on les stock en base */

        if (!is_null($scenarioParam)) {
            $scenario = $repoScenario->findOneBy(array("nom" => $scenarioParam));
            $clim->setMode($scenario->getMode());
            $manager->persist($clim);
            $volet->setEtat($scenario->getVolet());
            $manager->persist($volet);
            $lumiere->setEtat($scenario->getLumiere());
            $manager->persist($lumiere);
            $manager->flush();

            return $this->redirectToRoute("controleur");
        }

        /*On transmet les valeurs dont on a besoin à la vue */


        $modeSelect = $clim->getMode();
        $valueVolet = $volet->getEtat();

        return $this->render("controleur/controleur.html.twig", array(
            "valueLight" => $lumiere->getEtat(),
            "valueVolet" => $valueVolet,
            "modes" => $modes,
            "images" => $images,
            "scenarios" => $scenarios,
            "modeSelectionne" => $modeSelect,


        ));
    }
}
