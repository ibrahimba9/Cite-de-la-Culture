/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;
import dbconnexion.ConnexionBD;
import Entities.Sujet;

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
public class SuiviSujetsService {
    Connection cnx = ConnexionBD.getInstance().getConnection();
    
    public void SuivreSujet(int id_User, int id_Sujet){
        try{
            String requete = "insert into suivi_sujet(ID_Sujet,ID_Abonne) values(?,?)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Sujet );
            st.setInt(2, id_User);
            st.executeUpdate();
            System.out.println("Sujet Suivi!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void AbandonnerSujet(int id_User, int id_Sujet){
        try{
            String requete = "delete from suivi_sujet where ID_Sujet=? and ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Sujet );
            st.setInt(2, id_User);
            st.executeUpdate();
            System.out.println("Sujet Abandonné!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public int NombreSuivi(int id_Sujet){
        int nbr=0;
        try{
            String requete = "select count(*) from suivi_sujet where ID_Sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Sujet );
            ResultSet rs = st.executeQuery();
            while(rs.next()){
               nbr=rs.getInt(1);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return nbr;
    }
    
    public boolean sujetSuivi(int id_Sujet, int id_abonne){
        int x=0;
        try{
            String requete = "select * from suivi_sujet where ID_Sujet=? and ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Sujet );
            st.setInt(2,id_abonne );
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
