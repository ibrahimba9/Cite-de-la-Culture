/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.sql.Timestamp;

/**
 *
 * @author Ibrahim
 */
public class Notification {
    UserSession session = UserSession.instance;
    //Reaactions
    private int ID_Message;
    private String Reaction;
    private String Login;
    private Timestamp Date;
    private String Auteur;
    private String Titre;
    
    //Ajout Messages
    
    private String Texte;

    public Notification() {
    }

    public Notification(int ID_Message, String Reaction, String Login, Timestamp date, String auteur, String Titre ) {
        this.ID_Message = ID_Message;
        this.Reaction = Reaction;
        this.Login = Login;
        this.Date = date;
        this.Auteur = auteur;
        this.Titre = Titre;
        if(Reaction.equals("like")){
            if(Auteur.equals(session.getLogin())){
                this.Texte = Login+" aime votre publication.";
            }
            else{
                this.Texte = Login+" aime la publication de "+Auteur+".";
            }
            
        }
        else if(Reaction.equals("dislike")){
            if(Auteur.equals(session.getLogin())){
                this.Texte = Login+" n'aime pas votre publication.";
            }
            else{
                this.Texte = Login+" n'aime pas la publication de "+Auteur+".";
            }
        }
        else if(Reaction.equals("ajout")){
            this.Texte = Auteur+" a ajouté un message.";
        }
        else if(Reaction.equals("ban")){
            this.Texte = Auteur+" a été banni de la Discussion.";
        }
    }
    

    public int getID_Message() {
        return ID_Message;
    }

    public void setID_Message(int ID_Message) {
        this.ID_Message = ID_Message;
    }

    public String getReaction() {
        return Reaction;
    }

    public void setReaction(String Reaction) {
        this.Reaction = Reaction;
    }

    public String getLogin() {
        return Login;
    }

    public void setLogin(String Login) {
        this.Login = Login;
    }

    public Timestamp getDate() {
        return Date;
    }

    public void setDate(Timestamp Date) {
        this.Date = Date;
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

    public String getTexte() {
        return Texte;
    }

    public void setTexte(String Texte) {
        this.Texte = Texte;
    }
    
    
}
