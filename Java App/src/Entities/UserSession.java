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
public final class UserSession {
    public static UserSession instance;
    private String login;
    private int id;
    private String Role;
    private Timestamp Last_Time_Logged;
    private Timestamp Login_Time;
    
    private UserSession(String login, int id, String role, Timestamp Last_Time_Logged, Timestamp Login_Time){
        this.login = login;
        this.id = id;
        this.Role = role;
        this.Last_Time_Logged = Last_Time_Logged;
        this.Login_Time = Login_Time;
    }
    
    public static UserSession getInstance(String login, int id, String role,Timestamp Last_Time_Logged, Timestamp Login_Time){
        if(instance == null){
            instance = new UserSession(login, id,role, Last_Time_Logged, Login_Time);
        }
        return instance;
    }
    

    public void setLogin(String login) {
        this.login = login;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getLogin() {
        return login;
    }

    public int getId() {
        return id;
    }

    public String getRole() {
        return Role;
    }

    public void setRole(String Role) {
        this.Role = Role;
    }

    public Timestamp getLast_Time_Logged() {
        return Last_Time_Logged;
    }

    public void setLast_Time_Logged(Timestamp Last_Time_Logged) {
        this.Last_Time_Logged = Last_Time_Logged;
    }

    public Timestamp getLogin_Time() {
        return Login_Time;
    }

    public void setLogin_Time(Timestamp Login_Time) {
        this.Login_Time = Login_Time;
    }
    
    
    
    public void CleanUserSession(){
        login = "";
        id=0;
        Last_Time_Logged = null;
        Login_Time = null;
        instance = null;
    }
    
    public String toString(){
        return "Login: "+this.login+"\nIdentifiant: "+this.id;
    }
}
