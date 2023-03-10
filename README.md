# Projet Ada Net 
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white) ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white) ![Apache](https://img.shields.io/badge/apache-%23D42029.svg?style=for-the-badge&logo=apache&logoColor=white)

__*4<sup>ème</sup> projet proposé par [Ada Tech School](https://adatechschool.fr/) : Réseau social PHP*__

## Présentation du projet 
- __Dates:__ du 13 au 23 février 2023
- __Collaborateurs:__ [Hélène Veber](https://github.com/HeleneVeber), [Léon Yi](https://github.com/yileon-ada) et [Anastasia Korotkova](https://github.com/Nastiakor) 
- __Contraintes:__ 
  - Contexte technique imposé 
  - récupérer un projet existant (voir projet de base).
- __Objectifs:__ 
  - Faire un site web dynamique qui construit les pages HTML à la demande grâce à une base de données.
  - Avoir un premier aperçu de la conception web, de la conception base de données et des problématiques d'un projet multi-langagues.
  
## Réalisation du projet
### Refactoring et architecture MVC
   Le projet que nous avons reçu comme base de travail mélangeait 3 languages (PHP, HTML, MySQL) et contenait plusieurs erreurs. 
   Nous avons décidé d'appliquer l'architecture MVC pour réfactoriser le code et le rendre plus professionnel.
   Le MVC(Model-View-Controller) permet de structurer le code de façon modulaire afin qu'il devienne réutilisable et évolutif et de rendre le travail plus accessible en équipe.
   
   ![Capture d’écran du 2023-02-23 16-38-48](https://user-images.githubusercontent.com/114987386/220957861-98af378f-b467-4a9a-b916-35ebc34057d4.png)
   
   
Cette image montre l'organisation de nos fichiers: 
- Le dossier src contient le fichier model où se trouve toutes les requêtes SQL.
- Le dossier templates contient tous les fichiers liés à la vu.
- Le dossier général contient les controleurs.

### Pour une consommation numérique plus résponsable
   Nous avons fait le choix d'un fond noir car un pixel noir consomme jusqu'à 60% d'énergie de moins qu'un pixel blanc.
   
![Capture d’écran du 2023-02-24 10-33-46](https://user-images.githubusercontent.com/114992758/221143931-6f3af06b-b17e-4913-a0c0-ab725c47692a.png)
