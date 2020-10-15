/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;
import dbconnexion.ConnexionBD;
import Entities.Message;
import java.sql.Array;

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
public class SignalService {
    Connection cnx = ConnexionBD.getInstance().getConnection();
    public void signalerMessage(int idMsg, int idAbonne){
        try{
            String requete ="insert into signaux (id_message,id_abonne) values(?,?)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, idMsg);
            st.setInt(2, idAbonne);
            st.executeUpdate();
            System.out.println("Signal Ajouté!");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
    public void annulerSignalMessage(int idMsg, int idAbonne){
        try{
            String requete ="delete from signaux where id_message=? and id_abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, idMsg);
            st.setInt(2, idAbonne);
            st.executeUpdate();
            System.out.println("Signal Supprimé!");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
    public boolean chercherSignal(int idMsg, int idAbonne){
        int x=0;
        try{
            String requete ="select * from signaux where id_message=? and id_abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, idMsg);
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
    
    public List<Integer> ListerSignaux(){
        List<Integer> listS = new ArrayList();
        try{
            String requete ="Select * from signaux";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while(rs.next()){
                listS.add(rs.getInt("id_essage"));
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return listS;
    }
    
    public List<Message> ListerMessagesSignales(List<Integer> listS){
        List<Message> listm = new ArrayList();
        try{
            String requete ="select * from Messages where ID_Message in"
                        + "(select id_message from signaux)";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while(rs.next()){
                Message m = new Message(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getString(4), rs.getString(5));
                listm.add(m);
                }
            
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return listm;
    }
    
    public int nommbreSignales(int id){
        int nbr = 0;
        try{
            String requete ="select count(*) nbr from signaux where ID_Message=? ";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                nbr=rs.getInt("nbr");
            }
            
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return nbr;
    }
    
    public List<Integer> messagesSignales(){
        List<Integer> nbr = new ArrayList<>();
        try{
            String requete ="select * from signaux having count(*)>1 ";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while(rs.next()){
                nbr.add(rs.getInt("id_message"));
            }
            
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return nbr;
    }
    
    public List<Message> listeMessagesSignales(){
        List<Message> myList = new ArrayList<>();
        List<Integer> ids = this.messagesSignales();
        String valeurs="";
            if(ids.size() != 0){
                for(int x : ids){
                valeurs+=x+",";
            }
            valeurs = valeurs.substring(0, valeurs.length()-1);
                System.out.println(""+valeurs);
            try{
                String requete ="select m.ID_Message, m.ID_Abonne, m.ID_Sujet, m.Texte, m.Date_Publication, u.username, s.Titre "
                        + "from messages m, fos_user u, sujets s "
                        + "where m.ID_Message in ( "+valeurs+" ) "
                        + "and u.id=m.ID_Abonne and s.ID_Sujet=m.ID_Sujet";
                Statement st = cnx.createStatement();
                ResultSet rs = st.executeQuery(requete);
                while(rs.next()){
                    Message m = new Message(rs.getInt(1), rs.getInt(2), rs.getInt(3), rs.getString(4), rs.getTimestamp(5).toString(), rs.getString(6), rs.getString(7));
                    myList.add(m);
                }

            }
            catch(SQLException ex){
                System.out.println(""+ex.getMessage());
            }
        }
        
        return myList;
    }
    
    public void abandonnerSignal(int id){
        try{
            String requete = "delete from signaux where id_message=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id);
            st.executeUpdate();
            System.out.println("Signal supprimé!");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
}
