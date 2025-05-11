CRM System (PHP + MySQL)
This is a Customer Relationship Management (CRM) system developed using PHP and MySQL. It provides functionality for managing customers, invoices, and support tickets from a simple web-based interface.
🔧 Features
•	• Secure user login system
•	• Admin dashboard with customer and invoice insights
•	• Manage customer data (add/edit/delete)
•	• Invoice management
•	• Support ticket handling
•	• Responsive UI
🛠 Tech Stack
•	• PHP
•	• MySQL
•	• HTML5 & CSS3
•	• Bootstrap
•	• JavaScript
🚀 Live Demo
👉 Click here to view the live project: https://yourcrm.epizy.com/
📚 How to Use This CRM System Project
✅ Step 1: Clone or Download the Code
Option A: Clone via Git:
git clone https://github.com/YOUR_USERNAME/crm-system.git
cd crm-system

Option B: Download ZIP:
- Click 'Code' > 'Download ZIP' on GitHub
- Extract it on your system
📁 Step 2: Organize Files Properly
Ensure this structure:
crm-system/
├── index.php
├── config/
│   └── Database.php
├── admin/
├── customer/
├── sql/
│   └── database.sql
...
🌍 Step 3: Create Free Hosting on InfinityFree
- Visit https://infinityfree.net
- Create and verify your account
- Create a hosting account
- Access the Control Panel (cPanel)
📤 Step 4: Upload the Project Files
- Open File Manager in cPanel
- Navigate to htdocs/
- Delete default files
- Upload and extract your project ZIP
- Ensure index.php is directly inside htdocs/
🗃️ Step 5: Set Up the MySQL Database
- In cPanel, go to MySQL Databases
- Create a DB and user
- Open PHPMyAdmin
- Select DB > Import > upload database.sql
⚙️ Step 6: Configure Database Connection
- Edit config/Database.php:
$this->conn = new mysqli("sqlXXX.epizy.com", "epiz_XXXXXXX", "your_password", "epiz_XXXXXXX_crm");
🚀 Step 7: Access and Use the CRM
- Visit your CRM URL
- Login with database credentials (e.g. admin/admin)
- Start managing customers and invoices
💬 Optional Enhancements
•	• 🤖 AI Chatbot (using OpenAI or Dialogflow)
•	• 📈 Analytics dashboard with charts
•	• 📁 File uploads for customers or invoices
•	• 📩 Contact and support forms
📬 Contact
Created and maintained by Harsh Mittal
📧 harsh.mittal0142@gmail.com
