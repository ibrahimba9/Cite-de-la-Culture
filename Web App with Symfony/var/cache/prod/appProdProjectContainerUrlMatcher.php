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

        if (0 === strpos($pathinfo, '/Forum')) {
            // cite_forum_homepage
            if ('/Forum' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Cite\\ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cite_forum_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_cite_forum_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'cite_forum_homepage'));
                }

                return $ret;
            }
            not_cite_forum_homepage:

            // ajouter_sujet
            if ('/Forum/ajouterSujet' === $pathinfo) {
                return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetController::ajouterAction',  '_route' => 'ajouter_sujet',);
            }

            if (0 === strpos($pathinfo, '/Forum/su')) {
                if (0 === strpos($pathinfo, '/Forum/sujet')) {
                    // view_sujet
                    if (preg_match('#^/Forum/sujet/(?P<id>[^/]++)/(?P<titre>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'view_sujet']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetController::afficherAction',));
                    }

                    // vote_message
                    if (0 === strpos($pathinfo, '/Forum/sujet/voteMessage') && preg_match('#^/Forum/sujet/voteMessage/(?P<idmessage>[^/]++)/(?P<vote>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'vote_message']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetController::voteAction',));
                    }

                }

                // supprimer_message
                if (0 === strpos($pathinfo, '/Forum/supprimer') && preg_match('#^/Forum/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_message']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetController::supprimerAction',));
                }

                // suivre_sujet
                if (0 === strpos($pathinfo, '/Forum/suivre') && preg_match('#^/Forum/suivre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'suivre_sujet']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetController::suivreAction',));
                }

            }

            // back_sujet_lister
            if ('/Forum/Back/listeSujets' === $pathinfo) {
                return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::listerAction',  '_route' => 'back_sujet_lister',);
            }

        }

        // cite_user_homepage
        if ('/User' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Cite\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cite_user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_cite_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'cite_user_homepage'));
            }

            return $ret;
        }
        not_cite_user_homepage:

        if (0 === strpos($pathinfo, '/User/forum')) {
            // profil_forum_sujets
            if ('/User/forum/mesSujets' === $pathinfo) {
                return array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::mesSujetsAction',  '_route' => 'profil_forum_sujets',);
            }

            // profil_forum_modifier
            if (0 === strpos($pathinfo, '/User/forum/edit') && preg_match('#^/User/forum/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_forum_modifier']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::modifierMonSujetAction',));
            }

            // profil_forum_supprimer
            if (0 === strpos($pathinfo, '/User/forum/delete') && preg_match('#^/User/forum/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_forum_supprimer']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::supprimerMonSujetAction',));
            }

            // profil_forum_confirm_supprimer
            if (0 === strpos($pathinfo, '/User/forum/confirmDelete') && preg_match('#^/User/forum/confirmDelete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_forum_confirm_supprimer']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::confirmSupprimerMonSujetAction',));
            }

            // profil_invitation_confirm_annuler
            if (0 === strpos($pathinfo, '/User/forum/confirmAnnulerInvitation') && preg_match('#^/User/forum/confirmAnnulerInvitation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_invitation_confirm_annuler']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::confirmAnnulerInvitationAction',));
            }

            // profil_forum_notifications
            if ('/User/forum/notifications' === $pathinfo) {
                return array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::notificationsAction',  '_route' => 'profil_forum_notifications',);
            }

            // profil_forum_suivi
            if ('/User/forum/suivi' === $pathinfo) {
                return array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::suiviAction',  '_route' => 'profil_forum_suivi',);
            }

            // profil_forum_historique
            if ('/User/forum/historique' === $pathinfo) {
                return array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::historiqueAction',  '_route' => 'profil_forum_historique',);
            }

            if (0 === strpos($pathinfo, '/User/forum/inviter')) {
                // profil_forum_inviter
                if (preg_match('#^/User/forum/inviter/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_forum_inviter']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::inviterAction',));
                }

                // profil_sujet_inviter
                if (0 === strpos($pathinfo, '/User/forum/inviterAbonne') && preg_match('#^/User/forum/inviterAbonne/(?P<idAbonne>[^/]++)/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_sujet_inviter']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::inviterAbonneAction',));
                }

            }

            // profil_suivi_abandonner
            if (0 === strpos($pathinfo, '/User/forum/abandonner') && preg_match('#^/User/forum/abandonner/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_suivi_abandonner']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::abandonnerAction',));
            }

            // profil_invitation_annuler
            if (0 === strpos($pathinfo, '/User/forum/annulerInvitation') && preg_match('#^/User/forum/annulerInvitation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_invitation_annuler']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::annulerInvitationAction',));
            }

            // profil_lister_invites
            if (0 === strpos($pathinfo, '/User/forum/listeInvites') && preg_match('#^/User/forum/listeInvites/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_lister_invites']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::listerInvitesAction',));
            }

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

        // cite_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cite_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_cite_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'cite_homepage'));
            }

            return $ret;
        }
        not_cite_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
