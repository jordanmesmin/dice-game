from django.shortcuts import render, redirect
from .forms import ConfigurationSession
from .models import Session

# Create your views here.

# def index(request):
#     form = ConfigurationSession(request.POST)
#     if form.is_valid():
#         form.save(),
#         form = ConfigurationSession()

#         context = {
#             'nombre_joueur':form,
#             'nombre_de':form,
#             'nombre_partie':form,
#             'temps_attente':form
#         }
#     return render(request, 'index.html', context)

def index(request):
    if request.method == 'POST':
        form = ConfigurationSession(request.POST)
        if form.is_valid():
            Session.objects.create(
                nombre_joueur = form.cleaned_data['nombre_joueur'],
                nombre_des = form.cleaned_data['nombre_des'],
                nombre_partie = form.cleaned_data['nombre_partie'],
                temps_attente = form.cleaned_data['temps_attente']
            )
            return redirect('success') 
    else:
        form = ConfigurationSession()

    return render(request, 'index.html', {'form': form}) 

def success_view(request):
    return render(request, 'success_view.html')