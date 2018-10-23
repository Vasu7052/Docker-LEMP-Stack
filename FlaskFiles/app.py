from flask import Flask

# the all-important app variable:
app = Flask(__name__)

@app.route("/")
def hello():
    return "<h1 align=\"center\">Welcome, This is a Flask Application</h1>"

if __name__ == "__main__":
	app.run(host='0.0.0.0', debug=True, port=80)
