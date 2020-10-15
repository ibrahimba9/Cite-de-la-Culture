/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cite_de_la_culture;
import Entities.Sujet;
import Entities.Message;
import Entities.Utilisateur;
import Services.UtilisateurServices;
import Services.AppreciationsMessagesService;
import Services.BannissementService;
import Services.SujetService;
import Services.MessageService;
import Services.SuiviSujetsService;
import Services.SuspensionService;
import dbconnexion.ConnexionBD;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Ibrahim
 */
public class Cite_de_la_culture {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        ConnexionBD cnx = ConnexionBD.getInstance();
        
        Utilisateur u = new Utilisateur("dhif", "salem", 55447711, "salem@live.fr", "menzah 8", "Abonné", "salem123", "123456789");
        UtilisateurServices us = new UtilisateurServices();
        
        SujetService ss = new SujetService();
        
        MessageService mm = new MessageService();
        
        
        for(int i=0;i<20;i++){
            /*Sujet s = new Sujet("Cinéma", "Meilleurs films Tunisien 2018 "+i, 1);
            ss.AjouterSujet(s);
            Message m = new Message(1, 1, "texte message "+i);
            mm.PublierMessage(m);*/
        }
    }
    
}
