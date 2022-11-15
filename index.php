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

$Kylian =new Joueur("Kylian","Mbappé",$france,"20-12-1998"); //crééra un objet jouer de nom prenom ,annee de naissance
$Ronaldo =new Joueur("Ronaldo","Cristiano",$portugal ,"5-2-1985"); //crééra un objet jouer de nom prenom ,annee de naissance
$Lionel =new Joueur("Lionel","Messi",$argentina,"24-6-1987"); //crééra un objet jouer de nom prenom ,annee de naissance
$Neymar =new Joueur("Júnior","Neymar",$brazil,"5-2-1992"); //crééra un objet jouer de nom prenom ,annee de naissance

$LionelCrear = new Carear($Lionel,$Barcelone,2004);
$LionelCrear1 = new Carear($Lionel,$psg,2021);

$NeymarCrear = new Carear($Neymar,$Barcelone,2013);
$NeymarCrear1 = new Carear($Neymar,$psg,2017);

$RonaldoCrear = new Carear($Ronaldo,$Manchester,2003);
$RonaldoCrear1 = new Carear($Ronaldo,$Madrid,2009);
$RonaldoCrear1 = new Carear($Ronaldo,$Juventus,2018);

$KylianCrear = new Carear($Kylian,$psg,"20-12-1998",2017);


echo $france->afficheEquipe();
echo '<br>';
echo $espange->afficheEquipe();
echo '<br>';
echo $angleterre->afficheEquipe();
echo '<br>';
echo $italie->afficheEquipe();
echo '<br>';


echo $psg->afficheJoueur();
echo '<br>';
/*
echo $om->afficheJoueur();
echo '<br>';
echo $ol->afficheJoueur();
echo '<br>';
echo $rcsa->afficheJoueur();
echo '<br>';
echo $Madrid->afficheJoueur();
echo '<br>';
echo $Barcelone->afficheJoueur();
echo '<br>';
echo $ManCity->afficheJoueur();
echo '<br>';
echo $Manchester->afficheJoueur();
echo '<br>';
echo $Juventus->afficheJoueur();
*/ 



echo $LionelCrear;
echo $Lionel->afficheListClub();

?>