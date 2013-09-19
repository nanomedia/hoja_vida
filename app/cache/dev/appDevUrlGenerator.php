<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        '_curo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\curriculoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curriculo/curo',    ),  ),  4 =>   array (  ),),
        '_panel_usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\curriculoBundle\\Controller\\DefaultController::panel_usuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curriculo/panel_usuario',    ),  ),  4 =>   array (  ),),
        '_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\curriculoBundle\\Controller\\DefaultController::logeo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curriculo/login',    ),  ),  4 =>   array (  ),),
        '_login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\curriculoBundle\\Controller\\DefaultController::login_check',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curriculo/login_check',    ),  ),  4 =>   array (  ),),
        '_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\curriculoBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curriculo/logout',    ),  ),  4 =>   array (  ),),
        '_llenagrid' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/llenagrid',    ),  ),  4 =>   array (  ),),
        '_lista_postulante' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DefaultController::direcAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lista_postulante',    ),  ),  4 =>   array (  ),),
        '_datos_mantenimiento' => array (  0 =>   array (    0 => 'codigo',  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DefaultController::datos_mantenimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codigo',    ),    1 =>     array (      0 => 'text',      1 => '/datos_mantenimiento',    ),  ),  4 =>   array (  ),),
        '_actualiza_postulante' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DefaultController::actualiza_postulanteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/actualiza_postulante',    ),  ),  4 =>   array (  ),),
        '_index' => array (  0 =>   array (    0 => 'dni',  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dni',    ),    1 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),),
        '_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),),
        '_newDatosPersonales' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarDatosPersonales',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newDatosPersonales',    ),  ),  4 =>   array (  ),),
        '_newDatosPostulante' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarDatosPostulante',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newDatosPostulante',    ),  ),  4 =>   array (  ),),
        '_newDatosAcademicos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarDatosAcademicos',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newDatosAcademicos',    ),  ),  4 =>   array (  ),),
        '_newExpProfesional' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarExpProfesional',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newExpProfesional',    ),  ),  4 =>   array (  ),),
        '_newConducta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarConducta',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newConducta',    ),  ),  4 =>   array (  ),),
        '_infojuefis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarinfojuefis',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/infojuefis',    ),  ),  4 =>   array (  ),),
        '_direcproc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertardirecproc',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/direcproc',    ),  ),  4 =>   array (  ),),
        '_infocolegio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarinfocolegio',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/infocolegio',    ),  ),  4 =>   array (  ),),
        '_info_patrimonial' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarinfo_patrimonial',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info_patrimonial',    ),  ),  4 =>   array (  ),),
        '_mov_migratorio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarmov_migratorio',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mov_migratorio',    ),  ),  4 =>   array (  ),),
        '_info_camara' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarInformacionCamaInfo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info_camara',    ),  ),  4 =>   array (  ),),
        '_info_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarInformacionRegistroDe',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info_registro',    ),  ),  4 =>   array (  ),),
        '_Postulante_red' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\PruebaController::iniciando_prebasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/red',    ),  ),  4 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
