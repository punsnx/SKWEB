from flask import Flask,render_template
app = Flask(__name__)

@app.route("/home")
def index():
    return render_template(index.php)
app.add_url_rule("/", "home", index)

if __name__ == "__main__" :
    app.run(debug=True)