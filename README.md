# BlogApp 🚀  
![Open Source](https://img.shields.io/badge/Open%20Source-💻-blue)  
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php)  
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql)  
![License](https://img.shields.io/badge/License-GPL-blue)  

A lightweight, open-source blogging platform built with **PHP 8.2**, **MySQL**, and **responsive HTML & CSS**.  

## 🚀 Project Setup  
Follow these steps to set up BlogApp:  

1. **Install XAMPP** (includes PHP, MySQL, and phpMyAdmin).  
2. **Create an empty database**:  
   - Open **phpMyAdmin**.  
   - Create a new database named **`blogapp`**.  
3. **Import the database schema**:  
   - Select the **`blogapp`** database.  
   - Execute `blogapp.sql` to create the necessary tables.  
4. **Move project files**:  
   - Copy the root directory (`blogapp`) from the repository to `xampp/htdocs`.  
5. **Run the app**:  
   - Open your browser and go to: [`http://localhost/blogapp`](http://localhost/blogapp).  
6. **You're all set! 🎉**  

## ✅ Features  
### 🔹 Modular Code Structure  
The project is fully modular, separating logic into reusable components:  

- **`user_logic.php`**: Handles user-related operations, including:  
  - `search_by()` → Search for users.  
  - `view_all()` → View all users.  
  - `pagination()` → Handles paginated results.  
  - `add_user()` → Adds a new user.  

### 🔹 Server-Side Operations  
These **PHP scripts** handle backend processing:  

- **User Management**:  
  - `add_user.php` → Adds a new user to the database.  
  - `update_profile.php` → Updates user profile information.  
  - `delete_user.php` → Deletes a user from the database.  
- **Post Management**:  
  - `add_post.php` → Allows users to create a new blog post.  
  - `edit_post.php` → Edits an existing post.  
  - `delete_post.php` → Deletes a post from the database.  
- **Comment Management**:  
  - `add_comment.php` → Adds a comment to a post.  
  - `delete_comment.php` → Deletes a comment.  
- **Admin Panel**:  
  - `admin.php` → Manages posts and users, including searching, filtering, and pagination.  
  - `search_posts.php` → Filters posts by title or content.  

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
