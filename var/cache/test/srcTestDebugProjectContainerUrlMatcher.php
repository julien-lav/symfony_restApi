<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcTestDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/api/users':
                // app_users_getusers
                $ret = array('_route' => 'app_users_getusers', '_controller' => 'App\\Controller\\UsersController::getUsersAction');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_users_getusers;
                }

                return $ret;
                not_app_users_getusers:
                // app_users_postusers
                $ret = array('_route' => 'app_users_postusers', '_controller' => 'App\\Controller\\UsersController::postUsersAction');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_users_postusers;
                }

                return $ret;
                not_app_users_postusers:
                // app_users_putuser
                $ret = array('_route' => 'app_users_putuser', '_controller' => 'App\\Controller\\UsersController::putUserAction');
                if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_users_putuser;
                }

                return $ret;
                not_app_users_putuser:
                break;
            default:
                $routes = array(
                    '/articles' => array(array('_route' => 'app_articles_postarticles', '_controller' => 'App\\Controller\\ArticlesController::postArticlesAction'), null, array('POST' => 0), null),
                    '/users' => array(array('_route' => 'app_users_postusers_1', '_controller' => 'App\\Controller\\UsersController::postUsersAction'), null, array('POST' => 0), null),
                    '/api/doc.json' => array(array('_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'), null, array('GET' => 0), null),
                    '/api/doc' => array(array('_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'), null, array('GET' => 0), null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/api/(?'
                        .'|users/([^/]++)(?'
                            .'|(*:32)'
                        .')'
                        .'|art(?'
                            .'|icles(?'
                                .'|(?:\\.(json|xml|html))?(*:76)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:116)'
                                .'|(?:\\.(json|xml|html))?(*:146)'
                            .')'
                            .'|cticles/([^/\\.]++)(?:\\.(json|xml|html))?(*:195)'
                        .')'
                    .')'
                    .'|/users(?'
                        .'|(?:\\.(json|xml|html))?(*:236)'
                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:277)'
                        .'|(?:\\.(json|xml|html))?(*:307)'
                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(?'
                            .'|(*:351)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 32:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_users_getuser
                        $ret = $this->mergeDefaults(array('_route' => 'app_users_getuser') + $matches, array('_controller' => 'App\\Controller\\UsersController::getUserAction'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_users_getuser;
                        }

                        return $ret;
                        not_app_users_getuser:

                        // app_users_deleteuser
                        $ret = $this->mergeDefaults(array('_route' => 'app_users_deleteuser') + $matches, array('_controller' => 'App\\Controller\\UsersController::deleteUserAction'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_users_deleteuser;
                        }

                        return $ret;
                        not_app_users_deleteuser:

                        break;
                    case 351:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // put_user
                        $ret = $this->mergeDefaults(array('_route' => 'put_user') + $matches, array('_controller' => 'App\\Controller\\UsersController:putUserAction', '_format' => 'json'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_put_user;
                        }

                        return $ret;
                        not_put_user:

                        // delete_user
                        $ret = $this->mergeDefaults(array('_route' => 'delete_user') + $matches, array('_controller' => 'App\\Controller\\UsersController:deleteUserAction', '_format' => 'json'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_delete_user;
                        }

                        return $ret;
                        not_delete_user:

                        break;
                    default:
                        $routes = array(
                            76 => array(array('_route' => 'get_articles', '_controller' => 'App\\Controller\\ArticlesController:getArticlesAction', '_format' => 'json'), array('_format'), array('GET' => 0), null),
                            116 => array(array('_route' => 'get_article', '_controller' => 'App\\Controller\\ArticlesController:getArticleAction', '_format' => 'json'), array('id', '_format'), array('GET' => 0), null),
                            146 => array(array('_route' => 'post_articles', '_controller' => 'App\\Controller\\ArticlesController:postArticlesAction', '_format' => 'json'), array('_format'), array('POST' => 0), null),
                            195 => array(array('_route' => 'delete_artcticle', '_controller' => 'App\\Controller\\ArticlesController:deleteArtcticleAction', '_format' => 'json'), array('id', '_format'), array('DELETE' => 0), null),
                            236 => array(array('_route' => 'get_users', '_controller' => 'App\\Controller\\UsersController:getUsersAction', '_format' => 'json'), array('_format'), array('GET' => 0), null),
                            277 => array(array('_route' => 'get_user', '_controller' => 'App\\Controller\\UsersController:getUserAction', '_format' => 'json'), array('id', '_format'), array('GET' => 0), null),
                            307 => array(array('_route' => 'post_users', '_controller' => 'App\\Controller\\UsersController:postUsersAction', '_format' => 'json'), array('_format'), array('POST' => 0), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (351 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
