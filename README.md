# cistude  
Un projet de sciences participatives autour du climat   
![Tortue](http://68.media.tumblr.com/1ba96de42c97eb600f8f4a4a92517b30/tumblr_naqdokxkIz1s2t3cto1_400.gif  "Panda") 


## Installation  
* Configurer un serveur web compatible wordpress  
* Importer la base de donnée  
* git pull
* Récupérer les fichiers et dossiers du .gitignore (wp-config.php, wp-content/uploads/ ...)  
* Dans le réprtoire "www/wp-content/themes/nsobspheno" lancer les commandes suivantes `npm install -g gulp bower` puis `npm install` et `bower install`  
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
* Dans "www/wp-content/themes/nsobspheno" Faire : `gulp watch`  
* Les exports de données en csv se font à l'aide du plugin "WP All Export" (/wp-admin/admin.php?page=pmxe-admin-manage)  
* La création de champs personnalisé se réalise à l'aide du plugin "Advanced Custom Fields" (/wp-admin/edit.php?post_type=acf)  
* Les types de contenus et les catégories personalisées sont créer à partir du fichier functions.php  (www/wp-content/themes/nsobspheno/functions.php)  

### Tips
Si erreur de port avec gulp, faire :  
sudo netstat -lpn |grep :'3000'

and after select the correct id processus kill it with this command :  
sudo kill -9 [id_of_the_proc]
