<?php
/*
* Hlavní rewritery, aby se šetřily dotazy do databáze.
*/
$systemRewrites=array(
  '/?module=FNewsletterLogout'=>'newsletter/logout/',
  '/?module=FNewsletterLogout&action=logout'=>'newsletter/logout/logout-process/',
  '/?module=FNewsletterLogout&message=email-incorrect'=>'newsletter/logout/email-incorrect/',
  '/?module=FNewsletterLogout&message=logout-done'=>'newsletter/logout/logout-done/',
  '/?module=FNewsletterLogout&message=email-used'=>'newsletter/logout/email-used/',
  '/?module=BUsers&action=newsletter-logouts'=>'backend/users/newsletter-logouts/',
  '/?module=BUsers&action=newsletter-logouts&type=0'=>'backend/users/newsletter-logouts/all/',
  '/?module=BUsers&action=newsletter-logouts&type=1'=>'backend/users/newsletter-logouts/solved/',
  '/?module=BUsers&action=newsletter-logouts&type=2'=>'backend/users/newsletter-logouts/not-solved/',
  
  '/?module=BUsers&action=newsletter-logouts&type=0&message=not-found'=>'backend/users/newsletter-logouts/all/not-found/',
  '/?module=BUsers&action=newsletter-logouts&type=1&message=not-found'=>'backend/users/newsletter-logouts/solved/not-found/',
  '/?module=BUsers&action=newsletter-logouts&type=2&message=not-found'=>'backend/users/newsletter-logouts/not-solved/not-found/',
  
  '/?module=BUsers&action=newsletter-logouts&type=0&message=changed'=>'backend/users/newsletter-logouts/all/changed/',
  '/?module=BUsers&action=newsletter-logouts&type=1&message=changed'=>'backend/users/newsletter-logouts/solved/changed/',
  '/?module=BUsers&action=newsletter-logouts&type=2&message=changed'=>'backend/users/newsletter-logouts/not-solved/changed/',
  
  '/?module=BUsers&action=newsletter-logouts-set'=>'backend/users/newsletter-logouts/set/',
  '/?module=BUsers&action=newsletter-logouts-set&set=on'=>'backend/users/newsletter-logouts/set-on/',
  '/?module=BUsers&action=newsletter-logouts-set&set=off'=>'backend/users/newsletter-logouts/set-off/',
  
  '/?module=FCups'=>'cups/',
  '/?module=FCups&message=cup-not-found'=>'cups/cup-not-found/',
  '/?module=FCups&action=new-cup'=>'cups/create-cup/',
  '/?module=FCups&action=cup-view'=>'cups/view-cup/',
  '/?module=FCups&action=cup-view&message=login-failed'=>'cups/view-cup/login-failed/',
  '/?module=FCups&action=cup-view&message=login-succes'=>'cups/view-cup/login-succes/',        
  '/?module=FCups&action=cup-view&message=cup-extend-failed'=>'cups/view-cup/cup-extend-failed/', 
  '/?module=FCups&action=cup-view&message=cup-extend-succes'=>'cups/view-cup/cup-extend-succes/',      
  '/?module=FCups&action=extend-cup'=>'cups/extend-cup/',
  '/?module=FCups&action=get-into-cup'=>'cups/get-me-into-cup/',

  '/?module=FSitemap&action=xml-sitemap'=>'sitemap.xml',
  '/?module=FUsers&action=change-language'=>'users/changelang',
  '/?module=FTeams'=>'teams/',
  '/?module=FTeams&action=create-new'=>'teams/create-new-team/',
  '/?module=FTeams&action=set-filter'=>'teams/set-teams-filter/',
  '/?module=FTeams&action=team-detail'=>'teams/view-team/',
  '/?module=FTeams&action=new-chat'=>'teams/add-chat-message/',
  '/?module=FTeams&action=add-player-request'=>'teams/players/add-request/',
  '/?module=FTeams&action=delete-player-request'=>'teams/players/delete-request/',
  '/?module=FTeams&action=del-player-admin-request'=>'teams/players/kick-request/',
  '/?module=FTeams&action=add-player-admin-request'=>'teams/players/confirm-request/',
  '/?module=FTeams&action=save-team'=>'teams/save-team/',
  '/?module=FTeams&action=team-detail&message=team-saved'=>'teams/view-team/team-saved/',
  '/?module=FTeams&action=team-detail&message=chat-failed'=>'teams/view-team/add-chat-failed/',
  '/?module=FTeams&action=team-detail&message=chat-succes'=>'teams/view-team/add-chat-success/',
  '/?module=FTeams&action=team-detail&message=add-player-request-failed'=>'teams/view-team/players-add-request-failed/',
  '/?module=FTeams&action=team-detail&message=add-player-request-succes'=>'teams/view-team/players-add-request-success/',
  '/?module=FTeams&action=team-detail&message=add-player-request-succes-2'=>'teams/view-team/players-confirm-request-success/',
  '/?module=FTeams&action=team-detail&message=delete-player-request-succes'=>'teams/view-team/players-kick-request-success/',
  '/?module=FTeams&action=team-detail&message=add-player-by-admin-succes'=>'teams/view-team/players-add-success/',
  '/?module=FTeams&action=team-detail&message=saved-succes'=>'teams/view-team/saved-succes/',
  '/?module=FTeams&message=team-not-created'=>'teams/team-not-created/',
  '/?module=FTeams&message=team-not-found'=>'teams/team-not-found/',    
  '/?module=FNotifications'=>'notifications/',
  '/?module=FNotifications&action=show-notify'=>'notifications/show-notify/',
  '/?module=FNotifications&action=read-all'=>'notifications/read-all/',
  '/?module=FNotifications&message=notification-not-found'=>'notifications/notification-not-found/',    
  '/?module=FPaypal'=>'paypal/',
  '/?module=FPaypal&action=pay-in-button'=>'paypal/pay-in/by-button/',
  '/?module=FPaypal&action=pay-in-confirm'=>'paypal/pay-in/confirm/',
  '/?module=FPaypal&action=pay-in'=>'paypal/pay-in/',
  '/?module=FPaypal&action=pay-out'=>'paypal/pay-out/',
  '/?module=FPaypal&action=paypal-return'=>'paypal/paypal-return/',
  '/?module=FPaypal&action=paypal-return&pay=in&state=success'=>'paypal/paypal-return/payin-success/',
  '/?module=FPaypal&action=paypal-return&pay=in&state=failed'=>'paypal/paypal-return/payin-failed/',
  '/?module=FPaypal&action=paypal-return&pay=out&state=success'=>'paypal/paypal-return/payout-success/',
  '/?module=FPaypal&action=paypal-return&pay=out&state=failed'=>'paypal/paypal-return/payout-failed/',
  '/?module=FPaypal&action=paypal-return'=>'paypal/paypal-return/',
  '/?module=FPaypal&action=webhook'=>'paypal/webhook/',
  '/?module=FPaypal&action=paypal-error'=>'paypal/paypal-error/',    
  '/?module=FPaypal&action=paypal-success'=>'paypal/paypal-success/',    
  '/?module=FPaypal&action=paypal-waiting'=>'paypal/paypal-waiting/',
  '/?module=FPaypal&action=paypal-failed'=>'paypal/paypal-failed/',    
  '/?module=FTournaments'=>'tournaments/',
  '/?module=FTournaments&action=game-selector'=>'tournaments/game-selection/',
  '/?module=FTournaments&message=tournament-not-found'=>'tournaments/tournament-not-found/',    
  '/?module=FTournaments&action=tournament-view&message=tournament-kickuser-failed'=>'tournaments/view-tournament/tournament-dismiss-user-failed/',
  '/?module=FTournaments&action=tournament-view&message=tournament-kickuser-succes'=>'tournaments/view-tournament/tournament-dismiss-user-success/',
  '/?module=FTournaments&action=tournament-view&message=tournament-kickteam-failed'=>'tournaments/view-tournament/tournament-dismiss-team-failed/',
  '/?module=FTournaments&action=tournament-view&message=tournament-kickteam-succes'=>'tournaments/view-tournament/tournament-dismiss-team-success/',    
  '/?module=FCups&action=cup-view&message=cup-kickuser-failed'=>'cups/view-cup/cup-dismiss-user-failed/',
  '/?module=FCups&action=cup-view&message=cup-kickuser-succes'=>'cups/view-cup/cup-dismiss-user-success/',
  '/?module=FCups&action=cup-view&message=cup-kickteam-failed'=>'cups/view-cup/cup-dismiss-team-failed/',
  '/?module=FCups&action=cup-view&message=cup-kickteam-succes'=>'cups/view-cup/cup-dismiss-team-success/',    
  '/?module=FTournaments&action=new-tournament'=>'tournaments/create-tournament/',
  '/?module=FTournaments&action=tournament-view'=>'tournaments/view-tournament/',
  '/?module=FTournaments&action=tournament-view&message=login-failed'=>'tournaments/view-tournament/login-failed/',
  '/?module=FTournaments&action=tournament-view&message=login-succes'=>'tournaments/view-tournament/login-succes/',
  '/?module=FTournaments&action=tournament-view&message=chat-failed'=>'tournaments/view-tournament/chat-failed/',
  '/?module=FTournaments&action=tournament-view&message=chat-succes'=>'tournaments/view-tournament/chat-succes/',
  '/?module=FTournaments&action=tournament-view&message=tournament-end-failed'=>'tournaments/view-tournament/tournament-end-failed/', 
  '/?module=FTournaments&action=tournament-view&message=tournament-end-succes'=>'tournaments/view-tournament/tournament-end-succes/',   
  '/?module=FTournaments&action=tournament-view&message=tournament-extend-failed'=>'tournaments/view-tournament/tournament-extend-failed/', 
  '/?module=FTournaments&action=tournament-view&message=tournament-extend-succes'=>'tournaments/view-tournament/tournament-extend-succes/',  
  '/?module=FTournaments&action=save-tournament-logindata'=>'tournaments/save-tournament-logindata/',  
  '/?module=FTournaments&action=new-chat'=>'tournaments/add-into-chat/',
  '/?module=FTournaments&action=end-tournament'=>'tournaments/end-tournament/',
  '/?module=FTournaments&action=extend-tournament'=>'tournaments/extend-tournament/',
  '/?module=FTournaments&action=get-into-tournament'=>'tournaments/get-me-into-tournament/',
  '/?module=FFreemode'=>'freemode/',
  '/?module=FChallangers'=>'challangers/',
  '/?module=FMatches'=>'matches/',
  '/?module=FUsers'=>'users/',
  '/?module=FUsers&action=userLogIn'=>'users/login-page/',
  '/?module=FUsers&action=userLogIn&message=user-success-logout'=>'users/login-page/logout-success/',
  '/?module=FUsers&message=user-success-login'=>'users/login-success/',
  '/?module=FUsers&action=login'=>'users/login/',
  '/?module=FUsers&action=userCalendar'=>'users/calendar/',
  '/?module=FUsers&action=fb-login'=>'users/fb/login/',
  '/?module=FUsers&action=userLogOut'=>'users/logout/',
  '/?module=FUsers&action=email-reset'=>'users/reset/email/',
  '/?module=FUsers&action=email-paypal-reset'=>'users/reset/paypal-email/',
  '/?module=FUsers&action=email-confirm'=>'users/confirm/email/',
  '/?module=FUsers&action=email-paypal-confirm'=>'users/confirm/paypal-email/',
  '/?module=FUsers&action=userAccount'=>'users/account/',
  '/?module=FUsers&action=userSettings'=>'users/settings/',  
  '/?module=FUsers&action=delete-avatar-post'=>'users/delete-avatar/',  
  '/?module=FUsers&action=userSettings&message=user-saved'=>'users/settings/user-saved/',
  '/?module=FUsers&action=userSettings&message=email-exists'=>'users/settings/email-exist/',
  '/?module=FUsers&action=userSettings&message=email-required'=>'users/settings/email-required/',
  '/?module=FUsers&action=userSettings&message=password-short'=>'users/settings/password-short/',
  '/?module=FUsers&action=userSettings&message=password-not-same'=>'users/settings/passwords-not-same/',
  '/?module=FUsers&action=userSettings&message=password-saved'=>'users/settings/password-saved/',    
  '/?module=FUsers&action=userGsc'=>'users/gsc/',    
  '/?module=FUsers&action=userLogIn&LoginError=1'=>'users/login-page/login-error/',
  '/?module=FUsers&action=userPassword'=>'users/forgotten-password-page/',
  '/?module=FUsers&action=new-password'=>'users/forgotten-password/send/',    
  '/?module=FUsers&action=userPassword&message=password-send'=>'users/forgotten-password-page/password-send/',
  '/?module=FUsers&action=userPassword&message=password-not-send'=>'users/forgotten-password-page/password-not-send/',  
  '/?module=FUsers&action=userRegistration'=>'users/registration-page/',
  '/?module=FUsers&action=new-post'=>'users/registration-page/register/',    
  '/?module=FUsers&action=userRegistration&message=user-registered'=>'users/registration-page/user-registered/',
  '/?module=FUsers&action=userRegistration&message=email-exists'=>'users/registration-page/email-exist/',
  '/?module=FUsers&action=userRegistration&message=email-required'=>'users/registration-page/email-required/',
  '/?module=FUsers&action=userRegistration&message=password-not-same'=>'users/registration-page/passwords-not-same/',
  '/?module=FUsers&action=userRegistration&message=password-short'=>'users/registration-page/password-short/',    
  '/?module=FUsers&action=userRegistration&message=confirm-required'=>'users/registration-page/confirm-required/',
  '/?module=FUsers&action=save-post'=>'users/save-user-data/', 
  '/?module=FUsers&action=password'=>'users/save-user-password/',     
  '/?module=Ajax'=>'ajax/',
  '/?module=ATemplates'=>'ajax/templates/',
  '/?module=ATemplates&action=list'=>'ajax/templates/list/',
  '/?module=ATemplates&action=return'=>'ajax/templates/return/',
  '/?module=AFiles'=>'ajax/files/',
  '/?module=AFiles&action=list'=>'ajax/files/list/',
  '/?module=AFiles&action=list&order=name'=>'ajax/files/list/name/',
  '/?module=AFiles&action=list&order=namedesc'=>'ajax/files/list/namedesc/',
  '/?module=AFiles&action=list&order=time'=>'ajax/files/list/time/',
  '/?module=AFiles&action=list&order=timedesc'=>'ajax/files/list/timedesc/',
  '/?module=AFiles&action=return'=>'ajax/files/return/',
  '/?module=AImages'=>'ajax/images/',
  '/?module=AImages&action=list'=>'ajax/images/list/',
  '/?module=AImages&action=list&order=name'=>'ajax/images/list/name/',
  '/?module=AImages&action=list&order=namedesc'=>'ajax/images/list/namedesc/',
  '/?module=AImages&action=list&order=time'=>'ajax/images/list/time/',
  '/?module=AImages&action=list&order=timedesc'=>'ajax/images/list/timedesc/',
  '/?module=AImages&action=return'=>'ajax/images/return/',
  '/?module=Backend'=>'backend/',
  '/?module=Backend'=>'backend/',
  '/?module=Backend&LoginError=1'=>'backend/login-failed/',
  '/?module=Backend&action=logout'=>'backend/logout-user/',
  '/?module=Backend&action=login'=>'backend/login-user/',      
  '/?module=BGame'=>'backend/game/',  
  '/?module=BGame&action=platform-edit'=>'backend/game/platform-edit/',
  '/?module=BGame&action=platforms'=>'backend/game/platforms/',  
  '/?module=BGame&action=tournaments'=>'backend/game/tournaments/',
  '/?module=BGame&action=tournaments-edit'=>'backend/game/tournaments-edit/',
  '/?module=BGame&action=tournaments-edit&message=chat-deleted'=>'backend/game/tournaments-edit/chat-deleted/',
  '/?module=BGame&action=tournaments-del-chat'=>'backend/game/tournaments-chat/delete/',
  '/?module=BGame&action=modules'=>'backend/game/modules/',
  '/?module=BGame&action=modules-edit'=>'backend/game/modules/edit/',  
  '/?module=BGame&action=modules-edit&message=created'=>'backend/game/modules/edit/game-created/',
  '/?module=BGame&action=modules-edit&message=saved'=>'backend/game/modules/edit/game-saved/',
  '/?module=BGame&action=modules-edit&message=not-found'=>'backend/game/modules/edit/game-not-found/',
  '/?module=BGame&action=modules-edit&message=deleted'=>'backend/game/modules/edit/game-deleted/',  
  '/?module=BGame&action=modules-add-game'=>'backend/game/modules/edit/add-game/',
  '/?module=BGame&action=modules-edit-game'=>'backend/game/modules/edit/edit-game/',
  '/?module=BGame&action=modules-del-game'=>'backend/game/modules/edit/delete-game/',  
  '/?module=BGame&action=games'=>'backend/game/games/',
  '/?module=BGame&action=games&message=not-found'=>'backend/game/games/game-not-found/',
  '/?module=BGame&action=games&message=created'=>'backend/game/games/game-created/',
  '/?module=BGame&action=games&message=not-created'=>'backend/game/games/game-not-created/',
  '/?module=BGame&action=games&message=deleted'=>'backend/game/games/game-deleted/',
  '/?module=BGame&action=games-edit'=>'backend/game/games/edit-game/',
  '/?module=BGame&action=games-add-post'=>'backend/game/games/add-new-game/',
  '/?module=BGame&action=games-edit-post'=>'backend/game/games/edit-game-post/',
  '/?module=BGame&action=games-delete-post'=>'backend/game/games/delete-game/',  
  '/?module=BGame&action=games-edit-parameters'=>'backend/game/games/edit-parameters/',
  '/?module=BGame&action=games-edit-parameters&message=created'=>'backend/game/games/edit-parameters/created/',
  '/?module=BGame&action=games-edit-parameters&message=edited'=>'backend/game/games/edit-parameters/edited/',
  '/?module=BGame&action=games-edit-parameters&message=deleted'=>'backend/game/games/edit-parameters/deleted/',
  '/?module=BGame&action=games-edit-parameters&message=sub-created'=>'backend/game/games/edit-parameters/sub-created/',
  '/?module=BGame&action=games-edit-parameters&message=sub-edited'=>'backend/game/games/edit-parameters/sub-edited/',
  '/?module=BGame&action=games-edit-parameters&message=sub-deleted'=>'backend/game/games/edit-parameters/sub-deleted/',  
  '/?module=BGame&action=games-del-param-post'=>'backend/game/games/delete-parameter/',
  '/?module=BGame&action=games-del-subparam-post'=>'backend/game/games/delete-sub-parameter/',  
  '/?module=BGame&action=games-edit&message=saved'=>'backend/game/games/edit-game/game-saved/',
  '/?module=BGame&action=games-edit&message=not-saved'=>'backend/game/games/edit-game/game-not-saved/',  
  '/?module=BGame&action=games-edit&message=server-added'=>'backend/game/games/edit-game/server-added/',  
  '/?module=BGame&action=games-edit&message=server-not-added'=>'backend/game/games/edit-game/server-not-added/',  
  '/?module=BGame&action=games-edit&message=server-saved'=>'backend/game/games/edit-game/server-saved/',  
  '/?module=BGame&action=games-edit&message=server-not-saved'=>'backend/game/games/edit-game/server-not-saved/',  
  '/?module=BGame&action=games-edit&message=server-deleted'=>'backend/game/games/edit-game/server-deleted/',      
  '/?module=BGame&action=games-edit&message=type-added'=>'backend/game/games/edit-game/type-added/',  
  '/?module=BGame&action=games-edit&message=type-not-added'=>'backend/game/games/edit-game/type-not-added/',  
  '/?module=BGame&action=games-edit&message=type-saved'=>'backend/game/games/edit-game/type-saved/',  
  '/?module=BGame&action=games-edit&message=type-not-saved'=>'backend/game/games/edit-game/type-not-saved/',  
  '/?module=BGame&action=games-edit&message=type-deleted'=>'backend/game/games/edit-game/type-deleted/',          
  '/?module=BGame&action=games-edit&message=map-added'=>'backend/game/games/edit-game/map-added/',  
  '/?module=BGame&action=games-edit&message=map-not-added'=>'backend/game/games/edit-game/map-not-added/',  
  '/?module=BGame&action=games-edit&message=map-saved'=>'backend/game/games/edit-game/map-saved/',  
  '/?module=BGame&action=games-edit&message=map-not-saved'=>'backend/game/games/edit-game/map-not-saved/',  
  '/?module=BGame&action=games-edit&message=map-deleted'=>'backend/game/games/edit-game/map-deleted/',          
  '/?module=BGame&action=games-add-server-post'=>'backend/game/games/add-server/',
  '/?module=BGame&action=games-edit-server-post'=>'backend/game/games/edit-server/',
  '/?module=BGame&action=games-del-server-post'=>'backend/game/games/delete-server/',
  '/?module=BGame&action=games-add-type-post'=>'backend/game/games/add-type/',
  '/?module=BGame&action=games-edit-type-post'=>'backend/game/games/edit-type/',
  '/?module=BGame&action=games-del-type-post'=>'backend/game/games/delete-type/',  
  '/?module=BGame&action=games-add-map-post'=>'backend/game/games/add-map/',
  '/?module=BGame&action=games-edit-map-post'=>'backend/game/games/edit-map/',
  '/?module=BGame&action=games-del-map-post'=>'backend/game/games/delete-map/',  
  '/?module=BUsers'=>'backend/users/',
  '/?module=BUsers&action=new'=>'backend/users/new-user/',
  '/?module=BUsers&action=new&message=password-short'=>'backend/users/new-user/password-short/',
  '/?module=BUsers&action=new&message=password-not-same'=>'backend/users/new-user/password-not-same/',
  '/?module=BUsers&action=new&message=email-exists'=>'backend/users/new-user/email-exists/',
  '/?module=BUsers&action=new&message=email-required'=>'backend/users/new-user/email-required/',
  '/?module=BUsers&action=new&message=user-created'=>'backend/users/new-user/user-created/',      
  '/?module=BUsers&action=new-post'=>'backend/users/new-user-post/',
  '/?module=BUsers&action=list'=>'backend/users/list/',
  '/?module=BUsers&action=gobyid'=>'backend/users/go-by-id/',
  '/?module=BUsers&action=gobyemail'=>'backend/users/go-by-email/',
  '/?module=BUsers&action=list&message=user-not-found'=>'backend/users/list/user-not-found/',
  '/?module=BUsers&action=list&message=user-not-found-2'=>'backend/users/list/user-not-found-2/',
  '/?module=BUsers&action=list&message=user-deleted'=>'backend/users/list/user-deleted/',
  '/?module=BUsers&action=edit'=>'backend/users/edit/',
  '/?module=BUsers&action=edit&message=email-exists'=>'backend/users/edit/email-exists/',
  '/?module=BUsers&action=edit&message=email-required'=>'backend/users/edit/email-required/',
  '/?module=BUsers&action=edit&message=user-saved'=>'backend/users/edit/user-saved/',
  '/?module=BUsers&action=edit&message=password-saved'=>'backend/users/edit/password-saved/',
  '/?module=BUsers&action=edit&message=password-short'=>'backend/users/edit/password-short/',
  '/?module=BUsers&action=edit&message=password-not-same'=>'backend/users/edit/password-not-same/',
  '/?module=BUsers&action=save'=>'backend/users/save/',
  '/?module=BUsers&action=change-pass'=>'backend/users/change-password/',
  '/?module=BUsers&action=delete'=>'backend/users/delete/',
  '/?module=BUsers&action=detail'=>'backend/users/detail/',
  '/?module=BUsers&action=export'=>'backend/users/export/',
  '/?module=BUsers&action=export&message=no-user-found'=>'backend/users/export/no-user-found/',
  '/?module=BUsers&action=export-generate'=>'backend/users/export-generate/',
  '/?module=BUsers&action=export-emails'=>'backend/users/export-emails/',
  '/?module=BUsers&action=export-phones'=>'backend/users/export-phones/',
  '/?module=BUsers&action=newsletter'=>'backend/users/newsletter/',
  '/?module=BUsers&action=newsletter&error=1'=>'backend/users/newsletter/error/',
  '/?module=BUsers&action=newsletter&sended=1'=>'backend/users/newsletter/sended/',
  '/?module=BUsers&action=newsletter-2'=>'backend/users/newsletter-2/',
  '/?module=BUsers&action=newsletter-post'=>'backend/users/newsletter-post/',
  '/?module=BUsers&action=newsletter-post-2'=>'backend/users/newsletter-post-2/',
  '/?module=BPages'=>'backend/pages/',
  '/?module=FNews'=>'news/',
  '/?module=BPages&action=new-news'=>'backend/pages/news/new/',
  '/?module=BPages&action=save-news'=>'backend/pages/news/save/',
  '/?module=BPages&action=delete-news'=>'backend/pages/news/delete/',
  '/?module=BPages&action=edit-news'=>'backend/pages/news/edit/',
  '/?module=BPages&action=list-news'=>'backend/pages/news/list/',
  '/?module=BPages&action=list'=>'backend/pages/list/',
  '/?module=BPages&action=list&message=page-not-found'=>'backend/pages/list/page-not-found/',
  '/?module=BPages&action=list&message=order-saved'=>'backend/pages/list/order-saved/',
  '/?module=BPages&action=list&message=order-is-same'=>'backend/pages/list/order-is-same/',  
  '/?module=BPages&action=list&message=page-deleted'=>'backend/pages/list/page-deleted/',
  '/?module=BPages&action=new'=>'backend/pages/new-page/',
  '/?module=BPages&action=new&message=name-required'=>'backend/pages/new-page/name-required/',
  '/?module=BPages&action=new&message=page-created'=>'backend/pages/new-page/page-created/',
  '/?module=BPages&action=new-post'=>'backend/pages/new-page-post/', 
  '/?module=BPages&action=edit'=>'backend/pages/edit/',           
  '/?module=BPages&action=edit&message=name-required'=>'backend/pages/edit/name-required/',           
  '/?module=BPages&action=edit&message=page-edited'=>'backend/pages/edit/page-edited/',           
  '/?module=BPages&action=save-order'=>'backend/pages/save-order/',                       
  '/?module=BPages&action=main-pages'=>'backend/pages/main-pages/',                       
  '/?module=BPages&action=main-pages&message=name-required'=>'backend/pages/main-pages/name-required/',                       
  '/?module=BPages&action=main-pages&message=page-saved'=>'backend/pages/main-pages/page-saved/',                       
  '/?module=BPages&action=save-main-page'=>'backend/pages/save-main-page/',                       
  '/?module=BSuperAdmin'=>'backend/superadmin/',
  '/?module=BSuperAdmin&action=base-settings'=>'backend/superadmin/base-settings/',
  '/?module=BSuperAdmin&action=base-settings&message=order-saved'=>'backend/superadmin/base-settings/order-saved/',
  '/?module=BSuperAdmin&action=base-settings&message=order-is-same'=>'backend/superadmin/base-settings/order-is-same/',
  '/?module=BSuperAdmin&action=base-settings-new-post'=>'backend/superadmin/base-settings/new-post/',
  '/?module=BSuperAdmin&action=base-settings&message=created'=>'backend/superadmin/base-settings/created/',
  '/?module=BSuperAdmin&action=base-settings&message=deleted'=>'backend/superadmin/base-settings/deleted/',
  '/?module=BSuperAdmin&action=base-settings&message=setting-not-found'=>'backend/superadmin/base-settings/setting-not-found/',
  '/?module=BSuperAdmin&action=base-settings-delete'=>'backend/superadmin/base-settings/delete-post/',
  '/?module=BSuperAdmin&action=base-settings-edit'=>'backend/superadmin/base-settings/edit/',  
  '/?module=BSuperAdmin&action=base-settings-edit&message=saved'=>'backend/superadmin/base-settings/edit/saved/',  
  '/?module=BSuperAdmin&action=base-settings-edit-post'=>'backend/superadmin/base-settings/edit-post/',    
  '/?module=BSuperAdmin&action=boxes-categories'=>'backend/superadmin/boxes-categories/',
  '/?module=BSuperAdmin&action=boxes-categories&message=order-saved'=>'backend/superadmin/boxes-categories/order-saved/',
  '/?module=BSuperAdmin&action=boxes-categories&message=order-is-same'=>'backend/superadmin/boxes-categories/order-is-same/',
  '/?module=BSuperAdmin&action=boxes-categories&message=created'=>'backend/superadmin/boxes-categories/created/',
  '/?module=BSuperAdmin&action=boxes-categories&message=deleted'=>'backend/superadmin/boxes-categories/deleted/',
  '/?module=BSuperAdmin&action=boxes-categories&message=category-not-found'=>'backend/superadmin/boxes-categories/category-not-found/',
  '/?module=BSuperAdmin&action=boxes-categories-edit'=>'backend/superadmin/boxes-categories/edit/',  
  '/?module=BSuperAdmin&action=boxes-categories-edit&message=saved'=>'backend/superadmin/boxes-categories/edit/saved/',  
  '/?module=BSuperAdmin&action=boxes-categories-edit-post'=>'backend/superadmin/boxes-categories/edit-post/',  
  '/?module=BSuperAdmin&action=boxes-categories-delete'=>'backend/superadmin/boxes-categories/delete-post/',
  '/?module=BSuperAdmin&action=boxes-categories'=>'backend/superadmin/boxes-categories/',
  '/?module=BSuperAdmin&action=images-sizes'=>'backend/superadmin/images-sizes/',
  '/?module=BSuperAdmin&action=images-sizes-delete'=>'backend/superadmin/images-sizes/delete-post/',
  '/?module=BSuperAdmin&action=images-sizes-new-post'=>'backend/superadmin/images-sizes/new-post/',
  '/?module=BSuperAdmin&action=images-sizes&message=created'=>'backend/superadmin/images-sizes/created/',
  '/?module=BSuperAdmin&action=images-sizes&message=deleted'=>'backend/superadmin/images-sizes/deleted/',
  '/?module=BSuperAdmin&action=images-sizes&message=size-not-found'=>'backend/superadmin/images-sizes/size-not-found/',
  '/?module=BSuperAdmin&action=templates'=>'backend/superadmin/templates/',
  '/?module=BSuperAdmin&action=templates&message=created'=>'backend/superadmin/templates/created/',
  '/?module=BSuperAdmin&action=templates&message=edited'=>'backend/superadmin/templates/edited/',
  '/?module=BSuperAdmin&action=templates&message=deleted'=>'backend/superadmin/templates/deleted/',
  '/?module=BSuperAdmin&action=templates&message=template-not-found'=>'backend/superadmin/templates/template-not-found/',
  '/?module=BSuperAdmin&action=templates-new-post'=>'backend/superadmin/templates/new-template/',
  '/?module=BSuperAdmin&action=templates-delete'=>'backend/superadmin/templates/delete-template/',
  '/?module=BSuperAdmin&action=templates-edit-post'=>'backend/superadmin/templates/edit-template/',  
  '/?module=BFiles'=>'backend/files/',
  '/?module=BFiles&action=list-files'=>'backend/files/files-categories/',
  '/?module=BFiles&action=list-files&message=created'=>'backend/files/files-categories/created/',
  '/?module=BFiles&action=list-files&message=not-created'=>'backend/files/files-categories/not-created/',
  '/?module=BFiles&action=list-files&message=deleted'=>'backend/files/files-categories/deleted/',
  '/?module=BFiles&action=edit-file-category'=>'backend/files/files-categories/detail/',
  '/?module=BFiles&action=edit-file-category&message=category-not-saved'=>'backend/files/files-categories/detail/category-not-saved/',
  '/?module=BFiles&action=edit-file-category&message=category-saved'=>'backend/files/files-categories/detail/category-saved/',
  '/?module=BFiles&action=edit-file-category&message=file-created'=>'backend/files/files-categories/detail/file-created/',
  '/?module=BFiles&action=edit-file-category&message=file-not-created'=>'backend/files/files-categories/detail/file-not-created/',
  '/?module=BFiles&action=edit-file-category&message=file-not-saved'=>'backend/files/files-categories/detail/file-not-saved/',
  '/?module=BFiles&action=edit-file-category&message=file-deleted'=>'backend/files/files-categories/detail/file-deleted/',
  '/?module=BFiles&action=edit-file-category&message=file-saved'=>'backend/files/files-categories/detail/file-saved/',
  '/?module=BFiles&action=edit-file-category&order=name'=>'backend/files/files-categories/detail/by-name/',
  '/?module=BFiles&action=edit-file-category&order=namedesc'=>'backend/files/files-categories/detail/by-name-desc/',
  '/?module=BFiles&action=edit-file-category&order=time'=>'backend/files/files-categories/detail/by-time/',
  '/?module=BFiles&action=edit-file-category&order=timedesc'=>'backend/files/files-categories/detail/by-time-desc/',
  '/?module=BFiles&action=save-file'=>'backend/files/files-categories/detail/save-file-post/',
  '/?module=BFiles&action=delete-file'=>'backend/files/files-categories/detail/delete-file-post/',
  '/?module=BFiles&action=file-save-category-post'=>'backend/files/files-categories/save-post/',
  '/?module=BFiles&action=file-save-category-post'=>'backend/files/files-categories/save-post/',
  '/?module=BFiles&action=file-new-post'=>'backend/files/new-post/',
  '/?module=BFiles&action=list-images'=>'backend/files/images-categories/',
  '/?module=BFiles&action=list-images&message=created'=>'backend/files/images-categories/created/',
  '/?module=BFiles&action=list-images&message=not-created'=>'backend/files/images-categories/not-created/',
  '/?module=BFiles&action=list-images&message=deleted'=>'backend/files/images-categories/deleted/',
  '/?module=BFiles&action=edit-image-category'=>'backend/files/images-categories/detail/',
  '/?module=BFiles&action=edit-image-category&message=category-saved'=>'backend/files/images-categories/detail/category-saved/',
  '/?module=BFiles&action=edit-image-category&message=category-not-saved'=>'backend/files/images-categories/detail/category-not-saved/',
  '/?module=BFiles&action=edit-image-category&message=image-not-found'=>'backend/files/images-categories/detail/image-not-found/',
  '/?module=BFiles&action=edit-image-category&message=image-created'=>'backend/files/images-categories/detail/image-created/',
  '/?module=BFiles&action=edit-image-category&message=image-saved'=>'backend/files/images-categories/detail/image-saved/',
  '/?module=BFiles&action=edit-image-category&message=image-deleted'=>'backend/files/images-categories/detail/image-deleted/',
  '/?module=BFiles&action=edit-image-category&message=image-not-created'=>'backend/files/images-categories/detail/image-not-created/',
  '/?module=BFiles&action=edit-image-category&order=name'=>'backend/files/images-categories/detail/by-name/',
  '/?module=BFiles&action=edit-image-category&order=namedesc'=>'backend/files/images-categories/detail/by-name-desc/',
  '/?module=BFiles&action=edit-image-category&order=time'=>'backend/files/images-categories/detail/by-time/',
  '/?module=BFiles&action=edit-image-category&order=timedesc'=>'backend/files/images-categories/detail/by-time-desc/',  
  '/?module=BFiles&action=image-new-post'=>'backend/files/images-categories/image-new/',  
  '/?module=BFiles&action=image-new-post-2'=>'backend/files/images-categories/video-new/',
  '/?module=BFiles&action=save-image'=>'backend/files/images-categories/image-save/',  
  '/?module=BFiles&action=delete-image'=>'backend/files/images-categories/image-delete/',  
  '/?module=BFiles&action=image-save-category-post'=>'backend/files/images-categories/image-save-category/',  
  '/?module=BFiles&action=image-category-new-post'=>'backend/files/images-categories/image-category-new-post/',      
  '/?module=BSettings'=>'backend/settings/',
  '/?module=BSettings&action=list-main'=>'backend/settings/base-settings/',
  '/?module=BSettings&action=list-languages'=>'backend/settings/languages/',
  '/?module=BSettings&action=edit-language'=>'backend/settings/languages/edit-language/',
  '/?module=BSettings&action=list-main&message=setting-not-found'=>'backend/settings/base-settings/setting-not-found/',
  '/?module=BSettings&action=edit-main'=>'backend/settings/base-settings/edit/',
  '/?module=BSettings&action=edit-main&message=saved'=>'backend/settings/base-settings/edit/saved/',
  '/?module=BSettings&action=list-caches'=>'backend/settings/list-caches/',
  '/?module=BSettings&action=list-caches&message=rewrites-regenerated'=>'backend/settings/list-caches/rewrites-regenerated/',
  '/?module=BSettings&action=list-caches&message=images-sizes-regenerated'=>'backend/settings/list-caches/images-sizes-regenerated/',
  '/?module=BSettings&action=cache-regenerate-rewrites'=>'backend/settings/cache-regenerate-rewrites/',
  '/?module=BSettings&action=list-caches&message=settings-regenerated'=>'backend/settings/list-caches/settings-regenerated/',
  '/?module=BSettings&action=cache-regenerate-settings'=>'backend/settings/cache-regenerate-settings/',   
  '/?module=BBoxes'=>'backend/boxes/',
  '/?module=BBoxes&action=list'=>'backend/boxes/list/',
  '/?module=BBoxes&action=new-post'=>'backend/boxes/new-post/',
  '/?module=BBoxes&action=save-order'=>'backend/boxes/save-order/',
  '/?module=BBoxes&action=list&message=order-saved'=>'backend/boxes/list/order-saved/',
  '/?module=BBoxes&action=list&message=order-is-same'=>'backend/boxes/list/order-is-same/',
  '/?module=BBoxes&action=list&message=deleted'=>'backend/boxes/list/box-deleted/',
  '/?module=BBoxes&action=edit'=>'backend/boxes/edit/',
  '/?module=BBoxes&action=edit&message=box-edited'=>'backend/boxes/edit/box-edited/',
  '/?module=BBoxes&action=edit-save'=>'backend/boxes/edit-save/',
  '/?module=BBoxes&action=delete'=>'backend/boxes/delete/',
  '/?module=FPages'=>'stranky/',
  '/?module=FSitemap'=>'sitemap/',
  '/?module=FMainPages'=>'hlavni-stranky/',     
  );
?>