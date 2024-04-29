#This page is the code for the functionality of the system that tests the login system. This page reads values
#from a text file and quickly puts them into the login system. This is quicker than inputing them manually.
import requests
from datetime import datetime, timedelta

# Define the URL of the login page
login_url = 'https://glorygoodnesschurch.com/Church/loginChurch.php'

# Dictionary to store login attempts and last login time for each username
session_data = {}

def test_login(username, password):
    # Create a session object
    session = requests.Session()

    # Create a dictionary with the login credentials
    data = {'username': username, 'password': password, 'login': 'Log In'}

    # Send a POST request to the login page
    response = session.post(login_url, data=data)

    final_response_text = response.text

    # Check if the user has exceeded the login attempts limit
    if username not in session_data:
        session_data[username] = {'attempts': 0, 'last_login_time': None}

    if session_data[username]['attempts'] >= 5:
        if session_data[username]['last_login_time'] is not None and \
           datetime.now() - session_data[username]['last_login_time'] < timedelta(minutes=10):
            # Too many login attempts within 10 minutes
            return f"Too many login attempts for username: {username}"
        else:
            session_data[username]['attempts'] = 0

    session_data[username]['last_login_time'] = datetime.now()
    session_data[username]['attempts'] += 1

    # Check the final response content and status code
    if 'Welcome' in final_response_text:
        return f"Login successful for username: {username} with password: {password}"
    elif 'Too many login attempts' in final_response_text:
        return f"Too many login attempts for username: {username}"
    elif 'Invalid username or password' in final_response_text:
        return f"Login failed for username: {username} with password: {password}"
    elif response.status_code == 302:  # Successful redirect
        return f"Login successful for username: {username} with password: {password}"
    else:
        return f"Unexpected response for username: {username} with password: {password}"

def read_test_cases(file_path):
    test_cases = []
    with open(file_path, 'r') as file:
        for line in file:
            # Skip empty lines
            if line.strip():
                username, password = line.strip().split(',')
                test_cases.append((username, password))
    return test_cases

# Read test cases from the file
test_cases = read_test_cases('test_cases.txt')

# Run tests and store the results
results = []
for username, password in test_cases:
    result = test_login(username, password)
    results.append(result)

# Print the results, each on a new line
for result in results:
    print(result)