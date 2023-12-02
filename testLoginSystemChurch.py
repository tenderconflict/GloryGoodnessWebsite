from http.server import BaseHTTPRequestHandler, HTTPServer
import sqlite3
from urllib.parse import urlparse, parse_qs






conn = sqlite3.connect('users.db')
cursor = conn.cursor()
cursor.execute('CREATE TABLE IF NOT EXISTS Users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)')
conn.commit()

#It might just be easier to save the password and user
#in c sharp and just have it manual. 
