/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI_Front;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.application.Platform;
import javafx.fxml.Initializable;
import Entities.Sujet;
import Entities.UserSession;
import Entities.Utilisateur;
import Services.SujetService;
import Services.UtilisateurServices;
import Services.InvitationService;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Ibrahim
 */
public class InviterForumFXMLController implements Initializable {
    UserSession session = UserSession.instance;
    private static int Id;
    @FXML
    private TextField tfabonne;
    @FXML
    private Button btnchercher;
    @FXML
    private TableView<Utilisateur> viewabonne;
    @FXML
    private Button btninviter;
    @FXML
    private TableColumn<Utilisateur, String> clogin;
    @FXML
    private TableColumn<Utilisateur, String> cnom;
    @FXML
    private TableColumn<Utilisateur, String> cprenom;
    
    private static ObservableList<Utilisateur> obs;
    @FXML
    private Button btnback;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        Platform.runLater(() -> {
            System.out.println("bonjour"+Id);
        });
    }    
    
    public void setIdSujet(int id){
        this.Id = id;
    }
    
    private Sujet getSujet(int id){
        SujetService ss = new SujetService();
        Sujet s = ss.GetSujet(id);
        return s;
    }

    @FXML
    private void chercherAbonne(ActionEvent event) {
        if(tfabonne.getText().trim().isEmpty()){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Vous devez saisir un Login!");

            alert.showAndWait();
        }
        else{
            this.init_table(this.get_data(tfabonne.getText()));
        }
        
    }

    @FXML
    private void inviterAbonne(ActionEvent event) throws IOException {
        int idinvite = viewabonne.getSelectionModel().getSelectedItem().getID();
        InvitationService is = new InvitationService();
        is.inviter(session.getId(), idinvite, this.Id);
        
        Parent pageForum = FXMLLoader.load(getClass().getResource("ForumUserFXML.fxml"));
        Scene sceneForum = new Scene(pageForum); 
        Stage stage = (Stage)((Node) event.getSource()).getScene().getWindow();
        stage.hide(); 
        stage.setScene(sceneForum);  
        stage.show(); 
    }
    
    private void init_table(ArrayList liste){
        obs = FXCollections.observableArrayList(liste);
        
        clogin.setCellValueFactory(new PropertyValueFactory<>("LOGIN"));
        cnom.setCellValueFactory(new PropertyValueFactory<>("NOM"));
        cprenom.setCellValueFactory(new PropertyValueFactory<>("PRENOM"));
        
        viewabonne.setItems(obs);
    }
    
    private ArrayList<Utilisateur> get_data(String login){
        UtilisateurServices us = new UtilisateurServices();
        return us.getUtilisateur(login);
    }

    @FXML
    private void goBackToForum(ActionEvent event) throws IOException {
        Parent pageForum = FXMLLoader.load(getClass().getResource("ForumUserFXML.fxml"));
        Scene sceneForum = new Scene(pageForum); 
        Stage stage = (Stage)((Node) event.getSource()).getScene().getWindow();
        stage.hide(); 
        stage.setScene(sceneForum);  
        stage.show(); 
    }
    
}
