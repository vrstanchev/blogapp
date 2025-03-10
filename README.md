# BlogApp 🚀  
![Open Source](https://img.shields.io/badge/Open%20Source-💻-blue)  
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php)  
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql)  
![License](https://img.shields.io/badge/License-GPL-blue)  

A lightweight, open-source blogging platform built with **PHP 8.2**, **MySQL**, and **responsive HTML & CSS**.  

## 🚀 Project Setup  
Follow these steps to set up BlogApp:  

1. **Install XAMPP** (includes PHP, MySQL, and phpMyAdmin).  
2. **Import the database**:  
   - Open **phpMyAdmin**.  
   - Execute `blogapp.sql` to create the necessary tables.  
3. **Move project files**:  
   - Copy the root directory (`blogapp`) from the repository to `xampp/htdocs`.  
4. **Run the app**:  
   - Open your browser and go to: [`http://localhost/blogapp`](http://localhost/blogapp).  
5. **You're all set! 🎉**  

## ✅ Features  
### 🔹 Database Structure  
The **`blogapp`** database includes:  
- **Users** (username, hashed password [MD5], role: _premium_ / _basic_).  
- **Posts** (blog entries with title, content, timestamps).  
- **Comments** (user-generated comments under posts).  

### 🔹 Authentication System  
- Secure **login** and **registration** system.  
- User **roles**:  
  - **Premium**: Access to exclusive features.  
  - **Basic**: Standard user permissions.  

### 🔹 Frontend (UI/UX)  
- Built using **HTML & CSS** for a clean and simple design.  
- **Responsive design** implemented with **media queries** to support different screen sizes.  

### 🔹 Navigation Flow  
- **Home Page (index.php)**:  
  - Displays **all posts**.  
- **Admin Panel (admin.php)**:  
  - Search bar:  
    - **Filter posts by title** (e.g., `test-2`).  
    - **Filter posts by content** (search within post body).  
  - **Pagination**: Navigate between posts using **page numbers** from the navbar.  
  - Edit/Delete posts directly from the results.  
- **Profile Page**:  
  - **Update profile details** (e.g., username, password).  

### 🔹 PHP Naming Conventions  
- Follows a structured naming style, e.g., `$limited_results`, `$user_role`, etc.  

---

💡 **Want to contribute?** Fork the repo, submit a PR, and help improve BlogApp!  

📜 **License**: GPL  
