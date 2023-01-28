from django.shortcuts import render
from django.http.response import HttpResponse
from django.views.generic import TemplateView
from .forms import ReviewForm
# Create your views here.


def __init__(self):
    self.params = {
        'title': 'security',
        'message': 'your data',
        'form': ReviewForm()
    }


def index_sample(request):
    return render(request, 'myapp/index_sample.html')


def start(request):
    params = {
        'title': 'Read book',
        'msg': 'レイヤー',
        'bin': 'binary',
        'web': 'webapplication',
        'crypto': 'cryptograph',
        'net': 'network',
    }
    return render(request, 'myapp/start.html', params)


def bin(request):

    params = {
        'title': 'binary',
        'msg': 'data:',
        'goto': 'start',
        'form': ReviewForm()
    }
    if(request.method == 'POST'):
        params['msg'] = 'タイトル:' + request.POST['name'] + '<br>分類:' + \
            request.POST['type']+'<br>感想:' + \
            request.POST['review'] + '<br>参考URL:' + request.POST['url']

        params['form'] = ReviewForm(request.POST)
    return render(request, 'myapp/bin.html', params)


def web(request):
    params = {
        'title': 'web',
        'msg': 'data:',
        'goto': 'start',
        'form': ReviewForm()
    }
    if(request.method == 'POST'):
        params['msg'] = 'タイトル:' + request.POST['name'] + '<br>分類:' + \
            request.POST['type']+'<br>感想:' + \
            request.POST['review'] + '<br>参考URL:' + request.POST['url']

        params['form'] = ReviewForm(request.POST)
    return render(request, 'myapp/web.html', params)


def crypto(request):
    params = {
        'goto': 'start',
    }
    return render(request, 'myapp/start.html', params)


class SampleTemplate(TemplateView):
    template_name = "index.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["title"] = "MyPage"
        return context
