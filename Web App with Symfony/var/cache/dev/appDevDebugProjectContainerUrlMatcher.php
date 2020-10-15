<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Forum')) {
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

            elseif (0 === strpos($pathinfo, '/Forum/signaler')) {
                // signal_message
                if (0 === strpos($pathinfo, '/Forum/signalerCommentaire') && preg_match('#^/Forum/signalerCommentaire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'signal_message']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetController::signalerCommentaireAction',));
                }

                // signaler_sujet
                if (preg_match('#^/Forum/signaler/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'signaler_sujet']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetController::signalerSujetAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/Forum/Back')) {
                // back_sujet_lister
                if ('/Forum/Back/listeSujets' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::listerAction',  '_route' => 'back_sujet_lister',);
                }

                // back_sujet_confirm_delete_sujet
                if (0 === strpos($pathinfo, '/Forum/Back/confirmerSuppression') && preg_match('#^/Forum/Back/confirmerSuppression/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_sujet_confirm_delete_sujet']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::confirmDeleteSujetAction',));
                }

                // back_sujet_Bannissement
                if ('/Forum/Back/Bannissement/Sujets' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::listerBanAction',  '_route' => 'back_sujet_Bannissement',);
                }

                // back_ban_participants
                if (0 === strpos($pathinfo, '/Forum/Back/Bannissement/Participants') && preg_match('#^/Forum/Back/Bannissement/Participants/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_ban_participants']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::listerPartBanAction',));
                }

                // back_confirm_bannir
                if (0 === strpos($pathinfo, '/Forum/Back/ConfirmBannir') && preg_match('#^/Forum/Back/ConfirmBannir/(?P<idSujet>[^/]++)/(?P<idAbonne>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_confirm_bannir']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::confirmBannirAction',));
                }

                // back_cancel_bannir
                if (0 === strpos($pathinfo, '/Forum/Back/AnnulerBannir') && preg_match('#^/Forum/Back/AnnulerBannir/(?P<idSujet>[^/]++)/(?P<idAbonne>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_cancel_bannir']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::cancelBannirAction',));
                }

                // back_sujets_Signales
                if ('/Forum/Back/Signaux/Sujets' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::listerSujetsSignalesAction',  '_route' => 'back_sujets_Signales',);
                }

                // back_messages_Signales
                if ('/Forum/Back/Signaux/Messages' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::listerMessagesSignalesAction',  '_route' => 'back_messages_Signales',);
                }

                if (0 === strpos($pathinfo, '/Forum/Back/supprimerS')) {
                    // back_delete_sujet_signale
                    if (0 === strpos($pathinfo, '/Forum/Back/supprimerSujetSignale') && preg_match('#^/Forum/Back/supprimerSujetSignale/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_delete_sujet_signale']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::deleteSujetSignaleAction',));
                    }

                    // back_delete_signal_sujet
                    if (0 === strpos($pathinfo, '/Forum/Back/supprimerSignalSujet') && preg_match('#^/Forum/Back/supprimerSignalSujet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_delete_signal_sujet']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::deleteSignalSujetAction',));
                    }

                    // back_delete_signal_message
                    if (0 === strpos($pathinfo, '/Forum/Back/supprimerSignalMessage') && preg_match('#^/Forum/Back/supprimerSignalMessage/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_delete_signal_message']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::deleteSignalMessageAction',));
                    }

                }

                // back_delete_message_signale
                if (0 === strpos($pathinfo, '/Forum/Back/supprimerMessageSignale') && preg_match('#^/Forum/Back/supprimerMessageSignale/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_delete_message_signale']), array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetBackController::deleteMessageSignaleAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/Forum/Mobile')) {
                // mobile_add_sujet
                if ('/Forum/Mobile/addSujet' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::ajouterAction',  '_route' => 'mobile_add_sujet',);
                }

                // mobile_lister_sujets
                if ('/Forum/Mobile/listeSujets' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::listerAction',  '_route' => 'mobile_lister_sujets',);
                }

                // mobile_lister_mes_sujets
                if ('/Forum/Mobile/listerMesSujets' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::listerMesSujetsAction',  '_route' => 'mobile_lister_mes_sujets',);
                }

                // mobile_afficher_sujet
                if ('/Forum/Mobile/AfficherSujet' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::afficherSujetAction',  '_route' => 'mobile_afficher_sujet',);
                }

                // mobile_ajouter_message
                if ('/Forum/Mobile/AjouterMessage' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::ajouterMessageAction',  '_route' => 'mobile_ajouter_message',);
                }

                // mobile_voter_message
                if ('/Forum/Mobile/Voter' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::voterAction',  '_route' => 'mobile_voter_message',);
                }

                // mobile_modifier_message
                if ('/Forum/Mobile/ModifierMessage' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::modifierMessageAction',  '_route' => 'mobile_modifier_message',);
                }

                // mobile_modifier_sujet
                if ('/Forum/Mobile/ModifierSujet' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::modifierSujetAction',  '_route' => 'mobile_modifier_sujet',);
                }

                // mobile_supprimer_message
                if ('/Forum/Mobile/SupprimerMessage' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::supprimerMessageAction',  '_route' => 'mobile_supprimer_message',);
                }

                // mobile_supprimer_sujet
                if ('/Forum/Mobile/SupprimerSujet' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::supprimerSujetAction',  '_route' => 'mobile_supprimer_sujet',);
                }

                // mobile_chercher_sujet
                if ('/Forum/Mobile/Chercher' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::chercherAction',  '_route' => 'mobile_chercher_sujet',);
                }

                // mobile_noter_sujet
                if ('/Forum/Mobile/Noter' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::ajouterRateAction',  '_route' => 'mobile_noter_sujet',);
                }

                if (0 === strpos($pathinfo, '/Forum/Mobile/get')) {
                    // mobile_note_sujet
                    if ('/Forum/Mobile/getNote' === $pathinfo) {
                        return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::getRateAction',  '_route' => 'mobile_note_sujet',);
                    }

                    // mobile_mynote_sujet
                    if ('/Forum/Mobile/getMyNote' === $pathinfo) {
                        return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::myNoteAction',  '_route' => 'mobile_mynote_sujet',);
                    }

                    // mobile_get_user
                    if ('/Forum/Mobile/getUser' === $pathinfo) {
                        return array (  '_controller' => 'Cite\\ForumBundle\\Controller\\SujetMobileController::loginUserAction',  '_route' => 'mobile_get_user',);
                    }

                }

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

            elseif (0 === strpos($pathinfo, '/User/forum/a')) {
                // profil_suivi_abandonner
                if (0 === strpos($pathinfo, '/User/forum/abandonner') && preg_match('#^/User/forum/abandonner/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_suivi_abandonner']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::abandonnerAction',));
                }

                // profil_invitation_annuler
                if (0 === strpos($pathinfo, '/User/forum/annulerInvitation') && preg_match('#^/User/forum/annulerInvitation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_invitation_annuler']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::annulerInvitationAction',));
                }

                // accepter_invitation
                if (0 === strpos($pathinfo, '/User/forum/accepterInvitation') && preg_match('#^/User/forum/accepterInvitation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'accepter_invitation']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::accepterInvitationAction',));
                }

            }

            // profil_lister_invites
            if (0 === strpos($pathinfo, '/User/forum/listeInvites') && preg_match('#^/User/forum/listeInvites/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_lister_invites']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::listerInvitesAction',));
            }

            if (0 === strpos($pathinfo, '/User/forum/lister')) {
                // profil_lister_abonnes_sujet
                if (0 === strpos($pathinfo, '/User/forum/listerAbonnesSujet') && preg_match('#^/User/forum/listerAbonnesSujet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_lister_abonnes_sujet']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::listerAbonnesSujetAction',));
                }

                // profil_lister_participants_sujet
                if (0 === strpos($pathinfo, '/User/forum/listerParticipantsSujet') && preg_match('#^/User/forum/listerParticipantsSujet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'profil_lister_participants_sujet']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::listerParticipantsSujetAction',));
                }

                // lister_invitations
                if ('/User/forum/listerInvitations' === $pathinfo) {
                    return array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::listerInvitationsAction',  '_route' => 'lister_invitations',);
                }

            }

            elseif (0 === strpos($pathinfo, '/User/forum/ConsulterNotification')) {
                // see_notification
                if (preg_match('#^/User/forum/ConsulterNotification/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'see_notification']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::consulterNotificationAction',));
                }

                // see_notification_number
                if (0 === strpos($pathinfo, '/User/forum/ConsulterNotificationNumber') && preg_match('#^/User/forum/ConsulterNotificationNumber/(?P<number>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'see_notification_number']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::consulterNotificationNumAction',));
                }

            }

            // refuser_invitation
            if (0 === strpos($pathinfo, '/User/forum/refuserInvitation') && preg_match('#^/User/forum/refuserInvitation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'refuser_invitation']), array (  '_controller' => 'Cite\\UserBundle\\Controller\\ForumController::refuserInvitationAction',));
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

        // cite_back_homepage
        if ('/Back' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexBackAction',  '_route' => 'cite_back_homepage',);
        }

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
