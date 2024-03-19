from flask import Flask, render_template, request, redirect, url_for
import mysql.connector

app = Flask(__name__)

db_host = 'localhost'
db_user = 'root'
db_password = ''
db_name = 'hunger'

def get_db_connection():
    return mysql.connector.connect(host=db_host, user=db_user, password=db_password, database=db_name)

@app.route('/')
def index():
    return render_template('home.html')

@app.route('/login')
def loginForm():
    return render_template('login.html')

@app.route('/login', methods =['GET', 'POST'])
def login():
    if request.method == 'POST':
        email = request.form['email']
        password = request.form['password']

        try:
            connection = get_db_connection()
            cur = connection.cursor(dictionary=True)
            cur.execute("SELECT * FROM donorregister WHERE email = %s", (email,))
            user1 = cur.fetchone()
            cur.execute("SELECT * FROM recieverregister WHERE email = %s", (email,))
            user2 = cur.fetchone()
            if user1:
                if password == user1['password']:  
                    return render_template('home.html')
                else:
                    return "Incorrect password!"
            elif user2:
                if password == user2['password']:  
                    return render_template('home.html')
                else:
                    return "Incorrect password!"
            else:
                return "User not found!"
        except mysql.connector.Error as error:
            return "Error occurred while logging in: " + str(error)

@app.route('/donator')
def donator():
    return render_template('donator.html')  

message='Thankyou for your donation...'
@app.route('/submit_donation', methods=['POST'])
def submit_donation():
    if request.method == 'POST':
        quantity = request.form['quantity']
        description = request.form['description']

        try:
            connection = get_db_connection()
            cursor = connection.cursor()
            cursor.execute("INSERT INTO donations (quantity, description) VALUES (%s, %s)", (quantity, description))
            connection.commit()
            cursor.close()
            connection.close()
            return render_template('home.html', message=message)
        except mysql.connector.Error as error:
            return "Error occurred while submitting donation: " + str(error)

@app.route('/claim')
def claim():
    try:
        connection = get_db_connection()
        cursor = connection.cursor(dictionary=True)
        cursor.execute("SELECT * FROM donations")
        donations = cursor.fetchall()
        cursor.close()
        connection.close()
        return render_template('claim.html', donations=donations)
    except mysql.connector.Error as error:
        return "Error occurred while fetching donations: " + str(error) 
 


@app.route('/donorRegister')
def register_form1():
    return render_template('donorRegister.html')

@app.route('/register1', methods=['POST'])
def register1():
    if request.method == 'POST':
        restro_name = request.form['restroName']
        email = request.form['email']
        phone = request.form['phone']
        address = request.form['add']
        password = request.form['pass']
        confirm_password = request.form['Cpass']

        if password != confirm_password:
            return "Passwords do not match"

        try:
            connection = get_db_connection()
            cursor = connection.cursor()
            cursor.execute("SELECT * FROM donorregister WHERE email = %s", (email,))
            existing_user = cursor.fetchone()
            if existing_user:
                return "Email already exists. Please use a different email."
            cursor.execute("INSERT INTO donorregister (restro_name, email, phone, address, password) VALUES (%s, %s, %s, %s, %s)",
                           (restro_name, email, phone, address, password))
            connection.commit()
            cursor.close()
            connection.close()
            return render_template('login.html')
        except mysql.connector.Error as error:
            return "Error occurred while registering: " + str(error)
        

@app.route('/recieverRegister')
def register_form2():
    return render_template('recieverRegister.html')

@app.route('/register', methods=['POST'])
def register():
    if request.method == 'POST':
        org_name = request.form['Name']
        email = request.form['email']
        phone = request.form['phone']
        address = request.form['add']
        password = request.form['pass']
        confirm_password = request.form['Cpass']

        if password != confirm_password:
            return "Passwords do not match"

        try:
            connection = get_db_connection()
            cursor = connection.cursor()
            cursor.execute("SELECT * FROM recieverregister WHERE email = %s", (email,))
            existing_user = cursor.fetchone()
            if existing_user:
                return "Email already exists. Please use a different email."
            cursor.execute("INSERT INTO recieverregister (org_name, email, phone, address, password) VALUES (%s, %s, %s, %s, %s)",
                           (org_name, email, phone, address, password))
            connection.commit()
            cursor.close()
            connection.close()

            return render_template('login.html')
        except mysql.connector.Error as error:
            return "Error occurred while registering: " + str(error)


if __name__ == '__main__':
    app.run(debug=True)