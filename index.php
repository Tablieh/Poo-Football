<?php
spl_autoload_register(function ($class_name) {
    include 'CTRLS/'.$class_name . '.php';
});

$france = new Pays("France"); //crééra un objet pays de ville France 
$espange = new Pays("Espange"); //crééra un objet pays de ville Espange 
$angleterre = new Pays("Angleterre"); //crééra un objet pays de ville Angleterre 
$italie = new Pays("Italie"); //crééra un objet pays de ville Italie
$brazil = new Pays("Brazil"); //crééra un objet pays de ville Brazil
$argentina = new Pays("Argentina"); //crééra un objet pays de ville Argentina
$portugal = new Pays("Portugal"); //crééra un objet pays de ville Portugal


$psg = new Equipe("Paris Saint-Germain F.C.",$france,1970); //crééra un objet Equipe de ville France et nom club : Paris Saint-Germain F.C. , anne de club
$om = new Equipe("Olympique de Marseille",$france,1899); //crééra un objet Equipe de ville France et nom club : Olympique de Marseille , anne de club
$ol = new Equipe("Olympique Lyonnais",$france,1950); //crééra un objet Equipe de ville France et nom club : Olympique Lyonnais , anne de club
$rcsa= new Equipe("RC Strasbourg Alsace",$france,1906); //crééra un objet Equipe de ville France et nom club : RC Strasbourg Alsace , anne de club

$Madrid = new Equipe("Real Madrid",$espange,1902); //crééra un objet Equipe de ville Espange et nom club : Real Madrid , anne de club
$Barcelone = new Equipe("Fc Barcelone",$espange,1899); //crééra un objet Equipe de ville Espange et nom club : Fc Barcelone , anne de club

$ManCity = new Equipe("Manchester City F.C.",$angleterre,1880); //crééra un objet Equipe de ville Angleterre et nom club : "Manchester City F.C." , anne de club
$Manchester = new Equipe("Manchester united",$angleterre,1902); //crééra un objet Equipe de ville Angleterre et nom club : Manchester united , anne de club
$Juventus = new Equipe("Juventus F.C.",$italie,1897); //crééra un objet Equipe de ville Italie et nom club : Juventus F.C. , anne de club

$Kylian =new Joueur("Kylian","Mbappé",$france,24); //crééra un objet jouer de nom prenom ,annee de naissance
$Ronaldo =new Joueur("Ronaldo","Cristiano",$portugal ,37); //crééra un objet jouer de nom prenom ,annee de naissance
$Lionel =new Joueur("Lionel","Messi",$argentina,35); //crééra un objet jouer de nom prenom ,annee de naissance
$Neymar =new Joueur("Júnior","Neymar",$brazil,30); //crééra un objet jouer de nom prenom ,annee de naissance


$res1= new ClubParJoueur($psg,$Kylian,2017); //psg joueur
$res2= new ClubParJoueur($psg,$Lionel,2021); //psg joueur
$res3= new ClubParJoueur($psg,$Neymar,2017); //psg joueur

$res4= new ClubParJoueur($Barcelone,$Lionel,2004); //Barcelone joueur
$res5= new ClubParJoueur($Barcelone,$Neymar,2013); //Barcelone joueur

$res6= new ClubParJoueur($Juventus,$Ronaldo,2018); //Juventus joueur


$res7= new ClubParJoueur($Madrid,$Ronaldo,2009); //Real joueur
$res8= new ClubParJoueur($Manchester,$Ronaldo,2021); //Manchester joueur

$player1=new JoueurParClub($Kylian,$res1); //Kylian crear

$player2=new JoueurParClub($Ronaldo,$res7); // Ronaldo crear
$player3=new JoueurParClub($Ronaldo,$res6); // Ronaldo crear
$player4=new JoueurParClub($Ronaldo,$res8); // Ronaldo crear

$player5=new JoueurParClub($Lionel,$res4); // Messi crear
$player6=new JoueurParClub($Lionel,$res2); // Messi crear

$player7=new JoueurParClub($Neymar,$res5); // Neymar crear
$player8=new JoueurParClub($Neymar,$res3); // Neymar crear


echo $france->afficheEquipe();
?>