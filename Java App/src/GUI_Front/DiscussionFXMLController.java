/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI_Front;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.application.Platform;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.ScrollPane;
import javafx.scene.layout.VBox;
import javafx.scene.text.Text;
import Entities.Message;
import Entities.Sujet;
import Entities.UserSession;
import Entities.Utilisateur;
import Services.SujetService;
import Services.MessageService;
import java.util.List;
import javafx.event.ActionEvent;
import javafx.geometry.Insets;
import javafx.scene.control.Button;
import javafx.scene.control.TextArea;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.HBox;
import javafx.scene.shape.Line;
import Services.AppreciationsMessagesService;
import Services.SignalService;
import Services.SignalSujetService;
import Services.SuiviSujetsService;
import Services.UtilisateurServices;
import java.io.IOException;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;


/**
 * FXML Controller class
 *
 * @author Ibrahim
 */
public class DiscussionFXMLController implements Initializable {
    UserSession session = UserSession.instance;
    
    private int Id;
    @FXML
    private ScrollPane msgscontainer;
    @FXML
    private Text titre;
    @FXML
    private Text auteur;
    @FXML
    private Text theme;
    @FXML
    private Text date;
    @FXML
    private VBox boxmsgs;
    
    private static List<Message> data;
    public static int start = 100;
    public static int end = 800;
    @FXML
    private Button publierb;
    @FXML
    private AnchorPane anchor;
    @FXML
    private TextArea tamsg;
    @FXML
    private Button btnsuivre;
    @FXML
    private Button btnsignaler;
    @FXML
    private Button btnquit;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        Platform.runLater(() -> {
            Sujet s = this.getSujet(this.Id);
            SuiviSujetsService sss = new SuiviSujetsService();
            SignalSujetService ssuj = new SignalSujetService();
            UtilisateurServices us = new UtilisateurServices();
            Utilisateur u = us.RecupererUtilisateurId(s.getAuteur());
            titre.setText(s.getTitre());
            theme.setText(s.getTheme());
            auteur.setText(u.getLOGIN());
            date.setText(s.getDate_Creation());
            
            if(sss.sujetSuivi(this.Id, session.getId())){
                btnsuivre.setText("Ne plus Suivre");
                btnsuivre.setStyle("-fx-background-color: blue;");
            }
            
            if(ssuj.chercherSignal(Id, session.getId())){
                btnsignaler.setText("Annuler Signal");
                btnsignaler.setStyle("-fx-background-color: orange;");
            }
            
            boxmsgs.getChildren().add(new Line(200,0 , 650, 0));
            
            this.init_messages();
            
    });
    }    
    
    public void setSujetId(int id){
        this.Id = id;
        
    }
    
    private Sujet getSujet(int id){
        SujetService ss = new SujetService();
        Sujet s = ss.GetSujet(id);
        return s;
    }
    
    private List<Message> getMessages(int id){
        List<Message> data;
        MessageService ms = new MessageService();
      
        data = ms.ListerMessagesSujet(id);
        return data;
    }
    
    private void init_messages(){
        data = this.getMessages(this.Id);
        UtilisateurServices us = new UtilisateurServices();
        
        for(Message m : data){
                boxmsgs.getChildren().add(new Text("Publié par:   "+us.RecupererUtilisateurId(m.getID_Abonne()).getLOGIN()+"                            Publié le:   "+m.getDate_Publication()));
                boxmsgs.getChildren().add(new Text("\n"));
                TextArea text = new TextArea(m.getTexte());
                text.setEditable(false);
                boxmsgs.getChildren().add(text);
                boxmsgs.getChildren().add(new Text("")); 
                
                HBox hbox = new HBox();
                AppreciationsMessagesService apps = new AppreciationsMessagesService();
                Text nbrLike = new Text(String.valueOf(apps.NombreLike(m.getID_Message())));
                Text nbrDislike = new Text(String.valueOf(apps.NombreDislike(m.getID_Message())));
                
                Button like = new Button("J'aime");
                Button dislike = new Button("Je n'aime pas");
                Button signaler = new Button("Signaler");
                Button delete = new Button("Supprimer");
                
                AppreciationsMessagesService as = new AppreciationsMessagesService();
                if(as.chercherReaction(m.getID_Message(), session.getId(),"dislike")){
                    dislike.setStyle("-fx-background-color: red;");
                }
                else{
                    dislike.setStyle(null);
                }
                if(as.chercherReaction(m.getID_Message(), session.getId(),"like")){
                    like.setStyle("-fx-background-color: green;");
                }
                else{
                    like.setStyle(null);
                }
                SignalService ss1 = new SignalService();
                if(ss1.chercherSignal(m.getID_Message(), session.getId())){
                    signaler.setStyle("-fx-background-color: orange;");
                }
                else{
                    signaler.setStyle(null);
                }
                
                like.setOnAction(e -> {
                    AppreciationsMessagesService asl = new AppreciationsMessagesService();
                    if(asl.chercherReaction(m.getID_Message(), session.getId(),"like")){
                        asl.EnleverReaction(session.getId(), m.getID_Message());
                        like.setStyle(null);
                    }
                    else{
                        asl.EnleverReaction(session.getId(), m.getID_Message());
                        asl.Reagir(session.getId(), m.getID_Message(), "like");
                        like.setStyle("-fx-background-color: blue;");
                    }
                    
                    boxmsgs.getChildren().clear();
                    tamsg.clear();
                    anchor.setPrefHeight(200);
                    this.init_messages();
                });
                
                dislike.setOnAction(e -> {
                    AppreciationsMessagesService asd = new AppreciationsMessagesService();
                    if(asd.chercherReaction(m.getID_Message(), session.getId(),"dislike")){
                        asd.EnleverReaction(session.getId(), m.getID_Message());
                        dislike.setStyle(null);
                    }
                    else{
                        asd.EnleverReaction(session.getId(), m.getID_Message());
                        asd.Reagir(session.getId(), m.getID_Message(), "dislike");
                        dislike.setStyle("-fx-background-color: red;");
                    }
                    boxmsgs.getChildren().clear();
                    tamsg.clear();
                    anchor.setPrefHeight(200);
                    this.init_messages();
                });
                
                delete.setOnAction(e -> {
                    MessageService ms = new MessageService();
                    ms.SupprimerMessage(m.getID_Message());
                    boxmsgs.getChildren().clear();
                    tamsg.clear();
                    anchor.setPrefHeight(200);
                    this.init_messages();
                });
                
                signaler.setOnAction(e -> {
                    SignalService ss = new SignalService();
                    if(ss.chercherSignal(m.getID_Message(), session.getId())){
                        ss.annulerSignalMessage(m.getID_Message(), session.getId());
                        signaler.setStyle(null);
                    }
                    else{
                        ss.signalerMessage(m.getID_Message(), session.getId());
                        
                        signaler.setStyle("-fx-background-color: orange;");
                        
                    }
                    
                    boxmsgs.getChildren().clear();
                    tamsg.clear();
                    anchor.setPrefHeight(200);
                    this.init_messages();
                });
                
                hbox.getChildren().add(like);
                hbox.getChildren().add(nbrLike);
                hbox.getChildren().add(dislike);
                hbox.getChildren().add(nbrDislike);
                if(m.getID_Abonne() == session.getId()){
                    hbox.getChildren().add(delete);
                }
                else{
                    hbox.getChildren().add(signaler);
                }
                
                hbox.setSpacing(10);
                
                boxmsgs.getChildren().add(hbox);
                boxmsgs.getChildren().add(new Text(""));
                boxmsgs.getChildren().add(new Line(200,0 , 650, 0));
                anchor.setPrefHeight(anchor.getPrefHeight()+130);
            }
    }

    @FXML
    private void publiermessage(ActionEvent event) {
        MessageService ms = new MessageService();
        Message m = new Message(session.getId(), this.Id, tamsg.getText());
        ms.PublierMessage(m);
        boxmsgs.getChildren().clear();
        tamsg.clear();
        anchor.setPrefHeight(200);
        this.init_messages();
        
    }

    @FXML
    private void suivreDiscussion(ActionEvent event) {
        SuiviSujetsService sss = new SuiviSujetsService();
        if(sss.sujetSuivi(Id, session.getId())){
            sss.AbandonnerSujet(session.getId(), Id);
            btnsuivre.setText("Suivre");
            btnsuivre.setStyle(null);
        }
        else
        {
            sss.SuivreSujet(session.getId(), this.Id);
            btnsuivre.setText("Ne plus Suivre");
            btnsuivre.setStyle("-fx-background-color: blue;");
        }
    }

    @FXML
    private void signalerSujet(ActionEvent event) throws IOException {
        SignalSujetService sss = new SignalSujetService();
        if(sss.chercherSignal(Id, session.getId())){
            sss.annulerSignalSujet(Id, session.getId());
            btnsignaler.setText("Signaler");
            btnsignaler.setStyle(null);
        }
        else{
            sss.signalerSujet(Id, session.getId());
            btnsignaler.setText("Annuler Signal");
            btnsignaler.setStyle("-fx-background-color: orange;");
        }
        
    }

    @FXML
    private void quitterDiscussion(ActionEvent event) throws IOException {
        if(session.getRole().equals("Administrateur")){
            Parent pagePrecedente = FXMLLoader.load(getClass().getResource("../GUI_Back/ForumFXML.fxml"));
            Scene scenePrecedente = new Scene(pagePrecedente); 
            Stage stage = (Stage)((Node) event.getSource()).getScene().getWindow();
            stage.hide(); 
            stage.setScene(scenePrecedente);  
            stage.show(); 
        }
        else if(session.getRole().equals("Abonné")){
            Parent pagePrecedente = FXMLLoader.load(getClass().getResource("ForumUserFXML.fxml"));
            Scene scenePrecedente = new Scene(pagePrecedente); 
            Stage stage = (Stage)((Node) event.getSource()).getScene().getWindow();
            stage.hide(); 
            stage.setScene(scenePrecedente);  
            stage.show(); 
        }
        
    }
    
}
