
#  PHP Student API - CI/CD with Jenkins & SonarQube

This project is a simple **PHP + MySQL REST API** to manage student records, enhanced with a complete **CI/CD pipeline** using **Jenkins**, **SonarQube**, and **GitHub**.

---

## 🚀 Tech Stack

| Layer              | Technology               |
|-------------------|--------------------------|
| Language           | PHP                      |
| Database           | MySQL                    |
| Web Server         | Apache (via WAMP/XAMPP)  |
| API Testing        | Postman                  |
| Version Control    | Git + GitHub             |
| CI/CD              | Jenkins                  |
| Code Quality       | SonarQube                |
| Deployment Target  | Localhost (WAMP)         |

---

## 📂 Project Structure
php-student-api-cicd/
├── add_student.php
├── update_phone.php
├── view_student.php
├── view_students.php
├── db_config.php
├── sonar-project.properties
└── README.md


## 📌 Features

- 🔄 **RESTful API** to:
  - Add a student
  - Update phone number
  - View a single student
  - View students by last name
- 🧪 **Postman** collections for testing APIs
- 🔁 **Jenkins pipeline** for automated builds
- ✅ **SonarQube integration** for code quality analysis
- 💡 **Error handling** for SQL operations

---

## 🔧 API Endpoints

## ➕ Add Student

**POST** `/add_student.php`  
```json
{
  "StudentID": 1,
  "FirstName": "Kavindu",
  "LastName": "Lakshan",
  "Address": "123 Main St",
  "PhoneNumber": "0771234567",
  "Height": 175.5
}


🔁 Update Phone Number
{
  "StudentID": 1,
  "PhoneNumber": "0711111111"
}
👤 View Student by ID
{
  "StudentID": 1
}
👥 View All Students with Last Name = "Perera"
GET /view_students.php
