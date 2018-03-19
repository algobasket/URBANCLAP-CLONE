<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Users Language File
 */

// Titles
$lang['users title forgot']                   = "Mot de passe oublié";
$lang['users title login']                    = "S'identifier";
$lang['users title profile']                  = "Profil";
$lang['users title register']                 = "registre";
$lang['users title signup']                   = "Signup"; 
$lang['users title user_add']                 = "Ajouter un utilisateur";
$lang['users title user_delete']              = "Confirmer Supprimer l'utilisateur";
$lang['users title user_edit']                = "Modifier l'utilisateur";
$lang['users title user_list']                = "liste d'utilisateur";
$lang['users title dasboard']                 = "Tableau de bord";
$lang['users title history']                  = "Histoire des opérations";
$lang['users title resolution']               = "Centre de résolution";
$lang['users title det_dispute']              = "Conflit de détail";
$lang['users title support']                  = "Soutien";
$lang['users title all_tickets']              = "Tous les billets";
$lang['users title request']                  = "Demande de paiement";
$lang['users title request_form']             = "Formulaire de demande de paiement";
$lang['users title new_ticket']               = "Nouveau ticket";
$lang['users title money_transfer']           = "Transfert d'argent";
$lang['users title form_transfer']            = "Forme de transfert d'argent";
$lang['users title exchange']                 = "Échange de l'argent";
$lang['users title form_exchange']            = "Échange de devise de base";
$lang['users title to_form_exchange']         = "Échange vers la devise de base";
$lang['users title withdrawal']               = "Retrait";
$lang['users title deposit']                  = "Dépôt";
$lang['users title form_withdrawal']          = "Choisissez comment recevoir des fonds";
$lang['users title form_deposit']             = "Choix de la méthode de dépôt";
$lang['users title verifi']                   = "Vérification";
$lang['users title settings']                 = "Compte paramètres";
$lang['users title about']                    = "Profil";

// Buttons
$lang['users button add_new_user']            = "Ajouter un nouvel utilisateur";
$lang['users button register']                = "Créer un compte";
$lang['users button reset_password']          = "réinitialiser le mot de passe";
$lang['users button login_try_again']         = "Réessayer";

// Tooltips
$lang['users tooltip add_new_user']           = "Créez un nouvel utilisateur.";

// Links
$lang['users link forgot_password']           = "Mot de passe oublié?";
$lang['users link register_account']          = "Inscrivez-vous pour un compte.";

// Table Columns
$lang['users col first_name']                 = "Prénom";
$lang['users col is_admin']                   = "Admin";
$lang['users col last_name']                  = "Nom de famille";
$lang['users col user_id']                    = "ID";
$lang['users col username']                   = "Nom d'utilisateur";

// Form Inputs
$lang['users input email']                    = "Email";
$lang['users input first_name']               = "Prénom";
$lang['users input is_admin']                 = "Is Admin";
$lang['users input language']                 = "La langue";
$lang['users input last_name']                = "Last Name";
$lang['users input password']                 = "Password";
$lang['users input password_repeat']          = "Repeat Password";
$lang['users input status']                   = "Statut";
$lang['users input username']                 = "Nom d'utilisateur";
$lang['users input username_email']           = "Nom d'utilisateur ou Email ou Téléphone";
$lang['users input phone']                    = "Téléphone";

// Help
$lang['users help passwords']                 = "N'entrez des mots de passe que si vous voulez le changer.";

// Messages
$lang['users msg add_user_success']           = "%s a été ajouté avec succès!";
$lang['users msg delete_confirm']             = "Etes-vous sûr que vous voulez supprimer <strong>%s</strong>? Ça ne peut pas être annulé.";
$lang['users msg delete_user']                = "Vous avez supprimé avec succès <strong>%s</strong>!";
$lang['users msg edit_profile_success']       = "Votre profil a été modifié avec succès!";
$lang['users msg edit_user_success']          = "%s a été modifié avec succès!";
$lang['users msg register_success']           = "Merci de votre inscription, %s! Vérifiez votre email pour un message de confirmation. Une fois que
votre compte a été vérifié, vous pourrez vous connecter avec les informations d'identification
vous avez fourni.";
$lang['users msg password_reset_success']     = "votre mot de passe a été réinitialisé, %s! Veuillez vérifier votre email pour votre nouveau mot de passe temporaire.";
$lang['users msg validate_success']           = "Votre compte a été vérifié. Vous pouvez maintenant vous connecter à votre compte.";
$lang['users msg email_new_account']          = "<p>Merci de créer un compte sur %s. Cliquez sur le lien ci-dessous pour valider votre
                                                adresse e-mail et activer votre compte.<br /><br /><a href=\"%s\">%s</a></p>";
$lang['users msg email_new_account_title']    = "Nouveau compte pour %s";
$lang['users msg email_password_reset']       = "<p>Votre mot de passe à %s a été réinitialisé. Cliquez sur le lien ci-dessous pour vous connecter avec votre
                                                 nouveau mot de passe:<br /><br /><strong>%s</strong><br /><br /><a href=\"%s\">%s</a>
                                                 Une fois connecté, assurez-vous de changer votre mot de passe pour quelque chose que vous pouvez
                                                 rappelles toi.</p>";
$lang['users msg email_password_reset_title'] = "Mot de passe réinitialisé pour %s";

// Menu
$lang['users menu dashboard']                 = "Tableau de bord";
$lang['users menu transfer']                  = "Transfert d'argent";
$lang['users menu exchange']                  = "Échange de devises";
$lang['users menu history']                   = "Histoire des opérations";
$lang['users menu dispute']                   = "Centre de résolution";
$lang['users menu request']                   = "Demande de paiement";
$lang['users menu acceptance']                = "Paiements d'acceptation";
$lang['users menu support']                   = "Soutien";
$lang['users menu settings']                  = "Paramètres du compte";

// Dashboard
$lang['users dashboard ballance']             = "Solde disponible";
$lang['users dashboard deposit']              = "Dépôt";
$lang['users dashboard withdrawal']           = "Retrait";
$lang['users dashboard other_ballance']       = "D'autres portefeuilles";
$lang['users dashboard success_verif_title']  = "Le statut de votre compte - vérifié";
$lang['users dashboard success_verif_text']   = "Excellent! Vous pouvez maintenant retirer des fonds de votre compte sans restrictions.
                                                 <a href=\"/account/identification\">Learn More</a>";
$lang['users dashboard danger_verif_title']   = "Le statut de votre compte - anonyme";
$lang['users dashboard danger_verif_text']    = "Oops! Le statut de votre compte ne vous permet pas de retirer des fonds de votre compte.<a href=\"/account/identification\">Apprendre encore plus</a>";
$lang['users dashboard warning_verif_title']  = "L'état de votre compte - en attente de vérification";
$lang['users dashboard warning_verif_text']   = "Merci! Nous avons reçu vos documents et rendrons une décision dans les 2-3 jours ouvrables.<a href=\"/account/identification\">Apprendre encore plus</a>";
$lang['users dashboard info_verif_title']     = "Le statut de votre compte - business";
$lang['users dashboard info_verif_text']      = "Génial! Vous avez confirmé votre statut de fiabilité et pouvez accepter des paiements externes.<a href=\"/account/identification\">Apprendre encore plus</a>";
$lang['users trans deposit']                  = "Dépôt";
$lang['users trans withdrawal']               = "Retrait";
$lang['users trans transfer']                 = "Transfert";
$lang['users trans exchange']                 = "Échange";
$lang['users trans external']                 = "Dépôt externe";
$lang['users trans pending']                  = "en attendant";
$lang['users trans success']                  = "Confirmé";
$lang['users trans refund']                   = "Rembourser";
$lang['users trans dispute']                  = "Contestation";
$lang['users trans blocked']                  = "Bloqué";
$lang['users trans id']                       = "ID";
$lang['users trans type']                     = "Type";
$lang['users trans sum']                      = "Somme";
$lang['users trans fee']                      = "Frais";
$lang['users trans amount']                   = "Montant";
$lang['users trans status']                   = "Statut";
$lang['users trans sender']                   = "Expéditeur";
$lang['users trans receiver']                 = "Destinataire";
$lang['users trans date']                     = "Date";
$lang['users trans comment']                  = "Commentaire";
$lang['users trans cyr']                      = "Currency";
$lang['users trans detail']                   = "Détail";
$lang['users trans 10last']                   = "Les 10 dernières opérations";
$lang['users trans all']                      = "Toutes transactions";

// History
$lang['users history all']                    = "Historique IP du compte";
$lang['users history detail']                 = "Transaction détaillée";
$lang['users history id_trans']               = "Transaction d'identité";
$lang['users history open_dispute']           = "Litige ouvert";
$lang['users history print']                  = "Imprimer le détail";
$lang['users history of']                     = "Dated";
$lang['users history open_dispute']           = "Conflit d'ouverture";
$lang['users history dispute_title']          = "Raison de l'ouverture d'un conflit";
$lang['users history not_received']           = "Je ne ai pas reçu les marchandises";
$lang['users history not_desk']               = "Le produit ne correspond pas à la description";
$lang['users history reason']                 = "Décrivez l'essence du différend";
$lang['users history help']                   = "Spécifiez dans la zone de texte la raison pour laquelle vous ouvrez ce conflit. Aussi détaillée que possible description du problème et demander au vendeur des options pour ses solutions.";
$lang['users history start']                  = "Commencer un conflit";
$lang['users history dispute_success']        = "Le différend a été ouvert avec succès! Vous pouvez suivre le conflit au centre de la résolution";
$lang['users history swift']                  = "Nous attendons votre paiement! Entrez dans le paiement Banque commandez votre nom d'utilisateur.";

// Dispute
$lang['users dispute list']                   = "Liste des différends";
$lang['users dispute id']                     = "ID contestation";
$lang['users dispute date']                   = "Date";
$lang['users dispute claimant']               = "Demandeur";
$lang['users dispute action']                 = "Action";
$lang['users dispute start_claim']            = "Démarrer la réclamation";
$lang['users dispute close_claim']            = "Conflit rapproché";
$lang['users disputes id_tran']               = "ID transaction";
$lang['users disputes id_tran_time']          = "Date transaction";
$lang['users disputes time_dispute']          = "Date dispute";
$lang['users disputes all_dispute']           = "All des disputes";
$lang['users disputes edit_dispute']          = "Edit des disputes";
$lang['users disputes claimant']              = "Demandeur";
$lang['usersn disputes defendant']            = "Défendeur";
$lang['users disputes status']                = "Statut";
$lang['users disputes open']                  = "La contestation est ouverte";
$lang['users disputes rejected']              = "Demande rejetée";
$lang['users disputes satisfied']             = "Demande satisfaite";
$lang['users disputes claim']                 = "Prétendre";
$lang['users disputes detail']                = "Détails Contestation";
$lang['users disputes overwiev']              = "Aperçu Contestation";
$lang['users disputes back']                  = "Arrière";
$lang['users disputes new_comment']           = "Nouveau commentaire";
$lang['users disputes add_comment']           = "Ajouter un commentaire";
$lang['users disputes comment_success']       = "Votre commentaire a été ajouté avec succès!";
$lang['users disputes open_claim_success']    = "Le litige a été transféré avec succès à la réclamation!";
$lang['users disputes transferred']           = "Le litige est transféré à la réclamation. Veuillez attendre la décision de l'administration.";
$lang['users disputes stop']                  = "Le différend est arrêté. Mon problème est résolu";
$lang['users disputes success_stop']          = "Le conflit a été arrêté avec succès";

// Tickets
$lang['users tickets add']                    = "Créer un nouveau ticket";
$lang['users tickets date']                   = "Créer un rendez-vous";
$lang['users tickets date_info']              = "Date";
$lang['users tickets user']                   = "Nom d'utilisateur";
$lang['users tickets message']                = "Message";
$lang['users tickets create']                 = "Créer un ticket";
$lang['users tickets title']                  = "Titre";
$lang['users tickets untreated']              = "Non traité";
$lang['users tickets processed']              = "Traité";
$lang['users tickets closed']                 = "Fermé";
$lang['users tickets success_edit']           = "Le ticket a bien été modifié";
$lang['users tickets reply']                  = "Répondre à un ticket";
$lang['users tickets id']                     = "ID billet";
$lang['users tickets close']                  = "Close billet";
$lang['users tickets new']                    = "Nouveau commentaire";
$lang['users tickets success_comment']        = "Commentaire ajouté avec succès!";
$lang['users tickets success_close']          = "Ticket fermé avec succès!";
$lang['users tickets success_new']            = "Ticket créé avec succès! Nous répondrons dans les deux jours ouvrables";
$lang['users tickets form']                   = "Remplissez le formulaire de demande d'assistance";
$lang['users tickets send']                   = "Envoyer un ticket";

// Request
$lang['users reqest purpose']                 = "But du paiement";
$lang['users reqest invoice']                 = "Numéro de facture";
$lang['users reqest email']                   = "Email";
$lang['users reqest note']                    = "Note pour le destinataire";
$lang['users reqest send']                    = "Envoyer une demande";
$lang['users reqest success']                 = "Votre demande a bien été envoyée!";

// Transfer
$lang['users transfer amount']                = "Transfert de montant";
$lang['users transfer sum']                   = "Frais";
$lang['users transfer help_com']              = "Avec commission";
$lang['users transfer receiver']              = "Nom d'utilisateur";
$lang['users transfer send']                  = "Envoyer de l'argent";
$lang['users transfer success']               = "Le transfert d'argent a été complété avec succès!";

// Exchange
$lang['users exchange rate']                  = "Taux d'échange";
$lang['users exchange amount']                = "Échange de quantité";
$lang['users exchange get']                   = "Vous obtenez";
$lang['users exchange start']                 = "Commencer l'échange";
$lang['users exchange note']                  = "Exchange operation";
$lang['users exchange success']               = "Exchange successfully completed!";

// Withdrawal
$lang['users withdrawal amount']              = "Montant";
$lang['users withdrawal currency']            = "Devise";
$lang['users withdrawal account']             = "Vos conditions pour recevoir des fonds";
$lang['users withdrawal help']                = "Veuillez entrer un compte valide auquel vous souhaitez transférer de l'argent. Par exemple mail@gmail.com or 4276150025568996";
$lang['users withdrawal error']               = "Votre niveau de vérification n'est pas suffisant pour effectuer l'opération";

// Method
$lang['users withdrawal card']                = "Bank cards";
$lang['users withdrawal paypal']              = "PayPal";
$lang['users withdrawal btc']                 = "Bitcoin";
$lang['users withdrawal adv']                 = "ADV cash";
$lang['users withdrawal webmoney']            = "Webmoney";
$lang['users withdrawal payeer']              = "Payeer";
$lang['users withdrawal qiwi']                = "QIWI VISA Wallet";
$lang['users withdrawal perfect']             = "Perfect money";
$lang['users withdrawal swift']               = "SWIFT transfer";
$lang['users withdrawal westernunion']        = "Western Union money";
$lang['users withdrawal moneygram']           = "Moneygram transfer";
$lang['users admin payment account']          = "Détails du compte de paiement";

// Verifi
$lang['users verifi title']                  = "Niveau de votre compte";
$lang['users verifi anonymous']              = "Anonyme";
$lang['users verifi verified']               = "Vérifié";
$lang['users verifi business']               = "Entreprise";
$lang['users verifi available']              = "Disponible";
$lang['users verifi not_available']          = "Indisponible";
$lang['admin verifi check']                  = "Vos documents sont sur chèque. Nous avons besoin de 2-3 jours ouvrables!";
$lang['users verifi deposit']                = "dépôt";
$lang['users verifi transfer']               = "transfert d'argent";
$lang['users verifi exchange']               = "échange";
$lang['users verifi request']                = "demande";
$lang['users verifi withdrawal']             = "fonds de retrait";
$lang['users verifi acceptance']             = "paiements d'acceptation";
$lang['users verifi get_it_now']             = "Obtenez-le maintenant";
$lang['users verifi you_status']             = "Votre statut";
$lang['users verifi upload']                 = "Télécharger des documents";
$lang['users verifi save']                   = "sauvegarder";
$lang['users verifi close']                  = "Fermer";
$lang['users verifi unavailable']            = "Indisponible";
$lang['users verifi info']                   = "Nous ne transmettons jamais vos informations personnelles à personne ni ne les utilisons à des fins commerciales. L'identification nous aide seulement à distinguer les utilisateurs dignes de confiance des escrocs potentiels. Si une personne nous donne ses données, nous supposons qu'il n'a rien à cacher. ";
$lang['users verifi id']                     = "Carte d'identité ou passeport";
$lang['users verifi adress']                 = "Document d'adresse";
$lang['users verifi doc_business']           = "Documents d'enregistrement d'entreprise";

// Deposit
$lang['users deposit next']                  = "Suivant";
$lang['users deposit payment']               = "Aller au paiement";

// Merchants ====================================================================================
$lang['users merchants pay']                 = "Payer ordre"; //
$lang['users merchants btc_address']         = "BTC address"; //
$lang['users merchants btc_order']           = "Order is awaiting transfer for the amount of"; //
$lang['users merchants btc_total']           = "You will receive to your account"; //
$lang['users merchants btc_completed']       = "after the transaction is completed"; //
$lang['users merchants btc_warning']         = "Up to six network confirmations may be required to complete the operation."; //
$lang['users merchants html']                = "HTML Form generator"; //
$lang['users merchants all']                 = "All merchants";
$lang['users merchants id']                  = "Merchant ID"; //
$lang['users merchants item']                = "Item name"; //
$lang['users merchants order']               = "Order number"; //
$lang['users merchants price']               = "Price"; //
$lang['users merchants custom']              = "Custom"; //
$lang['users merchants form']                = "Example HTML form"; //
$lang['users merchants generate']            = "Generate!"; //
$lang['users merchants copy']                = "Copy the form code and place it on your website."; //
$lang['users merchants pay']                 = "Pay order"; //
$lang['users merchants btc_address']         = "BTC address"; //
$lang['users merchants btc_order']           = "Order is awaiting transfer for the amount of"; //
$lang['users merchants btc_total']           = "You will receive to your account"; //
$lang['users merchants btc_completed']       = "after the transaction is completed"; //
$lang['users merchants btc_warning']         = "Up to six network confirmations may be required to complete the operation."; //
$lang['users merchants html']                = "HTML Form generator"; //
$lang['users merchants all']                 = "All merchants";
$lang['users merchants id']                  = "Merchant ID"; //
$lang['users merchants item']                = "Item name"; //
$lang['users merchants order']               = "Order number"; //
$lang['users merchants price']               = "Price"; //
$lang['users merchants custom']              = "Custom"; //
$lang['users merchants form']                = "Example HTML form"; //
$lang['users merchants generate']            = "Generate!"; //
$lang['users merchants copy']                = "Copy the form code and place it on your website."; //
$lang['users merchants create']              = "Create new merchant";
$lang['users merchants name']                = "Name";
$lang['users merchants url']                 = "URL site";
$lang['users merchants ipn']                 = "Status IPN link";
$lang['users merchants active']              = "Active";
$lang['users merchants moderation']          = "Moderation";
$lang['users merchants disapproved']         = "Disapproved";
$lang['users merchants test']                = "Test payment form";
$lang['users merchants detail']              = "Detail merchant";
$lang['users merchants password']            = "Merchant password";
$lang['users merchants new']                 = "New merchant";
$lang['users merchants comment']             = "Comment for administration";
$lang['users merchants send']                = "Send for moderation";
$lang['users merchants success']             = "Request has been sent! We will take a decision within 2-3 business days!";
// Merchants ====================================================================================


// Errors
$lang['users error add_user_failed']          = "%s could not be added!";
$lang['users error delete_user']              = "<strong>%s</strong> could not be deleted!";
$lang['users error edit_profile_failed']      = "Your profile could not be modified!";
$lang['users error edit_user_failed']         = "%s could not be modified!";
$lang['users error email_exists']             = "The email <strong>%s</strong> already exists!";
$lang['users error email_not_exists']         = "That email does not exists!";
$lang['users error invalid_login']            = "Invalid username or password";
$lang['users error password_reset_failed']    = "There was a problem resetting your password. Please try again.";
$lang['users error register_failed']          = "Your account could not be created at this time. Please try again.";
$lang['users error user_id_required']         = "A numeric user ID is required!";
$lang['users error user_not_exist']           = "That user does not exist!";
$lang['users error username_exists']          = "The username <strong>%s</strong> already exists!";
$lang['users error validate_failed']          = "There was a problem validating your account. Please try again.";
$lang['users error too_many_login_attempts']  = "You've made too many attempts to log in too quickly. Please wait %s seconds and try again.";
$lang['users error fraud']                    = "Sorry, you can not complete this operation. Please contact support for clarification";
$lang['users error form']                     = "Please provide correct data about the transfer";
$lang['users error wallet']                   = "Sorry, not enough funds to perform the operation";
//################################################################################################
$lang['users error warning']                  = "Warning!";
$lang['users error not_fraud']                = "Some operations are prohibited for your account. Contact support for more details!";
$lang['users error invalid_form']             = "You entered incorrect data!";
$lang['users error btc_network']              = "The funds will be credited to your account after 6 network confirmations!"; //

// Vouchers
$lang['users vouchers menu']                  = "Vouchers";
$lang['users vouchers all']                   = "All vouchers";
$lang['users vouchers pending']               = "Pending";
$lang['users vouchers activated']             = "Activated";
$lang['users vouchers code']                  = "Code";
$lang['users vouchers code_v']                = "Code voucher";
$lang['users vouchers creator']               = "Creator";
$lang['users vouchers activator']             = "Activator";
$lang['users vouchers voucher']               = "Voucher";
$lang['users vouchers detail']                = "Detail voucher";
$lang['users vouchers date']                  = "Activation date";
$lang['users vouchers new']                   = "New code";
$lang['users vouchers new_v']                 = "New voucher";
$lang['users vouchers create_v']              = "Create voucher";
$lang['users vouchers ac']                    = "Activate code";
$lang['users vouchers now']                   = "Activate now";
$lang['users vouchers date_created']          = "Created date";
$lang['users vouchers error']                 = "This voucher does not exist or has already been activated in the system!";
$lang['users vouchers success']               = "Voucher successfully activated!";
$lang['users vouchers error_new']             = "Check the correctness of the entered values!";
$lang['users vouchers success_new']           = "Voucher successfully created!";

$lang['postQuestionsSuccess'] = "Merci d'utiliser notre plateforme. Votre demande a été soumise et nous vous contacterons bientôt
";


//
$lang['users my projects'] = "Mes projets";
$lang['users my services'] = "Mes services";
$lang['users find jobs']   = "Trouver des emplois";  


$lang['users slider header text']    = "Recruter mieux";    
$lang['users slider header small text']    = "Obtenez un accès instantané à des services fiables et abordables"; 
$lang['users slider worker text']    = "Ouvriers"; 
$lang['users slider services text']  = "Prestations de service";
$lang['users slider onlinenow text'] = "Maintenant en ligne";
$lang['users below text']            = "Des solutions simples et fiables";  
$lang['users below text small']      = "Vite. Disponible. Aucun problème."; 
$lang['users recommended category services']  = "Catégorie et services recommandés";    
$lang['users locality text']    = "Remarque Zone ou ville résidant dans votre pays";
$lang['users services text']    = "Par exemple. Tuteur à la maison, plombier, photographe de mariage";

$lang['users activation code email'] = "Entrez le code d'activation envoyé à votre adresse e-mail";
$lang['users enter activation code'] = "Entrez le code d'activation";   

$lang['users download app'] = "Téléchargez notre application"; 
$lang['users download text'] = "Choisissez et réservez parmi plus de 100 services et suivez-les sur le pouce avec le";
$lang['users download link'] = "Envoyer un lien par SMS pour installer l'application";  

$lang['users enter access page'] = "page d'accès"; 
$lang['users enter access code'] = "Entrez le code d'accès";
$lang['users enter access code success'] = "Code d'accès vérifiéd";
$lang['users enter access page header'] = "Tout en un seul endroit - Page d'accès";
$lang['users enter accessCode'] = "d'accès code"; 

$lang['users features'] = "Caractéristiques"; 
$lang['users support'] = "Soutien"; 
$lang['users help']     = "Aidez-moi"; 
