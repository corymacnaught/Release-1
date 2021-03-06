<?php
	include(../ControleurDAO.php);
	include(../PersonneVO.php);
	
	protected $dao = new ControleurDAO();
	protected $utilisateur = new PersonneVO();
	
	public function Synchroniser(PersonneVO personne){
		//si dao.getPersonne n'est pas nulle
		if($dao.getPersonne()!=null){
			//si la personne existe insere son info
			if(personne.getId() == $dao.getPersonne().getId()){
				$utilisateur.setPrenom(personne.getPrenom());
				$utilisateur.setNom(personne.getNom());
				$utilisateur.setID(personne.getId());
				$utilisateur.setPw(personne.getPw());
				$utilisateur.setDateNaissance(personne.getDateNaissance());
				$utilisateur.setDatePriseTest(personne.getDatePriseTest());
				$utilisateur.setPressionSys(personne.getPressionSys());
				$utilisateur.setPressionDiaSys(personne.getPressionDiaSys());
				$utilisateur.setPoulCardiaque(personne.getPoulCardiaque());
				$dao.Synchroniser($utilisateur);
			}
			else{
				$utilisateur.setPrenom(personne.getPrenom());
				$utilisateur.setNom(personne.getNom());
				$utilisateur.setID(personne.getId());
				$utilisateur.setPw(personne.getPw());
				$utilisateur.setDateNaissance(personne.getDateNaissance());
				$utilisateur.setDatePriseTest(personne.getDatePriseTest());
				$utilisateur.setPressionSys(personne.getPressionSys());
				$utilisateur.setPressionDiaSys(personne.getPressionDiaSys());
				$utilisateur.setPoulCardiaque(personne.getPoulCardiaque());
				$dao.CreerPersonne($utilisateur);
			}
		}
	}
?>