# PHP OOP Assignment – User Class with Inheritance and Interfaces

This project demonstrates **Object-Oriented Programming (OOP) concepts in PHP** by creating a simple user management system using **inheritance, interfaces, and abstraction**.

The goal is to:
- Practice **class inheritance** (base `User` class extended by `AdminUser` and `CustomerUser`).
- Implement **interfaces** (`Authenticatable`) to enforce common methods (`login` and `logout`).
- Demonstrate **real-world use cases** like admin user management and customer purchases.

---

## 📂 Project Structure

Assignment/
│
├── src/
│ ├── authentication.php # Interface defining login/logout contract
│ ├── user.php # Abstract base class (common properties and methods)
│ ├── adminUser.php # Admin user class (extends User, adds manage)
│ ├── customerUser.php # Customer user class (extends User, adds purchase)
│ └── index.php # Root script for testing/demo
│
├── README.md # Project documentation

