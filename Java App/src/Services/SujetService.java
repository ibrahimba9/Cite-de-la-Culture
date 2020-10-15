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
import Entities.UserSession;
import Entities.Utilisateur;
import javafx.scene.chart.PieChart;
/**
 *
 * @author Ibrahim
 */
public class SujetService {
    Connection cnx = ConnexionBD.getInstance().getConnection();
    
    public void AjouterSujet(Sujet s){
        try{
            String requete = "insert into Sujets(Theme,Titre,ID_Abonne) values(?,?,?)";
        PreparedStatement st = cnx.prepareStatement(requete);
        st.setString(1,s.getTheme() );
        st.setString(2, s.getTitre());
        st.setInt(3, s.getAuteur());
        st.executeUpdate();
            System.out.println("Sujet Ajouté!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        
    }
    
    public void AjouterSujetPrive(Sujet s){
        try{
            String requete = "insert into Sujets(Theme,Titre,Statut,ID_Abonne) values(?,?,'Private',?)";
        PreparedStatement st = cnx.prepareStatement(requete);
        st.setString(1,s.getTheme() );
        st.setString(2,s.getTitre() );
        st.setInt(3, s.getAuteur());
        st.executeUpdate();
            System.out.println("Sujet Privé Ajouté!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public void ModifierSujet(Sujet s){
        try{
            String requete="update Sujets set Theme=?,Titre=?,Statut=? where ID_Sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(4, s.getID_Sujet());
            st.setString(1, s.getTheme());
            st.setString(2, s.getTitre());
            st.setString(3, s.getStatut());
            st.executeUpdate();
            System.out.println("Theme Modifié!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        } 
    }
    
    
    public Sujet GetSujet(int ID_Sujet){
        Sujet s = new Sujet();
        try{
            String requete = "select * from Sujets where ID_Sujet = ?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, ID_Sujet);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                s.setID_Sujet(rs.getInt(1));
                s.setTheme(rs.getString(2));
                s.setTitre(rs.getString(3));
                s.setStatut(rs.getString(4));
                s.setDate_Creation(rs.getTimestamp(5).toString());
                s.setAuteur(rs.getInt(6));
            }
            
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return s;
    }
    
    public List<Sujet> ListerSujets(){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> ListerSujetsTheme(String theme){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Theme=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setString(1, theme);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> ListerMesSujetsTheme(int id, String theme){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Theme=? and ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setString(1, theme);
            st.setInt(2, id);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> ListerSujetsThemeStatut(String theme, String statut){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Theme=? and statut=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setString(1, theme);
            st.setString(2, statut);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> ListerMesSujetsThemeStatut(int id,String theme, String statut){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Theme=? and statut=? and ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setString(1, theme);
            st.setString(2, statut);
            st.setInt(3, id);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public void SupprimerSujet(int ID_Sujet){
        try{
            String requete = "delete from Sujets where ID_Sujet = ?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, ID_Sujet);
            st.executeUpdate();
            System.out.println("Sujet Supprimé!");
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
    }
    
    public List<Sujet> RechercheAvancee(String texte){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Titre like '%"+texte+"%' or ID_Abonne like '%"+texte+"%'";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> MaRechercheAvancee(int id,String texte){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Titre like '%"+texte+"%' and ID_Abonne=? ";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> MaRechercheAvanceeTheme(int id,String texte, String Theme){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Titre like '%"+texte+"%' and ID_Abonne=? and Theme=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id);
            st.setString(2, Theme);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> RechercheAvanceeInvit(int id,String texte){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Titre like '%"+texte+"%' and ID_Sujet="
                    + "(select id_sujet from invitations where id_invite=?)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id);
            st.setInt(2, id);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> ListerSujetsStatut(String statut){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Statut=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setString(1, statut);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> ListerMesSujetsStatut(int id, String statut){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where Statut=? and ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setString(1, statut);
            st.setInt(2, id);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> ListerMesSujets(int login){
        List<Sujet> listSujets = new ArrayList<Sujet>();
        try{
            String requete="select * from Sujets where ID_Abonne=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, login);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4),rs.getTimestamp(5).toString(),rs.getInt(6));
                listSujets.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(ex.getMessage());
        }
        return listSujets;
    }
    
    public List<Sujet> listerSujetsInvitation(int id_invite){
        List<Sujet> liste = new ArrayList();
        try{
            String requete = "select i.etat etat_inv,s.ID_Sujet idsuj,s.Theme themes,s.Titre titres,s.Statut statuts,s.Date_Creation dates,s.ID_Abonne abonnes "
                    + "from sujets s, invitations i "
                    + "where i.id_invite=? and s.ID_Sujet=i.id_sujet";

            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_invite);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt("idsuj"), rs.getString("themes"), rs.getString("titres"), rs.getString("statuts"), rs.getString("dates"), rs.getInt("abonnes"),rs.getString("etat_inv"));
                liste.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return liste;
    }
    
    public List<Sujet> listerSujetsInvitationTheme(int id_invite,String theme){
        List<Sujet> liste = new ArrayList();
        try{
            String requete = "select i.etat etat_inv,s.ID_Sujet idsuj,s.Theme themes,s.Titre titres,s.Statut statuts,s.Date_Creation dates,s.ID_Abonne abonnes "
                    + "from sujets s, invitations i "
                    + "where i.id_invite=? and s.Theme=? and s.ID_Sujet=i.id_sujet";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1,id_invite);
            st.setString(2,theme);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                Sujet s = new Sujet(rs.getInt("idsuj"), rs.getString("themes"), rs.getString("titres"), rs.getString("statuts"), rs.getString("dates"), rs.getInt("abonnes"),rs.getString("etat_inv"));
                liste.add(s);
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return liste;
    }
    
    public List<String> ListerSujetParticipants(int id_sujet){
        List<String> listeU = new ArrayList<>();
        try{
            String requete = "select DISTINCT fos_user.username as login "
                    + "from fos_user, messages "
                    + "where fos_user.id=messages.ID_Abonne and messages.ID_Sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id_sujet);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                listeU.add(rs.getString("login"));
            }
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
        return listeU;
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
    
}

