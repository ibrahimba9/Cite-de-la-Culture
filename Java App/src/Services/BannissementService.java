/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Bannissement;
import Entities.Notification;
import dbconnexion.ConnexionBD;
import Entities.Utilisateur;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Timestamp;
import java.util.ArrayList;
import static java.util.Collections.list;
import java.util.List;
/**
 *
 * @author Ibrahim
 */
public class BannissementService {
    Connection cnx = ConnexionBD.getInstance().getConnection();
    
    public void BanirAbonne(int id_User, int id_Sujet){
        try{
            String requete = "insert into bannissement(ID_Sujet,ID_Abonne) values(?,?)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Sujet );
            st.setInt(2, id_User);
            st.executeUpdate();
            System.out.println("Abonné banni!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void AnnulerBannissementAbonne(int id_User, int id_Sujet){
        try{
            String requete = "delete from bannissement where ID_Abonne=? and ID_Sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_User );
            st.setInt(2, id_Sujet);
            st.executeUpdate();
            System.out.println("Bannissement annulée!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public boolean VerifierBannissementAbonne(int id_User, int id_Sujet){
        int x=0;
        try{
            String requete = "select * from bannissement where ID_Abonne=? and ID_Sujet=?";
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
        else
            return false;
    }
    
    public List<Bannissement> listerUtilisateursBannis(){
        List<Bannissement> listeU = new ArrayList<>();
        try{
            /*String requete = "SELECT u.ID id, u.NOM nom, u.PRENOM prenom, u.LOGIN login, b.ID_Abonne, b.ID_Sujet ids,b.Date_Bannissement date, s.ID_Sujet, s.Titre titre FROM "
                    + "utilisateur u, bannissement b, sujets s "
                    + "where u.ID=b.ID_Abonne and b.ID_Sujet=s.ID_Sujet";*/
            String requete = "SELECT u.id id, u.username login, b.ID_Abonne, b.ID_Sujet ids,b.Date_Bannissement date, s.ID_Sujet, s.Titre titre FROM "
                    + "fos_user u, bannissement b, sujets s "
                    + "where u.id=b.ID_Abonne and b.ID_Sujet=s.ID_Sujet";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while(rs.next()){
                Bannissement b = new Bannissement(rs.getInt("id"), rs.getInt("ids"), rs.getString("titre"), rs.getString("login"), rs.getTimestamp("date").toString());
                listeU.add(b);
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return listeU;
    }
    
    public List<Notification> getNotifications(int id, Timestamp time1, Timestamp time2){
        List<Notification> myList = new ArrayList<Notification>();
        try{
            String requete = "select b.ID_Sujet, b.ID_Abonne, b.Date_Bannissement, u.username, s.Titre "
                    + "from bannissement b, fos_user u, sujets s "
                    + "where b.ID_Sujet = (select ID_Sujet from suivi_sujet where ID_Abonne=?) "
                    + "and s.ID_Sujet=b.ID_Sujet "
                    + "and u.id=b.ID_Abonne "
                    + "and b.Date_Bannissement>=? and b.Date_Bannissement<=?";
            PreparedStatement st = cnx.prepareCall(requete);
            st.setInt(1, id);
            st.setTimestamp(2, time1);
            st.setTimestamp(3, time2);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Notification n = new Notification(rs.getInt(1), "ban", "", rs.getTimestamp(3),rs.getString(4), rs.getString(5));
                myList.add(n);
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return myList;
    }
}
