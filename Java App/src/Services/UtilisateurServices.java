/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;
import java.sql.*;
import java.util.*;
/*import java.text.SimpleDateFormat;
import java.text.DateFormat;*/
import dbconnexion.ConnexionBD;
import Entities.Utilisateur;

/**
 *
 * @author asus
 */
public class UtilisateurServices {
    Connection cn=ConnexionBD.getInstance().getConnection();
    
    
    
    public void ajouterUtilisateur(Utilisateur u)
    {
        try
        {
            String rqst = "insert into utilisateur(NOM,PRENOM,NUM_TEL,EMAIL,ADRESSE,ROLE,DATE_AJ,LOGIN,PASSWORD) values(?,?,?,?,?,?,NOW(),?,?)";
            PreparedStatement st = cn.prepareStatement(rqst);
            st.setString(1, u.getNOM());
            st.setString(2, u.getPRENOM());
            st.setInt(3, u.getNUM_TEL());
            st.setString(4, u.getEMAIL());
            st.setString(5, u.getADRESSE());
            st.setString(6, u.getROLE());
            st.setString(7, u.getLOGIN());
            st.setString(8, u.getPASSWORD());
            st.executeUpdate();
            System.out.println("Utilisateur ajouté");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
    }
    
    public void ModifierUtilisateur(Utilisateur u)
    {
        try
        {
            String rqst = "update utilisateur set NOM=?,PRENOM=?,NUM_TEL=?,EMAIL=?,ADRESSE=?,ROLE=?,LOGIN=?,PASSWORD=? where ID=?";
            PreparedStatement st = cn.prepareStatement(rqst);
            st.setString(1, u.getNOM());
            st.setString(2, u.getPRENOM());
            st.setInt(3, u.getNUM_TEL());
            st.setString(4, u.getEMAIL());
            st.setString(5, u.getADRESSE());
            st.setString(6, u.getROLE());
            st.setString(7, u.getLOGIN());
            st.setString(8, u.getPASSWORD());
            st.setInt(9, u.getID());
            st.executeUpdate();
            System.out.println("Utilisateur Modifié");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
    }
    
    public void SupprimerUtilisateur(int ID){
        try
        {
            String rqst = "delete from utilisateur where ID=?";
            PreparedStatement st = cn.prepareStatement(rqst);
            st.setInt(1, ID);
            st.executeUpdate();
            System.out.println("Utilisateur Supprimé");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
    }
    
    public Utilisateur RecupererUtilisateur(String login, String password){
        Utilisateur u = new Utilisateur();
        try
        {
            String rqst = "select * from fos_user where username=? and password=?";
            PreparedStatement st = cn.prepareStatement(rqst);
            st.setString(1, login);
            st.setString(2, password);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                u.setID(rs.getInt(1));
                //u.setNOM(rs.getString(2));
                //u.setPRENOM(rs.getString(3));
                //u.setNUM_TEL(4);
                u.setEMAIL(rs.getString(4));
                //u.setADRESSE(rs.getString(6));
                u.setROLE(rs.getString(12));
                //u.setDATE_AJ(rs.getDate(8));
                u.setLOGIN(rs.getString(2));
                u.setPASSWORD(rs.getString(8));
                //u.setSIGNATURE(rs.getString(11));
                u.setLAST_TIME_LOGGED(rs.getTimestamp(9));
                //u.setLOGIN_TIME(rs.getTimestamp(13));
            }        
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            System.out.println("Utilisateur n'existe pas");
        }
        return u;
    }
    
    public Utilisateur RecupererUtilisateurId(int id){
        Utilisateur u = new Utilisateur();
        try
        {
            String rqst = "select * from fos_user where id=?";
            PreparedStatement st = cn.prepareStatement(rqst);
            st.setInt(1, id);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                u.setID(rs.getInt(1));
                //u.setNOM(rs.getString(2));
                //u.setPRENOM(rs.getString(3));
                //u.setNUM_TEL(4);
                u.setEMAIL(rs.getString(4));
                //u.setADRESSE(rs.getString(6));
                u.setROLE(rs.getString(12));
                //u.setDATE_AJ(rs.getDate(8));
                u.setLOGIN(rs.getString(2));
                u.setPASSWORD(rs.getString(8));
                //u.setSIGNATURE(rs.getString(11));
                u.setLAST_TIME_LOGGED(rs.getTimestamp(9));
                //u.setLOGIN_TIME(rs.getTimestamp(13));
            }        
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            System.out.println("Utilisateur n'existe pas");
        }
        return u;
    }
    
    public Utilisateur RecupererUtilisateurLogin(String login){
        Utilisateur u = new Utilisateur();
        try
        {
            String rqst = "select * from fos_user where username=?";
            PreparedStatement st = cn.prepareStatement(rqst);
            st.setString(1, login);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                u.setID(rs.getInt(1));
                //u.setNOM(rs.getString(2));
                //u.setPRENOM(rs.getString(3));
                //u.setNUM_TEL(4);
                u.setEMAIL(rs.getString(4));
                //u.setADRESSE(rs.getString(6));
                u.setROLE(rs.getString(12));
                //u.setDATE_AJ(rs.getDate(8));
                u.setLOGIN(rs.getString(2));
                u.setPASSWORD(rs.getString(8));
                //u.setSIGNATURE(rs.getString(11));
                u.setLAST_TIME_LOGGED(rs.getTimestamp(9));
                //u.setLOGIN_TIME(rs.getTimestamp(13));
            }        
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            System.out.println("Utilisateur n'existe pas");
        }
        return u;
    }
    
    public void AjouterSignature(int ID, String signature){
        try
        {
            String rqst = "update utilisateur set SIGNATURE=? where ID=?";
            PreparedStatement st = cn.prepareStatement(rqst);
            st.setString(1, signature);
            st.setInt(2, ID);
            st.executeUpdate();
            System.out.println("Signature moddifiée!");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
    }
    public void SupprimerSignature(int ID){
        try
        {
            String rqst = "update utilisateur set SIGNATURE=NULL where ID=?";
            PreparedStatement st = cn.prepareStatement(rqst);
            st.setInt(1, ID);
            st.executeUpdate();
            System.out.println("Signature Supprimée!");
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
    }
    
    public ArrayList<Utilisateur> getUtilisateur(String login){
        ArrayList<Utilisateur> liste = new ArrayList();
        try
        {
            String rqst = "select * from fos_user where username like '%"+login+"%'";
            Statement st = cn.createStatement();
            ResultSet rs = st.executeQuery(rqst);
            while(rs.next()){
                Utilisateur u = new Utilisateur();
                u.setID(rs.getInt(1));
                //u.setNOM(rs.getString(2));
                //u.setPRENOM(rs.getString(3));
                //u.setNUM_TEL(4);
                u.setEMAIL(rs.getString(4));
                //u.setADRESSE(rs.getString(6));
                u.setROLE(rs.getString(12));
                //u.setDATE_AJ(rs.getDate(8));
                u.setLOGIN(rs.getString(2));
                u.setPASSWORD(rs.getString(8));
                //u.setSIGNATURE(rs.getString(11));
                u.setLAST_TIME_LOGGED(rs.getTimestamp(9));
                //u.setLOGIN_TIME(rs.getTimestamp(13));
                liste.add(u);
            }        
        }
        catch(SQLException ex){
            System.err.println(ex.getMessage());
            System.out.println("Utilisateur n'existe pas");
        }
        return liste;
    }
    
    public void setLastTimeLogged(int id){
        try{
            String query = "update fos_user set last_login=CURRENT_TIMESTAMP where id=?";
            PreparedStatement st = cn.prepareStatement(query);
            st.setInt(1, id);
            st.executeUpdate();
            System.out.println("Derniere Date Login Modifiée");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
    /**public void setLoginTime(int id){
        try{
            String query = "update utilisateur set LOGIN_TIME=CURRENT_TIMESTAMP where ID=?";
            PreparedStatement st = cn.prepareStatement(query);
            st.setInt(1, id);
            st.executeUpdate();
            System.out.println("Date Login Modifiée");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }**/
}
