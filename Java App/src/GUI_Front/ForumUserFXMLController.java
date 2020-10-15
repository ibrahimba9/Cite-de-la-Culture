/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI_Front;

import Entities.Notification;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Pagination;
import javafx.scene.control.TableView;

import Entities.Sujet;
import Entities.UserSession;
import Services.AppreciationsMessagesService;
import Services.BannissementService;
import Services.SujetService;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import javafx.beans.property.SimpleObjectProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.RadioButton;
import javafx.scene.control.Tab;
import javafx.scene.control.TabPane;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TextField;
import javafx.scene.control.Toggle;
import javafx.scene.control.ToggleGroup;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.stage.Stage;
import Services.InvitationService;
import Services.MessageService;
import Services.UtilisateurServices;
import java.sql.Date;
import java.sql.Timestamp;
import javafx.event.Event;
import javafx.scene.control.Alert;

/**
 * FXML Controller class
 *
 * @author Ibrahim
 */
public class ForumUserFXMLController implements Initializable {
    UserSession session = UserSession.instance;
    
    private final static int rowsPerPage = 5;

    private final TableView<Sujet> table = createTable();
    private final TableView<Sujet> mytable = createMyTable();
    private final TableView<Sujet> invittable = createInvitTable();
    public static TableView<Sujet> tableAux;
    public static TableView<Sujet> tableAux2;
    private List<Sujet> data = createData();
    private List<Sujet> data2 = createMyData();
    private List<Sujet> data3 = createInvitData();
    @FXML
    private Pagination pagination;
    @FXML
    private ComboBox<?> boxTheme;
    @FXML
    private TextField tfchercher;
    @FXML
    private Button btnchercher;
    @FXML
    public static AnchorPane rootPane;
    @FXML
    private ComboBox<?> combotheme;
    @FXML
    private RadioButton radiopublic;
    @FXML
    private RadioButton radioprivate;
    @FXML
    private Button btnajout;
    @FXML
    private TextField tftitreajout;
    
    private static ToggleGroup group;
    private static ToggleGroup group1;
    private static ToggleGroup group2;
    @FXML
    private RadioButton radpublic;
    @FXML
    private RadioButton radprivate;
    @FXML
    private ComboBox<?> mycombotheme;
    @FXML
    private Pagination mypagination;
    @FXML
    private RadioButton myradiopublic;
    @FXML
    private RadioButton myradioprivate;
    @FXML
    private Button mybtnrecherche;
    @FXML
    private TextField mytfrecherche;
    public static ObservableList<Sujet> obs;
    @FXML
    private Button mybtnmodif;
    @FXML
    private Button mybtnsupprimer;
    @FXML
    private TabPane tab;
    @FXML
    private Tab tabrejoindrediscussion;
    @FXML
    private Button btninviter;
    @FXML
    private ComboBox<?> comboinvit;
    @FXML
    private Button btninvit;
    @FXML
    private TextField tfinvit;
    @FXML
    private Pagination paginationinvit;
    @FXML
    private Button btnaccept;
    @FXML
    private Button btnrefus;
    @FXML
    private Button btnlogout;
    @FXML
    private Tab tabNotif;
    @FXML
    private TableView<Notification> viewNotifications;
    
    @FXML
    private TableColumn<?, ?> notifTitre;
    @FXML
    private TableColumn<?, ?> notifActivité;
    @FXML
    private TableColumn<?, ?> notifDate;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        System.out.println(""+session.getLogin());
        
        //Onglet Liste des Sujet
        tableAux = table;
        ObservableList options = FXCollections.observableArrayList("Cinéma","Théâtre","Musique","Art","Dance","Litérature");
        boxTheme.setItems(options);
        boxTheme.setPromptText("Liste des Thèmes");
        
        group1 = new ToggleGroup();
        radpublic.setToggleGroup(group1);
        radpublic.setUserData("public");
        
        radprivate.setToggleGroup(group1);
        radprivate.setUserData("private");
        
        pagination.setPageCount((data.size() / rowsPerPage + 1));
        pagination.setPageFactory(this::createPage);
        
        //Onglet Ajout d'un Sujet
        combotheme.setItems(options);
        combotheme.setPromptText("Liste des Thèmes");
        group = new ToggleGroup();
        
        radiopublic.setSelected(true);
        radiopublic.setToggleGroup(group);
        radiopublic.setUserData("public");
        
        radioprivate.setToggleGroup(group);
        radioprivate.setUserData("private");
        
        //Onglet Mes Sujets
        ObservableList myOptions = FXCollections.observableArrayList("Cinéma","Théâtre","Musique","Art","Dance","Litérature");
        mycombotheme.setItems(myOptions);
        mycombotheme.setPromptText("Liste des Thèmes");
        
        group2 = new ToggleGroup();
        myradiopublic.setToggleGroup(group2);
        myradiopublic.setUserData("public");
        
        myradioprivate.setToggleGroup(group2);
        myradioprivate.setUserData("private");
        
        mypagination.setPageCount((data2.size() / rowsPerPage + 1));
        mypagination.setPageFactory(this::createMyPage);
        
        //Onglet Invitations
        paginationinvit.setPageCount((data3.size() / rowsPerPage + 1));
        paginationinvit.setPageFactory(this::createInvitPage);
        comboinvit.setItems(options);
        comboinvit.setPromptText("Liste des Thèmes");
        
        //Onglet Notifications
        List<Notification> AllNotif = new ArrayList<Notification>();
        AppreciationsMessagesService apps = new AppreciationsMessagesService();
        MessageService ms = new MessageService();
        BannissementService bs = new BannissementService();
        List<Notification> notifsReac = apps.getNotifications(session.getId(), session.getLast_Time_Logged(), session.getLogin_Time());
        List<Notification> notifMsg = ms.getNotifications(session.getId(), session.getLast_Time_Logged(), session.getLogin_Time());
        List<Notification> notifBan = bs.getNotifications(session.getId(), session.getLast_Time_Logged(), session.getLogin_Time());
        AllNotif.addAll(notifsReac);
        AllNotif.addAll(notifMsg);
        AllNotif.addAll(notifBan);
        if(AllNotif.size()>0){
            this.init_Notifications((ArrayList)AllNotif);  
            tabNotif.setText(tabNotif.getText()+" ("+AllNotif.size()+")");
        }
        
    }    
    
    private List<Sujet> createData() {
        SujetService ss = new SujetService();
        
        List<Sujet> data = new ArrayList<>(ss.ListerSujets().size());

        data = ss.ListerSujets();

        return data;
    }
    
    private List<Sujet> createMyData() {
        SujetService ss = new SujetService();
        
        List<Sujet> data = new ArrayList<>(ss.ListerMesSujets(session.getId()).size());

        data = ss.ListerMesSujets(session.getId());

        return data;
    }
    
    private List<Sujet> createInvitData() {
        SujetService ss = new SujetService();
        
        List<Sujet> data = new ArrayList<>(ss.listerSujetsInvitation(session.getId()).size());

        data = ss.listerSujetsInvitation(session.getId());

        return data;
    }

    private TableView<Sujet> createTable()  {

        TableView<Sujet> table = new TableView<>();

        TableColumn<Sujet, String> themec = new TableColumn<>("Theme");
        themec.setCellValueFactory(new PropertyValueFactory<>("Theme"));        
        themec.setPrefWidth(100);
        
        TableColumn<Sujet, String> titrec = new TableColumn<>("Titre");
        titrec.setCellValueFactory(new PropertyValueFactory<>("Titre"));        
        titrec.setPrefWidth(300);
        
        TableColumn<Sujet, String> statutc = new TableColumn<>("Statut");
        statutc.setCellValueFactory(new PropertyValueFactory<>("Statut"));        
        statutc.setPrefWidth(100);
        
        TableColumn<Sujet, String> auteurc = new TableColumn<>("Créé par");
        auteurc.setCellValueFactory(new PropertyValueFactory<>("Auteur"));        
        auteurc.setPrefWidth(100);
        
        TableColumn<Sujet, String> datec = new TableColumn<>("Date de Création");
        datec.setCellValueFactory(new PropertyValueFactory<>("Date_Creation"));        
        datec.setPrefWidth(100);
        
        TableColumn<Sujet, Button> rejoindrec = new TableColumn<>("Accéder à la  Discussion");
        rejoindrec.setCellValueFactory(new PropertyValueFactory<>("Rejoindre"));        
        rejoindrec.setPrefWidth(150);
        
        table.getColumns().addAll(themec, titrec, statutc,auteurc,datec,rejoindrec);

        return table;
    }
    
    
    private TableView<Sujet> createMyTable()  {

        TableView<Sujet> table = new TableView<>();

        TableColumn<Sujet, String> themec = new TableColumn<>("Theme");
        themec.setCellValueFactory(new PropertyValueFactory<>("Theme"));        
        themec.setPrefWidth(100);
        
        TableColumn<Sujet, String> titrec = new TableColumn<>("Titre");
        titrec.setCellValueFactory(new PropertyValueFactory<>("Titre"));        
        titrec.setPrefWidth(300);
        
        TableColumn<Sujet, String> statutc = new TableColumn<>("Statut");
        statutc.setCellValueFactory(new PropertyValueFactory<>("Statut"));        
        statutc.setPrefWidth(100);
        
        TableColumn<Sujet, String> auteurc = new TableColumn<>("Créé par");
        auteurc.setCellValueFactory(new PropertyValueFactory<>("Auteur"));        
        auteurc.setPrefWidth(100);
        
        TableColumn<Sujet, String> datec = new TableColumn<>("Date de Création");
        datec.setCellValueFactory(new PropertyValueFactory<>("Date_Creation"));        
        datec.setPrefWidth(100);
        
            //Début Colonnes Modifiables
        themec.setCellFactory(TextFieldTableCell.<Sujet>forTableColumn());
        
        themec.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setTheme((String)e.getNewValue());
        });
        
        titrec.setCellFactory(TextFieldTableCell.<Sujet>forTableColumn());
        
        titrec.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setTitre((String)e.getNewValue());
        });
        
        statutc.setCellFactory(TextFieldTableCell.<Sujet>forTableColumn());
        
        statutc.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setStatut((String)e.getNewValue());
        });
        
        
            //fin Colonnes Modifiables
            
        

        table.getColumns().addAll(themec, titrec, statutc,auteurc,datec);
        table.setEditable(true);
        
        return table;
    }
    
    private TableView<Sujet> createInvitTable()  {

        TableView<Sujet> table = new TableView<>();

        TableColumn<Sujet, String> themec = new TableColumn<>("Theme");
        themec.setCellValueFactory(new PropertyValueFactory<>("Theme"));        
        themec.setPrefWidth(100);
        
        TableColumn<Sujet, String> titrec = new TableColumn<>("Titre");
        titrec.setCellValueFactory(new PropertyValueFactory<>("Titre"));        
        titrec.setPrefWidth(300);
        
        TableColumn<Sujet, String> statutc = new TableColumn<>("Statut");
        statutc.setCellValueFactory(new PropertyValueFactory<>("Statut"));        
        statutc.setPrefWidth(100);
        
        TableColumn<Sujet, String> auteurc = new TableColumn<>("Créé par");
        auteurc.setCellValueFactory(new PropertyValueFactory<>("Auteur"));        
        auteurc.setPrefWidth(100);
        
        TableColumn<Sujet, String> datec = new TableColumn<>("Date de Création");
        datec.setCellValueFactory(new PropertyValueFactory<>("Date_Creation"));        
        datec.setPrefWidth(100);
        
        TableColumn<Sujet, String> etatc = new TableColumn<>("Etat");
        etatc.setCellValueFactory(new PropertyValueFactory<>("Etat"));        
        etatc.setPrefWidth(150);
        
        table.getColumns().addAll(themec, titrec, statutc,auteurc,datec,etatc);

        return table;
    }

    private Node createPage(int pageIndex) {

        int fromIndex = pageIndex * rowsPerPage;
        int toIndex = Math.min(fromIndex + rowsPerPage, data.size());
        
        table.setItems(FXCollections.observableArrayList(data.subList(fromIndex, toIndex)));
        

        return new BorderPane(table);
    }
    
    private Node createMyPage(int pageIndex) {

        int fromIndex = pageIndex * rowsPerPage;
        int toIndex = Math.min(fromIndex + rowsPerPage, data2.size());
        
        mytable.setItems(FXCollections.observableArrayList(data2.subList(fromIndex, toIndex)));
        

        return new BorderPane(mytable);
    }
    
    private Node createInvitPage(int pageIndex) {

        int fromIndex = pageIndex * rowsPerPage;
        int toIndex = Math.min(fromIndex + rowsPerPage, data3.size());
        
        invittable.setItems(FXCollections.observableArrayList(data3.subList(fromIndex, toIndex)));
        

        return new BorderPane(invittable);
    }
    
    private void init_Notifications(ArrayList myList){
        ObservableList<Notification> obs = FXCollections.observableArrayList(myList);
        
        notifTitre.setCellValueFactory(new PropertyValueFactory<>("Titre"));
        notifActivité.setCellValueFactory(new PropertyValueFactory<>("Texte"));
        notifDate.setCellValueFactory(new PropertyValueFactory<>("Date"));

        viewNotifications.setItems(obs);
    }

    @FXML
    private void ajouterSujet(ActionEvent event) {
        SujetService ss = new SujetService();
        if(tftitreajout.getText().trim().isEmpty()){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Vous devez saisir un titre!");

            alert.showAndWait();
        }
        else{
            if(radiopublic.isSelected()){
            Sujet s = new Sujet(combotheme.getSelectionModel().getSelectedItem().toString(), tftitreajout.getText(), "public", session.getId());
            ss.AjouterSujet(s);
            }
            else if(radioprivate.isSelected()){
                Sujet s = new Sujet(combotheme.getSelectionModel().getSelectedItem().toString(), tftitreajout.getText(), "private", session.getId());
                ss.AjouterSujetPrive(s);
            }
            data = createData();
            pagination.setPageCount((data.size() / rowsPerPage + 1));
            pagination.setPageFactory(this::createPage);

            data2 = createMyData();
            mypagination.setPageCount((data2.size() / rowsPerPage + 1));
            mypagination.setPageFactory(this::createMyPage);

            tab.getSelectionModel().select(tabrejoindrediscussion);
        }
            
    }

    @FXML
    private void chercherSujet(ActionEvent event) {
        if(tfchercher.getText().trim().isEmpty()){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Vous devez saisir Quelque Chose à chercher!");

            alert.showAndWait();
        }
        else{
            String texte = tfchercher.getText();
            SujetService ss = new SujetService();
            ArrayList listSujet = (ArrayList)ss.RechercheAvancee(texte);

            data = listSujet;
            pagination.setPageCount((data.size() / rowsPerPage + 1));
            pagination.setPageFactory(this::createPage);
            tfchercher.clear();
        }
        
    }

    @FXML
    private void chercherMonSujet(ActionEvent event) {
        if(mytfrecherche.getText().trim().isEmpty()){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Vous devez saisir Quelque Chose à chercher!");

            alert.showAndWait();
        }
        else{
            String texte = mytfrecherche.getText();
            SujetService ss = new SujetService();
            ArrayList listSujet = (ArrayList)ss.MaRechercheAvancee(session.getId(),texte);

            data2 = listSujet;
            mypagination.setPageCount((data2.size() / rowsPerPage + 1));
            mypagination.setPageFactory(this::createMyPage);
            mytfrecherche.clear();
        }
        
    }

    @FXML
    private void modifierMonSujet(ActionEvent event) {
        Sujet s = mytable.getSelectionModel().getSelectedItem();
        SujetService ss = new SujetService();
        ss.ModifierSujet(s);
        
        data2 = createMyData();
        mypagination.setPageCount((data2.size() / rowsPerPage + 1));
        mypagination.setPageFactory(this::createMyPage);
        
        data = createData();
        pagination.setPageCount((data.size() / rowsPerPage + 1));
        pagination.setPageFactory(this::createPage);
    }

    @FXML
    private void supprimerMonSujet(ActionEvent event) {
        Sujet s = mytable.getSelectionModel().getSelectedItem();
        SujetService ss = new SujetService();
        ss.SupprimerSujet(s.getID_Sujet());
        
        data2 = createMyData();
        mypagination.setPageCount((data2.size() / rowsPerPage + 1));
        mypagination.setPageFactory(this::createMyPage);
    }

    @FXML
    private void choisirTheme(ActionEvent event) {
        SujetService ss = new SujetService();
        List<Sujet> dataAux = new ArrayList<>();

        if(group1.getSelectedToggle() == radpublic){
            dataAux = ss.ListerSujetsThemeStatut(boxTheme.getSelectionModel().getSelectedItem().toString(),"public");  
        }
        else if(group1.getSelectedToggle() == radprivate){
            dataAux = ss.ListerSujetsThemeStatut(boxTheme.getSelectionModel().getSelectedItem().toString(),"private"); 
        }
        else{
            dataAux = ss.ListerSujetsTheme(boxTheme.getSelectionModel().getSelectedItem().toString());  
        }
        data = dataAux;
        pagination.setPageCount((data.size() / rowsPerPage + 1));
        pagination.setPageFactory(this::createPage);
    }

    @FXML
    private void chercherPublique(ActionEvent event) {
        String[] themeArray = new String[]{"Cinéma","Théâtre","Musique","Art","Dance","Litérature"};
        radprivate.setSelected(false);
        SujetService ss = new SujetService();
        List<Sujet> dataAux = new ArrayList<>();
        
        if(boxTheme.getSelectionModel().isEmpty()){
            dataAux = ss.ListerSujetsStatut("public");
        }
        else{
            dataAux = ss.ListerSujetsThemeStatut(boxTheme.getSelectionModel().getSelectedItem().toString(),"public");
        }
        data = dataAux;
        pagination.setPageCount((data.size() / rowsPerPage + 1));
        pagination.setPageFactory(this::createPage);
    }

    @FXML
    private void chercherPrive(ActionEvent event) {
        radpublic.setSelected(false);
        String[] themeArray = new String[]{"Cinéma","Théâtre","Musique","Art","Dance","Litérature"};
        SujetService ss = new SujetService();
        List<Sujet> dataAux = new ArrayList<>();
        
        if(boxTheme.getSelectionModel().isEmpty()){
            dataAux = ss.ListerSujetsStatut("private");
        }
        else{
            dataAux = ss.ListerSujetsThemeStatut(boxTheme.getSelectionModel().getSelectedItem().toString(),"private");
        }
        data = dataAux;
        pagination.setPageCount((data.size() / rowsPerPage + 1));
        pagination.setPageFactory(this::createPage);
    }

    @FXML
    private void choisirMonTheme(ActionEvent event) {
        SujetService ss = new SujetService();
        List<Sujet> dataAux = new ArrayList<>();

        if(group2.getSelectedToggle() == myradiopublic){
            dataAux = ss.ListerMesSujetsThemeStatut(session.getId(),mycombotheme.getSelectionModel().getSelectedItem().toString(),"public");  
        }
        else if(group2.getSelectedToggle() == myradioprivate){
            dataAux = ss.ListerMesSujetsThemeStatut(session.getId(),mycombotheme.getSelectionModel().getSelectedItem().toString(),"private"); 
        }
        else{
            dataAux = ss.ListerMesSujetsTheme(session.getId(),mycombotheme.getSelectionModel().getSelectedItem().toString());  
        }
        data2 = dataAux;
        mypagination.setPageCount((data2.size() / rowsPerPage + 1));
        mypagination.setPageFactory(this::createMyPage);
    }

    @FXML
    private void choisirPublic(ActionEvent event) {
        String[] themeArray = new String[]{"Cinéma","Théâtre","Musique","Art","Dance","Litérature"};
        myradioprivate.setSelected(false);
        SujetService ss = new SujetService();
        List<Sujet> dataAux = new ArrayList<>();
        
        if(mycombotheme.getSelectionModel().isEmpty()){
            dataAux = ss.ListerMesSujetsStatut(session.getId(),"public");
        }
        else{
            dataAux = ss.ListerMesSujetsThemeStatut(session.getId(),mycombotheme.getSelectionModel().getSelectedItem().toString(),"public");
        }
        data2 = dataAux;
        mypagination.setPageCount((data2.size() / rowsPerPage + 1));
        mypagination.setPageFactory(this::createMyPage);
    }

    @FXML
    private void choisirPrivate(ActionEvent event) {
        String[] themeArray = new String[]{"Cinéma","Théâtre","Musique","Art","Dance","Litérature"};
        myradiopublic.setSelected(false);
        SujetService ss = new SujetService();
        List<Sujet> dataAux = new ArrayList<>();
        
        if(mycombotheme.getSelectionModel().isEmpty()){
            dataAux = ss.ListerMesSujetsStatut(session.getId(),"private");
        }
        else{
            dataAux = ss.ListerMesSujetsThemeStatut(session.getId(),mycombotheme.getSelectionModel().getSelectedItem().toString(),"private");
        }
        data2 = dataAux;
        mypagination.setPageCount((data2.size() / rowsPerPage + 1));
        mypagination.setPageFactory(this::createMyPage);
    }

    @FXML
    private void filtrerInvitations(ActionEvent event) {
        SujetService ss = new SujetService();
        List<Sujet> dataAux = new ArrayList<>();

        dataAux = ss.listerSujetsInvitationTheme(session.getId(),boxTheme.getSelectionModel().getSelectedItem().toString());  
        
        data3 = dataAux;
        paginationinvit.setPageCount((data3.size() / rowsPerPage + 1));
        paginationinvit.setPageFactory(this::createInvitPage);
    }

    @FXML
    private void chercherInvitation(ActionEvent event) {
        if(tfinvit.getText().trim().isEmpty()){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Vous devez saisir Quelque Chose à chercher!");

            alert.showAndWait();
        }
        else{
            String texte = tfinvit.getText();
            SujetService ss = new SujetService();
            ArrayList listSujet = (ArrayList)ss.RechercheAvanceeInvit(session.getId(),texte);

            data3 = listSujet;
            paginationinvit.setPageCount((data3.size() / rowsPerPage + 1));
            paginationinvit.setPageFactory(this::createInvitPage);
        }
        
    }

    @FXML
    private void accepterInvitation(ActionEvent event) {
        Sujet s = invittable.getSelectionModel().getSelectedItem();
        InvitationService is = new InvitationService();
        is.accepterInviter(session.getId(),s.getID_Sujet() );
        
        data3 = createInvitData();
        paginationinvit.setPageCount((data3.size() / rowsPerPage + 1));
        paginationinvit.setPageFactory(this::createInvitPage);
    }

    @FXML
    private void refuserInvitation(ActionEvent event) {
        Sujet s = invittable.getSelectionModel().getSelectedItem();
        InvitationService is = new InvitationService();
        is.refuserInviter(session.getId(),s.getID_Sujet() );
        
        data3 = createInvitData();
        paginationinvit.setPageCount((data3.size() / rowsPerPage + 1));
        paginationinvit.setPageFactory(this::createInvitPage);
    }

    @FXML
    private void inviterAbonne(ActionEvent event) throws IOException {
        if(mytable.getSelectionModel().isEmpty()){
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Erreur!");
            alert.setHeaderText(null);
            alert.setContentText("Vous devez saisir sélectionner un Utilisateur!");

            alert.showAndWait();
        }
        else{
            FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("InviterForumFXML.fxml")); 
            Parent root = (Parent)fxmlLoader.load();
            InviterForumFXMLController dController = fxmlLoader.<InviterForumFXMLController>getController();
            dController.setIdSujet(mytable.getSelectionModel().getSelectedItem().getID_Sujet());
            
            //Parent pageInvit = FXMLLoader.load(getClass().getResource("InviterForumFXML.fxml"));
            Scene sceneInvit = new Scene(root); 
            Stage stage = (Stage)((Node) event.getSource()).getScene().getWindow();
            stage.setScene(sceneInvit);  
            stage.show(); 
        }
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

    @FXML
    private void afficherNotifs(Event event) {
        tabNotif.setText("Notifications");
    }


    
    
    
}
