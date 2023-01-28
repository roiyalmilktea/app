from django import forms


class ReviewForm(forms.Form):
    name = forms.CharField(label='name', widget=forms.TextInput(
        attrs={'class': 'form-control'}))
    type = forms.CharField(label='type', widget=forms.TextInput(
        attrs={'class': 'form-control'}))
    review = forms.CharField(label='review', widget=forms.TextInput(
        attrs={'class': 'form-control'}))
    url = forms.CharField(label='url', widget=forms.TextInput(
        attrs={'class': 'form-control'}))
