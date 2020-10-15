/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import GUI_Back.ForumFXMLController;
import GUI_Front.DiscussionFXMLController;
import GUI_Front.ForumUserFXMLController;
import Services.BannissementService;
import Services.InvitationService;
import Services.SujetService;
import Services.UtilisateurServices;
import com.mysql.jdbc.interceptors.SessionAssociationInterceptor;
import java.io.IOException;
import javafx.collections.ObservableList;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;

/**
 *
 * @author Ibrahim
 */
public class Sujet {
    
    private int ID_Sujet;
    private String Theme;
    private String Titre;
    private String Statut;
    private String Date_Creation;
    private int Auteur;
    private Button BoutonModif;
    private Button BoutonSuppr;
    private Button Rejoindre;
    private Button RejoindreBack;
    private String Etat;
    
    UserSession session = UserSession.instance;

    public Sujet() {
    }

    public Sujet(int ID_Sujet, String Theme, String Titre, String Statut, String Date_Creation, int Auteur, String Etat) {
        this.ID_Sujet = ID_Sujet;
        this.Theme = Theme;
        this.Titre = Titre;
        this.Statut = Statut;
        this.Date_Creation = Date_Creation;
        this.Auteur = Auteur;
        this.Etat = Etat;
    }
    
    

    public Sujet(int ID_Sujet, String Theme, String Titre, String Statut, String Date_Creation, int Auteur, Button BoutonModif, Button BoutonSuppr, Button Rejoindre, Button RejoindreBack) {
        this.ID_Sujet = ID_Sujet;
        this.Theme = Theme;
        this.Titre = Titre;
        this.Statut = Statut;
        this.Date_Creation = Date_Creation;
        this.Auteur = Auteur;
        this.BoutonModif = BoutonModif;
        this.BoutonSuppr = BoutonSuppr;
        this.Rejoindre = Rejoindre;
        this.RejoindreBack = RejoindreBack;
    }
    
    

    public Sujet(int ID_Sujet, String Theme,String Titre, String Statut, String Date_Creation, int Auteur) {
        this.ID_Sujet = ID_Sujet;
        this.Theme = Theme;
        this.Titre = Titre;
        this.Statut = Statut;
        this.Date_Creation = Date_Creation;
        this.Auteur = Auteur;
        this.BoutonModif = new Button("Modifier");
        this.BoutonSuppr = new Button("Supprimer");
        this.Rejoindre = new Button("Rejoindre");
        this.RejoindreBack = new Button("Consulter");
        
        this.Rejoindre.setOnAction(e -> {
            
            ObservableList<Sujet> sujets = ForumUserFXMLController.tableAux.getSelectionModel().getSelectedItems();
            
           for(Sujet s : sujets){
               if(s.getRejoindre() == this.Rejoindre){
                   try{
                       BannissementService bs = new BannissementService();
                       if(bs.VerifierBannissementAbonne(session.getId(),s.getID_Sujet())){
                                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                                alert.setTitle("Erreur!");
                                alert.setHeaderText(null);
                                alert.setContentText("Vous êtes banni de ce Sujet!");

                                alert.showAndWait();
                            }
                       else if(s.getStatut().equals("Private")){
                            InvitationService is = new InvitationService();
                            UtilisateurServices us = new UtilisateurServices();
                            
                            
                            if(is.avoirAcces(s.getID_Sujet(), session.getId()) ){
                                FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("../GUI_Front/DiscussionFXML.fxml"));     
                                Parent root = (Parent)fxmlLoader.load(); 
                                DiscussionFXMLController dController = fxmlLoader.<DiscussionFXMLController>getController();
                                dController.setSujetId(s.getID_Sujet());

                                Scene scene = new Scene(root); 
                                Stage stage = (Stage)((Node) e.getSource()).getScene().getWindow();

                                stage.setScene(scene);  
                                stage.show(); 
                            }
                            else{
                                Alert alert = new Alert(AlertType.INFORMATION);
                                alert.setTitle("Sujet Privé");
                                alert.setHeaderText(null);
                                alert.setContentText("Vous n'avez pas le droit d'accéder à cette Discussion!");

                                alert.showAndWait();
                            }
                            
                        }
                        else{
                                FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("../GUI_Front/DiscussionFXML.fxml"));     
                                Parent root = (Parent)fxmlLoader.load(); 
                                DiscussionFXMLController dController = fxmlLoader.<DiscussionFXMLController>getController();
                                dController.setSujetId(s.getID_Sujet());

                                Scene scene = new Scene(root); 
                                Stage stage = (Stage)((Node) e.getSource()).getScene().getWindow();

                                stage.setScene(scene);  
                                stage.show(); 
                        }
                        
                        
                   }
                    catch(IOException ex){
                        System.out.println(ex.getMessage());
                    }
               }
           } 
        });
        
        this.RejoindreBack.setOnAction(e -> {
            
            ObservableList<Sujet> sujets = ForumFXMLController.viewSujetsAux.getSelectionModel().getSelectedItems();
            
           for(Sujet s : sujets){
               if(s.getRejoindreBack() == this.RejoindreBack){
                   try{
                       System.out.println("quepasstil");
                        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("../GUI_Front/DiscussionFXML.fxml"));     
                        Parent root = (Parent)fxmlLoader.load(); 
                        DiscussionFXMLController dController = fxmlLoader.<DiscussionFXMLController>getController();
                        dController.setSujetId(s.getID_Sujet());

                        Scene scene = new Scene(root); 
                        Stage stage = (Stage)((Node) e.getSource()).getScene().getWindow();

                        stage.setScene(scene);  
                        stage.show();
                   }
                    catch(IOException ex){
                        System.out.println(ex.getMessage());
                    }
               }
           } 
        });
        
        
    }

    
    
    public Sujet(String Theme, String Titre, int Auteur) {
        this.Theme = Theme;
        this.Titre = Titre;
        this.Auteur = Auteur;
    }

    
    
    public Sujet(String Theme,String Titre, String Statut, int Auteur) {
        this.Theme = Theme;
        this.Titre = Titre;
        this.Statut = Statut;
        this.Auteur = Auteur;
    }
    
    

    public int getID_Sujet() {
        return ID_Sujet;
    }

    public void setID_Sujet(int ID_Sujet) {
        this.ID_Sujet = ID_Sujet;
    }

    public String getTheme() {
        return Theme;
    }

    public void setTheme(String Theme) {
        this.Theme = Theme;
    }

    public String getTitre() {
        return Titre;
    }

    public void setTitre(String Titre) {
        this.Titre = Titre;
    }

    public String getStatut() {
        return Statut;
    }

    public void setStatut(String Statut) {
        this.Statut = Statut;
    }

    public String getDate_Creation() {
        return Date_Creation;
    }

    public void setDate_Creation(String Date_Creation) {
        this.Date_Creation = Date_Creation;
    }

    public int getAuteur() {
        return Auteur;
    }

    public void setAuteur(int Auteur) {
        this.Auteur = Auteur;
    }

    public Button getBoutonModif() {
        return BoutonModif;
    }

    public void setBoutonModif(Button BoutonModif) {
        this.BoutonModif = BoutonModif;
    }

    public Button getBoutonSuppr() {
        return BoutonSuppr;
    }

    public void setBoutonSuppr(Button BoutonSuppr) {
        this.BoutonSuppr = BoutonSuppr;
    }

    public Button getRejoindre() {
        return Rejoindre;
    }

    public void setRejoindre(Button Rejoindre) {
        this.Rejoindre = Rejoindre;
    }

    public String getEtat() {
        return Etat;
    }

    public void setEtat(String Etat) {
        this.Etat = Etat;
    }

    public Button getRejoindreBack() {
        return RejoindreBack;
    }

    public void setRejoindreBack(Button RejoindreBack) {
        this.RejoindreBack = RejoindreBack;
    }
    
    
    

    @Override
    public String toString() {
        return "Sujet{" + "ID_Sujet=" + ID_Sujet + ", Theme=" + Theme +", Titre=" + Titre + ", Statut=" + Statut + ", Date_Creation=" + Date_Creation +", Auteur=" + Auteur + '}';
    }
    
    
}
