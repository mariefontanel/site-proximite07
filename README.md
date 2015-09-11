# site-proximite07
#Lancer le site en local sur sa machine

#Prérequis :

-Installer Xampp (suivre le tuto : http://doc.ubuntu-fr.org/xampp)

-Attention le dossier "htdocs" ou votre répertoire d'installation ne sera accessible en lecture et en écriture que si vous accordez les privilèges avec ces commandes : sudo chmod -R 755 /opt/lampp/htdocs.


#Aller dans votre Terminal :
> Tapez  à la racine de votre machine : cd /opt/lampp/htdocs
> Puis, cloner le repo "site-proximite07" avec la commande : git clone https://github.com/pipay07/site-proximite07.git


#Dans le terminal, lancer le serveur en local (localhost):
> sudo /opt/lampp/lampp start
> pour fermer sudo /opt/lampp/lampp stop

#Aller dans votre navigateur habituel :
>Tapez localhost/site-proximite07


