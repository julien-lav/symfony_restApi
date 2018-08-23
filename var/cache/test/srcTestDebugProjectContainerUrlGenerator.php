<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcTestDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_articles_postarticles' => array(array(), array('_controller' => 'App\\Controller\\ArticlesController::postArticlesAction'), array(), array(array('text', '/articles')), array(), array()),
        'app_articles_deleteartcticle' => array(array('id'), array('_controller' => 'App\\Controller\\ArticlesController::deleteArtcticleAction'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/articles')), array(), array()),
        'app_users_getusers' => array(array(), array('_controller' => 'App\\Controller\\UsersController::getUsersAction'), array(), array(array('text', '/api/users')), array(), array()),
        'app_users_getuser' => array(array('id'), array('_controller' => 'App\\Controller\\UsersController::getUserAction'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/users')), array(), array()),
        'app_users_postusers' => array(array(), array('_controller' => 'App\\Controller\\UsersController::postUsersAction'), array(), array(array('text', '/api/users')), array(), array()),
        'app_users_postusers_1' => array(array(), array('_controller' => 'App\\Controller\\UsersController::postUsersAction'), array(), array(array('text', '/users')), array(), array()),
        'app_users_putuser' => array(array(), array('_controller' => 'App\\Controller\\UsersController::putUserAction'), array(), array(array('text', '/api/users')), array(), array()),
        'app_users_deleteuser' => array(array('id'), array('_controller' => 'App\\Controller\\UsersController::deleteUserAction'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/users')), array(), array()),
        'app.swagger' => array(array(), array('_controller' => 'nelmio_api_doc.controller.swagger'), array(), array(array('text', '/api/doc.json')), array(), array()),
        'get_users' => array(array('_format'), array('_controller' => 'App\\Controller\\UsersController:getUsersAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('text', '/users')), array(), array()),
        'get_user' => array(array('id', '_format'), array('_controller' => 'App\\Controller\\UsersController:getUserAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('variable', '/', '[^/\\.]++', 'id'), array('text', '/users')), array(), array()),
        'post_users' => array(array('_format'), array('_controller' => 'App\\Controller\\UsersController:postUsersAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('text', '/users')), array(), array()),
        'put_user' => array(array('id', '_format'), array('_controller' => 'App\\Controller\\UsersController:putUserAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('variable', '/', '[^/\\.]++', 'id'), array('text', '/users')), array(), array()),
        'delete_user' => array(array('id', '_format'), array('_controller' => 'App\\Controller\\UsersController:deleteUserAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('variable', '/', '[^/\\.]++', 'id'), array('text', '/users')), array(), array()),
        'get_articles' => array(array('_format'), array('_controller' => 'App\\Controller\\ArticlesController:getArticlesAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('text', '/api/articles')), array(), array()),
        'get_article' => array(array('id', '_format'), array('_controller' => 'App\\Controller\\ArticlesController:getArticleAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('variable', '/', '[^/\\.]++', 'id'), array('text', '/api/articles')), array(), array()),
        'post_articles' => array(array('_format'), array('_controller' => 'App\\Controller\\ArticlesController:postArticlesAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('text', '/api/articles')), array(), array()),
        'delete_artcticle' => array(array('id', '_format'), array('_controller' => 'App\\Controller\\ArticlesController:deleteArtcticleAction', '_format' => 'json'), array('_format' => 'json|xml|html'), array(array('variable', '.', 'json|xml|html', '_format'), array('variable', '/', '[^/\\.]++', 'id'), array('text', '/api/artcticles')), array(), array()),
        'app.swagger_ui' => array(array(), array('_controller' => 'nelmio_api_doc.controller.swagger_ui'), array(), array(array('text', '/api/doc')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
