<?php
include("config.php");
include("db.php");
//require_once 'swift_required.php';

function mail_rappel($address){
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, "ssl")
  ->setUsername('bdsf.neverreply@gmail.com')
  ->setPassword('bdsf2017');
    $mailer = Swift_Mailer::newInstance($transport);
    $message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('bdsf.neverreply@gmail.com' => 'BDSF'))
  ->setTo(array('sylvain.maret@hotmail.fr'))
  ->setBody('This is a test mail rappel.\n Pense à le changer si ça marche!');
$result = $mailer->send($message);
echo $result;
}

function mail_retard($address){
       $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('bdsf.neverreply@gmail.com')
  ->setPassword('bdsf2017');
    $mailer = Swift_Mailer::newInstance($transport);
    $message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('bdsf.neverreply@gmail.com' => 'BDSF'))
  ->setTo(array('sylvain.maret@hotmail.fr'))
  ->setBody('This is a test mail retard.\n Pense à le changer si ça marche!');
$result = $mailer->send($message);    
echo $result;
}

function verify(){/*vérifie la durée restante des emprunts en cours*/
    shell_exec('echo lol;');
    $db=db_connect();
    $query = "SELECT emprunts.date_retour,emprunts.id_eleve FROM emprunts WHERE emprunts.etat_emprunte = 1";
    $res = db_query($db,$query);
    while ($row = db_fetch($res)){
        $datereturn = new DateTime('$row[0]');
        $today = new DateTime("now");
        $interval = $today->diff($datereturn);
        if ( $interval  = 3 ){
            $query2="SELECT mail FROM Eleves WHERE pk_eleves = $row[1]";
            mail_rappel($query2);
        }
        if( $interval <= 0 ){
            $query2="SELECT mail FROM Eleves WHERE pk_eleves = $row[1]";
            echo "pd";
            mail_retard($query2);
        }
        
    }
    db_close($db);
}

?>
