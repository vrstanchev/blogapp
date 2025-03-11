# BlogApp 🚀  
![Open Source](https://img.shields.io/badge/Open%20Source-💻-blue)  
![Git](https://img.shields.io/badge/git-%F0%9F%93%9A-FF6600.svg)  
![Linux](https://img.shields.io/badge/Developed%20on-Linux-FCC624?logo=linux)  
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php)  
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql)  
![XAMPP](https://img.shields.io/badge/XAMPP-8.2.12-FB7A24?logo=xampp)  
![License](https://img.shields.io/badge/License-GPL-blue)  
![Version](https://img.shields.io/badge/version-1.0-blue.svg)  


A lightweight, open-source blogging platform built with **PHP 8.2**, **MySQL**, and **responsive HTML & CSS**.  

## 🚀 Project Setup  

Follow these steps to set up BlogApp:  

1. **Install XAMPP 8.2.12** (includes PHP, MySQL, and phpMyAdmin).  
2. **Create an empty database**:  
   - Open **phpMyAdmin**.  
   - Create a new database named **`blogapp`**.  
3. **Import the database schema**:  
   - Select the **`blogapp`** database.  
   - Import `blogapp.sql` to create the necessary tables.  
4. **Move project files**:  
   - Copy the `blogapp` folder from the repository to `xampp/htdocs/`.  
5. **Start the server**:  
   - Open the XAMPP control panel and start **Apache** and **MySQL**.  
6. **Run the app**:  
   - Open your browser and go to [`http://localhost/blogapp`](http://localhost/blogapp).  
7. **You're all set! 🎉**  

## ✅ Features  

### 🔹 Modular Code Structure  
The project follows a modular approach, separating logic into reusable components:  

- **`user_logic.php`**: Handles user-related operations.  
  - `search_by()` → Search for users.  
  - `view_all()` → View all users.  
  - `pagination()` → Handles paginated results.  

### 🔹 Server-Side Operations  
These **PHP scripts** handle backend processing:  

- **User Management**:  
  - `add_user.php` → Adds a new user.  
  - `update_profile.php` → Updates user details.  
  - `delete_user.php` → Deletes a user.  
- **Post Management**:  
  - `add_post.php` → Creates a new blog post.  
  - `edit_post.php` → Edits an existing post.  
  - `delete_post.php` → Deletes a post.  
- **Comment Management**:  
  - `add_comment.php` → Adds a comment.  
  - `delete_comment.php` → Deletes a comment.  
- **Admin Panel**:  
  - `admin.php` → Manages posts and users.  

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
- **Responsive design** with **media queries** to support different screen sizes.  

### 🔹 Navigation Flow  
- **Home Page (`index.php`)**: Displays all posts.  
- **Admin Panel (`admin.php`)**:  
  - Search bar for filtering posts by title or content.  
  - **Pagination** for browsing posts.  
  - Edit/Delete posts directly.  
- **Profile Page**: Update user details.  

---

💡 **Want to contribute?** Fork the repo, submit a PR, and help improve BlogApp!  

📜 **License**: GPL  
