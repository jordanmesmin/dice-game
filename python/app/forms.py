from django import forms
from .models import Session


# class ConfigurationSession(forms.ModelForm):
#     nombre_joueur = forms.IntegerField(min_value=1, required=True,
#              widget=forms.TextInput(attrs={
#                  'class':'input',
#                  'required':'True'
#              }))
    
#     nombre_des = forms.IntegerField(min_value=1,initial=1,
#              widget=forms.TextInput(attrs={
#                  'class':'input',
#                  'required':'True'
#              }))
    
#     nombre_partie = forms.IntegerField(min_value=1, initial=1,
#              widget=forms.TextInput(attrs={
#                  'class':'input',
#                  'required':'True'
#              }))
    
#     temps_attente = forms.IntegerField(min_value=5, initial=5,
#              widget=forms.TextInput(attrs={
#                  'class':'input',
#                  'required':'True'
#              }))


class ConfigurationSession(forms.Form):
    nombre_joueur = forms.IntegerField(label='Nombre de joueurs', min_value=1)
    nombre_des = forms.IntegerField(label='Nombre de dés', min_value=1)
    nombre_partie = forms.IntegerField(label='Nombre de parties', min_value=1)
    temps_attente = forms.IntegerField(label="Temps d'attente entre chaque partie (en secondes)", min_value=5)