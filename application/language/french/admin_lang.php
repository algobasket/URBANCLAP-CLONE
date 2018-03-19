<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Admin Language File
 */

// Titles
$lang['admin title admin']                = "Administration"; 
$lang['admin title currency']             = "Devise du gestionnaire";
$lang['admin title logs']                 = "Journal d'activité";
$lang['admin title transactions']         = "Transactions";
$lang['admin title edit_transactions']    = "Détails de la transaction";
$lang['admin title edit_dispute']         = "Détails du litige";
$lang['admin title disputes']             = "Des disputes";
$lang['admin title tickets']              = "Des billets";
$lang['admin title verification']         = "Vérification";
$lang['admin title template']             = "Modèles de messages";
$lang['admin title request']              = "Demande de paiement";
$lang['admin title fee']                  = "Gestionnaire des frais de retrait";
$lang['admin title fee_dep']              = "Gestionnaire des frais de dépôt";

// Buttons
$lang['admin button csv_export']          = "CSV Export";
$lang['admin button dashboard']           = "Tableau de bord";
$lang['admin button delete']              = "Effacer";
$lang['admin button edit']                = "modifier";
$lang['admin button messages']            = "messages";
$lang['admin button settings']            = "Paramètres";
$lang['admin button users']               = "Utilisateurs";
$lang['admin button users_verification']  = "Vérification en attente";
$lang['admin button blocked_users']       = "Bloqué";
$lang['admin button users_business']      = "Comptes d'entreprise";
$lang['admin button currency']            = "Devise";
$lang['admin button users_add']           = "Ajouter un nouvel utilisateur";
$lang['admin button users_list']          = "Lister les utilisateurs";
$lang['admin button users_all']           = "Tous les utilisateurs";
$lang['admin button transactions']        = "Transactions";
$lang['admin button all_transactions']    = "Toutes transactions";
$lang['admin button deposits']            = "Dépôts";
$lang['admin button withdrawal_funds']    = "Fonds de retrait";
$lang['admin button transfers']           = "Transferts";
$lang['admin button disputes']            = "Des disputes";
$lang['admin button logs']                = "Activity log";
$lang['admin button disputes']            = "Journal d'activité";
$lang['admin button tickets']             = "Des billets";
$lang['admin button untreated_tickets']   = "Billets non traités";
$lang['admin button processed_tickets']   = "Billets traités";
$lang['admin button closed_tickets']      = "Billets fermés";
$lang['admin button add_tickets']         = "Ajouter un nouveau ticket";
$lang['admin button det_tickets']         = "Détails du billet";
$lang['admin button pages']               = "Gérer les pages";
$lang['admin button template']            = "Messages de modèle";
$lang['admin button pending']             = "en attendant";
$lang['admin button confirmed']           = "Confirmé";
$lang['admin button disputed']            = "Contesté";
$lang['admin button blocked']             = "Bloqué";
$lang['admin button refunded']            = "Remboursé";
$lang['admin button all_dispute']         = "Tous les différends";
$lang['admin button open_disputes']       = "Conflits ouverts";
$lang['admin button open_claims']         = "Revendications ouvertes";
$lang['admin button rejected_disputes']   = "Contestations rejetées";
$lang['admin button satisfied_disputes']  = "Des différends satisfaits";
$lang['admin button fees']                = "Les commissions";
$lang['admin button fees_win']            = "Frais de retrait";
$lang['admin button fees_dep']            = "Frais pour deposite";

// Tooltips
$lang['admin tooltip csv_export']         = "Exportez un fichier CSV de tous les résultats avec des filtres appliqués.";
$lang['admin tooltip filter']             = "Mettre à jour les résultats en fonction de vos filtres.";
$lang['admin tooltip filter_reset']       = "Effacer tous vos filtres et tri.";

// Form Inputs
$lang['admin input active']               = "actif";
$lang['admin input inactive']             = "Inactif";
$lang['admin input items_per_page']       = "articles / page";
$lang['admin input use_detail']           = "Utilisateur détaillé";
$lang['admin input select']               = "sélectionner...";
$lang['admin input username']             = "Nom d'utilisateur";
$lang['admin input verifi_status']        = "Statut de vérification";
$lang['admin input verifi_ok']            = "Vérifié";
$lang['admin input anonymous']            = "Anonyme";
$lang['admin input business']             = "Entreprise";
$lang['admin input waiting']              = "Vérification en attente";
$lang['admin input fraud_status']         = "Statut de fraude";
$lang['admin input fraud_none']           = "Pas de limites";
$lang['admin input no_withdrawal']        = "Pas de retrait";
$lang['admin input fraud_banned']         = "Interdit toutes les opérations";
$lang['admin input overview']             = "Compte d'aperçu";
$lang['admin input wallet']               = "Portefeuille";
$lang['admin input phone']                = "Téléphone";
$lang['admin input document']             = "Documents";
$lang['admin input debit_base']           = "Débit";
$lang['admin input charge']               = "Échange";
$lang['admin input add_transaction']      = "Ajouter une transaction";
$lang['admin input login_history']        = "Histoire des opérations";
$lang['admin input all_transactions']     = "toutes transactions";
$lang['admin input you_change']           = "Vous changez";
$lang['admin input available']            = "Disponible pour échange";
$lang['admin input getting']              = "Vous obtenez";
$lang['admin input base_exchange']        = "Échange de la devise de base pour la devise supplémentaire";
$lang['admin input start_charge']         = "Commencer l'échange";
$lang['admin input error_charge']         = "Vous n'avez pas assez de fonds pour effectuer des opérations";
$lang['admin input bank']                 = "Détail de la Banque";

// logs user
$lang['admin log id']                   = "ID";
$lang['admin log date']                 = "Date";
$lang['admin log ip']                   = "IP adress";
$lang['admin log event']                = "un événement";
$lang['admin log device']               = "Voir l'appareil";
$lang['admin log last_operations']      = "20 dernières opérations";
$lang['admin log last_trans']           = "10 dernières transactions sortantes";
$lang['admin log last_trans_in']        = "Les 10 dernières transactions entrantes";
$lang['admin log see_operations']       = "Voir toutes les opérations";
$lang['admin log see_trans']            = "Toutes les transactions sortantes";
$lang['admin log see_trans_in']         = "Toutes les transactions entrantes";
$lang['admin log login']                = "enregistrement";
$lang['admin log username']             = "Nom d'utilisateur";
$lang['admin log clear']                = "Effacer le journal";
$lang['admin log search']               = "Chercher";
$lang['admin log list']                 = "Tous les journaux";

// Transactions
$lang['admin trans id']                 = "ID";
$lang['admin trans type']               = "Type";
$lang['admin trans sum']                = "Somme";
$lang['admin trans fee']                = "Frais";
$lang['admin trans amount']             = "Montant";
$lang['admin trans status']             = "Statut";
$lang['admin trans sender']             = "Expéditeur";
$lang['admin trans receiver']           = "Destinataire";
$lang['admin trans time']               = "Temps";
$lang['admin trans deposit']            = "Dépôt";
$lang['admin trans withdrawal']         = "Retrait";
$lang['admin trans transfer']           = "Transfert";
$lang['admin trans exchange']           = "Échange";
$lang['admin trans external']           = "SCI";
$lang['admin trans pending']            = "en attendant";
$lang['admin trans success']            = "Confirmé";
$lang['admin trans refund']             = "Rembourser";
$lang['admin trans dispute']            = "Contestation";
$lang['admin trans blocked']            = "Bloqué";
$lang['admin trans edit']               = "Modifier la transaction";
$lang['admin trans comment']            = "Commentaire";
$lang['admin trans admin_comment']      = "Note d'administration";
$lang['admin trans check_notify']       = "Notification d'activation";
$lang['admin trans notification']       = "Notification de message";
$lang['admin trans add_ball']           = "Ajouter à l'équilibre";
$lang['admin trans win_ball']           = "Charge par solde";
$lang['admin trans add_success']        = "Transaction terminée!";
$lang['admin trans all']                = "Toutes transactions";
$lang['admin trans pen_trans']          = "Transactions en attente";
$lang['admin trans com_trans']          = "Transactions confirmées";
$lang['admin trans dis_trans']          = "Transactions contestées";
$lang['admin trans blo_trans']          = "Transactions bloquées";
$lang['admin trans ref_trans']          = "Transactions remboursées";
$lang['admin trans success_blocked']    = "La transaction a été bloquée avec succès. Les fonds sont débités du compte de l'utilisateur.";
$lang['admin trans success_confirm']    = "La transaction a été confirmée avec succès. Fonds ajoutés au solde de l'utilisateur.";
$lang['admin trans success_refund']     = "L'argent a été retourné avec succès à l'expéditeur!";

// Disputes
$lang['admin disputes id_tran']         = "ID Transaction";
$lang['admin disputes id_tran_time']    = "Date transaction";
$lang['admin disputes time_dispute']    = "Date contestation";
$lang['admin disputes all_dispute']     = "Tous les différends";
$lang['admin disputes edit_dispute']    = "Modifier contestation";
$lang['admin disputes claimant']        = "Demandeur";
$lang['admin disputes defendant']       = "Défendeur";
$lang['admin disputes status']          = "Statut";
$lang['admin disputes open']            = "Contestation est ouvert";
$lang['admin disputes rejected']        = "Demande rejetée";
$lang['admin disputes satisfied']       = "Demande satisfaite";
$lang['admin disputes claim']           = "Prétendre";
$lang['admin disputes detail']          = "Détails contestation";
$lang['admin disputes success']         = "Le conflit a été modifié avec succès";
$lang['admin disputes overview']        = "Aperçu";
$lang['admin disputes written']         = "Écrit à partir de";
$lang['admin disputes new_comment']     = "Nouveau commentaire";
$lang['admin disputes add_comment']     = "Ajouter un commentaire";
$lang['admin disputes decision']        = "Décision";
$lang['admin disputes open']            = "Contestation ouverte";
$lang['admin disputes open_claim']      = "Réclamation ouverte";
$lang['admin disputes reject']          = "Rejeter";
$lang['admin disputes satisfy']         = "Satisfaire";
$lang['admin disputes admin']           = "Administration";
$lang['admin disputes success_com']     = "Le commentaire a été ajouté avec succès à la contestation";
$lang['admin disputes transferred']     = "Le litige est transféré à la réclamation. Veuillez attendre la décision de l'administration.";
$lang['admin disputes open_dispute_ad'] = "Le différend est ouvert. Vous pouvez laisser un message pour prendre une décision sur le remboursement.
";
$lang['admin disputes open_reject']     = "Après une analyse approfondie des preuves fournies ci-dessous
Nous avons terminé l'enquête et décidé en faveur du bénéficiaire.";
$lang['admin disputes open_satisfy']    = "Après une analyse approfondie des preuves fournies ci-dessous
Nous avons terminé l'enquête et décidé en faveur de l'expéditeur du paiement. Conformément à notre accord avec l'utilisateur, nous avons débité votre montant contesté de votre compte.";
$lang['admin disputes success_reject']  = "La demande a été rejetée avec succès";
$lang['admin disputes success_dispute'] = "Le différend a été ouvert avec succès";
$lang['admin disputes success_claim']   = "La réclamation a été ouverte avec succès. Le destinataire du paiement contesté ne sera pas en mesure de retirer de l'argent de son compte jusqu'à ce qu'une décision soit prise.";
$lang['admin disputes success_satisfy'] = "La réclamation est satisfaite. L'argent a été retourné.";
$lang['admin disputes odi_status']      = "Conflits ouverts";
$lang['admin disputes ocl_status']      = "Revendications ouvertes";
$lang['admin disputes rej_status']      = "Contestations rejetées";
$lang['admin disputes sat_status']      = "Des différends satisfaits";

// Tickets
$lang['admin tickets all']              = "Tous les billets";
$lang['admin tickets date']             = "Créer date";
$lang['admin tickets date_info']        = "Date";
$lang['admin tickets user']             = "Nom d'utilisateur";
$lang['admin tickets message']          = "Message";
$lang['admin tickets create']           = "Créer un ticket";
$lang['admin tickets title']            = "Titre";
$lang['admin tickets untreated']        = "Non traité";
$lang['admin tickets processed']        = "Traité";
$lang['admin tickets closed']           = "Fermé";
$lang['admin tickets success_edit']     = "Le ticket a bien été modifié";
$lang['admin tickets reply']            = "Répondre à un ticket";
$lang['admin tickets id']               = "Ticket d'identité";
$lang['admin tickets textarea']         = "Votre réponse à un message d'utilisateur";
$lang['admin tickets close']            = "Billet proche";
$lang['admin tickets admin_comment']    = "Votre message a été envoyé. Le statut du ticket a été modifié avec succès!";
$lang['admin tickets success_close']    = "Ticket fermé avec succès! L'utilisateur ne peut pas laisser de commentaires.";
$lang['admin tickets success_create']   = "Ticket créé avec succès!";

// Verification
$lang['admin verification all']         = "Toutes les demandes";
$lang['admin verification pending']     = "en attendant";
$lang['admin verification confirmed']   = "Confirmé";
$lang['admin verification disapproved'] = "Refusé";
$lang['admin verification img']         = "Document";
$lang['admin verification doc_user']    = "Carte d'identité";
$lang['admin verification doc_adress']  = "Vérification d'adresse";
$lang['admin verification doc_bus']     = "Confirmation d'entreprise";
$lang['admin verification doc_for']     = "for";
$lang['admin verification action']      = "Action";
$lang['admin verification comfirm']     = "Confirmer";
$lang['admin verification comfirm_ver'] = "Confirmer et vérifier";
$lang['admin verification comfirm_bus'] = "Confirmer et compte d'affaires";
$lang['admin verification reject']      = "Rejeter des documents";
$lang['admin verification list']        = "Liste des documents";
$lang['admin verification reject_suc']  = "Documents rejetés avec succès!";
$lang['admin verification com_suc']     = "Les documents ont été vérifiés avec succès!";
$lang['admin verification com_ver_suc'] = "Les documents ont été vérifiés avec succès. L'utilisateur a reçu un statut vérifié!";
$lang['admin verification com_bus_suc'] = "Les documents ont été vérifiés avec succès. L'utilisateur a reçu le statut de l'entreprise!";

// Template
$lang['admin template email']           = "Modèle d'email";
$lang['admin template sms']             = "Modèle de SMS";
$lang['admin template edit']            = "Modèle d'email modificateur";
$lang['admin template sms_edit']        = "Modifier le modèle de sms";
$lang['admin template status']          = "Statut";
$lang['admin template enabled']         = "Activée";
$lang['admin template disabled']        = "désactivé";
$lang['admin template success']         = "Modèle modifié avec succès!";

// Dashboard
$lang['admin dashboard users']          = "Nombre total d'utilisateurs";
$lang['admin dashboard trans']          = "Total des transactions";
$lang['admin dashboard dispute']        = "Total des différends";
$lang['admin dashboard link']           = "Aller à la gestion";
$lang['admin dashboard last_trans']     = "Les 5 dernières transactions en attente";
$lang['admin dashboard last_tickets']   = "Les 5 derniers tickets en attente";
$lang['admin dashboard last_act']       = "Dernière Activité";

// Fees
$lang['admin fees title']               = "Toutes les méthodes";
$lang['admin fees ckeck']               = "Activer";
$lang['admin fees fees']                = "Frais";
$lang['admin fees card']                = "Cartes bancaires";
$lang['admin fees pp']                  = "PayPal";
$lang['admin fees btc']                 = "Bitcoin";
$lang['admin fees adv']                 = "ADV Cash";
$lang['admin fees wmz']                 = "Webmoney";
$lang['admin fees payeer']              = "Payeer";
$lang['admin fees qiwi']                = "QIWI";
$lang['admin fees perfect']             = "Perfect Money";
$lang['admin fees acc_perfect']         = "Compte Perfect Money";
$lang['admin fees swift']               = "SWIFT";
$lang['admin fees success']             = "Quantité de commission modifiée avec succès";
$lang['admin fees check']               = "Vos documents sont sur chèque. Nous avons besoin de 2-3 jours ouvrables!";
$lang['admin fees acc_pp']              = "Compte Paypal";
$lang['admin fees acc_payeer']          = "Merchant ID";
$lang['admin fees key_payeer']          = "Clef secrète";
$lang['admin fees crypt_payeer']        = "Clé de cryptage";
$lang['admin fees acc_adv']             = "Compte ADV";
$lang['admin fees sci_name']            = "SCI name";
$lang['admin fees pass_dep']            = "Mot de passe";
$lang['admin fees shop_id']             = "Identifiant du magasin";
$lang['admin fees key_perfect']         = "Secret code";
$lang['admin fees swift_desk']          = "Instruction pour le payeur";

//#############################################################################//

// Merchants
$lang['admin merchant title']           = "Marchands";
$lang['admin merchant active']          = "actif";
$lang['admin merchant moderation']      = "Modération";
$lang['admin merchant disapproved']     = "Refusé";
$lang['admin merchant all_merch']       = "Tous les marchands";
$lang['admin merchant link']            = "URL site";
$lang['admin merchant detail']          = "Détail marchand";
$lang['admin merchant edit']            = "Modifier marchand";
$lang['admin merchant merchant']        = "marchand ID";
$lang['admin merchant name']            = "prénom";
$lang['admin merchant password']        = "Mot de passe";
$lang['admin merchant ipn_link']        = "IPN link";
$lang['admin merchant comment']         = "Commentaire";
$lang['admin merchant reject']          = "Rejeter";
$lang['admin merchant success']         = "Statut marchand modifié avec succès";

//################################################################################//

//Pay method
$lang['admin pay title']                = "Méthodes de payement";
$lang['admin pay sci']                  = "marchande";
$lang['admin pay manager']              = "Frais de gestion de SCI";
$lang['admin pay wallet']               = "Portefeuille";

// Table Columns
$lang['admin col actions']                = "actes";
$lang['admin col status']                 = "Statut";

// Form Labels
$lang['admin label rows']                 = "%s row(s)";
$lang['admin label read']                 = "Lire le message";
$lang['admin label limit']                = "Attention! Vous approchez la limite de GAP pour"; //
$lang['admin label more']                 = "Plus..."; //
$lang['admin label gap']                  = "GAP limite maintenant:"; //

// Vouchers
$lang['admin vouchers menu']              = "Vouchers";
$lang['admin vouchers all']               = "All Vouchers";
$lang['admin vouchers pending']           = "en attendant";
$lang['admin vouchers activated']         = "Activé";
$lang['admin vouchers code']              = "Code";
$lang['admin vouchers creator']           = "Créateur";
$lang['admin vouchers activator']         = "Activateur";
$lang['admin vouchers voucher']           = "Voucher";
$lang['admin vouchers detail']            = "Détail voucher";
$lang['admin vouchers date']              = "Activation date"; 

$lang['admin categories'] = "Catégories";
$lang['admin categories questions'] = "Catégories Questions";
$lang['admin services']   = "Services";  
$lang['admin projects jobs']   = "Projets/Emplois";
$lang['admin fees commission']   = "Honoraires / Commission";    
