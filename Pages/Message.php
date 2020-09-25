<?php
if(isset($_GET['conversation_id'])){
    $conversation_id = $_GET['conversation_id'];
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <link rel="stylesheet" type="text/css" href="../Style/Header_Footer.css">
    <link rel="stylesheet" type="text/css" href="../Style/Message/Message.css">
    <link rel="stylesheet" type="text/css" href="../Pages/Connexion/Style.css">
</head>
<body>
<!--Header-->
<?php include"../Style/Header.php" ?>

<div id="messages_window">
    <div id="left_panel" class="block">
        <div id="conversations_list">
            <?php
            $resultat = recup_liste_conversations($_SESSION['id']);
            if(empty($resultat)){
                echo "<div class='conversation'>
                                <div class='conversation_title'>Aucune conversation</div>
                              </div>";
            }
            else{
                foreach($resultat as $element){
                    $titre_conversation = $element['title'];
                    $id_conversation = $element['id'];
                    echo "<div class='conversation' style=\"cursor: pointer;\" onclick=\"window.location='?conversation_id=$id_conversation';\">
                                    <div class='conversation_title'>".$titre_conversation."</div>
                                  </div>";
                }
            }
            ?>
        </div>
        <?php
        echo "<div id='create_conversation' style=\"cursor: pointer;\" onclick=\"window.location='?creation_conv';\">
                <div class='conversation_title_creation'>Créer une nouvelle conversation</div>
            </div>";
        ?>
    </div>
    <!--FIN CONVERSATION PANEL -->
    <div id="right_panel" class="block">
        <div id="conversation_title">
            <?php
            if(!empty($conversation_id)) {
                echo $conversation_id;
            }
            ?>
        </div>
        <div id="messages_list">
            <?php
            if(!empty($conversation_id)){
                $user_id = $_SESSION['id'];
                $tab_messages = recup_messages_conversation($conversation_id, $user_id);
                if(empty($tab_messages)){
                    echo "AUCUN MESSAGES";
                }
                else{
                    foreach($tab_messages as $element){
                        $sender_username = recup_username_utilisateur($element['sender_user_id']);
                        $text = $element['text'];
                        $creation_date = $element['creation_date'];
                        echo $sender_username.": ".$text." (".$creation_date.")</br>";
                    }
                }
            }
            ?>
        </div>
        <div id="message_text_field">
            <form method="POST">
                <textarea type="textarea" id="message_input" name="textarea"></textarea>
                <input type="submit" value="Envoyer" style="height: 50px">
            </form>
        </div>
    </div>
    <br clear="both" />
</div>
</body>
</html>