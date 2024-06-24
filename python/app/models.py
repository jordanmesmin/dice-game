from django.db import models
from django.utils import timezone

# Create your models here.

from django.db import models
from django.contrib.auth.models import User

# Modèle pour représenter un joueur
class Joueur(models.Model):
    date_connexion = models.DateTimeField(default=timezone.now)
    motDePasse = models.CharField(max_length=128)
    pseudo = models.CharField(max_length=50)

    # models.OneToOneField(User, on_delete=models.CASCADE, null=True, blank=True)

    def __str__(self):
        return self.pseudo

# Modèle pour représenter une session de jeu
class Session(models.Model):
    nombre_joueur = models.IntegerField()
    nombre_des = models.IntegerField()
    nombre_partie = models.IntegerField()
    temps_attente = models.IntegerField()
    date_debut = models.DateTimeField(default=timezone.now)
    date_fin = models.DateTimeField(default=timezone.now)
    # joueur_createur = models.ForeignKey(Joueur, on_delete=models.CASCADE, related_name='sessions_crees')
    joueurs_challengers = models.ManyToManyField(Joueur, related_name='sessions_rejointes')

    def __str__(self):
        return f"Session {self.id} - créée par {self.joueur_createur.nom}"

# Modèle pour représenter une partie de jeu
class Partie(models.Model):
    date_debut = models.DateTimeField(auto_now_add=True)
    date_fin = models.DateTimeField(default=timezone.now)
    session = models.ForeignKey(Session, on_delete=models.CASCADE, related_name='parties')
    joueur = models.ForeignKey(Joueur, on_delete=models.CASCADE)
    score = models.IntegerField()

    def __str__(self):
        return f"Partie {self.id} - Joueur: {self.joueur.nom}, Score: {self.score}"


