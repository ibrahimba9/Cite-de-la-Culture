/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI_Back;

import Entities.Bannissement;
import Entities.Message;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableView;

//Entities
import Entities.Sujet;
import Entities.UserSession;
import Entities.Utilisateur;
import Services.BannissementService;
import Services.MessageService;
import Services.SignalService;

//Services
import Services.SujetService;
import Services.UtilisateurServices;
import java.awt.Color;
import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.Properties;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.AreaChart;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.CheckBox;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javafx.util.converter.DefaultStringConverter;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import org.jfree.chart.ChartFactory;
import org.jfree.chart.ChartPanel;
import org.jfree.chart.JFreeChart;
import org.jfree.chart.plot.CategoryPlot;
import org.jfree.data.category.DefaultCategoryDataset;

/**
 * FXML Controller class
 *
 * @author Ibrahim
 */
public class ForumFXMLController implements Initializable {
    UserSession session = UserSession.instance;

    @FXML
    private ComboBox<?> boxTheme;
    @FXML
    private TableView<Sujet> viewSujets;
    @FXML
    private TableColumn<Sujet, String> themec;
    @FXML
    private TableColumn<Sujet, String> titrec;
    @FXML
    private TableColumn<Sujet, String> auteurc;
    @FXML
    private TableColumn<Sujet, String> statut;
    @FXML
    private TableColumn<Sujet, String> date;
    private TableColumn<Sujet, Button> modifc;
    private TableColumn<Sujet, Button> supprc;
    @FXML
    private TextField tfrecherche;
    @FXML
    private Button btnrecherche;
    @FXML
    private CheckBox checkpublic;
    @FXML
    private CheckBox checkprivate;
    
    public static ObservableList<Sujet> obs;
    public static ObservableList<Message> obsSignaux;
    public static ObservableList<Bannissement> obsB;
    public static ObservableList<Sujet> myObs;
    public  static TableView<Sujet> viewMesSujetsAux;
    public  static TableView<Sujet> viewSujetsAux;
    @FXML
    private TextField tftitre;
    @FXML
    private ComboBox<?> combotheme;
    @FXML
    private Button btncreer;
    @FXML
    private TableView<Sujet> viewmessujets;
    @FXML
    private TextField tfmarecherche;
    @FXML
    private Button btncherchermonsujet;
    @FXML
    private ComboBox<?> moncombotheme;
    @FXML
    private TableColumn<Sujet, String> monthemec;
    @FXML
    private TableColumn<Sujet, String> montitrec;
    @FXML
    private TableColumn<Sujet, String> monautheurc;
    @FXML
    private TableColumn<Sujet, String> monstatutc;
    @FXML
    private TableColumn<Sujet, String> madatec;
    @FXML
    private TableColumn<Sujet, Button> monmodifierc;
    @FXML
    private TableColumn<Sujet, Button> monsupprimerc;
    @FXML
    private TableColumn<?, ?> consulterc;
    @FXML
    private TableView<Sujet> viewtitreban;
    @FXML
    private TableColumn<Sujet, String> titreban;
    @FXML
    private ComboBox<?> combologinban;
    @FXML
    private Button btnban;
    @FXML
    private Button btnchoixtitreban;
    @FXML
    private TableView<Bannissement> viewban;
    @FXML
    private Button btnannulerban;
    
    private int id_sujet_ban;
    @FXML
    private TableColumn<Bannissement, String> titrebanc;
    @FXML
    private TableColumn<Bannissement, String> loginbanc;
    @FXML
    private TableColumn<Bannissement, String> nombanc;
    @FXML
    private TableColumn<Bannissement, String> prenombanc;
    @FXML
    private TableColumn<Bannissement, String> datebanc;
    @FXML
    private PieChart pieTopMessages;
    @FXML
    private TableView<Message> viewsignal;
    @FXML
    private TableColumn<?, ?> signalsujet;
    @FXML
    private TableColumn<?, ?> signalmessage;
    @FXML
    private TableColumn<?, ?> signalauteur;
    @FXML
    private TableColumn<?, ?> signalsupprimer;
    
    public static TableView<Message> viewsignalAux;
    @FXML
    private TableColumn<?, ?> signalabandonner;
    @FXML
    private Button btnlogout;
    @FXML
    private PieChart pietopparticipants;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ObservableList options = FXCollections.observableArrayList("","Cinéma","Théâtre","Musique","Art","Dance","Litérature");
        SujetService ss = new SujetService();
        //Onglet Gestion des Sujets
        boxTheme.setItems(options);
        boxTheme.setPromptText("Liste des Thèmes");
        ArrayList listSujet = (ArrayList)ss.ListerSujets();
        this.init_table(listSujet);
        viewSujetsAux = viewSujets;
        
        //Onglet Créer Sujet
        moncombotheme.setItems(options);
        moncombotheme.setPromptText("Liste des Thèmes");
        combotheme.setItems(options);
        combotheme.setPromptText("Liste des Thèmes");
        ArrayList maListeSujet = (ArrayList)ss.ListerMesSujets(session.getId());
        this.init_ma_table(maListeSujet);
        viewMesSujetsAux = viewmessujets;
        
        //Onglet Gestion des Bannissement
        BannissementService bs = new BannissementService();
        this.init_table_titre_ban(listSujet);
        this.init_table_ban((ArrayList)bs.listerUtilisateursBannis());
        
        //Onglet Gestion Signaux
        SignalService  sigS = new SignalService();
        if(sigS.listeMessagesSignales()!= null){
            this.init_table_signaux((ArrayList)sigS.listeMessagesSignales());
            viewsignalAux = viewsignal;  
        }
        
        //Onglet Statistiques
        MessageService ms = new MessageService();
        ObservableList<PieChart.Data> chartData = FXCollections.observableArrayList((ArrayList)ms.statMessages());
        pieTopMessages.setData(chartData);
        
        ObservableList<PieChart.Data> chartData2 = FXCollections.observableArrayList((ArrayList)ms.statParticipants());
        pietopparticipants.setData(chartData2);
    }    

    @FXML
    private void selctionnerTheme(ActionEvent event) {
        String Theme = boxTheme.getSelectionModel().getSelectedItem().toString();
        SujetService ss = new SujetService();
        ArrayList listSujet = (ArrayList)ss.ListerSujetsTheme(Theme);
        this.init_table(listSujet);
    }

    @FXML
    private void Chercher(ActionEvent event) {
        String texte = tfrecherche.getText();
        SujetService ss = new SujetService();
        ArrayList listSujet = (ArrayList)ss.RechercheAvancee(texte);
        this.init_table(listSujet);
    }

    @FXML
    private void AfficherSujetsPubliques(ActionEvent event) {
        SujetService ss = new SujetService();
        if(checkpublic.isSelected()){   
            ArrayList listSujet = (ArrayList)ss.ListerSujetsStatut("Public");
            this.init_table(listSujet);
        }
        else{
            ArrayList listSujet = (ArrayList)ss.ListerSujets();
            this.init_table(listSujet);
        }
    }

    @FXML
    private void AfficherSujetsPrives(ActionEvent event) {
        SujetService ss = new SujetService();
        if(checkprivate.isSelected()){
            ArrayList listSujet = (ArrayList)ss.ListerSujetsStatut("Private");
            this.init_table(listSujet);
        }
        else{
            ArrayList listSujet = (ArrayList)ss.ListerSujets();
            this.init_table(listSujet);
        }
    }
    
    public void init_table(ArrayList myList){
        obs = FXCollections.observableArrayList(myList);
        
        themec.setCellValueFactory(new PropertyValueFactory<>("Theme"));
        titrec.setCellValueFactory(new PropertyValueFactory<>("Titre"));
        auteurc.setCellValueFactory(new PropertyValueFactory<>("Auteur"));
        statut.setCellValueFactory(new PropertyValueFactory<>("Statut"));
        date.setCellValueFactory(new PropertyValueFactory<>("Date_Creation"));
        consulterc.setCellValueFactory(new PropertyValueFactory<>("RejoindreBack"));

        viewSujets.setItems(obs);
        
    }
    
    public void init_table_signaux(ArrayList myList){
        obsSignaux = FXCollections.observableArrayList(myList);
        
        signalsujet.setCellValueFactory(new PropertyValueFactory<>("Titre"));
        signalmessage.setCellValueFactory(new PropertyValueFactory<>("Texte"));
        signalauteur.setCellValueFactory(new PropertyValueFactory<>("Auteur"));
        signalsupprimer.setCellValueFactory(new PropertyValueFactory<>("Supprimer"));
        signalabandonner.setCellValueFactory(new PropertyValueFactory<>("Abandonner"));
        
        for(Message msg : obsSignaux){
            msg.getSupprimer().setOnAction(e -> {
            
            ObservableList<Message> messages = ForumFXMLController.viewsignalAux.getSelectionModel().getSelectedItems();
            
           for(Message m : messages){
               if(m.getSupprimer() == msg.getSupprimer()){
                   MessageService ms = new MessageService();
                   ms.SupprimerMessage(m.getID_Message());
                   SignalService sigs = new SignalService();
                   this.init_table_signaux((ArrayList)sigs.listeMessagesSignales());
               }
           } 
            });
            
            msg.getAbandonner().setOnAction(e -> {
            
            ObservableList<Message> messages = ForumFXMLController.viewsignalAux.getSelectionModel().getSelectedItems();
            
           for(Message m : messages){
               if(m.getAbandonner() == msg.getAbandonner()){
                   SignalService sigs = new SignalService();
                   System.out.println(""+m.getID_Message());
                   sigs.abandonnerSignal(m.getID_Message());
                   this.init_table_signaux((ArrayList)sigs.listeMessagesSignales());
               }
           } 
            });
        }
        
        viewsignal.setItems(obsSignaux);
        
    }
    
    public void init_ma_table(ArrayList myList){
        myObs = FXCollections.observableArrayList(myList);
        
        monthemec.setCellValueFactory(new PropertyValueFactory<>("Theme"));
        montitrec.setCellValueFactory(new PropertyValueFactory<>("Titre"));
        monautheurc.setCellValueFactory(new PropertyValueFactory<>("Auteur"));
        monstatutc.setCellValueFactory(new PropertyValueFactory<>("Statut"));
        madatec.setCellValueFactory(new PropertyValueFactory<>("Date_Creation"));
        monmodifierc.setCellValueFactory(new PropertyValueFactory<>("BoutonModif"));
        monsupprimerc.setCellValueFactory(new PropertyValueFactory<>("BoutonSuppr"));
        
        for(Sujet suj : myObs){
            suj.getBoutonModif().setOnAction(e -> {
            
            ObservableList<Sujet> sujets = ForumFXMLController.viewMesSujetsAux.getSelectionModel().getSelectedItems();
            
           for(Sujet s : sujets){
               if(s.getBoutonModif() == suj.getBoutonModif()){
                   SujetService ss = new SujetService();
                   ss.ModifierSujet(s);
                   this.init_ma_table((ArrayList)ss.ListerMesSujets(session.getId()));
               }
           } 
        });
            
            suj.getBoutonSuppr().setOnAction(e -> {
           ObservableList<Sujet> sujets = ForumFXMLController.viewMesSujetsAux.getSelectionModel().getSelectedItems();
            
           for(Sujet s : sujets){
               if(s.getBoutonSuppr() == suj.getBoutonSuppr()){
                   SujetService ss = new SujetService();
                   ss.SupprimerSujet(s.getID_Sujet());
                   this.init_ma_table((ArrayList)ss.ListerMesSujets(session.getId()));
               }
           }
        });
        }
        
        ColonnesModifiable();
        viewmessujets.setItems(myObs);
        
    }
    
    public void init_table_titre_ban(ArrayList myList){
        obs = FXCollections.observableArrayList(myList);
        
        titreban.setCellValueFactory(new PropertyValueFactory<>("Titre"));
        
 
        viewtitreban.setItems(obs);
        
    }
    
    public void init_table_ban(ArrayList myList){
        obsB = FXCollections.observableArrayList(myList);
        
        titrebanc.setCellValueFactory(new PropertyValueFactory<>("Titre"));
        loginbanc.setCellValueFactory(new PropertyValueFactory<>("Login"));
        nombanc.setCellValueFactory(new PropertyValueFactory<>("Nom"));
        prenombanc.setCellValueFactory(new PropertyValueFactory<>("Prenom"));
        datebanc.setCellValueFactory(new PropertyValueFactory<>("Date"));
 
        viewban.setItems(obsB);
        
    }
    
    public static void load_Data(ArrayList myList){
        obs = FXCollections.observableArrayList(myList);
    }
    
    public static void load_My_Data(ArrayList myList){
        myObs = FXCollections.observableArrayList(myList);
    }
    
    private void ColonnesModifiable(){
        monthemec.setCellFactory(TextFieldTableCell.<Sujet>forTableColumn());
        
        monthemec.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setTheme((String)e.getNewValue());
        });
        
        montitrec.setCellFactory(TextFieldTableCell.<Sujet>forTableColumn());
        
        montitrec.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setTitre((String)e.getNewValue());
        });
        
        
        
        monstatutc.setCellFactory(TextFieldTableCell.<Sujet>forTableColumn());
        
        monstatutc.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setStatut((String)e.getNewValue());
        });
        
        viewmessujets.setEditable(true);
    }

    @FXML
    private void creerSujet(ActionEvent event) {
        if(tftitre.getText().trim().isEmpty()){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Vous devez saisir un titre!");

            alert.showAndWait();
        }
        else{
            SujetService ss = new SujetService();
            Sujet s = new Sujet(combotheme.getSelectionModel().getSelectedItem().toString(), tftitre.getText(), "Private", session.getId());
            ss.AjouterSujetPrive(s);
            this.init_ma_table((ArrayList)ss.ListerMesSujets(session.getId()));
            this.init_table((ArrayList)ss.ListerSujets());
            tftitre.clear();
            combotheme.getSelectionModel().clearSelection();
        }
        
    }

    @FXML
    private void chercherMonSujet(ActionEvent event) {
        if(tfmarecherche.getText().trim().isEmpty()){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Vous devez saisir quelque chose à chercher!");

            alert.showAndWait();
        }
        else{
            SujetService ss = new SujetService();
            String texte = tfmarecherche.getText();
            ArrayList<Sujet> myList;
            if(moncombotheme.getSelectionModel().isEmpty() || moncombotheme.getSelectionModel().getSelectedItem().toString().equals("")){
                myList = (ArrayList)ss.MaRechercheAvancee(session.getId(), texte);
            }
            else if(texte.isEmpty() && moncombotheme.getSelectionModel().getSelectedItem().toString().equals("")){
                myList = (ArrayList)ss.ListerMesSujets(session.getId());
            }
            else{
                myList = (ArrayList)ss.MaRechercheAvanceeTheme(session.getId(), texte, moncombotheme.getSelectionModel().getSelectedItem().toString());
            }
            this.init_ma_table(myList);
        }
        
    }

    @FXML
    private void chercherMonTheme(ActionEvent event) {
        SujetService ss = new SujetService();
        String texte = tfmarecherche.getText();
        ArrayList<Sujet> myList;
        if(texte.isEmpty() && moncombotheme.getSelectionModel().getSelectedItem().toString().equals("")){
            myList = (ArrayList)ss.ListerMesSujets(session.getId());
        }
        else if(texte.isEmpty() && !moncombotheme.getSelectionModel().getSelectedItem().toString().equals("")){
            myList = (ArrayList)ss.ListerMesSujetsTheme(session.getId(), moncombotheme.getSelectionModel().getSelectedItem().toString());
        }
        else if(!texte.isEmpty() && moncombotheme.getSelectionModel().getSelectedItem().toString().equals("")){
            myList = (ArrayList)ss.MaRechercheAvancee(session.getId(), texte);
        }
        else{
            myList = (ArrayList)ss.MaRechercheAvanceeTheme(session.getId(), texte, moncombotheme.getSelectionModel().getSelectedItem().toString());
        }
        this.init_ma_table(myList);
    }

    @FXML
    private void choisirUtilisateur(ActionEvent event) {
        btnban.setDisable(false);
    }

    @FXML
    private void bannirUtilisateur(ActionEvent event) throws MessagingException {
        BannissementService bs = new BannissementService();
        UtilisateurServices us = new UtilisateurServices();
        Utilisateur u = us.RecupererUtilisateurLogin(combologinban.getSelectionModel().getSelectedItem().toString());
        if(bs.VerifierBannissementAbonne(u.getID(),this.id_sujet_ban)){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Ce Membre est déja banni de ce Sujet!");

            alert.showAndWait();
        }
        else{
            bs.BanirAbonne(u.getID(), this.id_sujet_ban);
            SujetService ss = new SujetService();
            Sujet s = ss.GetSujet(id_sujet_ban);
            String[] tab = {u.getEMAIL()};
            this.sendFromGMail("your_email_without_@xxx", "your_password", tab, "Bannissement", "Vous avez été banni du Sujet: "+s.getTitre());
        }
        
        
        this.init_table_ban((ArrayList)bs.listerUtilisateursBannis());
        combologinban.getItems().clear();
        btnban.setDisable(true);
    }

    @FXML
    private void choisirTitreBan(ActionEvent event) {
        combologinban.getItems().clear();
        SujetService ss = new SujetService();
        this.id_sujet_ban = viewtitreban.getSelectionModel().getSelectedItem().getID_Sujet();
        ArrayList<String> listeU = (ArrayList)ss.ListerSujetParticipants(this.id_sujet_ban);
        ObservableList options = FXCollections.observableArrayList(listeU);
        combologinban.getItems().addAll(options);
    }

    @FXML
    private void annulerBan(ActionEvent event) throws MessagingException {
        int id_ab = viewban.getSelectionModel().getSelectedItem().getID_Abonne();
        int id_suj = viewban.getSelectionModel().getSelectedItem().getID_Sujet();
        UtilisateurServices us = new UtilisateurServices();
        Utilisateur u = us.RecupererUtilisateurId(id_ab);
        BannissementService bs = new BannissementService();
        bs.AnnulerBannissementAbonne(id_ab, id_suj);
        SujetService ss = new SujetService();
        Sujet s = ss.GetSujet(id_sujet_ban);
        String[] tab = {u.getEMAIL()};
        this.sendFromGMail("your_email_without_@xxx", "your_password", tab, "Bannissement", "Votre bannissement du sujet: "+s.getTitre()+" a été annulé.\nvous pouvez désormais rejoindre la discussion.");
        this.init_table_ban((ArrayList)bs.listerUtilisateursBannis());
    }
    

    @FXML
    private void seDeconnecter(ActionEvent event) throws IOException {
        UtilisateurServices us = new UtilisateurServices();
        us.setLastTimeLogged(session.getId());
        session.CleanUserSession();
        
        Parent pageAuthentification = FXMLLoader.load(getClass().getResource("../GUI_Authentification/AuthentificationFXML.fxml"));
        Scene sceneAuthentification = new Scene(pageAuthentification);
        Stage stage = (Stage)((Node) event.getSource()).getScene().getWindow();
        stage.hide(); 
        stage.setScene(sceneAuthentification);  
        stage.show(); 
    }
    
    
        private static void sendFromGMail(String from, String pass, String[] to, String subject, String body) throws MessagingException {
        Properties props = System.getProperties();
        String host = "smtp.gmail.com";
        props.put("mail.smtp.starttls.enable", "true");
        props.put("mail.smtp.host", host);
        props.put("mail.smtp.user", from);
        props.put("mail.smtp.password", pass);
        props.put("mail.smtp.port", "587");
        props.put("mail.smtp.auth", "true");

        Session session = Session.getDefaultInstance(props);
        MimeMessage message = new MimeMessage(session);

        try {
            message.setFrom(new InternetAddress(from));
            InternetAddress[] toAddress = new InternetAddress[to.length];

            // To get the array of addresses
            for( int i = 0; i < to.length; i++ ) {
                toAddress[i] = new InternetAddress(to[i]);
            }

            for( int i = 0; i < toAddress.length; i++) {
                message.addRecipient(javax.mail.Message.RecipientType.TO, toAddress[i]);
            }

            message.setSubject(subject);
            message.setText(body);
            Transport transport = session.getTransport("smtp");
            transport.connect(host, from, pass);
            transport.sendMessage(message, message.getAllRecipients());
            transport.close();
        }
        catch (AddressException ae) {
            ae.printStackTrace();
        }
        catch (MessagingException me) {
            me.printStackTrace();
        }
    }
   
}
