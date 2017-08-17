# cistude  
Un projet de sciences participatives autour du climat  


## Installation  
* Configurer un serveur web compatible wordpress  
* Importer la base de donnée  
* git pull
* Récupérer les fichiers et dossiers du .gitignore (wp-config.php, wp-content/uploads/ ...)  
* Changer si besoin le chemin de base [tuto1](https://codex.wordpress.org/Changing_The_Site_URL), [tuto2](https://coolestguidesontheplanet.com/updating-wordpress-mysql-database-after-moving-to-a-new-url/)  
* Vérifier que les droits sur les fichiers [doc](https://codex.wordpress.org/fr:Modifier_les_Permissions_sur_les_Fichiers)   


## Documentation  
* Theme utilisé "www/wp-content/themes/nsobspheno" à partir d'un theme blanc pour wordpress [Sage](https://roots.io/sage/)  
* [Documentation dev](https://roots.io/sage/docs/theme-development-and-building/)  
* [Documentation templating](https://roots.io/sage/docs/theme-templates/). Ils sont situés ici "www/wp-content/themes/nsobspheno" et là "www/wp-content/themes/nsobspheno/templates"  
* Le fichier "www/wp-content/themes/nsobspheno/functions.php" contient le code php personalisé  
* Les plugins sont ici : "www/wp-content/plugins"  
* Les assets (js, fonts, css..) sont ici "www/wp-content/themes/nsobspheno/assets"  


### Librairies installés :  
* [Swiper](http://idangero.us/swiper/#.WZVgS1GrRaQ)  

### Usage  
Dans "www/wp-content/themes/nsobspheno" Faire : "gulp watch" 

### Tips
Si erreur de port avec gulp, faire :  
sudo netstat -lpn |grep :'3000'

and after select the correct id processus kill it with this command :  
sudo kill -9 [id_of_the_proc]
