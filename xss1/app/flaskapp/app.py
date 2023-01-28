from flask import Flask
from flask import Flask, render_template, request, url_for, redirect, g
import cgi


app = Flask(__name__)


@app.route('/get_xss', methods=['GET'])
def get_xss():
    name = 'lecuture reflect!!!!!!!!!!!!!'
    message = 'reflect xss is Fake e-mails or fake websites with links containing malicious scripts that cause users to request vulnerable websites.'

    return render_template('home.html', message=message, name=name)


@app.route('/xss_1', methods=['GET', 'POST'])
def xss_1_get():
    name = request.form.get('name')
    message = 'input strings'
    return render_template('xss_1_vul.html', message=message, name=name)


@app.route('/xss_1', methods=['GET', 'POST'])
def xss_1_post():
    if request.methods == "POST":
        name = request.form.get('name')
    else:
        name = "no name."

    return render_template('xss_1_vul.html', title='registed', message='hello!{}'.format(name))



@app.route('/xss1')
def xss1(user=''):
    username = request.query.get('user')
    username = '' if username is None else username

    html = "<h2> Hello {name} </h2>".format(name=username)

    return html


if __name__ == "__main__":
    app.run(host='localhost')
