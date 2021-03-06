<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // _login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'proyectos\\AccesoBundle\\Controller\\AccesoController::logeo',  '_route' => '_login',);
                }

                // _login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'proyectos\\AccesoBundle\\Controller\\AccesoController::login_check',  '_route' => '_login_check',);
                }

            }

            // _logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'proyectos\\AccesoBundle\\Controller\\AccesoController::logoutAction',  '_route' => '_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/curriculo')) {
            // _lista_usuarios
            if ($pathinfo === '/curriculo/lista_usuarios') {
                return array (  '_controller' => 'proyectos\\curriculoBundle\\Controller\\DefaultController::panel_usuarioAction',  '_route' => '_lista_usuarios',);
            }

            // _grid_usuarios
            if ($pathinfo === '/curriculo/grid_usuarios') {
                return array (  '_controller' => 'proyectos\\curriculoBundle\\Controller\\DefaultController::listaUsuariosAction',  '_route' => '_grid_usuarios',);
            }

        }

        if (0 === strpos($pathinfo, '/registro')) {
            // _frm_update_conducta
            if (0 === strpos($pathinfo, '/registro/frm_update_conducta') && preg_match('#^/registro/frm_update_conducta/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_frm_update_conducta')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ConductaController::direcAction',));
            }

            // _actualiza_conducta
            if ($pathinfo === '/registro/actualiza_conducta') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ConductaController::ActualizaExpConductaAction',  '_route' => '_actualiza_conducta',);
            }

            // _frm_update_datosacademicos
            if (0 === strpos($pathinfo, '/registro/frm_update_datosacademicos') && preg_match('#^/registro/frm_update_datosacademicos/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_frm_update_datosacademicos')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DatosAcademicosController::frmDatosAcademicosAction',));
            }

            // _update_datosAcademicos
            if ($pathinfo === '/registro/update_datosAcademicos') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DatosAcademicosController::ActualizaExpProfesionalAction',  '_route' => '_update_datosAcademicos',);
            }

            if (0 === strpos($pathinfo, '/registro/frm_update_datosp')) {
                // _frm_update_datospersonales
                if (0 === strpos($pathinfo, '/registro/frm_update_datospersonales') && preg_match('#^/registro/frm_update_datospersonales/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_frm_update_datospersonales')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DatosPersonalesController::direcAction',));
                }

                // _frm_update_datospostulante
                if (0 === strpos($pathinfo, '/registro/frm_update_datospostulante') && preg_match('#^/registro/frm_update_datospostulante/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_frm_update_datospostulante')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DatosPostulanteController::direcAction',));
                }

            }

            // _updateDatosPostulante
            if ($pathinfo === '/registro/updateDatosPostulante') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\DatosPostulanteController::updateDatosPostulanteAction',  '_route' => '_updateDatosPostulante',);
            }

            // _frm_update_expprofesional
            if (0 === strpos($pathinfo, '/registro/frm_update_expprofesional') && preg_match('#^/registro/frm_update_expprofesional/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_frm_update_expprofesional')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ExpProfesionalController::llena_ExpProfesionalAction',));
            }

            // _update_expprofesional
            if ($pathinfo === '/registro/_update_expprofesional') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ExpProfesionalController::ActualizaExpProfesionalAction',  '_route' => '_update_expprofesional',);
            }

            // _frm_update_info_cam
            if (0 === strpos($pathinfo, '/registro/frm_update_info_cam') && preg_match('#^/registro/frm_update_info_cam/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_frm_update_info_cam')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\InfoCamaraComercioController::rubro2Action',));
            }

            // _actualiza_expprofesional
            if ($pathinfo === '/registro/actualiza_expprofesional') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\InfoCamaraComercioController::ActualizaExpProfesionalAction',  '_route' => '_actualiza_expprofesional',);
            }

            // _gridPostulante
            if ($pathinfo === '/registro/gridPostulante') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ListadosController::indexAction',  '_route' => '_gridPostulante',);
            }

            // _lista_postulantes
            if ($pathinfo === '/registro/lista_postulantes') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ListadosController::direcAction',  '_route' => '_lista_postulantes',);
            }

            // _datos_mantenimiento
            if (0 === strpos($pathinfo, '/registro/datos_mantenimiento') && preg_match('#^/registro/datos_mantenimiento/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_datos_mantenimiento')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ListadosController::datos_mantenimientoAction',));
            }

            if (0 === strpos($pathinfo, '/registro/actualiza_')) {
                // _actualiza_postulante
                if ($pathinfo === '/registro/actualiza_postulante') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ListadosController::actualiza_postulanteAction',  '_route' => '_actualiza_postulante',);
                }

                // _actualiza_dacademicos
                if ($pathinfo === '/registro/actualiza_dacademicos') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\ListadosController::actualizar_datosacademicos',  '_route' => '_actualiza_dacademicos',);
                }

            }

            // _index
            if (0 === strpos($pathinfo, '/registro/index') && preg_match('#^/registro/index/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_index')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::indexAction',));
            }

            // _uploadFoto
            if ($pathinfo === '/registro/uploadFoto') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::uploadFotoAction',  '_route' => '_uploadFoto',);
            }

            // _home
            if ($pathinfo === '/registro/home') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::homeAction',  '_route' => '_home',);
            }

            if (0 === strpos($pathinfo, '/registro/new')) {
                if (0 === strpos($pathinfo, '/registro/newDatos')) {
                    if (0 === strpos($pathinfo, '/registro/newDatosP')) {
                        // _newDatosPersonales
                        if ($pathinfo === '/registro/newDatosPersonales') {
                            return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarDatosPersonales',  '_route' => '_newDatosPersonales',);
                        }

                        // _newDatosPostulante
                        if ($pathinfo === '/registro/newDatosPostulante') {
                            return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarDatosPostulante',  '_route' => '_newDatosPostulante',);
                        }

                    }

                    // _newDatosAcademicos
                    if ($pathinfo === '/registro/newDatosAcademicos') {
                        return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarDatosAcademicos',  '_route' => '_newDatosAcademicos',);
                    }

                }

                // _newExpProfesional
                if ($pathinfo === '/registro/newExpProfesional') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarExpProfesional',  '_route' => '_newExpProfesional',);
                }

                // _newConducta
                if ($pathinfo === '/registro/newConducta') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarConducta',  '_route' => '_newConducta',);
                }

            }

            // _infojuefis
            if ($pathinfo === '/registro/infojuefis') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarinfojuefis',  '_route' => '_infojuefis',);
            }

            // _direcproc
            if ($pathinfo === '/registro/direcproc') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertardirecproc',  '_route' => '_direcproc',);
            }

            if (0 === strpos($pathinfo, '/registro/info')) {
                // _infocolegio
                if ($pathinfo === '/registro/infocolegio') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarinfocolegio',  '_route' => '_infocolegio',);
                }

                // _info_patrimonial
                if ($pathinfo === '/registro/info_patrimonial') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarinfo_patrimonial',  '_route' => '_info_patrimonial',);
                }

            }

            // _mov_migratorio
            if ($pathinfo === '/registro/mov_migratorio') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarmov_migratorio',  '_route' => '_mov_migratorio',);
            }

            if (0 === strpos($pathinfo, '/registro/info_')) {
                // _info_camara
                if ($pathinfo === '/registro/info_camara') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarInformacionCamaInfo',  '_route' => '_info_camara',);
                }

                // _info_registro
                if ($pathinfo === '/registro/info_registro') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MantenimientoController::insertarInformacionRegistroDe',  '_route' => '_info_registro',);
                }

            }

            // _frm_update_movMigratorio
            if (0 === strpos($pathinfo, '/registro/frm_update_movMigratorio') && preg_match('#^/registro/frm_update_movMigratorio/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_frm_update_movMigratorio')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MovMigratorioController::movAction',));
            }

            // _update_movMigratorio
            if ($pathinfo === '/registro/update_movMigratorio') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\MovMigratorioController::update_movMigratorioAction',  '_route' => '_update_movMigratorio',);
            }

            // _frm_updateInfoPatrimonial
            if (0 === strpos($pathinfo, '/registro/frm_updateInfoPatrimonial') && preg_match('#^/registro/frm_updateInfoPatrimonial/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_frm_updateInfoPatrimonial')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\infoPatrimonialController::infoPatrimonialAction',));
            }

            // _ActualizainfoPatrimonial
            if ($pathinfo === '/registro/ActualizainfoPatrimonial') {
                return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\infoPatrimonialController::ActualizainfoPatrimonialAction',  '_route' => '_ActualizainfoPatrimonial',);
            }

            // _pdf
            if (0 === strpos($pathinfo, '/registro/pdf') && preg_match('#^/registro/pdf/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_pdf')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\reporteController::pdfAction',));
            }

            // _rubro2
            if (0 === strpos($pathinfo, '/registro/rubro2') && preg_match('#^/registro/rubro2/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_rubro2')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\rubro2Controller::rubro2Action',));
            }

            if (0 === strpos($pathinfo, '/registro/upInfo')) {
                // _upInfo
                if ($pathinfo === '/registro/upInfo') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\rubro2Controller::frmUpdateInfo1Action',  '_route' => '_upInfo',);
                }

                // _upInfo2
                if ($pathinfo === '/registro/upInfo2') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\rubro2Controller::frmUpdateInfo2Action',  '_route' => '_upInfo2',);
                }

                // _upInfo3
                if ($pathinfo === '/registro/upInfo3') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\rubro2Controller::frmUpdateInfo3Action',  '_route' => '_upInfo3',);
                }

            }

            // _rubro4
            if (0 === strpos($pathinfo, '/registro/rubro4') && preg_match('#^/registro/rubro4/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_rubro4')), array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\rubro4Controller::rubro4Action',));
            }

            if (0 === strpos($pathinfo, '/registro/u')) {
                // _up_rubro4
                if ($pathinfo === '/registro/upRubro4') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\rubro4Controller::rubro4_updateAction',  '_route' => '_up_rubro4',);
                }

                // _util_universidad
                if ($pathinfo === '/registro/util_universidad') {
                    return array (  '_controller' => 'proyectos\\hojaVidaBundle\\Controller\\utilController::cbounivAction',  '_route' => '_util_universidad',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
