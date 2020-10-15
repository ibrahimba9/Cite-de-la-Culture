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
import java.sql.Timestamp;
import java.util.ArrayList;
import java.util.List;
import javafx.scene.chart.PieChart;
/**
 *
 * @author Ibrahim
 */
public class MessageService {
    Connection cnx = ConnexionBD.getInstance().getConnection();
    public void PublierMessage(Message m){
        try{
            System.out.println(""+m.getID_Abonne());
            String requete="insert into messages(ID_Abonne,ID_Sujet,Texte,Date_Publication) values (?,?,?,CURRENT_TIMESTAMP)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, m.getID_Abonne());
            st.setInt(2, m.getID_Sujet());
            st.setString(3, m.getTexte());
            st.executeUpdate();
            System.out.println("Message Publié!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void SupprimerMessage(int id_message){
        try{
            String requete = "delete from messages where ID_Message=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id_message);
            st.executeUpdate();
            System.out.println("Message Supprimé!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void SupprimerMessagesSujet(int id_sujet){
        try{
            String requete = "delete from messages where ID_Sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id_sujet);
            st.executeUpdate();
            System.out.println("Tous les messages sont supprimés!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void SupprimerMessagesAbonne(String id_Abonne){
        try{
            String requete = "delete from messages where ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setString(1, id_Abonne);
            st.executeUpdate();
            System.out.println("Tous les messages sont supprimés!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void ModifierMessage(int id_Message, String Texte){
        try{
            String requete = "update messages set Texte=? where ID_Message=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setString(1, Texte);
            st.setInt(2, id_Message);
            st.executeUpdate();
            System.out.println("Message Modifié!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void AfficherMessage(int id_Message){
        try{
            Message m = new Message();
            String requete = "select * from messages where ID_Message=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id_Message);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                m.setID_Message(rs.getInt(1));
                m.setID_Abonne(rs.getInt(2));
                m.setID_Sujet(rs.getInt(3));
                m.setTexte(rs.getString(4));
                m.setDate_Publication(rs.getTimestamp(5).toString());
            }
            System.out.println(m.toString());
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public List<Message> ListerMessagesSujet(int id_Sujet){
        List<Message> listeMessages = new ArrayList<Message>();
        try{
            String requete = "select * from messages where ID_Sujet=? order by Date_Publication desc";
            PreparedStatement st =cnx.prepareStatement(requete);
            st.setInt(1, id_Sujet);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Message m = new Message(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getString(4), rs.getTimestamp(5).toString());
                listeMessages.add(m);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listeMessages;
    }
    
    public List<Message> ListerMessagesSujetAbonne(int id_Sujet, String id_Abonne){
        List<Message> listeMessages = new ArrayList<Message>();
        try{
            String requete = "select * from messages where ID_Sujet=? and ID_Abonne=? order by Date_Publication desc";
            PreparedStatement st =cnx.prepareStatement(requete);
            st.setInt(1, id_Sujet);
            st.setString(2, id_Abonne);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Message m = new Message(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getString(4), rs.getTimestamp(5).toString());
                listeMessages.add(m);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listeMessages;
    }
    
    public ArrayList<PieChart.Data> statMessages(){
        ArrayList<PieChart.Data> myList = new ArrayList<>();
        try{
            String query = "select s.ID_Sujet ids, s.Titre ts, count(DISTINCT m.ID_Message) nbr\n" +
                "from sujets s \n" +
                "inner join messages m \n" +
                "on m.ID_Sujet = s.ID_Sujet\n" +
                "GROUP BY s.ID_Sujet";
            Statement st = cnx.createStatement();
            
            ResultSet rs = st.executeQuery(query);
            while(rs.next()){
                myList.add(new PieChart.Data(rs.getString("ts")+" - "+rs.getInt("nbr"), rs.getInt("nbr")));
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return myList;
    }
    
    public ArrayList<PieChart.Data> statParticipants(){
        ArrayList<PieChart.Data> myList = new ArrayList<>();
        try{
            String query = "select s.ID_Sujet ids, s.Titre ts, count(DISTINCT m.ID_Abonne) nbr\n" +
                "from sujets s \n" +
                "inner join messages m \n" +
                "on m.ID_Sujet = s.ID_Sujet\n" +
                "GROUP BY s.ID_Sujet";
            Statement st = cnx.createStatement();
            
            ResultSet rs = st.executeQuery(query);
            while(rs.next()){
                myList.add(new PieChart.Data(rs.getString("ts")+" - "+rs.getInt("nbr"), rs.getInt("nbr")));
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return myList;
    }
    
    public List<Notification> getNotifications(int id, Timestamp time1, Timestamp time2){
        List<Notification> myList = new ArrayList<Notification>();
        try{
            String requete = "select m.ID_Sujet,m.ID_Abonne,m.Date_Publication, u.username, s.Titre "
                    + "from messages m, fos_user u, sujets s "
                    + "where m.ID_Sujet = ("
                    + "select ID_Sujet from suivi_sujet where ID_Abonne=?) "
                    + "and u.id=m.ID_Abonne and s.ID_Sujet = m.ID_Sujet "
                    + "and m.Date_Publication >= ? and m.Date_Publication <= CURRENT_TIMESTAMP";
            PreparedStatement st = cnx.prepareCall(requete);
            st.setInt(1, id);
            st.setTimestamp(2, time1);
            //st.setTimestamp(3, time2);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Notification n = new Notification(rs.getInt(1), "ajout", "", rs.getTimestamp(3),rs.getString(4), rs.getString(5));
                myList.add(n);
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return myList;
    }
}

