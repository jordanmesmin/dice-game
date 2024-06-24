from django.contrib import admin
from .models import Joueur
from .models import  Session
from .models import Partie

# Register your models here.
admin.site.register(Joueur)
admin.site.register(Partie)
admin.site.register(Session)
