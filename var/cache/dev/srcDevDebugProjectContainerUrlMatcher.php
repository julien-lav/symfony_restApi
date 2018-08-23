<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
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
                        .'|art(?'
                            .'|icles(?'
                                .'|/([^/]++)(*:38)'
                                .'|(?:\\.(json|xml|html))?(*:67)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:107)'
                                .'|(?:\\.(json|xml|html))?(*:137)'
                            .')'
                            .'|cticles/([^/\\.]++)(?:\\.(json|xml|html))?(*:186)'
                        .')'
                        .'|users/([^/]++)(?'
                            .'|(*:212)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:253)'
                        .'|wdt/([^/]++)(*:273)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:319)'
                                .'|router(*:333)'
                                .'|exception(?'
                                    .'|(*:353)'
                                    .'|\\.css(*:366)'
                                .')'
                            .')'
                            .'|(*:376)'
                        .')'
                    .')'
                    .'|/users(?'
                        .'|(?:\\.(json|xml|html))?(*:417)'
                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:458)'
                        .'|(?:\\.(json|xml|html))?(*:488)'
                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(?'
                            .'|(*:532)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 212:
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
                    case 532:
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
                            38 => array(array('_route' => 'app_articles_deleteartcticle', '_controller' => 'App\\Controller\\ArticlesController::deleteArtcticleAction'), array('id'), array('DELETE' => 0), null),
                            67 => array(array('_route' => 'get_articles', '_controller' => 'App\\Controller\\ArticlesController:getArticlesAction', '_format' => 'json'), array('_format'), array('GET' => 0), null),
                            107 => array(array('_route' => 'get_article', '_controller' => 'App\\Controller\\ArticlesController:getArticleAction', '_format' => 'json'), array('id', '_format'), array('GET' => 0), null),
                            137 => array(array('_route' => 'post_articles', '_controller' => 'App\\Controller\\ArticlesController:postArticlesAction', '_format' => 'json'), array('_format'), array('POST' => 0), null),
                            186 => array(array('_route' => 'delete_artcticle', '_controller' => 'App\\Controller\\ArticlesController:deleteArtcticleAction', '_format' => 'json'), array('id', '_format'), array('DELETE' => 0), null),
                            253 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            273 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            319 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            333 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            353 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            366 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            376 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            417 => array(array('_route' => 'get_users', '_controller' => 'App\\Controller\\UsersController:getUsersAction', '_format' => 'json'), array('_format'), array('GET' => 0), null),
                            458 => array(array('_route' => 'get_user', '_controller' => 'App\\Controller\\UsersController:getUserAction', '_format' => 'json'), array('id', '_format'), array('GET' => 0), null),
                            488 => array(array('_route' => 'post_users', '_controller' => 'App\\Controller\\UsersController:postUsersAction', '_format' => 'json'), array('_format'), array('POST' => 0), null),
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

                if (532 === $m) {
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
