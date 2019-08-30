<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
            '/admin/list_user' => [[['_route' => 'admin.list_user', '_controller' => 'App\\Controller\\AdminController::admin_list_user'], null, null, null, false, false, null]],
            '/article/create' => [[['_route' => 'article.create', '_controller' => 'App\\Controller\\Article\\ArticleController::new'], null, null, null, true, false, null]],
            '/article' => [[['_route' => 'article', '_controller' => 'App\\Controller\\HomeController::article'], null, null, null, false, false, null]],
            '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\HomeController::search'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
            '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\HomeController::profile'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/a(?'
                        .'|dmin/edit_(?'
                            .'|user_rank/([^/]++)(*:205)'
                            .'|text/([^/]++)(*:226)'
                        .')'
                        .'|rticle/(?'
                            .'|/edit/([^/]++)(*:259)'
                            .'|delete/([^/]++)(*:282)'
                            .'|([a-z0-9\\-]*)\\-([^/]++)(*:313)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            205 => [[['_route' => 'admin.update.role', '_controller' => 'App\\Controller\\AdminController::edit_rank'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            226 => [[['_route' => 'admin.edit', '_controller' => 'App\\Controller\\AdminController::edit_cms'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            259 => [[['_route' => 'article.edit', '_controller' => 'App\\Controller\\Article\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            282 => [[['_route' => 'article.delete', '_controller' => 'App\\Controller\\Article\\ArticleController::delete'], ['id'], null, null, false, true, null]],
            313 => [[['_route' => 'article.show', '_controller' => 'App\\Controller\\HomeController::show'], ['slug', 'id'], null, null, false, true, null]],
        ];
    }
}
