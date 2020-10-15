/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;
import dbconnexion.ConnexionBD;
import Entities.Message;
import Entities.Notification;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.Timestamp;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Ibrahim
 */
public class AppreciationsMessagesService {
    public enum Reactions{like,dislike};
    Connection cnx = ConnexionBD.getInstance().getConnection();
    
    public void Reagir(int id_User, int id_Message, String Reaction){
        try{
            String requete = "insert into appreciations_messages(ID_Message,ID_Abonne,Reaction) values(?,?,?)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Message );
            st.setInt(2, id_User);
            st.setString(3, Reaction);
            st.executeUpdate();
            System.out.println("Réaction établie!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void EnleverReaction(int id_User, int id_Message){
        try{
            String requete = "delete from appreciations_messages where ID_Message=? and ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Message );
            st.setInt(2, id_User);
            st.executeUpdate();
            System.out.println("Réaction enlevée!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public int NombreLike(int id_Message){
        int nbr=0;
        try{
            String requete = "select count(*) from appreciations_messages where ID_Message=? and Reaction='like'";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Message );
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
    
    public int NombreDislike(int id_Message){
        int nbr=0;
        try{
            String requete = "select count(*) from appreciations_messages where ID_Message=? and Reaction='dislike'";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_Message );
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
    
    public boolean chercherReaction(int idMsg, int idAbonne, String reaction){
        int x=0;
        try{
            String requete = "select * from appreciations_messages where ID_Message=? and ID_Abonne=? and Reaction=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,idMsg );
            st.setInt(2,idAbonne );
            st.setString(3, reaction);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
               x++;
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        if(x!=0){
            return true;
        }
        return false;
    }
    
    public ArrayList<Notification> getNotifications(int id, Timestamp time1, Timestamp time2){
        ArrayList<Notification> myList = new ArrayList<Notification>();
        try{
            //System.out.println(time1);
            //System.out.println(time2);
            String query = "SELECT a.ID_Message, a.Reaction, a.Date_Reaction, u.username, x.username, s.Titre "
                    + "from appreciations_messages a, fos_user u, fos_user x, sujets s "
                    + "where u.id=a.ID_Abonne and a.ID_Message in ( "
                    + "select ID_Message from messages where ID_Sujet = "
                    + "(select ID_Sujet from suivi_sujet where ID_Abonne=?)"
                    + ") "
                    + "and a.Date_Reaction >= ? and a.Date_Reaction <= CURRENT_TIMESTAMP "
                    + "and x.id=(select ID_Abonne from messages where ID_Message=a.ID_Message) "
                    + "and s.ID_Sujet = (select ID_Sujet from messages where ID_Message = a.ID_Message)";
            PreparedStatement st = cnx.prepareStatement(query);
            st.setInt(1, id);
            st.setTimestamp(2, time1);
            //st.setTimestamp(3, time2);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                System.out.println(""+rs.getInt(1));
                Notification n = new Notification(rs.getInt(1), rs.getString(2), rs.getString(4), rs.getTimestamp(3),rs.getString(5), rs.getString(6));
                myList.add(n);
            }
            
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return myList;
    }
    
}
