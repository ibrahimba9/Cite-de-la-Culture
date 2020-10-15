/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;
import java.sql.Timestamp;
import java.util.Date;
//import java.text.DateFormat;
//import java.text.SimpleDateFormat;

/**
 *
 * @author asus
 */
public class Utilisateur {
    int ID;
    String NOM;
    String PRENOM;
    int NUM_TEL;
    String EMAIL;
    String ADRESSE;
    String ROLE;
    //DateFormat dateFormat = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
    Date DATE_AJ;
    String LOGIN;
    String PASSWORD;
    String SIGNATURE;
    Timestamp LAST_TIME_LOGGED;
    Timestamp LOGIN_TIME;
    public Utilisateur()
    {
        this.ID=0;
        this.NOM="";
        this.PRENOM="";
        this.NUM_TEL=0;
        this.EMAIL="";
        this.ADRESSE="";
        this.ROLE="";
        this.DATE_AJ= new Date();
    }

    public Utilisateur(String NOM, String PRENOM, int NUM_TEL, String EMAIL, String ADRESSE, String ROLE, String LOGIN, String PASSWORD) {
        this.NOM = NOM;
        this.PRENOM = PRENOM;
        this.NUM_TEL = NUM_TEL;
        this.EMAIL = EMAIL;
        this.ADRESSE = ADRESSE;
        this.ROLE = ROLE;
        this.LOGIN = LOGIN;
        this.PASSWORD = PASSWORD;
    }
    
    public Utilisateur(String NOM, String PRENOM, int NUM_TEL, String EMAIL, String ADRESSE, String ROLE, String LOGIN, String PASSWORD, Timestamp last_time, Timestamp LOGIN_TIME) {
        this.NOM = NOM;
        this.PRENOM = PRENOM;
        this.NUM_TEL = NUM_TEL;
        this.EMAIL = EMAIL;
        this.ADRESSE = ADRESSE;
        this.ROLE = ROLE;
        this.LOGIN = LOGIN;
        this.PASSWORD = PASSWORD;
        this.LAST_TIME_LOGGED = last_time;
        this.LOGIN_TIME = LOGIN_TIME;
    }

    //setters
    public void setNOM(String NOM)
    {this.NOM=NOM;}
    public void setPRENOM(String PRENOM)
    {this.PRENOM=PRENOM;}
    public void setNUM_TEL(int NUM_TEL)
    {this.NUM_TEL=NUM_TEL;}
    public void setEMAIL(String EMAIL)
    {this.EMAIL=EMAIL;}
    public void setADRESSE(String ADRESSE)
    {this.ADRESSE=ADRESSE;}
    public void setROLE(String ROLE)
    {this.ROLE=ROLE;}
    public void setLOGIN(String LOGIN) {
        this.LOGIN = LOGIN;
    }
    public void setPASSWORD(String PASSWORD) {
        this.PASSWORD = PASSWORD;
    }
    public void setSIGNATURE(String SIGNATURE) {
        this.SIGNATURE = SIGNATURE;
    }

    public void setID(int ID) {
        this.ID = ID;
    }

    public void setDATE_AJ(Date DATE_AJ) {
        this.DATE_AJ = DATE_AJ;
    }

    public void setLAST_TIME_LOGGED(Timestamp LAST_TIME_LOGGED) {
        this.LAST_TIME_LOGGED = LAST_TIME_LOGGED;
    }

    public void setLOGIN_TIME(Timestamp LOGIN_TIME) {
        this.LOGIN_TIME = LOGIN_TIME;
    }
    
    
    
    
    
    //getters
    public int getID()
    {return this.ID;}
    public String getNOM()
    {return this.NOM;}
    public String getPRENOM()
    {return this.PRENOM;}
    public int getNUM_TEL()
    {return this.NUM_TEL;}
    public String getEMAIL()
    {return this.EMAIL;}
    public String getADRESSE()
    {return this.ADRESSE;}
    public String getROLE()
    {return this.ROLE;}
    public Date getDATE_AJ()
    {return this.DATE_AJ;}
    public String getLOGIN() {
        return LOGIN;
    }
    public String getPASSWORD() {
        return PASSWORD;
    }
    public String getSIGNATURE() {
        return SIGNATURE;
    }

    public Timestamp getLAST_TIME_LOGGED() {
        return LAST_TIME_LOGGED;
    }

    public Timestamp getLOGIN_TIME() {
        return LOGIN_TIME;
    }
    
    
    
    @Override public String toString()
    {
        return "Id: "+this.ID+" Nom: "+this.NOM+" PRENOM: "+this.PRENOM+" NUM_TEL: "
        +this.NUM_TEL+" EMAIL: "+this.EMAIL+" ADRESSE: "+this.ADRESSE+" ROLE: "
        +this.ROLE+" Date: "+this.DATE_AJ+" Login: "+this.LOGIN+" Mot de Passe: "+this.PASSWORD+" Signature:"+this.SIGNATURE;
    }
}
