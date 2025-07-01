# 🩸 RTP Blood Bank Management System

<div align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
</div>

<div align="center">
  <h3>🎯 Saving Lives Through Technology</h3>
  <p><em>A comprehensive web-based blood bank management system designed to streamline blood donation processes and connect donors with recipients efficiently.</em></p>
</div>

---

## 🌟 Features

### 🔐 **User Authentication & Authorization**
- Secure user registration and login system
- Role-based access control (Admin, Donor, Staff)
- Password change functionality with validation
- Session management for secure access

### 🩸 **Blood Management**
- Real-time blood inventory tracking
- Blood type compatibility checking
- Donation history maintenance
- Blood request and allocation system

### 👥 **Donor Management**
- Comprehensive donor registration
- Donor profile management
- Search and filter donors by location, blood type
- Donation eligibility tracking

### 📊 **Administrative Features**
- Dashboard with key metrics and statistics
- User management and role assignment
- System monitoring and reporting
- Contact form for inquiries

### 🗺️ **Location Services**
- Interactive map integration for donor locations
- Proximity-based donor search
- Location-based blood bank finder

---

## 🚀 Quick Start

### Prerequisites
- **Web Server**: Apache/Nginx
- **PHP**: Version 7.4 or higher
- **Database**: MySQL 5.7 or higher
- **Browser**: Modern web browser with JavaScript enabled

### Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/ShyamSundaraChary/RTP-Blood-Bank-Management.git
   cd RTP-Blood-Bank-Management
   ```

2. **Database Setup**
   ```sql
   -- Import the SQL file located in /sql directory
   mysql -u your_username -p your_database_name < sql/blood_bank.sql
   ```

3. **Configuration**
   ```php
   // Update database configuration in config/database.php
   <?php
   $servername = "localhost";
   $username = "your_username";
   $password = "your_password";
   $dbname = "blood_bank_db";
   ?>
   ```

4. **Launch Application**
   - Place files in your web server directory
   - Access via `http://localhost/RTP-Blood-Bank-Management`

---

## 📁 Project Structure

```
RTP-Blood-Bank-Management/
├── 📄 Home.php              # Landing page
├── 📄 about.php             # About us page
├── 📄 contact.php           # Contact form
├── 📄 login.php             # User authentication
├── 📄 register.php          # User registration
├── 📄 profile.php           # User profile management
├── 📄 logout.php            # Session termination
├── 📄 change-password.php   # Password management
├── 📄 map.php               # Interactive map
├── 📄 search-donor.php      # Donor search functionality
├── 📁 admin/                # Administrative panel
├── 📁 css/                  # Stylesheets
├── 📁 js/                   # JavaScript files
├── 📁 images/               # Image assets
├── 📁 sql/                  # Database scripts
└── 📄 README.md             # Project documentation
```

---

## 🎨 Screenshots

<div align="center">
  <img src="images/dashboard-preview.png" alt="Dashboard" width="45%">
  <img src="images/donor-search.png" alt="Donor Search" width="45%">
</div>

---

## 🛠️ Technologies Used

| Technology | Purpose | Version |
|------------|---------|---------|
| **PHP** | Backend Logic | 7.4+ |
| **MySQL** | Database Management | 5.7+ |
| **HTML5** | Structure & Markup | Latest |
| **CSS3** | Styling & Responsive Design | Latest |
| **JavaScript** | Client-side Interactions | ES6+ |
| **Bootstrap** | UI Framework | 4.x |

---

## 👨‍💻 Development Team

<table align="center">
  <tr>
    <td align="center">
      <a href="https://github.com/ShyamSundaraChary">
        <img src="https://github.com/ShyamSundaraChary.png" width="100px;" alt="Shyam Sundara Chary"/><br />
        <sub><b>Shyam Sundara Chary</b></sub>
      </a><br />
      <sub>🚀 Project Lead & Full-Stack Developer</sub>
    </td>
    <td align="center">
      <a href="https://github.com/santhoshkrishna-2004">
        <img src="https://github.com/santhoshkrishna-2004.png" width="100px;" alt="Santosh Krishna"/><br />
        <sub><b>Santosh Krishna</b></sub>
      </a><br />
      <sub>💻 Backend Developer & Database Architect</sub>
    </td>
  </tr>
</table>

---

## 🌐 Key Functionalities

### For Donors 🤝
- **Easy Registration**: Simple sign-up process with medical history
- **Profile Management**: Update personal and medical information
- **Donation Tracking**: View donation history and next eligible date
- **Location Services**: Find nearby blood banks and donation centers

### For Recipients 🆘
- **Blood Search**: Find available blood types in your area
- **Request System**: Submit blood requirement requests
- **Real-time Updates**: Get notified about blood availability
- **Emergency Contacts**: Quick access to blood bank contacts

### For Administrators 👨‍⚕️
- **Inventory Management**: Track blood stock levels
- **User Management**: Manage donor and recipient accounts
- **Analytics Dashboard**: View donation trends and statistics
- **Report Generation**: Generate detailed reports for analysis

---

## 🔒 Security Features

- **SQL Injection Protection**: Prepared statements and input validation
- **XSS Prevention**: Output encoding and input sanitization
- **CSRF Protection**: Token-based form validation
- **Session Security**: Secure session handling and timeout
- **Password Encryption**: Hashed password storage

---

## 📱 Responsive Design

The application is fully responsive and optimized for:
- 💻 **Desktop**: Full-featured interface
- 📱 **Mobile**: Touch-friendly navigation
- 📋 **Tablet**: Optimized layout for medium screens

---

## 🤝 Contributing

We welcome contributions! Here's how you can help:

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/AmazingFeature`)
3. **Commit** your changes (`git commit -m 'Add some AmazingFeature'`)
4. **Push** to the branch (`git push origin feature/AmazingFeature`)
5. **Open** a Pull Request

### Contribution Guidelines
- Follow PSR coding standards
- Write clear commit messages
- Add comments for complex logic
- Test your changes thoroughly

---

## 📋 Future Enhancements

- [ ] 📧 Email notification system
- [ ] 📱 Mobile application (Android/iOS)
- [ ] 🔔 SMS alert integration
- [ ] 📊 Advanced analytics dashboard
- [ ] 🌍 Multi-language support
- [ ] 🩺 Medical history integration
- [ ] 🚨 Emergency alert system

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 📞 Support

Need help? We're here for you!

- 📧 **Email**: [shyamsundarachary@email.com](mailto:shyamsundarachary@email.com)
- 🐛 **Issues**: [GitHub Issues](https://github.com/ShyamSundaraChary/RTP-Blood-Bank-Management/issues)
- 💬 **Discussions**: [GitHub Discussions](https://github.com/ShyamSundaraChary/RTP-Blood-Bank-Management/discussions)

---

<div align="center">
  <h3>🌟 Star this repository if you found it helpful! 🌟</h3>
  <p>Made with ❤️ for the community</p>
  
  <a href="https://github.com/ShyamSundaraChary/RTP-Blood-Bank-Management">
    <img src="https://img.shields.io/github/stars/ShyamSundaraChary/RTP-Blood-Bank-Management?style=social" alt="GitHub stars">
  </a>
  <a href="https://github.com/ShyamSundaraChary/RTP-Blood-Bank-Management/fork">
    <img src="https://img.shields.io/github/forks/ShyamSundaraChary/RTP-Blood-Bank-Management?style=social" alt="GitHub forks">
  </a>
</div>

---

<div align="center">
  <sub>Built with 🩸 by the RTP Team | Connecting Donors, Saving Lives</sub>
</div>
