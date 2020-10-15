/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.sql.Timestamp;
import javafx.scene.control.Button;


/**
 *
 * @author Ibrahim
 */
public class Message {
    private int ID_Message;
    private int ID_Abonne;
    private int ID_Sujet;
    private String Texte;
    private String Date_Publication;
    private String Auteur;
    private String Titre;
    private Button Supprimer;
    private Button Abandonner;
    public Message(){
        
    }

    public Message(int ID_Message, int ID_Abonne, int ID_Sujet, String Texte, String Date_Publication) {
        this.ID_Message = ID_Message;
        this.ID_Abonne = ID_Abonne;
        this.ID_Sujet = ID_Sujet;
        this.Texte = Texte;
        this.Date_Publication = Date_Publication;
    }
    
    public Message(int ID_Message, int ID_Abonne, int ID_Sujet, String Texte, String Date_Publication,String Auteur,String Titre) {
        this.ID_Message = ID_Message;
        this.ID_Abonne = ID_Abonne;
        this.ID_Sujet = ID_Sujet;
        this.Texte = Texte;
        this.Date_Publication = Date_Publication;
        this.Titre = Titre;
        this.Auteur = Auteur;
        this.Supprimer = new Button("Supprimer");
        this.Abandonner = new Button("Abandonner");
    }
    
    public Message(int ID_Abonne, int ID_Sujet, String Texte){
        this.ID_Abonne = ID_Abonne;
        this.ID_Sujet = ID_Sujet;
        this.Texte = Texte;
    }

    public int getID_Message() {
        return ID_Message;
    }

    public void setID_Message(int ID_Message) {
        this.ID_Message = ID_Message;
    }

    public int getID_Abonne() {
        return ID_Abonne;
    }

    public void setID_Abonne(int ID_Abonne) {
        this.ID_Abonne = ID_Abonne;
    }

    public int getID_Sujet() {
        return ID_Sujet;
    }

    public void setID_Sujet(int ID_Sujet) {
        this.ID_Sujet = ID_Sujet;
    }

    public String getTexte() {
        return Texte;
    }

    public void setTexte(String Texte) {
        this.Texte = Texte;
    }

    public String getDate_Publication() {
        return Date_Publication;
    }

    public void setDate_Publication(String Date_Publication) {
        this.Date_Publication = Date_Publication;
    }
    
    public String toString(){
        return "Message:\nDate: "+this.Date_Publication+":\nSujet: "+this.ID_Sujet+"\nAbonne: "+this.ID_Abonne+"\nTexte:\n"+this.Texte;
    }

    public String getAuteur() {
        return Auteur;
    }

    public void setAuteur(String Auteur) {
        this.Auteur = Auteur;
    }

    public String getTitre() {
        return Titre;
    }

    public void setTitre(String Titre) {
        this.Titre = Titre;
    }

    public Button getSupprimer() {
        return Supprimer;
    }

    public void setSupprimer(Button Supprimer) {
        this.Supprimer = Supprimer;
    }

    public Button getAbandonner() {
        return Abandonner;
    }

    public void setAbandonner(Button Abandonner) {
        this.Abandonner = Abandonner;
    }

    
}
