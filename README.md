# 📚 Online Question Paper Generation & Management System

This project is a complete **Online Question Paper Generation and Faculty Management System** that allows administrators and staff to manage question banks, generate question papers based on filters (e.g., subject, difficulty), and manage department/course/staff details using a web interface. Faculty authentication, email communication, and CRUD operations are core to this platform.

![PHP](https://img.shields.io/badge/Backend-PHP-blue?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/Database-MySQL-brightgreen?style=for-the-badge&logo=mysql)
![HTML](https://img.shields.io/badge/Frontend-HTML%2FCSS-orange?style=for-the-badge&logo=html5)
![Bootstrap](https://img.shields.io/badge/UI-Bootstrap-lightblue?style=for-the-badge&logo=bootstrap)
![Mail](https://img.shields.io/badge/Email%20Service-PHPMailer-red?style=for-the-badge&logo=gmail)

---

## 🧩 Features

### 🧑‍💼 Admin Features
- Add/update/delete **courses**, **departments**, and **faculty/staff**
- Create and maintain a **question bank** with tags: subject, level, marks, etc.
- Generate question papers using filters like **unit**, **level**, and **marks**
- View all records and modify dynamically
- Manage user access (login credentials for staff)

### 👨‍🏫 Faculty Features
- Login securely using assigned credentials
- Add, update, or delete questions
- View question banks and subjects
- Submit questions for approval

### 💌 Email Module
- Contact form integrated using **PHPMailer**
- Emails sent on form submission
- Auto-responders and error handling

---

## 🗃️ Database Schema (MariaDB/MySQL)

- **login**: Username & password for all users
- **validstaff**: Authorized staff details
- **dept**: Department information (with status)
- **course**: Course code and names
- **questions**: Main question bank table
- **reglogin**: Registered login entries
- **empdetails**: Staff directory & access details

> Tables are created and modified using `database.php`, `db.php`, and managed with UI via `*.php` files.

---

## 🔧 Setup Instructions

### Prerequisites

- XAMPP or LAMP stack with PHP & MySQL
- Browser (Chrome recommended)
- Internet for loading external CSS & JS

### Steps

1. Clone or download the project folder into your XAMPP/LAMP `htdocs` directory.
2. Import the database:
   - Open `phpMyAdmin`
   - Create a DB named `mini`
   - Use the `databasetables.txt` as reference to create required tables and insert sample data
3. Update database credentials in `db.php` and `database.php` as per your local config.
4. Start Apache and MySQL via XAMPP and navigate to: http://localhost/index.php

---

## 👨‍💻 Developer

**Srivarini Mandali**  
🔗 [GitHub](https://github.com/srivarinimandali)


