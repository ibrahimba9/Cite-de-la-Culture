/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author Ibrahim
 */
public class Bannissement {
    private int ID_Abonne;
    private int ID_Sujet;
    private String Titre;
    private String Login;
    private String Nom;
    private String Prenom;
    private String Date;

    public Bannissement() {
    }

    public Bannissement(int ID_Abonne, int ID_Sujet, String Titre, String Login, String Date) {
        this.ID_Abonne = ID_Abonne;
        this.ID_Sujet = ID_Sujet;
        this.Titre = Titre;
        this.Login = Login;
        this.Date = Date;
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

    public String getTitre() {
        return Titre;
    }

    public void setTitre(String Titre) {
        this.Titre = Titre;
    }

    public String getLogin() {
        return Login;
    }

    public void setLogin(String Login) {
        this.Login = Login;
    }

    public String getNom() {
        return Nom;
    }

    public void setNom(String Nom) {
        this.Nom = Nom;
    }

    public String getPrenom() {
        return Prenom;
    }

    public void setPrenom(String Prenom) {
        this.Prenom = Prenom;
    }

    public String getDate() {
        return Date;
    }

    public void setDate(String Date) {
        this.Date = Date;
    }
    
    
    
}
