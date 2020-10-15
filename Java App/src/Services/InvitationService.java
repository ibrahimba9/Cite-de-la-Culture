/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;
import dbconnexion.ConnexionBD;

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
public class InvitationService {
    Connection cnx = ConnexionBD.getInstance().getConnection();
    
    public void inviter(int id_hote, int id_invite, int id_sujet){
        try{
            String requete = "insert into invitations(id_hote,id_invite,id_sujet) values (?,?,?)";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id_hote);
            st.setInt(2, id_invite);
            st.setInt(3, id_sujet);
            st.executeUpdate();
            System.out.println("Invitation Envoyée!");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
    public void accepterInviter(int id_invite, int id_sujet){
        try{
            String requete = "update invitations set etat='acceptee' where id_invite=? and id_sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id_invite);
            st.setInt(2, id_sujet);
            st.executeUpdate();
            System.out.println("Invitation Acceptée!");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
    public void refuserInviter(int id_invite, int id_sujet){
        try{
            String requete = "update invitations set etat='refusee' where id_invite=? and id_sujet=?";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, id_invite);
            st.setInt(2, id_sujet);
            st.executeUpdate();
            System.out.println("Invitation Refusée!");
        }
        catch(SQLException ex){
            System.out.println(""+ex.getMessage());
        }
    }
    
    public boolean avoirAcces(int idSujet, int idInvite){
        int x=0;
        try{
            String requete = "select * from invitations where id_invite=? and id_sujet=? and etat='acceptee'";
            PreparedStatement st = cnx.prepareStatement(requete);
            st.setInt(1, idInvite);
            st.setInt(2, idSujet);
            ResultSet rs = st.executeQuery();
            while(rs.next()){
                x++;
            }
            System.out.println("Invitation Refusée!");
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
