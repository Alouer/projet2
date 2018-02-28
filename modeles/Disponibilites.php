<?php
/**
 * @file    Disponibilites.php
 * @author  Oudayan Dutta, Denise Ratté, Zoraida Ortiz, J Subirats 
 * @version 1.0
 * @date    20 février 2018
 * @brief   Définit la classe Disponibilites
 * @details Cette classe définit les attributs privés des disponibilités avec toutes les méthodes publiques "getters" et "setters" pour écrire et lire les attributs
 */

	class Disponibilites {

        // Attributs
		private $id_disponibilite;
		private id_logement;
		private $date_debut;
		private $date_fin;
		private $expire;

        // Constructeur
		public function __construct($id_disponibilite = "", $id_logement = "", $date_debut = "", $date_fin = "", $expire = "") {
			$this->ecrireIdDisponibilite($id_disponibilite);
			$this->ecrireIdLogement(id_logement);
			$this->ecrireDateDebut($date_debut);
			$this->ecrireDateFin($date_fin);
			$this->ecrireExpire($expire);
		}
		
        // "SETTERS"
        // Écrire id_disponibilite
		public function ecrireIdDisponibilites($id_disponibilite) {
            if (is_numeric($id_disponibilite) && trim($id_disponibilite) != "") {
                $this->id_disponibilite = $id_disponibilite;
            }
        }
		
        // Écrire id_logement
		public function ecrireIdLogement($id_logement) {
            if (is_numeric($id_logement) && trim($id_logement) != "") {
                $this->id_logement = $id_logement;
            }
        }
		
        // Écrire date_debut
		public function ecrireDateDebut($date_debut) {
            if (is_string($date_debut) && trim($date_debut) != "") {
                $this->date_debut = $date_debut;
            }
        }
        // Écrire date_fin
		public function ecrireDateFin($date_fin) {
            if (is_string($date_fin) && trim($date_fin) != "") {
                $this->date_fin = $date_fin;
            }			
		}
        // Écrire expire
		public function ecrireExpire($expire) {
            if (is_bool($expire) && trim($expire) != "") {
                $this->expire = $expire;
            }			
		}
		
		// "GETTERS"
        // Lire id_disponibilite
		public function lireIdDisponibilites() {
            return $this->id_disponibilite;
        }
        // Lire id_logement
		public function lireIdLogement() {
            return $this->id_logement;
		}
        // Lire date_debut
		public function lireDateDebut() {
            return $this->date_debut;
		}
        // Lire date_fin
		public function lireDateFin() {
            return $this->date_fin;
		}
        // Lire expire
		public function lireExpire() {
            return $this->expire;
		}

	}

?>