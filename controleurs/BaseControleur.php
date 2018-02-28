<?php
/**
 * @file    BaseControleur.php
 * @author  Oudayan Dutta, Zoraida Ortiz, Denise Ratté, Jorge Subirats 
 * @version 1.0
 * @date    31 janvier 2018
 * @brief   Controlleur parent 
 * @details Méthodes :  - index() (abstracte) pour les "cases" dans les controlleurs
                        - afficheVues() pour afficher les vues (partielles)
                        - lireDAO() pour la connection à la base de donnée & création d'objets modèles
 */

	abstract class BaseControleur {

		/**
         * @brief   Méthode qui sera appelée par les controleurs
         * @details Méthode abstraite pour traiter les "cases" des contrôleurs
         * @param   [array] $params La chaîne de requête URL ("query string") captée par le Routeur.php
         * @return  La méthode afficherVues()
         */
		public abstract function index(array $params);

 		/**
		* @brief  Permet d'afficher une ou plusieurs vues partielles
		* @detail Affiche une vue is $nomVue est une chaine de charactère ou affiche plusieurs vues si $nomVue est un tableau contentant le nom des vues.
                  Affiche toujours la/les vue(s) entre les vues partielles entete.php et piedPage.php
		* @param  [string/array]  $nomVue     Nom de la vue ou tableau contentant les noms des vues à afficher   
		* @param  [array]         $donnees    Données passée à la/aux vues
		* @param  [boolean]       $partielle  Vrai = vue(s) seulement / Faux = entête, vue(s) & pied de page
		* @return message d'erreur ou une vue
		*/
        protected function afficherVues($nomVue, $donnees = null, $complete = true) {
            // Inclure le header pour chaque vue
            if ($complete) {
                include(RACINE . "vues/entete.php");
            }
            // Si le nom de vue est une chaîne de charactère (seulement une vue partielle)
            if (is_string($nomVue)) {
                $cheminVue = RACINE . "vues/" . $nomVue . ".php";
                    if (file_exists($cheminVue)){
                    include($cheminVue);
                }
            }
            // Si le nom de vue est contenu dans une tableau (plusieurs vues partielles)
            else if (is_array($nomVue)) {
                foreach ($nomVue as $vue) {
                    $cheminVue = RACINE . "vues/" . $vue . ".php";
                    if (file_exists($cheminVue)){
                        include($cheminVue);
                    }
                    else {
                        trigger_error("Erreur 404! La vue $cheminVue n'existe pas.");
                    }
                }
            }
            // Inclure le footer pour chaque vue
            if ($complete) {
                include(RACINE . "vues/piedPage.php");
            }
        }        
        
		/**
         * @brief       Méthode pour créer les modèles de chaque classe et connexion à la base de données
         * @details     Vérifie si le modèle existe et fait la connexion à la base de données via la méthode chercherBD() de la classe ManufactureBD.php
                        Créé l'object modèle de la classe passée en paramètre, contenant toutes le opérations "CRUD" pour cette classe.
         * @param       [string]    $nomModele      Le nom du modèle à créer
         * @return      [object]    $objetModele    L'object modèle de la classe passée en paramètre
         */
		protected function lireDAO($nomModele) {
			$classe = "Modele" . $nomModele;

			if (class_exists($classe)) {
				// Connexion à la base de données
				$BD = ManufactureBD::chercherBD(TYPEBD, NOMBD, HEBERGEUR, NOMUSAGER, MOTDEPASSE);

				// Création d'une instance de la classe Modele $classe
				$objetModele = new $classe($BD);
				if ($objetModele instanceof BaseDAO) {
					return $objetModele;
				}
				else {
					trigger_error("Le modèle n'est pas conforme.");
				}
			}
		}

	}

?>
