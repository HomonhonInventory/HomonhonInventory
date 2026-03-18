# 🏗️ Goldrich Warehouse Inventory System

A functional, real-time Warehouse and Fuel Management System designed for logistics and construction projects. This system tracks stock inflows, withdrawals, and department-based costing with a focus on ease of use and data integrity.

---

## 🚀 Key Features

* **Real-Time Inventory Tracking:** Monitor stock levels, specifications, and unit prices.
* **Request Management:** Integrated "Request Item Form (RF)" with priority levels (Urgent vs. Stock).
* **Withdrawal System:** Track who took what and for what purpose (Maintenance, Repair, etc.).
* **Fuel Management:** Dedicated module for Diesel Inventory.
* **Financial Analytics:** Automatic calculation of Department Costing and total stock value.
* **Secure Access:** Role-based access control (Admin, Staff, Viewer).

---

## 🛠️ Tech Stack

* **Frontend:** HTML5, CSS3 (Custom Responsive Sidebar), JavaScript (Live Search)
* **Backend:** PHP 8.x
* **Database:** MySQL / MariaDB
* **UI Components:** Custom Modals for data entry

---

## 📦 Installation & Setup

1.  **Clone the Repository:**
    ```bash
    git clone [https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git](https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git)
    ```

2.  **Database Configuration:**
    * Create a MySQL database named `goldrich_inventory` (or your preferred name).
    * Import the provided `.sql` dump (if available) or create tables for `inventory`, `users`, and `requests`.
    * Rename `db.sample.php` to `db.php` and update your credentials:
    ```php
    $conn = new mysqli("localhost", "root", "password", "database_name");
    ```

3.  **Deployment:**
    * Move the folder to your local server directory (e.g., `htdocs` for XAMPP).
    * Open your browser and navigate to `http://localhost/your-folder-name/index.php`.

---

## 🔒 Security Note
This repository includes a `.gitignore` to prevent sensitive database credentials (`db.php`) from being leaked. Always use environment variables or a secure config file for production.

---

## 👤 Author
**Developed for Goldrich Construction and Trading**
*Homonhon Nickel Project • Logistics & Warehouse*
