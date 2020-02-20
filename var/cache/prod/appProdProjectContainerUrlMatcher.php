<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // controleur
        if ('/controleur' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DomoHomeController::indexAction',  '_route' => 'controleur',);
        }

        if (0 === strpos($pathinfo, '/mode_')) {
            // mode.liste
            if ('/mode_liste' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ModeChauffageController::listeModeAction',  '_route' => 'mode.liste',);
            }

            // mode.create
            if ('/mode_create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ModeChauffageController::createModeAction',  '_route' => 'mode.create',);
            }

            // mode.edit
            if (0 === strpos($pathinfo, '/mode_edit') && preg_match('#^/mode_edit(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'mode.edit']), array (  '_controller' => 'AppBundle\\Controller\\ModeChauffageController::editModeAction',));
            }

            // mode.delete
            if (0 === strpos($pathinfo, '/mode_delete') && preg_match('#^/mode_delete(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'mode.delete']), array (  '_controller' => 'AppBundle\\Controller\\ModeChauffageController::deleteModeAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/scenario_')) {
            // scenario.liste
            if ('/scenario_liste' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ScenarioController::listeScenarioAction',  '_route' => 'scenario.liste',);
            }

            // scenario.create
            if ('/scenario_create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ScenarioController::createScenarioAction',  '_route' => 'scenario.create',);
            }

            // scenario.edit
            if (0 === strpos($pathinfo, '/scenario_edit') && preg_match('#^/scenario_edit(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'scenario.edit']), array (  '_controller' => 'AppBundle\\Controller\\ScenarioController::editScenarioAction',));
            }

            // scenario.delete
            if (0 === strpos($pathinfo, '/scenario_delete') && preg_match('#^/scenario_delete(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'scenario.delete']), array (  '_controller' => 'AppBundle\\Controller\\ScenarioController::deleteScenarioAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
