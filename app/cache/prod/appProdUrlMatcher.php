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
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // Caravane_bij_ulpload
        if ($pathinfo === '/filesupload') {
            return array (  '_controller' => 'Caravane\\Bundle\\BIJUploadBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Caravane_bij_ulpload',);
        }

        // caravane_ui_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'caravane_ui_default_index')), array (  '_controller' => 'Caravane\\UIBundle\\Controller\\DefaultController::indexAction',));
        }

        // caravane_dev_default_updatetable
        if ($pathinfo === '/updateTable') {
            return array (  '_controller' => 'Caravane\\DevBundle\\Controller\\DefaultController::updateTableAction',  '_route' => 'caravane_dev_default_updatetable',);
        }

        if (0 === strpos($pathinfo, '/fill_')) {
            // caravane_dev_default_fillslice2invoice
            if ($pathinfo === '/fill_slice2invoice') {
                return array (  '_controller' => 'Caravane\\DevBundle\\Controller\\DefaultController::fillSlice2InvoiceAction',  '_route' => 'caravane_dev_default_fillslice2invoice',);
            }

            if (0 === strpos($pathinfo, '/fill_product2')) {
                // caravane_dev_default_fillproduct2offre
                if ($pathinfo === '/fill_product2offre') {
                    return array (  '_controller' => 'Caravane\\DevBundle\\Controller\\DefaultController::fillProduct2offreAction',  '_route' => 'caravane_dev_default_fillproduct2offre',);
                }

                // caravane_dev_default_fillproduct2job
                if ($pathinfo === '/fill_product2job') {
                    return array (  '_controller' => 'Caravane\\DevBundle\\Controller\\DefaultController::fillProduct2jobAction',  '_route' => 'caravane_dev_default_fillproduct2job',);
                }

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // CaravaneOrganicBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'CaravaneOrganicBundle_homepage');
            }

            return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\DashboardController::indexAction',  '_route' => 'CaravaneOrganicBundle_homepage',);
        }

        if (0 === strpos($pathinfo, '/client')) {
            // client
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client');
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
            }

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::showAction',));
            }

            // client_new
            if ($pathinfo === '/client/new') {
                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }

            // client_create
            if ($pathinfo === '/client/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_create;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
            }
            not_client_create:

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::editAction',));
            }

            // client_update
            if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::updateAction',));
            }
            not_client_update:

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

            // client_autocomplete
            if ($pathinfo === '/client/autocomplete') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_client_autocomplete;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::autocompleteAction',  '_format' => 'json',  '_route' => 'client_autocomplete',);
            }
            not_client_autocomplete:

            // client_get_data
            if (preg_match('#^/client/(?P<id>[^/]++)/get_data$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_get_data;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_get_data')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\ClientController::getDataAction',));
            }
            not_client_get_data:

        }

        if (0 === strpos($pathinfo, '/stock')) {
            // tent
            if (rtrim($pathinfo, '/') === '/stock') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tent');
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::indexAction',  '_route' => 'tent',);
            }

            // tent_show
            if (preg_match('#^/stock/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tent_show')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::showAction',));
            }

            // tent_new
            if ($pathinfo === '/stock/new') {
                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::newAction',  '_route' => 'tent_new',);
            }

            // tent_create
            if ($pathinfo === '/stock/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tent_create;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::createAction',  '_route' => 'tent_create',);
            }
            not_tent_create:

            // tent_edit
            if (preg_match('#^/stock/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tent_edit')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::editAction',));
            }

            // tent_update
            if (preg_match('#^/stock/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tent_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tent_update')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::updateAction',));
            }
            not_tent_update:

            // tent_delete
            if (preg_match('#^/stock/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tent_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tent_delete')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::deleteAction',));
            }
            not_tent_delete:

            // tent_get_available
            if ($pathinfo === '/stock/get_available') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tent_get_available;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::getAvailableFromRouteAction',  '_route' => 'tent_get_available',);
            }
            not_tent_get_available:

            // tent_remove_document
            if (preg_match('#^/stock/(?P<id>[^/]++)/remove_document/(?P<documentid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tent_remove_document;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tent_remove_document')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TentController::removeDocumentAction',));
            }
            not_tent_remove_document:

        }

        if (0 === strpos($pathinfo, '/offer')) {
            // offre
            if (rtrim($pathinfo, '/') === '/offer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'offre');
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::indexAction',  '_route' => 'offre',);
            }

            // offre_show
            if (preg_match('#^/offer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_show')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::showAction',));
            }

            // offre_new
            if ($pathinfo === '/offer/new') {
                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::newAction',  '_route' => 'offre_new',);
            }

            // offre_pdf
            if (preg_match('#^/offer/(?P<_locale>[^/]++)/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_pdf')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::pdfAction',));
            }

            // offre_create
            if ($pathinfo === '/offer/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_create;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::createAction',  '_route' => 'offre_create',);
            }
            not_offre_create:

            // offre_edit
            if (preg_match('#^/offer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_edit')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::editAction',));
            }

            // offre_update
            if (preg_match('#^/offer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_update')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::updateAction',));
            }
            not_offre_update:

            // offre_delete
            if (preg_match('#^/offer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_delete')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::deleteAction',));
            }
            not_offre_delete:

            // offre_remove_product
            if (preg_match('#^/offer/(?P<id>[^/]++)/remove_product/(?P<productid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_remove_product;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_remove_product')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::removeProductAction',));
            }
            not_offre_remove_product:

            // offre_add_tent
            if (preg_match('#^/offer/(?P<id>[^/]++)/add_stock_product/(?P<tentid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_add_tent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_add_tent')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::addStockProductAction',));
            }
            not_offre_add_tent:

            // offre_add_transport
            if (preg_match('#^/offer/(?P<id>[^/]++)/add_transport_product/(?P<transportid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_add_transport')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::addTransportProductAction',));
            }

            // offre_slice_remove_product
            if (preg_match('#^/offer/(?P<id>[^/]++)/remove_slice/(?P<productid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_slice_remove_product;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_slice_remove_product')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::removeSliceAction',));
            }
            not_offre_slice_remove_product:

            // offre_sort_products
            if (preg_match('#^/offer/(?P<id>[^/]++)/sort_products$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_sort_products;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_sort_products')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::sortProductsAction',));
            }
            not_offre_sort_products:

            if (0 === strpos($pathinfo, '/offer/resolve')) {
                // offre_resolve
                if ($pathinfo === '/offer/resolve') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_offre_resolve;
                    }

                    return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::resolveIssueAction',  '_route' => 'offre_resolve',);
                }
                not_offre_resolve:

                // offre_resolve_confirm
                if ($pathinfo === '/offer/resolve/confirm') {
                    return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::resolveConfirmAction',  '_route' => 'offre_resolve_confirm',);
                }

            }

            // offre_remove_document
            if (preg_match('#^/offer/(?P<id>[^/]++)/remove_document/(?P<documentid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_remove_document;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_remove_document')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\OffreController::removeDocumentAction',));
            }
            not_offre_remove_document:

        }

        if (0 === strpos($pathinfo, '/invoice')) {
            // invoice
            if (rtrim($pathinfo, '/') === '/invoice') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'invoice');
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::indexAction',  '_route' => 'invoice',);
            }

            // invoice_show
            if (preg_match('#^/invoice/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_show')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::showAction',));
            }

            // invoice_pdf
            if (preg_match('#^/invoice/(?P<_locale>[^/]++)/(?P<id>[^/]++)/pdf/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_pdf')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::pdfAction',));
            }

            // invoice_new_from_job
            if (0 === strpos($pathinfo, '/invoice/newfromjob') && preg_match('#^/invoice/newfromjob/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_new_from_job')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::newFromJobAction',));
            }

            // invoice_sort_products
            if (preg_match('#^/invoice/(?P<id>[^/]++)/sort_products$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_invoice_sort_products;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_sort_products')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::sortProductsAction',));
            }
            not_invoice_sort_products:

            // invoice_add_transport
            if (preg_match('#^/invoice/(?P<id>[^/]++)/add_transport_product/(?P<transportid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_add_transport')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::addTransportProductAction',));
            }

            // invoice_new
            if ($pathinfo === '/invoice/new') {
                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::newAction',  '_route' => 'invoice_new',);
            }

            // invoice_create
            if ($pathinfo === '/invoice/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_invoice_create;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::createAction',  '_route' => 'invoice_create',);
            }
            not_invoice_create:

            // invoice_edit
            if (preg_match('#^/invoice/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_edit')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::editAction',));
            }

            // invoice_update
            if (preg_match('#^/invoice/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_invoice_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_update')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::updateAction',));
            }
            not_invoice_update:

            // invoice_delete
            if (preg_match('#^/invoice/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_invoice_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_delete')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::deleteAction',));
            }
            not_invoice_delete:

            // invoice_remove_product
            if (preg_match('#^/invoice/(?P<id>[^/]++)/remove_product/(?P<productid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_invoice_remove_product;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice_remove_product')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\InvoiceController::removeProductAction',));
            }
            not_invoice_remove_product:

        }

        if (0 === strpos($pathinfo, '/job')) {
            // job
            if (rtrim($pathinfo, '/') === '/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'job');
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::indexAction',  '_route' => 'job',);
            }

            // job_show
            if (preg_match('#^/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_show')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::showAction',));
            }

            // job_new
            if ($pathinfo === '/job/new') {
                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::newAction',  '_route' => 'job_new',);
            }

            // job_pdf
            if (preg_match('#^/job/(?P<_locale>[^/]++)/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_pdf')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::pdfAction',));
            }

            // job_create
            if ($pathinfo === '/job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_create;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::createAction',  '_route' => 'job_create',);
            }
            not_job_create:

            // job_edit
            if (preg_match('#^/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_edit')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::editAction',));
            }

            // job_update
            if (preg_match('#^/job/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_update')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::updateAction',));
            }
            not_job_update:

            // job_delete
            if (preg_match('#^/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_delete')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::deleteAction',));
            }
            not_job_delete:

            // job_remove_product
            if (preg_match('#^/job/(?P<id>[^/]++)/remove_product/(?P<productid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_remove_product;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_remove_product')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::removeProductAction',));
            }
            not_job_remove_product:

            // job_add_tent
            if (preg_match('#^/job/(?P<id>[^/]++)/add_stock_product/(?P<tentid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_add_tent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_add_tent')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::addStockProductAction',));
            }
            not_job_add_tent:

            // job_add_transport
            if (preg_match('#^/job/(?P<id>[^/]++)/add_transport_product/(?P<transportid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_add_transport')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::addTransportProductAction',));
            }

            // job_sort_products
            if (preg_match('#^/job/(?P<id>[^/]++)/sort_products$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_sort_products;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_sort_products')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::sortProductsAction',));
            }
            not_job_sort_products:

            // job_slice_remove_product
            if (preg_match('#^/job/(?P<id>[^/]++)/remove_slice/(?P<productid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_slice_remove_product;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_slice_remove_product')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::removeSliceAction',));
            }
            not_job_slice_remove_product:

            // job_remove_document
            if (preg_match('#^/job/(?P<id>[^/]++)/remove_document/(?P<documentid>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_remove_document;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_remove_document')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\JobController::removeDocumentAction',));
            }
            not_job_remove_document:

        }

        if (0 === strpos($pathinfo, '/planning')) {
            // planning
            if (rtrim($pathinfo, '/') === '/planning') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'planning');
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\PlanningController::indexAction',  '_route' => 'planning',);
            }

            // planning_show
            if (preg_match('#^/planning/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_show')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\PlanningController::showAction',));
            }

            // planning_new
            if ($pathinfo === '/planning/new') {
                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\PlanningController::newAction',  '_route' => 'planning_new',);
            }

            // planning_create
            if ($pathinfo === '/planning/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planning_create;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\PlanningController::createAction',  '_route' => 'planning_create',);
            }
            not_planning_create:

            // planning_edit
            if (preg_match('#^/planning/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_edit')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\PlanningController::editAction',));
            }

            // planning_update
            if (preg_match('#^/planning/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planning_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_update')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\PlanningController::updateAction',));
            }
            not_planning_update:

            // planning_delete
            if (preg_match('#^/planning/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planning_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_delete')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\PlanningController::deleteAction',));
            }
            not_planning_delete:

        }

        // dashboard
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dashboard');
            }

            return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\DashboardController::indexAction',  '_route' => 'dashboard',);
        }

        if (0 === strpos($pathinfo, '/transport')) {
            // transport
            if (rtrim($pathinfo, '/') === '/transport') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'transport');
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TransportController::indexAction',  '_route' => 'transport',);
            }

            // transport_show
            if (preg_match('#^/transport/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transport_show')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TransportController::showAction',));
            }

            // transport_new
            if ($pathinfo === '/transport/new') {
                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TransportController::newAction',  '_route' => 'transport_new',);
            }

            // transport_create
            if ($pathinfo === '/transport/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_transport_create;
                }

                return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TransportController::createAction',  '_route' => 'transport_create',);
            }
            not_transport_create:

            // transport_edit
            if (preg_match('#^/transport/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transport_edit')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TransportController::editAction',));
            }

            // transport_update
            if (preg_match('#^/transport/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_transport_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transport_update')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TransportController::updateAction',));
            }
            not_transport_update:

            // transport_delete
            if (preg_match('#^/transport/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_transport_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transport_delete')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\TransportController::deleteAction',));
            }
            not_transport_delete:

        }

        // search
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search/(?P<query>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_search;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'search')), array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\SearchController::searchAction',));
        }
        not_search:

        // fullcalendar_loader
        if ($pathinfo === '/fc-load-events') {
            return array (  '_controller' => 'Caravane\\Bundle\\OrganicBundle\\Controller\\PlanningController::loadEventsAction',  '_route' => 'fullcalendar_loader',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Caravane\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Caravane\\UserBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Caravane\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Caravane\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Caravane\\UserBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Caravane\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Caravane\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
