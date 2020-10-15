/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dbconnexion;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.*;

/**
 *
 * @author Ibrahim
 */
public class ConnexionBD {
    private String url="jdbc:mysql://localhost:3306/citedeculture";
    private String login="db_name";
    private String mdp="db_password";
    Connection cnx;
    static ConnexionBD instance;
    
    private ConnexionBD(){
        try{
            cnx = DriverManager.getConnection(url,login,mdp);
            System.out.println("Connexion Etablie!");
        }
        catch (SQLException ex){
            System.out.println("Error:\n"+ex.getMessage());
        }
    }
    
    public static ConnexionBD getInstance(){
        if(instance == null){
            instance = new ConnexionBD();
        }
        return instance;
    }
    
    public Connection getConnection(){
        return cnx;
    }
    
}
