<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
