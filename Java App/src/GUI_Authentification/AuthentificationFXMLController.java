/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI_Authentification;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;
import Entities.Utilisateur;
import Entities.UserSession;
import Services.AppreciationsMessagesService;
import Services.UtilisateurServices;
import java.io.IOException;
import java.util.List;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.stage.Stage;
import utils.BCrypt;

/**
 * FXML Controller class
 *
 * @author Ibrahim
 */
public class AuthentificationFXMLController implements Initializable {
    
    //UserSession session = UserSession.getInstance(login, 0);

    @FXML
    private TextField tflogin;
    @FXML
    private TextField tfpassword;
    @FXML
    private Button btnlogin;
    @FXML
    private ImageView logo;
    @FXML
    private ImageView text;
    @FXML
    private ImageView logo2;
    @FXML
    private AnchorPane pane;
    @FXML
    private AnchorPane pane2;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         
        try {
            FileInputStream inputstream = new FileInputStream("C:\\Users\\Ibrahim\\Documents\\NetBeansProjects\\cite_de_la_culture\\src\\Images\\log.png");
            Image logo1 = new Image(inputstream);
            this.logo.setImage(logo1);
            
            FileInputStream inputstream2 = new FileInputStream("C:\\Users\\Ibrahim\\Documents\\NetBeansProjects\\cite_de_la_culture\\src\\Images\\textecdlc.png");
            Image logo2 = new Image(inputstream2);
            this.text.setImage(logo2);
            
            FileInputStream inputstream3 = new FileInputStream("C:\\Users\\Ibrahim\\Documents\\NetBeansProjects\\cite_de_la_culture\\src\\Images\\logo2.png");
            Image logo3 = new Image(inputstream3);
            this.logo2.setImage(logo3);
            //064970
            pane.setStyle("-fx-background-image: url('file:background.png');-fx-background-position: center center; \n" +
                "-fx-background-repeat: stretch;-fx-background-size: cover, auto;");
            
            pane2.setStyle("-fx-background-image: url('file:back_login.png');-fx-background-position: center center; \n" +
                "-fx-background-repeat: stretch;-fx-background-size: cover, auto;");
            
        } catch (FileNotFoundException ex) {
            Logger.getLogger(AuthentificationFXMLController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }    

    @FXML
    private void authentification(ActionEvent event) throws IOException {
        String login = tflogin.getText();
        String password = tfpassword.getText();
        UtilisateurServices us = new UtilisateurServices();
        Utilisateur ut = us.RecupererUtilisateurLogin(login);
        if(ut.getID() == 0){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Authentification échouée!");
            alert.setHeaderText(null);
            alert.setContentText("Utilisateur n'existe pas!");

            alert.showAndWait();
        }
        else if(!checkPassword(password, ut.getPASSWORD())){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Authentification échouée!");
            alert.setHeaderText(null);
            alert.setContentText("Login ou Mot de passe invalide!");

            alert.showAndWait();
        }
        else{
            Utilisateur u = us.RecupererUtilisateurLogin(login);
            System.out.println(""+u.getROLE());
            System.out.println("login: "+u.getLOGIN_TIME());
            System.out.println("logout: "+u.getLAST_TIME_LOGGED());
            UserSession session = UserSession.getInstance(u.getLOGIN(), u.getID(), u.getROLE(), u.getLAST_TIME_LOGGED(), u.getLOGIN_TIME());
            Parent pageForum;
            if(session.getRole().equals("Administrateur")){
                pageForum = FXMLLoader.load(getClass().getResource("../GUI_Back/ForumFXML.fxml"));
            }
            else{
                pageForum = FXMLLoader.load(getClass().getResource("../GUI_Front/ForumUserFXML.fxml"));
            }
            Scene sceneForum = new Scene(pageForum);
            Stage stage = (Stage)((Node) event.getSource()).getScene().getWindow();
            stage.hide(); 
            stage.setScene(sceneForum);  
            stage.show(); 
        }
        tflogin.clear();
        tfpassword.clear();
    }
    
    public static String hashPassword(String password_plaintext)
    {
        int workload = 13;
        String salt = BCrypt.gensalt(workload);
        String hashed_password = BCrypt.hashpw(password_plaintext, salt);
        return hashed_password;
    }

    public static boolean checkPassword(String password_plaintext, String stored_hash)
    {
        boolean password_verified = false;

        if (null == stored_hash || !stored_hash.startsWith("$2y$"))
        {
            throw new java.lang.IllegalArgumentException("Invalid hash provided for comparison");
        }

        password_verified = BCrypt.checkpw(password_plaintext, stored_hash);
        return password_verified;
    }
}
