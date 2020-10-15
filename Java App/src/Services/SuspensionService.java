/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import dbconnexion.ConnexionBD;
import Entities.Utilisateur;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;
/**
 *
 * @author Ibrahim
 */
public class SuspensionService {
    Connection cnx = ConnexionBD.getInstance().getConnection();
    
    public void SuspendreAbonne(int id_User, int id_Sujet,int duree){
        try{
            String requete = "insert into suspension(ID_Sujet,ID_Abonne,Periode) values(?,?,?)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Sujet );
            st.setInt(2, id_User);
            st.setInt(3, duree);
            st.executeUpdate();
            System.out.println("Abonné Suspendu pendant "+duree+" jours!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void RtirerSuspensionAbonne(int id_User, int id_Sujet){
        try{
            String requete = "delete from suspension where ID_Abonne=? and ID_Sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_User );
            st.setInt(2, id_Sujet);
            st.executeUpdate();
            System.out.println("Suspension annulée!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public boolean VérifierSuspensionAbonne(int id_User, int id_Sujet){
        int x=0;
        try{
            String requete = "select from suspension where ID_Abonne=? and ID_Sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_User );
            st.setInt(2, id_Sujet);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                x++;
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        if(x != 0)
            return true;
        return false;
    }
    
    
}
