/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import dbconnexion.ConnexionBD;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

/**
 *
 * @author Ibrahim
 */
public class SignalSujetService {
    Connection cnx = ConnexionBD.getInstance().getConnection();
    
    public void signalerSujet(int idSuj, int idAbonne){
        try{
            String requete ="insert into signaux_sujet (ID_Sujet,ID_Abonne) values(?,?)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, idSuj);
            st.setInt(2, idAbonne);
            st.executeUpdate();
            System.out.println("Signal Ajouté!");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
    public void annulerSignalSujet(int idSuj, int idAbonne){
        try{
            String requete ="delete from signaux_sujet where ID_Sujet=? and ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, idSuj);
            st.setInt(2, idAbonne);
            st.executeUpdate();
            System.out.println("Signal Supprimé!");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
    public boolean chercherSignal(int idSuj, int idAbonne){
        int x=0;
        try{
            String requete ="select * from signaux_sujet where ID_Sujet=? and ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, idSuj);
            st.setInt(2, idAbonne);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                x++;
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        if(x != 0){
            return true;
        }
        return false;
    }
}
