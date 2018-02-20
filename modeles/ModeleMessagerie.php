<?php
/**
* @file ModeleMessagerie.php
* @author Oudayan Dutta, Zoraida Ortiz, Denise Ratté, Jorge Subirats 
* @version 1.0
* @date 20 janvier 2018
* @brief Définit la classe ModeleMessagerie
*
* @details Cette classe définit les attributs nécessaire pour tout ce qui touche les messages entre membres.
* 
*/
	
	class ModeleMessagerie extends BaseDAO
	{
		/**
		* @brief Pour aller chercher le nom d'une table
		* @details Permet d'aller chercher le nom d'une table.
		* @param point1 
		* @param point2 
		* @return string messagerie.
		*/
		public function checherNomTable()
		{
			return "al_messagerie";
		}
		
        
        
        /**
		* @brief Pour aller chercher un message
		* @details Permet d'aller chercher les renseignements sur un message reçu en utilisant le courriel de l'utilisateur.
		* @param point1 courriel
		* @param point2 resultat
		* @return array unMessage.
		*/
		public function obtenir_par_courriel($courriel)
		{
			$resultat = $this->lire($courriel);//reference BaseDAO
			$resultat->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Messages'); 
			$unMessage = $resultat->fetch();
			return $unMessage;
		}
		
        
        
        
        /**
		* @brief Obtenir tous les messages pour un usager 
		* @details Permet d'obtenir les informations de tous les messages d'un ussager.
		* @param point1 resultat
		* @return array desMessages.
		*/																	
		public function obtenir_tous()
		{
			$resultat = $this->lireTous();  //reference BaseDAO
			$desMessages = $resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Messages");
			return $desMessages;
		}
		
        
        
        /**
		* @brief Pour aller chercher un usager 
		* @details Permet d'aller chercher les renseignements sur un usager utilisant le nom.
		* @param point1 nom
		* @return array unUsager.
		*/
		public function obtenir_par_nom($nom)
		{
			$resultat = $this->lire($nom);
			$resultat->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Messages'); 
			$unUsager = $resultat->fetch();
			return $unUsager;
		}
		
        
		/**
		* @brief Sauvegarde un message
		* @details Prend les informations entrées et les sauvegarde dans la base de données.
		* @param point1 unUsager
		* @param point2 userName
		* @param point3 nom
		* @param point4 prenom
		* @param point5 isAdmin
		* @param point6 isBanned
		* @param point7 courriel
		* @return aucun.
		*/
		public function sauvegarde(Usagers $unUsager)
		{

		/*	if($unUsager->courriel && $this->lire($unUsager->courriel)->fetch())
			{
				$query = "UPDATE " . $this->getTableName() . " SET nom=?, prenom=?, isAdmin=?, isBanned=? WHERE courriel = ?";
				$donnees = array($unUsager->nom,$unUsager->prenom,$unUsager->isAdmin,$unUsager->isBanned,$unUsager->courriel) ;
				$resultat = $this->requete($query, $donnees);
			
			}
			
			
			
			else
			{ */
				//insert
				var_dump($unUsager);
				$query = "INSERT INTO " . $this->checherNomTable() . "(courriel, nom, prenom, cellulaire, mot_de_passe, id_contact, id_type_usager, id_paiement) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
				$donnees = array($unUsager->lireCourriel(), $unUsager->lireNom(),	$unUsager->lirepreNom(),
				$unUsager->lireCellulaire(),$unUsager->lireMotDePasse(),
				$unUsager->lireContact(),$unUsager->lireTypeUsager(),	$unUsager->lireTypePaiement()
				);

				return $this->requete($query, $donnees);
			/*}*/
		}
		
	}
?>