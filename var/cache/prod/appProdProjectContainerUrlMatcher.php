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
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // mail
        if ('/mail' === $pathinfo) {
            return array (  '_controller' => 'ReconBundle\\Controller\\UserController::mailAction',  '_route' => 'mail',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'ReconBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // inscription
            if ('/inscription' === $pathinfo) {
                return array (  '_controller' => 'ReconBundle\\Controller\\UserController::ajouterAction',  '_route' => 'inscription',);
            }

            // inscriptionsuite
            if (0 === strpos($pathinfo, '/inscriptionsuite') && preg_match('#^/inscriptionsuite/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscriptionsuite')), array (  '_controller' => 'ReconBundle\\Controller\\UserController::inscriptionsuiteAction',));
            }

        }

        // situation
        if (0 === strpos($pathinfo, '/situation') && preg_match('#^/situation/(?P<id>[^/]++)/(?P<type>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'situation')), array (  '_controller' => 'ReconBundle\\Controller\\UserController::situationAction',));
        }

        // deconnexion
        if ('/deco' === $pathinfo) {
            return array (  '_controller' => 'ReconBundle\\Controller\\DefaultController::unconnectAction',  '_route' => 'deconnexion',);
        }

        // recon_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ReconBundle\\Controller\\DefaultController::indexAction',  '_route' => 'recon_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_recon_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'recon_homepage'));
            }

            return $ret;
        }
        not_recon_homepage:

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

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
