from flask import Flask, render_template

app = Flask(__name__, static_folder='./templates/images') 
@app.route('/')
def index():
    #img_path1 = 'images/reflected-xss.png'
    #img_path2 = 'images/vuluable.png'
    return render_template('home.html')

@app.route('/<name>')
def hello(name):
    return render_template('hello.html', title='呼び出し側でタイトル設定', name=name)

if __name__ == "__main__":
    app.run(debug=True, host='0.0.0.0', port=8000)